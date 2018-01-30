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

        <section class="properties-list sp-secondary-text">
            <div class="container narrow">
                <div class="card horizontal hoverable property-card">
                    <div class="card-image">
                        <a href="progress.php" class="card-image-container">
                            <img class="property-image" src="assets/images/property/1.jpg" width="620">
                        </a>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h4 class="property-price">5, Ridgeway Lane, BS14 9PP</h4>
                            <p class="property-description">Your Property Is Live On The Market. You can now manage your viewings</p>
                        </div>
                        <div class="card-action">
                            <div class="row margin-bottom-0">
                                <div class="col s12"><a class="waves-effect waves-light btn btn-block sp-primary sp-secondary-text" href="progress.php">Manage Property</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card horizontal hoverable property-card">
                    <div class="card-image">
                        <a href="progress.php" class="card-image-container">
                            <img class="property-image" src="assets/images/property/3.jpg" width="620">
                        </a>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h4 class="property-price">23, Broadway Street, MS12 5TP</h4>
                            <p class="property-description">Your Property Is Live On The Market. You can now manage your viewings</p>
                        </div>
                        <div class="card-action">
                            <div class="row margin-bottom-0">
                                <div class="col s12"><a class="waves-effect waves-light btn btn-block sp-primary sp-secondary-text" href="progress.php">Manage Property</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="margin-top-40 row">
                    <div class="col s6 right-align">
                        <i class="material-icons large">home</i>
                    </div>
                    <div class="col s6">
                        <h5 class="margin-top-10 margin-bottom-10">Add s new property for sale</h5>
                        <a class="waves-effect waves-light btn sp-primary sp-secondary-text" href="javascript:;">Add new</a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include("section-footer.php"); ?>
</body>
</html>