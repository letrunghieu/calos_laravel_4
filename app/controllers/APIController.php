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

		return $this->getUserList((array) Input::get('data'));
		break;

	    default:
		break;
	}
    }

    public function getLanguageFile($langId)
    {
	$data = array();
	switch ($langId)
	{
	    case 'user_list':
		$data = $this->getJsLangFile(Lang::getLocale(), 'user_list');
		break;
	}
	return Response::json($data);
    }

    private function getUserList($options)
    {
	$default = array(
	    ''
	);
	$options = array_merge($default, $options);
	if (Input::get('unit'))
	{
	    $unit = Unit::find(Input::get('unit'));
	    if (!$unit || $unit->deleted_at)
		$users = array();
	    else
	    {
		$users = $unit->members();
	    }
	} else
	{
	    $users = User::whereNull('deleted_at')->orderBy('first_name')->get();
	}
	$data = array();

	$count = 0;
	foreach ($users as $user)
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

    private function getJsLangFile($locale, $id)
    {
	$dir = app_path() . '/lang_js/' . $locale;
	if (!is_dir($dir))
	    return array();
	$fileName = $dir . '/' . $id . '.php';
	if (!is_file($fileName))
	    return array();
	return include $fileName;
    }

}

?>
