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

    <section class="main-section search-page">
        <div class="wrapper">
            <div class="section-container">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-9">
                            <h1>Search Properties</h1>

                            <div class="well">
                                <form method="post" action="properties.php" name="frmSearch">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter a location to search">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="category">
                                            <option value="0">All categories</option>
                                            <option value="1">Category 1</option>
                                            <option value="2">Category 2</option>
                                            <option value="3">Category 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select id="prop_type" class="form-control" name="prop_type">
                                            <option value="0">Any</option>
                                            <option value="flat">Flat</option>
                                            <option value="detached">Detached</option>
                                            <option value="semi-detached">Semi-Detached</option>
                                            <option value="Semi-Detached Bungalow">Semi-Detached Bungalow</option>
                                            <option value="terraced">Terraced</option>
                                            <option value="bungalow">Bungalow</option>
                                            <option value="apartment">Apartment</option>
                                            <option value="cottage">Cottage</option>
                                            <option value="triplex">Triplex</option>
                                            <option value="duplex">Duplex</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-lg btn-primary">Search</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-3">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("section-footer.php"); ?>

</body>
</html>
