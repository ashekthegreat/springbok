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

        <section class="sp-secondary-text section-id-check">
            <div class="container narrow">

                <h4 class="center-align margin-bottom-30">Anti-Money Laundering Check</h4>
                <form id="formIdCheck" name="formIdCheck" action="idCheckPerson.php" method="post">
                    <div class="card-panel grey lighten-2">
                        <i class="material-icons vertical-middle">info_outline</i> This section is inline with The Money Laundering Regulations 2007, please read this carefully.
                    </div>
                    <div class="card-panel strong">
                        <p class="margin-top-0">We are obliged to verify your identity and address for the purpose of meeting our obligations under the UK anti-money laundering regulations.</p>
                        <p>This is not a credit history check.</p>
                        <p>For this purpose please complete the fields below fully and accurately.</p>
                    </div>

                    <div class="card-panel">
                        <p>
                            <input type="checkbox" name="verifyTerms" id="verifyTerms" />
                            <label for="verifyTerms">I understand that you will undertake a search with Experian for the purpose of verifying my identity and the identity of any other homeowners. To do so Experian may check the details I supply against any particulars on any database (public or otherwise) to which they have access. They may also use my details in the future to assist other companies for a verification purposes. A record of the search will be retained. </label>
                        </p>
                    </div>



                    <input type="hidden" name="leads_id" value="110" />
                    <input type="hidden" name="agencyId" value="1" />
                    <input type="hidden" name="customerId" value="459" />
                    <input type="hidden" name="bookingId" value="0" />

                    <div class="center-align margin-top-40">
                        <button type="submit" class="waves-effect waves-light btn sp-primary sp-secondary-text">Let's start the ID Check</button>
                    </div>
                </form>

            </div>
        </section>

    </main>

    <?php include("section-footer.php"); ?>
</body>
</html>