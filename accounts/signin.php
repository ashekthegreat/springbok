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

        <section class="sp-secondary-text section-signin">
            <div class="container narrow">
                <h3 class="center-align">Selling Or Buying?</h3>
                <h5 class="center-align">Get Your Free Property Management Account Here</h5>
                <div class="z-depth-1 margin-top-25">
                    <ul class="tabs old margin-bottom-0">
                        <li class="tab"><a href="#register" >Create Account</a></li>
                        <li class="tab"><a href="#signin"  class="active">Sign In</a></li>
                    </ul>

                    <div class="tab-content margin-top-0 card-panel z-depth-0">
                        <div role="tabpanel" class="tab-pane padding-40" id="register">
                            <form id="web_form" action="" method="post" name="web_form" data-valid="false" class="WF_CREG">
                                <div class="row margin-bottom-0">
                                    <div class="input-field col s12 m3">
                                        <input type="text" maxlength="10" id="title" class="validate[required]" name="title">
                                        <label for="title">Title<font color="red">*</font></label>
                                    </div>
                                    <div class="input-field col s12 m5">
                                        <input type="text" maxlength="30" id="firstname" class="validate[required]" name="firstname" value="">
                                        <label for="firstname">First Name<font color="red">*</font></label>
                                    </div>
                                    <div class="input-field col s12 m4">
                                        <input type="text" maxlength="30" id="lastname" class="validate[required]" name="lastname">
                                        <label for="lastname">Last Name</label>
                                    </div>
                                </div>
                                <div class="row margin-bottom-0">
                                    <div class="input-field col s12">
                                        <input type="text" maxlength="100" id="regEmail" class="" name="email" value="">
                                        <label for="email">Email<font color="red">*</font></label>
                                    </div>
                                </div>
                                <div class="row margin-bottom-0">
                                    <div class="input-field col s12">
                                        <input type="text" maxlength="100" id="regPhone" class="" name="regPhone" value="">
                                        <label for="phone">Phone<font color="red">*</font></label>
                                    </div>
                                </div>
                                <div class="row margin-bottom-0">
                                    <div class="input-field col s12">
                                        <input type="password" maxlength="20" id="password" class="validate[required,minSize[6]]" name="password">
                                        <label for="password">Password (at least 6 characters)<font color="red">*</font></label>
                                    </div>
                                </div>
                                <p class="smaller center-align margin-top-30"> By clicking Create Account you confirm that you agree to our website <a target="_blank" href="https://springbokproperties.co.uk/terms-and-conditions">terms of use</a> and our <a target="_blank" href="https://springbokproperties.co.uk/privacy-policy">privacy policy</a> </p>
                                <input type="hidden" name="agentInfo" id="agentInfo" value="accounts.springbokproperties.co.uk" />
                                <input type="hidden" name="agencyId" id="agencyId" value="0" />

                                <div class="center-align margin-top-40">
                                    <button type="submit" name="saveWebForm" id="saveWebForm" class="waves-effect waves-light btn sp-primary sp-secondary-text">Create Account</button>
                                </div>
                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane padding-40" id="signin">
                            <form id="web_form2" action="" method="post" name="web_form2" class="WF_LOGIN">
                                <div class="row margin-bottom-0">
                                    <div class="input-field col s12">
                                        <input type="text" maxlength="100" id="email" class="validate[required,custom[email]] tooltipped" name="email" value="">
                                        <label for="signin-email" class="">Email</label>
                                    </div>
                                </div>
                                <div class="row margin-bottom-0">
                                    <div class="input-field col s12">
                                        <input type="password" maxlength="20" id="password" class="form-control validate[required]" name="password">
                                        <label for="signin-password">Password (at least 6 characters)</label>
                                    </div>
                                </div>
                                <div class="row margin-bottom-0">
                                    <div class="input-field col s12">
                                        <input type="checkbox" class="filled-in" id="remember" name="remember" checked="checked" />
                                        <label for="remember">Keep me online</label>
                                    </div>
                                </div>
                                <div class="center-align margin-top-40">
                                    <button type="submit" name="signin" id="signin" class="waves-effect waves-light btn sp-primary sp-secondary-text">Sign In</button>
                                </div>

                                <div class="center-align margin-top-30">
                                    <a class="blue-text forgotpass" href="#forget_pass">Forgot Password?</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
            <div id="forget_pass" class="modal">
                <div class="modal-content ">
                    <h4>Forget Password</h4>
                    <form id="forget_pass" action="" method="post" name="forget_pass">
                        <p class="red-text center-align" style="display: none"></p>
                        <div class="row margin-bottom-0">
                            <div class="input-field col s12">
                                <input type="text"  id="forget-email" name="email">
                                <label for="forget-email" class="">Email</label>
                            </div>
                        </div>
                        <button type="submit"  class="waves-effect margin-top-30 margin-bottom-50 right  waves-light btn  sp-primary sp-secondary-text">Submit</button >
                    </form>
                </div>
            </div>
        </section>
    </main>

    <?php include("section-footer.php"); ?>
</body>
</html>