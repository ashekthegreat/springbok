<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <title>Springbok Properties - Get Up To 100% Value For Your House Quickly</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize<?php echo in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ))?'':'.min' ?>.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <?php include("section-header.php"); ?>

    <main>

        <section class="sp-secondary-text section-qualification">
            <div class="container narrow">

                <h4 class="center-align margin-bottom-30">Last step...some property info to help value your property correctly.</h4>
                <form id="qualForm" action="" method="post" name="qualForm" class="WF_QUAL">
                    <div class="card-panel padding-40">
                        <h5>House Number</h5>
                        <input type="text" class="form-control" id="h_no" name="h_no" placeholder="" tab-index="1" value="">

                        <h5 class="margin-top-40">Address</h5>
                        <input type="text" id="address" name="address" placeholder="" value="">

                        <h5 class="margin-top-40">Address</h5>
                        <input type="text" id="address2" name="address2" placeholder="" value="">

                        <h5 class="margin-top-40">Town</h5>
                        <input type="text" id="town" name="town" placeholder="" value="">

                        <div class="center-align margin-top-40">
                            <button type="button" class="waves-effect waves-light btn sp-primary sp-secondary-text" id="qualification-step-1">Continue</button>
                        </div>
                    </div>

                    <div class="card-panel padding-40 hide">
                        <div class="row">
                            <div class="col s4">
                                <h5>Bed</h5>
                                <input type="text" value="" id="no_of_bedsbathsreceptions" name="no_of_bedsbathsreceptions" placeholder="" maxlength="5" />
                            </div>
                            <div class="col s4">
                                <h5>Bath</h5>
                                <input type="text" value="" id="no_of_bedsbathsreceptions1" name="no_of_bedsbathsreceptions1" placeholder="" maxlength="5" />
                            </div>
                            <div class="col s4">
                                <h5>Receptions</h5>
                                <input type="text" value="" id="no_of_bedsbathsreceptions2" name="no_of_bedsbathsreceptions2" placeholder="" maxlength="5" />
                            </div>
                        </div>

                        <h5 class="margin-top-40">Property type:</h5>
                        <select id="property_type" name="property_type"  placeholder="">
                            <option value="">-SELECT-</option>
                            <option value="Detached bungalow" >Detached bungalow</option>
                            <option value="Semi-detached bungalow" >Semi-detached bungalow</option>
                            <option value="Terraced bungalow" >Terraced bungalow</option>
                            <option value="Bungalow" >Bungalow</option>
                            <option value="Lodge" >Lodge</option>
                            <option value="Shop" >Shop</option>
                            <option value="Retail Property (Out of Town)" >Retail Property (Out of Town)</option>
                            <option value="Office" >Office</option>
                            <option value="Restaurant" >Restaurant</option>
                            <option value="Cafe" >Cafe</option>
                            <option value="Land" >Land</option>
                            <option value="Triplex" >Triplex</option>
                            <option value="Penthouse" >Penthouse</option>
                            <option value="Duplex" >Duplex</option>
                            <option value="Flat" >Flat</option>
                            <option value="Maisonette" >Maisonette</option>
                            <option value="Serviced apartment" >Serviced apartment</option>
                            <option value="Apartment" >Apartment</option>
                            <option value="Garages" >Garages</option>
                            <option value="Parking" >Parking</option>
                            <option value="Garages" >Garages</option>
                            <option value="Guest House" >Guest House</option>
                            <option value="Hotel" >Hotel</option>
                            <option value="Town house" >Town house</option>
                            <option value="Cottage" >Cottage</option>
                            <option value="Terraced House" >Terraced House</option>
                            <option value="Farm House" >Farm House</option>
                            <option value="End of terrace house" >End of terrace house</option>
                            <option value="Semi-detached house" >Semi-detached house</option>
                            <option value="Detached Villa" >Detached Villa</option>
                            <option value="Semi-detached Villa" >Semi-detached Villa</option>
                            <option value="Villa" >Villa</option>
                            <option value="Detached house" >Detached house</option>
                        </select>

                        <h5 class="margin-top-40">Freehold / Leasehold</h5>
                        <select id="tenure" name="tenure" placeholder="">
                            <option value="">-SELECT-</option>
                            <option value="269" >Freehold</option>
                            <option value="268" >Leasehold</option>
                        </select>


                        <h5 class="margin-top-40">Do you live in this property?</h5>
                        <div class="switch">
                            <label>
                                Yes
                                <input type="checkbox" name="do_you_live_in_this_property" >
                                <span class="lever"></span>
                                No
                            </label>
                        </div>

                        <h5 class="margin-top-40">Is property currently with any estate  agent?</h5>
                        <div class="switch">
                            <label>
                                Yes
                                <input type="checkbox" name="property_otm_if_yes_for_how_long"  >
                                <span class="lever"></span>
                                No
                            </label>
                        </div>

                        <div class="center-align margin-top-40">
                            <button type="button" class="waves-effect waves-light btn sp-primary sp-secondary-text" id="qualification-step-2">Proceed (Almost Done)</button>
                        </div>

                    </div>

                    <div class="card-panel padding-40 hide">
                        <h5>Est. value of the property </h5>
                        <input type="text" value="" id="estimated_value_of_the_property" placeholder="GBP" name="estimated_value_of_the_property">

                        <h5 class="margin-top-40">Total secured debt (mortgage +  secured loans</h5>
                        <input type="text" class="form-control" value="" id="total_secured_debt_mortgage_secured_loans" placeholder="GBP" name="total_secured_debt_mortgage_secured_loans">

                        <h5 class="margin-top-40">Reason for sale</h5>
                        <input type="text" class="form-control" id="reason_for_sale" value="" name="reason_for_sale" placeholder="">

                        <h5 class="margin-top-40">Comment</h5>
                        <textarea class="materialize-textarea no-padding" id="comment" name="comment" rows="3"></textarea>

                        <div class="center-align margin-top-40">
                            <button type="submit" class="waves-effect waves-light btn sp-primary sp-secondary-text" id="qualification-step-3">Continue</button>
                        </div>
                    </div>

                    <input type="hidden" name="leads_id" id="leads_id" value="110" />
                    <input type="hidden" name="agencyId" id="agencyId" value="" />
                    <input type="hidden" name="bookingId" id="bookingId" value="" />


                    <!--<div class="card-panel">
                        <div class="row">
                            <div class="input-field col s3">
                                <select class="form-control" id="property_condition" name="property_condition">
                                    <option value="">-SELECT-</option>
                                    <option value="62" >Excellent</option>
                                    <option value="63" >Good</option>
                                    <option value="64" >Average</option>
                                    <option value="65" >Needs work</option>
                                </select>
                                <label for="property_condition">Condition</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="text" class="form-control" value="" id="timescales_to_sell_and_reason" name="timescales_to_sell_and_reason" placeholder="">
                                <label for="secured">How quickly you want to sell?</label>
                            </div>
                        </div>
                    </div>-->
                </form>

            </div>
        </section>

    </main>

    <?php include("section-footer.php"); ?>
</body>
</html>