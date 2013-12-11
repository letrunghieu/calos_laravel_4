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

	$activity = Activity::find($id);
	if (!$activity)
	    return Redirect::action('ActivityController@getActivity', array($id));
	/* @var $activity Activity */
	if (Input::get('mark-complete'))
	{
	    $completedComment = trim(Input::get('complete-comment'));
	    $rating = Input::get('assignee-rating');
	    $progress = Input::get('confirmed-progress');
	    $isTaskContinue = Input::get('task-is-continue');
	    $nextAssigneeId = Input::get('next-assignee');

	    $assignees = $activity->assignees;
	    $activity->percentage = $progress;
	    $activity->save();
	    for ($i = 1; $i < $assignees->count(); $i++)
	    {
		$progress -= $assignees[$i]->pivot->task_percentage;
	    }
	    if ($progress < 0)
		$progress = 0;
	    
//	    var_dump($completedComment, $rating, $progress); die();
	    if ($isTaskContinue && $nextAssigneeId)
		$activity->assignTo($nextAssigneeId, $rating, $progress, $completedComment);
	    else
		$activity->complete($rating, $progress, $completedComment);
	    return Redirect::action('ActivityController@getActivity', array($id));
	}
    }

}

?>
