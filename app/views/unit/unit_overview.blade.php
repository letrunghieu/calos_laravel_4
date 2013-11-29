<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$unitLeader = $unit->getLeader();
$childUnits = $unit->children;
?>
@section('second-navbar')
<div id='second-navbar'>
    <div class='list-group'>
	<a class='list-group-item active' href='{{ URL::action("UnitController@getUnitOverview", array($unit->id)) }}'>{{trans('organization.unit.overview')}}</a>
	<a class='list-group-item' href='{{ URL::action("UnitController@getUnitActivities", array($unit->id)) }}'>{{trans('organization.unit.activities')}}</a>
	<a class='list-group-item' href='{{ URL::action("UnitController@getUnitMembers", array($unit->id)) }}'>{{trans('organization.unit.members')}}</a>
	<a class='list-group-item' href='{{ URL::action("UnitController@getUnitAnnouncements", array($unit->id)) }}'>{{trans('organization.unit.announcements')}}</a>
    </div>
</div>
@stop

@section('content')
<div id='wrapper'>
    <header id="organization-unit-header">
	<div class="organization-unit-icon">
	    <img src="{{asset('images/icon-organization-unit.png')}}" width="128" height="128"/>
	</div>
	<div>
	    <div class="bubble">
		{{$unit->description}}
	    </div>
	</div>
    </header>
    <section id="organization-unit-members">
	<h2>{{trans('organization.unit.leader')}}</h2>
	<div class="member media">
	    @if ($unitLeader)
	    <div class='member-avatar pull-left'>
		{{ Gravatar::image($unitLeader->email, $unitLeader->first_name, array('class' => 'avatar img-circle media-object')) }}
	    </div>
	    <div class='member-profile media-body'>
		<span class='full-name media-heading'>{{ $unitLeader->fullName() }}</span><br />
		<span class='email'><a href="mailto:{{$unitLeader->email}}">{{ $unitLeader->email }}</a></span><br />
		<span class='mobile-phone'>{{ $unitLeader->mobile_phone ? $unitLeader->mobile_phone : "" }}</span>
	    </div>
	    @else
	    <div class='member-avatar pull-left'>
		{{ Gravatar::image('','', array('class' => 'avatar empty img-circle')) }}
	    </div>
	    <div class='member-profile pull-left'>
		<span class='empty muted'>{{ trans('user.no leader here') }}</span>
	    </div>
	    @endif
	    <div class='clearfix'></div>
	</div>
	<div class='view-all-members'>
	    <a href='#'>({{ trans('user.view :number members in this unit', array('number' => $unit->countMember())) }})</a>
	</div>
    </section>
    <section id='organization-child-units'>
	<h2>{{ trans('organization.unit.child units') }}</h2>
	<ul class='media-list'>
	    @foreach($childUnits as $u)
	    <li class='unit media'>
		<div class='pull-left'>
		    <a href="{{ URL::action('UnitController@getUnitOverview', $u->id)}}">
			<img class='media-object img-circle' src="{{asset('images/icon-organization-unit.png')}}" width='40' height="40"/>
		    </a>
		</div>

		<div class='media-body'>
		    <a href="{{ URL::action('UnitController@getUnitOverview', $u->id)}}"><span class='media-heading unit-title'>{{$u->name}}</span></a> <br />
		    <span class="count-member">{{ trans('organization.:number members', array('number' => $u->countMember()))}}</span>
		</div>
	    </li>
	    @endforeach
	</ul>
    </section>
</div>
@stop
