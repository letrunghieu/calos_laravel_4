<?php

/**
 * Hold the information about a announcement
 * 
 * @property string $title The title of this announcement
 * @property string $content The content of this announcement
 * @property User $user The creator of this announcement
 * @property \Carbon\Carbon $created_at The time it is created
 * @property \Carbon\Carbon $updated_at The time it is updated
 * @property array|Comment $comments Comments on this announcement
 * @property array|object $viewers The users who have to read this announements
 */

class Announcement extends Eloquent
{
    public $timestamps = true;
    protected static $unguarded = true;

    public function creator()
    {
        return $this->belongsTo('User', 'creator_id');
    }

    public function site()
    {
        return $this->belongsTo('Unit', 'site_id');
    }

    public function viewers()
    {
        return $this->belongsToMany('User', 'user_announcement')->withPivot('read_time')->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany('Comment', 'subject_id');
    }
    
    public static function createNewAnnouncement($title, $body, $author, $unitIds) {
	$announcement = Announcement::create(array(
	    'title' => $title,
	    'content' => $body,
	    'creator_id' => $author->id,
	    'site_id' => 1,
	));
	if (!$announcement)
	    return false;
	
	$vacancies = Vacancy::where('order', '=', Vacancy::ORDER_MEMBER)
		->leftJoin('units', 'units.id', '=', 'vacancies.unit_id')
		->whereIn('units.id', $unitIds)
		->whereNull('units.deleted_at')
		->get();
	
	$vacancyIds = array();
	foreach($vacancies as $v)
	{
	    $vacancyIds[] = $v->id;
	}
	
	$readers = User::leftJoin('user_vacancy', 'users.id', '=', 'user_vacancy.id')
		->whereIn('user_vacancy.vacancy_id', $vacancyIds)
		->distinct()
		->get();
	
	foreach($readers as $reader)
	{
	    $announcement->viewers()->save($reader);
	}
	
	return $announcement;
    }

}