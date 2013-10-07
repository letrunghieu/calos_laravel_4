<!DOCTYPE html>
<html lang="vi-VN">
    <head>
	<meta charset="utf-8">
    </head>
    <body>
	<h2>{{trans('user.dear :name', array('name' => $user->first_name))}}</h2>

	<div>
	    To set your new password, complete this form: {{$token}}
	</div>
    </body>
</html>