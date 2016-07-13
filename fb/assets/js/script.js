(function ($) {
    $(function () {
        if ("\v" == "v") {
            $("html").addClass("oldie");
        } else {
            $("html").addClass("modern");
        }

        setInterval(function () {
            $(".slide1, .slide2").fadeToggle();
        }, 3000);
    });

    $(function () {
        /* form validation */
        function isPostcode(s) {
            var regex = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;
            return regex.test(s);//excluding QVX | | | CIKMV
        }

        function validateForm($frm) {
            var regPhone = /^[0-9 \-\+]+$/;
            var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;

            var $name = $frm.find('#First_Name2');
            var $phone = $frm.find('#Phone_No2');
            var $postCode = $frm.find('#postcode2');
            var $email = $frm.find('#Email_crm2');

            if (!$name.val()) {
                alert('Please enter your name.');
                $name.val("").focus();
                return false;
            }
            else if (!$phone.val() || !(regPhone.test($phone.val()))) {
                alert('Please provide your valid contact number.');
                $phone.val("").focus();
                return false;
            }
            else if ($postCode.length && !($postCode.val() && isPostcode($postCode.val()))) {
                alert('Please provide valid UK postcode with a space between the two parts. e.g. AB1 1BA; S60 4DT; WA16 7HN');
                $postCode.val("").focus();
                return false;
            }
            else {
                return true;
            }
        }

        $(".web_form2").submit(function () {
            return validateForm($(this));
        });

    });

}(jQuery));