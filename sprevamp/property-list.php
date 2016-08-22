<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <title>Springbok Properties - Get Up To 100% Value For Your House Quickly</title>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>

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
                                    <div class="label">Price Range</div>
                                    <div class="value">No Limit</div>
                                    <span class="caret">▼</span>
                                </div>
                                <div class="field field-beds">
                                    <div class="label">Bedrooms</div>
                                    <div class="value">No Limit</div>
                                    <span class="caret">▼</span>
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
                                <h4>Price Range (<small class="filter-value"></small>)</h4>
                                <div class="price-slider"></div>
                                <input type="hidden" id="filter-price-min" name="filter-price-min"/>
                                <input type="hidden" id="filter-price-max" name="filter-price-max"/>
                                <div>&nbsp;</div>
                            </div>

                            <div class="filter filter-bed">
                                <h4>Bedrooms (<small class="filter-value"></small>)</h4>
                                <div class="bed-slider"></div>
                                <input type="hidden" id="filter-bed-min" name="filter-bed-min"/>
                                <input type="hidden" id="filter-bed-max" name="filter-bed-max"/>
                                <div>&nbsp;</div>
                            </div>

                            <div class="filter filter-property-type">
                                <h4>Property type</h4>
                                <div class="row margin-bottom-0">
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

                            <div class="filter filter-property-added">
                                <div class="row margin-bottom-0">
                                    <div class="col s12 m6">
                                        <h4>Added to site</h4>
                                        <select id="added-to-site" name="added-to-site">
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
                                            <input type="checkbox" id="property-stc" name="property-stc" value="1"/>
                                            <label for="property-stc">Include Sold STC</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter filter-action clearfix">
                                <button type="button" class="waves-effect waves-light btn sp-secondary sp-primary-text right filter-action-done">Done</button>
                                <button type="button" class="waves-effect waves-light btn white sp-secondary-text filter-action-clear">Clear</button>
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
                                <p><strong class="bigger total">4,241</strong> Results</p>
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
                            <a href="#" class="white z-depth-1">
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
                            <a href="#" class="white z-depth-1">
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
                            <div class="next inb right"><a href="#">Next &Gt;</a></div>
                            <div class="prev inb left"><a href="#">&Lt; Previous</a></div>
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