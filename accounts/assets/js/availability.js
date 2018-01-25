$(document).ready(function () {
    return;
    //-- For Avaioability Duration Selection
    $('.durAction').change(function () {
        if ($(this).val() == 'repeat') {
            $('.dur-one-off').addClass('hide');
            $('.dur-repeat').removeClass('hide');
            $('#divOpenDay').addClass('hide');
        } else {
            $('.dur-one-off').removeClass('hide');
            $('.dur-repeat').addClass('hide');
            $('#divOpenDay').removeClass('hide');
        }
    });

    $('#timeAllDay').change(function () {
        if ($('#divTimeSelection').hasClass('hide')) {
            $('#divTimeSelection').removeClass('hide');
            $('#divOpenDay').removeClass('hide');
        } else {
            $('#divTimeSelection').addClass('hide');
            $('#divOpenDay').addClass('hide');
        }
    })

    //-- For Date Selection
    $('#clickerAddDate').click(function () {
        var intId = $("#datePickSection div").length + 1;
        var fieldWrapper = $("<div class=\"datewrapper row\"/>");
        var elem = $("<div class=\"col s7\"><input type=\"text\" placeholder=\"Pick Date\" class=\"hasDatePicker\" id=\"timerSlot_" + intId + "\" /></div>");
        var removeButton = $("<div class=\"col s1\"><i class=\"material-icons prefix \" title=\"Remove\">close</i></div>");
        removeButton.click(function () {
            $(this).parent().remove();
            $('#totDateSlots').val(parseInt($('#totDateSlots').val()) - 1);
        });
        fieldWrapper.append(elem);
        fieldWrapper.append(removeButton);

        $("#datePickSection").append(fieldWrapper);
        $('#totDateSlots').val(parseInt($('#totDateSlots').val()) + 1);
        $('.hasDatePicker').datepicker({dateFormat: 'yy-mm-dd'});
    });
    $('.hasDatePicker').datepicker({dateFormat: 'yy-mm-dd'});

    //-- For Timer Selection
    $('#clickerAddTime').click(function () {
        var intId = parseInt($('#totTimeSlots').val()); //$("#timePickSection div").length + 1;
        var fieldWrapper = $("<div class=\"timewrapper row\" id=\"field" + intId + "\"/>");
        var elem = $("<div class=\"input-field col s5\"><select class=\"browser-default timepick\" name=\"selTimePickA_" + intId + "\" id=\"selTimePickA_" + intId + "\" /></div><div class=\"input-field col s1 center-align\"> <h5>To</h5> </div><div class=\"input-field col s5\"><select class=\"browser-default timepick\" name=\"selTimePickB_" + intId + "\" id=\"selTimePickB_" + intId + "\" /></div>");
        var removeButton = $("<div class=\"input-field col s1 center-align\"><i class=\"material-icons\" title=\"Remove\">close</i></div>");
        removeButton.click(function () {
            $(this).parent().remove();
            $('#totTimeSlots').val(parseInt($('#totTimeSlots').val()) - 1);
        });
        fieldWrapper.append(elem);
        fieldWrapper.append(removeButton);
        $("#timePickSection").append(fieldWrapper);
        $('#totTimeSlots').val(parseInt($('#totTimeSlots').val()) + 1);
        //$('.timepick').append($('<option>', {value:9, text:'09:00'}));
        $("#selTimePickA_0 > option").each(function (i, item) {
            $('.timepick').append($('<option>', {
                value: item.value,
                text: item.text
            }));
        });
    });

    //Saving Availability
    $('.btnSaveAvail').click(function () {
        //--THIS IS VALIADATION PART - if radio for duration is checked yet no value provided in date slots
        if ($('#totDateSlots').val() >= 1 && $('#timerSlot_0').val() == '' && $('input[name=duration]:checked').val() == 'one-off') {
            Materialize.toast('Please provide at least one date for your one-off availability', 3000, 'red');
            return false;
        }

        //--THIS IS VALIADATION PART - if radio for duration is checked yet 1. no checkboxes selected for days, 2. No From (input[name=repeat-from]) Date provided
        if (($('.wDays:checked').length == 0 && $('input[name=duration]:checked').val() == 'repeat') || ($('input[name=duration]:checked').val() == 'repeat' && $('#repeat-from').val() == '')) {
            Materialize.toast('Please select at least one day for your repeat availability OR provide a valid date from when you\'re available.', 3000, 'red');
            return false;
        }

        var durType = $('input[name=duration]:checked').val();

        //-- For Picking One-Off Days
        if ($('#totDateSlots').val() >= 1) {
            var arrOneOffDays = [];
            for (var x = 0; x < $('#totDateSlots').val(); x++) {
                if ($('#timerSlot_' + x).val().trim() !== '') {
                    arrOneOffDays.push($('#timerSlot_' + x).val());
                }
            }
            //console.log(arrOneOffDays);
        }

        //-- For picking repeat days
        if ($('.wDays:checked').length > 0) {
            var arrDays = [];
            $('.wDays').each(function (i) {
                if ($(this).is(':checked')) {
                    arrDays.push($(this).val());
                }
            })
        }
        //console.log(arrDays);

        //--Repeat Duration
        var repeatFrom = $('#repeat-from').val();
        var repeatTo = $('#repeat-until').val();
        var repeatUntilFlag = ($('#chkUntilFurther').is(':checked')) ? true : false;
        //--IF repeat-to date is not provided then it'll be considered as repeatUntil
        if (repeatTo == '') {
            repeatUntilFlag = true;
        }

        //-- For Picking Time
        var arrTimeSlots = [];
        var availAllDay = false;
        var openDay = false;
        if ($('input[name=timeAllDay]').is(':checked')) {
            var arrTimeS = $('input[name=timeAllDay]').val().split(' - ');
            arrTimeSlots.push(arrTimeS);
            availAllDay = true;	//flag set to true
        } else if ($('input[name=chkOpenDay]').is(':checked')) {
            openDay = true;
        } else {
            if ($('#totTimeSlots').val() >= 1) {
                for (var x = 0; x < $('#totTimeSlots').val(); x++) {
                    if ($('#selTimePickA_' + x).val() !== '') {
                        var parr = [$('#selTimePickA_' + x).val(), $('#selTimePickB_' + x).val()];
                        arrTimeSlots.push(parr);
                    }
                }
            }
        }
        //console.log(arrTimeSlots);
        //return false;
        //-- Making Final Array Of All Values
        var arrFinal = new Object();
        arrFinal.durType = durType;
        arrFinal.oneOffDays = arrOneOffDays;
        arrFinal.repeatDays = arrDays;
        arrFinal.repeatFrom = repeatFrom;
        arrFinal.repeatTo = repeatTo;
        arrFinal.repeatUntilFlag = repeatUntilFlag;
        arrFinal.timeSlots = arrTimeSlots;
        arrFinal.availAllDay = availAllDay;
        arrFinal.openDay = openDay;
        /*
         var arrPortable = new Array();
         arrPortable.push(arrFinal);
         var strFinal = JSON.parse(JSON.stringify(arrPortable))
         */

        //console.log(arrPortable);
        var strFinal = JSON.stringify(arrFinal);
        //console.log(JSON.parse(strFinal));
        customerID = $(this).data('customer');
        $.ajax({
            type: 'POST',
            url: HTTP_PATH + "/includes/caseHelper.php",
            data: 'customerID=' + customerID + '&entity=saveAvail&data=' + strFinal,
            success: function (response) {
                console.log(response);
                if (response == 'Y') {
                    Materialize.toast('Action Executed Successfully.', 3000, 'green');
                    //$('#msgAvail').html('<div class="alert alert-success">Action Executed Successfully.</div>')
                } else {
                    //$('#msgAvail').html('<div class="alert alert-danger">Done. Similar availability found & skipped.</div>');
                    Materialize.toast('Done. Similar availability found & skipped.', 3000, 'green');
                }
                listAvailability(customerID);	// Calling this list of availability
                //$('#frmAvail').get(0).reset();
                setTimeout(function () {
                    location.reload();
                }, 4000);
            }
        });
    })

    //AUTO CHECKBOX SELECTION - ALLOW AUTO SELECTING SUN-SAT IF WEEKEND IS CHECKED
    $('#wknd').click(function () {
        if ($(this).is(':checked'))
            $('#su,#s').prop("checked", true);
        else
            $('#su,#s').prop("checked", false);
    });

    //AUTO CHECKBOX SELECTION - ALLOW AUTO SELECTING MON-TUE-WED-THURS-FRI IF WEEKDAY IS CHECKED
    $('#wkd').click(function () {
        if ($(this).is(':checked'))
            $('#m,#t,#w,#th,#f').prop("checked", true);
        else
            $('#m,#t,#w,#th,#f').prop("checked", false);
    });

    //AUTO CHECKBOX SELECTION - ALLOW AUTO SELECTING WEEKDAY IF ALL MON-TUE-WED-THURS-FRI ARE CHECKED
    $('#su,#s').click(function () {
        if ($('#su').is(':checked') && $('#s').is(':checked')) {
            $('#wknd').prop("checked", true);
        } else
            $('#wknd').prop("checked", false);
    });

    //AUTO CHECKBOX SELECTION - ALLOW AUTO SELECTING WEEKEND IF BOTH SUN-SAT ARE CHECKED
    $('#m,#t,#w,#th,#f').click(function () {
        if ($('#m').is(':checked') && $('#t').is(':checked') && $('#w').is(':checked') && $('#th').is(':checked') && $('#f').is(':checked'))
            $('#wkd').prop("checked", true);
        else
            $('#wkd').prop("checked", false);
    });
});


function listAvailability(customerID) {
    $.ajax({
        type: 'POST',
        url: HTTP_PATH + "/includes/caseHelper.php",
        data: 'customerID=' + customerID + '&entity=listAvail',
        success: function (response) {
            //console.log(response);
            $('#listAvailability').html(response) //'<div class="alert alert-danger">Action Failed. Please Try Again.</div>')
            $('.delAvail').click(function () {
                var availId = $(this).data('avail');
                var customerID = $(this).data('customer');
                $.ajax({
                    type: 'POST',
                    url: HTTP_PATH + "/includes/caseHelper.php",
                    data: 'customerID=' + customerID + '&availId=' + availId + '&entity=delAvail',
                    success: function (response) {
                        //console.log(response);
                        Materialize.toast('Action Completed Successfully', 3000, 'green');
                        //$('#listAvailability').html('<div class="alert alert-danger">Action Failed. Please Try Again.</div>');
                        listAvailability(customerID);
                        setTimeout(function () {
                            location.reload();
                        }, 4000);
                    }
                });
            })
        }
    });
}

var customerID = $('.tabs').data('customer');
listAvailability(customerID);