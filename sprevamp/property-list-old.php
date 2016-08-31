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
    <?php include("section-header.php"); ?>

    <main>

        <section class="properties-search no-padding sp-secondary lighten-5">
            <div class="property-search-bar">
                <div class="sp-secondary darken-3 white-text">
                    <div class="container">
                        <form>
                            <div class="field white">
                                <div class="typeahead__container">
                                    <div class="typeahead__field">
                                    <span class="typeahead__query">
                                        <input id="search" class="js-typeahead" name="q" type="search" autocomplete="off">
                                    </span>
                                        <!--<span class="typeahead__button">
                                            <button type="submit"><span class="typeahead__search-icon"></span></button>
                                        </span>-->
                                    </div>
                                </div>
                                <!--<div class="input-field radius sp-secondary-text">
                                    <select>
                                        <option value="" disabled selected>+ 0 miles</option>
                                        <option value="1">+ 10 miles</option>
                                        <option value="2">+ 30 miles</option>
                                        <option value="3">+ 50 miles</option>
                                    </select>
                                </div>-->
                            </div>

                            <div class="field">
                                <div class="input-field min-price">
                                    <select>
                                        <option value="0" disabled selected>Min Price</option>
                                        <option value="50000">50,000</option>
                                        <option value="60000">60,000</option>
                                        <option value="70000">70,000</option>
                                        <option value="80000">80,000</option>
                                        <option value="90000">90,000</option>
                                        <option value="100000">100,000</option>
                                    </select>
                                </div>
                                <span class="to">to</span>
                                <div class="input-field max-price">
                                    <select>
                                        <option value="0" disabled selected>Max Price</option>
                                        <option value="50000">50,000</option>
                                        <option value="60000">60,000</option>
                                        <option value="70000">70,000</option>
                                        <option value="80000">80,000</option>
                                        <option value="90000">90,000</option>
                                        <option value="100000">100,000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <div class="input-field min-bed">
                                    <select>
                                        <option value="0" disabled selected>Min Beds</option>
                                        <option value="1">1 bed</option>
                                        <option value="2">2 beds</option>
                                        <option value="3">3 beds</option>
                                        <option value="4">4 beds</option>
                                        <option value="5">5 beds</option>
                                    </select>
                                </div>
                                <span class="to">to</span>
                                <div class="input-field max-bed">
                                    <select>
                                        <option value="0" disabled selected>Max Beds</option>
                                        <option value="1">1 bed</option>
                                        <option value="2">2 beds</option>
                                        <option value="3">3 beds</option>
                                        <option value="4">4 beds</option>
                                        <option value="5">5 beds</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <div class="input-field property-type">
                                    <select>
                                        <option value="" disabled selected>Property Type</option>
                                        <option value="flat">Flat</option>
                                        <option value="detached">Detached</option>
                                        <option value="semi-detached">Semi-Detached</option>
                                        <option value="Semi-Detached Bungalow">Semi-Detached Bungalow</option>
                                        <option value="terraced">Terraced</option>
                                        <option value="bungalow">Bungalow</option>
                                        <option value="apartment">Apartment</option>
                                        <option value="cottage">Cottage</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <div class="input-field filters">
                                    <select>
                                        <option value="" disabled selected>Filters</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                        <option value="3">6</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="sp-secondary-text sp-secondary lighten-5 z-depth-1 property-search-extra">
                    <div class="container">
                        <div class="filter filter-price">
                            <h4>Price Range (<small class="filter-value"></small>)</h4>
                            <div class="price-slider"></div>
                            <input type="hidden" id="filter-price-min"/>
                            <input type="hidden" id="filter-price-max"/>
                            <div>&nbsp;</div>
                        </div>

                        <div class="filter filter-bed">
                            <h4>Bedrooms (<small class="filter-value"></small>)</h4>
                            <div class="bed-slider"></div>
                            <input type="hidden" id="filter-bed-min"/>
                            <input type="hidden" id="filter-bed-max"/>
                            <div>&nbsp;</div>
                        </div>

                        <div class="filter filter-property-type">
                            <h4>Property type</h4>
                            <div class="row margin-bottom-0">
                                <div class="col s12 m4 l3">
                                    <input type="checkbox" id="property-type-1" value="flat"/>
                                    <label for="property-type-1">Flat</label>
                                </div>
                                <div class="col s12 m4 l3">
                                    <input type="checkbox" id="property-type-2" value="detached"/>
                                    <label for="property-type-2">Detached</label>
                                </div>
                                <div class="col s12 m4 l3">
                                    <input type="checkbox" id="property-type-3" value="semi-detached"/>
                                    <label for="property-type-3">Semi-Detached</label>
                                </div>
                                <div class="col s12 m4 l3">
                                    <input type="checkbox" id="property-type-4" value="Semi-Detached Bungalow"/>
                                    <label for="property-type-4">Semi-Detached Bungalow</label>
                                </div>
                                <div class="col s12 m4 l3">
                                    <input type="checkbox" id="property-type-5" value="terraced"/>
                                    <label for="property-type-5">Terraced</label>
                                </div>
                                <div class="col s12 m4 l3">
                                    <input type="checkbox" id="property-type-6" value="bungalow"/>
                                    <label for="property-type-6">Bungalow</label>
                                </div>
                                <div class="col s12 m4 l3">
                                    <input type="checkbox" id="property-type-7" value="apartment"/>
                                    <label for="property-type-7">Apartment</label>
                                </div>
                                <div class="col s12 m4 l3">
                                    <input type="checkbox" id="property-type-8" value="cottage"/>
                                    <label for="property-type-8">Cottage</label>
                                </div>
                            </div>
                        </div>

                        <div class="filter filter-property-added">
                            <div class="row margin-bottom-0">
                                <div class="col s12 m6">
                                    <h4>Added to site</h4>
                                    <select>
                                        <option value="">Anytime</option>
                                        <option value="1">Last 24 hours</option>
                                        <option value="3">Last 3 days</option>
                                        <option value="7">Last 7 days</option>
                                        <option value="14">Last 14 days</option>
                                    </select>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="hide-on-small-and-down">&nbsp;</h4>
                                    <div class="margin-top-25 center-align">
                                        <input type="checkbox" id="property-stc" value="stc"/>
                                        <label for="property-stc">Include Sold STC</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <section class="properties-list sp-secondary lighten-5 sp-secondary-text">
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l9 margin-bottom-40">
                        <div class="card white sp-secondary-text margin-top-0">
                            <div class="card-content">
                                <p class="big">Properties For Sale in Manchester, Greater Manchester</p>
                                <p><strong class="bigger">4,241</strong> Results</p>
                            </div>
                        </div>

                        <div class="card horizontal hoverable property-card">
                            <div class="card-image">
                                <img class="responsive-img" src="assets/images/success/halfpenny_lane.jpg" width="490" height="366">
                                <div class="card-image-footer">
                                    <a href="property-details.php" class="camera">
                                        14 <img src="assets/images/camera-32.png" width="32" height="32"/>
                                    </a>
                                </div>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4>Offers in excess of <strong>&pound;105,000</strong></h4>
                                    <a href="property-details.php" class="big">2 Bedroom house for sale</a>
                                    <h5>Buchanan Street, Pendlebury, Swinton, Manchester</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis vel metus mattis vestibulum. In hac habitasse platea dictumst. Curabitur nec maximus diam. Quisque congue eros sed ipsum interdum cursus. </p>
                                </div>
                                <div class="card-action">
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6"><a class="waves-effect waves-light btn btn-block sp-secondary sp-primary-text modal-trigger" href="#property-book">Book Viewing</a></div>
                                        <div class="col s12 m6 call-now">Or Call Now on <br> <span class="click-to-call">0161 000 0000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card horizontal hoverable property-card">
                            <div class="card-image">
                                <img class="responsive-img" src="assets/images/success/halfpenny_lane.jpg" width="490" height="366">
                                <div class="card-image-footer">
                                    <a href="property-details.php" class="camera">
                                        14 <img src="assets/images/camera-32.png" width="32" height="32"/>
                                    </a>
                                </div>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4>Offers in excess of <strong>&pound;105,000</strong></h4>
                                    <a href="property-details.php" class="big">2 Bedroom house for sale</a>
                                    <h5>Buchanan Street, Pendlebury, Swinton, Manchester</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis vel metus mattis vestibulum. In hac habitasse platea dictumst. Curabitur nec maximus diam. Quisque congue eros sed ipsum interdum cursus.  Suspendisse convallis vel metus mattis vestibulum. In hac habitasse platea dictumst. Curabitur nec maximus diam. Quisque congue eros sed ipsum interdum cursus. </p>
                                </div>
                                <div class="card-action">
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6"><a class="waves-effect waves-light btn btn-block sp-secondary sp-primary-text modal-trigger" href="#property-book">Book Viewing</a></div>
                                        <div class="col s12 m6 call-now">Or Call Now on <br> <span class="click-to-call">0161 000 0000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card horizontal hoverable property-card">
                            <div class="card-image">
                                <img class="responsive-img" src="assets/images/success/halfpenny_lane.jpg" width="490" height="366">
                                <div class="card-image-footer">
                                    <a href="property-details.php" class="camera">
                                        14 <img src="assets/images/camera-32.png" width="32" height="32"/>
                                    </a>
                                </div>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4>Offers in excess of <strong>&pound;105,000</strong></h4>
                                    <a href="property-details.php" class="big">2 Bedroom house for sale</a>
                                    <h5>Buchanan Street, Pendlebury, Swinton, Manchester</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis vel metus mattis vestibulum. In hac habitasse platea dictumst. Curabitur nec maximus diam. Quisque congue eros sed ipsum interdum cursus. </p>
                                </div>
                                <div class="card-action">
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6"><a class="waves-effect waves-light btn btn-block sp-secondary sp-primary-text modal-trigger" href="#property-book">Book Viewing</a></div>
                                        <div class="col s12 m6 call-now">Or Call Now on <br> <span class="click-to-call">0161 000 0000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card horizontal hoverable property-card">
                            <div class="card-image">
                                <img class="responsive-img" src="assets/images/success/halfpenny_lane.jpg" width="490" height="366">
                                <div class="card-image-footer">
                                    <a href="property-details.php" class="camera">
                                        14 <img src="assets/images/camera-32.png" width="32" height="32"/>
                                    </a>
                                </div>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4>Offers in excess of <strong>&pound;105,000</strong></h4>
                                    <a href="property-details.php" class="big">2 Bedroom house for sale</a>
                                    <h5>Buchanan Street, Pendlebury, Swinton, Manchester</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis vel metus mattis vestibulum. In hac habitasse platea dictumst. Curabitur nec maximus diam. Quisque congue eros sed ipsum interdum cursus. </p>
                                </div>
                                <div class="card-action">
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6"><a class="waves-effect waves-light btn btn-block sp-secondary sp-primary-text modal-trigger" href="#property-book">Book Viewing</a></div>
                                        <div class="col s12 m6 call-now">Or Call Now on <br> <span class="click-to-call">0161 000 0000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="margin-bottom-40 margin-top-40 adv-horizontal">
                            <a href="#" class="white z-depth-1">
                                <img src="assets/images/advertise/adv-hor-1.jpg" class="responsive-img" width="803" height="122">
                            </a>
                        </div>

                        <div class="card horizontal hoverable property-card">
                            <div class="card-image">
                                <img class="responsive-img" src="assets/images/success/halfpenny_lane.jpg" width="490" height="366">
                                <div class="card-image-footer">
                                    <a href="property-details.php" class="camera">
                                        14 <img src="assets/images/camera-32.png" width="32" height="32"/>
                                    </a>
                                </div>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4>Offers in excess of <strong>&pound;105,000</strong></h4>
                                    <a href="property-details.php" class="big">2 Bedroom house for sale</a>
                                    <h5>Buchanan Street, Pendlebury, Swinton, Manchester</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis vel metus mattis vestibulum. In hac habitasse platea dictumst. Curabitur nec maximus diam. Quisque congue eros sed ipsum interdum cursus. </p>
                                </div>
                                <div class="card-action">
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6"><a class="waves-effect waves-light btn btn-block sp-secondary sp-primary-text modal-trigger" href="#property-book">Book Viewing</a></div>
                                        <div class="col s12 m6 call-now">Or Call Now on <br> <span class="click-to-call">0161 000 0000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card horizontal hoverable property-card">
                            <div class="card-image">
                                <img class="responsive-img" src="assets/images/success/halfpenny_lane.jpg" width="490" height="366">
                                <div class="card-image-footer">
                                    <a href="property-details.php" class="camera">
                                        14 <img src="assets/images/camera-32.png" width="32" height="32"/>
                                    </a>
                                </div>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4>Offers in excess of <strong>&pound;105,000</strong></h4>
                                    <a href="property-details.php" class="big">2 Bedroom house for sale</a>
                                    <h5>Buchanan Street, Pendlebury, Swinton, Manchester</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis vel metus mattis vestibulum. In hac habitasse platea dictumst. Curabitur nec maximus diam. Quisque congue eros sed ipsum interdum cursus. </p>
                                </div>
                                <div class="card-action">
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6"><a class="waves-effect waves-light btn btn-block sp-secondary sp-primary-text modal-trigger" href="#property-book">Book Viewing</a></div>
                                        <div class="col s12 m6 call-now">Or Call Now on <br> <span class="click-to-call">0161 000 0000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card horizontal hoverable property-card">
                            <div class="card-image">
                                <img class="responsive-img" src="assets/images/success/halfpenny_lane.jpg" width="490" height="366">
                                <div class="card-image-footer">
                                    <a href="property-details.php" class="camera">
                                        14 <img src="assets/images/camera-32.png" width="32" height="32"/>
                                    </a>
                                </div>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4>Offers in excess of <strong>&pound;105,000</strong></h4>
                                    <a href="property-details.php" class="big">2 Bedroom house for sale</a>
                                    <h5>Buchanan Street, Pendlebury, Swinton, Manchester</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis vel metus mattis vestibulum. In hac habitasse platea dictumst. Curabitur nec maximus diam. Quisque congue eros sed ipsum interdum cursus. </p>
                                </div>
                                <div class="card-action">
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6"><a class="waves-effect waves-light btn btn-block sp-secondary sp-primary-text modal-trigger" href="#property-book">Book Viewing</a></div>
                                        <div class="col s12 m6 call-now">Or Call Now on <br> <span class="click-to-call">0161 000 0000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card horizontal hoverable property-card">
                            <div class="card-image">
                                <img class="responsive-img" src="assets/images/success/halfpenny_lane.jpg" width="490" height="366">
                                <div class="card-image-footer">
                                    <a href="property-details.php" class="camera">
                                        14 <img src="assets/images/camera-32.png" width="32" height="32"/>
                                    </a>
                                </div>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4>Offers in excess of <strong>&pound;105,000</strong></h4>
                                    <a href="property-details.php" class="big">2 Bedroom house for sale</a>
                                    <h5>Buchanan Street, Pendlebury, Swinton, Manchester</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis vel metus mattis vestibulum. In hac habitasse platea dictumst. Curabitur nec maximus diam. Quisque congue eros sed ipsum interdum cursus. </p>
                                </div>
                                <div class="card-action">
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6"><a class="waves-effect waves-light btn btn-block sp-secondary sp-primary-text modal-trigger" href="#property-book">Book Viewing</a></div>
                                        <div class="col s12 m6 call-now">Or Call Now on <br> <span class="click-to-call">0161 000 0000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="margin-bottom-40 margin-top-40 adv-horizontal">
                            <a href="#" class="white z-depth-1">
                                <img src="assets/images/advertise/adv-hor-2.jpg" class="responsive-img" width="803" height="122">
                            </a>
                        </div>

                        <div class="card horizontal hoverable property-card">
                            <div class="card-image">
                                <img class="responsive-img" src="assets/images/success/halfpenny_lane.jpg" width="490" height="366">
                                <div class="card-image-footer">
                                    <a href="property-details.php" class="camera">
                                        14 <img src="assets/images/camera-32.png" width="32" height="32"/>
                                    </a>
                                </div>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4>Offers in excess of <strong>&pound;105,000</strong></h4>
                                    <a href="property-details.php" class="big">2 Bedroom house for sale</a>
                                    <h5>Buchanan Street, Pendlebury, Swinton, Manchester</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis vel metus mattis vestibulum. In hac habitasse platea dictumst. Curabitur nec maximus diam. Quisque congue eros sed ipsum interdum cursus. </p>
                                </div>
                                <div class="card-action">
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6"><a class="waves-effect waves-light btn btn-block sp-secondary sp-primary-text modal-trigger" href="#property-book">Book Viewing</a></div>
                                        <div class="col s12 m6 call-now">Or Call Now on <br> <span class="click-to-call">0161 000 0000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card horizontal hoverable property-card">
                            <div class="card-image">
                                <img class="responsive-img" src="assets/images/success/halfpenny_lane.jpg" width="490" height="366">
                                <div class="card-image-footer">
                                    <a href="property-details.php" class="camera">
                                        14 <img src="assets/images/camera-32.png" width="32" height="32"/>
                                    </a>
                                </div>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4>Offers in excess of <strong>&pound;105,000</strong></h4>
                                    <a href="property-details.php" class="big">2 Bedroom house for sale</a>
                                    <h5>Buchanan Street, Pendlebury, Swinton, Manchester</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis vel metus mattis vestibulum. In hac habitasse platea dictumst. Curabitur nec maximus diam. Quisque congue eros sed ipsum interdum cursus. </p>
                                </div>
                                <div class="card-action">
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6"><a class="waves-effect waves-light btn btn-block sp-secondary sp-primary-text modal-trigger" href="#property-book">Book Viewing</a></div>
                                        <div class="col s12 m6 call-now">Or Call Now on <br> <span class="click-to-call">0161 000 0000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="center-align margin-top-40">
                            <ul class="pagination">
                                <li class="disabled"><a href="#">&Lt;</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li class="waves-effect"><a href="#">2</a></li>
                                <li class="waves-effect"><a href="#">3</a></li>
                                <li class="waves-effect"><a href="#">4</a></li>
                                <li class="waves-effect"><a href="#">5</a></li>
                                <li class="waves-effect"><a href="#">&Gt;</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col s12 m12 l3 center-align">
                        <div class="property-list-adv">
                            <div class="row">
                                <div class="col s12 m4 l12 margin-bottom-15">
                                    <a href="#" class="center-block">
                                        <img src="assets/images/advertise/adv-1.jpg" width="300" height="260" class="responsive-img hoverable"/>
                                    </a>
                                </div>
                                <div class="col s12 m4 l12 margin-bottom-15">
                                    <a href="#">
                                        <img src="assets/images/advertise/adv-2.jpg" width="300" height="260" class="responsive-img hoverable"/>
                                    </a>
                                </div>
                                <div class="col s12 m4 l12 margin-bottom-15">
                                    <a href="#">
                                        <img src="assets/images/advertise/adv-3.jpg" width="300" height="260" class="responsive-img hoverable"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include("section-footer.php"); ?>
</body>
</html>