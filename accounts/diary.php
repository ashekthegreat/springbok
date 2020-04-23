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
        <nav class="breadcrumb-container">
            <div class="container narrow nav-wrapper">
                <div class="col s12">
                    <a href="javascript:;" class="breadcrumb">Home</a>
                    <a href="javascript:;" class="breadcrumb">Property details</a>
                    <a href="javascript:;" class="breadcrumb">Address Details</a>
                </div>
            </div>
        </nav>
        <section class="sp-secondary-text section-diary">
            <div class="container">
                <h3 class="center-align margin-bottom-30">Your Appointments</h3>

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
                        <a href="#" class="waves-effect waves-light btn sp-primary sp-secondary-text">Reschedule</a>
                        <a href="#" class="waves-effect waves-light btn sp-secondary lighten-5 sp-secondary-text">Cancel</a>
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
                        <a href="#" class="waves-effect waves-light btn sp-secondary lighten-2 white-text">Suggest a New Time</a>
                        <a href="#" class="waves-effect waves-light btn sp-primary sp-secondary-text">Reschedule</a>
                        <a href="#" class="waves-effect waves-light btn sp-secondary lighten-5 sp-secondary-text">Cancel</a>
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
                            <p class="tiny"><b>No set availability for viewings </b><br>You have not specified your availability. We will provisionally book viewings for you to confirm.</p>
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
    <!-- Modal Structure -->
    <div id="diary-modal" class="modal">
        <div class="modal-content">
            <h4>Modal Header</h4>
            <p class="message message-available">You are available for viewings. We will automatically book viewings for you.</p>
            <p class="message message-arranged">You have viewing appointments. Please check your availability</p>
            <p class="message message-appointment">You have other appointments, such as valuations. Please check your availability.</p>
            <p class="message message-no-set">You have not specified your availability. We will provisionally book viewings for you to confirm.</p>
        </div>
        <div class="modal-footer">
            <a href="javascript:;" class="modal-action modal-close waves-effect waves-light btn btn-block-on-small sp-secondary lighten-5 sp-secondary-text margin-left-5">Close</a>
            <a href="availability.php" class="waves-effect waves-light btn btn-block-on-small sp-primary sp-secondary-text margin-left-5">Reschedule</a>
            <a href="availability.php" class="waves-effect waves-light btn btn-block-on-small sp-secondary lighten-2 white-text margin-left-5">Suggest a New Time</a>
        </div>
    </div>

    <?php include("section-footer.php"); ?>
</body>
</html>
