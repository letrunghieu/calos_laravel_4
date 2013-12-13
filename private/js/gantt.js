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

	function dateClasses(date)
	{
	    var today = new Date();
	    today.setHours(0);
	    today.setMinutes(0);
	    today.setSeconds(0);
	    today.setMilliseconds(0);
	    var classes = [];
	    if (date.getDay() === 0 || date.getDay() === 6) {
		classes.push("weekend");
	    }
	    console.log(date, today, date.getTime(), today.getTime());
	    if (date.getTime() === today.getTime())
	    {
		classes.push('today');
	    }
	    return classes.join(' ');
	}

	$('#gantt').height($(window).innerHeight() - $('#body-wrapper').offset().top);
	gantt.config.show_progress = true;
	gantt.config.fit_tasks = true;
	gantt.config.columns = [
	    {name: "text", label: "Task name", width: "*", tree: true},
	    {name: "start_date", label: "Start time", align: "center"},
	    {name: "duration", label: "Duration", align: "center"}
	];
	gantt.config.details_on_dblclick = false;
	gantt.templates.task_class = function(start, end, task) {
	    if (task.type === 3)
		return "milestone";
	    else
		return "";
	};
	gantt.templates.scale_cell_class = function(date) {
	    return dateClasses(date);
	};
	gantt.templates.task_cell_class = function(item, date) {
	    return dateClasses(date);
	};
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
	gantt.attachEvent("onBeforeTaskDrag", function(id, mode, e) {
	    var task = gantt.getTask(id);
	    var modes = gantt.config.drag_mode;
	    if (mode === modes.resize && task.type === 3) {
		return false;
	    }
	    return true;
	});
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
	gantt.attachEvent("onTaskDblClick", function(id, e) {
	    window.location.href = [homeURL, '/activity/', id].join('');
	});
    }
});

