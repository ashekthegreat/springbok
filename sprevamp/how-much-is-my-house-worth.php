<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <title>Springbok Properties - Get Up To 100% Value For Your House Quickly</title>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize<?php echo in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ))?'':'.min' ?>.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <?php include("section-header-landing.php"); ?>

    <main>

        <section class="house-worth-banner sp-secondary-text">
            <div class="container">
                <form class="estimate-form center-align classic-form white">
                    <h3>How much is your house worth?</h3>
                    <p class="center-align big">
                        Find out for free!<br>
                        Springbok Properties determines your home's estimated value based on recent sales in your area.
                    </p>
                    <div class="row">
                        <div class="col s12 m4">
                            <input placeholder="Postcode" id="postcode" name="postcode" type="text" class="z-depth-1">
                        </div>
                        <div class="col s12 m4">
                            <input placeholder="Email" id="email" type="email" class="z-depth-1">
                        </div>
                        <div class="col s12 m4">
                            <input placeholder="Phone Number" id="phone" name="phone" type="text" class="z-depth-1">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m12 l4 offset-l4">
                            <button type="submit" class="waves-effect waves-light btn-large btn-block sp-primary sp-secondary-text">Estimate Now</button>
                        </div>
                    </div>

                </form>
            </div>
        </section>

        <section class="house-worth-estimate sp-secondary-text">
            <div class="container">
                <h1 class="big center-align">What IS SPRINGBOK's House Price Estimate?</h1>
                <div class="row">
                    <div class="col m4 s12">
                        <div class="row">
                            <div class="col s12 m11">
                                <p class="center-align"><img src="assets/images/pin/graph.png" width="64" height="93"></p>
                                <h4>How do we calculate it?</h4>
                                <p class="big">
                                    We use current and recent sales and market price data of similar properties in your area.
                                    Using these comparables helps us instantly estimate your property's current market
                                    value - no waiting, no fuss, just an instant online estimate.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col m4 s12">
                        <div class="row">
                            <div class="col s12 m11">
                                <p class="center-align"><img src="assets/images/pin/calculator.png" width="64" height="93"></p>
                                <h4>Has your property's value increased?</h4>
                                <p class="big">
                                    Your estimate is powered by real-time property prices and details so you can find
                                    out what your house is currently worth. Get the latest pricing estimate and see
                                    how much more your home is worth, based on property sales in your neighborhood.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col m4 s12">
                        <div class="row">
                            <div class="col s12 m11">
                                <p class="center-align"><img src="assets/images/pin/bulls-eye.png" width="64" height="93"></p>
                                <h4>What is Expert Valuation?</h4>
                                <p class="big">
                                    Our experienced regional valuer can perform a full, professional valuation of your
                                    house in person. You'll get price recommendations based on the property's unique
                                    characteristics and details. Contact us for a free consultation with our experts
                                    who specialise in your area.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

    <?php include("section-footer-landing.php"); ?>
</body>
</html>