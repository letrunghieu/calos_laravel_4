<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AnnouncementController
 *
 * @author TrungHieu
 */
class AnnouncementController extends BaseController
{
    protected $layout = 'layouts.front-end-logged';
    
    public function getAnnouncement($id)
    {
	$data = array();
	$announcement = Announcement::find($id);
	if ($announcement)
	{
	    $data['announcement'] = $announcement;
	}
	addBodyClasses('logged announcement announcement-detail');
	$this->layout->title = trans('organization.announcement.announcement :title', array('title' => $announcement->title));
	$this->layout->pageHeader = trans('organization.announcement.announcement :title', array('title' => $announcement->title));
	return $this->layout->nest('content', 'announcement.detail', $data);
    }
}

?>
