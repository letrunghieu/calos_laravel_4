<?php

/**
 * Hold the information about each unit
 * 
 * @property integer $id The unit id
 * @property string $name The name of this unit
 * @property string $description The description of this unit
 * @property integer $depth The depth of this unit
 * @property integer $site_id The id of the site of this unit
 * @property string $icon_path The path to the icon of this unit
 * @property Carbon\Carbon $created_at The time when this unit is created
 * @property Carbon\Carbon $updated_at The time of the last update
 * @property Carbon\Carbon $deleted_at The time of the last deletion
 * @property array|Vacancy $vacancies The list of its vacancies
 * @property array|Unit $children The list of its children units
 * @property Unit $parentUnit The parent unit of this unit
 * @property array|Activity $activities The list of activities of this unit
 * 
 */
class Unit extends Eloquent
{
    public $timestamps = true;
    protected $softDelete = true;

    public function vacancies()
    {
	return $this->hasMany('Vacancy');
    }

    public function children()
    {
	return $this->hasMany('Unit', 'parent_id');
    }

    public function parentUnit()
    {
	return $this->belongsTo('Unit', 'parent_id');
    }

    public function activities()
    {
	return $this->hasMany('Activity');
    }
    
    public function announcements()
    {
	return $this->belongsToMany('Announcement', 'announcement_unit')->withTimestamps();
    }

    public function countMember()
    {
	$memberVancancy = $this->vacancies()->getQuery()
		->where('vacancies.order', '=', Vacancy::ORDER_MEMBER)
		->first();
	if (!$memberVancancy)
	    return 0;
	return $memberVancancy->users()->getQuery()->count();
    }

    public function getLeader()
    {
	$leaderVacancy = $this->vacancies()->getQuery()
		->where('vacancies.order', '=', Vacancy::ORDER_LEADER)
		->first();
	if (!$leaderVacancy)
	    return null;
	$leader = $leaderVacancy->users;
	if ($leader->isEmpty())
	    return null;
	return $leader->first();
    }

    public function members()
    {
	$memberVacancy = $this->vacancies()->getQuery()
		->where('vacancies.order', '=', Vacancy::ORDER_MEMBER)
		->first();
	if (!$memberVacancy)
	    return array();
	return $memberVacancy->users;
    }

    public function addMember($members)
    {
	if (is_a($members, 'Illuminate\Database\Eloquent\Model'))
	    $members = array($members);
	$memberVacancy = $this->vacancies()->getQuery()
		->where('vacancies.order', '=', Vacancy::ORDER_MEMBER)
		->first();
	if (!$memberVacancy)
	    return false;
	foreach ($members as $m)
	{
	    $memberVacancy->users()->save($m);
	}
	return true;
    }

    public function setLeader($user)
    {
	$leaderVacancy = $this->vacancies()->getQuery()
		->where('vacancies.order', '=', Vacancy::ORDER_LEADER)
		->first();
	if (!$leaderVacancy)
	    return null;
	$leaderVacancy->users()->detach();
	$leaderVacancy->users()->save($user);
    }
    
    public function removeLeader()
    {
	$leaderVacancy = $this->vacancies()->getQuery()
		->where('vacancies.order', '=', Vacancy::ORDER_LEADER)
		->first();
	if (!$leaderVacancy)
	    return null;
	DB::table('user_vacancy')->where('vacancy_id', '=', $leaderVacancy->id)->delete();
    }
    
    /**
     * 
     * @param type $title
     * @param type $content
     * @param \User $creator
     * @param Carbon\Carbon $deadline
     * @param Activity $parent
     * @param integer $type
     * @param Carbon\Carbon $startDate
     * @return Activity
     */
    public function createActivity($title, $content, \User $creator, Carbon\Carbon $deadline, Activity $parent = null, $type = Activity::ACTIVITY_TYPE_ACTIVITY, Carbon\Carbon $startDate = null)
    {
	if (!$startDate)
	{
	    $startDate = Carbon\Carbon::now();
	}
	$activity = Activity::create(array(
	    'title' => $title,
	    'content' => $content,
	    'type' => $type,
	    'deadline' => $deadline,
	    'creator_id' => $creator->id,
	    'unit_id' => $this->id,
	    'percentage' => 0,
	    'parent_id' => $parent ? $parent->id : null,
	    'start_time' => $startDate,
	));
	
	if ($parent)
	    $activity->top_most_id = $parent->top_most_id;
	else
	    $activity->top_most_id = $activity->id;
	$activity->save();
	
	return $activity;
    }

    public static function create(array $attributes)
    {
	$obj = parent::create($attributes);
	if ($obj)
	{
	    Vacancy::create(array(
		'name' => trans('organization.vacancy.member'),
		'order' => Vacancy::ORDER_MEMBER,
		'unit_id' => $obj->id
	    ));
	    Vacancy::create(array(
		'name' => trans('organization.vacancy.leader'),
		'order' => Vacancy::ORDER_LEADER,
		'unit_id' => $obj->id
	    ));
	}
	return $obj;
    }

    /**
     * 
     * @param integer $id
     * @return Unit
     */
    public static function getOrganization($id = null)
    {
	$query = Unit::where('parent_id', '=', 0);
	if (!$id)
	    return $query->first();
	else
	    return $query->where('site_id', '=', $id)->first();
    }
    
    public static function getUnitsWithLeaders()
    {
	$units = static::all();
	$leaders = User::leftJoin('user_vacancy', 'users.id', '=', 'user_vacancy.user_id')
		->leftJoin('vacancies', 'user_vacancy.vacancy_id', '=', 'vacancies.id')
		->where('vacancies.order', '=', Vacancy::ORDER_LEADER)
		->whereNull('user_vacancy.deleted_at')
		->whereNull('users.deleted_at')
		->groupBy('vacancies.unit_id')
		->orderBy('vacancies.unit_id')
		->get(array(
		    'users.*',
		    'vacancies.unit_id',
		    'user_vacancy.vacancy_id',
		    'user_vacancy.created_at as assigned_at'
		));
	$result = array();
	foreach($units as $unit)
	{
	    $result[$unit->id]['unit'] = $unit;
	    $result[$unit->id]['leader'] = null;
	}
	foreach($leaders as $leader)
	{
	    $result[$leader->unit_id]['leader'] = $leader;
	}
	return $result;
    }

}