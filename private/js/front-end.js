/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(document).ready(function($) {
    $('[data-toggle=tooltip]').tooltip();
    $('.mobile-phone, .phone').each(function(_, e){
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

	userListTable = $('#user-list-table').dataTable({
	    bProcessing: true,
	    sAjaxSource: homeURL + "/api/v1/user_list",
	    sAjaxDataProp: "data",
	    sPaginationType: "bootstrap",
	    sDom: '<"top"i>r<"table-responsive"t><"bottom"p><"clear">',
	    sServerMethod: "POST",
	    oLanguage: {
		sUrl: homeURL + "/api/lang/user_list"
	    },
	    aaSorting: [[1, "asc"]],
	    aoColumns: [
		{mData: "gravatar"},
		{mData: "first_name", sType: "string-fullname"},
		{mData: "first_name"},
		{mData: "id"},
		{mData: "email"},
		{mData: "mobile_phone"},
		{mData: "created_at", sType: "date-eu"}
	    ],
	    aoColumnDefs: [
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
			return "<a href='" + homeURL + '/members/' + data + '/qr' +"' class='qrcode'><i class='fa fa-qrcode'></i></a>";
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
	    ],
	    fnCreatedRow: function( nRow, aData, iDataIndex ) {
		$('.qrcode', nRow).click(function(e){
		    e.preventDefault();
		    $('#current-qrcode').attr('src', '').attr('src', $(e.currentTarget).attr('href'));
		    $('#modal-qrcode').modal('show');
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
});

