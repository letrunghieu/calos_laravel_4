<?php

class Option extends Eloquent
{

    public $timestamps = true;
    protected static $unguarded = true;
    

    public static function get($key, $default = null)
    {
	$option = static::where('key', '=', $key)->first();
	if (!$option)
	{
	    $option = static::create(array('key' => $key, 'value' => $default));
	}
	return $option;
    }

}