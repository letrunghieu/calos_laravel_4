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
    
    public function countMember()
    {
	$memberVancancy =  $this->vacancies()->getQuery()
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
	$leader  = $leaderVacancy->users;
	if ($leader->isEmpty())
	    return null;
	return $leader->first();;
    }

    public static function create(array $attributes)
    {
	$obj = parent::create($attributes);
	if ($obj)
	{
	    Vacancy::create(array(
		'name' => trans('organization.vacancy.member'),
		'order' => 1000,
		'unit_id' => $obj->id
	    ));
	    Vacancy::create(array(
		'name' => trans('organization.vacancy.leader'),
		'order' => 0,
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

}