<?php

class Vacancy extends Eloquent
{
    public $timestamps = true;
    protected $softDelete = true;

    public function unit()
    {
        return $this->belongsTo('Unit');
    }

    public function roles()
    {
        return $this->belongsToMany('Role');
    }

}