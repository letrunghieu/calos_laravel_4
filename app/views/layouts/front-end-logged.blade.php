<?php
global $organization, $currentUser;
?>
<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">
    <head>
	<title><?php echo isset($title) ? $title : "" ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	@stylesheets('front-end-header')
	@javascripts('front-end-header')
    </head>
    <body class='<?php body_classes() ?>'>
	<header class="navbar navbar-default navbar-fixed-top" role="banner">
	    <div class="container">
		<div class="navbar-header">
		    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		    </button>
		    <a href="<?php echo URL::to('/') ?>" class="navbar-brand" title="{{ trans('global.home page')}}" data-toggle='tooltip' data-placement='auto top'>
			<img class="logo-image" src='{{asset("images/calos-logo-white-small.png")}}' alt="{{ trans('global.home page')}}"/>
		    </a>
		</div>
		<nav class="collapse navbar-collapse navbar-inverse-collapse bs-navbar-collapse" role="navigation">
		    <ul class="nav navbar-nav">
			<li class='dropdown'>
			    <a href="#" data-toggle="dropdown">
				<span>
				    {{trans('organization.menu title')}}
				</span>
				<b class="caret"></b>
			    </a>
			    <ul class="dropdown-menu">
				<li><a href="#">{{trans('organization.menu.organization structure')}}</a></li>
				<li><a href="#">{{trans('organization.menu.member contacts')}}</a></li>
				<li><a href="#">{{trans('organization.menu.announcements')}}</a></li>
				<li role="presentation" class="divider"></li>
				<li role="presentation" class="dropdown-header">{{trans('global.admin functions')}}</li>
				<li><a href="#">{{trans('organization.menu.organization management')}}</a></li>
				<li><a href="#">{{trans('organization.menu.user management')}}</a></li>
				<li><a href="#">{{trans('organization.menu.announcement management')}}</a></li>
			    </ul>
			</li>
			<li class='dropdown'>
			    <a href="#" data-toggle="dropdown">
				<span>
				    {{trans('task.menu title')}}
				</span>
				<b class="caret"></b>
			    </a>
			    <ul class="dropdown-menu">
				<li><a href="#">{{trans('task.menu.today tasks')}}</a></li>
				<li><a href="#">{{trans('task.menu.delayed tasks')}}</a></li>
				<li><a href="#">{{trans('task.menu.all assigned tasks')}}</a></li>
				<li role="presentation" class="divider"></li>
				<li role="presentation" class="dropdown-header">{{trans('global.admin functions')}}</li>
				<li><a href="#">{{trans('task.menu.new tasks')}}</a></li>
				<li><a href="#">{{trans('task.menu.created tasks')}}</a></li>
			    </ul>
			</li>
			<li class='dropdown'>
			    <a href="#" data-toggle="dropdown">
				<span>
				    {{trans('user.menu title')}}
				</span>
				<b class="caret"></b>
			    </a>
			    <ul class="dropdown-menu">
				<li><a href="#">{{trans('user.menu.messages')}}</a></li>
				<li><a href="#">{{trans('user.menu.update profile')}}</a></li>
				<li><a href="#">{{trans('user.menu.my vacancy')}}</a></li>
			    </ul>
			</li>
			<li class='dropdown'>
			    <a href="#" data-toggle="dropdown">
				<span>
				    {{trans('tool.menu title')}}
				</span>
				<b class="caret"></b>
			    </a>
			    <ul class="dropdown-menu">
				<li><a href="#">{{trans('tool.menu.polls')}}</a></li>
				<li><a href="#">{{trans('tool.menu.meeting helpers')}}</a></li>
			    </ul>
			</li>
		    </ul>
		    <ul class='nav navbar-nav navbar-right'>
			<li>
			    <a href='#'>
				<i class='fa fa-desktop'></i> {{$currentUser->first_name}}
			    </a>
			</li>
			<li>
			    <a href='{{ URL::action("HomeController@getLogout") }}'>
				{{trans('user.log out')}} <i class='fa fa-log-out'></i>
			    </a>
			</li>
		    </ul>
		</nav>
	    </div>
	</header>
	<div id='page-header' class='calos-header'>
	    <div class='container'>
		<div class="row">
		    <div class="col-md-9">
			<h1>{{ isset($pageHeader) ? $pageHeader : "Welcome" }}</h1>
		    </div>
		    <div class="col-md-3">
			<div id="server-clock">
			    <span>{{trans('global.current server time is')}}</span>
			    <time datetime="2013-10-27 16:00"><span class='date'>2013-10-27</span> <span class='time'>16:00</span></time>
			    <a href='#' title='Xem lich cua to chuc' data-toggle='tooltip' data-placement='auto top'><i class='fa fa-calendar'></i></a>
			</div>
		    </div>
		</div>
	    </div>
	</div>
	<div id="body-wrapper">
	    <div class="container">
		<div class="row">
		    <div class="col-md-3 col-md-push-9">
			
			<div id='search-form' class="widget-box">
			    <form method='post'>
				{{ Form::hidden('_token', csrf_token()) }}
				
				<div class='form-group'>
				    <input type='text' name='s' class='form-control' placeholder="{{trans('global.type and enter to search')}}" />
				</div>
				<div class='form-group'>
				    <label class="radio-inline">
					<input type="radio" name="options"  checked="checked"/> <i class='fa fa-group' title="{{trans('user.search user')}}" data-toggle='tooltip' data-position='auto top'></i>
				    </label>
				    <label class="radio-inline">
					<input type="radio" name="options"/> <i class='fa fa-tasks' title="{{trans('task.search task')}}" data-toggle='tooltip' data-position='auto top'></i>
				    </label>
				    <label class="radio-inline">
					<input type="radio" name="options"/> <i class='fa fa-bullhorn' title="{{trans('organization.search announcement')}}" data-toggle='tooltip' data-position='auto top'></i>
				    </label>
				    <label class="radio-inline">
					<input type="radio" name="options"/> <i class='fa fa-suitcase' title="{{trans('organization.search unit')}}" data-toggle='tooltip' data-position='auto top'></i>
				    </label>
				</div>

			    </form>
			</div>
			<div>
			    @yield('second-navbar')
			</div>
			
		    </div>
		    <div class="col-md-9 col-md-pull-3">
			@yield('content')
		    </div>
		</div>
	    </div>
	</div>
	<footer class='calos-footer'>
	    <div class="container" role="contentinfo">
		<div class="row">
		    <div class="visible-md visible-lg">
			<div class="col-md-9">
			    {{ $organization->name }}
			</div>
			<div class="col-md-3 text-right">
			    {{trans('global.powered by CALOS')}}
			</div>
		    </div>
		</div>
		<div class="row">
		    <div class="visible-xs visible-sm">
			<div class="text-center">
			    {{ $organization->name }}
			</div>
			<div class="text-center">
			    {{trans('global.powered by CALOS')}}
			</div>
		    </div>
		</div>
	    </div>
	</footer>
	<div class="hidden" id="helper-blocks">
	</div>
	@javascripts('front-end-footer')

    </body>
</html>