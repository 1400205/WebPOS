<!DOCTYPE html>
<html class="english">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">

    <title>WebPOS | Easy to use Online POS Software</title>
    <link rel="icon" href="https://demo.phppointofsale.com/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"> <!--320-->

    <link rel="icon" href="https://demo.phppointofsale.com/favicon.ico" type="image/x-icon">
    <script type="text/javascript">
        var SITE_URL= "https://demo.phppointofsale.com/index.php";
        var BASE_URL= "https://demo.phppointofsale.com/";
        var ENABLE_SOUNDS = false;
        var JS_DATE_FORMAT = "MM\/DD\/YYYY";
        var JS_TIME_FORMAT = "hh:mm a";
        var LOCALE =  "en";
        var IS_MOBILE = false;
        var DISABLE_QUICK_EDIT = false;
    </script>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <script src="part.js" type="text/javascript" charset="UTF-8"></script>
</head>
<body>
<div class="modal fade hidden-print" id="myModal" tabindex="-1" role="dialog" aria-hidden="true"></div>
<div class="modal fade hidden-print" id="myModalDisableClose" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static"></div>

<div class="wrapper ">
    <div tabindex="0" style="overflow: hidden;" class="left-bar hidden-print">
        <div class="admin-logo" style="">
            <div class="logo-holder pull-left">
                <img src="img/header_logo.png" class="hidden-print logo" id="header-logo" alt="">				</div>
            <!-- logo-holder -->

        </div>
        <!-- admin-logo -->

        <ul class="list-unstyled menu-parent" id="mainMenu">


            <li class="active">
                <a tabindex="-1" href="home1.php" class="waves-effect waves-light">
                    <i class="icon ti-dashboard"></i>
                    <span class="text">Dashboard</span>
                </a></li>
            <li>
                <a tabindex="-1" href="#" class="waves-effect waves-light">
                    <i class="icon ti-user"></i>
                    <span class="text">Customers</span>
                </a>
            </li>
            <li>
                <a tabindex="-1" href="#" class="waves-effect waves-light">
                    <i class="icon ti-harddrive"></i>
                    <span class="text">Items</span>
                </a>
            </li>

            <li>
                <a tabindex="-1" href="#" class="waves-effect waves-light">
                    <i class="icon ti-download"></i>
                    <span class="text">Suppliers</span>
                </a>
            </li>
            <li>
                <a tabindex="-1" href="#" class="waves-effect waves-light">
                    <i class="icon ti-bar-chart"></i>
                    <span class="text">Reports</span>
                </a>
            </li>
            <li>
                <a tabindex="-1" href="#" class="waves-effect waves-light">
                    <i class="icon ti-cloud-down"></i>
                    <span class="text">Receivings</span>
                </a>
            </li>
            <li>
                <a tabindex="-1" href="sales.php" class="waves-effect waves-light">
                    <i class="icon ti-shopping-cart"></i>
                    <span class="text">Sales</span>
                </a>
            </li>
            <li>
                <a tabindex="-1" href="#" class="waves-effect waves-light">
                    <i class="icon ti-money"></i>
                    <span class="text">Expenses</span>
                </a>
            </li>

            <li>
                <a tabindex="-1" href="allPersons.html" class="waves-effect waves-light">
                    <i class="icon ti-id-badge"></i>
                    <span class="text">Add All Persons</span>
                </a>

            </li>

            <li>
                <a tabindex="-1" href="allPersons.html" class="waves-effect waves-light">
                    <i class="icon ti-shopping-cart"></i>
                    <span class="text">Add All Persons</span>
                </a>
            </li>

            <li>
                <a tabindex="-1" href="AllSettings.html" class="waves-effect waves-light">
                    <i class="icon ti-settings"></i>
                    <span class="text">Store Config</span>
                </a>
            </li>
            <li>
                <a tabindex="-1" href="#" class="waves-effect waves-light">
                    <i class="icon ti-home"></i>
                    <span class="text">Locations</span>
                </a>
            </li>



            <li class="active">
                <a tabindex="-1" href="logout.php" class="waves-effect waves-light">
                    <i class="icon ti-dashboard"></i>
                    <span class="text">Logout</span>
                </a></li>

        </ul>
    </div>
    <!-- left-bar -->

    <div class="content" id="content">
        <div class="overlay hidden-print"></div>
        <div class="top-bar hidden-print">
            <nav class="navbar navbar-default top-bar">
                <div class="menu-bar-mobile" id="open-left"><i class="ti-menu"></i></div>
                <div class="nav navbar-nav top-elements navbar-breadcrumb hidden-xs">
                    <a tabindex="-1" href="home1.php">Dashboard</a>					</div>

                <ul class="nav navbar-nav navbar-right top-elements">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="ion-ios-bell-outline  icon-notification"></i><span class="badge info-number count " id="unread_message_count">0</span></a>
                        <ul style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;" class="dropdown-menu animated fadeInUp wow message_drop neat_drop animated" data-wow-duration="1500ms" role="menu">
                            <li class="bottom-links">
                                <a href="https://demo.phppointofsale.com/index.php/messages" class="last_info">View all messages</a>
                            </li>


                            <li class="bottom-links">
                                <a href="#" class="last_info">View Sent Messages</a>
                            </li>

                            <li class="bottom-links">
                                <a href="#" class="last_info">Send Message</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Default <span class="drop-icon"><i class="ion ion-chevron-down"></i></span></a>
                        <ul style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;" class="dropdown-menu animated fadeInUp wow locations-drop locations-drop neat_drop animated" data-wow-duration="1500ms" role="menu">
                            <li><a class="set_employee_current_location_id" data-location-id="1" href="#"><span class="badge" style="background-color:">&nbsp;</span> Default </a></li>
                            <li><a class="set_employee_current_location_id" data-location-id="2" href="#"><span class="badge" style="background-color:">&nbsp;</span> nowhere </a></li>
                            <li><a class="set_employee_current_location_id" data-location-id="3" href="#"><span class="badge" style="background-color:">&nbsp;</span> asd </a></li>
                            <li><a class="set_employee_current_location_id" data-location-id="4" href="#"><span class="badge" style="background-color:#e0bd04">&nbsp;</span> India </a></li>
                        </ul>
                    </li>





                    <li class="dropdown">
                        <a tabindex="-1" href="#" class="dropdown-toggle avatar_width" data-toggle="dropdown" role="button" aria-expanded="false"><span class="avatar-holder">

							<img src="Demo%20-%20PHP%20Point%20Of%20Sale%20_%20Easy%20to%20use%20Online%20POS%20Software_files/avatar-default.jpg" alt=""></span>

                            <span class="avatar_info hidden-sm">John Doe</span></a>
                        <ul style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;" class="dropdown-menu user-dropdown animated fadeInUp wow avatar_drop neat_drop animated" data-wow-duration="1500ms" role="menu">

                            <li><a href="#" tabindex="-1"><i class="ion-android-settings"></i><span class="text">Settings</span></a></li>

                            <li>
                                <a tabindex="-1" id="switch_user" href="#" data-toggle="modal" data-target="#myModalDisableClose"><i class="ion-ios-toggle-outline"></i><span class="text">Switch User</span></a>
                            </li>
                            <li>
                                <a tabindex="-1" title="" href="#" data-toggle="modal" data-target="#myModal"><i class="ion-edit"></i><span class="text">Edit profile</span></a>
                            </li>

                            <li>
                                <a href="#" class="logout_button" tabindex="-1"><i class="ion-power"></i><span class="text">Logout</span></a>								</li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- top-bar -->
        <div class="main-content">




            <div class="text-center">


                <div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="https://demo.phppointofsale.com/index.php/sales">
                            <div class="dashboard-stats">
                                <div class="left">
                                    <h3 class="flatBluec">54</h3>
                                    <h4>Total Sales</h4>
                                </div>
                                <div class="right flatBlue">
                                    <i class="ion ion-ios-cart-outline"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="https://demo.phppointofsale.com/index.php/items">
                            <div class="dashboard-stats">
                                <div class="left">
                                    <h3 class="flatBluec">0</h3>
                                    <h4>Total Items</h4>
                                </div>
                                <div class="right flatRed">
                                    <i class="icon ti-harddrive"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="https://demo.phppointofsale.com/index.php/customers">
                            <div class="dashboard-stats" id="totalCustomers">
                                <div class="left">
                                    <h3 class="flatGreenc">0</h3>
                                    <h4>Total Customers</h4>
                                </div>
                                <div class="right flatGreen">
                                    <i class="ion ion-ios-people-outline"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="https://demo.phppointofsale.com/index.php/item_kits">
                            <div class="dashboard-stats">
                                <div class="left">
                                    <h3 class="flatOrangec">0</h3>
                                    <h4>Total Item Kits</h4>
                                </div>
                                <div class="right flatOrange">
                                    <i class="ion ion-filing"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <h5 class="text-center">Welcome to PHP Point Of Sale, choose a common task below to get started!</h5>
            <div class="row quick-actions">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="list-group">
                        <a class="list-group-item" href="#"> <i class="ion-clock"></i> Today's closeout report</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="list-group">
                        <a class="list-group-item" href="#"> <i class="ion-stats-bars"></i> Today's detailed sales report</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="list-group">
                        <a class="list-group-item" href="https:#"> <i class="ion-clipboard"></i> Today's summary items report</a>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="list-group">
                        <a class="list-group-item" href="#"> <i class="icon ti-cloud-down"></i> Start a New Receiving</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="list-group">
                        <a class="list-group-item" href="#"> <i class="icon ti-shopping-cart"></i> Start a New Sale</a>
                    </div>
                </div>

            </div>

            <div class="row ">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">

                            <div class="panel-heading">
                                <h4 class="text-center">Sales Information</h4>
                            </div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs piluku-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#month" data-type="monthly" aria-controls="month" role="tab">Month</a></li>
                                <li role="presentation"><a href="#week" data-type="weekly" aria-controls="week" role="tab">Week</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content piluku-tab-content">
                                <div role="tabpanel" class="tab-pane active" id="month">
                                    <div class="chart">
                                        <canvas style="width: 1072px; height: 268px;" id="charts" width="1072" height="268"></canvas>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="week">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Location Message to employee -->
        <script>
            $(document).ready(function(){

                $("#dismiss_mercury").click(function(e){
                    e.preventDefault();
                    $.get($(this).attr('href'));
                    $("#mercury_container").fadeOut();

                });

                $("#dismiss_test_mode").click(function(e){
                    e.preventDefault();
                    $.get($(this).attr('href'));
                    $("#test_mode_container").fadeOut();
                });



                var data = {
                    labels: ["19","20"],
                    datasets: [
                        {
                            fillColor : "#5d9bfb",
                            strokeColor : "#5d9bfb",
                            highlightFill : "#5d9bfb",
                            highlightStroke : "#5d9bfb",
                            data: ["6792.75","24164.32"]				}
                    ]
                };
                var ctx = document.getElementById("charts").getContext("2d");
                var myBarChart = new Chart(ctx).Bar(data, {
                    responsive : true
                });



                $('.piluku-tabs a').on('click',function(e) {
                    e.preventDefault();
                    $('.piluku-tabs li').removeClass('active');
                    $(this).parent('li').addClass('active');
                    var type = $(this).attr('data-type');
                    $.post('https://demo.phppointofsale.com/index.php/home/sales_widget/'+type+'', function(res)
                    {
                        var obj = jQuery.parseJSON(res);
                        if(obj.message)
                        {
                            $(".chart").html(obj.message);
                            return false;
                        }

                        renderChart(obj.day, obj.amount);

                        myBarChart.update();
                    });
                });

                function renderChart(label,data){

                    $(".chart").html("").html('<canvas id="charts" width="400" height="400"></canvas>');
                    var lineChartData = {
                        labels : label,
                        datasets : [
                            {
                                fillColor : "#5d9bfb",
                                strokeColor : "#5d9bfb",
                                highlightFill : "#5d9bfb",
                                highlightStroke : "#5d9bfb",
                                data : data
                            }
                        ]

                    }
                    var canvas = document.getElementById("charts");
                    var ctx = canvas.getContext("2d");

                    myLine = new Chart(ctx).Bar(lineChartData, {
                        responsive: true,
                        maintainAspectRatio: false
                    });
                }
            });
        </script>


        <div id="footers" class="col-md-12 hidden-print text-center">
            Please visit our
            <a tabindex="-1" href="http://phppointofsale.com/" target="_blank">website</a> to learn the latest information about the project.
            <span class="text-info">You are using PHP Point Of Sale Version <span class="badge bg-primary"> 15.0</span></span> Built on 06/19/2016 06:14 pm EST			</div>
    </div>
    <!---content -->
</div>

<!-- wrapper -->
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"653e27187f","applicationID":"2375780","transactionName":"bwdVbUoEVhcAAUUMDlZNdlpMDFcKTipeCAQXC1ldXR0=","queueTime":0,"applicationTime":105,"atts":"Q0BWGwIeRRk=","errorBeacon":"bam.nr-data.net","agent":""}</script>
<div style="width: 5px; z-index: auto; cursor: default; position: fixed; top: 0px; left: 199px; height: 659px; opacity: 0; display: block;" class="nicescroll-rails nicescroll-rails-vr" id="ascrail2000"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 5px; height: 561px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div></div><div style="height: 5px; z-index: auto; top: 654px; left: 0px; position: fixed; cursor: default; width: 199px; opacity: 0; display: block;" class="nicescroll-rails nicescroll-rails-hr" id="ascrail2000-hr"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 5px; width: 199px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; left: 0px;"></div></div></body></html>