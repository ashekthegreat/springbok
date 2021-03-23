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
            <h3 class="sp-secondary-text">You're almost there</h3>
        </div>
    </section>

    <section class="sp-secondary-text section-step section-step-otp">
        <div class="container narrow">

            <div class="step-progress">
                <div class="step-connector"></div>
                <div class="step-status">0% Complete</div>
                <div class="step start">
                    <div class="step-number">1</div>
                    <div class="step-text"><i class="material-icons">phone_iphone</i> Mobile Verification</div>
                </div>
                <div class="step end">
                    <div class="step-number">2</div>
                    <div class="step-text"><i class="material-icons">home</i> Cash <br>Offer</div>
                </div>
            </div>


            <div class="important center-align margin-top-50">
                <span class="red-text">IMPORTANT: </span>
                We Need To Confirm Your Phone Number
            </div>
            <div class="message center-align margin-top-20">
                As part of our verification process and anti-money laundering procedures,
                we only supply cash offers to clients with verified mobile numbers
            </div>
            <div class="message center-align margin-top-50">
                <div>Send this (one time password) OTP to this number and verify.</div>

                <div class="input-field">
                    <input id="otp-phone" name="otp-phone" type="text" class="" />
                    <div class="arrow-message-otp hide-on-small-only">
                        <div class="arrow">
                            <img src="images/dec2020/green-arrow-top-right.png" width="85" height="81" alt="">
                        </div>
                        1. Confirm your mobile number here
                    </div>
                </div>

            </div>

            <div class="center-align margin-top-25 margin-bottom-100">
                <div class="button-message">
                    <div class="arrow-message-otp hide-on-small-only">
                        <div class="arrow">
                            <img src="images/dec2020/green-arrow-top-right.png" width="85" height="81" alt="">
                        </div>
                        2. Press the "Send OTP" button now
                    </div>
                    <button type="button" id="send-otp" class="waves-effect waves-light btn btn-large btn-block-on-small sp-primary sp-secondary-text">SEND OTP</button>
                    <!--<a href="va-step-2.php" id="send-otp" class="waves-effect waves-light btn btn-large btn-block-on-small sp-primary sp-secondary-text">SEND OTP</a>-->
                    <div class="otp-arrow-icon hide-on-small-only">
                        <img src="images/dec2020/otp-arrow.png" width="149" height="122" alt="">
                    </div>
                </div>
            </div>

            <div class="otp-collector">
                <div class="message center-align margin-top-50">
                    <div>We just sent you the One Time Password (OTP) on your mobile number. Please
                        enter it into the box below. This code is valid only for the next 5 minutes.</div>

                    <div class="input-field">
                        <input id="otp" name="otp" type="text" class="" />
                        <div class="arrow-message-otp hide-on-small-only">
                            <div class="arrow">
                                <img src="images/dec2020/green-arrow-top-right.png" width="85" height="81" alt="">
                            </div>
                            3. Enter the 4-digit OTP here and press confirm
                        </div>
                    </div>
                </div>

                <div class="center-align margin-top-25 margin-bottom-100">
                    <div class="button-message">
                        <a href="va-step-2.php" class="waves-effect waves-light btn btn-large btn-block-on-small sp-primary sp-secondary-text">CONFIRM</a>
                        <div class="center-align margin-top-10">
                            <a href="javascript:">Resend OTP?</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="center-align margin-top-100 smallest">
                <strong>&copy; <?php echo date('Y')?> Springbok Properties</strong>
            </div>
        </div>

    </section>


</main>

<?php include("section-footer.php"); ?>
</body>
</html>
