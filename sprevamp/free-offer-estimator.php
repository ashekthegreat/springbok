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
    <?php include("section-header-landing.php"); ?>

    <main>
        <section class="sp-secondary lighten-5 sp-secondary-text">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <p class="center-align big margin-bottom-30">To ensure you receive an accurate valuation on your email / text message, please double check your details are correct.</p>
                        <div class="col s12 m10 offset-m1 l8 offset-l2">
                            <form class="wf_3" action="http://simbacloud.co.uk/Users/forms/processFormStep2.php" method="post">
                                <div class="classic-form z-depth-1 margin-bottom-30">
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6">
                                            <input placeholder="Your Name" id="name" name="name" type="text" value="" />
                                        </div>
                                        <div class="col s12 m6">
                                            <input placeholder="Your Email" id="email" name="email" type="text" value="" />
                                        </div>

                                        <input type="hidden" name="address" value="Declined">
                                        <input type="hidden" name="_wf_salt" value="5d556158af247af37751a494bfcfca20">
                                        <input type="hidden" name="_redirection" value="http://staging.springbokproperties.co.uk/free-offer-thanks">
                                        <input type="hidden" name="_wf_name" value="Step 2 WF - Free Offer Estimator">
                                        <input type="hidden" name="_wf_len" value="5">
                                        <input type="hidden" value="springbokproperties.co.uk" name="_source">
                                        <input type="hidden" value="http://springbokproperties.co.uk/" name="_page_url">
                                        <input type="hidden" value="WEB" name="_srcChannel">
                                        <input type="hidden" value="" name="leads_id">
                                    </div>
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6">
                                            <input placeholder="Your Number" id="phone" name="phone" type="text" value="" />
                                        </div>
                                        <div class="col s12 m6">
                                            <input placeholder="Postcode" id="postcode" name="postcode" value="" type="text">
                                        </div>

                                    </div>
                                </div>

                                <div class="classic-form z-depth-1 margin-bottom-30">
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6">
                                            House No.
                                        </div>
                                        <div class="col s12 m6">
                                            <input placeholder="House Number" id="h_no" name="h_no" type="text">
                                        </div>
                                    </div>
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6">
                                            Property Type
                                        </div>
                                        <div class="col s12 m6">
                                            <select id="property_type" name="property_type" class="browser-default margin-bottom-10">
                                                <option value="">-SELECT-</option>
                                                <option value="Detached bungalow">Detached bungalow</option>
                                                <option value="Semi-detached bungalow">Semi-detached bungalow</option>
                                                <option value="Terraced bungalow">Terraced bungalow</option>
                                                <option value="Bungalow">Bungalow</option>
                                                <option value="Lodge">Lodge</option>
                                                <option value="Shop">Shop</option>
                                                <option value="Retail Property (Out of Town)">Retail Property (Out of Town)</option>
                                                <option value="Office">Office</option>
                                                <option value="Restaurant">Restaurant</option>
                                                <option value="Cafe">Cafe</option>
                                                <option value="Land">Land</option>
                                                <option value="Triplex">Triplex</option>
                                                <option value="Penthouse">Penthouse</option>
                                                <option value="Duplex">Duplex</option>
                                                <option value="Flat">Flat</option>
                                                <option value="Maisonette">Maisonette</option>
                                                <option value="Serviced apartment">Serviced apartment</option>
                                                <option value="Apartment">Apartment</option>
                                                <option value="Garages">Garages</option>
                                                <option value="Parking">Parking</option>
                                                <option value="Garages">Garages</option>
                                                <option value="Guest House">Guest House</option>
                                                <option value="Hotel">Hotel</option>
                                                <option value="Town house">Town house</option>
                                                <option value="Cottage">Cottage</option>
                                                <option value="Terraced House">Terraced House</option>
                                                <option value="Farm House">Farm House</option>
                                                <option value="End of terrace house">End of terrace house</option>
                                                <option value="Semi-detached house">Semi-detached house</option>
                                                <option value="Detached Villa">Detached Villa</option>
                                                <option value="Semi-detached Villa">Semi-detached Villa</option>
                                                <option value="Villa">Villa</option>
                                                <option value="Detached house">Detached house</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6">
                                            No. of Bed / Bath / Receptions
                                        </div>
                                        <div class="col s12 m6">
                                            <input id="no_of_bedsbathsreceptions" name="no_of_bedsbathsreceptions" type="text">
                                        </div>
                                    </div>
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6">
                                            Freehold / Leasehold
                                        </div>
                                        <div class="col s12 m6">
                                            <select id="tenure" name="tenure" class="browser-default margin-bottom-10">
                                                <option value="">-SELECT-</option>
                                                <option value="60">Freehold</option>
                                                <option value="61">Leasehold</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6">
                                            Estimated Property Value
                                        </div>
                                        <div class="col s12 m6">
                                            <input id="estimated_value_of_the_property" name="estimated_value_of_the_property" type="text">
                                        </div>
                                    </div>
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6">
                                            Outstanding Mortgage / other secured loans
                                        </div>
                                        <div class="col s12 m6">
                                            <input id="total_secured_debt_mortgage_secured_loans" name="total_secured_debt_mortgage_secured_loans" type="text">
                                        </div>
                                    </div>
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6">
                                            How quickly you want to sell?
                                        </div>
                                        <div class="col s12 m6">
                                            <input id="timescales_to_sell_and_reason" name="timescales_to_sell_and_reason" type="text">
                                        </div>
                                    </div>
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6">
                                            Reason for sale
                                        </div>
                                        <div class="col s12 m6">
                                            <input id="reason_for_sale" name="reason_for_sale" type="text">
                                        </div>
                                    </div>
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6">
                                            Is it currently on the market?
                                        </div>
                                        <div class="col s12 m6">
                                            <input id="property_otm_if_yes_for_how_long" name="property_otm_if_yes_for_how_long" type="text">
                                        </div>
                                    </div>
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6">
                                            Do you live in the property
                                        </div>
                                        <div class="col s12 m6">
                                            <input id="do_you_live_in_this_property" name="do_you_live_in_this_property" type="text">
                                        </div>
                                    </div>
                                    <div class="row margin-bottom-1">
                                        <div class="col s12 m6">
                                            Other Property Features
                                        </div>
                                        <div class="col s12 m6">
                                            <p>
                                                <input type="checkbox"  name="other_property_features[]" id="other_property_features1" value="66" />
                                                <label for="other_property_features1">Double Glazing</label>
                                            </p>
                                            <p>
                                                <input type="checkbox"  name="other_property_features[]" id="other_property_features2" value="67" />
                                                <label for="other_property_features2">Central Heating</label>
                                            </p>
                                            <p>
                                                <input type="checkbox"  name="other_property_features[]" id="other_property_features3" value="68" />
                                                <label for="other_property_features3">Parking</label>
                                            </p>
                                            <p>
                                                <input type="checkbox"  name="other_property_features[]" id="other_property_features4" value="69" />
                                                <label for="other_property_features4">Garage</label>
                                            </p>
                                            <p>
                                                <input type="checkbox"  name="other_property_features[]" id="other_property_features5" value="70" />
                                                <label for="other_property_features5">Conservatory</label>
                                            </p>
                                            <p>
                                                <input type="checkbox"  name="other_property_features[]" id="other_property_features6" value="71" />
                                                <label for="other_property_features6">Ensuite Bathroom</label>
                                            </p>
                                            <p>
                                                <input type="checkbox"  name="other_property_features[]" id="other_property_features7" value="72" />
                                                <label for="other_property_features7">Gardens</label>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6">
                                            Property Condition
                                        </div>
                                        <div class="col s12 m6">
                                            <select id="property_condition" name="property_condition" class="browser-default">
                                                <option value="">-SELECT-</option>
                                                <option value="62">Excellent</option>
                                                <option value="63">Good</option>
                                                <option value="64">Average</option>
                                                <option value="65">Needs work</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row margin-bottom-0">
                                        <div class="col s12 m6 offset-m3">
                                            <button type="submit" class="waves-effect waves-light btn-large btn-block sp-primary sp-secondary-text" id="frmSubmit" name="frmSubmit">Go to Step 3</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("section-footer-landing.php"); ?>
</body>
</html>