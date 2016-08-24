<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <title>Springbok Properties - Get Up To 100% Value For Your House Quickly</title>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <?php include("section-header.php"); ?>

    <main>

        <section class="white sp-secondary-text">
            <div class="container">
                <div class="row">
                    <div class="col s12 l6 margin-bottom-40">
                        <div class="row">
                            <div class="col s12 l11">
                                <h2 class="margin-top-0">Sign Up With Springbok</h2>
                                <p class="big">
                                    Create an account with Springbok Properties for instant access to our database of
                                    attractively-priced properties all over the country.
                                </p>

                                <div class="margin-top-40 clearfix">
                                    <span class="sprite sprite-star-big left"></span>
                                    <div class="margin-left-80">
                                        <h5 class="margin-bottom-5 margin-top-0">Revisit Properties</h5>
                                        <p class="margin-0">Never lose track of properties you’re interested in – as a member, you can tag the ones you like and build a personal list of promising additions to your portfolio.</p>
                                    </div>
                                </div>
                                <div class="margin-top-30 clearfix">
                                    <span class="sprite sprite-search-big left"></span>
                                    <div class="margin-left-80">
                                        <h5 class="margin-bottom-5 margin-top-0">Saved Search</h5>
                                        <p class="margin-0">If you’re looking in particular areas or for particular types of property, save your searches so you can run them instantly.</p>
                                    </div>
                                </div>
                                <div class="margin-top-30 clearfix">
                                    <span class="sprite sprite-mail-big left"></span>
                                    <div class="margin-left-80">
                                        <h5 class="margin-bottom-5 margin-top-0">Personalised Property Alerts</h5>
                                        <p class="margin-0">Members don’t even have to come back to run their searches: we’ll email you new properties that meet your criteria, for free!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l6">
                        <div class="z-depth-1">
                            <ul class="tabs old margin-bottom-0">
                                <li class="tab col s3"><a href="#register">Create Account</a></li>
                                <li class="tab col s3"><a href="#signin">Sign In</a></li>
                            </ul>

                            <div class="tab-content margin-top-0 card-panel z-depth-0">
                                <div role="tabpanel" class="tab-pane" id="register">
                                    <form id="web_form" action="" method="post" name="web_form">
                                        <p class="red-text center-align" style="display: none"></p>
                                        <div class="row margin-bottom-0">
                                            <div class="input-field col s3">
                                                <input type="text" maxlength="10" id="title" class="validate[required]" name="title">
                                                <label for="title">Title</label>
                                            </div>
                                            <div class="input-field col s5">
                                                <input type="text" maxlength="30" id="firstname" class="validate[required]" name="firstname">
                                                <label for="firstname">First Name</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <input type="text" maxlength="30" id="lastname" class="validate[required]" name="lastname">
                                                <label for="lastname">Last Name</label>
                                            </div>
                                        </div>

                                        <div class="row margin-bottom-0">
                                            <div class="input-field col s12">
                                                <input type="text" maxlength="100" id="email" class="validate[required,custom[email]]" name="email">
                                                <label for="email">Email</label>
                                            </div>
                                        </div>
                                        <div class="row margin-bottom-0">
                                            <div class="input-field col s12">
                                                <input type="password" maxlength="20" id="password" class="validate[required,minSize[6]]" name="password">
                                                <label for="password">Password (at least 6 characters)</label>
                                            </div>
                                        </div>
                                        <div class="row margin-bottom-0">
                                            <div class="input-field col s12">
                                                <input type="password" maxlength="20" id="confpassword" class="validate[required,equals[password]]" name="confpassword">
                                                <label for="confpassword">Password Confirmation</label>
                                            </div>
                                        </div>

                                        <input type="submit" name="saveWebForm" id="saveWebForm" class="btn sp-primary sp-secondary-text margin-top-20" value="Create account">
                                    </form>
                                    <p class="smaller margin-top-30">
                                        By clicking Create Account you confirm that you agree to our website
                                        <a target="_blank" href="http://springbokproperties.co.uk/terms-and-conditions">terms of use</a> and our <a target="_blank" href="http://springbokproperties.co.uk/privacy-policy">privacy policy</a>
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="signin">
                                    <form id="web_form2" action="" method="post" name="web_form2">
                                        <p class="red-text center-align"style="display: none"></p>
                                        <div class="row margin-bottom-0">
                                            <div class="input-field col s12">
                                                <input type="text" maxlength="100" id="signin-email" class="validate[required,custom[email]]" name="email">
                                                <label for="signin-email">Email</label>
                                            </div>
                                        </div>
                                        <div class="row margin-bottom-0">
                                            <div class="input-field col s12">
                                                <input type="password" maxlength="20" id="signin-password" class="form-control validate[required]" name="password">
                                                <label for="signin-password">Password (at least 6 characters)</label>
                                            </div>
                                        </div>
                                        <input type="submit" value="Sign in" id="signin" name="signin" class="btn sp-primary sp-secondary-text margin-top-20">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-chat no-padding sp-secondary lighten-5 sp-secondary-text">
            <div class="container">
                <div class="row">
                    <div class="col s12 m8 l4">
                        <h2>Want to Chat?</h2>
                        <p class="big">Talk to our friendly experts who can help you make a better decision.</p>
                    </div>
                    <div class="col s12 m8 l5">
                        <h2>We can call you back</h2>
                        <form class="">
                            <div class="classic-form no-padding">
                                <div class="row margin-bottom-0">
                                    <div class="col s6">
                                        <input placeholder="Your Name" id="chat-name" name="chat-name" type="text">
                                    </div>
                                    <div class="col s6">
                                        <input placeholder="Your Number" id="chat-phone" name="chat-phone" type="text">
                                    </div>
                                </div>
                                <div class="right-align">
                                    <button type="submit" class="waves-effect waves-light btn-large sp-secondary sp-primary-text">Call Me Back</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include("section-footer.php"); ?>
</body>
</html>