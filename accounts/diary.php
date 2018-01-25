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

        <section class="sp-secondary-text section-diary">
            <div class="container narrow">
                <h4 class="center-align margin-bottom-30">Your Appointments</h4>

                <div class="card white sp-secondary-text">
                    <div class="card-content">
                        <h5>
                            Wednesday, 01st Nov 2017, 10:05am
                            <span class="label sp-secondary white-text">Scheduled</span>
                            <span class="label sp-primary sp-secondary-text">Confirmed</span>
                        </h5>
                        <p>Property Valuation for TS10 2LN, with our Regional Valuer David J Jordan</p>
                    </div>
                    <div class="card-action right-align">
                        <a href="#" class="waves-effect waves-light btn sp-secondary white-text">Reschedule</a>
                        <a href="#" class="waves-effect waves-light btn sp-secondary white-text">Cancel</a>
                    </div>
                </div>

                <div class="card white sp-secondary-text">
                    <div class="card-content">
                        <h5>
                            Sunday, 05th Nov 2017, 01:00pm
                            <span class="label red darken-3 white-text">Cancelled</span>
                        </h5>
                        <p>Property Viewing with Michael Cairnes</p>
                    </div>
                    <div class="card-action right-align">
                        <a href="#" class="waves-effect waves-light btn sp-secondary white-text">Suggest a New Time</a>
                        <a href="#" class="waves-effect waves-light btn sp-secondary white-text">Reschedule</a>
                        <a href="#" class="waves-effect waves-light btn sp-secondary white-text">Cancel</a>
                    </div>
                </div>

                <div id="my-calendar" class="margin-top-30 z-depth-1"></div>

                <div class="explantion margin-top-30">
                    <h6>KEY</h6>

                    <div class="key">
                        <div class="key-legend key-available"></div>
                        <div class="key-description">
                            <p class="tiny"><b>Available for viewings</b><br>You are available for viewings. We will automatically book viewings for you.</p>
                        </div>
                    </div>
                    <div class="key">
                        <div class="key-legend key-not-set"></div>
                        <div class="key-description">
                            <p class="tiny"><b>No set availibility for viewings </b><br>You have not specified your availability. We will provisionally book viewings for you to confirm.</p>
                        </div>
                    </div>
                    <div class="key">
                        <div class="key-legend key-arranged"></div>
                        <div class="key-description">
                            <p class="tiny"><b>Viewings arranged</b><br>You have viewing appointments. Please check your availability</p>
                        </div>
                    </div>
                    <div class="key">
                        <div class="key-legend key-appointment"></div>
                        <div class="key-description">
                            <p class="tiny"><b>Property Valuation / Other Appointments</b><br>You have other appointments, such as valuations. Please check your availability.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <?php include("section-footer.php"); ?>
</body>
</html>