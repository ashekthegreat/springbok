<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/ico/favicon.ico">

    <title>Springbok Properties - Services</title>

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
        .dashboard{
            padding-top: 60px;
            min-height: 100vh;
        }
        .dashboard .wrapper{
            padding: 0;
        }
        .dashboard-container{
            background: url("assets/img/dashboard_bg.jpg") center top no-repeat #fff;
            background-size: cover;
            min-height: 600px;
            padding-bottom: 40px;
        }
        .dashboard-sub-nav{
            display: inline-block;
            vertical-align: top;
            float: none;
        }
        .dashboard-sub-nav li{
            display: inline-block;
        }
        .dashboard-container .tab-content > .tab-pane{
            border: 0;
            padding: 0 6%;
        }
        .service-item{
            background: rgba(255,255,255,.90);
            border: 1px solid #CCC;
            margin-bottom: 15px;
            padding: 20px;
            position: relative;
        }
        .service-item .service-btn{
            position: absolute;
            top: 20px;
            right: 20px;
            width: 150px;
        }
        .service-item .service-icon{
            float: left;
            width: 64px;
            margin-top: -10px;
            margin-bottom: -10px;
        }
        .service-item .service-text{
            padding: 0 170px 0 94px;
        }

        .navbar-dashboard {
            background-color: #555;
            border-color: #080808;
        }

        .navbar-dashboard .navbar-nav > li > a{
            padding: 20px 15px;
        }
        .navbar-dashboard .navbar-nav > li > a.cart{
            padding: 5px 15px;
            line-height: 40px;
            font-size: 24px;
            position: relative;
        }
        .navbar-dashboard .navbar-nav > li > a.cart i{
            vertical-align: middle;
        }
        .navbar-dashboard .navbar-nav > li > a.cart .badge{
            position: absolute;
            top: 8px;
            left: 30px;
        }
        .navbar-dashboard .navbar-brand{
            padding: 8px 15px;
            height: 60px;
        }
        .navbar-dashboard .navbar-toggle{
            margin-top: 12px;
            color: #fff;
            background: #000;
        }


        .navbar-yellow{
            background-color: #fff700;
            border-color: #dcd500;
        }
        .navbar-yellow .navbar-nav > li > a {
            color: #333;
        }
        .navbar-yellow .navbar-nav > li > a:hover,
        .navbar-yellow .navbar-nav > li > a:focus {
            color: #000;
        }

        @media (max-width: 599px) {
            .service-item .service-btn{
                position: static;
                margin-top: 20px;
                width: 100%;
            }
            .service-item .service-icon{
                width: 48px;
            }
            .service-item .service-text{
                padding: 0 0 0 64px;
            }
            .service-item .service-text h4{
                margin-top: 0;
            }
            .dashboard-container .tab-content > .tab-pane{
                padding: 0;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse navbar-dashboard navbar-fixed-top">
        <div class="wrapper">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dashboard-navigation">
                        Menu
                    </button>
                    <a class="navbar-brand" href="#"><img alt="Springbok properties" src="assets/img/logo-small.png"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="dashboard-navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i><span class="badge">4</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dashboard <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">My Properties</a></li>
                                <li><a href="#">Messages</a></li>
                                <li><a href="#">Profile</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </div>
    </nav>


    <section class="main-section dashboard">
        <div class="wrapper">
            <div class="dashboard-container">

                <nav class="navbar navbar-static-top navbar-inverse text-center">
                    <ul class="nav navbar-nav dashboard-sub-nav">
                        <li class="active"><a href="#listing" data-toggle="tab">Listing Services</a></li>
                        <li><a href="#inventory" data-toggle="tab">Inventory &amp; Deposits</a></li>
                    </ul>
                </nav>

                <div class="container-fluid">
                    <div class="tab-content">
                        <div class="tab-pane services active" id="listing">
                            <div class="service-item clearfix">
                                <img class="service-icon" src="assets/img/service-icons/property.png">
                                <div class="service-text"><h4>Property Management - Call us now</h4></div>
                                <button type="button" class="btn btn-primary service-btn">0800 048 4816</button>
                            </div>
                            <div class="service-item clearfix">
                                <img class="service-icon" src="assets/img/service-icons/certificate.png">
                                <div class="service-text"><h4>Energy performance certificate</h4></div>
                                <button type="button" class="btn btn-primary service-btn">&pound;120</button>
                            </div>
                            <div class="service-item clearfix">
                                <img class="service-icon" src="assets/img/service-icons/tenancy.png">
                                <div class="service-text"><h4>Tenancy agreement</h4></div>
                                <button type="button" class="btn btn-primary service-btn">&pound;60</button>
                            </div>
                            <div class="service-item clearfix">
                                <img class="service-icon" src="assets/img/service-icons/photography.png">
                                <div class="service-text"><h4>Professional photography &amp; Floor plans</h4></div>
                                <button type="button" class="btn btn-primary service-btn">&pound;140</button>
                            </div>
                            <div class="service-item clearfix">
                                <img class="service-icon" src="assets/img/service-icons/accompanied.png">
                                <div class="service-text"><h4>Accompanied viewings</h4></div>
                                <button type="button" class="btn btn-primary service-btn">&pound;40 per viewing</button>
                            </div>
                            <div class="service-item clearfix">
                                <img class="service-icon" src="assets/img/service-icons/for_rent.png">
                                <div class="service-text"><h4>To Let Board</h4></div>
                                <button type="button" class="btn btn-primary service-btn">&pound;50</button>
                            </div>
                        </div>

                        <div class="tab-pane inventories" id="inventory">
                            <div class="service-item clearfix">
                                <img class="service-icon" src="assets/img/service-icons/safety.png">
                                <div class="service-text"><h4>Gas safety certificate and recording</h4></div>
                                <button type="button" class="btn btn-primary service-btn">&pound;78</button>
                            </div>
                            <div class="service-item clearfix">
                                <img class="service-icon" src="assets/img/service-icons/deposit.png">
                                <div class="service-text"><h4>Deposit registration</h4></div>
                                <button type="button" class="btn btn-primary service-btn">&pound;30</button>
                            </div>
                            <div class="service-item clearfix">
                                <img class="service-icon" src="assets/img/service-icons/inventory.png">
                                <div class="service-text"><h4>Inventory - Unfurnished</h4></div>
                                <button type="button" class="btn btn-primary service-btn">&pound;100</button>
                            </div>
                            <div class="service-item clearfix">
                                <img class="service-icon" src="assets/img/service-icons/inventory.png">
                                <div class="service-text"><h4>Inventory - Furnished</h4></div>
                                <button type="button" class="btn btn-primary service-btn">&pound;240</button>
                            </div>
                            <div class="service-item clearfix">
                                <img class="service-icon" src="assets/img/service-icons/utilities.png">
                                <div class="service-text"><h4>Setting up of utilities</h4></div>
                                <button type="button" class="btn btn-primary service-btn">&pound;20</button>
                            </div>
                            <div class="service-item clearfix">
                                <img class="service-icon" src="assets/img/service-icons/review.png">
                                <div class="service-text"><h4>Rent review</h4></div>
                                <button type="button" class="btn btn-primary service-btn">&pound;30</button>
                            </div>
                            <div class="service-item clearfix">
                                <img class="service-icon" src="assets/img/service-icons/account.png">
                                <div class="service-text"><h4>Annual account statement (managed only)</h4></div>
                                <button type="button" class="btn btn-primary service-btn">&pound;60</button>
                            </div>
                            <div class="service-item clearfix">
                                <img class="service-icon" src="assets/img/service-icons/tax.png">
                                <div class="service-text"><h4>Administration of NRL tax return (managed only)</h4></div>
                                <button type="button" class="btn btn-primary service-btn">&pound;180</button>
                            </div>
                            <div class="service-item clearfix">
                                <img class="service-icon" src="assets/img/service-icons/tenancy.png">
                                <div class="service-text"><h4>Renewal agreement</h4></div>
                                <button type="button" class="btn btn-primary service-btn">&pound;78</button>
                            </div>
                            <div class="service-item clearfix">
                                <img class="service-icon" src="assets/img/service-icons/blank.png">
                                <div class="service-text"><h4>Late rent payment letter chase</h4></div>
                                <button type="button" class="btn btn-primary service-btn">&pound;30 per letter</button>
                            </div>
                            <div class="service-item clearfix">
                                <img class="service-icon" src="assets/img/service-icons/review.png">
                                <div class="service-text"><h4>Property portfolio review </h4></div>
                                <button type="button" class="btn btn-primary service-btn">FREE</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!--<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>-->
    <script src="assets/js/jquery.placeholder.min.js"></script>

    <script src="assets/js/script.js"></script>

</body>
</html>
