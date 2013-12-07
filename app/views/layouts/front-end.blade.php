<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">
    <head>
	<title><?php echo isset($title) ? $title : "" ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	@stylesheets('front-end-header')
	@javascripts('front-end-header')
    </head>
    <body class='<?php bodyClasses() ?>'>
	<div id="body-wrapper">
	    @yield('content')
	</div>
	<div class="hidden" id="helper-blocks">
	</div>
	@javascripts('front-end-footer')
	
    </body>
</html>