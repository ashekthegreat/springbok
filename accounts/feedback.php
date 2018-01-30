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

        <section class="sp-secondary-text section-feedback">
            <div class="container narrow">
                <h3 class="center-align margin-bottom-25">Viewing Feedback For 12, Furlong Avenue</h3>
                <div class="card-panel spaced">
                    <form id="feedForm" action="" method="post" name="feedForm" class="WF_FEED">
                        <h5>How did the viewing go?</h5>
                        <div>
                            <p>
                                <input name="how_did_the_viewing_go" type="radio" id="how_did_the_viewing_go1" value="Excellent / Very Interested">
                                <label for="how_did_the_viewing_go1">Excellent: very interested</label>
                            </p>
                            <p>
                                <input name="how_did_the_viewing_go" type="radio" id="how_did_the_viewing_go2" value="Still Considering It">
                                <label for="how_did_the_viewing_go2">Still considering it</label>
                            </p>
                            <p>
                                <input name="how_did_the_viewing_go" type="radio" id="how_did_the_viewing_go3" value="Not what we're looking for">
                                <label for="how_did_the_viewing_go3">Not what I'm/we're looking for</label>
                            </p>
                            <p>
                                <input name="how_did_the_viewing_go" type="radio" id="how_did_the_viewing_go4" value="Not Sure">
                                <label for="how_did_the_viewing_go4">Not sure</label>
                            </p>
                        </div>

                        <h5 class="margin-top-40">What did you think of the property?</h5>
                        <textarea class="materialize-textarea no-padding" id="what_do_you_think_of_property" name="what_do_you_think_of_property"></textarea>

                        <h5 class="margin-top-40">What aspects did you like?</h5>
                        <textarea class="materialize-textarea no-padding" id="what_aspects_did_you_like" name="what_aspects_did_you_like"></textarea>


                        <h5 class="margin-top-40">What value would you put on the property?</h5>
                        <input type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="what_value_would_you_put_on_the_property" name="what_value_would_you_put_on_the_property">


                        <h5 class="margin-top-40">Would you like to make an offer?</h5>
                        <div>
                            <p>
                                <input name="would_you_like_make_an_offer" type="radio" id="would_you_like_make_an_offer1" value="Yes, Offer Made">
                                <label for="would_you_like_make_an_offer1">Yes, offer made</label>
                            </p>
                            <p>
                                <input name="would_you_like_make_an_offer" type="radio" id="would_you_like_make_an_offer2" value="Still Considering It">
                                <label for="would_you_like_make_an_offer2">Will come back to you with an offer</label>
                            </p>
                            <p>
                                <input name="would_you_like_make_an_offer" type="radio" id="would_you_like_make_an_offer3" value="Still Considering It">
                                <label for="would_you_like_make_an_offer3">Still thinking about it</label>
                            </p>
                            <p>
                                <input name="would_you_like_make_an_offer" type="radio" id="would_you_like_make_an_offer4" value="Not what we're looking for">
                                <label for="would_you_like_make_an_offer4">Have other properties to view first</label>
                            </p>
                            <p>
                                <input name="would_you_like_make_an_offer" type="radio" id="would_you_like_make_an_offer5" value="Not Sure">
                                <label for="would_you_like_make_an_offer5">Not interested in making an offer</label>
                            </p>
                        </div>

                        <h5 class="margin-top-40">Additional notes</h5>
                        <textarea class="materialize-textarea no-padding" id="feedback" name="feedback"></textarea>


                        <input type="hidden" name="leads_id" id="leads_id" value="100">
                        <input type="hidden" name="agencyId" id="agencyId" value="1">
                        <input type="hidden" name="bookingId" id="bookingId" value="415">
                        <input type="hidden" name="agent_ref" id="agent_ref" value="274134">

                        <div class="center-align margin-bottom-25 margin-top-40">
                            <button class="waves-effect waves-light btn btn-block-on-small sp-primary sp-secondary-text" type="submit">Send Feedback</button>
                        </div>
                    </form>
                </div>


            </div>
        </section>

    </main>

    <?php include("section-footer.php"); ?>
</body>
</html>