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
		    <img src='{{asset("images/calos-logo.png")}}' alt='{{ trans("user.set your password") }}' class="logo-image"/>
		</h1>
		<div>
		    @if(count($errors) || Session::has('error'))
		    <div class="alert alert-danger">
			{{ implode('', $errors->all('<p>:message</p>')) }}
			@if (Session::has('error'))
			{{Session::get('error')}}
			@endif
		    </div>
		    @endif
		    @if(Session::has('success'))
		    <div class="alert alert-success">
			{{Session::get('success')}}
		    </div>
		    @endif
		</div>
	    </div>
	    <form  class='text-center' method='post' action="{{URL::current()}}">
		<fieldset>
		    <legend>
			{{ trans('user.set your password') }} 
		    </legend>
		    <?php echo Form::hidden('_id', $id) ?>
		    <?php echo Form::hidden('_verifiy_token', $verify_token) ?>
		    <?php echo Form::hidden('_token', csrf_token()) ?>
		    <div class='form-group {{ ($errors->has("password")) ? "has-error" : "" }}'>
			<input type='password' name='password' class='form-control' placeholder="{{trans('user.help.your new password here')}}" />
		    </div>
		    <div class='form-group {{ ($errors->has("repassword")) ? "has-error" : "" }}'>
			<input type='password' name='repassword' class='form-control' placeholder="{{trans('user.help.type your new password here again')}}" />
		    </div>
		    <div class='form-group'>
			<button type='submit' class='btn btn-primary btn-block' name='commit' id="commit-button" value='on'>{{ trans('user.change my password')}}</button>
		    </div>
		    <div class="help-block">
			<p>
			    <a href="{{ URL::action('HomeController@showNewPassword')}}">
				{{ trans('user.forget your password?') }}
			    </a><br />
			    <a href="{{ url('/')}}">
				{{ trans('user.log in') }}
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
