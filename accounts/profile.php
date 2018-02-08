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
                                    <div class="col s12 m3">
                                        <label for="title">Title</label>
                                        <input placeholder="Title" id="title" maxlength="10" name="title" value="" type="text" class="validate[required]">
                                    </div>
                                    <div class="col s12 m5">
                                        <label for="last_name">First Name</label>
                                        <input placeholder="First Name" maxlength="10" id="firstname" name="firstname" type="text" class="validate[required]" value="Simone">
                                    </div>
                                    <div class="col s12 m4">
                                        <label for="last_name">Last Name</label>
                                        <input placeholder="Last Name" maxlength="10" id="lastname" name="lastname" type="text" class="validate[required]" value="Arnison">
                                    </div>
                                </div>
                                <div class="row margin-bottom-0">
                                    <div class="col s12">
                                        <label for="telephone">Phone</label>
                                        <input id="telephone" name="telephone" type="text" class="validate[optional,custom[phone]]" maxlength="20" value="07948350940">
                                    </div>
                                </div>
                                <div class="row margin-bottom-0">
                                    <div class="col s12">
                                        <label for="textarea1">Address</label>
                                        <textarea id="address" name="address" class=""></textarea>
                                    </div>
                                </div>
                                <div class="row margin-bottom-0">
                                    <div class="col s12">
                                        <label for="postcode">Postcode</label>
                                        <input id="postcode" name="postcode" type="text" maxlength="20" value="">
                                    </div>
                                </div>
                                <input type="hidden" name="customerId" value="459" />
                                <input type="hidden" name="email" value="simmelrod@icloud.com" />
                                <input type="hidden" name="agencyId" value="1" />

                                <div class="center-align margin-top-25">
                                    <button type="submit" id="saveWebForm" name="saveWebForm" class="waves-effect waves-light btn btn-large btn-block-on-small sp-primary sp-secondary-text">Update Information</button>
                                </div>
                            </form>

                        </div>
                        <div role="tabpanel" class="tab-pane padding-40" id="password-details">
                            <form id="web_form" action="" method="post" name="web_form">
                                <!--<p class="bg-danger text-center" ></p>-->
                                <div class="row margin-bottom-0">
                                    <div class="col s12">
                                        <label for="password">Old Password</label>
                                        <input name="oldpassword" type="password" class="validate[required,minSize[6]] form-control" id="oldpassword" maxlength="50"  value="" />
                                    </div>
                                </div>
                                <div class="row margin-bottom-0">
                                    <div class="col s12">
                                        <label for="password">Password <span class="form-label-note">(at least 6 characters)</span></label>
                                        <input type="password" maxlength="20" id="password" class="form-control validate[required,minSize[6]]" name="password">
                                    </div>
                                </div>
                                <div class="row margin-bottom-0">
                                    <div class="col s12">
                                        <label for="confpassword">Password Confirmation</label>
                                        <input type="password" maxlength="20" id="confpassword" class="form-control validate[required,equals[password]]" name="confpassword">
                                    </div>
                                </div>
                                <div class="center-align margin-top-25">
                                    <button type="submit" name="savePassword" id="savePassword" class="waves-effect waves-light btn btn-large btn-block-on-small sp-primary sp-secondary-text">Update Password</button>
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