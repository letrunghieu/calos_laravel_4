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

    public function parentUnit()
    {
	return $this->belongsTo('Unit', 'parent_id');
    }

    public function activities()
    {
	return $this->hasMany('Activity');
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

}