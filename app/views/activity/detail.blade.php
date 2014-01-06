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
for ($i = 1; $i < $assignees->count(); $i++)
{
    $minPercentage += $assignees[$i]->pivot->task_percentage;
}
?>
@section('second-navbar')
<div id='second-navbar'>
    <div class='list-group'>
	<a class='list-group-item active' href='{{ URL::action("ActivityController@getActivity", array($activity->id)) }}'>{{trans('activity.detail')}}</a>
	<a class='list-group-item' href='{{ URL::action("ActivityController@getUpdateActivity", array($activity->id)) }}'>{{trans('activity.edit')}}</a>
	<a class='list-group-item' href='{{ URL::action("ActivityController@getChildActivities", array($activity->id)) }}'>{{trans('activity.children')}}</a>
	<a class='list-group-item' href='{{ URL::action("ActivityController@getGanttView", array($activity->id)) }}'>{{trans('activity.gantt view')}}</a>
    </div>
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
	    <div class="progress progress-striped">
		<div class="progress-bar " id='task-progress' role="progressbar" aria-valuenow="{{$act->percentage}}" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $act->percentage ?>%;"></div>
	    </div>
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
			<input type="text" value="" id='current-prog' class='col-xs-12' data-slider-min="{{$minPercentage}}" data-slider-max="100" data-slider-step="1" data-slider-value="{{$activity->percentage}}" data-activity-id="{{$activity->id}}">
		    </div>

		</div>
	    </div>
	</div>
	<div class='description'>
	    <div class="content">
		{{$descr}}
	    </div>
	    <div class="meta">
		<div class="parent-activity">

		    <?php
		    $parent = $activity->parent_activity()->getResults();
		    if ($parent)
		    {
			echo '<i class=" fa fa-square"></i>  ';
			$parenttAct = HTML::linkAction('ActivityController@getActivity', $parent->title, array($parent->id));
			echo trans('activity.the father task :name', array('name' => $parenttAct));
		    }
		    ?>
		</div>
		<div class="root-activity">
		    <?php
		    $root = $activity->root_activity()->getResults();
		    if ($root && $root->id != $activity->id && (!$parent || ($root->id != $parent->id)))
		    {
			echo '<i class=" fa fa-square"></i> ';
			$rootAct = HTML::linkAction('ActivityController@getActivity', $root->title, array($root->id));
			echo trans('activity.belong the root activity :name', array('name' => $rootAct));
		    }
		    ?>
		</div>
		<div class="created_at">
		    <i class=" fa fa-square"></i>
		    <?php
		    $creator = HTML::linkAction('UserController@getUserQR', $activity->creator->fullName(), array($activity->creator->id));
		    $created_at = uiTimeTag($activity->created_at, 'd-m-Y H:i:s');
		    echo trans('activity.created by :name at :time', array('name' => $creator, 'time' => $created_at));
		    ?>
		</div>
	    </div>
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
			<div>
			    <input type="text" value="" id='confirmed-progress' class='col-xs-12 col-sm-6' name='confirmed-progress' data-slider-min="{{$minPercentage}}" data-slider-max="100" data-slider-step="1" data-slider-value="{{$activity->percentage}}">
			</div>
		    </div>
		    <div class="form-group">
			<label>{{trans('activity.label.rating for :name', array('name' => $assignees->first()->first_name))}}</label>
			<div class="">
			    <input type="number" name="assignee-rating" id="assignee-rating" class="rating" data-clearable="{{trans('global.clear all')}}" />
			</div>
		    </div>
		    <div class='form-group'>
			<label>{{trans('activity.label.comment for :name', array('name' => $assignees->first()->first_name))}}</label>    
			<div id="complete-comment"></div>
		    </div>
		    <div class='checkbox'>
			<input type='hidden' name='next-assignee' id='next-assignee-id'/>
			<label>
			    <input type='checkbox' name='task-is-continue' id='task-is-continue' /> 
			    {{trans('activity.label.choose next assignee')}}
			    <em>({{trans('user.selected')}}: <span id='next-assignee'></span>)</em>
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
	    @if ($assignees->isEmpty())
	    <div class='no-assignee'>
		<form action='{{URL::current()}}' method='post' class="form">
		    <p>{{trans('activity.there is no assignee now, plese select a new assignee')}}</p>
		    <p>
			<input type='hidden' name='next-assignee' id='next-assignee-id'/>
			<a class='btn btn-mini btn-default choose-assignee'>{{trans('activity.label.choose new assignee')}}</a>
			<em>({{trans('user.selected')}}: <span id='next-assignee'></span>)</em>
		    </p>
		    <input type='submit' class='btn btn-primary' name='choose-assignee' value='{{trans("activity.mark complete")}}'/>
		</form>
	    </div>
	    @endif
	    @foreach($assignees as $asg)
	    <div class='item assignee'>
		<div class='row'>
		    <div class='col-sm-9'>
			<div class='period'>
			    <?php
			    $start = $asg->pivot->created_at;
			    $end = $asg->pivot->completed_time ? new Carbon\Carbon($asg->pivot->completed_time) : null;
			    ?>
			    {{$start->format('d-m-Y H:i')}} - {{$end ? $end->format('d-m-Y H:i') : trans('global.now')}}
			</div>
			<div class='user'>
			    {{HTML::image(Gravatar::src($asg->email, 24), $asg->fullName(), array('class' => 'img-circle'))}}
			    <span class='name full-name'>{{HTML::link('#', $asg->fullName())}}</span>
			</div>
			@if($asg->pivot->completed_time)
			<div class='rating pull-left'>
			    @for($i = 0; $i < 5; $i++)
			    <span class='static-star {{(5-$i <= $asg->pivot->rating) ? "on" : ""}}'></span>
			    @endfor
			</div>
			<div class='clearfix'></div>
			<div class='comment'>
			    <i class="fa fa-quote-left pull-left fa-border"></i>
			    {{Michelf\MarkdownExtra::defaultTransform($asg->pivot->creator_comment)}}
			</div>
			@endif
		    </div>
		    <div class='col-sm-3'>
			@if($asg->pivot->completed_time)
			<div class='percentage'>
			    <span title='{{trans("activity.assignee percentage")}}' data-toggle='tooltip' data-placement='auto top'>{{$asg->pivot->task_percentage}}%</span>
			</div>
			@endif
		    </div>
		</div>
	    </div>
	    @endforeach
	</div>
    </section>
</div>
<div class="modal fade" id="select-user-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
	<div class="modal-content">
	    <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title">{{trans('user.select a user from this list')}}</h4>
	    </div>
	    <div class="modal-body">
		<table class="table table-bordered" id='user-list-table'>
		    <thead>
			<tr>
			    <th scope="col">#</th>
			    <th scope="col" class="nowrap"><i class="fa fa-user"></i> {{trans('user.member name')}}</th>
			    <th></th>
			    <th scope="col" class="nowrap"><i class="fa fa-check-square-o"></i> {{trans('global.select')}}</th>
			</tr>
		    </thead>
		    <tbody>

		    </tbody>
		</table>
		<script>
		    var _show_user_list_ = true;
		    var _unit_id_ = <?php echo $unit->id ?>;
		    var _list_format_ = "select-list";
		    var _selected_func_ = function(id, fullname, gravatar)
		    {
			$('#next-assignee-id').val(id);
			$('#next-assignee').html([gravatar, ' ', fullname].join(''));
			$('#select-user-modal').modal('hide');
		    };
		</script>
	    </div>
	</div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@stop