<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/* @var $activity Activity */
$creator = $activity->creator;
$holder = $activity->holder;
$assignees = $activity->assignees;
$unit = $activity->unit;
$act = $activity;
$descr = \Michelf\MarkdownExtra::defaultTransform($activity->content);
$minPercentage = 0;
$deadline = new Carbon\Carbon($activity->deadline);
for ($i = 1; $i < $assignees->count(); $i++)
{
    $minPercentage += $assignees[$i]->pivot->task_percentage;
}
?>
@section('second-navbar')
<div id='second-navbar'>

</div>
@stop

@section('content')
<div id='wrapper'>
    <section id="activity">
	<form action='{{URL::current()}}' method='post' class="form">
	    <div class="hidden">
		<textarea name="activity-content" id="txt-activity-content">{{$activity->content}}</textarea>
	    </div>

	    <div class="form-group">
		<label>{{trans('activity.label.task name')}}</label>
		<div>
		    <input type="text" name="activity-name" class="form-control" value="{{$activity->title}}"/>
		</div>
	    </div>
	    <div class='form-group'>
		<label>{{trans('activity.label.task description')}}</label>    
		<div id="activity-content"></div>
	    </div>
	    <div class="form-group row"> 
		<div class="col-xs-12 col-sm-6"> 
		    <label class="control-label">{{trans('activity.label.date end')}}</label> 
		    <div class="input-group date" data-date="{{$deadline->format('d-M-Y H:i')}}" data-date-format="dd-mm-yyyy HH:ii" data-picker-position="top-left"> 
			<input class="form-control" type="text" name="activity-end" value="{{$deadline->format('d-m-Y H:i')}}"> 
			<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
		    </div> 
		</div> 
	    </div>
	    <div class="form-group row"> 
		<div class="col-xs-12 col-sm-6"> 
		    <label class="control-label">{{trans('activity.label.date start')}}</label> 
		    <div class="input-group date" data-date="{{$activity->created_at->format('d-M-Y H:i')}}" data-date-format="dd-mm-yyyy HH:ii" data-picker-position="top-left"> 
			<input class="form-control" type="text"  name="activity-start" value="{{$activity->created_at->format('d-m-Y H:i')}}"> 
			<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
		    </div> 
		</div> 
	    </div>

	    <input type='submit' class='btn btn-primary' name='update' value='{{trans("global.update")}}'/>
	</form>
	<script>
	    var _epic_editor_ = 'activity-content';
	</script>
    </section>
</div>
@stop