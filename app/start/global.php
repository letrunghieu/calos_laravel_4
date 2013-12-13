<?php

/*
  |--------------------------------------------------------------------------
  | Register The Laravel Class Loader
  |--------------------------------------------------------------------------
  |
  | In addition to using Composer, you may use the Laravel class loader to
  | load your controllers and models. This is useful for keeping all of
  | your classes in the "global" namespace without Composer updating.
  |
 */

ClassLoader::addDirectories(array(
    app_path() . '/commands',
    app_path() . '/controllers',
    app_path() . '/models',
    app_path() . '/database/seeds',
    app_path() . '/libraries',
));

/*
  |--------------------------------------------------------------------------
  | Application Error Logger
  |--------------------------------------------------------------------------
  |
  | Here we will configure the error logger setup for the application which
  | is built on top of the wonderful Monolog library. By default we will
  | build a rotating log file setup which creates a new file each day.
  |
 */

$logFile = 'log-' . php_sapi_name() . '.txt';

Log::useDailyFiles(storage_path() . '/logs/' . $logFile);

/*
  |--------------------------------------------------------------------------
  | Application Error Handler
  |--------------------------------------------------------------------------
  |
  | Here you may handle any errors that occur in your application, including
  | logging them or displaying custom views for specific errors. You may
  | even register several error handlers to handle different types of
  | exceptions. If nothing is returned, the default error view is
  | shown, which includes a detailed stack trace during debug.
  |
 */

App::error(function(Exception $exception, $code)
	{
	    Log::error($exception);
	});

/*
  |--------------------------------------------------------------------------
  | Maintenance Mode Handler
  |--------------------------------------------------------------------------
  |
  | The "down" Artisan command gives you the ability to put an application
  | into maintenance mode. Here, you will define what is displayed back
  | to the user if maintenace mode is in effect for this application.
  |
 */

App::down(function()
	{
	    return Response::make("Be right back!", 503);
	});

/*
  |--------------------------------------------------------------------------
  | Require The Filters File
  |--------------------------------------------------------------------------
  |
  | Next we will load the filters file for the application. This gives us
  | a nice separate location to store our route and application filter
  | definitions instead of putting them all in the main routes file.
  |
 */

require app_path() . '/filters.php';


/*
  |-------------------------------------------------------------------------
  | Configurate Assets
  |-------------------------------------------------------------------------
 */

Basset::collection('front-end-header', function($collection)
	{
	    // Collection definition.
	    $collection->add('../private/vendor/bootstrap/bootstrap.min.css');
	    $collection->add('../private/vendor/bootstrap/bootstrap-slider.css');
	    $collection->add('../private/vendor/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.css');
	    $collection->add('../private/vendor/fort-awesome/font-awesome.less')->apply('Less');
	    $collection->add('../private/vendor/gantt/dhtmlxgantt.css');
	    $collection->add('../private/less/front-end.less')->apply('Less');
	    $collection->add('../private/vendor/angularjs/angular.min.js');
	    $collection->add('../private/vendor/modernizr/modernizr-2.6.2-respond-1.1.0.min.js');
	});

Basset::collection('front-end-footer', function($collection)
	{
	    // Collection definition.
	    $collection->add('../private/vendor/jquery/jquery-1.10.2.min.js');
	    $collection->add('../private/vendor/jquery/jquery-migrate-1.2.1.min.js');
	    $collection->add('../private/js/helpers.js');
	    $collection->add('../private/vendor/dateformat/jquery.dateFormat-1.0.js');
	    $collection->add('../private/vendor/bootstrap/bootstrap.min.js');
	    $collection->add('../private/vendor/bootstrap/bootstrap.rating.jquery.js');
	    $collection->add('../private/vendor/bootstrap/bootstrap-slider.js');
	    $collection->add('../private/vendor/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.js');
	    $collection->add('../private/vendor/bootstrap-datetimepicker-master/js/locales/bootstrap-datetimepicker.vi.js');
	    $collection->add('../private/vendor/datatable/jquery.dataTables.min.js');
	    $collection->add('../private/vendor/datatable/datatable.plugins.js');
	    $collection->add('../private/vendor/epiceditor/js/epiceditor.min.js');
	    $collection->add('../private/vendor/gantt/dhtmlxgantt.js');
	    $collection->add('../private/js/gantt.js');
	    $collection->add('../private/js/front-end.js');
	});

/**
 * Includes helper functions
 */
require_once app_path() . '/libraries/helpers.php';