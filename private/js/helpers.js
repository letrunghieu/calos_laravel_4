/* 
 * Helper functions
 */

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


