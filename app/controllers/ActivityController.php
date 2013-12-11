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
	if (Input::get('choose-assignee'))
	{
	    $nextAssigneeId = Input::get('next-assignee');

	    $assignees = $activity->assignees;
	    $activity->assignTo($nextAssigneeId);
	    return Redirect::action('ActivityController@getActivity', array($id));
	}
    }
    
    public function getUpdateActivity($id)
    {
	$data = array();
	$activity = Activity::find($id);
	if ($activity && !$activity->deleted_at && !$activity->parent_deleted)
	{
	    $data['activity'] = $activity;
	}
	addBodyClasses('logged activity activity-update');
	$this->layout->title = trans('activity.title.update :name', array('name' => $activity->title));
	$this->layout->pageHeader = trans('activity.title.update :name', array('name' => $activity->title));
	return $this->layout->nest('content', 'activity.update', $data);
    }
    
    public function postUpdateActivity($id)
    {
	$data = array();
	$activity = Activity::find($id);
	if (!$activity)
	    return Redirect::action ('ActivityController@getUpdateActivity', array($id));
	/* @var $activity Activity */
	if (Input::get('update'))
	{
	    $title = trim(Input::get('activity-name'));
	    $descr = trim(Input::get('activity-content'));
	    $deadline = new Carbon\Carbon(Input::get('activity-end'));
	    $activity->title = $title;
	    $activity->content = $descr;
	    $activity->deadline = $deadline;
	    if (Input::get('activity-start'))
	    {
		$startDate = new Carbon\Carbon (Input::get ('activity-start'));
		$activity->created_at = $startDate;
	    }
	    $activity->save();
	    return Redirect::action ('ActivityController@getUpdateActivity', array($id));
	}
    }

}

?>
