<?php

class User extends Eloquent
{
    public $timestamps = true;
    protected $softDelete = true;

    public function metas()
    {
        return $this->belongsToMany('Meta', 'metavalues', 'subject_id', 'meta_id')->withPivot('value')->withTimestamps();
    }

    public function vacancies()
    {
        return $this->belongsToMany('Vacancy')->withTimestamps();
    }

    public function announcements()
    {
        return $this->hasMany('Announcement', 'creator_id');
    }

    public function activities()
    {
        return $this->hasMany('Activity', 'assignee_id');
    }

}