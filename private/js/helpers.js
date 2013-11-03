/* 
 * Helper functions
 */
var alphabet = "aăâbcdđeêfghijklmnoôơpqrstuưvwxyzAĂÂBCDĐEÊFGHIJKLMNOÔƠPQRSTUƯVWXYZ";

/**
 * format phone number
 * 
 * @param string phone
 * @returns string
 */
function phoneFormat(phone) {
    phone = phone.replace(/[^0-9]/g, '');
    if (phone.length === 10)
	phone = phone.replace(/(\d{3})(\d{3})(\d{4})/, "$1 $2 $3");
    else if (phone.length === 11)
	phone = phone.replace(/(\d{4})(\d{3})(\d{4})/, "$1 $2 $3");
    return phone;
}

function compareLetters(a, b) {
    var ia = alphabet.indexOf(a);
    var ib = alphabet.indexOf(b);
    if (ia === -1 || ib === -1) {
	if (ib !== -1)
	    return -1;
	if (ia !== -1)
	    return 1;
	return a > b ? 1 : (a < b ? -1 : 0);
    }
    return ia > ib ? 1 : (ia < ib ? - 1 : 0);
}
/**
 * Compare to string
 * 
 * @param {type} a
 * @param {type} b
 * @returns 1: a > b; -1: a < b; 0: a = b
 */
function alpha(a, b) {
    var pos = 0;
    var min = Math.min(a.length, b.length);
    while (a.charAt(pos) === b.charAt(pos) && pos < min) {
	pos++;
    }
    return compareLetters(a.charAt(pos), b.charAt(pos));
}


