<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/ico/favicon.ico">

    <title>Springbok Properties - Get Up To 100% Value For Your House Quickly</title>

    <!-- Custom styles for this template -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <?php include("section-header.php"); ?>
    <?php include("section-nav.php"); ?>

    <section class="main-section">
        <div class="wrapper">
            <div class="section-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1>Sign Up With Springbok</h1>
                            <p>
                                Create an account with Springbok Properties for instant access to our database of
                                attractively-priced properties all over the country.
                            </p>
                            <p>&nbsp;</p>
                            <div class="register-help clearfix">
                                <span class="sprite sprite-star-big pull-left"></span>
                                <div class="register-help-item">
                                    <h3>Revisit Properties</h3>
                                    <p>Never lose track of properties you’re interested in &ndash; as a member, you can tag the ones you like and build a personal list of promising additions to your portfolio.</p>
                                </div>
                            </div>
                            <div class="register-help clearfix">
                                <span class="sprite sprite-search-big pull-left"></span>
                                <div class="register-help-item">
                                    <h3>Saved Search</h3>
                                    <p>If you’re looking in particular areas or for particular types of property, save your searches so you can run them instantly.</p>
                                </div>
                            </div>
                            <div class="register-help clearfix">
                                <span class="sprite sprite-mail-big pull-left"></span>
                                <div class="register-help-item">
                                    <h3>Personalised Property Alerts</h3>
                                    <p>Members don’t even have to come back to run their searches: we’ll email you new properties that meet your criteria, for free!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">

                            <div role="tabpanel">
                                <!-- Nav tabs -->
                                <!-- Use "active" class on appropriate tab item, based on URL param. -->
                                <?php
                                if(isset($_GET["signin"])){
                                    $registerActive = "";
                                    $signinActive = "active";
                                }
                                else{
                                    $registerActive = "active";
                                    $signinActive = "";
                                }
                                ?>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="<?php echo $registerActive; ?>"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">Create Account</a></li>
                                    <li role="presentation" class="<?php echo $signinActive; ?>"><a href="#signin" aria-controls="signin" role="tab" data-toggle="tab">Sign In</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane <?php echo $registerActive; ?>" id="register">

                                        <form id="web_form" action="" method="post" name="web_form">
                                            <p class="bg-danger text-center" style="display: none">Error Text</p>

                                            <div class="form-group">
                                                <label for="title">Name</label>
                                                <div class="name-group clearfix">
                                                    <div class="name-title">
                                                        <input type="text" maxlength="10" placeholder="Title" id="title" class="form-control validate[required] txtbox txtbox-small" name="title">
                                                    </div>
                                                    <div class="name-first">
                                                        <input type="text" maxlength="30" placeholder="First Name" onfocus="" id="firstname" class="form-control validate[required] txtbox" name="firstname">
                                                    </div>
                                                    <div class="name-last">
                                                        <input type="text" maxlength="30" placeholder="Last Name" id="lastname" class="form-control validate[required] txtbox" name="lastname">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" maxlength="100" id="email" class="form-control validate[required,custom[email]]" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password <span class="form-label-note">(at least 6 characters)</span></label>
                                                <input type="password" maxlength="20" id="password" class="form-control validate[required,minSize[6]]" name="password">
                                            </div>
                                            <div class="form-group">
                                                <label for="confpassword">Password Confirmation</label>
                                                <input type="password" maxlength="20" id="confpassword" class="form-control validate[required,equals[password]]" name="confpassword">
                                            </div>
                                            <input type="submit" name="saveWebForm" id="saveWebForm" class="btn btn-primary" value="Create account">
                                        </form>
                                        <p class="register-disclaimer">
                                            By clicking Create Account you confirm that you agree to our website
                                            <a href="terms-and-conditions.php">terms of use</a> and our <a href="privacy-policy.php">privacy policy</a>
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane <?php echo $signinActive; ?>" id="signin">
                                        <form id="web_form2" action="" method="post" name="web_form2">
                                            <p class="bg-danger text-center" style="display: none">Error Text</p>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" maxlength="100" id="email" class="form-control validate[required,custom[email]]" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password <span class="form-label-note">(at least 6 characters)</span></label>
                                                <input type="password" maxlength="20" id="password" class="form-control validate[required]" name="password">
                                            </div>
                                            <input type="submit" value="Sign in" id="signin" name="signin" class="btn btn-primary">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("section-footer.php"); ?>





    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!--<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>-->
    <script src="assets/js/jquery.placeholder.min.js"></script>

    <script src="assets/js/script.js"></script>

</body>
</html>
