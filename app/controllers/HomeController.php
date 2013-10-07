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
	    return $this->layout->nest('content', 'home.welcome-guest', $data);
	}
    }

}