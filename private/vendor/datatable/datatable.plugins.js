/* API method to get paging information */
$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
{
    return {
	"iStart": oSettings._iDisplayStart,
	"iEnd": oSettings.fnDisplayEnd(),
	"iLength": oSettings._iDisplayLength,
	"iTotal": oSettings.fnRecordsTotal(),
	"iFilteredTotal": oSettings.fnRecordsDisplay(),
	"iPage": oSettings._iDisplayLength === -1 ?
		0 : Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
	"iTotalPages": oSettings._iDisplayLength === -1 ?
		0 : Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
    };
}

/* Bootstrap style pagination control */
$.extend($.fn.dataTableExt.oPagination, {
    "bootstrap": {
	"fnInit": function(oSettings, nPaging, fnDraw) {
	    var oLang = oSettings.oLanguage.oPaginate;
	    var fnClickHandler = function(e) {
		e.preventDefault();
		if (oSettings.oApi._fnPageChange(oSettings, e.data.action)) {
		    fnDraw(oSettings);
		}
	    };

	    $(nPaging).addClass('datatable-pagination').append(
		    '<ul class="pagination pagination-sm">' +
		    '<li class="prev disabled"><a href="#">&larr; ' + oLang.sPrevious + '</a></li>' +
		    '<li class="next disabled"><a href="#">' + oLang.sNext + ' &rarr; </a></li>' +
		    '</ul>'
		    );
	    var els = $('a', nPaging);
	    $(els[0]).bind('click.DT', {action: "previous"}, fnClickHandler);
	    $(els[1]).bind('click.DT', {action: "next"}, fnClickHandler);
	},
	"fnUpdate": function(oSettings, fnDraw) {
	    var iListLength = 5;
	    var oPaging = oSettings.oInstance.fnPagingInfo();
	    var an = oSettings.aanFeatures.p;
	    var i, j, sClass, iStart, iEnd, iHalf = Math.floor(iListLength / 2);

	    if (oPaging.iTotalPages < iListLength) {
		iStart = 1;
		iEnd = oPaging.iTotalPages;
	    }
	    else if (oPaging.iPage <= iHalf) {
		iStart = 1;
		iEnd = iListLength;
	    } else if (oPaging.iPage >= (oPaging.iTotalPages - iHalf)) {
		iStart = oPaging.iTotalPages - iListLength + 1;
		iEnd = oPaging.iTotalPages;
	    } else {
		iStart = oPaging.iPage - iHalf + 1;
		iEnd = iStart + iListLength - 1;
	    }

	    for (i = 0, iLen = an.length; i < iLen; i++) {
		// Remove the middle elements
		$('li:gt(0)', an[i]).filter(':not(:last)').remove();

		// Add the new list items and their event handlers
		for (j = iStart; j <= iEnd; j++) {
		    sClass = (j == oPaging.iPage + 1) ? 'class="active"' : '';
		    $('<li ' + sClass + '><a href="#">' + j + '</a></li>')
			    .insertBefore($('li:last', an[i])[0])
			    .bind('click', function(e) {
			e.preventDefault();
			oSettings._iDisplayStart = (parseInt($('a', this).text(), 10) - 1) * oPaging.iLength;
			fnDraw(oSettings);
		    });
		}

		// Add / remove disabled classes from the static elements
		if (oPaging.iPage === 0) {
		    $('li:first', an[i]).addClass('disabled');
		} else {
		    $('li:first', an[i]).removeClass('disabled');
		}

		if (oPaging.iPage === oPaging.iTotalPages - 1 || oPaging.iTotalPages === 0) {
		    $('li:last', an[i]).addClass('disabled');
		} else {
		    $('li:last', an[i]).removeClass('disabled');
		}
	    }
	}
    }
});


/*
 Remove all filtering that has been applied to a DataTable, be it column based filtering or global filtering
 */
$.fn.dataTableExt.oApi.fnFilterClear = function(oSettings)
{
    /* Remove global filter */
    oSettings.oPreviousSearch.sSearch = "";

    /* Remove the text of the global filter in the input boxes */
    if (typeof oSettings.aanFeatures.f !== 'undefined')
    {
	var n = oSettings.aanFeatures.f;
	for (var i = 0, iLen = n.length; i < iLen; i++)
	{
	    $('input', n[i]).val('');
	}
    }

    /* Remove the search text for the column filters - NOTE - if you have input boxes for these
     * filters, these will need to be reset
     */
    for (var i = 0, iLen = oSettings.aoPreSearchCols.length; i < iLen; i++)
    {
	oSettings.aoPreSearchCols[i].sSearch = "";
    }

    /* Redraw */
    oSettings.oApi._fnReDraw(oSettings);
};


/*
 * Similar to the Date (dd/mm/YY) data sorting plug-in, this plug-in offers additional flexibility with support for spaces between the values and either . or / notation for the separators.
 */
jQuery.extend(jQuery.fn.dataTableExt.oSort, {
    "date-eu-pre": function(date) {
	var date = date.replace(" ", "");

	if (date.indexOf('.') > 0) {
	    /*date a, format dd.mn.(yyyy) ; (year is optional)*/
	    var eu_date = date.split('.');
	} else {
	    /*date a, format dd/mn/(yyyy) ; (year is optional)*/
	    var eu_date = date.split('/');
	}

	/*year (optional)*/
	if (eu_date[2]) {
	    var year = eu_date[2];
	} else {
	    var year = 0;
	}

	/*month*/
	var month = eu_date[1];
	if (month.length === 1) {
	    month = 0 + month;
	}

	/*day*/
	var day = eu_date[0];
	if (day.length === 1) {
	    day = 0 + day;
	}

	return (year + month + day) * 1;
    },
    "date-eu-asc": function(a, b) {
	return ((a < b) ? -1 : ((a > b) ? 1 : 0));
    },
    "date-eu-desc": function(a, b) {
	return ((a < b) ? 1 : ((a > b) ? -1 : 0));
    }
});


/*
 * Sort the full name column
 */
jQuery.extend(jQuery.fn.dataTableExt.oSort, {
    "string-fullname-pre": function(name) {
	var nameSegments = name.trim().toLowerCase().split(' ');
	if (nameSegments.length > 1)
	{
	    return nameSegments[nameSegments.length - 1] + ' ' + nameSegments.slice(0, nameSegments.length - 1).join(' ');
	}
	else
	    return nameSegments.join(' ');
    },
    "string-fullname-asc": function(a, b) {
	return alpha(a, b);
    },
    "string-fullname-desc": function(a, b) {
	return -alpha(a, b);
    }
});