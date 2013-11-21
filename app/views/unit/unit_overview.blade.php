<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$unitLeader = $unit->getLeader();
?>
@section('second-navbar')
<div id='second-navbar'>
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
	<div class="member leader box">
	    @if ($unitLeader)
	    <div class='member-avatar pull-left'>
		{{ Gravatar::image($unitLeader->email, $unitLeader->first_name, array('class' => 'avatar img-circle')) }}
	    </div>
	    <div class='member-profile pull-left'>
		<span class='full-name'>{{ $unitLeader->fullName() }}</span><br />
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
    </section>
</div>
@stop
