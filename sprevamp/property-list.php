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
            <div class="property-search-bar z-depth-1">
                <form>
                    <div class="sp-secondary darken-3 white-text">
                        <div class="container">
                            <div class="fields">
                                <div class="field field-search">
                                    <div class="typeahead__container">
                                        <div class="typeahead__field">
                                            <span class="typeahead__query">
                                                <input id="search" class="js-typeahead" name="search" type="search" autocomplete="off" placeholder="Enter a search location">
                                            </span>
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

                                    <input type="hidden" id="current-page" name="current-page" value="1">
                                    <input type="hidden" id="limit" name="limit" value="10">
                                </div>

                                <div class="field field-price">
                                    <div class="input-field min-price">
                                        <select id="field-dropdown-price-min">
                                            <option value="">Min Price</option><option value="50000">&pound;50,000</option><option value="60000">&pound;60,000</option><option value="70000">&pound;70,000</option><option value="80000">&pound;80,000</option><option value="90000">&pound;90,000</option><option value="100000">&pound;100,000</option><option value="110000">&pound;110,000</option><option value="120000">&pound;120,000</option><option value="125000">&pound;125,000</option><option value="130000">&pound;130,000</option><option value="140000">&pound;140,000</option><option value="150000">&pound;150,000</option><option value="160000">&pound;160,000</option><option value="170000">&pound;170,000</option><option value="175000">&pound;175,000</option><option value="180000">&pound;180,000</option><option value="190000">&pound;190,000</option><option value="200000">&pound;200,000</option><option value="210000">&pound;210,000</option><option value="220000">&pound;220,000</option><option value="230000">&pound;230,000</option><option value="240000">&pound;240,000</option><option value="250000">&pound;250,000</option><option value="260000">&pound;260,000</option><option value="270000">&pound;270,000</option><option value="280000">&pound;280,000</option><option value="290000">&pound;290,000</option><option value="300000">&pound;300,000</option><option value="325000">&pound;325,000</option><option value="350000">&pound;350,000</option><option value="375000">&pound;375,000</option><option value="400000">&pound;400,000</option><option value="425000">&pound;425,000</option><option value="450000">&pound;450,000</option><option value="475000">&pound;475,000</option><option value="500000">&pound;500,000</option><option value="550000">&pound;550,000</option><option value="600000">&pound;600,000</option><option value="650000">&pound;650,000</option><option value="700000">&pound;700,000</option><option value="800000">&pound;800,000</option><option value="900000">&pound;900,000</option><option value="1000000">&pound;1,000,000</option><option value="1250000">&pound;1,250,000</option><option value="1500000">&pound;1,500,000</option><option value="1750000">&pound;1,750,000</option><option value="2000000">&pound;2,000,000</option><option value="2500000">&pound;2,500,000</option><option value="3000000">&pound;3,000,000</option><option value="4000000">&pound;4,000,000</option><option value="5000000">&pound;5,000,000</option><option value="7500000">&pound;7,500,000</option><option value="10000000">&pound;10,000,000</option><option value="15000000">&pound;15,000,000</option><option value="20000000">&pound;20,000,000</option><option value="">Min Price</option>
                                        </select>
                                    </div>
                                    <span class="to">to</span>
                                    <div class="input-field max-price">
                                        <select id="field-dropdown-price-max">
                                            <option value="">Max Price</option><option value="50000">&pound;50,000</option><option value="60000">&pound;60,000</option><option value="70000">&pound;70,000</option><option value="80000">&pound;80,000</option><option value="90000">&pound;90,000</option><option value="100000">&pound;100,000</option><option value="110000">&pound;110,000</option><option value="120000">&pound;120,000</option><option value="125000">&pound;125,000</option><option value="130000">&pound;130,000</option><option value="140000">&pound;140,000</option><option value="150000">&pound;150,000</option><option value="160000">&pound;160,000</option><option value="170000">&pound;170,000</option><option value="175000">&pound;175,000</option><option value="180000">&pound;180,000</option><option value="190000">&pound;190,000</option><option value="200000">&pound;200,000</option><option value="210000">&pound;210,000</option><option value="220000">&pound;220,000</option><option value="230000">&pound;230,000</option><option value="240000">&pound;240,000</option><option value="250000">&pound;250,000</option><option value="260000">&pound;260,000</option><option value="270000">&pound;270,000</option><option value="280000">&pound;280,000</option><option value="290000">&pound;290,000</option><option value="300000">&pound;300,000</option><option value="325000">&pound;325,000</option><option value="350000">&pound;350,000</option><option value="375000">&pound;375,000</option><option value="400000">&pound;400,000</option><option value="425000">&pound;425,000</option><option value="450000">&pound;450,000</option><option value="475000">&pound;475,000</option><option value="500000">&pound;500,000</option><option value="550000">&pound;550,000</option><option value="600000">&pound;600,000</option><option value="650000">&pound;650,000</option><option value="700000">&pound;700,000</option><option value="800000">&pound;800,000</option><option value="900000">&pound;900,000</option><option value="1000000">&pound;1,000,000</option><option value="1250000">&pound;1,250,000</option><option value="1500000">&pound;1,500,000</option><option value="1750000">&pound;1,750,000</option><option value="2000000">&pound;2,000,000</option><option value="2500000">&pound;2,500,000</option><option value="3000000">&pound;3,000,000</option><option value="4000000">&pound;4,000,000</option><option value="5000000">&pound;5,000,000</option><option value="7500000">&pound;7,500,000</option><option value="10000000">&pound;10,000,000</option><option value="15000000">&pound;15,000,000</option><option value="20000000">&pound;20,000,000</option><option value="">Max Price</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field field-beds">
                                    <div class="input-field min-bed">
                                        <select id="field-dropdown-bed-min">
                                            <option value="" selected>Min Beds</option>
                                            <option value="1">1 bed</option>
                                            <option value="2">2 beds</option>
                                            <option value="3">3 beds</option>
                                            <option value="4">4 beds</option>
                                            <option value="5">5 beds</option>
                                            <option value="6">6 beds</option>
                                        </select>
                                    </div>
                                    <span class="to">to</span>
                                    <div class="input-field max-bed">
                                        <select id="field-dropdown-bed-max">
                                            <option value="" selected>Max Beds</option>
                                            <option value="1">1 bed</option>
                                            <option value="2">2 beds</option>
                                            <option value="3">3 beds</option>
                                            <option value="4">4 beds</option>
                                            <option value="5">5 beds</option>
                                            <option value="6">6 beds</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field field-property-type">
                                    <div class="combined">Property Types <span class="property-type-count"></span></div>
                                    <span class="caret">▼</span>
                                </div>
                                <div class="field field-filters">
                                    <div class="combined">Filters</div>
                                    <span class="caret">▼</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sp-secondary-text sp-secondary lighten-5 z-depth-2 property-search-extra">
                        <div class="container">
                            <div class="filter filter-price">
                                <div class="label">Price:</div>
                                <div class="filter-fields">
                                    <div class="row">
                                        <div class="col s6">
                                            <select id="filter-dropdown-price-min" name="filter-price-min">
                                                <option value="">Min Price</option><option value="50000">&pound;50,000</option><option value="60000">&pound;60,000</option><option value="70000">&pound;70,000</option><option value="80000">&pound;80,000</option><option value="90000">&pound;90,000</option><option value="100000">&pound;100,000</option><option value="110000">&pound;110,000</option><option value="120000">&pound;120,000</option><option value="125000">&pound;125,000</option><option value="130000">&pound;130,000</option><option value="140000">&pound;140,000</option><option value="150000">&pound;150,000</option><option value="160000">&pound;160,000</option><option value="170000">&pound;170,000</option><option value="175000">&pound;175,000</option><option value="180000">&pound;180,000</option><option value="190000">&pound;190,000</option><option value="200000">&pound;200,000</option><option value="210000">&pound;210,000</option><option value="220000">&pound;220,000</option><option value="230000">&pound;230,000</option><option value="240000">&pound;240,000</option><option value="250000">&pound;250,000</option><option value="260000">&pound;260,000</option><option value="270000">&pound;270,000</option><option value="280000">&pound;280,000</option><option value="290000">&pound;290,000</option><option value="300000">&pound;300,000</option><option value="325000">&pound;325,000</option><option value="350000">&pound;350,000</option><option value="375000">&pound;375,000</option><option value="400000">&pound;400,000</option><option value="425000">&pound;425,000</option><option value="450000">&pound;450,000</option><option value="475000">&pound;475,000</option><option value="500000">&pound;500,000</option><option value="550000">&pound;550,000</option><option value="600000">&pound;600,000</option><option value="650000">&pound;650,000</option><option value="700000">&pound;700,000</option><option value="800000">&pound;800,000</option><option value="900000">&pound;900,000</option><option value="1000000">&pound;1,000,000</option><option value="1250000">&pound;1,250,000</option><option value="1500000">&pound;1,500,000</option><option value="1750000">&pound;1,750,000</option><option value="2000000">&pound;2,000,000</option><option value="2500000">&pound;2,500,000</option><option value="3000000">&pound;3,000,000</option><option value="4000000">&pound;4,000,000</option><option value="5000000">&pound;5,000,000</option><option value="7500000">&pound;7,500,000</option><option value="10000000">&pound;10,000,000</option><option value="15000000">&pound;15,000,000</option><option value="20000000">&pound;20,000,000</option><option value="">Min Price</option>
                                            </select>
                                        </div>
                                        <div class="col s6">
                                            <select id="filter-dropdown-price-max" name="filter-price-max">
                                                <option value="">Max Price</option><option value="50000">&pound;50,000</option><option value="60000">&pound;60,000</option><option value="70000">&pound;70,000</option><option value="80000">&pound;80,000</option><option value="90000">&pound;90,000</option><option value="100000">&pound;100,000</option><option value="110000">&pound;110,000</option><option value="120000">&pound;120,000</option><option value="125000">&pound;125,000</option><option value="130000">&pound;130,000</option><option value="140000">&pound;140,000</option><option value="150000">&pound;150,000</option><option value="160000">&pound;160,000</option><option value="170000">&pound;170,000</option><option value="175000">&pound;175,000</option><option value="180000">&pound;180,000</option><option value="190000">&pound;190,000</option><option value="200000">&pound;200,000</option><option value="210000">&pound;210,000</option><option value="220000">&pound;220,000</option><option value="230000">&pound;230,000</option><option value="240000">&pound;240,000</option><option value="250000">&pound;250,000</option><option value="260000">&pound;260,000</option><option value="270000">&pound;270,000</option><option value="280000">&pound;280,000</option><option value="290000">&pound;290,000</option><option value="300000">&pound;300,000</option><option value="325000">&pound;325,000</option><option value="350000">&pound;350,000</option><option value="375000">&pound;375,000</option><option value="400000">&pound;400,000</option><option value="425000">&pound;425,000</option><option value="450000">&pound;450,000</option><option value="475000">&pound;475,000</option><option value="500000">&pound;500,000</option><option value="550000">&pound;550,000</option><option value="600000">&pound;600,000</option><option value="650000">&pound;650,000</option><option value="700000">&pound;700,000</option><option value="800000">&pound;800,000</option><option value="900000">&pound;900,000</option><option value="1000000">&pound;1,000,000</option><option value="1250000">&pound;1,250,000</option><option value="1500000">&pound;1,500,000</option><option value="1750000">&pound;1,750,000</option><option value="2000000">&pound;2,000,000</option><option value="2500000">&pound;2,500,000</option><option value="3000000">&pound;3,000,000</option><option value="4000000">&pound;4,000,000</option><option value="5000000">&pound;5,000,000</option><option value="7500000">&pound;7,500,000</option><option value="10000000">&pound;10,000,000</option><option value="15000000">&pound;15,000,000</option><option value="20000000">&pound;20,000,000</option><option value="">Max Price</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="filter filter-bed">
                                <div class="label">Bedrooms:</div>
                                <div class="filter-fields">
                                    <div class="row">
                                        <div class="col s6">
                                            <select id="filter-dropdown-bed-min" name="filter-bed-min">
                                                <option value="" selected>Min Beds</option>
                                                <option value="1">1 bed</option>
                                                <option value="2">2 beds</option>
                                                <option value="3">3 beds</option>
                                                <option value="4">4 beds</option>
                                                <option value="5">5 beds</option>
                                                <option value="6">6 beds</option>
                                            </select>
                                        </div>
                                        <div class="col s6">
                                            <select id="filter-dropdown-bed-max" name="filter-bed-max">
                                                <option value="" selected>Max Beds</option>
                                                <option value="1">1 bed</option>
                                                <option value="2">2 beds</option>
                                                <option value="3">3 beds</option>
                                                <option value="4">4 beds</option>
                                                <option value="5">5 beds</option>
                                                <option value="6">6 beds</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="filter filter-property-type">
                                <div class="label">Property Type:</div>
                                <div class="filter-fields">
                                    <div class="row">
                                        <div class="col s12 m4 l3">
                                            <input type="checkbox" id="property-type-1" name="property-type" value="flat"/>
                                            <label for="property-type-1">Flat</label>
                                        </div>
                                        <div class="col s12 m4 l3">
                                            <input type="checkbox" id="property-type-2" name="property-type" value="detached"/>
                                            <label for="property-type-2">Detached</label>
                                        </div>
                                        <div class="col s12 m4 l3">
                                            <input type="checkbox" id="property-type-3" name="property-type" value="semi-detached"/>
                                            <label for="property-type-3">Semi-Detached</label>
                                        </div>
                                        <div class="col s12 m4 l3">
                                            <input type="checkbox" id="property-type-4" name="property-type" value="Semi-Detached Bungalow"/>
                                            <label for="property-type-4">Semi-Detached Bungalow</label>
                                        </div>
                                        <div class="col s12 m4 l3">
                                            <input type="checkbox" id="property-type-5" name="property-type" value="terraced"/>
                                            <label for="property-type-5">Terraced</label>
                                        </div>
                                        <div class="col s12 m4 l3">
                                            <input type="checkbox" id="property-type-6" name="property-type" value="bungalow"/>
                                            <label for="property-type-6">Bungalow</label>
                                        </div>
                                        <div class="col s12 m4 l3">
                                            <input type="checkbox" id="property-type-7" name="property-type" value="apartment"/>
                                            <label for="property-type-7">Apartment</label>
                                        </div>
                                        <div class="col s12 m4 l3">
                                            <input type="checkbox" id="property-type-8" name="property-type" value="cottage"/>
                                            <label for="property-type-8">Cottage</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="filter filter-property-added">
                                <div class="label">Added to Site:</div>
                                <div class="filter-fields">
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <select id="added-to-site" name="added-to-site">
                                                <option value="">Anytime</option>
                                                <option value="1">Last 24 hours</option>
                                                <option value="3">Last 3 days</option>
                                                <option value="7">Last 7 days</option>
                                                <option value="14">Last 14 days</option>
                                            </select>
                                        </div>
                                        <div class="col s12 m6">
                                            <div class="margin-top-5 center-align">
                                                <input type="checkbox" id="property-stc" name="property-stc" value="1"/>
                                                <label for="property-stc">Include Sold STC</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="filter filter-action clearfix">
                                <button type="button" class="waves-effect waves-light btn sp-secondary sp-primary-text right filter-action-done">Done</button>
                                <!--<button type="reset" id="reset" class="waves-effect waves-light btn white sp-secondary-text filter-action-clear">Clear</button>-->
                            </div>
                        </div>

                    </div>
                </form>
            </div>

        </section>

        <section class="properties-list sp-secondary lighten-5 sp-secondary-text">
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l9 margin-bottom-40">
                        <div class="card white sp-secondary-text margin-top-0">
                            <div class="card-content">
                                <p class="big search-criteria"></p>
                                <p><strong class="bigger total">-</strong> Results</p>
                            </div>
                        </div>

                        <div class="card horizontal hoverable property-card busy">
                            <div class="card-image">
                                <img class="responsive-img property-image" src="assets/images/camera-placeholder.png" width="490" height="366">
                                <div class="card-image-footer">
                                    <a href="property-details.php" class="camera">
                                        <span class="property-image-count"></span> <img src="assets/images/camera-32.png" width="32" height="32"/>
                                    </a>
                                </div>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4 class="property-price">Offers in excess of <strong></strong></h4>
                                    <a class="big property-title" href="property-details.php"></a>
                                    <h5 class="property-address"></h5>
                                    <p class="property-description"></p>
                                </div>
                                <div class="card-action">
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6"><a class="waves-effect waves-light btn btn-block sp-secondary sp-primary-text modal-trigger" href="#property-book">Book Viewing</a></div>
                                        <div class="col s12 m6 call-now">Or Call Now on <br> <span class="click-to-call">0161 000 0000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card horizontal hoverable property-card busy">
                            <div class="card-image">
                                <img class="responsive-img property-image" src="assets/images/camera-placeholder.png" width="490" height="366">
                                <div class="card-image-footer">
                                    <a href="property-details.php" class="camera">
                                        <span class="property-image-count"></span> <img src="assets/images/camera-32.png" width="32" height="32"/>
                                    </a>
                                </div>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4 class="property-price">Offers in excess of <strong></strong></h4>
                                    <a class="big property-title" href="property-details.php"></a>
                                    <h5 class="property-address"></h5>
                                    <p class="property-description"></p>
                                </div>
                                <div class="card-action">
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6"><a class="waves-effect waves-light btn btn-block sp-secondary sp-primary-text modal-trigger" href="#property-book">Book Viewing</a></div>
                                        <div class="col s12 m6 call-now">Or Call Now on <br> <span class="click-to-call">0161 000 0000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card horizontal hoverable property-card busy">
                            <div class="card-image">
                                <img class="responsive-img property-image" src="assets/images/camera-placeholder.png" width="490" height="366">
                                <div class="card-image-footer">
                                    <a href="property-details.php" class="camera">
                                        <span class="property-image-count"></span> <img src="assets/images/camera-32.png" width="32" height="32"/>
                                    </a>
                                </div>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4 class="property-price">Offers in excess of <strong></strong></h4>
                                    <a class="big property-title" href="property-details.php"></a>
                                    <h5 class="property-address"></h5>
                                    <p class="property-description"></p>
                                </div>
                                <div class="card-action">
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6"><a class="waves-effect waves-light btn btn-block sp-secondary sp-primary-text modal-trigger" href="#property-book">Book Viewing</a></div>
                                        <div class="col s12 m6 call-now">Or Call Now on <br> <span class="click-to-call">0161 000 0000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card horizontal hoverable property-card busy">
                            <div class="card-image">
                                <img class="responsive-img property-image" src="assets/images/camera-placeholder.png" width="490" height="366">
                                <div class="card-image-footer">
                                    <a href="property-details.php" class="camera">
                                        <span class="property-image-count"></span> <img src="assets/images/camera-32.png" width="32" height="32"/>
                                    </a>
                                </div>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4 class="property-price">Offers in excess of <strong></strong></h4>
                                    <a class="big property-title" href="property-details.php"></a>
                                    <h5 class="property-address"></h5>
                                    <p class="property-description"></p>
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
                            <a href="free-valuation.php" class="white z-depth-1">
                                <img src="assets/images/advertise/adv-hor-1.jpg" class="responsive-img" width="803" height="122">
                            </a>
                        </div>

                        <div class="card horizontal hoverable property-card busy">
                            <div class="card-image">
                                <img class="responsive-img property-image" src="assets/images/camera-placeholder.png" width="490" height="366">
                                <div class="card-image-footer">
                                    <a href="property-details.php" class="camera">
                                        <span class="property-image-count"></span> <img src="assets/images/camera-32.png" width="32" height="32"/>
                                    </a>
                                </div>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4 class="property-price">Offers in excess of <strong></strong></h4>
                                    <a class="big property-title" href="property-details.php"></a>
                                    <h5 class="property-address"></h5>
                                    <p class="property-description"></p>
                                </div>
                                <div class="card-action">
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6"><a class="waves-effect waves-light btn btn-block sp-secondary sp-primary-text modal-trigger" href="#property-book">Book Viewing</a></div>
                                        <div class="col s12 m6 call-now">Or Call Now on <br> <span class="click-to-call">0161 000 0000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card horizontal hoverable property-card busy">
                            <div class="card-image">
                                <img class="responsive-img property-image" src="assets/images/camera-placeholder.png" width="490" height="366">
                                <div class="card-image-footer">
                                    <a href="property-details.php" class="camera">
                                        <span class="property-image-count"></span> <img src="assets/images/camera-32.png" width="32" height="32"/>
                                    </a>
                                </div>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4 class="property-price">Offers in excess of <strong></strong></h4>
                                    <a class="big property-title" href="property-details.php"></a>
                                    <h5 class="property-address"></h5>
                                    <p class="property-description"></p>
                                </div>
                                <div class="card-action">
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6"><a class="waves-effect waves-light btn btn-block sp-secondary sp-primary-text modal-trigger" href="#property-book">Book Viewing</a></div>
                                        <div class="col s12 m6 call-now">Or Call Now on <br> <span class="click-to-call">0161 000 0000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card horizontal hoverable property-card busy">
                            <div class="card-image">
                                <img class="responsive-img property-image" src="assets/images/camera-placeholder.png" width="490" height="366">
                                <div class="card-image-footer">
                                    <a href="property-details.php" class="camera">
                                        <span class="property-image-count"></span> <img src="assets/images/camera-32.png" width="32" height="32"/>
                                    </a>
                                </div>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4 class="property-price">Offers in excess of <strong></strong></h4>
                                    <a class="big property-title" href="property-details.php"></a>
                                    <h5 class="property-address"></h5>
                                    <p class="property-description"></p>
                                </div>
                                <div class="card-action">
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6"><a class="waves-effect waves-light btn btn-block sp-secondary sp-primary-text modal-trigger" href="#property-book">Book Viewing</a></div>
                                        <div class="col s12 m6 call-now">Or Call Now on <br> <span class="click-to-call">0161 000 0000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card horizontal hoverable property-card busy">
                            <div class="card-image">
                                <img class="responsive-img property-image" src="assets/images/camera-placeholder.png" width="490" height="366">
                                <div class="card-image-footer">
                                    <a href="property-details.php" class="camera">
                                        <span class="property-image-count"></span> <img src="assets/images/camera-32.png" width="32" height="32"/>
                                    </a>
                                </div>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4 class="property-price">Offers in excess of <strong></strong></h4>
                                    <a class="big property-title" href="property-details.php"></a>
                                    <h5 class="property-address"></h5>
                                    <p class="property-description"></p>
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
                            <a href="investments.php" class="white z-depth-1">
                                <img src="assets/images/advertise/adv-hor-2.jpg" class="responsive-img" width="803" height="122">
                            </a>
                        </div>

                        <div class="card horizontal hoverable property-card busy">
                            <div class="card-image">
                                <img class="responsive-img property-image" src="assets/images/camera-placeholder.png" width="490" height="366">
                                <div class="card-image-footer">
                                    <a href="property-details.php" class="camera">
                                        <span class="property-image-count"></span> <img src="assets/images/camera-32.png" width="32" height="32"/>
                                    </a>
                                </div>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4 class="property-price">Offers in excess of <strong></strong></h4>
                                    <a class="big property-title" href="property-details.php"></a>
                                    <h5 class="property-address"></h5>
                                    <p class="property-description"></p>
                                </div>
                                <div class="card-action">
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6"><a class="waves-effect waves-light btn btn-block sp-secondary sp-primary-text modal-trigger" href="#property-book">Book Viewing</a></div>
                                        <div class="col s12 m6 call-now">Or Call Now on <br> <span class="click-to-call">0161 000 0000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card horizontal hoverable property-card busy">
                            <div class="card-image">
                                <img class="responsive-img property-image" src="assets/images/camera-placeholder.png" width="490" height="366">
                                <div class="card-image-footer">
                                    <a href="property-details.php" class="camera">
                                        <span class="property-image-count"></span> <img src="assets/images/camera-32.png" width="32" height="32"/>
                                    </a>
                                </div>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4 class="property-price">Offers in excess of <strong></strong></h4>
                                    <a class="big property-title" href="property-details.php"></a>
                                    <h5 class="property-address"></h5>
                                    <p class="property-description"></p>
                                </div>
                                <div class="card-action">
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6"><a class="waves-effect waves-light btn btn-block sp-secondary sp-primary-text modal-trigger" href="#property-book">Book Viewing</a></div>
                                        <div class="col s12 m6 call-now">Or Call Now on <br> <span class="click-to-call">0161 000 0000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="center-align margin-top-40 pagination-holder sp-secondary lighten-4">

                            <div class="next inb right">Next &Gt;</div>
                            <div class="prev inb left">&Lt; Previous</div>
                            <div class="inb">
                                <div class="inb">Page</div>
                                <div class="inb select">
                                    <select id="page"><option value="1">1</option></select>
                                </div>
                                <div class="inb">
                                    of <span class="total-page-count">1</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m12 l3 center-align">
                        <div class="property-list-adv">
                            <div class="row">
                                <div class="col s12 m4 l12 margin-bottom-15">
                                    <a href="free-valuation.php" class="center-block">
                                        <img src="assets/images/advertise/adv-1.jpg" width="300" height="260" class="responsive-img hoverable"/>
                                    </a>
                                </div>
                                <div class="col s12 m4 l12 margin-bottom-15">
                                    <a href="investments.php">
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