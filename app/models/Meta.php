<?php

class Meta extends Eloquent
{
    public $timestamps = false;
    
    public function site()
    {
	return $this->belongsTo('Unit', 'site_id');
    }

}