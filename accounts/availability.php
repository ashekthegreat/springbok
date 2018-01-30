<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <title>Springbok Properties - Get Up To 100% Value For Your House Quickly</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <?php include("section-header.php"); ?>

    <main>

        <section class="sp-secondary-text section-availability">
            <div class="container narrow">

                <div class="center-align margin-bottom-30 margin-top-30">
                    <h4 class="black-text">Manage Viewings Availability</h4>
                    <h5 class="grey-text">This will help buyers book viewings online based on your availability</h5>
                </div>
                <div class="z-depth-1 margin-top-25">
                    <ul class="tabs old margin-bottom-0" data-customer="459">
                        <li class="tab col s3"><a href="#setAvail" class="active">Set Availability</a></li>
                        <li class="tab col s3"><a href="#viewAvail">View</a></li>
                    </ul>
                    <div class="tab-content margin-top-0 card-panel z-depth-0">
                        <div id="setAvail" role="tabpanel" class="tab-pane padding-40">
                            <form name="frmAavail" id="frmAvail">
                                <div id="msgAvail"></div>
                                <div>
                                    <h5>Select Duration</h5>
                                    <div>
                                        <p class="inb margin-right-30">
                                            <input type="radio" name="duration" id="durOneOff" value="one-off" checked class="durAction">
                                            <label for="durOneOff" class="radio inline">One-off availability</label>
                                        </p>
                                        <p class="inb">
                                            <input type="radio" name="duration" id="durRepeat" value="repeat" class="durAction">
                                            <label for="durRepeat" class="radio inline">Repeat availability</label>
                                        </p>
                                    </div>
                                </div>
                                <div class="dur-one-off">
                                    <div id="datePickSection">
                                        <input id="timerSlot_0" class="hasDatePicker" type="text" placeholder="Pick Date" size="10"  value="" name="timerSlot_0">
                                        <input type="hidden" name="totDateSlots" id="totDateSlots" value="1">
                                    </div>
                                    <label class="control-label"><a href="javascript:;" id="clickerAddDate"><i class="material-icons" style="vertical-align:-5px" title="Add Time Slots">add_circle</i></a></label>
                                </div>
                                <div class="dur-repeat hide">
                                    <h6 class="margin-top-25">Select Day</h6>
                                    <div class="row">
                                        <p class="col s6 m4">
                                            <input type="checkbox" name="days[]" id="m" class="wDays" value="m">
                                            <label for="m">Monday</label>
                                        </p>
                                        <p class="col s6 m4">
                                            <input type="checkbox" name="days[]" id="t" class="wDays" value="t">
                                            <label for="t">Tuesday</label>
                                        </p>
                                        <p class="col s6 m4">
                                            <input type="checkbox" name="days[]" id="w" class="wDays" value="w">
                                            <label for="w">Wednesday</label>
                                        </p>
                                        <p class="col s6 m4">
                                            <input type="checkbox" name="days[]" id="th" class="wDays" value="th">
                                            <label for="th">Thursday</label>
                                        </p>
                                        <p class="col s6 m4">
                                            <input type="checkbox" name="days[]" id="f" class="wDays" value="f">
                                            <label for="f">Friday</label>
                                        </p>
                                        <p class="col s6 m4">
                                            <input type="checkbox" name="days[]" id="s" class="wDays" value="s">
                                            <label for="s">Saturday</label>
                                        </p>
                                        <p class="col s6 m4">
                                            <input type="checkbox" name="days[]" id="su" class="wDays" value="su">
                                            <label for="su">Sunday</label>
                                        </p>
                                        <p class="col s6 m4">
                                            <input type="checkbox" name="days[]" id="wknd" class="wDays" value="wknd">
                                            <label for="wknd">All Weekend</label>
                                        </p>
                                        <p class="col s6 m4">
                                            <input type="checkbox" name="days[]" id="wkd" class="wDays" value="wkd">
                                            <label for="wkd">Every Weekday</label>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col s6">From <input id="repeat-from" class="input-small hasDatePicker" type="text" placeholder="Pick Date" size="10" value="2018-01-26"  name="repeat-from"></div>
                                        <div class="col s6">Until <input id="repeat-until" class="input-small hasDatePicker" type="text" placeholder="Pick Date" size="10" value="2018-02-01"  name="repeat-until"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col s6"><a href="javascript:;" onClick="$('#repeat-from').val('2018-01-25')">Now</a></div>
                                        <div class="col s6"><input id="chkUntilFurther" type="checkbox" name="chkUntilFurther" /> <label for="chkUntilFurther">Until further notice</label></div>
                                    </div>
                                </div>

                                <h5 class="margin-top-40">Select Time</h5>
                                <div class=" margin-top-20">
                                    <input type="checkbox" class="browser-default chkTimeAllDaye" checked="checked" name="timeAllDay" id="timeAllDay" value="900 - 1930">
                                    <label for="timeAllDay">Available all day (9:00 to 19:30)</label>
                                </div>
                                <div class="hide" id="divTimeSelection">
                                    <div id="timePickSection" class="row">
                                        <div class="input-field col s5">
                                            <select class="browser-default" name="selTimePickA_0" id="selTimePickA_0">
                                                <option value="800">08:00</option>
                                                <option value="830">08:30</option>
                                                <option value="900">09:00</option>
                                                <option value="930">09:30</option>
                                                <option value="1000">10:00</option>
                                                <option value="1030">10:30</option>
                                                <option value="1100">11:00</option>
                                                <option value="1130">11:30</option>
                                                <option value="1200">12:00</option>
                                                <option value="1230">12:30</option>
                                                <option value="1300">13:00</option>
                                                <option value="1330">13:30</option>
                                                <option value="1400">14:00</option>
                                                <option value="1430">14:30</option>
                                                <option value="1500">15:00</option>
                                                <option value="1530">15:30</option>
                                                <option value="1600">16:00</option>
                                                <option value="1630">16:30</option>
                                                <option value="1700">17:00</option>
                                                <option value="1730">17:30</option>
                                                <option value="1800">18:00</option>
                                                <option value="1830">18:30</option>
                                                <option value="1900">19:00</option>
                                                <option value="1930">19:30</option>
                                            </select>
                                        </div>
                                        <div class="input-field col s1 center-align"> <h5>To</h5> </div>
                                        <div class="input-field col s5">
                                            <select class="browser-default small"  name="selTimePickB_0" id="selTimePickB_0">
                                                <option value="800">08:00</option>
                                                <option value="830">08:30</option>
                                                <option value="900">09:00</option>
                                                <option value="930">09:30</option>
                                                <option value="1000">10:00</option>
                                                <option value="1030">10:30</option>
                                                <option value="1100">11:00</option>
                                                <option value="1130">11:30</option>
                                                <option value="1200">12:00</option>
                                                <option value="1230">12:30</option>
                                                <option value="1300">13:00</option>
                                                <option value="1330">13:30</option>
                                                <option value="1400">14:00</option>
                                                <option value="1430">14:30</option>
                                                <option value="1500">15:00</option>
                                                <option value="1530">15:30</option>
                                                <option value="1600">16:00</option>
                                                <option value="1630">16:30</option>
                                                <option value="1700">17:00</option>
                                                <option value="1730">17:30</option>
                                                <option value="1800">18:00</option>
                                                <option value="1830">18:30</option>
                                                <option value="1900">19:00</option>
                                                <option value="1930">19:30</option>
                                            </select>
                                        </div>
                                        <div class="col s1 center-align"></div>
                                        <input type="hidden" name="totTimeSlots" id="totTimeSlots" value="1">
                                    </div>
                                    <label class="control-label"><a href="javascript:;" id="clickerAddTime"><i class="material-icons" title="Add More Time Slots">add_circle</i></a> &nbsp;<i class="icon-time"></i></label>
                                </div>
                                <div id="divOpenDay" class="hide right-align">
                                    <input type="checkbox" onChange="$('#divTimeSelection').toggle();" class="chkOpenDay" id="chkOpenDay" name="chkOpenDay" value="1">
                                    <label for="chkOpenDay">Make this an open day</label>
                                </div>

                                <div class="center-align margin-top-40">
                                    <button class="waves-effect waves-light btn btn-block-on-small sp-primary sp-secondary-text" data-customer="459">Create Availability</button>
                                </div>

                                <input type="hidden" name="leads_id" value="110" />
                                <input type="hidden" name="agencyId" value="" />
                                <input type="hidden" name="customerId" value="459" />
                            </form>
                        </div>
                        <div id="viewAvail" role="tabpanel" class="tab-pane padding-40">
                            <div id="listAvailability"></div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <?php include("section-footer.php"); ?>
</body>
</html>