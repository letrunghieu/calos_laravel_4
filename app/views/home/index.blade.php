<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
@section('second-navbar')
<div id='second-navbar'>
    <div class='list-group'>
	    <a class='list-group-item' href='#new-update'>{{trans('tool.update.panel title')}}</a>
	    <a class='list-group-item' href='#new-update'>{{trans('organization.announcement.panel title')}}</a>
	    <a class='list-group-item' href='#new-update'>{{trans('task.today task.panel title')}}</a>
    </div>
</div>
@stop

@section('content')
<div id='wrapper'>
    <div class="row">
	<section class="col-xs-12" id='new-update'>
	    <div class="panel panel-primary">
		<div class="panel-heading">
		    <h3 class="panel-title">{{trans('tool.update.panel title')}} <span class="badge">0</span></h3>
		</div>
		<div class="panel-body">
		    <p>
			{{trans('tool.update.no new update')}}
		    </p>
		    <div class='panel-footer-ultilities'>
			<a href=''>{{trans('tool.update.read all')}}</a>
		    </div>
		</div>
	    </div>
	</section>
	<section class="col-xs-12" id='announcements'>
	    <div class="panel panel-primary">
		<div class="panel-heading">
		    <h3 class="panel-title">{{trans('organization.announcement.panel title')}} <span class="badge">0</span></h3>
		</div>
		<div class="panel-body">
		    <p>
			{{trans('organization.announcement.no unread announcement')}}
		    </p>
		    <div class='panel-footer-ultilities'>
			<a href=''>{{trans('organization.announcement.read all')}}</a>
		    </div>
		</div>
	    </div>
	</section>
	<section class="col-xs-12" id='today-task'>
	    <div class="panel panel-primary">
		<div class="panel-heading">
		    <h3 class="panel-title">{{trans('task.today task.panel title')}} <span class="badge">0</span></h3>
		</div>
		<div class="panel-body">
		    <p>
			{{trans('task.today task.no today task')}}
		    </p>
		</div>
	    </div>
	</section>
    </div>
</div>
@stop
