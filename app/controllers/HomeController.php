<?php

class HomeController extends BaseController
{

    protected $layout = 'layouts.front-end';

    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    public function showWelcome()
    {
	$data = array();
	$user = Auth::user();
	if (!$user)
	{
	    // not logged in
	    add_body_classes('no-log');
	    $this->layout->title = trans('user.log in');
	    return $this->layout->nest('content', 'home.welcome-guest', $data);
	}
    }

    public function postLogin()
    {
	$rules = array(
	    'email' => 'required|email',
	    'password' => 'required',
	);
	$validator = Validator::make(Input::all(), $rules);
	if ($validator->fails())
	{
	    return Redirect::action('HomeController@showWelcome')->withErrors($validator);
	}
	if (Auth::attempt(array('email' => trim(Input::get('email')), 'password' => Input::get('password')), Input::get('remember')))
	{
	    return Redirect::action('HomeController@showWelcome');
	} else
	{
	    return Redirect::action('HomeController@showWelcome')->with('login-error', true);
	}
    }

    public function getLogout()
    {
	if (Auth::check())
	{
	    Auth::logout();
	}
	return Redirect::home();
    }

    public function showNewPassword()
    {
	if (Auth::check())
	{
	    return Redirect::home();
	} else
	{
	    $data = array();
	    add_body_classes('no-log');
	    $this->layout->title = trans('user.get new password');
	    $rules = array(
		'email' => 'required|email|exists:users,email',
	    );

	    $validator = Validator::make(Input::all(), $rules);
	    if ($validator->fails())
	    {
		$data['errors'] = $validator->getMessageBag();
	    }
	    else
	    {
		if(User::resetPassword(trim(Input::get('email')))){
		    $data['messages']['danger'][] = trans('user.error.cannot send email, please try again after few minutes');
		}
		else
		{
		    $data['messages']['success'][] = trans('user.message.the email has been sent to your mail box');
		}
	    }
	    return $this->layout->nest('content', 'home.new_password', $data);
	}
    }

}