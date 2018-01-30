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

        <section class="sp-secondary-text section-id-check-person">
            <div class="container narrow">

                <h4 class="center-align margin-bottom-30">Add person to ID Check</h4>

                <form name="formIdCheckPer" id="formIdCheckPer" action="" method="post">
                    <div class="card-panel spaced">
                        <div class="row">
                            <p class="muted grey-text margin-left-10"><b>Complete Name <font color="#FF0000">*</font></b> (As it appears on Birth Certificate or UK Passport)</p>
                            <div class="col s6">
                                <input id="first_name" name="first_name" placeholder="Kevin" type="text" class="validate" value="">
                            </div>
                            <div class="col s6">
                                <input id="last_name" name="last_name" placeholder="Smith" type="text" class="validate" value="">
                            </div>
                        </div>
                        <div class="row">
                            <p class="muted grey-text margin-left-10"><b>Gender <font color="#FF0000">*</font></b></p>
                            <div class="col s6 margin-bottom-30">
                                <div class="switch">
                                    <label>
                                        Male
                                        <input type="checkbox" name="gender" id="gender" value="M">
                                        <span class="lever"></span>
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p class="muted grey-text margin-left-10"><b>Date of Birth <font color="#FF0000">*</font></b></p>
                            <div class="col s4 m2">
                                <input id="dd" name="dd" placeholder="DD" type="text" maxlength="2" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"  value="">
                            </div>
                            <div class="col s4 m2">
                                <input id="mm" name="mm" placeholder="MM" type="text"  maxlength="2" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" value="">
                            </div>
                            <div class="col s4 m4">
                                <input id="yy" name="yy" placeholder="YYYY" type="text"  maxlength="4" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" value="">
                            </div>
                        </div>
                        <div class="row">
                            <p class="muted grey-text margin-left-10"><b>Premise<font color="#FF0000">*</font></b></p>
                            <div class="col s12 m5">
                                <input id="premise" name="premise" placeholder="Building or house name/no." type="text" value="">
                            </div>
                            <div class="col s12 m5">
                                <input id="subpremise" name="subpremise" placeholder="Flat or unit no. [Optional]" type="text" value="">
                            </div>
                        </div>
                        <div class="row">
                            <p class="muted grey-text margin-left-10"><b>Street address <font color="#FF0000">*</font></b></p>
                            <div class="col s12 m6">
                                <input id="address" name="address" placeholder="Baker Street" type="text" class="validate" value="">
                            </div>
                        </div>
                        <div class="row">
                            <p class="muted grey-text margin-left-10"><b>Town</b></p>
                            <div class="col s12 m6">
                                <input id="town" name="town" type="text" placeholder="Manchester" class="validate" value="">
                            </div>
                        </div>
                        <div class="row">
                            <p class="muted grey-text margin-left-10"><b>Postcode <font color="#FF0000">*</font></b></p>
                            <div class="col s12 m6">
                                <input id="postcode" name="postcode" placeholder="M11 1AX" type="text" class="validate" value="">
                            </div>
                        </div>
                        <div class="row">
                            <p class="muted grey-text margin-left-10"><b>Phone</b></p>
                            <div class="col s12 m6">
                                <input id="phone" name="phone" type="text" class="" value="">
                            </div>
                        </div>
                        <div class="margin-top-25">
                            <p>
                                <input type="radio" name="radOwner" id="radOwner1" value="isOwner" checked="checked" />
                                <label for="radOwner1">This person is owner of <b>7,  Dudley Walk </b>.</label>
                            </p>
                            <p>
                                <input type="radio" name="radOwner" id="radOwner2" value="isNotOwner"  />
                                <label for="radOwner2">This person is not the owner but has the permission from the owner(s) of <span class="strong">7,  Dudley Walk </span> to sell the property on their behalf.</label>
                            </p>
                        </div>
                        <div class="margin-top-25">
                            <p>
                                <input type="checkbox" name="notEstateAgent" id="notEstateAgent" />
                                <label for="notEstateAgent">I am not an estate agent nor am I related to or associate of an estate agent.  <font color="#FF0000">*</font></label>
                            </p>
                            <p>
                                <input type="checkbox" name="chkUnderstand" id="chkUnderstand" />
                                <label for="chkUnderstand">I understand that by submitting this ID check, all owners of <span class="strong">7,  Dudley Walk </span> have been added and all of the above information is correct. <font color="#FF0000">*</font></label>
                            </p>

                        </div>
                    </div>

                    <input type="hidden" name="personId" value="0" />
                    <input type="hidden" name="leads_id" value="110" />
                    <input type="hidden" name="agencyId" value="1" />
                    <input type="hidden" name="customerId" value="459" />
                    <input type="hidden" name="bookingId" value="0" />

                    <div class="center-align margin-top-40">
                        <button type="submit" class="waves-effect waves-light btn btn-block-on-small sp-primary sp-secondary-text">Submit to ID Check</button>
                    </div>
                </form>

            </div>
        </section>

    </main>

    <?php include("section-footer.php"); ?>
</body>
</html>