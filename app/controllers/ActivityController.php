<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ActivityController
 *
 * @author TrungHieu
 */
class ActivityController extends BaseController
{
    protected $layout = 'layouts.front-end-logged';
    
    public function getActivity($id)
    {
	$data = array();
	$activity = Activity::find($id);
	if ($activity && !$activity->deleted_at && !$activity->parent_deleted)
	{
	    $data['activity'] = $activity;
	}
	addBodyClasses('logged activity activity-detail');
	$this->layout->title = $activity->title;
	$this->layout->pageHeader = $activity->title;
	return $this->layout->nest('content', 'activity.detail', $data);
    }
    
    public function postActivity($id)
    {
	
    }
}

?>
