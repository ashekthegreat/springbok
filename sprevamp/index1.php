<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <title>Springbok Properties - Get Up To 100% Value For Your House Quickly</title>
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize<?php echo in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ))?'':'.min' ?>.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="assets/css/nouislider<?php echo in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ))?'':'.min' ?>.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="assets/css/may2020.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <?php include("section-header.php"); ?>

    <main>


        <section class="home-banner-1 white sp-secondary-text padding-top-20 padding-bottom-20">
            <div class="container center-align animatedParent">
                <h3 class="banner-h1 center-align margin-0 animated fadeInLeftShort">Fast Sale Specialist - UK's Most Versatile Property Company</h3>
            </div>
        </section>

        <section class="sp-secondary lighten-1 white-text padding-10">
            <div class="container animatedParent">
                <div class="center-align bigger">
                    Get the best solution and no-obligation offer for your property
                </div>
            </div>
        </section>

        <section id="hero-banner-1" class="home-banner-1 padding-0">
            <img src="images/hero-frames/hero-bg.jpg" width="1877" height="780" class="hero-1-bg">
            <div class="container">
                <div class="modal-like z-depth-2 animatedParent">
                    <form class="">
                        <div class="classic-form">
                            <div class="hero-progress">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;"></div>
                                    <div class="progress-text">Progress 25%</div>
                                </div>
                            </div>
                            <div class="hero-slider">
                                <ul>
                                    <li id="hero-slider-1">
                                        <h5 class="title animated bounceInDown">How quickly would you like to move or have money in the bank?</h5>
                                        <div class="month-range">
                                            <div id="month-slider"></div>
                                        </div>
                                        <input type="hidden" id="month" name="month"/>
                                    </li>
                                    <li id="hero-slider-2">
                                        <h5 class="title">Do you currently live in the property?</h5>
                                        <label class="custom-radio">
                                            <input name="living" type="radio" value="yes" tabindex="-1" />
                                            <span class="material-icons radio">radio_button_unchecked</span>
                                            <span class="material-icons radio-checked">radio_button_checked</span>
                                            <span>Yes</span>
                                            <span class="material-icons done">done</span>
                                        </label>
                                        <label class="custom-radio">
                                            <input name="living" type="radio" value="no" tabindex="-1" />
                                            <span class="material-icons radio">radio_button_unchecked</span>
                                            <span class="material-icons radio-checked">radio_button_checked</span>
                                            <span>No</span>
                                            <span class="material-icons done">done</span>
                                        </label>
                                    </li>
                                    <li id="hero-slider-3">
                                        <div class="center-align small margin-bottom-20">Your address allows us to provide accurate offers for your property</div>
                                        <div class="margin-bottom-15">
                                            <h5 class="title">First line of address</h5>
                                            <input placeholder="" id="address" name="address" type="text" class="" tabindex="-1"/>
                                        </div>
                                        <div class="margin-bottom-15">
                                            <h5 class="title">Postcode</h5>
                                            <input placeholder="e.g. BB1 8HG" id="postcode" name="postcode" type="text" class="" tabindex="-1"/>
                                        </div>
                                    </li>
                                    <li id="hero-slider-4">
                                        <div class="center-align small margin-bottom-20">Almost done. Please fill in your last few details to continue</div>
                                        <div class="margin-bottom-15">
                                            <h5 class="title">Your Email Address</h5>
                                            <input placeholder="e.g. yourname@domain.com" id="email" name="email" type="text" class="" tabindex="-1"/>
                                        </div>
                                    </li>
                                    <li id="hero-slider-5">
                                        <div class="margin-bottom-15">
                                            <h5 class="title">Your Full Name</h5>
                                            <input placeholder="" id="name" name="name" type="text" class="" tabindex="-1"/>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="padding-top-20 hero-bottom">
                                <div class="center-align">
                                    <button type="button" class="waves-effect waves-light btn-large btn-block white-text offer-button animated fadeIn" tabindex="-1">
                                        <span class="first-step">
                                            Get an Offer
                                            <span class="offer-button-sub">Complete our short form - it only takes a minute</span>
                                        </span>
                                        <span class="other-steps">
                                            Continue
                                        </span>
                                    </button>
                                </div>
                                <div class="hero-slider-prev padding-top-10">
                                    <a href="javascript:" class="prev"><span class="material-icons">chevron_left</span> Previous</a>
                                </div>
                                <div class="center-align smallest margin-top-10">
                                    <i class="material-icons" style="font-size: inherit;">lock</i>
                                    100% secure & confidential. Data protection registration number ZA065473
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="services-regulator sp-secondary lighten-1 white-text">
            <div class="container">
                <div class="row margin-bottom-0 animatedParent">
                    <div class="col s12 m12 l3">
                        <h4 class="regulated-label animated fadeInLeftShort">We Are Regulated:</h4>
                    </div>
                    <div class="col s12 m12 l9">
                        <div class="logos">
                            <img class="responsive-img logo-1 animated growIn delay-250" src="images/regulators/1.png" alt="The Property Ombudsman">
                            <img class="responsive-img logo-2 animated growIn delay-500" src="images/regulators/2.png" alt="GOV.UK">
                            <img class="responsive-img logo-3 animated growIn delay-750" src="images/regulators/3.png" alt="Approved Code">
                            <img class="responsive-img logo-4 animated growIn delay-1000" src="images/regulators/4.png" alt="napb">
                            <img class="responsive-img logo-5 animated growIn delay-1250" src="images/regulators/5.png" alt="nava">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ratings services-rating padding-20">
            <div class="container">
                <div class="center">
                    <div class="logo first">
                        <div class="left"> <img src="images/logo_trust.png" alt=""> <span> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star_half</i> </span> </div>
                        <div class="right animatedParent"> <span class="animated bounceIn go">8/10</span> 494+ reviews</div>
                    </div>
                    <div class="logo">
                        <div class="left"> <img src="images/logo_allagen.png" alt=""> <span> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star_half</i> </span> </div>
                        <div class="right animatedParent"> <span class="animated bounceIn go">4.6/5</span>1,524+ reviews</div>
                    </div>
                    <div class="logo">
                        <div class="left"> <img src="images/logo_google.png" alt=""> <span> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star_half</i> </span> </div>
                        <div class="right animatedParent"> <span class="animated bounceIn go">4.1/5</span>444+ reviews</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-banner-features padding-top-30 padding-bottom-80">
            <div class="container">
                <div class="features animatedParent">
                    <div class="margin-top-80 margin-bottom-0 row">
                        <div class="col s12 m4 center-align">
                            <img src="images/hero-frames/speed.png" width="150" height="150" alt="" class="animated fadeInDownShort">
                            <h5>SPEED</h5>
                            <p>You need cash in a few days or weeks, we have a solution for this</p>
                        </div>
                        <div class="col s12 m4 center-align value-box">
                            <img src="images/hero-frames/value.png" width="126" height="126" alt="" class="animated fadeInDownShort">
                            <h5>MAXIMUM VALUE</h5>
                            <p>You need to get 100% of value we have 1000s of case studies and success stories</p>
                        </div>
                        <div class="col s12 m4 center-align">
                            <img src="images/hero-frames/secure.png" width="94" height="124" alt="" class="animated fadeInDownShort">
                            <h5>SECURE SALE</h5>
                            <p>You need a secure sale for your peace of mind, we got you</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </main>
<hr>
    <?php include("section-footer.php"); ?>
</body>
</html>
