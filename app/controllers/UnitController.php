<?php
/**
 * Description of UnitController
 *
 * @author TrungHieu
 */
class UnitController extends BaseController
{
    protected $layout = 'layouts.front-end-logged';
    
    public function getUnitOverview($unitId)
    {
	$data = array();
	$unit = Unit::find($unitId);
	if ($unit && !$unit->deleted_at)
	    $data['unit'] = $unit;
	add_body_classes('logged unit unit-overview');
	$this->layout->title = $unit->name;
	$this->layout->pageHeader = $unit->name;
	return $this->layout->nest('content', 'unit.unit_overview', $data);
    }
    
    public function getUnitMembers($unitId)
    {
	$data = array();
	$unit = Unit::find($unitId);
	if ($unit && !$unit->deleted_at)
	    $data['unit'] = $unit;
	add_body_classes('logged unit unit-members');
	$this->layout->title = $unit->name;
	$this->layout->pageHeader = $unit->name;
	Announcement::createNewAnnouncement("foo", "bar", Auth::user(), array(1,2,3)); die();
	return $this->layout->nest('content', 'unit.unit_userlist', $data);
    }
}

?>
