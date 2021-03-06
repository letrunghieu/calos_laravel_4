<?php

/**
 * A class holds information of an activity(a task or a project)
 * 
 * @property integer $id The task id
 * @property string $title The task title
 * @property string $content The task content
 * @property string $creator_comment The comment of the creator
 * @property integer $type The type of this task
 * @property Carbon\Carbon $deadline The deadline
 * @property integer $holder_id The id of the holder
 * @property Carbon\Carbon $holding_time The time when this task is holded by some one
 * @property integer $assignee_id The id of the assigned
 * @property Carbon\Carbon $assigning_time The time when this task is assigned
 * @property Carbon\Carbon $compeleted_time The time when this task is marked as completed by the creator
 * @property integer $percentage The percentage of completement
 * @property integer $parent_id The id of parent activity
 * @property integer $creator_id The id of the creator
 * @property integer $unit_id The id of the unit this task belong to
 * @property boolean $parent_deleted Whether the parent task is deleted
 * @property integer $recur_id The id for recursion
 * @property Carbon\Carbon $created_at When this task is created
 * @property Carbon\Carbon $updated_at When this task is last updated
 * @property Carbon\Carbon $deleted_at When this task is 'soft delete'
 * @property integer $top_most_id The id of the top most activity
 * @property-read User $assignee The person assigned this task
 * @property-read User $creator The person create this task
 * @property-read Unit $unit The unit this task belong to
 * @property-read User $holder The person hold this activity
 * @property-read array|Activity $children The child tasks
 * @property-read Activity $parent_activity The parent task
 * @property-read Activity $root_activity Description
 * 
 */
class Activity extends Eloquent
{

    const ACTIVITY_TYPE_ACTIVITY = 0;
    const ACTIVITY_TYPE_TASK = 1;
    const ACTIVITY_TYPE_TASK_RECUR = 2;
    const ACTIVITY_TYPE_MILESTONE = 3;

    public $timestamps = true;
    protected $softDelete = true;

    public function assignees()
    {
	return $this->belongsToMany('User', 'activity_user')->withPivot(array('id', 'completed_time', 'task_percentage', 'creator_comment', 'rating'))->withTimestamps()->orderBy('activity_user.id', 'desc');
    }

    public function creator()
    {
	return $this->belongsTo('User', 'creator_id');
    }

    public function holder()
    {
	return $this->belongsTo('User', 'holder_id');
    }

    public function unit()
    {
	return $this->belongsTo('Unit');
    }

    public function children()
    {
	return $this->hasMany('Activity', 'parent_id');
    }

    public function parent_activity()
    {
	return $this->belongsTo('Activity', 'parent_id');
    }
    
    public function root_activity()
    {
	return $this->belongsTo('Activity', 'top_most_id');
    }

    /**
     * 
     * @param string $title
     * @param string $content
     * @param User $creator
     * @param Carbon\Carbon $startDate
     * @param Carbon\Carbon $deadline
     * @return \Activity
     */
    public function createTask($title, $content, User $creator, Carbon\Carbon $startDate, Carbon\Carbon $deadline, Unit $unit = null)
    {
	return $this->_createChild($title, $content, $creator, $deadline, Activity::ACTIVITY_TYPE_TASK, $startDate, $unit);
    }

    public function createMilestone($title, $content, User $creator, Carbon\Carbon $startDate, Unit $unit = null)
    {
	return $this->_createChild($title, $content, $creator, $startDate, Activity::ACTIVITY_TYPE_MILESTONE, $startDate, $unit);
    }

    public function hold($user_id = null)
    {
	if (!$user_id)
	    $this->holder_id = $this->creator_id;
	else
	    $this->holder_id = $user_id;
	$this->holding_time = Carbon\Carbon::now();
	return $this;
    }

    /**
     * 
     * @param integer $userId
     * @return \Activity
     */
    public function assignTo($userId, $rating = 0, $percentage = 0, $author_comment = '')
    {
	$this->_completeCurrentAssignee($percentage, $rating, $author_comment);
	$this->assignees()->attach($userId);
	return $this;
    }

    /**
     * 
     * @param integer $percent
     * @return \Activity
     */
    public function updateProgress($percent)
    {
	$this->percentage = $percent;
	return $this;
    }

    /**
     * 
     * @param string $comment
     * @return \Activity
     */
    public function complete($rating = 0, $percentage = 0, $author_comment = '')
    {
	$this->_completeCurrentAssignee($percentage, $rating, $author_comment);
	$this->completed_time = Carbon\Carbon::now();
	$this->save();
	return $this;
    }

    /**
     * 
     * @return \Activity
     */
    public function delete()
    {
	parent::delete();
	$children = $this->children;
	foreach ($children as $child)
	{
	    $child->parentDelete();
	}
	return $this;
    }

    /**
     * 
     * @return \Activity
     */
    public function parentDelete()
    {
	$this->parent_deleted = true;
	$this->save();
	$children = $this->children;
	foreach ($children as $child)
	{
	    $child->parentDelete();
	}
	return $this;
    }
    
    public function toGanttData()
    {
	$deadline = new Carbon\Carbon($this->deadline);
	$startDate = new Carbon\Carbon($this->start_time);
	$data = array(
	    'text' => $this->title,
	    'start_date' => $startDate->startOfDay()->format('d-m-Y'),
	    'duration' => $deadline->startOfDay()->diffInDays($startDate) + 1,
	    'id' => $this->id,
	    'progress' => $this->percentage / 100,
	    'open' => true,
	    'type' => $this->type
	);
	if ($this->parent_id)
	    $data['parent'] = $this->parent_id;
	$result = array($data);
	$children = $this->children()->getResults();
	foreach($children as $child)
	{
	    $childData = $child->toGanttData();
	    foreach($childData as $d)
	    {
		$result[] = $d;
	    }
	}
	return $result;
    }

    /**
     * 
     * @param string $title
     * @param string $content
     * @param User $creator
     * @param Carbon\Carbon $deadline
     * @param integer $type
     * @param Carbon\Carbon $startDate
     * @return Activity
     */
    private function _createChild($title, $content, User $creator, Carbon\Carbon $deadline, $type = Activity::ACTIVITY_TYPE_ACTIVITY, Carbon\Carbon $startDate = null, Unit $unit = null)
    {
	if (!$unit)
	    $unit = $this->unit;
	else
	    $leader = $unit->getLeader();
	$activity = $unit->createActivity($title, $content, $creator, $deadline, $this, $type, $startDate);
	$activity->top_most_id = $this->top_most_id;
	if (isset($leader) && $leader)
	    $activity->hold($leader->id)->save();
	else
	    $activity->hold($creator->id)->save();
	return $activity;
    }
    
    private function _completeCurrentAssignee($percentage, $rating, $author_comment)
    {
	$currentAssignee = $this->assignees()->getResults()->first();
	if ($currentAssignee)
	{
	    $assignee = Assignee::find($currentAssignee->pivot->id);
	    $assignee->task_percentage = $percentage;
	    $assignee->creator_comment = $author_comment;
	    $assignee->rating = $rating;
	    $assignee->completed_time = Carbon\Carbon::now();
	    $assignee->save();
	}
	return $this;
    }

}