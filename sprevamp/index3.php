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


        <section id="hero-banner-1" class="home-banner-1 padding-0 padding-bottom-40">
            <div class="container animatedParent">
                <h1 class="responsive-h1 center-align margin-0 padding-top-20 padding-bottom-20 animated fadeInLeftShort">Sell your house quickly - we'll buy any property</h1>
                <div class="modal-like">
                    <form class="WF_STEP" action="//simbacloud.co.uk/Users/forms/processFormValid.php" method="post">
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
                                            <input placeholder="" id="address" name="address" type="text" class=""/>
                                        </div>
                                        <div class="margin-bottom-15 prop-postcode">
                                            <h5 class="title">Postcode</h5>
                                            <input placeholder="e.g. BB1 8HG" id="postcode" name="postcode" type="text" class=""/>
                                            <div class="help-text smaller" id="field-slide-2">Postcode is required</div>
                                        </div>
                                    </li>
                                    <li id="hero-slider-4">
                                        <div class="center-align small margin-bottom-20">Almost done. Please fill in your last few details to continue</div>
                                        <div class="margin-bottom-15">
                                            <h5 class="title">Your Email Address</h5>
                                            <input placeholder="e.g. yourname@domain.com" id="email" name="email" type="text" class="" tabindex="-1"/>
                                            <div class="help-text smaller" id="field-slide-3">Please provide a valid email</div>
                                        </div>
                                    </li>
                                    <li id="hero-slider-5">
                                        <div class="center-align small margin-bottom-20"> </div>
                                        <div class="margin-bottom-15">
                                            <h5 class="title">Your Phone Number</h5>
                                            <input placeholder="e.g. 07123456789" id="phone" name="phone" type="text" class="" tabindex="-1"/>
                                            <div class="help-text smaller" id="field-slide-4">Please provide a valid UK telephone number</div>
                                        </div>
                                    </li>
                                    <li id="hero-slider-6">
                                        <div class="center-align small margin-bottom-20"> </div>
                                        <div class="margin-bottom-15">
                                            <h5 class="title">Your Full Name</h5>
                                            <input placeholder="" id="name" name="name" type="text" class="" tabindex="-1"/>
                                            <div class="help-text smaller" id="field-slide-5">Please enter your full name</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <input id="do_you_live_in_the_property" name="do_you_live_in_the_property" type="hidden" value=""/>
                            <input id="type" name="type" type="hidden" value="sendWFChunk"/>
                            <input id="randnum" name="randnum" type="hidden" value=""/>
                            <input type="hidden" name="_wf_salt" value="32bff4bb94d09e7c377dabc0ab42c39a">
                            <input type="hidden" name="_redirection" value="https://springbokproperties.co.uk/thanks">
                            <input type="hidden" name="_wf_name" value="SP.co.uk - Home Free Valuation">
                            <input type="hidden" name="_wf_len" value="5">
                            <input type="hidden" name="_source" value="SP.co.uk - Home Steps">
                            <input type="hidden" name="_page_url" value="springbokproperties.co.uk/home-steps">
                            <input type="hidden" name="_srcChannel" value="WEB">
                            <input type="hidden" value="" name="notext"><input type="hidden" value="" name="searchterm">
                            <input type="hidden" value="" name="searchterm">
                            <div class="padding-top-20 hero-bottom">
                                <div class="center-align">
                                    <button type="button" id="form-offer-button" class="waves-effect waves-light btn-large offer-button animated fadeIn" tabindex="-1">
                                        <span class="first-step">Get an offer</span>
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
                                <img src="images/5stars.png" width="157" height="30" alt="5 Stars">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="home-regulator sp-secondary lighten-5">
            <div class="container animatedParent">
                <div class="logos">
                    <div class="logo-1 animated growIn delay-250">
                        <img class="responsive-img" src="images/regulators-new/ombudsman.png" width="221" height="77" alt="The Property Ombudsman">
                    </div>
                    <div class="logo-2 animated growIn delay-500">
                        <img class="responsive-img" src="images/regulators-new/gov-uk.png" width="286" height="73" alt="GOV.UK">
                    </div>
                    <div class="logo-3 animated growIn delay-750">
                        <img class="responsive-img" src="images/regulators-new/trading-standards.png" width="179" height="88" alt="Approved Code">
                    </div>
                    <div class="logo-4 animated growIn delay-1000">
                        <img class="responsive-img" src="images/regulators-new/google-reviews.png" width="211" height="95" alt="Google Reviews">
                        <div class="review-count">4.1/5 <div class="review-count-sub">444+ reviews</div></div>
                    </div>
                    <div class="logo-5 animated growIn delay-1250">
                        <img class="responsive-img" src="images/regulators-new/all-agents.png" width="245" height="78" alt="All Agents">
                        <div class="review-count">4.6/5 <div class="review-count-sub">1524+ reviews</div></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-challenge">
            <div class="container animatedParent">
                <h2 class="responsive-h1 center-align margin-0 animated fadeInLeftShort">We understand the challenges of selling a house</h2>
                <div class="items">
                    <div class="item animated fadeInUpShort">
                        <div class="logo"><img src="images/challenge-logos/challenge-1.png" width="65" height="65" alt="" loading="lazy"></div>
                        <div class="text">Stuck on the market for months</div>
                    </div>
                    <div class="item animated fadeInUpShort">
                        <div class="logo"><img src="images/challenge-logos/challenge-2.png" width="65" height="65" alt="" loading="lazy"></div>
                        <div class="text">No guarantee of a sale</div>
                    </div>
                    <div class="item animated fadeInUpShort">
                        <div class="logo"><img src="images/challenge-logos/challenge-3.png" width="65" height="65" alt="" loading="lazy"></div>
                        <div class="text">Long chains and buyer pulling out</div>
                    </div>
                    <div class="item animated fadeInUpShort">
                        <div class="logo"><img src="images/challenge-logos/challenge-4.png" width="65" height="65" alt="" loading="lazy"></div>
                        <div class="text">Insultingly low offers from cash buyers</div>
                    </div>
                    <div class="item animated fadeInUpShort">
                        <div class="logo"><img src="images/challenge-logos/challenge-5.png" width="65" height="65" alt="" loading="lazy"></div>
                        <div class="text">Hassles of dealing with estate agents</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-clutter sp-teal white-text">
            <div class="container animatedParent">
                <h2 class="responsive-h1 center-align animated fadeInLeftShort margin-bottom-40">We eliminate the clutter and focus on what matters to YOU!</h2>
                <div class="clutter-steps">
                    <div class="step step-1">
                        <img src="images/clutter-steps/clutter-step-1.png" width="300" height="268" class="clutter-bg" alt="" loading="lazy">
                        <h5>We deliver results. <br>Full stop.</h5>
                        <p class="margin-top-20">12,800+ happy sellers<br>4,400+ reviews</p>
                    </div>
                    <div class="step step-2 text-center">
                        <img src="images/clutter-steps/clutter-step-2.png" width="300" height="268" class="clutter-bg" alt="" loading="lazy">
                        <div class="clutter-icon"><img src="images/clutter-steps/icon-1.png" width="85" height="68" alt="" loading="lazy"></div>
                        <h5>Speed</h5>
                        <p>sell in 21 days or a date that suits you</p>
                    </div>
                    <div class="step step-3 text-center">
                        <img src="images/clutter-steps/clutter-step-2.png" width="300" height="268" class="clutter-bg" alt="" loading="lazy">
                        <div class="clutter-icon"><img src="images/clutter-steps/icon-2.png" width="85" height="68" alt="" loading="lazy"></div>
                        <h5>Secure sale</h5>
                        <p>for your peace of mind</p>
                    </div>
                    <div class="step step-4 text-center">
                        <img src="images/clutter-steps/clutter-step-2.png" width="300" height="268" class="clutter-bg" alt="" loading="lazy">
                        <div class="clutter-icon"><img src="images/clutter-steps/icon-3.png" width="85" height="68" alt="" loading="lazy"></div>
                        <h5>Tailored for you</h5>
                        <p>solutions suitable to your unique circumstances</p>
                    </div>
                </div>

                <div class="center-align">
                    <a href="get-cash-offer" class="waves-effect waves-light btn-large offer-button animated fadeIn center-align">
                        Get a cash offer
                    </a>
                </div>
            </div>
        </section>

        <section class="home-simple-steps">
            <div class="container animatedParent">
                <h2 class="responsive-h1 center-align animated fadeInLeftShort margin-bottom-40">How it works in 4 simple steps</h2>
                <div class="simple-steps">
                    <div class="step">
                        <div class="label">STEP 1</div>
                        <div class="text">We assess your situation and discuss all available options</div>
                    </div>
                    <div class="step">
                        <div class="label">STEP 2</div>
                        <div class="text">We tailor a solution that's most suitable, based on your circumstances, price expectations and timeframes</div>
                    </div>
                    <div class="step">
                        <div class="label">STEP 3</div>
                        <div class="text">The deal is agreed and we take care of everything from here (even the legal stuff)</div>
                    </div>
                    <div class="step">
                        <div class="label">STEP 4</div>
                        <div class="text">Exchange contracts then complete the sale, and your receive your money</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-sale-fast">
            <div class="container animatedParent">
                <div class="youtube-video center-align" data-id="L_64x2bc7ao">
                    <img src="images/yt-fast-sale.jpg" width="1024" height="576" alt="" loading="lazy">
                </div>

                <h2 class="responsive-h1 center-align animated fadeInLeftShort margin-bottom-30 margin-top-50">Sell your house fast and hassle-free</h2>
                <p class="big">Springbok Properties is the UK's leading property buying company, dedicated to finding homeowners the <strong>best solution</strong>
                    to get their home sold quickly for the price they need.</p>

                <p class="big">Whether you're looking for us to buy your <strong>home from you for fast cash</strong> (in as little as 7-21 days), or you want to achieve
                    closer to market value with a <strong>fast, proactive</strong> property company; we are your number one choice.</p>

                <p class="big">Established in 2011, Springbok Properties has helped <strong>over 12,800 homeowners</strong> across the country to sell their property
                    quickly. With multiple options such as our <strong>'sell your house fast'</strong> service or our award-winning <strong>'we buy any house'</strong> option,
                    we can cater to most homeowners' needs to get their house sold fast without any hassle.</p>

                <p class="big">Our <strong>cash house sale option</strong> comes with <strong>no fee to you</strong> as the seller; it includes all your legal and valuation expenses.</p>

                <p class="big">The best <strong>starting point</strong> is to get a free no-obligation consultation and free valuation online now to find out what we would
                    pay for your home in cash and discover our other options to <strong>get your home sold</strong>.</p>
            </div>
        </section>

        <section class="home-sale-compare">
            <div class="container animatedParent">
                <h2 class="responsive-h1 center-align animated fadeInLeftShort margin-top-30 margin-bottom-50">How Springbok's sale compare to a typical open market sale</h2>

                <div class="compare-table">
                    <img src="images/compare-stamp.png" width="200" height="200" alt="" class="compare-stamp" loading="lazy">
                    <div class="item heading">
                        <div class="col1">Timeframes from sign up to completion</div>
                        <div class="col2">Estate Agent<br>6-9 months</div>
                        <div class="col3"><span class="sp-primary-text">Springbok Sale</span><br>1-3 months</div>
                    </div>
                    <div class="item">
                        <div class="col1"><div class="border">Offer accepted</div></div>
                        <div class="col2"><div class="border">2-4 months</div></div>
                        <div class="col3"><div class="border">1-7 days</div></div>
                    </div>
                    <div class="item">
                        <div class="col1"><div class="border">Estate agent fees</div></div>
                        <div class="col2"><div class="border">&pound;2,180 - &pound;4,500 (average)</div></div>
                        <div class="col3"><div class="border">&pound;0*</div></div>
                    </div>
                    <div class="item">
                        <div class="col1"><div class="border">Ongoing mortgage payments<br>(9 months average)</div></div>
                        <div class="col2"><div class="border">&pound;4,500</div></div>
                        <div class="col3"><div class="border">&pound;0 - &pound;1,500 (depending on how quickly you wish to complete)</div></div>
                    </div>
                    <div class="item">
                        <div class="col1"><div class="border">Solicitors & legal fees</div></div>
                        <div class="col2"><div class="border">&pound;700 (average)</div></div>
                        <div class="col3"><div class="border">&pound;0</div></div>
                    </div>
                    <div class="item">
                        <div class="col1"><div class="border">Renovation, repairs, redecorating</div></div>
                        <div class="col2"><div class="border">&pound;1,500 (average)</div></div>
                        <div class="col3"><div class="border">&pound;0 (you sell "as is")</div></div>
                    </div>
                    <div class="item">
                        <div class="col1"><div class="border">Council tax and utility bills</div></div>
                        <div class="col2"><div class="border">&pound;800 (average)</div></div>
                        <div class="col3"><div class="border">&pound;0 - &pound;300</div></div>
                    </div>
                    <div class="item">
                        <div class="col1"><div class="border">The time you save<br>(as many as 6-9 months)</div></div>
                        <div class="col2"><div class="border">-</div></div>
                        <div class="col3"><div class="border">Priceless</div></div>
                    </div>
                    <div class="item">
                        <div class="col1"><div class="border">Zero stress and hassle</div></div>
                        <div class="col2"><div class="border">-</div></div>
                        <div class="col3"><div class="border">Priceless</div></div>
                    </div>
                    <div class="item">
                        <div class="col1"><div class="border">Closure and ability to move to your next chapter</div></div>
                        <div class="col2"><div class="border">-</div></div>
                        <div class="col3"><div class="border">Priceless</div></div>
                    </div>
                    <div class="item last">
                        <div class="col1"><div class="border">Being in control and your peace of mind</div></div>
                        <div class="col2"><div class="border">-</div></div>
                        <div class="col3"><div class="border">Priceless</div></div>
                    </div>
                </div>
                <div class="zero-fee">*zero fees charged for direct cash purchase or fixed price sale</div>
            </div>
        </section>

        <section id="home-estimator" class="home-estimator sp-secondary lighten-5 scrollspy padding-bottom-80">
            <div class="container animatedParent">
                <h2 class="responsive-h1 center-align animated fadeInLeftShort margin-top-30 margin-bottom-10">Try our free offer estimator</h2>
                <div class="center-align big margin-0 padding-0">See what is possible with yor property in 2 minutes online</div>
                <form class="margin-top-30">
                    <div class="classic-form1 new-form-style">
                        <input placeholder="Name" id="name" name="name" type="text" class="z-depth-1">
                        <input placeholder="Phone Number" id="phone" name="phone" type="text" class="z-depth-1">
                        <input placeholder="Email" id="email" type="email" class="z-depth-1">
                        <input placeholder="Postcode" id="postcode" name="postcode" type="text" class="z-depth-1">

                        <button type="submit" class="waves-effect waves-light btn-large btn-block black-text sp-primary">Get started</button>
                    </div>
                </form>
            </div>
        </section>

        <section class="home-seller-reviews scrollspy padding-bottom-80">
            <div class="container animatedParent">
                <h2 class="responsive-h1 center-align animated fadeInLeftShort margin-top-30 margin-bottom-50">Over 4,400 seller reviews and video testimonials</h2>
                <div class="video-reviews">
                    <ul class="small-videos">
                        <!--Will be populated by JS-->
                    </ul>
                </div>

                <div class="trust-pilot">
                    <!--<div class="trust-pilot-logo"><img src="images/trustpilot.png" width="257" height="214" alt="" loading="lazy"></div>-->
                    <div class="trust-pilot-slider-container">
                        <div class="trust-pilot-reviews">
                            <ul class="ul-review">
                                <li class="review">
                                    <div class="rating">
                                        <span>March 2021</span>
                                        <img src="images/5stars.png" width="157" height="30" alt="" loading="lazy">
                                    </div>
                                    <h6>A dream to work with</h6>
                                    <p>Springbok have been a dream to work with. Thank you for your help and support. Will recommend you to everyone.</p>
                                    <div class="author">Clair Garner</div>
                                </li>
                                <li class="review">
                                    <div class="rating">
                                        <span>March 2021</span>
                                        <img src="images/5stars.png" width="157" height="30" alt="" loading="lazy">
                                    </div>
                                    <h6>An easy process</h6>
                                    <p>We have sold our property through Springbok Properties. They have all been extremely helpful
                                        and efficient. We are delighted and surprised how easy the process was. I definitely would recommend Springbok.</p>
                                    <div class="author">Gerard Hickey</div>
                                </li>
                                <li class="review">
                                    <div class="rating">
                                        <span>December 2020</span>
                                        <img src="images/5stars.png" width="157" height="30" alt="" loading="lazy">
                                    </div>
                                    <h6>Received the figure we agreed</h6>
                                    <p>After my property was with another company for 18 months with no success, I decided to try Springbok
                                        and I received the figure we had originally agreed. Absolutely amazing.</p>
                                    <div class="author">William</div>
                                </li>
                                <li class="review">
                                    <div class="rating">
                                        <span>March 2021</span>
                                        <img src="images/5stars.png" width="157" height="30" alt="" loading="lazy">
                                    </div>
                                    <h6>Felt respectful and valued</h6>
                                    <p>Their service was amazing. We have been kept updated daily via email and personal calls.
                                        We felt very respected and valued. Our views and fears were taken seriously.
                                        Our house was put on the market and we got an offer far above what we thought we would ever get.</p>
                                    <div class="author">Allen</div>
                                </li>
                                <li class="review">
                                    <div class="rating">
                                        <span>May 2021</span>
                                        <img src="images/5stars.png" width="157" height="30" alt="" loading="lazy">
                                    </div>
                                    <h6>Professional and caring</h6>
                                    <p>A very professional and caring approach to our needs in the sale of our house.</p>
                                    <div class="author">Susan</div>
                                </li>
                                <li class="review">
                                    <div class="rating">
                                        <span>May 2021</span>
                                        <img src="images/5stars.png" width="157" height="30" alt="" loading="lazy">
                                    </div>
                                    <h6>Helpful and proactive</h6>
                                    <p>The agent was really helpful and proactive. I would recommend Springbok.</p>
                                    <div class="author">Jackie</div>
                                </li>
                                <li class="review">
                                    <div class="rating">
                                        <span>May 2021</span>
                                        <img src="images/5stars.png" width="157" height="30" alt="" loading="lazy">
                                    </div>
                                    <h6>Highly recommend</h6>
                                    <p>Excellent customer service and highly recommend Springbok Properties. Thank you.</p>
                                    <div class="author">Nicole</div>
                                </li>
                                <li class="review">
                                    <div class="rating">
                                        <span>April 2021</span>
                                        <img src="images/5stars.png" width="157" height="30" alt="" loading="lazy">
                                    </div>
                                    <h6>Very impressed</h6>
                                    <p>We were very impressed with the service we got from the company from start to finish.</p>
                                    <div class="author">Elizabeth</div>
                                </li>
                                <li class="review">
                                    <div class="rating">
                                        <span>April 2021</span>
                                        <img src="images/5stars.png" width="157" height="30" alt="" loading="lazy">
                                    </div>
                                    <h6>Hassle free</h6>
                                    <p>Really easy and hassle free, always informed you on the process and what was happening and
                                        didn't have any time wasters as they take this hassle away from you before accepting viewings.</p>
                                    <div class="author">Jane</div>
                                </li>
                                <li class="review">
                                    <div class="rating">
                                        <span>April 2021</span>
                                        <img src="images/5stars.png" width="157" height="30" alt="" loading="lazy">
                                    </div>
                                    <h6>Kept me updated</h6>
                                    <p>Quick and helpful service, kept me informed and updated throughout the sales progression and always had time to talk through options.</p>
                                    <div class="author">Mandi</div>
                                </li>
                                <li class="review">
                                    <div class="rating">
                                        <span>April 2021</span>
                                        <img src="images/5stars.png" width="157" height="30" alt="" loading="lazy">
                                    </div>
                                    <h6>Polite and professional</h6>
                                    <p>Each step was explained from when I first contacted Springbok about selling the property to the sale, a very polite and professional service.</p>
                                    <div class="author">Peter</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="padding-top-50 hero-bottom">
                    <div class="center-align">
                        <a href="get-cash-offer" class="waves-effect waves-light btn-large offer-button animated fadeIn center-align">Get an offer</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-success-new padding-bottom-80">
            <div class="container animatedParent">
                <h2 class="responsive-h1 center-align animated fadeInLeftShort margin-top-30 margin-bottom-30">Our success in numbers</h2>
                <div class="success-container flex-row">
                    <div class="box-col1 flex-column">
                        <div class="box-col1-row1 flex-row">
                            <div class="box-col1-row1-col1 flex-column">
                                <div class="box box-col1-row1-col1-row1 bg-grey">
                                    <div class="number">67</div>
                                    <div class="text">percentage of our clients that came to us after being with online and local agents</div>
                                </div>
                                <div class="box box-col1-row1-col1-row2 bg-dark">
                                    <div class="img"><img src="images/success-new/3.png" width="67" height="63" alt="" loading="lazy"></div>
                                    <div class="number">4,400</div>
                                    <div class="text">independent third-party reviews (including videos)</div>
                                </div>
                            </div>
                            <div class="box-col1-row1-col2 flex-column">
                                <div class="box box-col1-row1-col2-row1 bg-teal">
                                    <div class="img padding-bottom-10"><img src="images/success-new/1.png" width="104" height="62" alt="" loading="lazy"></div>
                                    <div class="number">12,800</div>
                                    <div class="text">deals agreed across the UK</div>
                                </div>
                                <div class="box box-col1-row1-col2-row2 bg-grey">
                                    <div class="img"><img src="images/success-new/4.png" width="88" height="61" alt="" loading="lazy"></div>
                                    <div class="number">60+</div>
                                    <div class="text">Springbok team members</div>
                                </div>
                            </div>
                        </div>
                        <div class="box-col1-row2 flex-row">
                            <div class="box box-col1-row2-col1 bg-teal">
                                <div class="number">10+</div>
                                <div class="text">years of experience</div>
                            </div>
                            <div class="box box-col1-row2-col2 bg-dark">
                                <div class="img"><img src="images/success-new/6.png" width="57" height="49" alt="" loading="lazy"></div>
                                <div class="number">&pound;1,792,000,00</div>
                                <div class="text">worth of property sales agreed</div>
                            </div>
                        </div>
                    </div>
                    <div class="box-col2 flex-column">
                        <div class="box box-col2-row1 bg-dark">
                            <div class="img margin-bottom-20"><img src="images/success-new/2.png" width="76" height="64" alt="" loading="lazy"></div>
                            <div class="number">8,700</div>
                            <div class="text">we sold this many houses when agents couldn't</div>
                        </div>
                        <div class="box box-col2-row2 bg-teal">
                            <div class="img"><img src="images/success-new/5.png" width="53" height="66" alt="" loading="lazy"></div>
                            <div class="number">24</div>
                            <div class="text">gold awards for customer service</div>
                        </div>
                        <div class="box box-col2-row3 bg-grey padding-left-5 padding-right-5">
                            <div class="number">94</div>
                            <div class="text">percent of our customers recommend selling with us</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-latest-guides padding-bottom-40">
            <div class="container animatedParent">
                <h2 class="responsive-h1 center-align animated fadeInLeftShort margin-top-30 margin-bottom-30">Latest guides, tips and property news</h2>
                <div class="video-reviews">
                    <ul class="small-videos">
                        <li class="card">
                            <img class="responsive-img" src="images/guides/guide-1.png" width="450" height="350" alt="" loading="lazy">
                            <div class="message">How to Sell Your House Fast:<br>A Guide For First-Time Sellers</div>
                        </li>
                        <li class="card">
                            <img class="responsive-img" src="images/guides/guide-2.png" width="450" height="350" alt="" loading="lazy">
                            <div class="message">How to Sell Your House Fast:<br>A Guide For First-Time Sellers</div>
                        </li>
                        <li class="card">
                            <img class="responsive-img" src="images/guides/guide-3.png" width="450" height="350" alt="" loading="lazy">
                            <div class="message">How to Sell Your House Fast:<br>A Guide For First-Time Sellers</div>
                        </li>
                    </ul>
                </div>

                <div class="padding-top-50 hero-bottom center-align">
                    <a href="get-cash-offer" class="waves-effect waves-light btn-large offer-button animated fadeIn center-align">Get an offer</a>
                </div>
            </div>
        </section>

        <section class="home-publications padding-bottom-80">
            <div class="container animatedParent">
                <h2 class="responsive-h1 center-align animated fadeInLeftShort margin-top-30 margin-bottom-20">Trusted by major publications</h2>
                <div class="big margin-0 padding-0 center-align margin-bottom-40">We are the go-to experts for local and national papers on market insights, housing and property.</div>
                <div class="center-align">
                    <a href="media-coverage">
                        <img src="images/publications.png" width="671" height="142" alt="" loading="lazy">
                    </a>
                </div>
            </div>
        </section>






    </main>

    <?php include("section-footer.php"); ?>
</body>
</html>
