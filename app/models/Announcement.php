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
    
    public function units()
    {
	return $this->belongsToMany('Unit', 'announcement_unit')->withTimestamps();
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
	
	foreach($unitIds as $id)
	{
	    $announcement->units()->attach($id);
	}
	
	return $announcement;
    }

}