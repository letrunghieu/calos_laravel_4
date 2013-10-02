<?php

class Announcement extends Eloquent
{
    public $timestamps = true;

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

}