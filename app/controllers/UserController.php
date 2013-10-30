<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author TrungHieu
 */
class UserController extends BaseController
{
    protected $layout = 'layouts.front-end-logged';
    
    public function getUserList($firstChar = null)
    {
	$data = array();
	$data['firstnamePrefixes'] = User::getAllFirstnamePrefixes();
	add_body_classes('logged user user-list');
	$this->layout->title = trans('user.title.user list');
	$this->layout->pageHeader = trans('user.title.user list');
	$this->layout->nest('content', 'user.user_list', $data);
    }
}

?>
