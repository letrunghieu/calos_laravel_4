<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
@section('content')
<div id='wrapper'>
    <div class='col-sm-3 col-md-4 col-lg-4'></div>
    <div class='col-sm-6 col-md-4 col-lg-4'>
	<section id='login-form'>
	    <div class="loading-container">
		<h1 class="text-center">
		    <img src='{{asset("images/calos-logo.png")}}' alt='{{ trans("user.title.log in") }}' class="logo-image"/>
		</h1>
		<div>
		    @if(count($errors) || Session::get('login-error'))
		    <div class="alert alert-danger">
			{{ implode('', $errors->all('<p>:message</p>')) }}
			@if (Session::get('login-error'))
			{{trans('user.message.your log in information is not correct, please review it and try again')}}
			@endif
		    </div>
		    @endif
		</div>
	    </div>
	    <form  class='text-center' method='post' action="{{URL::action('HomeController@postLogin')}}">
		<fieldset>
		    <legend>
			{{ trans('user.log in') }} 
		    </legend>
		    <div class='form-group {{ ($errors->has("email") || Session::get("login-error")) ? "has-error" : "" }}'>
			<input type='email' name='email' class='form-control' placeholder="{{trans('user.help.your email here')}}" />
		    </div>
		    <div class='form-group {{ ($errors->has("password") || Session::get("login-error")) ? "has-error" : "" }}'>
			<input type='password' name='password' class='form-control' placeholder="{{trans('user.help.your password here')}}" />
			<div class="checkbox text-left">
			    <label>
				<input type="checkbox" name="remember"> {{trans('user.help.auto login next time')}}
				{{ui_help_tip('user.help.allow this application sign in with inputed email and password in the next time you visit this page')}}
			    </label>
			</div>
		    </div>
		    <div class='form-group'>
			<button type='submit' class='btn btn-primary btn-block' name='login' id="login-button">{{ trans('user.log in to continue')}}</button>
		    </div>
		    <div class="help-block">
			<p>
			    <a href="{{ URL::action('HomeController@showNewPassword')}}">
				{{ trans('user.forget your password?') }}
			    </a>
			</p>
		    </div>
		</fieldset>
	    </form>
	</section>
    </div>
    <div class='col-sm-3 col-md-4 col-lg-4'></div>
</div>
@stop
