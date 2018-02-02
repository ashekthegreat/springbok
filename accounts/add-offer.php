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
        <nav class="breadcrumb-container">
            <div class="container narrow nav-wrapper">
                <div class="col s12">
                    <a href="javascript:;" class="breadcrumb">Home</a>
                    <a href="javascript:;" class="breadcrumb">Property details</a>
                    <a href="javascript:;" class="breadcrumb">Address Details</a>
                </div>
            </div>
        </nav>
        <section class="sp-secondary-text section-add-offer">
            <div class="container narrow">
                <form>
                    <h3>Making an offer</h3>
                    <p class="margin-bottom-30">
                        Before making an offer, we need to make sure your details are up to date.
                        Please confirm the information below is up to date making an offer.
                    </p>

                    <div class="row margin-bottom-15">
                        <div class="col s12 m7">
                            <label>I am funding the purchase with:</label>
                            <p>
                                <input type="checkbox" class="filled-in" id="fund-sale" />
                                <label for="fund-sale">The sale of my property</label>
                            </p>
                            <p>
                                <input type="checkbox" class="filled-in" id="fund-mortgage" />
                                <label for="fund-mortgage">A mortgage</label>
                            </p>
                            <p>
                                <input type="checkbox" class="filled-in" id="fund-cash" />
                                <label for="fund-cash">Saving / cash</label>
                            </p>
                        </div>
                    </div>

                    <div class="row margin-bottom-0">
                        <div class="col s12 m7">
                            <label>The progression of sale of my property is</label>
                            <select class="browser-default old">
                                <option value="1">Yes, it is not yet on the market</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="row margin-bottom-0">
                        <div class="col s12 m7">
                            <label>The status of my mortgage is</label>
                            <select class="browser-default old">
                                <option value="1">Mortgage not yet arranged</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>
                    </div>


                    <h6 class="margin-top-40">Click below if your offer is subject to any condition such as timescale or specific fixture & fittings etc.</h6>
                    <p>+ Add conditions to your offer.</p>

                    <div class="margin-top-40 margin-bottom-15">
                        <p>
                            <input type="checkbox" class="filled-in" id="condition-correct" />
                            <label for="condition-correct">I accept that the details above are up to date and correct and anything agreed
                                between myself and the seller must be included in the conditions of offer box
                                above in order to be included in the memorandum of sale.</label>
                        </p>
                        <p>
                            <input type="checkbox" class="filled-in" id="condition-agent" />
                            <label for="condition-agent">I am not an estate agent nor am I related to or an associate of an estate agent</label>
                        </p>
                    </div>

                    <div class="row margin-bottom-0">
                        <div class="col s12 m7">
                            <label for="offer-price">Your Offer Price (in GBP)</label>
                            <span class="prefix">&pound;</span>
                            <input id="offer-price" type="text" class="validate">
                        </div>
                    </div>

                    <div class="center-align margin-bottom-25 margin-top-40">
                        <button class="waves-effect waves-light btn btn-large btn-block-on-small sp-primary sp-secondary-text" type="submit">Make an Offer</button>
                    </div>
                </form>

            </div>
        </section>

    </main>

    <?php include("section-footer.php"); ?>
</body>
</html>