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
	global $organization;
	$data = array();
	$user = Auth::user();
	if (!$user)
	{
	    // not logged in
	    addBodyClasses('no-log');
	    $this->layout->title = trans('user.log in');
	    return $this->layout->nest('content', 'home.welcome_guest', $data);
	}
	else
	{
	    addBodyClasses('logged home');
	    $this->layout = View::make('layouts.front-end-logged')->with('title', $organization->name)
		    ->with('pageHeader', $organization->name);
	    return $this->layout->nest('content', 'home.index', $data);
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
	    addBodyClasses('no-log');
	    $this->layout->title = trans('user.get new password');
	    if (Input::get('commit'))
	    {
		$rules = array(
		    'email' => 'required|email|exists:users,email',
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
		    $data['errors'] = $validator->getMessageBag();
		} else
		{
		    if (User::resetPassword(trim(Input::get('email'))))
		    {
			$data['messages']['danger'][] = trans('user.error.cannot send email, please try again after few minutes');
		    } else
		    {
			$data['messages']['success'][] = trans('user.message.the email has been sent to your mail box');
		    }
		}
	    }
	    return $this->layout->nest('content', 'home.new_password', $data);
	}
    }

    public function showSetPassword($id, $verify_token)
    {
	if (Auth::check())
	{
	    return Redirect::home();
	} else
	{
	    // not logged in
	    $data = array();
	    $data['id'] = $id;
	    $data['verify_token'] = $verify_token;
	    addBodyClasses('no-log');
	    if (Input::get('commit'))
	    {
		$user = User::find($id);
		if ($user && $user->verify_token == Input::get('_verifiy_token'))
		{
		    $rules = array(
			'password' => 'required|min:6',
			'repassword' => 'required|same:password'
		    );
		    $validator = Validator::make(Input::all(), $rules);
		    if ($validator->fails())
			return Redirect::action('HomeController@showSetPassword', array($id, $verify_token))->withErrors($validator);
		    else
		    {
			$user->verify_token = null;
			$user->password = Hash::make(Input::get('password'));
			$user->save();
			return Redirect::action('HomeController@showSetPassword', array($id, $verify_token))->with('success', trans('user.message.your new password has been set, try to log in'));
		    }
		}
		else
		    return Redirect::action('HomeController@showSetPassword', array($id, $verify_token))->with('error', trans('user.message.this link is expired, try to generate a new one'));
	    }
	    $this->layout->title = trans('user.set your password');
	    return $this->layout->nest('content', 'home.set_password', $data);
	}
    }

}