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
            <h3 class="sp-secondary-text">Great news, we are actively buying in your area</h3>
        </div>
    </section>

    <section class="sp-secondary-text section-step section-step-property">
        <div class="container narrow">

            <div class="step-progress">
                <div class="step-connector step-2"></div>
                <div class="step-status">25% Complete</div>
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
                You're a step closer to selling your home and having peace of mind.
            </div>
            <div class="message center-align margin-top-20">
                To ensure we can help, speed up the process, and find the most suitable
                solution. We will need a few more details...
            </div>

            <div class="form-field property-value">
                <div class="form-field-label">How quickly would you like to move or have money in the bank?</div>
                <div class="month-range range-slider">
                    <div class="month-slider margin-top-40" id="month-slider"></div>
                </div>
                <input type="hidden" id="month" name="month"/>
            </div>
            <div class="form-field property-type">
                <div class="form-field-label">Please select your property type</div>
                <div class="row">
                    <div class="col s4 m2">
                        <label class="property-radio-container">
                            <input type="radio" id="property-type" name="property-type" value="terraced" class="terraced" checked>
                            <span class="checkmark">
                                <span class="image"></span>
                                <span class="text">Terraced</span>
                            </span>
                        </label>
                    </div>
                    <div class="col s4 m2">
                        <label class="property-radio-container">
                            <input type="radio" id="property-type" name="property-type" value="semi-detached" class="semi-detached">
                            <span class="checkmark">
                                <span class="image"></span>
                                <span class="text">Semi-Detached</span>
                            </span>
                        </label>
                    </div>
                    <div class="col s4 m2">
                        <label class="property-radio-container">
                            <input type="radio" id="property-type" name="property-type" value="detached" class="detached">
                            <span class="checkmark">
                                <span class="image"></span>
                                <span class="text">Detached</span>
                            </span>
                        </label>
                    </div>
                    <div class="col s4 m2">
                        <label class="property-radio-container">
                            <input type="radio" id="property-type" name="property-type" value="bungalow" class="bungalow">
                            <span class="checkmark">
                                <span class="image"></span>
                                <span class="text">Bungalow</span>
                            </span>
                        </label>
                    </div>
                    <div class="col s4 m2">
                        <label class="property-radio-container">
                            <input type="radio" id="property-type" name="property-type" value="apartment" class="apartment">
                            <span class="checkmark padding-top-5">
                                <span class="image"></span>
                                <span class="text">Flat/Apartment</span>
                            </span>
                        </label>
                    </div>
                    <div class="col s4 m2">
                        <label class="property-radio-container">
                            <input type="radio" id="property-type" name="property-type" value="others" class="others">
                            <span class="checkmark">
                                <span class="image"></span>
                                <span class="text">Others</span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-field room-count">
                <div class="form-field-label alone">Please enter number of </div>

                <div class="input-block">
                    <div class="form-field-label">Bedrooms</div>
                    <input type="text" maxlength="1" id="bed" name="bed" value="" onkeyup="if (/\D/g.test(this.value)) {this.value = this.value.replace(/\D/g,'')}else{$('#bath').focus()}">
                </div>

                <div class="input-block">
                    <div class="form-field-label">Bathrooms</div>
                    <input type="text" maxlength="1" id="bath" name="bath" value="" onkeyup="if (/\D/g.test(this.value)) {this.value = this.value.replace(/\D/g,'')}else{$('#reception').focus()}">
                </div>

                <div class="input-block">
                    <div class="form-field-label">Receptions</div>
                    <input type="text" maxlength="1" id="reception" value="" name="reception" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                </div>
            </div>

            <div class="form-field property-condition">
                <div class="form-field-label alone">What is the property condition? </div>

                <div class="input-block">
                    <label class="property-radio-container">
                        <input type="radio" id="property_condition" name="property_condition" value="64">
                        <span class="checkmark">Needs no work</span>
                    </label>
                    <label class="property-radio-container">
                        <input type="radio" id="property_condition" name="property_condition" value="65" checked>
                        <span class="checkmark">Needs a little work</span>
                    </label>
                    <label class="property-radio-container">
                        <input type="radio" id="property_condition" name="property_condition" value="66">
                        <span class="checkmark">Needs a lot of work</span>
                    </label>
                </div>
            </div>

            <div class="center-align margin-top-50">
                <!--<button type="button" class="waves-effect waves-light btn btn-large btn-block-on-small sp-teal sp-white-text btn-continue">CONTINUE</button>-->
                <a href="va-step-3.php" class="waves-effect waves-light btn btn-large btn-block-on-small sp-primary sp-secondary-text big-primary z-depth-2">CONTINUE</a>
                <div class="center-align smallest margin-top-15">
                    <i class="material-icons" style="font-size: inherit;">lock</i>
                    100% secure &amp; confidential. Data protection registration number ZA065473
                </div>
            </div>
            <div class="margin-top-20 margin-bottom-30">
                <a href="va-step-1.php">&lt; Previous</a>
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
