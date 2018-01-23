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

        <section class="sp-secondary-text section-profile-update">
            <div class="container narrow">

                <div class="z-depth-1">
                    <ul class="tabs old margin-bottom-0">
                        <li class="tab"><a href="#profile-details">Profile Details</a></li>
                        <li class="tab"><a href="#password-details">Update Password</a></li>
                    </ul>

                    <div class="tab-content margin-top-0 card-panel z-depth-0">
                        <div role="tabpanel" class="tab-pane padding-40" id="profile-details">
                            <form id="web_form2" action="" method="post" name="web_form2">
                                <!--<p class="bg-danger text-center"></p>-->
                                <div class="row margin-bottom-0">
                                    <div class="input-field col s12 m3">
                                        <input placeholder="Title" id="title" maxlength="10" name="title" value="" type="text" class="validate[required]">
                                        <label for="title">Title</label>
                                    </div>
                                    <div class="input-field col s12 m5">
                                        <input placeholder="First Name" maxlength="10" id="firstname" name="firstname" type="text" class="validate[required]" value="Simone">
                                        <label for="last_name">First Name</label>
                                    </div>
                                    <div class="input-field col s12 m4">
                                        <input placeholder="Last Name" maxlength="10" id="lastname" name="lastname" type="text" class="validate[required]" value="Arnison">
                                        <label for="last_name">Last Name</label>
                                    </div>
                                </div>
                                <div class="row margin-bottom-0">
                                    <div class="input-field col s12">
                                        <input id="telephone" name="telephone" type="text" class="validate[optional,custom[phone]]" maxlength="20" value="07948350940">
                                        <label for="telephone">Phone</label>
                                    </div>
                                </div>
                                <div class="row margin-bottom-0">
                                    <div class="input-field col s12">
                                        <textarea id="address" name="address" class="materialize-textarea"></textarea>
                                        <label for="textarea1">Address</label>
                                    </div>
                                </div>
                                <div class="row margin-bottom-0">
                                    <div class="input-field col s12">
                                        <input id="postcode" name="postcode" type="text" maxlength="20" value="">
                                        <label for="postcode">Postcode</label>
                                    </div>
                                </div>
                                <input type="hidden" name="customerId" value="459" />
                                <input type="hidden" name="email" value="simmelrod@icloud.com" />
                                <input type="hidden" name="agencyId" value="1" />

                                <div class="center-align margin-top-40">
                                    <button type="submit" id="saveWebForm" name="saveWebForm" class="waves-effect waves-light btn sp-primary sp-secondary-text">Update Information</button>
                                </div>
                            </form>

                        </div>
                        <div role="tabpanel" class="tab-pane padding-40" id="password-details">
                            <form id="web_form" action="" method="post" name="web_form">
                                <!--<p class="bg-danger text-center" ></p>-->
                                <div class="row margin-bottom-0">
                                    <div class="input-field col s12">
                                        <input name="oldpassword" type="password" class="validate[required,minSize[6]] form-control" id="oldpassword" maxlength="50"  value="" />
                                        <label for="password">Old Password</label>
                                    </div>
                                </div>
                                <div class="row margin-bottom-0">
                                    <div class="input-field col s12">
                                        <input type="password" maxlength="20" id="password" class="form-control validate[required,minSize[6]]" name="password">
                                        <label for="password">Password <span class="form-label-note">(at least 6 characters)</span></label>
                                    </div>
                                </div>
                                <div class="row margin-bottom-0">
                                    <div class="input-field col s12">
                                        <input type="password" maxlength="20" id="confpassword" class="form-control validate[required,equals[password]]" name="confpassword">
                                        <label for="confpassword">Password Confirmation</label>
                                    </div>
                                </div>
                                <div class="center-align margin-top-40">
                                    <button type="submit" name="savePassword" id="savePassword" class="waves-effect waves-light btn sp-primary sp-secondary-text">Update Password</button>
                                </div>

                                <input type="hidden" name="customerId" value="459" />
                                <input type="hidden" name="email" value="simmelrod@icloud.com" />
                                <input type="hidden" name="agencyId" value="1" />
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <?php include("section-footer.php"); ?>
</body>
</html>