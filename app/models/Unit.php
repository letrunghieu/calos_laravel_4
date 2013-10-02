<?php

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

    public function parent()
    {
        return $this->belongsTo('Unit', 'parent_id');
    }

    public function activities()
    {
        return $this->hasMany('Activity');
    }

}