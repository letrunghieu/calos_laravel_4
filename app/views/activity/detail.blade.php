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
			    <!--<div class="progress-bar" role="progressbar" aria-valuenow="{{$act->percentage}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$act->percentage}}%;"></div>-->

			</div>
		    </div>

		</div>
	    </div>
	</div>
	<div class='description'>
	    {{$descr}}
	</div>
	@if ($assignees->isEmpty())

	@else
	<div class='mark-complete'>
	    <h3>{{trans('activity.mark this task complete')}}</h3>
	    <p class='description'>
		{{trans('activity.help.if you think this task is no longer need review')}}
	    </p>

	    <div>
		<form action='{{URL::current()}}' method='post' class="form">
		    <div class="hidden">
			<textarea name="complete-comment" id="txt-complete-comment"></textarea>
		    </div>

		    <div class="form-group">
			<label>{{trans('activity.label.rating for :name', array('name' => $assignees->first()->first_name))}}</label>
		    </div>
		    <div class='form-group'>
			<label>{{trans('activity.label.comment for :name', array('name' => $assignees->first()->first_name))}}</label>    
			<div id="complete-comment"></div>
		    </div>
		    <div class='checkbox'>
			<input type='hidden' name='next-assignee' />
			<label>
			    <input type='checkbox' name='task-is-continue' /> 
			    {{trans('activity.label.choose next assignee')}}
			    <span id='next-assignee'></span>
			</label>
		    </div>
		    <input type='submit' class='btn btn-primary' name='mark-complete' value='{{trans("activity.mark complete")}}'/>
		</form>
		<script>
		    var _epic_editor_ = 'complete-comment';
		</script>
	    </div>
	</div>
	@endif
	<div class='assigning-history'>
	    <h3>{{trans('activity.this task assigning history')}}</h3>
	    @foreach($assignees as $asg)
	    <div class='item assignee'>
		<div class='rating'>
		    <span class='static-star'></span>
		    <span class='static-star'></span>
		    <span class='static-star'></span>
		    <span class='static-star on'></span>
		    <span class='static-star on'></span>
		</div>
	    </div>
	    @endforeach
	</div>
    </section>
</div>
@stop