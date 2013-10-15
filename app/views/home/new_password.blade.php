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
		    <a href="{{ URL::to('/') }}">
			<img src='{{asset("images/calos-logo.png")}}' alt='{{ trans("user.get new password") }}' class="logo-image"/>
		    </a>
		</h1>
		<div>
		    @if(count($errors) )
		    <div class="alert alert-danger">
			{{ implode('', $errors->all('<p>:message</p>')) }}
		    </div>
		    @endif
		    
		    @include('shared.messages', array('messages' => isset($messages) ? $messages : null))
		</div>
	    </div>
	    <form  class='text-center' method='post' action="{{URL::current()}}">
		<fieldset>
		    <legend>
			{{ trans('user.get new password') }} 
		    </legend>
		    <input type="hidden" name="_token" value="{{csrf_token()}}">
		    <div class='help-block'>
			{{ trans('user.help.new password guide')}}
		    </div>
		    <div class='form-group {{ ($errors->has("email") || Session::get("login-error")) ? "has-error" : "" }}'>

			<input type='email' name='email' class='form-control' placeholder="{{trans('user.help.your email here')}}" />
		    </div>
		    <div class='form-group'>
			<button type='submit' class='btn btn-primary btn-block' name='commit' id="login-button" value='on'>{{ trans('user.send link to me')}}</button>
		    </div>
		    <div class="help-block">
			<p>
			    <a href="{{ URL::action('HomeController@showWelcome')}}">
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
