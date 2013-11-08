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

    public function getUserList()
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
	    $vcard->add('TEL', $user->mobile_phone, array('TYPE' => 'CELL'));
	    if ($user->address)
		$vcard->add('ADR', array(null, null, $user->address));
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

    public function getUserListCSV()
    {
	$rawData = $this->_getAllCurrentUser();
	$csvConfig = new Goodby\CSV\Export\Standard\ExporterConfig();
	$csvExporter = new \Goodby\CSV\Export\Standard\Exporter($csvConfig);
	ob_start();
	$csvExporter->export('php://output', $rawData);
	$content = ob_get_clean();
	return Response::make($content, '200', array(
		    'Content-Type' => 'text/csv',
		    'Content-Disposition' => 'attachment;filename=calos_members.csv',
		    'Expires' => 0,
		    'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
		    'Pragma' => 'public',
	));
    }
    public function getUserListVCard()
    {
	$rawData = $this->_getAllCurrentUser();
	$content = "";
	foreach($rawData as $user)
	{
	    $vcard = new \Sabre\VObject\Component\VCard(array(
		'FN' => $user['last name'] . ' ' . $user['first name'],
		'N' => array($user['last name'], $user['first name']),
		'EMAIL' => $user['email']
	    ));
	    $vcard->add('TEL', $user['mobile phone'], array('TYPE' => 'CELL'));
	    if ($user['address'])
		$vcard->add('ADR', array(null, null, $user['address']));
	    $content = $content . $vcard->serialize();
	}
	return Response::make($content, '200', array(
		    'Content-Type' => 'text/vcard',
		    'Content-Disposition' => 'attachment;filename=calos_members.vcf',
		    'Expires' => 0,
		    'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
		    'Pragma' => 'public',
	));
    }

    private function _getAllCurrentUser()
    {
	$users = User::whereNull('deleted_at')->orderBy('first_name')->get();
	$data = array();

	$count = 0;
	foreach ($users as $user)
	{
	    /* @var $user User */
	    $data[] = array(
		'first name' => $user->first_name,
		'last name' => $user->last_name,
		'email' => $user->email,
		'mobile phone' => $user->mobile_phone,
		'address' => $user->address,
	    );
	}
	return $data;
    }

}

?>
