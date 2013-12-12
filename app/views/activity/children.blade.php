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
	<section id="activities">
	    <p class="summary">
		{{ trans('activity.show activities from :from to :to out of :total', array('from' => $children->getFrom(), 'to' => $children->getTo(), 'total' => $children->getTotal())); }}
	    </p>
	    <div class="items">
		@include('shared/activity_list', array('activities' => $children))
	    </div>
	    <div>
		{{ $children->links(); }}
	    </div>
	</section>
    </section>
</div>
@stop