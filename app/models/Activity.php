<?php

/**
 * A class holds information of an activity(a task or a project)
 */
class Activity extends Eloquent
{
    public $timestamps = true;
    protected $softDelete = true;

    public function assignee()
    {
        return $this->belongsTo('User', 'assignee_id');
    }
    
    public function creator()
    {
	return $this->belongsTo('User', 'creator_id');
    }

    public function unit()
    {
        return $this->belongsTo('Unit');
    }

    public function children()
    {
        return $this->hasMany('Activity', 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo('Activity', 'parent_id');
    }

}