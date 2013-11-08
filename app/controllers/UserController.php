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

    /**
     * Show the vCard data of an user via QRCode
     * 
     * @param type $userId
     * @return type
     */
    public function getUserQR($userId)
    {
	$user = User::find($userId);
	$qrCode = new \Endroid\QrCode\QrCode;
	$qrCode->setSize(300);
	$qrCode->setPadding(10);
	if ($user && !$user->deleted_at)
	{
	    $vcard = new \Sabre\VObject\Component\VCard(array(
		'FN' => $user->last_name . ' ' . $user->first_name,
		'N' => array($user->last_name, $user->first_name),
		'EMAIL' => $user->email
	    ));
	    $vcard->add('TEL', $user->mobile_phone, array('TYPE' =>'CELL'));
	    if ($user->address)
		$vcard->add ('ADR', array(null, null, $user->address));
	    $qrCode->setText($vcard->serialize());
	} else
	{
	    $qrCode->setText(URL::to('/'));
	}
	return Response::make($qrCode->get('png'), '200', array(
		    'Content-Type' => 'image/png',
		    'Content-Transfer-Encoding' => 'binary',
		    'Content-Disposition' => 'inline',
		    'Expires' => 0,
		    'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
		    'Pragma' => 'public',
	));
    }

}

?>
