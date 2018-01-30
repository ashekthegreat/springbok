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
    <link type="text/css" rel="stylesheet" href="assets/css/materialize<?php echo in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ))?'':'.min' ?>.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <?php include("section-header.php"); ?>

    <main>

        <section class="sp-secondary-text section-book-viewing">
            <div class="container narrow">
                <div class="row">
                    <div class="col s12 m5 push-m7">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/images/property/1.jpg">
                            </div>
                            <div class="card-content padding-15">
                                <h5 class="property-price margin-0">Offers in Excess of <strong>&pound;165,000</strong></h5>
                                <a class="property-title" href="property-details.php">1 Bedroom house for sale</a>
                                <p class="property-address">5, Ridgeway Lane, BS14 9PP</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m7 pull-m5">
                        <h3>Book Your Viewing Online in Minutes</h3>
                        <p class="big">Please select the days and times you're able to view the property.</p>
                        <p>You'll receive confirmation via email &amp; SMS once the homeowner has accepted one of your options.</p>
                    </div>
                </div>

                <form id="bookForm" action="" method="post" name="bookForm" class="WF_BOOK">
                    <div class="card-panel">
                        <a href="javascript:;" class="viewNext right margin-left-40"><span class="hide-on-small-only">Next 5 Days</span> <i class="material-icons" style="">chevron_right</i></a>
                        <a href="javascript:;" class="viewPrev right"><i class="material-icons" style="">chevron_left</i> <span class="hide-on-small-only">Prev 5 Days</span></a>
                        <h5>Pick a Day</h5>
                        <div class="date-boxes margin-top-10 clearfix">
                            <div class="card-date">
                                <div class="week-day">Today</div>
                                <div class="day">22</div>
                                <div class="slots">20 slots left</div>
                            </div>
                            <div class="card-date">
                                <div class="week-day">Today</div>
                                <div class="day">22</div>
                                <div class="slots">20 slots left</div>
                            </div>
                            <div class="card-date">
                                <div class="week-day">Today</div>
                                <div class="day">22</div>
                                <div class="slots">20 slots left</div>
                            </div>
                            <div class="card-date">
                                <div class="week-day">Today</div>
                                <div class="day">22</div>
                                <div class="slots">20 slots left</div>
                            </div>
                            <div class="card-date">
                                <div class="week-day">Today</div>
                                <div class="day">22</div>
                                <div class="slots">20 slots left</div>
                            </div>
                        </div>
                        <div class="input-field col s12 margin-top-25">
                            <h5 class="clearfix">Available Times</h5>
                            <select>
                                <option value="1" selected>9:00 - 9:15</option>
                                <option value="2">9:15 - 9:30</option>
                                <option value="3">9:30 - 9:45</option>
                                <option value="4">9:45 - 10:00</option>
                                <option value="5">10:00 - 10:15</option>
                                <option value="6">10:15 - 10:30</option>
                                <option value="7">10:30 - 10:45</option>
                                <option value="8">10:45 - 11:00</option>
                                <option value="9">11:00 - 11:15</option>
                                <option value="10">11:15 - 11:30</option>
                                <option value="11">11:30 - 11:45</option>
                                <option value="12">11:45 - 12:00</option>
                                <option value="13">12:00 - 12:15</option>
                                <option value="14">12:15 - 12:30</option>
                                <option value="15">12:30 - 12:45</option>
                                <option value="16">12:45 - 13:00</option>
                                <option value="17">13:00 - 13:15</option>
                                <option value="18">13:15 - 13:30</option>
                                <option value="19">13:30 - 13:45</option>
                                <option value="20">13:45 - 14:00</option>
                                <option value="21">14:00 - 14:15</option>
                                <option value="22">14:15 - 14:30</option>
                                <option value="23">14:30 - 14:45</option>
                                <option value="24">14:45 - 15:00</option>
                                <option value="25">15:00 - 15:15</option>
                                <option value="26">15:15 - 15:30</option>
                                <option value="27">15:30 - 15:45</option>
                                <option value="28">15:45 - 16:00</option>
                                <option value="29">16:00 - 16:15</option>
                                <option value="30">16:15 - 16:30</option>
                                <option value="31">16:30 - 16:45</option>
                                <option value="32">16:45 - 17:00</option>
                                <option value="33">17:00 - 17:15</option>
                                <option value="34">17:15 - 17:30</option>
                                <option value="35">17:30 - 17:45</option>
                                <option value="36">17:45 - 18:00</option>
                                <option value="37">18:00 - 18:15</option>
                                <option value="38">18:15 - 18:30</option>
                                <option value="39">18:30 - 18:45</option>
                                <option value="40">18:45 - 19:00</option>
                            </select>
                        </div>

                        <input type="hidden" name="bookedDay" value="" id="bookedDay">
                        <input type="hidden" name="bookedDate" value="" id="bookedDate">
                        <input type="hidden" name="bookedTime" value="" id="bookedTime">
                        <input type="hidden" name="leads_id" value="110" id="leads_id">
                        <input type="hidden" name="address" value="7,  Dudley Walk , TS10 2LN" id="address">
                        <input type="hidden" name="agent_ref" value="269968" id="agent_ref">
                        <input type="hidden" name="agencyId" value="1" id="agencyId">
                        <input type="hidden" name="crmBuyerId" value="705282" id="crmBuyerId">
                        <input type="hidden" name="buyerEmail" value="buyer@springbok.com" id="buyerEmail">
                        <input type="hidden" name="buyerPhone" value="3094534985" id="buyerPhone">
                        <input type="hidden" name="buyerName" value="TEST BUYER" id="buyerName">
                        <input type="hidden" name="bookingId" id="bookingId" value="">

                        <h4 class="center-align margin-top-40 margin-bottom-40">You've selected viewing on Sat, 20 Jan at 9:15</h4>

                        <div class="center-align margin-bottom-25">
                            <button class="waves-effect waves-light btn btn-block-on-small sp-primary sp-secondary-text" type="submit">Confirm and Continue</button>
                        </div>
                    </div>

                </form>
            </div>
        </section>

    </main>

    <?php include("section-footer.php"); ?>
</body>
</html>