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
        <section class="sp-secondary-text section-restrictions">
            <div class="container narrow">
                <h3 class="margin-bottom-25">Restrictions & Other Details</h3>
                <form name="frmRestriction" id="frmRestriction" action="" method="post">
                    <div class="row margin-bottom-15">
                        <div class="col s12">
                            <input type="checkbox" id="listed_building" name="listed_building" class="factfind filled-in" checked>
                            <label for="listed_building">The property is a listed building.</label>
                            <div class="switch extra-data">
                                <label>
                                    No
                                    <input type="checkbox" name="ans_listed_building" id="ans_listed_building">
                                    <span class="lever"></span>
                                    Yes
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-bottom-15">
                        <div class="col s12">
                            <input type="checkbox" id="conservation_area" name="conservation_area" class="factfind filled-in" checked>
                            <label for="conservation_area">The property is in a conservation area.</label>
                            <div class="switch extra-data">
                                <label>
                                    No
                                    <input type="checkbox" name="ans_conservation_area" id="ans_conservation_area">
                                    <span class="lever"></span>
                                    Yes
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-bottom-15">
                        <div class="col s12">
                            <input type="checkbox" id="private_road" name="private_road" class="factfind filled-in">
                            <label for="private_road">The property is in a private road.</label>
                            <div class="switch extra-data">
                                <label>
                                    No
                                    <input type="checkbox" name="ans_private_road" id="ans_private_road">
                                    <span class="lever"></span>
                                    Yes
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-bottom-15">
                        <div class="col s12">
                            <input type="checkbox" id="unadopted_road" name="unadopted_road" class="factfind filled-in">
                            <label for="unadopted_road">The property is in a unadopted road.</label>
                            <div class="switch extra-data">
                                <label>
                                    No
                                    <input type="checkbox" name="ans_unadopted_road" id="ans_unadopted_road">
                                    <span class="lever"></span>
                                    Yes
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-bottom-15">
                        <div class="col s12">
                            <input type="checkbox" id="restriction_charges" name="restriction_charges" class="filled-in">
                            <label for="restriction_charges">Is the property affected by any other restrictions or charges?</label>
                            <div class="extra-data">
                                <label class="active">Please provide details</label>
                                <textarea name="ans_restriction_charges" cols="3" class=""></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-bottom-15">
                        <div class="col s12">
                            <input type="checkbox" id="chk_communal_areas" name="chk_communal_areas" class="factfind filled-in">
                            <label for="chk_communal_areas">The property has shared or communal areas or facilities.</label>
                            <div class="extra-data">
                                <p>
                                    <input name="communal_areas" type="radio" id="shared" value="shared">
                                    <label for="shared">Shared</label>
                                </p>
                                <p>
                                    <input name="communal_areas" type="radio" id="communal" value="communal">
                                    <label for="communal">Communal</label>
                                </p>
                                <p>
                                    <input name="communal_areas" type="radio" id="facilities" value="facilities">
                                    <label for="facilities">Facilities</label>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-bottom-15">
                        <div class="col s12">
                            <input type="checkbox" id="parking_in_plot" name="parking_in_plot" class="filled-in">
                            <label for="parking_in_plot">Your parking / garage is within your plot.</label>
                            <div class="switch extra-data">
                                <label>
                                    No
                                    <input type="checkbox" name="ans_parking_in_plot" id="ans_parking_in_plot" checked="checked">
                                    <span class="lever"></span>
                                    Yes
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-bottom-15">
                        <div class="col s12">
                            <input type="checkbox" id="visible_boundaries" name="visible_boundaries" class="filled-in">
                            <label for="visible_boundaries">The land is retained by visible boundaries (i.e fence/hedges) in your sole ownership.</label>
                            <div class="switch extra-data">
                                <label>
                                    No
                                    <input type="checkbox" name="ans_visible_boundaries" id="ans_visible_boundaries" checked="checked">
                                    <span class="lever"></span>
                                    Yes
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-bottom-15">
                        <div class="col s12">
                            <input type="checkbox" id="chk_planning_applications" name="chk_planning_applications" class="factfind filled-in">
                            <label for="chk_planning_applications">There are planning applications within the vicinity that you are aware of that might affect your property.</label>
                            <div class="extra-data">
                                <label class="active">Please provide details</label>
                                <textarea name="ans_planning_applications" rows="3" class=""> </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-bottom-15">
                        <div class="col s12">
                            <input type="checkbox" id="chk_planning_permission" name="chk_planning_permission" class="filled-in">
                            <label for="chk_planning_permission">Currently there is a planning permission relating to your property.</label>
                            <div class="extra-data">
                                <label class="active">Please provide details</label>
                                <textarea name="ans_planning_permission" rows="3" class="">  </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-bottom-15">
                        <div class="col s12">
                            <input type="checkbox" id="chkDisputes" name="chkDisputes" class="factfind filled-in">
                            <label for="chkDisputes">Currently there are proposals or disputes with individuals or public bodies which directly affect the property.</label>
                            <div class="extra-data">
                                <label class="active">Please provide details</label>
                                <textarea name="ans_disputes" rows="3" class=""> </textarea>
                            </div>
                        </div>
                    </div>


                    <input type="hidden" name="leads_id" value="110">
                    <input type="hidden" name="agencyId" value="1">
                    <input type="hidden" name="customerId" value="459">

                    <div class="row margin-bottom-0">
                        <div class="col s12 m7">
                            <div class="right-align margin-top-25">
                                <button class="waves-effect waves-light btn btn-large btn-block-on-small sp-primary sp-secondary-text" type="submit">Continue</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </section>

    </main>

    <?php include("section-footer.php"); ?>
</body>
</html>