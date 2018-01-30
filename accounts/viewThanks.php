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

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <?php include("section-header.php"); ?>

    <main>

        <section class="sp-secondary-text section-view-thanks">
            <div class="container narrow">
                <h3 class="center-align margin-bottom-25">A few questions before be finalise viewing...</h3>
                <form name="frmBuyerQual" id="frmBuyerQual" action="" method="post">
                    <div class="card-panel spaced">
                        <h5>Which best describes you?</h5>
                        <div class="row">
                            <div class="col s12 m6">
                                <p>
                                    <input type="radio" id="first_time_buyer" name="buyer_status" value="First Time Buyer" class="buyer_status">
                                    <label for="first_time_buyer">
                                        <span class="big">I'm a first-time buyer</span><br>
                                        <small class="smaller">You've never owned a property before.</small>
                                    </label>
                                </p>
                                <p>
                                    <input type="radio" id="homebuyer" name="buyer_status" value="Homeowner" class="buyer_status">
                                    <label for="homebuyer">
                                        <span class="big">I'm a home owner</span><br>
                                        <small class="smaller">You currently own your own home.</small>
                                    </label>
                                </p>
                                <p>
                                    <input type="radio" id="investor" name="buyer_status" value="Investor Mortgage/Other" class="buyer_status">
                                    <label for="investor">
                                        <span class="big">I'm an investor</span><br>
                                        <small class="smaller">You're looking for mortgage or development opportunity.</small>
                                    </label>
                                </p>
                            </div>
                            <div class="col s12 m6">
                                <p>
                                    <input type="radio" id="cash_buyer" name="buyer_status" value="Cash Buyer" class="buyer_status">
                                    <label for="cash_buyer">
                                        <span class="big">I'm a cash buyer</span><br>
                                        <small class="smaller">You have sufficient funds to buy this property without a mortgage.</small>
                                    </label>
                                </p>
                                <p>
                                    <input type="radio" id="landlord" name="buyer_status" value="Land Lord" class="buyer_status">
                                    <label for="landlord">
                                        <span class="big">I'm a landlord</span><br>
                                        <small class="smaller">You're looking for buy-to-let opportunities.</small>
                                    </label>
                                </p>
                            </div>
                        </div>

                        <div class="center-align margin-top-40">
                            <button class="waves-effect waves-light btn btn-block-on-small sp-primary sp-secondary-text" type="button">Continue</button>
                        </div>
                    </div>

                    <div class="card-panel spaced">
                        <h5>How are you funding this purchase?</h5>
                        <div class="row">
                            <div class="col s12 m6">
                                <p>
                                    <input type="checkbox" id="funding_purchase_sale" name="funding_purchase[]" value="Sale of my property" class="funding_purchase">
                                    <label for="funding_purchase_sale">Sale of my property</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="funding_purchase_mortgage" name="funding_purchase[]" value="Mortgage" class="funding_purchase">
                                    <label for="funding_purchase_mortgage">Mortgage</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="funding_purchase_other" onclick="($(this).is(':checked')==true)?$('#txtOther').show():$('#txtOther').hide()" name="funding_purchase[]" value="Other" class="funding_purchase">
                                    <label for="funding_purchase_other">Other</label>
                                </p>

                            </div>
                            <div class="col s12 m6">
                                <p>
                                    <input type="checkbox" id="funding_purchase_savings" name="funding_purchase[]" value="Savings / Cash" class="funding_purchase">
                                    <label for="funding_purchase_savings">Savings or cash</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="funding_purchase_dontknow" name="funding_purchase[]" value="I don't know yet" class="funding_purchase">
                                    <label for="funding_purchase_dontknow">I don't know yet</label>
                                </p>

                            </div>
                        </div>

                        <div class="center-align margin-top-40">
                            <button class="waves-effect waves-light btn btn-block-on-small sp-primary sp-secondary-text" type="button">Continue</button>
                        </div>
                    </div>

                    <div class="card-panel spaced">
                        <h5>At what stage is the sale of your current property?</h5>
                        <div class="row">
                            <div class="col s12 m6">
                                <p>
                                    <input type="radio" id="notm" name="progression" value="NOTM" class="progression">
                                    <label for="notm">Not on the market</label>
                                </p>
                                <p>
                                    <input type="radio" id="otm" name="progression" value="OTM" class="progression">
                                    <label for="otm">On the market</label>
                                </p>
                            </div>
                            <div class="col s12 m6">
                                <p>
                                    <input type="radio" id="sstc" name="progression" value="SSTC" class="progression">
                                    <label for="sstc">Sold (subject to contract)</label>
                                </p>
                                <p>
                                    <input type="radio" id="exchanged" name="progression" value="Already Exchanged" class="progression">
                                    <label for="exchanged">Already exchanged</label>
                                </p>
                            </div>
                        </div>

                        <div class="center-align margin-top-40">
                            <button class="waves-effect waves-light btn btn-block-on-small sp-primary sp-secondary-text" type="button">Continue</button>
                        </div>
                    </div>

                    <div class="card-panel spaced">
                        <h5>What's the status of your mortgage?</h5>
                        <div class="row">
                            <div class="col s12 m6">
                                <p>
                                    <input type="radio" id="not_arranged" name="mortgage" value="Not yet arranged" class="mortgage">
                                    <label for="not_arranged">Not yet arranged</label>
                                </p>
                            </div>
                            <div class="col s12 m6">
                                <p>
                                    <input type="radio" id="agreed" name="mortgage" value="Agreed in principle" class="mortgage">
                                    <label for="agreed">Agreed in principle</label>
                                </p>
                            </div>
                        </div>

                        <div class="center-align margin-top-40">
                            <button class="waves-effect waves-light btn btn-block-on-small sp-primary sp-secondary-text" type="button">Continue</button>
                        </div>
                    </div>

                </form>

            </div>
        </section>
    </main>

    <?php include("section-footer.php"); ?>
</body>
</html>