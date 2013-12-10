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
?>
@section('second-navbar')
<div id='second-navbar'>

</div>
@stop

@section('content')
<div id='wrapper'>
    <section id="activity">
	<div class='unit'>
	    <ol class="breadcrumb">
		<li><a href="{{URL::action('UnitController@getUnitOverview', array($unit->id))}}">{{$unit->name}}</a></li>
		<li><a href="{{URL::action('UnitController@getUnitActivities', array($unit->id))}}">{{trans('activity.activities')}}</a></li>
	    </ol>

	</div>
	<div class="item activity">
	    <div class='row'>
		<div class='col-sm-6 personel'>
		    <div class='holder'>
			{{HTML::image(Gravatar::src($holder->email, 24), $holder->fullName(), array('class' => 'img-circle'))}}
			{{HTML::link('#', $holder->fullName())}}
			{{trans('activity.start holding from :time', array('time' => uiTimeTag(new Carbon\Carbon($act->holding_time))))}}
		    </div>
		    @if (!$assignees->isEmpty())
		    <div class='assignee'>
			{{HTML::image(Gravatar::src($assignees->first()->email, 24), $assignees->first()->fullName(), array('class' => 'img-circle'))}}
			{{HTML::link('#', $assignees->first()->fullName())}}
			{{trans('activity.assigned at :time', array('time' => uiTimeTag(new Carbon\Carbon($assignees->first()->pivot->created_at))))}}
		    </div>
		    @endif
		</div>
		<div class='col-sm-6 time'>
		    <div class='deadline'>
			{{trans('activity.deadline :time', array('time' => uiTimeTag(new Carbon\Carbon($act->deadline), 'Y-m-d H:i')))}}
		    </div>
		    <div class='current-progress'>
			<p>{{trans('activity.progress :percent', array('percent' => $act->percentage))}}</p>
			<div class="progress">
			    <div class="progress-bar" role="progressbar" aria-valuenow="{{$act->percentage}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$act->percentage}}%;"></div>

			</div>
		    </div>

		</div>
	    </div>
	</div>
	<div class='description'>
	    {{$descr}}
	</div>
	<div class='mark-complete'>
	    <h3>{{trans('activity.mark this task complete')}}</h3>
	    <p class='description'>
		{{trans('activity.help.if you think this task is no longer need review')}}
	    </p>
	    <div id="complete-comment">

	    </div>
	    <div>
		<form action='{{URL::current()}}' method='post'>
		    <div class="hidden">
			<textarea name="complete-comment" id="txt-complete-comment"></textarea>
		    </div>
		    <input type='submit' class='btn btn-primary' name='mark-complete' value='{{trans("activity.mark complete")}}'/>
		</form>
		<script>
		    var _epic_editor_ = 'complete-comment';
		</script>
	    </div>
	</div>
    </section>
</div>
@stop