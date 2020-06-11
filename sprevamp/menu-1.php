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
    <link type="text/css" rel="stylesheet" href="assets/css/may2020.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body>
    <?php include("section-header.php"); ?>

    <main>

        <style type="text/css" rel="stylesheet">
            #main-nav > li{
                transition: none;
            }
            #main-nav > li:hover > a{
                background: #408080;
                color: #fff;
                /*background: #fff;
                box-shadow: 2px 0 0 0 #408080 inset, 0 2px 0 0 #408080 inset, -2px 0 0 0 #40807F inset;
                z-index: 1000;
                position: relative;
                color: #494949;
                transition: none;*/
            }
            #main-nav .dropdown-content{
                background: rgba(255,255,255,.98);
                border: 2px solid #408080;
                min-width: 200px;
                margin-top: -2px;
                border-radius: 0 0 8px 8px;
            }
            #main-nav .dropdown-content li{
                transition: none;
                position: relative;
            }
            #main-nav .dropdown-content a{
                color: #494949;
                padding: 10px 30px;
                transition: none;
            }
            #main-nav .dropdown-content a:before{
                content: "";
                position: absolute;
                left: 16px;
                top: 16px;
                width: 0;
                height: 0;
                border-style: solid;
                border-width: 5px 0 5px 5px;
                border-color: transparent transparent transparent #494949;
            }
            #main-nav .dropdown-content a:hover {
                background: #408080;
                color: #fff;
            }
            #main-nav .dropdown-content a:hover:before {
                border-color: transparent transparent transparent #fff;
            }
        </style>
        <section class="home-banner-2 section-hero-form padding-top-30 padding-bottom-30">
            <div class="container">
                <div class="row margin-bottom-0">
                    <div class="col s12 m5 push-m7 l5 push-l7 animatedParent">
                        <form class="white z-depth-2 animated fadeIn delay-250">
                            <div class="form-title sp-primary sp-secondary-text center-align">
                                <div class="nowrap">Get A Free</div>
                                <div class="nowrap">No-Obligation Offer</div>
                            </div>

                            <div class="classic-form sp-primary">
                                <input placeholder="Postcode" id="postcode" name="postcode" type="text" class="z-depth-1">
                                <input placeholder="Name" id="name" name="name" type="text" class="z-depth-1">
                                <input placeholder="Phone" id="phone" name="phone" type="text" class="z-depth-1">
                                <input placeholder="Email" id="email" type="email" class="z-depth-1">

                                <div class="center-align margin-top-10">
                                    <button type="submit" class="waves-effect waves-light btn-large btn-block white-text offer-button animated fadeInUpShort delay-250">Get an Offer</button>
                                </div>
                                <div class="center-align smallest margin-top-15">
                                    <i class="material-icons">lock</i>
                                    100% secure & confidential. Data protection registration number ZA065473
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col s12 m7 pull-m5 l6 pull-l5">
                        <div class="banner-text">
                            <div class="banner-text-content animatedParent">
                                <h3 class="banner-h animated fadeInDownShort">
                                    Fast Sale Specialist - UK's Most
                                    Versatile Property Company
                                </h3>
                                <div class="margin-top-30">
                                    <div class="valign-wrapper margin-bottom-15 animated fadeInRightShort">
                                        <img src="images/hero-frames/speed_circle.png">
                                        <div class="margin-left-10">
                                            <h5 class="margin-0">SPEED</h5>
                                            <div>You need cash in a few days or weeks, we have a solution for this</div>
                                        </div>
                                    </div>
                                    <div class="valign-wrapper margin-bottom-15 animated fadeInRightShort delay-250">
                                        <img src="images/hero-frames/value_circle.png">
                                        <div class="margin-left-10">
                                            <h5 class="margin-0">MAXIMUM VALUE</h5>
                                            <div>You need to get 100% of value we have 1000s of case studies and success stories</div>
                                        </div>
                                    </div>
                                    <div class="valign-wrapper animated fadeInRightShort delay-500">
                                        <img src="images/hero-frames/secure_circle.png">
                                        <div class="margin-left-10">
                                            <h5 class="margin-0">SECURE SALE</h5>
                                            <div>You need a secure sale for your peace of mind, we got you</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="home-voted" class="home-voted sp-secondary lighten-5 sp-secondary-text scrollspy">
            <div class="container">
                <div class="row margin-bottom-0 voted-row">
                    <div class="col s12 m7 l6 center-align voted-left animatedParent">
                        <h5 class="animated fadeIn">Over 10,400 happy sellers - 24 Gold Awards</h5>
                    </div>
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

        <section class="ratings services-rating scrollspy padding-20">
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



    </main>

    <?php include("section-footer.php"); ?>
</body>
</html>
