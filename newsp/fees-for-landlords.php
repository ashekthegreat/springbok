<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/ico/favicon.ico">

    <title>Springbok Properties - Fees for Landlords</title>

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
        .fee-list{
            padding-bottom: 10px;
            text-align: center;
        }
        .fee-box{
            width: 31%;
            margin: 0 1% 20px;
            min-width: 150px;
            border-radius: 0.7em 0.7em 0 0;
            overflow: hidden;
            display: inline-block;
            transition: 0.5s transform;
            vertical-align: top;
        }
        .fee-box:hover {
            transform: scale(1.02);
            z-index: 1;
        }
        .fee-box .fee-box-head{
            color: #fff;
            text-align: center;
            padding: 1.5em 1em 1em;
            border-bottom: 2px solid #ffd500;
            background: #512884;
            border-radius: 0.7em 0.7em 0 0;
        }
        .fee-box .fee-box-head .box-title{
            font-size: 36px;
            line-height: 40px;
        }
        .fee-box .fee-box-head .box-subtitle{
            font-size: 18px;
        }
        .fee-box .fee-box-content{
            font-size: 15px;
            font-weight: 600;
            color: #444;
        }
        .fee-box .fee-box-content ul{
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .fee-box .fee-box-content li{
            list-style: none;
            color: #999;

            text-align: center;
            display: block;
            padding: 5px;
            text-decoration: none;
            font-weight: 400;

        }
        .fee-box .fee-box-content li:nth-child(2n+1){
            background: #f4f4f4;
        }
        .fee-box .fee-box-footer {
            color: #fff;
            padding: 2em 1em;
            border-bottom: 2px solid #ffd500;
        }
        .fee-box-footer a,
        .fee-box-footer a:link,
        .fee-box-footer a:focus,
        .fee-box-footer a:hover {
            display: inline-block;
            color: #FFF;
            font-weight: 500;
            padding: 0.8em 3em .6em;
            text-decoration: none;
            background: #f7d30b;
            text-transform: uppercase;
            -webkit-appearance: none;
            border-radius: 1em;
            outline: none;
        }


        /* Bronze */
        .fee-bronze .fee-box-head{
            background: #CD7F32;
            border-bottom-color: #EDDA74;
        }
        .fee-bronze .fee-box-footer {
            border-bottom-color: #EDDA74;
        }
        .fee-bronze .fee-box-footer a{
            background: #CD7F32;
        }

        /* silver */
        .fee-silver .fee-box-head{
            background: #BCC6CC;
            border-bottom-color: #999;
        }
        .fee-silver .fee-box-footer {
            border-bottom-color: #999;
        }
        .fee-silver .fee-box-footer a{
            background: #BCC6CC;
        }

        /* gold */
        .fee-gold .fee-box-head{
            background: #EDDA74;
            border-bottom-color: #CD7F32;
        }
        .fee-gold .fee-box-footer {
            border-bottom-color: #CD7F32;
        }
        .fee-gold .fee-box-footer a{
            background: #EDDA74;
        }

        /* platinum */
        .fee-platinum .fee-box-head{
            background: #98AFC7;
            border-bottom-color: #357EC7;
        }
        .fee-platinum .fee-box-footer {
            border-bottom-color: #357EC7;
        }
        .fee-platinum .fee-box-footer a{
            background: #98AFC7;
        }

        /* diamond */
        .fee-diamond .fee-box-head{
            background: #512884;
            border-bottom-color: #fd6e70;
        }
        .fee-diamond .fee-box-footer {
            border-bottom-color: #fd6e70;
        }
        .fee-diamond .fee-box-footer a{
            background: #512884;
        }


        .panel-fee-additional{
            box-shadow: none;
            border: 3px solid #ffe400;
        }
        .panel-fee-additional > .panel-heading{
            background: #ffe400;
            border: 0;
            font-size: 22px;
            padding: 2px 15px;
            font-weight: 600;
        }
        .panel-fee-additional td{
            border: 1px solid #ffe400;
            font-size: 14px;
            padding: 3px 10px!important;
        }
        .panel-fee-additional td small{
            font-size: 10px;
        }
        .panel-fee-additional .value{
            float: right;
        }
        @media (min-width: 860px) {

        }
        @media (max-width: 859px) {
            .fee-box{
                width: 47%;
            }
        }
        @media (max-width: 767px) {
            .panel-fee-additional td{
                display: block;
                width: 100%;
            }
        }
        @media (max-width: 459px) {
            .fee-box{
                width: 97%;
            }
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

                    <h1 style="margin-bottom: 15px">Springbok Fees for Landlords</h1>
                    <div class="fee-list clearfix">
                        <div class="fee-box fee-bronze">
                            <div class="fee-box-head"><div class="box-title">Broze</div><div class="box-subtitle">&pound;99 inc VAT</div></div>
                            <div class="fee-box-content">
                                <ul>
                                    <li>Advertise your property on Rightmove, Zoopla, Prime location and all other major portals for a maximum 6 weeks</li>
                                    <li>Tenant referencing service </li>
                                    <li>Set up of utility services</li>
                                </ul>
                            </div>
                            <div class="fee-box-footer"><a href="javascript:;" class="buy-now not-logged-in go-register">BUY NOW</a></div>
                        </div>
                        <div class="fee-box fee-silver">
                            <div class="fee-box-head"><div class="box-title">Silver</div><div class="box-subtitle">&pound;299 inc VAT</div></div>
                            <div class="fee-box-content">
                                <ul>
                                    <li>Advertise your property on Rightmove, Zoopla, Prime location and all other major portals</li>
                                    <li>Tenant referencing service </li>
                                    <li>Set up of utility services</li>
                                    <li>Provision of required paperwork</li>
                                    <li>Collection of initial rent</li>
                                    <li>Set up of standing order</li>
                                    <li>Register the deposit</li>
                                    <li>Let board</li>
                                </ul>
                            </div>
                            <div class="fee-box-footer"><a href="javascript:;" class="buy-now not-logged-in go-register">BUY NOW</a></div>
                        </div>
                        <div class="fee-box fee-gold">
                            <div class="fee-box-head"><div class="box-title">Gold</div><div class="box-subtitle">&pound;299 inc VAT</div></div>
                            <div class="fee-box-content">
                                <ul>
                                    <li>Advertise your property on Rightmove, Zoopla, Prime location and all other major portals</li>
                                    <li>Tenant referencing service </li>
                                    <li>Set up of utility services</li>
                                    <li>Provision of required paperwork</li>
                                    <li>Collection of initial rent</li>
                                    <li>Set up of standing order</li>
                                    <li>Register the deposit</li>
                                    <li>Let board</li>
                                    <li>Inventory</li>
                                    <li>Access to the Landlord portal</li>
                                    <li>8% management fee of rent received</li>
                                    <li>Annual rent review</li>
                                    <li>Option for rent protection</li>
                                </ul>
                            </div>
                            <div class="fee-box-footer"><a href="javascript:;" class="buy-now not-logged-in">BUY NOW</a></div>
                        </div>
                        <div class="fee-box fee-platinum">
                            <div class="fee-box-head"><div class="box-title">Platinum</div><div class="box-subtitle">&pound;350 inc VAT</div></div>
                            <div class="fee-box-content">
                                <ul>
                                    <li>Advertise your property on Rightmove, Zoopla, Prime location and all other major portals</li>
                                    <li>Tenant referencing service </li>
                                    <li>Set up of utility services</li>
                                    <li>Provision of required paperwork</li>
                                    <li>Collection of rent</li>
                                    <li>Set up of standing order</li>
                                    <li>Register the deposit</li>
                                    <li>Let board</li>
                                    <li>Inventory</li>
                                    <li>Access to the Landlord portal</li>
                                    <li>Full management of your property 10% of rent recived</li>
                                    <li>Annual rent review</li>
                                    <li>Option for rent protection</li>
                                </ul>
                            </div>
                            <div class="fee-box-footer"><a href="javascript:;" class="buy-now not-logged-in">BUY NOW</a></div>
                        </div>
                        <div class="fee-box fee-diamond">
                            <div class="fee-box-head"><div class="box-title">Complete</div><div class="box-subtitle">&pound;350 inc VAT</div></div>
                            <div class="fee-box-content">
                                <ul>
                                    <li>Advertise your property on Rightmove, Zoopla, Prime location and all other major portals</li>
                                    <li>Tenant referencing service </li>
                                    <li>Set up of utility services</li>
                                    <li>Provision of required paperwork</li>
                                    <li>Collection of rent</li>
                                    <li>Set up of standing order</li>
                                    <li>Register the deposit</li>
                                    <li>Let board</li>
                                    <li>Inventory</li>
                                    <li>Access to the Landlord portal</li>
                                    <li>Full management of your property 10% of rent recived</li>
                                    <li>Annual rent review</li>
                                    <li>Option for rent protection</li>
                                </ul>
                            </div>
                            <div class="fee-box-footer"><a href="javascript:;" class="buy-now not-logged-in">BUY NOW</a></div>
                        </div>
                    </div>

                    <div class="fee-additional">
                        <div class="panel panel-default panel-fee-additional">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Additional Services</div>

                            <!-- Table -->
                            <table class="table">
                                <tr>
                                    <td>&bull; Energy performance certificate <span class="value">&pound;120</span></td>
                                    <td>&bull; Deposit registration <span class="value">&pound;30</span></td>
                                    <td>&bull; Annual account statement <small>(managed only)</small> <span class="value">&pound;60</span></td>
                                </tr>
                                <tr>
                                    <td>&bull; Gas safety certificate and recording <span class="value">&pound;78</span></td>
                                    <td>&bull; Inventory <span class="value">&pound;100-240</span></td>
                                    <td>&bull; Administration of NRL tax return <small>(managed only)</small> <span class="value">&pound;180</span></td>
                                </tr>
                                <tr>
                                    <td>&bull; Tenancy agreement <span class="value">&pound;60</span></td>
                                    <td>&bull; Setting up of utilities <span class="value">&pound;20</span></td>
                                    <td>&bull; Renewal agreement <span class="value">&pound;78</span></td>
                                </tr>
                                <tr>
                                    <td>&bull; Professional photography &amp; Floor plans <span class="value">&pound;140</span></td>
                                    <td>&bull; Rent review <span class="value">&pound;30</span></td>
                                    <td>&bull; Late rent payment letter chase <span class="value">&pound;30 per letter</span></td>
                                </tr>
                                <tr>
                                    <td>&bull; Accompanied viewings <span class="value">&pound;40 per viewing</span></td>
                                    <td>&bull; Collection of rent <span class="value">8% of rent agreed</span></td>
                                    <td>&bull; Property portfolio review <span class="value">FREE</span></td>
                                </tr>
                                <tr>
                                    <td>&bull; Let board <span class="value">&pound;50</span></td>
                                    <td>&nbsp; <span class="value">&nbsp;</span></td>
                                    <td>&nbsp; <span class="value">&nbsp;</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>

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
