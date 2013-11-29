<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@showWelcome'));
Route::post('/login', 'HomeController@postLogin');
Route::get('/logout', 'HomeController@getLogout');
Route::get('/new_password', 'HomeController@showNewPassword');
Route::post('/new_password', array('before' => 'csrf', 'uses' => 'HomeController@showNewPassword'));
Route::get('/set_password/{id}/{token}', 'HomeController@showSetPassword')->where(array(
    'id' => '[0-9]+',
    'token' => '[a-z0-9]+',
));
Route::post('/set_password/{id}/{token}', array('before' => 'csrf', 'uses' => 'HomeController@showSetPassword'))->where(array(
    'id' => '[0-9]+',
    'token' => '[a-z0-9]+',
));

Route::group(array('before' => 'auth'), function(){
    Route::get('/members', 'UserController@getUserList');
    Route::get('/members/get_csv', 'UserController@getUserListCSV');
    Route::get('/members/get_vcard', 'UserController@getUserListVCard');
    Route::get('/members/{id}/qr', 'UserController@getUserQR');
    
    Route::get('/units/{id}', 'UnitController@getUnitOverview');
    Route::get('/units/{id}/members', 'UnitController@getUnitMembers');
    Route::get('/units/{id}/activities', 'UnitController@getUnitActivities');
    Route::get('/units/{id}/announcements', 'UnitController@getUnitAnnouncements');
});

Route::group(array('before' => 'auth', 'prefix' => 'api'), function(){
    Route::post('v1/{request}', 'APIController@postRequest');
    Route::get('lang/{id}', 'APIController@getLanguageFile');
});

//Route::controller($uri, $controller);