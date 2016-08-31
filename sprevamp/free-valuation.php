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

        <section class="free-valuation-banner sp-secondary lighten-5 sp-secondary-text">
            <div class="container">
                <div class="row">
                    <div class="col s12 m4 push-m8 margin-bottom-20">
                        <form class="white z-depth-2">
                            <div class="form-title sp-primary sp-secondary-text center-align">
                                Get Free Valuation
                            </div>
                            <div class="classic-form sp-secondary lighten-5">
                                <input placeholder="Name" id="name" name="name" type="text" class="z-depth-1">
                                <input placeholder="Phone Number" id="phone" name="phone" type="text" class="z-depth-1">
                                <input placeholder="Email" id="email" type="email" class="z-depth-1">
                                <input placeholder="Postcode" id="postcode" name="postcode" type="text" class="z-depth-1">

                                <button type="submit" class="waves-effect waves-light btn-large btn-block sp-primary sp-secondary-text">Get Started</button>
                            </div>
                        </form>
                    </div>
                    <div class="col s12 m8 pull-m4">
                        <h1 class="z-depth-1-text">Get Your Free Valuation</h1>
                        <p class="bigger">
                            We give away over 1,900 property valuations every month, completely free!
                        </p>
                        <p class="big">
                            Thinking about selling? Has your property's value increased?
                        </p>
                        <p>
                            What better way to find out how much your property could sell for than with a free valuation?
                            Whether you are ready to sell or just curious about your property's worth, we offer a free, no-obligation valuation by one of our senior local valuers:
                        </p>
                        <ul class="browser-default">
                            <li>Accurate valuation</li>
                            <li>Free, with absolutely no obligations attached</li>
                            <li>Expert advice on all possible selling options, completely free of charge</li>
                            <li>Price comparables for properties selling and sold, in and around your area</li>
                        </ul>
                        <p class="strong">
                            Call us now on 0800 068 7935 to arrange a visit from one of our expert valuers or simply fill in our online form.
                        </p>
                        <br>
                    </div>
                </div>
            </div>
        </section>

        <section class="free-valuation-call-center white sp-secondary-text center-align">
            <div class="container">
                <h2 class="big z-depth-1-text">CALL US NOW FOR A FREE VALUATION</h2>
                <p class="big">Remember, our valuation offer is completely free and doesn't commit you to anything at all. Take action now!</p>
                <h2 class="ultra-big z-depth-1-text">0800 068 7935</h2>
                <p>Freephone - we're open 24/7</p>
                <a class="waves-effect waves-light btn-large sp-secondary sp-primary-text">Contact Us</a>
            </div>
        </section>

        <section class="home-chat no-padding sp-secondary lighten-5 sp-secondary-text">
            <div class="container">
                <div class="row">
                    <div class="col s12 m8 l4">
                        <h2>Want to Chat?</h2>
                        <p class="big">Talk to our friendly experts who can help you make a better decision.</p>
                    </div>
                    <div class="col s12 m8 l5">
                        <h2>We can call you back</h2>
                        <form class="">
                            <div class="classic-form no-padding">
                                <div class="row margin-bottom-0">
                                    <div class="col s6">
                                        <input placeholder="Your Name" id="chat-name" name="chat-name" type="text">
                                    </div>
                                    <div class="col s6">
                                        <input placeholder="Your Number" id="chat-phone" name="chat-phone" type="text">
                                    </div>
                                </div>
                                <div class="right-align">
                                    <button type="submit" class="waves-effect waves-light btn-large sp-secondary sp-primary-text">Call Me Back</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include("section-footer-landing.php"); ?>
</body>
</html>