<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
@section('second-navbar')
<div id='second-navbar'>
    <div id="export-user-list" class="widget">
	<a class="btn btn-success btn-block"><i class="fa fa-download"></i> {{trans('user.export user list as vcard')}}</a>
    </div>
    <div id='firtname-prefixes' class="widget"> 
	<a href="{{URL::action('UserController@getUserList')}}" class='item all active' title="{{trans('user.help.view all member')}}" data-toggle="tooltip" data-placement="auto top">{{ trans('global.all')}}</a>
	@foreach($firstnamePrefixes as $prefix)
	<a href="{{URL::action('UserController@getUserList', array($prefix->fname))}}" class='item' title="{{ trans_choice('user.help.view all :number user with firstname begin by the letter :char', $prefix->c, array('number' => $prefix->c, 'char' => $prefix->fname)) }}" data-toggle="tooltip" data-placement="auto top">
	    <span>{{$prefix->fname}}</span>
	</a>
	@endforeach
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
