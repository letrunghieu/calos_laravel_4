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
	$this->layout->title = trans("organization.title.members in :unit", array('unit' => $unit->name));
	$this->layout->pageHeader = trans("organization.title.members in :unit", array('unit' => $unit->name));
	return $this->layout->nest('content', 'unit.unit_userlist', $data);
    }
    
    public function getUnitAnnouncements($unitId)
    {
	$data = array();
	$unit = Unit::find($unitId);
	if ($unit && !$unit->deleted_at)
	{
	    $data['unit'] = $unit;
	    $data['announcement'] = $unit->announcements;
	}
	add_body_classes('logged unit unit-announcements');
	$this->layout->title = trans("organization.title.announcments in :unit", array('unit' => $unit->name));
	$this->layout->pageHeader = trans("organization.title.announcments in :unit", array('unit' => $unit->name));
	return $this->layout->nest('content', 'unit.unit_announce', $data);
    }
}

?>
