<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <title>Repolist</title>

    <!-- Custom styles for this template -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--<link href="assets/css/bootstrap-theme.css" rel="stylesheet">-->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <?php include("section-header.php"); ?>

    <section class="main-section">
        <div class="wrapper">
            <div class="section-container">

                <div class="container-fluid">
                    <div class="property-page-header">
                        <i class="glyphicon glyphicon-home"></i>
                        St Stephens Court, M27 5WW, <span>£84,950</span>
                    </div>

                    <div class="property-back-to-list">
                        <a href="javascript:;" class="pull-right">
                            <i class="glyphicon glyphicon-star"></i>
                            You have 0 saved properties
                        </a>
                        <a href="properties.php">&lt;&lt; Back to search</a>
                    </div>

                    <div class="row">
                        <div class="col-sm-8 print-full-width">
                            <div class="well well-sm well-filled">
                                <div id="property-carousel" class="carousel slide" data-ride="carousel1" data-interval="false">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active"><img src="assets/img/property/0_75711_IMG_00.jpg"></div>
                                        <div class="item"><img src="assets/img/property/0_75711_IMG_1.jpg"></div>
                                        <div class="item"><img src="assets/img/property/0_75711_IMG_2.jpg"></div>
                                    </div>

                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#property-carousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#property-carousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>

                                <div class="property-details">
                                    <ul class="nav nav-tabs" role="tablist" id="property-details">
                                        <li class="active">
                                            <a id="property-tab-link-description" href="#property-tab-description" data-toggle="tab">Description</a>
                                        </li>
                                        <li>
                                            <a id="property-tab-link-floor-plans" href="#property-tab-floor-plans" data-toggle="tab">Floor Plans</a>
                                        </li>
                                        <li>
                                            <a id="property-tab-link-charts" href="#property-tab-charts" data-toggle="tab">EPC Charts</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="property-tab-description">
                                            <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
                                            <p>Quae iam oratio non a philosopho aliquo, sed a censore opprimenda est. Non est igitur voluptas bonum. Ita ne hoc quidem modo paria peccata sunt. Quid, si etiam iucunda memoria est praeteritorum malorum? Duo Reges: constructio interrete. Non dolere, inquam, istud quam vim habeat postea videro;</p>
                                            <p>Quasi ego id curem, quid ille aiat aut neget. At ille pellit, qui permulcet sensum voluptate. Tum Lucius: Mihi vero ista valde probata sunt, quod item fratri puto. Hoc loco tenere se Triarius non potuit.Etenim semper illud extra est, quod arte comprehenditur. Quo modo autem optimum, si bonum praeterea nullum est? Estne, quaeso, inquam, sitienti in bibendo voluptas? At iam decimum annum in spelunca iacet. Hoc tu nunc in illo probas.</p>
                                            <p>Non autem hoc: igitur ne illud quidem. Iubet igitur nos Pythius Apollo noscere nosmet ipsos. Sin aliud quid voles, postea. Sint modo partes vitae beatae. Restatis igitur vos; Sit ista in Graecorum levitate perversitas, qui maledictis insectantur eos, a quibus de veritate dissentiunt.</p>
                                            <p>At ego quem huic anteponam non audeo dicere; Bona autem corporis huic sunt, quod posterius posui, similiora. Idemne potest esse dies saepius, qui semel fuit? Quid enim de amicitia statueris utilitatis causa expetenda vides.</p>
                                        </div>
                                        <div class="tab-pane" id="property-tab-floor-plans">
                                            <p>Quae iam oratio non a philosopho aliquo, sed a censore opprimenda est. Non est igitur voluptas bonum. Ita ne hoc quidem modo paria peccata sunt. Quid, si etiam iucunda memoria est praeteritorum malorum? Duo Reges: constructio interrete. Non dolere, inquam, istud quam vim habeat postea videro;</p>
                                        </div>
                                        <div class="tab-pane" id="property-tab-charts">
                                            <p>Non autem hoc: igitur ne illud quidem. Iubet igitur nos Pythius Apollo noscere nosmet ipsos. Sin aliud quid voles, postea. Sint modo partes vitae beatae. Restatis igitur vos; Sit ista in Graecorum levitate perversitas, qui maledictis insectantur eos, a quibus de veritate dissentiunt.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-4">
                            <?php include("section-sidebar-property-details.php"); ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("section-footer.php"); ?>

</body>
</html>
