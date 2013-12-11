/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(document).ready(function($) {
    $('[data-toggle=tooltip]').tooltip();
    $('.mobile-phone, .phone').each(function(_, e) {
	$(e).html(phoneFormat($(e).html()));
    });
    if (typeof _show_user_list_ !== "undefined" && _show_user_list_)
    {
	var fnamePrefixFilter = null;
	$.fn.dataTableExt.afnFiltering.push(
		function(oSettings, aData, iDataIndex) {
		    return !fnamePrefixFilter || aData[2][0] === fnamePrefixFilter;
		}
	);

	var requestURL = homeURL + "/api/v1/user_list";
	var requestURLParams = {};
	if (typeof _unit_id_ !== "undefined" && _unit_id_)
	{
	    requestURLParams.unit = _unit_id_;
	}

	var aoColumns = [];
	var aoColumnDefs = [];

	if (typeof _list_format_ === "undefined")
	    _list_format_ = "full";
	switch (_list_format_)
	{
	    case "select-list":
		aoColumns = [
		    {mData: "gravatar"},
		    {mData: "first_name", sType: "string-fullname"},
		    {mData: "first_name"},
		    {mData: "id"}
		];
		aoColumnDefs = [
		    {
			mRender: function(data, type, row) {
			    return "<img src='" + data + "' />";
			},
			aTargets: [0]
		    },
		    {
			mRender: function(data, type, row) {
			    return "" + row.last_name + ' ' + data;
			},
			aTargets: [1]
		    },
		    {
			bVisible: false,
			aTargets: [2]
		    },
		    {
			mRender: function(data, type, row) {
			    return ["<a class='select-this-user' data-id='", data, "'><i class='fa fa-chevron-circle-right'></i></a>"].join('');
			},
			aTargets: [3]
		    }
		];
		break;
	    default:
		aoColumns = [
		    {mData: "gravatar"},
		    {mData: "first_name", sType: "string-fullname"},
		    {mData: "first_name"},
		    {mData: "id"},
		    {mData: "email"},
		    {mData: "mobile_phone"},
		    {mData: "created_at", sType: "date-eu"}
		];
		aoColumnDefs = [
		    {
			mRender: function(data, type, row) {
			    return "<img src='" + data + "' />";
			},
			aTargets: [0]
		    },
		    {
			mRender: function(data, type, row) {
			    return "" + row.last_name + ' ' + data;
			},
			aTargets: [1]
		    },
		    {
			bVisible: false,
			aTargets: [2]
		    },
		    {
			mRender: function(data, type, row) {
			    return "<a href='" + homeURL + '/members/' + data + '/qr' + "' class='qrcode'><i class='fa fa-qrcode'></i></a>";
			},
			aTargets: [3]
		    },
		    {
			mRender: function(data, type, row) {
			    return "<a href='mailto:" + data + "'>" + data + "</a>";
			},
			aTargets: [4]
		    },
		    {
			mRender: function(data, type, row) {
			    if (data)
				return phoneFormat(data);
			    else
				return "<small class='text-muted'>empty</small>";
			},
			aTargets: [5]
		    },
		    {
			mRender: function(data, type, row) {
			    return $.format.date(data, "dd/MM/yyyy");
			},
			aTargets: [6],
			sClass: "text-center"
		    }
		];
		break;
	}

	userListTable = $('#user-list-table').dataTable({
	    bProcessing: true,
	    sAjaxSource: requestURL + (!requestURLParams ? "" : ("?" + $.param(requestURLParams))),
	    sAjaxDataProp: "data",
	    sPaginationType: "bootstrap",
	    sDom: '<"top"i>r<"table-responsive"t><"bottom"p><"clear">',
	    sServerMethod: "POST",
	    oLanguage: {
		sUrl: homeURL + "/api/lang/user_list"
	    },
	    aaSorting: [[1, "asc"]],
	    aoColumns: aoColumns,
	    aoColumnDefs: aoColumnDefs,
	    fnCreatedRow: function(nRow, aData, iDataIndex) {
		$('.qrcode', nRow).click(function(e) {
		    e.preventDefault();
		    $('#current-qrcode').attr('src', '').attr('src', $(e.currentTarget).attr('href'));
		    $('#modal-qrcode').modal('show');
		});
		if (typeof _selected_func_ !== "undefined")
		    $('.select-this-user', nRow).click(function() {
			var tr = $(this).parents('tr');
			_selected_func_(aData.id, $('td:eq(0)', tr).html(), $('td:eq(1)', tr).html());
		    });

	    }
	});

	$('#firtname-prefixes a.item').click(function(e) {
	    e.preventDefault();
	    $('#firtname-prefixes a.item').removeClass('active');
	    $(this).addClass('active');
	    fnamePrefixFilter = $(this).attr('data-fname-prefix');
	    userListTable.fnDraw();
	});

    }

    if (typeof _epic_editor_ !== "undefined" && _epic_editor_)
    {
	var editor = new EpicEditor({
	    container: _epic_editor_,
	    textarea: 'txt-' + _epic_editor_,
	    basePath: homeURL + '/epiceditor'
	}).load();
    }

    $('#task-is-continue').change(function() {
	var val = $(this).prop('checked');
	if (val)
	    $('#select-user-modal').modal('show');
	else
	{
	    $('#next-assignee').html('');
	    $('#next-assignee-id').val('');
	}
    });

    function progressSliderUpdate(ev) {
	$('#task-progress').css('width', ev.value + "%");
	$('.current-progress .percent').html(ev.value);
    }
    $('#confirmed-progress').slider().on('slide', progressSliderUpdate);
    $('#current-prog').slider()
	    .on('slide', progressSliderUpdate)
	    .on('slideStop', function(ev) {
	var actId = $(this).data('activity-id');
	$.post(
		homeURL + "/api/v1/update_activity",
		{
		    data: {
			id: actId,
			percentage: ev.value
		    }
		}
	);
    });
//
    $('.input-group.date').datetimepicker({
	language: 'vi',
	todayBtn: 1,
	autoclose: 1,
	todayHighlight: 1
    });
});

