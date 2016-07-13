/* Form validation */
var supportsTouch = (('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0));

function ValidateWebForm(frmName) {
    var regPhone = /^[0-9 \-\+]+$/;
    var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;
    if (document.getElementById('First_Name').value == '' || document.getElementById('First_Name').value == 'Enter Your Name') {
        alert('Please enter your name.');
        document.getElementById('First_Name').value = '';
        document.getElementById('First_Name').focus();
        return false;
    }
    else if (document.getElementById('Phone_No').value == '' || !(regPhone.test(document.getElementById('Phone_No').value))) {
        alert('Please provide your valid contact number.');
        document.getElementById('Phone_No').value = '';
        document.getElementById('Phone_No').focus();
        return false;
    }
    else if (document.getElementById('postcode').value == '' || !isPostcode(document.getElementById('postcode').value)) {
        alert('Please provide valid UK postcode with a space between the two parts. e.g. AB1 1BA; S60 4DT; WA16 7HN');
        document.getElementById('postcode').value = '';
        document.getElementById('postcode').focus();
        return false;
    }
    else {
        return true;
    }
}

// is valid email
function isEmail(s) {
    var regex = /(^[a-z]([a-z_\.]*)@([a-z_\.]*)([.][a-z]{3})$)|(^[a-z]([a-z_\.]*)@([a-z_\.]*)(\.[a-z]{3})(\.[a-z]{2})*$)/i
    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return regex.test(s);
}

// is valid postcode
function isPostcode(s) {
    var regex = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;
    return regex.test(s);//excluding QVX | | | CIKMV
}

function ValidateWebForm2(frmName) {
    var regPhone = /^[0-9 \-\+]+$/;
    var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;
    if (document.getElementById('First_Name2').value == '' || document.getElementById('First_Name2').value == 'Name') {
        alert('Please enter your name.');
        document.getElementById('First_Name2').value = '';
        document.getElementById('First_Name2').focus();
        return false;
    }
    else if (document.getElementById('Phone_No2').value == '' || !(regPhone.test(document.getElementById('Phone_No2').value))) {
        alert('Please provide your valid contact number.');
        document.getElementById('Phone_No2').value = '';
        document.getElementById('Phone_No2').focus();
        return false;
    }
    else if (document.getElementById('postcode2').value == '' || !isPostcode(document.getElementById('postcode2').value)) {
        alert('Please provide valid UK postcode with a space between the two parts. e.g. AB1 1BA; S60 4DT; WA16 7HN');
        document.getElementById('postcode2').value = '';
        document.getElementById('postcode2').focus();
        return false;
    }
    else {
        return true;
    }
}
/* END form validation */

$(function(){
    if("\v"=="v"){
        $('input, textarea').placeholder();
    }
    if(supportsTouch){
        $(".floating-call").fadeIn("fast");
    } else{
        $(".sprite-floating_PPC").fadeIn("fast");
    }
})