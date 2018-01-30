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

        <section class="sp-secondary-text section-instruct">
            <div class="container narrow">
                <h3 class="center-align margin-bottom-30">Choose Services</h3>

                <form name="insForm" id="insForm" action="" method="post">
                    <div class="card card-board">
                        <div class="card-content grey lighten-2">
                            <h5>
                                <i class="material-icons vertical-middle">turned_in</i>
                                Energy Performance Certificates (EPC)
                            </h5>
                        </div>
                        <div class="card-content">
                            <p>We specialise in selling homes fast for up to 100% market value. Actively marketing your home to property investors and cash-ready buyers, Springbok Properties will take away any burden ofyour move. We will complete every stage of your move efficiently on your behalf, from the valuation to the exchange of contracts.</p>

                            <div class="center-align margin-top-20">
                                <a href="javascript:;" data-servopted="EPC" class="selectable waves-effect waves-light btn btn-block-on-small sp-primary sp-secondary-text">Include</a>
                            </div>
                        </div>
                    </div>

                    <div class="card card-board">
                        <div class="card-content grey lighten-2">
                            <h5>
                                <i class="material-icons vertical-middle">nature</i>
                                Sale Board
                            </h5>
                        </div>
                        <div class="card-content">
                            <p>Springbok Properties is the leading UK property company to help you sell your home fast. Through our proactive house sale approach, we have exchanged contracts on 1800 properties in under 10 days.</p>

                            <div class="center-align margin-top-20">
                                <a href="javascript:;" data-servopted="SALEBOARD" class="selectable waves-effect waves-light btn btn-block-on-small sp-primary sp-secondary-text">Include</a>
                            </div>
                        </div>
                    </div>

                    <div class="card card-board">
                        <div class="card-content grey lighten-2">
                            <h5>
                                <i class="material-icons vertical-middle">verified_user</i>
                                Panel Solicitors
                            </h5>
                        </div>
                        <div class="card-content">
                            <p>With a dedicated team of learned and experienced conveyancing solicitors, Springbok Properties can ensure that property transactions are completed seamlessly, helping homeowners sell their home fast, safe in the knowledge the transaction is legal in the eyes of the law.</p>

                            <div class="center-align margin-top-20">
                                <a href="javascript:;" data-servopted="PANELSOLICITORS" class="selectable waves-effect waves-light btn btn-block-on-small sp-primary sp-secondary-text">Include</a>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="leads_id" value="110" id="leads_id">
                    <input type="hidden" name="bookingId" value="" id="bookingId">
                    <input type="hidden" name="optedServsBox" value="" id="optedServsBox">
                    <div class="center-align margin-top-40">
                            <input type="checkbox" name="accept" id="accept" value="acceptTerms">
                            <label for="accept">I accept the <a href="#" target="_blank">Terms & Conditions</a> for accounts</label>
                    </div>
                    <div class="center-align margin-top-30">
                        <button type="submit" name="instruct" id="instruct" class="waves-effect waves-light btn btn-block-on-small sp-primary sp-secondary-text">Instruct</button>
                    </div>
                </form>


            </div>
        </section>

    </main>

    <?php include("section-footer.php"); ?>
</body>
</html>