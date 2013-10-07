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
		
	    </div>
	    <form  class='text-center' method='post'>
		<fieldset>
		    <legend>
			{{ trans('user.log in') }} 
		    </legend>
		    <div class='form-group'>
			<input type='email' name='email' class='form-control' placeholder="{{trans('user.help.your email here')}}" />
		    </div>
		    <div class='form-group'>
			<input type='password' name='password' class='form-control' placeholder="{{trans('user.help.your password here')}}" />
			<div class="checkbox text-left">
			    <label>
				<input type="checkbox"> {{trans('user.help.auto login next time')}}
				{{ui_help_tip('user.help.allow this application sign in with inputed email and password in the next time you visit this page')}}
			    </label>
			</div>
		    </div>
		    <div class='form-group'>
			<button type='submit' class='btn btn-primary btn-block' name='login' id="login-button">{{ trans('user.log in to continue')}}</button>
		    </div>
		    <div class="help-block">
			<p>
			    <a href="#">{{ trans('user.forget your password?') }}</a><br />
			    <a href="#">{{ trans('user.do not have an account?') }}</a>
			</p>
		    </div>
		</fieldset>
	    </form>
	</section>
    </div>
    <div class='col-sm-3 col-md-4 col-lg-4'></div>
</div>
@stop
