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
                        Properties in Manchester
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Cash buyer results</h2>

                            <div class="save-links">
                                <a href="javascript:;"><i class="glyphicon glyphicon-star"></i> Save this search</a>
                                | <a href="javascript:;">You have 0 saved search</a>
                            </div>

                            <div class="pagination-count">
                                <div class="sort-by pull-right">
                                    SORT BY
                                    <select name="sort-by">
                                        <option>Select</option>
                                        <option>Price</option>
                                        <option>Distance</option>
                                    </select>
                                </div>
                                Showing <strong>1</strong> to <strong>10</strong> of <strong>47</strong>
                                matching properties
                            </div>

                            <div class="properties">
                                <div class="property">
                                    <div class="property-container clearfix">
                                        <div class="property-image">
                                            <a class="property-image-holder" href="property-details.php">
                                                <img src="assets/img/property/medium/0_75711_IMG_00.jpg">
                                            </a>
                                            <div class="property-image-actions">
                                                <a href="property-details.php" class="property-image-count"><i class="glyphicon glyphicon-camera"></i> 3</a>
                                            </div>

                                        </div>
                                        <div class="property-info">
                                            <div class="property-price"><a href="property-details.php">Offers in Excess of £200,000</a></div>
                                            <div class="property-short">6 bed detached house for sale</div>
                                            <a class="property-address" href="property-details.php">Broadway, Bramhall, Stockport, Cheskire, SK7</a>
                                            <div class="property-long">
                                                One of the finest, stunning individual New Build homes in Bramhall. Set
                                                on one of Bramhall’s finest, prestige roads. The property offers
                                                magnificent
                                            </div>
                                            <a class="property-more" href="property-details.php">More details &gt;</a>
                                            <div class="property-actions hidden-print">
                                                <a href="property-details.php" class="btn btn-xs btn-property">View Details</a>
                                                <a href="javascript:;" class="btn btn-xs btn-property">Save Property</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="property">
                                    <div class="property-container clearfix">
                                        <div class="property-image">
                                            <a class="property-image-holder" href="property-details.php">
                                                <img src="assets/img/property/medium/0_75711_IMG_00.jpg">
                                            </a>
                                            <div class="property-image-actions">
                                                <a href="property-details.php" class="property-image-count"><i class="glyphicon glyphicon-camera"></i> 3</a>
                                            </div>

                                        </div>
                                        <div class="property-info">
                                            <div class="property-price"><a href="property-details.php">Offers in Excess of £200,000</a></div>
                                            <div class="property-short">6 bed detached house for sale</div>
                                            <a class="property-address" href="property-details.php">Broadway, Bramhall, Stockport, Cheskire, SK7</a>
                                            <div class="property-long">
                                                One of the finest, stunning individual New Build homes in Bramhall. Set
                                                on one of Bramhall’s finest, prestige roads. The property offers
                                                magnificent
                                            </div>
                                            <a class="property-more" href="property-details.php">More details &gt;</a>
                                            <div class="property-actions hidden-print">
                                                <a href="property-details.php" class="btn btn-xs btn-property">View Details</a>
                                                <a href="javascript:;" class="btn btn-xs btn-property">Save Property</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav class="text-right">
                                <ul class="pagination">
                                    <li class="disabled">
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-sm-4">
                            <?php include("section-sidebar-property.php"); ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("section-footer.php"); ?>

</body>
</html>
