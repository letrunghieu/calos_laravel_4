<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Link
 *
 * @author TrungHieu
 */
class Link extends Eloquent
{
    public $timestamps = false;
    protected $softDelete = false;
    protected static $unguarded = true;
}

?>
