<?php
/**
 * @var array|Announcement $announcements
 */
?>
@if (!$activities->isEmpty())
<div id="activities">
    <div class="list activities">
	@foreach($activities as $act)
	<div class="item activity">
	    <div class="row title">
		<div class="col-xs-12">
		    <h3>
			<i class="fa fa-circle-o"></i>  
		    {{ HTML::link(URL::action('ActivityController@getActivity', array($act->id)), $act->title) }}
		    </h3>
		</div>
	    </div>
	    <div class='row'>
		<div class='col-sm-6 personel'>
		    <div class='holder'>
			{{HTML::image(Gravatar::src($act->holder->email, 24), $act->holder->fullName(), array('class' => 'img-circle'))}}
			{{HTML::link('#', $act->holder->fullName())}}
			{{trans('activity.start holding from :time', array('time' => uiTimeTag(new Carbon\Carbon($act->holding_time))))}}
		    </div>
		    @if (!$act->assignees->isEmpty())
		    <div class='assignee'>
			{{HTML::image(Gravatar::src($act->assignees->first()->email, 24), $act->assignees->first()->fullName(), array('class' => 'img-circle'))}}
			{{HTML::link('#', $act->assignees->first()->fullName())}}
			{{trans('activity.assigned at :time', array('time' => uiTimeTag(new Carbon\Carbon($act->assignees->first()->pivot->assigning_time))))}}
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
			    <div class="progress-bar" role="progressbar" aria-valuenow="{{$act->percentage}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$act->percentage}}%;">
			    </div>
			</div>
		    </div>

		</div>
	    </div>
	</div>
	@endforeach
    </div>
</div>
@endif
