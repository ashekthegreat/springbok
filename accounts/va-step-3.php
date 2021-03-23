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
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="assets/css/nouislider.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="assets/css/dec2020.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<?php include("section-header.php"); ?>

<main class="centered">
    <section class="sp-secondary-text section-step-header">
        <div class="container full-width">
            <img src="images/napb_logos.png" width="308" height="53" alt="Logos" class="napb-logos"/>
            <h3 class="sp-secondary-text">Just one last step</h3>
        </div>
    </section>

    <section class="sp-secondary-text section-step section-step-property">
        <div class="container narrow">

            <div class="step-progress">
                <div class="step-connector step-3"></div>
                <div class="step-status">50% Complete</div>
                <div class="step start">
                    <div class="step-number">1</div>
                    <div class="step-text"><i class="material-icons">phone_iphone</i> Mobile Verification</div>
                </div>
                <div class="step end">
                    <div class="step-number">2</div>
                    <div class="step-text"><i class="material-icons">home</i> Cash <br>Offer</div>
                </div>
            </div>

            <div class="message center-align margin-top-20">
                Please tell us a bit more of your property so we can provide you with
                an accurate cash offer
            </div>

            <div class="form-field property-value">
                <div class="form-field-label">What is the estimated value of the property?</div>
                <div class="range-slider margin-top-40" id="range-estimated-value" data-min="0" data-max="1500000"></div>
                <div class="range-slider-boundaries margin-top-15 margin-bottom-50">
                    <span class="right">&pound;1,500,000</span>
                    &pound;0
                </div>
                <input type="hidden" class="range-slider-value" id="estimated-value" value="150000" />
            </div>

            <div class="form-field property-condition">
                <div class="row">
                    <div class="col s12 m6">
                        <div class="form-field-label alone">Do you own the property outright?* </div>
                    </div>
                    <div class="col s12 m6 right-align">
                        <div class="input-block">
                            <label class="property-radio-container">
                                <input type="radio" id="property_condition_yes" name="do_you_own_the_property_outright" value="Yes">
                                <span class="checkmark">Yes</span>
                            </label>
                            <label class="property-radio-container">
                                <input type="radio" id="property_condition_no" name="do_you_own_the_property_outright" value="No" checked>
                                <span class="checkmark">No</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-field property-value property-mortgage">
                <div class="form-field-label">
                    How much is outstanding on your mortgage?
                    <span class="small nowrap">(or any other secured loans or early redemption charges)</span>
                </div>
                <div class="range-slider margin-top-40" id="range-mortgage-value" data-min="0" data-max="1500000"></div>
                <div class="range-slider-boundaries margin-top-15 margin-bottom-50">
                    <span class="right">&pound;1,500,000</span>
                    &pound;0
                </div>
                <input type="hidden" class="range-slider-value" id="mortgage-value" value="0" />
            </div>

            <div class="center-align margin-top-50">
                <!--<button type="button" class="waves-effect waves-light btn btn-large btn-block-on-small sp-teal sp-white-text btn-continue">CONTINUE</button>-->
                <a href="va-step-4.php" class="waves-effect waves-light btn btn-large btn-block-on-small sp-primary sp-secondary-text big-primary z-depth-2">CONTINUE</a>
                <div class="center-align smallest margin-top-15">
                    <i class="material-icons" style="font-size: inherit;">lock</i>
                    100% secure &amp; confidential. Data protection registration number ZA065473
                </div>
            </div>
            <div class="margin-top-20 margin-bottom-30">
                <a href="va-step-2.php">&lt; Previous</a>
            </div>
            <div class="center-align margin-top-30 smallest">
                <strong>&copy; <?php echo date('Y')?> Springbok Properties</strong>
            </div>
        </div>
    </section>
</main>

<?php include("section-footer.php"); ?>
</body>
</html>
