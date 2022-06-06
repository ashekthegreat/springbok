<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <title>Springbok Properties - Get Up To 100% Value For Your House Quickly</title>
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700&display=swap" rel="stylesheet">
    <!--Import materialize.css-->
    <!--<link type="text/css" rel="stylesheet" href="assets/css/materialize<?php /*echo in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ))?'':'.min' */?>.css"  media="screen,projection"/>-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize-from-new-only-for-test.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="assets/css/nouislider<?php echo in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ))?'':'.min' ?>.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="assets/css/may2020.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="assets/css/feb2022.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <?php include("section-header.php"); ?>

    <main>


        <section class="home-banner-1 white sp-secondary-text padding-top-20 padding-bottom-20">
            <div class="container center-align animatedParent">
                <h1 class="responsive-h1 center-align margin-0 animated fadeInLeftShort">Sell your house quickly - we'll buy any property</h1>
            </div>
        </section>

        <section id="hero-banner-1" class="home-banner-1 padding-0">
            <div class="container">
                <div class="modal-like animatedParent">
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
                                        <input type="hidden" value="" id="when_do_you_need_money_in_the_bank" name="when_do_you_need_money_in_the_bank"/>
                                    </li>
                                    <li id="hero-slider-2">
                                        <h5 class="title">Do you currently live in the property?</h5>
                                        <label class="custom-radio">
                                            <input name="living" type="radio" value="Yes" tabindex="-1" />
                                            <span class="material-icons radio">radio_button_unchecked</span>
                                            <span class="material-icons radio-checked">radio_button_checked</span>
                                            <span>Yes</span>
                                            <span class="material-icons done">done</span>
                                        </label>
                                        <label class="custom-radio">
                                            <input name="living" type="radio" value="No" tabindex="-1" />
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
                                        <div class="center-align small margin-bottom-20">&nbsp;</div>
                                        <div class="margin-bottom-15">  <!-- TODO: Add input-error as class to show invalid-->
                                            <h5 class="title">Your Phone Number</h5>
                                            <input placeholder="e.g. 07123456789" id="phone" name="phone" type="text" class="" tabindex="-1"/>
                                            <div class="help-text smaller">Please provide a valid UK telephone number</div>
                                        </div>
                                    </li>
                                    <li id="hero-slider-6">
                                        <div class="center-align small margin-bottom-20">&nbsp;</div>
                                        <div class="margin-bottom-15">
                                            <h5 class="title">Your Full Name</h5>
                                            <input placeholder="" id="name" name="name" type="text" class="" tabindex="-1"/>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="padding-top-20 hero-bottom">
                                <div class="center-align">
                                    <button type="button" class="waves-effect waves-light btn-large offer-button animated fadeIn" tabindex="-1">
                                        <span class="first-step">Get an Offer</span>
                                        <span class="other-steps">Continue</span>
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

                            <div class="margin-top-40 hero-happy">
                                Over 12,800 happy sellers, 4,400+ independent reviews
                                <img src="images/5stars.png" alt="5 Stars">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="cash-offer-explained padding-top-80">
            <div class="container animatedParent">
                <h3 class="responsive-h1 center-align margin-0 margin-bottom-30 animated fadeInLeftShort">Cash offer explained</h3>
                <p class="bigger">
                    We can help if you're looking to sell super fast or have a pressing deadline to sell. You get cash in the bank
                    fast and can exchange & move on a certain date.
                </p>

                <div class="row margin-bottom-40 seller-compare">
                    <div class="col s12 m6 l5 offset-l1">
                        <img src="images/normal-seller.jpg" width="667" height="440" alt="">
                        <div class="margin-bottom-30 label">Normal seller</div>
                    </div>
                    <div class="col s12 m6 l5">
                        <img src="images/springbok-seller.jpg" width="667" height="440" alt="">
                        <div class="margin-bottom-30 label sp-primary">Springbok seller</div>
                    </div>
                </div>

                <p class="bigger">
                    Take action now. Get a free, no-obligation cash offer for your house.
                </p>
                <ul class="bigger green-bullets">
                    <li>You get cash in days</li>
                    <li>You have a fixed date to sell with greater security</li>
                    <li>You get more cash for your property – we will beat any genuine cash offer</li>
                    <li>Quick & hassle-free process</li>
                    <li>Completely transparent</li>
                    <li>100% confidential process</li>
                    <li>100%  private sale. No hassle of viewings</li>
                </ul>

                <p class="bigger">
                    Call us now on 0800 068 7935 to arrange a visit from one of our expert acquisition managers or simply
                    fill in our online form.
                </p>
            </div>
        </section>








    </main>

    <?php include("section-footer.php"); ?>
</body>
</html>
