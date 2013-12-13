$(document).ready(function() {
    var oneDay = 1000 * 60 * 60 * 24
    if (typeof _gantt_activity_id_ !== "undefined" && _gantt_activity_id_)
    {

	var apiUrl = homeURL + '/api/v1/';

	function linkManipulate(action, link)
	{
	    $.post(
		    apiUrl + 'gantt_links',
		    {
			action: action,
			data: link
		    }
	    );
	}

	$('#gantt').height($(window).innerHeight() - $('#body-wrapper').offset().top);
	gantt.config.show_progress = true;
	gantt.config.fit_tasks = true;
	gantt.config.columns = [
	    {name: "text", label: "Task name", width: "*", tree: true},
	    {name: "start_date", label: "Start time", align: "center"},
	    {name: "duration", label: "Duration", align: "center"}
	];
	gantt.init('gantt');
	$.post(
		apiUrl + 'gantt_activity_get',
		{
		    id: _gantt_activity_id_
		},
		function(data)
		{
		    if (data.code)
		    {
			gantt.parse(data.data);
		    }
		}
	);
	gantt.attachEvent("onAfterTaskDrag", function(id, mode, e) {
	    var thisTask = gantt.getTask(id);
	    var d = thisTask.start_date;
	    $.post(
		    apiUrl + 'update_activity',
		    {
			id: id,
			data: {
			    start_time: [d.getFullYear(), "/", (d.getMonth() + 1), "/", d.getDate()].join(''),
			    percentage: thisTask.progress,
			    duration: thisTask.duration
			}
		    }
	    );
	});
	gantt.attachEvent("onBeforeTaskChanged", function(id, mode, task) {
	    var updatedTask = gantt.getTask(id);
	    var modes = gantt.config.drag_mode;
	    if (mode === modes.move) {
		var diff = updatedTask.start_date - task.start_date;
		var diffRounded = Math.round(diff / oneDay) * oneDay;
		if (diff !== 0)
		{
		    gantt.eachTask(function(child) {
			child.start_date = new Date(+child.start_date + diffRounded);
			child.end_date = new Date(+child.end_date + diffRounded);
			gantt.refreshTask(child.id, true);
		    }, id);
		}
	    }
	    return true;
	});
	gantt.attachEvent("onAfterLinkAdd", function(id, item) {
	    linkManipulate('add', item);
	});
	gantt.attachEvent("onAfterLinkDelete", function(id, item) {
	    linkManipulate('remove', item);
	});
    }
});

