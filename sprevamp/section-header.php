<?php const SITE_PATH = "http://localhost/springbok/sprevamp/"; ?>

<div class="main-nav">
    <nav>
        <div class="nav-wrapper container">
            <a href="<?php echo SITE_PATH?>" class="brand-logo left">
                <img src="<?php echo SITE_PATH?>images/logo-new.jpg" alt="" width="165" height="78">
            </a>
            <a href="#" data-activates="main-sidenav" class="button-collapse menu-button right">
                <i class="material-icons">menu</i>
            </a>
            <!--a href="tel:03332007322" class="button-collapse call-button right">
                <b class="sprite sprite-call"></b>
            </a-->
            <div class="right hide-on-med-and-down menu-offer-section">
                <div class="menu-offer-label">Freephone 24/7 Call: <strong>0800 068 4015</strong></div>
                <div>
                    <a href="<?php echo SITE_PATH?>free-valuation" target="_blank" class="waves-effect waves-light btn sp-dark white-text">Get free valuation</a>
                    <a href="<?php echo SITE_PATH?>get-cash-offer" target="_blank" class="waves-effect waves-light btn sp-green">Get a cash offer</a>
                </div>
            </div>
            <ul id="main-nav" class="right hide-on-med-and-down">
                <!--<li><a href="javascript:" class="dropdown-main-nav" data-activates="dropdown-sell">Sellers</a></li>-->
                <li><a href="<?php echo SITE_PATH?>">Home</a></li>
                <li><a href="<?php echo SITE_PATH?>fast-sale-services" class="dropdown-main-nav" data-activates="dropdown-freevaluation">Services</a></li>
                <li><a href="<?php echo SITE_PATH?>property-list">Search Properties</a></li>
                <!--<li><a href="javascript:" class="dropdown-main-nav" data-activates="dropdown-buyers">Buyers</a></li>-->
                <li><a href="javascript:" class="dropdown-main-nav" data-activates="dropdown-about">About</a></li>
                <li><a href="<?php echo SITE_PATH ?>blog">Guides</a></li>
                <li><a href="<?php echo SITE_PATH?>contact-us">Contact</a></li>
                <li class="sign-in"><a href="<?php echo SITE_PATH.'login.php'?>">Sign In</a></li>
            </ul>

            <ul class="side-nav sp-secondary lighten-5" id="main-sidenav">
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a href="<?php echo SITE_PATH?>">Home</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header">Services</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?php echo SITE_PATH?>sell-house-fast">Sell Your House Fast</a></li>
                                    <li><a href="<?php echo SITE_PATH?>sell-house-fast">We Buy Any House</a></li>
                                    <li><a href="<?php echo SITE_PATH?>sell-land-fast">Sell Your Land Fast</a></li>
                                    <li><a href="<?php echo SITE_PATH?>sell-a-commercial-property">Sell Commercial Property Fast</a></li>
                                    <li><a href="<?php echo SITE_PATH?>part-exchange">Part exchange</a></li>
                                    <li><a href="<?php echo SITE_PATH?>conveyance">Conveyancing</a></li>
                                    <li><a href="<?php echo SITE_PATH?>sold-house-prices">Sold House Price Tool</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="<?php echo SITE_PATH?>property-list">Search Properties</a></li>
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header">About</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?php echo SITE_PATH?>reviews">Reviews</a></li>
                                    <li><a href="<?php echo SITE_PATH?>about-us">About Springbok</a></li>
                                    <li><a href="<?php echo SITE_PATH?>springbok-team">Team Springbok</a></li>
                                    <li><a href="<?php echo SITE_PATH?>springbok-mission">Mission Values & Culture</a></li>
                                    <li><a href="<?php echo SITE_PATH?>refer-springbok-properties">Refer a Friend</a></li>
                                    <li><a href="<?php echo SITE_PATH?>index.php#compare_springbook">How We Compare</a></li>
                                    <li><a href="<?php echo SITE_PATH?>where-we-advertise">Where We Advertise</a></li>
                                    <li><a href="<?php echo SITE_PATH?>springbok-charities">Our Selected Charities</a></li>
                                    <li><a href="<?php echo SITE_PATH?>blog">Media Coverage</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="<?php echo SITE_PATH ?>blog">Guides</a></li>
                <li><a href="<?php echo SITE_PATH?>contact-us">Contact</a></li>
                <li><a href="<?php echo SITE_PATH?>login.php">Sign In</a></li>
            </ul>
        </div>
        <div class="center hide-on-large-only menu-offer-section mobile-only">
            <div class="menu-offer-label">Freephone 24/7 Call: <strong>0800 068 4015</strong></div>
            <div>
                <a href="<?php echo SITE_PATH?>free-valuation" target="_blank" class="waves-effect waves-light btn sp-dark white-text">Get free valuation</a>
                <a href="<?php echo SITE_PATH?>get-cash-offer" target="_blank" class="waves-effect waves-light btn sp-green">Get a cash offer</a>
            </div>
        </div>
    </nav>
    <ul id="dropdown-about" class="dropdown-content">
        <li><a href="<?php echo SITE_PATH?>reviews">Reviews</a></li>
        <li><a href="<?php echo SITE_PATH?>about-us">About Springbok</a></li>
        <li><a href="<?php echo SITE_PATH?>springbok-team">Team Springbok</a></li>
        <li><a href="<?php echo SITE_PATH?>springbok-mission">Mission Values & Culture</a></li>
        <li><a href="<?php echo SITE_PATH?>refer-springbok-properties">Refer a Friend</a></li>
        <li><a href="<?php echo SITE_PATH?>how-we-compare">How We Compare</a></li>
        <li><a href="<?php echo SITE_PATH?>where-we-advertise">Where We Advertise</a></li>
        <li><a href="<?php echo SITE_PATH?>springbok-charities">Our Selected Charities</a></li>
        <li><a href="<?php echo SITE_PATH?>media-coverage">Media Coverage</a></li>
    </ul>
    <ul id="dropdown-freevaluation" class="dropdown-content">
        <li><a href="<?php echo SITE_PATH?>sell-house-fast">Sell Your House Fast</a></li>
        <li><a href="<?php echo SITE_PATH?>sell-house-fast">We Buy Any House</a></li>
        <li><a href="<?php echo SITE_PATH?>sell-land-fast">Sell Your Land Fast</a></li>
        <li><a href="<?php echo SITE_PATH?>sell-a-commercial-property">Sell Commercial Property Fast</a></li>
        <li><a href="<?php echo SITE_PATH?>part-exchange">Part exchange</a></li>
        <li><a href="<?php echo SITE_PATH?>conveyance">Conveyancing</a></li>
        <li><a href="<?php echo SITE_PATH?>sold-house-prices">Sold House Price Tool</a></li>
    </ul>
</div>
