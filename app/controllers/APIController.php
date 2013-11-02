<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of APIController
 *
 * @author TrungHieu
 */
class APIController extends BaseController
{

    public function postRequest($request)
    {
	switch ($request)
	{
	    case 'user_list':

		return $this->getUserList((array)Input::get('data'));
		break;

	    default:
		break;
	}
    }

    private function getUserList($options)
    {
	$default = array(
	    ''
	);
	$options = array_merge($default, $options);
	$users = User::whereNull('deleted_at')->orderBy('first_name')->get();
	$data = array();
	
	$count = 0;
	foreach($users as $user)
	{
	    /* @var $user User */
	    $data[] = array(
		'row_id' => ++$count,
		'gravatar' => 'http://www.gravatar.com/avatar/' . md5($user->email) . "?s=20&d=mm",
		'id' => $user->id,
		'first_name' => $user->first_name,
		'last_name' => $user->last_name,
		'email' => $user->email,
		'mobile_phone' => $user->mobile_phone,
		'created_at' => $user->created_at->toW3CString(),
	    );
	}
	
	return Response::json(new APIResponse(APIResponse::CODE_SUCCESS, $data));
    }

}

?>
