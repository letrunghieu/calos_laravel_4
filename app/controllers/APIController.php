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
		return $this->_getUserList((array) Input::get('data'));
		break;
	    case 'update_activity':
		return $this->_updateActivity(Input::get('id'), (array) Input::get('data'));
		break;
	    case 'gantt_activity_get':
		return $this->_getGanttActivity(Input::get('id'));
		break;
	    case 'gantt_links':
		return $this->_ganttLinks(Input::all());
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

    private function _ganttLinks($options)
    {
	if (!isset($options['action']))
	    $action = null;
	else
	    $action = $options['action'];
	$options = $options['data'];
	if (!isset($options['source']) || !isset($options['target']) || !isset($options['type']))
	    return Response::json(new APIResponse(APIResponse::CODE_FAILED, 'There must be 3 fields: "source", "target", "type"'));
	switch ($action)
	{
	    case 'add':
		$link = Link::create(array(
			    'source_id' => $options['source'],
			    'target_id' => $options['target'],
			    'type' => $options['type']
		));
		return Response::json(new APIResponse(APIResponse::CODE_SUCCESS, $link->toArray()));
		break;
	    case 'remove':
		Link::where('source_id', '=', $options['source'])
		    ->where('target_id', '=', $options['target'])
		    ->where('type', '=', $options['type'])
		    ->delete();
		return Response::json(new APIResponse(APIResponse::CODE_SUCCESS, "Deleted!"));
		break;

	    default:
		return Response::json(new APIResponse(APIResponse:: CODE_FAILED, 'This method is not supported'));
		break;
	}
    }

    private function _getGanttActivity($id)
    {
	$activity = Activity::find($id);
	if (!$activity)
	    return Response::json(new APIResponse(APIResponse::CODE_FAILED, 'The id must be a valid activity ID'));
	$data = array(
	    'data' => $activity->toGanttData(),
	    'links' => array(),
	);
	$activityIds = array_map(function($e){
	    return $e['id'];
	}, $data['data']);
	$activityIds = array_unique($activityIds);
	$links = Link::whereIn('source_id', $activityIds)->orWhereIn('target_id', $activityIds)
		->distinct()->get();
	foreach($links as $l)
	{
	    $data['links'][] = array(
		'id' => $l->id,
		'source' => $l->source_id,
		'target' => $l->target_id,
		'type' => $l->type,
	    );
	}
	return Response::json(new APIResponse(APIResponse::CODE_SUCCESS, $data));
    }

    private function _updateActivity($id, $data)
    {
	$activity = Activity::find($id);
	if (!$activity)
	    return Response::json(new APIResponse(APIResponse::CODE_FAILED, 'This activity does not exist'));
	$allowedProps = array(
	    'title',
	    'content',
	    'deadline',
	    'start_time',
	    'percentage',
	    'duration'
	);
	foreach ($data as $key => $value)
	{
	    if ($key == 'id')
		continue;
	    if (!in_array($key, $allowedProps))
		return Response::json(new APIResponse(APIResponse::CODE_FAILED, "The '{$key}' field is not an valid field"));
	    switch ($key)
	    {
		case 'deadline':
		    $activity->deadline = new Carbon\Carbon($value);

		    break;
		case 'start_time':
		    $activity->start_time = new \Carbon\Carbon($value);
		    break;
		case 'duration':
		    $start = (isset($data['start_time']) ? new \Carbon\Carbon($data['start_time']) : new \Carbon\Carbon($activity->start_time->toISOString));
		    $activity->deadline = $start->addDays($value - 1);
		    break;

		default:
		    $activity->$key = $value;
		    break;
	    }
	    $activity->save();
	}

	return Response::json(new APIResponse(APIResponse::CODE_SUCCESS, "Activity id '{$id}' is updated"));
    }

    private function _getUserList($options)
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
