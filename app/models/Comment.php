<?php

class Comment extends Eloquent
{

    public $timestamps = true;
    protected $softDelete = true;

    public function author()
    {
	return $this->belongsTo('User');
    }

    public function comments()
    {
	return $this->hasMany('Comment', 'parent_id');
    }

    public function parentComment()
    {
	return $this->belongsTo('Comment', 'parent_id');
    }

}