<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var_dump($activities)
?>
@section('second-navbar')
<div id='second-navbar'>
    <div id='second-navbar'>
	<div class='list-group'>
	    <a class='list-group-item' href='{{ URL::action("UnitController@getUnitOverview", array($unit->id)) }}'>{{trans('organization.unit.overview')}}</a>
	    <a class='list-group-item active' href='{{ URL::action("UnitController@getUnitActivities", array($unit->id)) }}'>{{trans('organization.unit.activities')}}</a>
	    <a class='list-group-item' href='{{ URL::action("UnitController@getUnitMembers", array($unit->id)) }}'>{{trans('organization.unit.members')}}</a>
	    <a class='list-group-item' href='{{ URL::action("UnitController@getUnitAnnouncements", array($unit->id)) }}'>{{trans('organization.unit.announcements')}}</a>
	</div>
    </div>
</div>
@stop

@section('content')
<div id='wrapper'>
    <section id="activities">
	<p class="summary">
	    {{ trans('activity.show activities from :from to :to out of :total', array('from' => $activities->getFrom(), 'to' => $activities->getTo(), 'total' => $activities->getTotal())); }}
	</p>
	<div class="items">
	    @include('shared/activity_list', array('activities' => $activities))
	</div>
	<div>
	    {{ $activities->links(); }}
	</div>
    </section>
</div>
@stop
