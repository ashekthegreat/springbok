<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/ico/favicon.ico">

    <title>Springbok Properties - Steps</title>

    <!-- Custom styles for this template -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .steps{
            position: relative;
        }
        .lines{
            width: 100%;
        }
        .trail {
            display: flex;
            list-style: none;
            margin: 0 0 30px;
            position: relative;
            padding: 0;
            width: 100%;
        }

        .trail li .trail-wrapper a, .trail li .trail-wrapper p {
            font-size: 1.063rem;
            margin-top: 5px;
            text-transform: uppercase;
        }

        .trail:before {
            width: 100%;
            height: 3px;
            background-color: #e6e6e6;
            position: absolute;
        }

        .trail li {
            flex-grow: 1;
            align-self: center;
        }

        .trail li.second {
            margin-left: -10%;
        }

        .trail li.third {
            margin-right: -10%;
        }

        .trail li.incomplete .trail-wrapper p {
            color: #bdbdbd;
        }

        .trail li.active.completed .trail-wrapper a .step {
            color: #fff;
        }

        .trail li.active .trail-wrapper p {
            color: #ffe400;
        }

        .trail li.active .step {
            border: 3px solid #ffe400;
            background-color: #ffe400;
            color: #fff;
        }

        .trail li.completed .trail-wrapper a, .trail li.completed .trail-wrapper p {
            color: #ffe400;
        }

        .trail li.completed .step {
            border: 3px solid #ffe400;
            color: #ffe400;
        }

        .trail li .step, .trail li .trail-wrapper a {
            display: flex;
            color: #bdbdbd;
            font-family: futura-pt, sans-serif;
            font-style: normal;
            font-weight: 700;
        }

        .trail li .trail-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
            align-items: center;
        }

        .trail li .trail-wrapper a {
            flex-direction: column;
            align-items: center;
        }

        .trail li .trail-wrapper p {
            font-family: futura-pt, sans-serif;
            font-style: normal;
            font-weight: 700;
            margin-bottom: 0;
        }

        .trail li:nth-child(1) {
            display: flex;
        }

        .trail li:nth-child(1) .step:before {
            content: "1";
        }

        .trail li:nth-child(2) .step:before {
            content: "2";
        }

        .trail li:nth-child(3) .step:before {
            content: "3";
        }

        .trail li:nth-child(4) .step:before {
            content: "4";
        }

        .trail li:last-child {
            display: flex;
            justify-content: flex-end;
        }

        .trail li .step {
            justify-content: center;
            align-content: center;
            align-items: center;
            border-radius: 100%;
            border: 3px solid #e0e0e0;
            width: 40px;
            height: 40px;
            background-color: #fff;
            font-size: 1.563rem;
        }
        .step-progress {
            position: absolute;
            /*top: 50%;*/
            margin-top: 22px;
            left: 0;
            right: 0;
            height: 3px;
            background-color: #ffe400;
            margin-left: 2rem;
            margin-right: 2rem;
        }

        .step-progress div {
            height: 3px;
            background-color: #e0e0e0;
        }

        .prop-details li .dot, .step-progress div.active {
            background-color: #ffe400;
        }

        .step-progress div.small-4 {
            padding-left: 0;
            padding-right: 0;
        }
        .columns {
            position: relative;
            float: left;
        }
        .small-4 {
            width: 33.3333333333%;
        }
        .trail a, .trail a:active, .trail a:focus, .trail a:hover{
            text-decoration: none;
        }

        .banner-box{
            background: #ffe400;
            padding: 15px 20px;
            font-size: 24px;
            color: #444;
            margin-bottom: 25px;
        }
        .banner-box .heading{
            font-size: 1.5em;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        .banner-box p{

        }
        .banner-box .basket{
            font-size: 1.2em;
            text-transform: uppercase;
        }
        .banner-box .basket strong{
            font-size: 1.6em;
        }
        .simple-box{
            padding: 15px 20px;
            border: 2px solid #ccc;
            margin-bottom: 25px;
        }
        .margin-right-5{
            margin-right: 5px;
        }
    </style>
</head>

<body>

    <?php include("section-header.php"); ?>
    <?php include("section-nav.php"); ?>

    <section class="main-section">
        <div class="wrapper">
            <div class="section-container">
                <div class="container-fluid">

                    <h1 style="margin-bottom: 15px">4 steps</h1>

                    <div class="steps clearfix">
                        <div class="lines">
                            <div class="step-progress">
                                <div class="small-4 columns active"></div>
                                <div class="small-4 columns "></div>
                                <div class="small-4 columns "></div>
                            </div>
                        </div>

                        <ul class="trail small-12 columns">
                            <li class=" completed">
                                <div class="trail-wrapper">
                                    <a href="#">
                                        <div class="step"></div>
                                        <p>Create</p>
                                    </a>
                                </div>
                            </li>


                            <li class="active incomplete second">
                                <div class="trail-wrapper">
                                    <a href="#">
                                        <div class="step"></div>
                                        <p>Details</p>
                                    </a>
                                </div>
                            </li>

                            <li class="incomplete third">
                                <div class="trail-wrapper">
                                    <div class="step"></div>
                                    <p>Property</p>
                                </div>
                            </li>

                            <li class=" incomplete">
                                <div class="trail-wrapper">
                                    <div class="step"></div>
                                    <p>Review</p>
                                </div>

                            </li>
                        </ul>
                    </div>

                    <div class="banner-box clearfix">
                        <div class="heading">TIME SAVING OPTION - <strong>LISTING PACKAGE</strong></div>
                        <p>
                            Our expert agents can do your <strong>Photos, floor plans</strong> and <strong>descriptions</strong>.
                        </p>
                        <div class="basket pull-right">Add to basket <strong>&pound;149<sup>.99</sup></strong></div>
                    </div>

                    <div class="simple-box">
                        <h3>Some lorem text</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores numquam
                            porro quis quo tempora. Animi atque consectetur corporis deleniti dolorem dolores
                            eveniet facere facilis id magnam molestias officia perspiciatis placeat quae
                            qui reiciendis sapiente suscipit ut vitae, voluptatem? Amet assumenda atque
                            distinctio doloribus error et illum in ipsa minus necessitatibus possimus repellat,
                            sequi sit soluta tempore vero vitae voluptas voluptatem.
                        </p>
                    </div>

                    <form action="" method="post">
                        <h3>Your letting details</h3>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="When is the property available?">
                                </div>
                                <div class="form-group row">
                                    <div class="col-xs-8">
                                        <input type="text" class="form-control" placeholder="How much rent are you asking for?">
                                    </div>
                                    <div class="col-xs-4">
                                        <select class="form-control">
                                            <option value="1">Weekly</option>
                                            <option value="2">Monthly</option>
                                            <option value="3">Yearly</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="0">Will it be furninshed?</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="0">What is the minimum length of tenancy?</option>
                                        <option value="1">1 month</option>
                                        <option value="2">2 month</option>
                                        <option value="3">3 month</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="How much deposit would you like?">
                                </div>
                            </div>
                        </div>

                        <h3>Do you have any tenant preferences?</h3>
                        <p>Please tick the boxes below if you would like to accept:</p>
                        <div class="form-group">
                            <label class="checkbox-inline">
                                <input type="checkbox" value="option1" checked> Students
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="option2" checked> Pets
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="option3" checked> DSS
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="option4" checked> Smokers
                            </label>
                        </div>

                        <br><hr>
                        <div class="form-group clearfix">
                            <input type="submit" class="btn btn-primary pull-right" disabled="disabled" value="Save & continue">
                            <input type="submit" class="btn btn-info pull-right margin-right-5" value="Save for later">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include("section-footer.php"); ?>
    <?php include("login.php"); ?>




    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!--<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>-->
    <script src="assets/js/jquery.placeholder.min.js"></script>

    <script src="assets/js/script.js"></script>

</body>
</html>
