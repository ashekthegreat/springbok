<?php
	$param1 = (isset($_GET['param1']) && $_GET['param1']!='')?$_GET['param1']:'Reading Estate Agents';
?>
<!doctype html>
<!--[if IE 6 ]>
<html lang="en-us" class="ie6"> <![endif]-->
<!--[if IE 7 ]>
<html lang="en-us" class="ie7"> <![endif]-->
<!--[if IE 8 ]>
<html lang="en-us" class="ie8"> <![endif]-->
<!--[if IE 9 ]>
<html lang="en-us" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-us"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/ico/favicon.ico">

    <title>Springbok Mobile</title>

    <!-- Custom styles for this template -->
    <!--<link href="assets/css/bootstrap.css" rel="stylesheet">-->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="wrapper">
    <header class="header">
        <div class="header-item site-logo">
            <img src="assets/img/springbok_logo.png" alt="Springbok Logo"/>
        </div>
        <div class="header-item other-logo">
            <img src="assets/img/other_logos.png" alt="Other Logos"/>
        </div>
        <div class="header-item header-button">
            <a href="tel:01614527580" class="btn btn-header">Call Now</a>
        </div>
    </header>
    <div class="sub-header">
        <h1 class="site-header">Get 100&amp; Value For Your House Fast - <?php echo $param1;?></h1>
        <p class="site-content">Enter your details below to get a FREE Instant Valuation for your house</p>
    </div>
    <section class="main">
        <div class="box box-form clearfix">
            <form target="">
                <input id="name" name="name" type="text" class="input" placeholder="Name"/>
                <input id="phone" name="phone" type="text" class="input" placeholder="Phone"/>
                <input id="address" name="address" type="text" class="input" placeholder="Address"/>
                <input id="postcode" name="postcode" type="text" class="input" placeholder="Postcode"/>
                <button id="btn-submit" name="submit" type="submit" class="btn btn-submit">Get A Free Valuation</button>
                <div class="footnote">** Secure &amp; Confidential</div>
            </form>
        </div>
        <div class="box box-rating clearfix">
            <div class="half pull-right">
                <div class="stars"><img src="assets/img/stars.png" alt="4.5 star"/></div>
                <div class="review">independent customer reviews</div>
                <div class="source">(source: allagents.co.uk)</div>
            </div>
            <div class="half pull-left">
                <div class="pop clearfix">
                    <span class="percent">98%</span>
                    <span class="customer">of our customers are pleased with our service.</span>
                </div>
            </div>
        </div>

        <div class="box box-recommendation clearfix">
            <div class="statement-mobile">
                We've helped thousands of homeowners
                across the UK - let us help you, too!
            </div>
            <div class="dTable">

                <div class="dCell dCellImage"><img src="assets/img/sold.png"></div>
                <div class="dCell recommendation">
                    <div class="statement">
                        We've helped thousands of homeowners
                        across the UK - let us help you, too!
                    </div>
                    <div class="quote">
                        "After trying to sell my property with
                        other firms I came across Springbok
                        and I'm so glad I did. They were very
                        helpful and always kept me up to date
                        with everything that wnet on."
                        <div class="quoter">
                            - Dean Hankin
                        </div>
                    </div>
                </div>
            </div>
            <div class="quote-mobile">
                "After trying to sell my property with
                other firms I came across Springbok
                and I'm so glad I did. They were very
                helpful and always kept me up to date
                with everything that wnet on."
                <div class="quoter">
                    - Dean Hankin
                </div>
            </div>
        </div>
        <div class="box box-why clearfix">
            <a href="tel:01614527580" class="why-action-1 pull-right" title="Call Now"><img src="assets/img/247-helpline.png" /></a>
            <div class="tick-list">
                <h3><span>Who choose us?</span></h3>
                <a href="tel:01614527580" class="why-action-2 pull-right" title="Call Now"><img src="assets/img/247-helpline.png" /></a>
                <ul>
                    <li>Sell your property in days or weeks</li>
                    <li>Achieve the best possible price</li>
                    <li>Free expert valuation &amp; offer estimation</li>
                    <li>Maximum marketing marketing exposure</li>
                    <li>Hassle-free &amp; fully transparent process</li>
                </ul>
            </div>
            <br/>
            <a href="tel:01614527580" class="why-action-3 pull-right" title="Call Now"><img src="assets/img/247-helpline.png" /></a>
        </div>
        <div class="box box-who clearfix">
            <div class="tick-list">
                <h3><span>Who we are</span></h3>
                <ul>
                    <li>Ranked No. 1 UK's Estate Agent Branch with a rating of 4.8 out of 5 in 2013</li>
                    <li>98% of our customers would recommend us to family &amp; friends (source: allagents.co.uk)</li>
                    <li>Over 850 positive sold in 2013</li>
                    <li>Over 300 positive reviews on all-agents.co.uk</li>
                    <li>Member of the Property Ombudsman</li>
                </ul>
            </div>
        </div>

    </section>
    <footer class="footer">
        <div><a href="tel:01614527580" class="btn btn-call-green" value="Get A Free Valuation">Call Now To Get A Free Valuation</a></div>
        <div class="last-block clearfix">
            <a href="#" class="pull-right desktop">Desktop</a>
            <span class="copyright">&copy; 2014 - Springbok Properties LLP</span>
        </div>
    </footer>
</div>

<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
