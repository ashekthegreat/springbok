<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="images/assets/ico/favicon.ico">

    <title><?php echo $param1.' - '.$param2.' - Yellow Springbok';?></title>

    <!-- Custom styles for this template -->
    <link href="images/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="images/assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="main-container">
        <div class="wrapper">
            <header class="box clearfix text-center">
                <div class="clearfix">
                    <div class="header-item header-button pull-right hidden-xs hidden-sm">
                        <a href="tel:01614527543" class="sprite sprite-number2"></a>
                    </div>
                    <div class="header-item pull-left">
                        <!--<div class="sprite sprite-springbok-logo"></div>-->
                        <a class="" href="index.php"><img src="images/assets/img/logo.png"></a>
                    </div>
                    <div class="header-item other-logo">
                        <img alt="3-logos.png" src="images/assets/img/3-logos.png" width="192" height="43">
                        <img class="badgenopopup" src="http://yoshki.com/TSI/validation/130/0/logo.png" width="130" height="97">
                        <!--<img class="badgenopopup visible-xs-inline-block visible-sm-inline-block hidden-md hidden-lg" src="http://yoshki.com/TSI/validation/130/0/logo.png" width="100" height="74">-->
                    </div>
                </div>
                <div class="call-banner visible-xs-block visible-sm-block">Call <a href="tel:01614527543">01614527543</a></div>
            </header>
            <section class="main">

                <div class="box">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 class="site-header"><?php echo $param1;?> - Guaranteed Offer in 24 Hours</h1>

                                <div id="site-carousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="images/assets/img/slideV3_1.png" width="633" height="290">
                                        </div>
                                        <div class="item">
                                            <img src="images/assets/img/slideV3_2.png" width="633" height="290">
                                        </div>
                                        <div class="item">
                                            <img src="images/assets/img/slideV3_3.png" width="633" height="290">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="offer-form">
                                    <form onsubmit="return ValidateWebForm2();" action="http://simbacloud.co.uk/Users/forms/processForm.php" method="POST" name="web_form2">
                                        <h3>Get a No-Obligation Offer Now</h3>
                                        <input type="text" class="offer-input" id="First_Name2" placeholder="Name" name="name" autocomplete="off">
                                        <input type="text" class="offer-input" id="Phone_No2" placeholder="Phone Number" name="phone" autocomplete="off">
                                        <input type="text" class="offer-input" id="Email_crm2" placeholder="Email" name="email" autocomplete="off">
                                        <input type="text" class="offer-input" id="address2" placeholder="Address" name="address" autocomplete="off">
                                        <input type="text" class="offer-input" id="postcode2" placeholder="Postcode" name="postcode" autocomplete="off">
                                        <input type="submit" class="btn btn-block btn-yellow" id="saveWebForm" name="saveWebForm" value="Get Cash Offer">

                                        <div class="secure-text">Secure and Confidential. Data Registration No. Z249589X</div>

                                        <input type="hidden" value="7e8ed4282898399f471db4263285b540" name="_wf_salt">
                                        <input type="hidden" value="http://www.yellowspringbok.co.uk/thanks" name="_redirection">
                                        <input type="hidden" value="Remark - Yellowspringbok.co.uk LP" name="_wf_name">
                                        <input type="hidden" value="5" name="_wf_len">
                                        <input type="hidden" name="_source" value="<?php echo $visitorSRC;?>" />
                                        <input type="hidden" name="_page_url" value="<?php echo $_SERVER['HTTP_REFERER'];?>" />
					                    <input type="hidden" name="_srcChannel" value="<?php echo $visitorSECSRC;?>" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <h3 class="card-header">Selling Has Never Been Easier</h3>
                                    <ul class="tick-list">
                                        <li><span class="sprite sprite-green-check"></span> Get up to 100% value</li>
                                        <li><span class="sprite sprite-green-check"></span> Free consultation, free valuation</li>
                                        <li><span class="sprite sprite-green-check"></span> Any house, any value, in any condition</li>
                                        <li><span class="sprite sprite-green-check"></span> Sell in days, instead of months</li>
                                        <li><span class="sprite sprite-green-check"></span> Repossession Stopped</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card card-testimonials">
                                    <div class="badge sprite sprite-card_badge"></div>
                                    <h3 class="card-header">Testimonials <span class="sprite sprite-testi-icon"></span></h3>

                                    <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <p><span class="sprite sprite-left-quote"></span> I had a really good experience with Springbok, from start to finish they kept me informed every step of the way, their advice was invaluable.</p>
                                                <footer>Cathy Manning</footer>
                                            </div>
                                            <div class="item">
                                                <p><span class="sprite sprite-left-quote"></span> Springbok dealt with myself and my family as we had to sell an inherited property. They were very sensitive towards us during this time and the support we received during the selling process was good and efficient!</p>
                                                <footer>A James</footer>
                                            </div>
                                            <div class="item">
                                                <p><span class="sprite sprite-left-quote"></span> I hadn't heard of this firm before, but I really must say that they handled the sale of my old house in a very professional, efficient and pleasant manner at all times. Normally, I don't leave remarks regarding business but felt I just had to in this particular instance as they are that good.</p>
                                                <footer>David Brock</footer>
                                            </div>
                                            <div class="item">
                                                <p><span class="sprite sprite-left-quote"></span> After trying to sell my property with other firms I came across Springbok and I'm so glad I did. They were very helpful and always kept me up to date with everything that went on.</p>
                                                <footer>Dean Hankin</footer>
                                            </div>
                                            <div class="item">
                                                <p><span class="sprite sprite-left-quote"></span> Springbok have been great with my sale. Offering good advice and excellent customer service throughout the whole process. </p>
                                                <footer>L Hankin</footer>
                                            </div>
                                            <div class="item">
                                                <p><span class="sprite sprite-left-quote"></span> I like their fast & friendly service, and will not hesitate in recommending Springbok to anyone</p>
                                                <footer>Steve Boylan</footer>
                                            </div>
                                            <div class="item">
                                                <p><span class="sprite sprite-left-quote"></span> I found Springbok very helpful, very co-operative with every question I asked, was pleased with their overall sale of the property, I would recommend them to anyone who is thinking of selling their property, very pleased.</p>
                                                <footer>Mr. G Grimes</footer>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="steps hidden-xs">
                            <img src="images/assets/img/steps.png" width="854" height="242">
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="container-fluid">
                        <h3><?php echo $param2;?> - Sell Your House with Yellow Springbok</h3>

                        <div class="row">
                            <div class="col-sm-8">
                                <p>Do you want to sell your house or a second property, but don't want to wait months? Yellow Springbok provides fast property buying services all over the UK -- simply, confidentially and on your timescale.</p>

                                <p>Maybe you've inherited a property. Perhaps you're in danger of having your own home repossessed. Maybe you're moving, and just need cash quickly. Whatever your situation is, Yellow Springbok can help.</p>
                            </div>
                            <div class="col-sm-4 text-center">
                                <img src="images/assets/img/fast_sale_max.png" width="291" height="75">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box no-bottom">
                    <div class="container-fluid">
                        <h3><?php echo $param3?> - Get a no-obligation cash offer by completing the form, or call us now</h3>

                        <p>We understand that selling a house can be a difficult decision, especially if you need a quick sale. That's why the Yellow Springbok is adamant that your peace of mind is just as important as our continued operation.</p>

                        <p>We always try to find the best solution and the best selling price for you - guaranteed. We offer all these advantages:</p>

                        <div class="row">
                            <div class="col-sm-8">
                                <ul>
                                    <li>Achieve 95-100% of market value for your house</li>
                                    <li>Sell in weeks, not months</li>
                                    <li>Sell almost any property in any condition, anywhere in the UK</li>
                                    <li>Free no-obligation valuation & consultation</li>
                                    <li>Tailor-made solutions, suitable to your specific situation</li>
                                    <li>No need to decorate or refurbish</li>
                                    <li>100% no-obligation offer</li>
                                    <li>Quick decision</li>
                                    <li>Simple and hassle-free process</li>
                                    <li>Totally confidential, whether you contact us by phone or online</li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <img src="images/assets/img/100.png" width="170" height="170">
                            </div>
                        </div>
                    </div>
                </div>


            </section>
        </div>
    </div>
    <div class="footer-container">
        <div class="wrapper">
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="footer-logo">
                                <span class="sprite sprite-ys-bg"></span>
                            </div>
                            <div class="footer-contact">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="footer-card">
                                            <div class="card-img"><span class="sprite sprite-social-icon"></span></div>
                                            <div class="card-title">Connect With Us</div>
                                            <div>&nbsp;</div>
                                            <div class="card-connect"><a title="Like us on Facebook" target="_blank" href="http://www.facebook.com/YellowSpringbok"><span class="sprite sprite-fb_icon"></span>Like us on Facebook</a></div>
                                            <div class="card-connect"><a title="Follow us on Twitter" target="_blank" href="https://twitter.com/#!/yspringbok"><span class="sprite sprite-tw_icon"></span>Follow us on Twitter</a></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="footer-card">
                                            <div class="card-img"><span class="sprite sprite-phone-icon"></span></div>
                                            <div class="card-title">Call Springbok</div>
                                            <p>Talk to our property specialist to find out how you can achieve a quick sale with maximum value</p>

                                            <div class="card-phone">0800 068 7935</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-card-sep hidden-xs"></div>
                            </div>
                            <div class="hidden-xs">
                                <div class="footer-registration">
                                    Company Registration Number OC350735. Data Protection Registration Number Z249589X. Please read our privacy policy for more info.
                                </div>
                                <div class="footer-notes">
                                    <p><b><?php echo $param1;?></b> - Selling your house fast has never been this simple. With Yellow Springbok, you achieve the maximum market value for your property and sell in timescales that are suitable to your situation. </p>

                                    <p><b><?php echo $param1;?></b> - Cash offers within 24 hours - Yellow Springbok is the UK's leading cash buyers; we are a national company with strong local presence. No matter why you need a quick sale, we provide a buying solution for any selling situation. We provide tailor-made solutions if you need to sell your house quick due to upsizing, downsizing, financial difficulties, separation, repossession, relocation, unwanted property inheritances or any other reason.</p>

                                    <p><b><?php echo $param1;?></b> - Any condition, anywhere in the UK - We buy any type of property, any condition, anywhere in the UK. Even if it is not possible to get a fast house sale through traditional means, including derelict property, houses needing modernisation and downright ugly houses.</p>

                                    <p><b><?php echo $param1;?></b> - 100% confidential process - Yellow Springbok and its associates adhere to strict code of conduct and high moral standards. Your enquiry will be handled quickly, compassionately and in strict confidence. We are a data protection registered and VAT registered company.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="footer-form">
                                <form onsubmit="return ValidateWebForm();" action="http://simbacloud.co.uk/Users/forms/processForm.php" method="POST" name="web_form">
                                    <h3>Request a free valuation</h3>
                                    <input type="text" class="footer-input" id="First_Name" placeholder="Name" name="name" autocomplete="off">
                                    <input type="text" class="footer-input" id="Phone_No" placeholder="Phone Number" name="phone" autocomplete="off">
                                    <input type="text" class="footer-input" id="Email_crm" placeholder="Email" name="email" autocomplete="off">
                                    <input type="text" class="footer-input" id="address" placeholder="Address" name="address" autocomplete="off">
                                    <input type="text" class="footer-input" id="postcode" placeholder="Postcode" name="postcode" autocomplete="off">
                                    <input type="submit" class="btn btn-block btn-black" id="saveWebForm" name="saveWebForm" value="Get Valuation">

                                    <input type="hidden" value="7e8ed4282898399f471db4263285b540" name="_wf_salt">
                                    <input type="hidden" value="http://www.yellowspringbok.co.uk/thanks" name="_redirection">
                                    <input type="hidden" value="Remark - Yellowspringbok.co.uk LP" name="_wf_name">
                                    <input type="hidden" value="5" name="_wf_len">
                                    <input type="hidden" name="_source" value="<?php echo $visitorSRC;?>" />
					                <input type="hidden" name="_page_url" value="<?php echo $_SERVER['HTTP_REFERER'];?>" />
					                <input type="hidden" name="_srcChannel" value="<?php echo $visitorSECSRC;?>" />
                                </form>
                            </div>
                            <div class="footer-nav">
                                <a title="Home" href="http://yellowspringbok.co.uk/LP2">Home</a>
                                &nbsp;|&nbsp;
                                <a title="About Us" href="http://www.yellowspringbok.co.uk/LP2_aboutUs">About Us</a>
                                &nbsp;|&nbsp;
                                <a title="Contact Us" href="http://www.yellowspringbok.co.uk/LP2_contactUs">Contact Us</a>
                                &nbsp;|&nbsp;<a title="Privacy Policy" href="http://www.yellowspringbok.co.uk/LP2_privacy_policy">Privacy Policy</a>
                            </div>
                        </div>
                    </div>
                    <div class="visible-xs-block">
                        <div class="footer-registration">
                            <br>Company Registration Number OC350735. Data Protection Registration Number Z249589X. Please read our privacy policy for more info.
                        </div>
                        <div class="footer-notes">
                            <p><b><?php echo $param1;?></b> - Selling your house fast has never been this simple. With Yellow Springbok, you achieve the maximum market value for your property and sell in timescales that are suitable to your situation. </p>

                            <p><b><?php echo $param1;?></b> - Cash offers within 24 hours - Yellow Springbok is the UK's leading cash buyers; we are a national company with strong local presence. No matter why you need a quick sale, we provide a buying solution for any selling situation. We provide tailor-made solutions if you need to sell your house quick due to upsizing, downsizing, financial difficulties, separation, repossession, relocation, unwanted property inheritances or any other reason.</p>

                            <p><b><?php echo $param1;?></b> - Any condition, anywhere in the UK - We buy any type of property, any condition, anywhere in the UK. Even if it is not possible to get a fast house sale through traditional means, including derelict property, houses needing modernisation and downright ugly houses.</p>

                            <p><b><?php echo $param1;?></b> - 100% confidential process - Yellow Springbok and its associates adhere to strict code of conduct and high moral standards. Your enquiry will be handled quickly, compassionately and in strict confidence. We are a data protection registered and VAT registered company.</p>
                        </div>
                    </div>
					<div class="footer-copyright">
						@copy; 2013 Yellow Springbok
					</div>
                </div>
                <!--<div><a href="tel:01614527580" class="btn btn-call-green" value="Get A Free Valuation">Call Now To Get A Free Valuation</a></div>-->
            </footer>
        </div>
    </div>

    <div class="sprite sprite-floating_PPC hidden-xs hidden-sm hidden-md"></div>
    <div class="floating-call" style="bottom:20%;"><a href="tel:01614527543" class="sprite sprite-call-small"></a></div>


    <!-- Placed at the end of the document so the pages load faster -->

    <!--
        application.min.js includes:
         - jquery-1.11.0.min.js
         - jquery-migrate-1.2.1.min.js
         - bootstrap.min.js
         - jquery.placeholder.min.js
         - script.js
     -->
    <script defer="defer" src="images/assets/js/application.min.js"></script>

    <script defer="defer" type="text/javascript" src="http://yoshki.com/yoshki-library.js"></script>
    <!--<script type="text/javascript" src="images/assets/js/yoshki-library.js"></script>-->
</body>
</html>