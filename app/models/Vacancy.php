<?php

/**
 * Hold the information of a vacancy inside an organization unit
 * 
 * @property integer $id Description
 * @property string $name Description
 * @property integer $order Description
 * @property integer $unit_id Description
 * @property DateTime $created_at Description
 * @property DateTime $updated_at Description
 * @property DateTime $deleted_at Description
 * 
 * @property Unit $unit Description
 * @property array $roles Description
 */
class Vacancy extends Eloquent
{

    const ORDER_MEMBER = 0;
    const ORDER_LEADER = 1000;
    const ORDER_SITE_ADMIN = 999;

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
    
    public function users()
    {
	return $this->belongsToMany('User');
    }

    public static function getMemberVacancy($unitId)
    {
	return static::getByOrder($unitId, static::ORDER_MEMBER);
    }

    public static function getLeaderVacancy($unitId)
    {
	return static::getByOrder($unitId, static::ORDER_LEADER);
    }

    public static function getByOrder($unitId, $order)
    {
	return Vacancy::where('unit_id', '=', $unitId)
			->where('order', '=', $order)
			->first();
    }

}