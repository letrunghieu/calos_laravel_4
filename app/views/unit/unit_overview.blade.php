<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
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
	<div class="member leader">
	    <div class='pull-left'>

	    </div>
	    <div class='pull-right'>

	    </div>
	    <div class='clearfix'></div>
	</div>
    </section>
</div>
@stop
