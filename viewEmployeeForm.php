<!DOCTYPE html>
 <title>WebPOS | Easy to use Online POS Software</title>
    <link rel="icon" href="https://demo.phppointofsale.com/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"> <!--320-->
    <!--<base href="https://demo.phppointofsale.com/">--><base href=".">

    <link rel="icon" href="WebPOS/img/header_logo.ico" type="image/x-icon">
    <script type="text/javascript">
        var SITE_URL= "home1.php";
        var BASE_URL= "home1.php";
        var ENABLE_SOUNDS = false;
        var JS_DATE_FORMAT = "DD-MM-YYYY";
        var JS_TIME_FORMAT = "hh:mm a";
        var LOCALE =  "en";
        var IS_MOBILE = false;
        var DISABLE_QUICK_EDIT = false;
    </script>
    <link rel="stylesheet" type="text/css" href=" css/all.css">
    <script src="./Employees_files/all.js" type="text/javascript" charset="UTF-8"></script>
    <script type="text/javascript">
        COMMON_SUCCESS = "Success";
        COMMON_ERROR = "Error";

        bootbox.addLocale('ar', {
            OK : 'OK',
            CANCEL : 'CANCEL',
            CONFIRM : 'CONFIRM'
        });

        bootbox.addLocale('km', {
            OK :'OK',
            CANCEL : 'CANCEL',
            CONFIRM : 'CONFIRM'
        });
        bootbox.setLocale(LOCALE);
        $.ajaxSetup ({
            cache: false,
            headers: { "cache-control": "no-cache" }
        });
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        $.fn.editableform.buttons =
            '<button tabindex="-1" type="submit" class="btn btn-primary btn-sm editable-submit">'+
            '<i class="icon ti-check"></i>'+
            '</button>'+
            '<button tabindex="-1" type="button" class="btn btn-default btn-sm editable-cancel">'+
            '<i class="icon ti-close"></i>'+
            '</button>';

        $.fn.editable.defaults.emptytext = "Empty";

        $(document).ready(function()
        {
            $(".wrapper.mini-bar .left-bar").hover(
                function() {
                    $(this).parent().removeClass('mini-bar');
                }, function() {
                    $(this).parent().addClass('mini-bar');
                }
            );

            $('.menu-bar').click(function(e){
                e.preventDefault();
                $(".wrapper").toggleClass('mini-bar');
            });

            //Ajax submit current location
            $(".set_employee_current_location_id").on('click',function(e)
            {
                e.preventDefault();

                var location_id = $(this).data('location-id');
                $.ajax({
                    type: 'POST',
                    url: 'https://demo.phppointofsale.com/index.php/home/set_employee_current_location_id',
                    data: {
                        'employee_current_location_id': location_id,
                    },
                    success: function(){
                        window.location.reload(true);
                    }
                });

            });

            $(".set_employee_language").on('click',function(e)
            {
                e.preventDefault();

                var language_id = $(this).data('language-id');
                $.ajax({
                    type: 'POST',
                    url: 'https://demo.phppointofsale.com/index.php/employees/set_language',
                    data: {
                        'employee_language_id': language_id,
                    },
                    success: function(){
                        window.location.reload(true);
                    }
                });

            });

            //Keep session alive by sending a request every 5 minutes
            setInterval(function(){$.get('https://demo.phppointofsale.com/index.php/home/keep_alive');}, 300000);
        });
    </script>

</head>
<body>
<div class="modal fade hidden-print" id="myModal" tabindex="-1" role="dialog" aria-hidden="true"></div>
<div class="modal fade hidden-print" id="myModalDisableClose" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static"></div>

<div class="wrapper ">
    <div class="left-bar hidden-print" tabindex="0" style="overflow: hidden; outline: none;">
        <div class="admin-logo" style="">
            <div class="logo-holder pull-left">
                <img src="./Employees_files/header_logo.png" class="hidden-print logo" id="header-logo" alt="">				</div>
            <!-- logo-holder -->

        </div>

        </div>
        <!-- admin-logo -->

        <ul class="list-unstyled menu-parent" id="mainMenu">


            <ul class="list-unstyled menu-parent" id="mainMenu">


                <li class="active">
                    <a tabindex="-1" href="home1.php" class="waves-effect waves-light">
                        <i class="icon ti-dashboard"></i>
                        <span class="text">Dashboard</span>
                    </a></li>
                <li>
                    <a tabindex="-1" href="https://demo.phppointofsale.com/index.php/customers" class="waves-effect waves-light">
                        <i class="icon ti-user"></i>
                        <span class="text">Customers</span>
                    </a>
                </li>
                <li>
                    <a tabindex="-1" href="https://demo.phppointofsale.com/index.php/items" class="waves-effect waves-light">
                        <i class="icon ti-harddrive"></i>
                        <span class="text">Items</span>
                    </a>
                </li>
                <li>
                    <a tabindex="-1" href="https://demo.phppointofsale.com/index.php/item_kits" class="waves-effect waves-light">
                        <i class="icon ti-harddrives"></i>
                        <span class="text">Item Kits</span>
                    </a>
                </li>
                <li>
                    <a tabindex="-1" href="https://demo.phppointofsale.com/index.php/suppliers" class="waves-effect waves-light">
                        <i class="icon ti-download"></i>
                        <span class="text">Suppliers</span>
                    </a>
                </li>
                <li>
                    <a tabindex="-1" href="https://demo.phppointofsale.com/index.php/reports" class="waves-effect waves-light">
                        <i class="icon ti-bar-chart"></i>
                        <span class="text">Reports</span>
                    </a>
                </li>
                <li>
                    <a tabindex="-1" href="https://demo.phppointofsale.com/index.php/receivings" class="waves-effect waves-light">
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
                    <a tabindex="-1" href="https://demo.phppointofsale.com/index.php/expenses" class="waves-effect waves-light">
                        <i class="icon ti-money"></i>
                        <span class="text">Expenses</span>
                    </a>
                </li>
                <li>
                    <a tabindex="-1" href="viewEmployeeForm.php" class="waves-effect waves-light">
                        <i class="icon ti-id-badge"></i>
                        <span class="text">Employees</span>
                    </a>
                </li>

                <li>
                    <a tabindex="-1" href="https://demo.phppointofsale.com/index.php/config" class="waves-effect waves-light">
                        <i class="icon ti-settings"></i>
                        <span class="text">Store Config</span>
                    </a>
                </li>
                <li>
                    <a tabindex="-1" href="https://demo.phppointofsale.com/index.php/locations" class="waves-effect waves-light">
                        <i class="icon ti-home"></i>
                        <span class="text">Locations</span>
                    </a>
                </li>



                <li>
                    <a href="index.php" tabindex="-1"><i class="icon ti-power-off"></i><span class="text">Logout</span></a>
                </li>

            </ul>
    </div>
    <!-- left-bar -->

    <div class="content" id="content">
        <div class="overlay hidden-print"></div>
        <div class="top-bar hidden-print">
            <nav class="navbar navbar-default top-bar">
                <div class="menu-bar-mobile" id="open-left"><i class="ti-menu"></i></div>
                <div class="nav navbar-nav top-elements navbar-breadcrumb hidden-xs">
                    <a tabindex="-1" href="https://demo.phppointofsale.com/index.php/home">Dashboard</a><a tabindex="-1" class="current" href="https://demo.phppointofsale.com/index.php/employees">Employees</a>					</div>

                <ul class="nav navbar-nav navbar-right top-elements">

                    <li class="dropdown">
                        <a href="https://demo.phppointofsale.com/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="ion-ios-bell-outline  icon-notification"></i><span class="badge info-number count " id="unread_message_count">0</span></a>
                        <ul class="dropdown-menu animated fadeInUp wow message_drop neat_drop animated" data-wow-duration="1500ms" role="menu" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                            <li class="bottom-links">
                                <a href="https://demo.phppointofsale.com/index.php/messages" class="last_info">View all messages</a>
                            </li>


                            <li class="bottom-links">
                                <a href="https://demo.phppointofsale.com/index.php/messages/sent_messages" class="last_info">View Sent Messages</a>
                            </li>

                            <li class="bottom-links">
                                <a href="https://demo.phppointofsale.com/index.php/messages/send_message" class="last_info">Send Message</a>
                            </li>
                        </ul>
                    </li>




                    <li class="dropdown">
                        <a tabindex="-1" href="https://demo.phppointofsale.com/#" class="dropdown-toggle avatar_width" data-toggle="dropdown" role="button" aria-expanded="false"><span class="avatar-holder">

							<img src="./Employees_files/avatar-default.jpg" alt=""></span>

                            <span class="avatar_info hidden-sm">John Doe</span></a>
                        <ul class="dropdown-menu user-dropdown animated fadeInUp wow avatar_drop neat_drop animated" data-wow-duration="1500ms" role="menu" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">

                            <li><a href="https://demo.phppointofsale.com/index.php/config" tabindex="-1"><i class="ion-android-settings"></i><span class="text">Settings</span></a></li>

                            <li>
                                <a tabindex="-1" id="switch_user" href="https://demo.phppointofsale.com/index.php/login/switch_user/1" data-toggle="modal" data-target="#myModalDisableClose"><i class="ion-ios-toggle-outline"></i><span class="text">Switch User</span></a>
                            </li>
                            <li>
                                <a tabindex="-1" title="" href="https://demo.phppointofsale.com/index.php/login/edit_profile" data-toggle="modal" data-target="#myModal"><i class="ion-edit"></i><span class="text">Edit profile</span></a>
                            </li>
                            <li>
                                <a href="https://demo.phppointofsale.com/index.php/timeclocks" tabindex="-1"><i class="ion-clock"></i>Time clock</a>									</li>

                            <li>
                                <a href="https://demo.phppointofsale.com/index.php/home/logout" class="logout_button" tabindex="-1"><i class="ion-power"></i><span class="text">Logout</span></a>								</li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- top-bar -->
        <div class="main-content">
            <script type="text/javascript">
                $(document).ready(function()
                {
                    var table_columns = ['','phppos_people'+'.person_id','last_name','email','phone_number'];

                    enable_sorting("https://demo.phppointofsale.com/index.php/employees/sorting",table_columns, 20, "last_name", "asc");
                    enable_select_all();
                    enable_checkboxes();
                    enable_row_selection();
                    enable_search('https://demo.phppointofsale.com/index.php/employees',"You have selected one or more rows, these will no longer be selected after your search. Are you sure you want to submit this search?");
                    enable_email('https://demo.phppointofsale.com/index.php/employees/mailto');
                    enable_delete("Are you sure you want to delete the selected employees?","You have not selected any employees to delete");
                    enable_cleanup("Are you sure you want to clean ALL deleted employees?");


                    $('#labels').click(function()
                    {
                        var selected = get_selected_values();
                        if (selected.length == 0)
                        {
                            bootbox.alert("You must select at least one person for mmailing labels");
                            return false;
                        }

                        $(this).attr('href','https://demo.phppointofsale.com/index.php/employees/mailing_labels/'+selected.join('~'));
                    });
                });
            </script>


            <div class="manage_buttons">
                <div class="manage-row-options hidden">
                    <div class="email_buttons text-center">
                        <a class="btn btn-primary btn-lg disabled email email_inactive" title="E-Mail" id="email" href="https://demo.phppointofsale.com/index.php/employees#">
                            <span class="">E-Mail</span>
                        </a>

                        <a class="btn btn-primary btn-lg labels" title="Mailing Labels" id="labels" href="https://demo.phppointofsale.com/index.php/employees#">
                            <span class="">Mailing Labels</span>
                        </a>


                        <a href="https://demo.phppointofsale.com/index.php/employees/delete" id="delete" class="btn btn-red btn-lg disabled delete_inactive " title="Delete"><span class="">Delete</span></a>
                        <a href="https://demo.phppointofsale.com/#" class="btn btn-lg btn-clear-selection btn-warning">Clear Selection</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <form action="https://demo.phppointofsale.com/index.php/employees/search" id="search_form" autocomplete="off" method="post" accept-charset="utf-8">
                            <div class="search no-left-border">
                                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="text" class="form-control ui-autocomplete-input" name="search" id="search" value="" placeholder="Search Employees" autocomplete="off">
                            </div>
                            <div class="clear-block hidden">
                                <a class="clear" href="https://demo.phppointofsale.com/index.php/employees/clear_state">
                                    <i class="ion ion-close-circled"></i>
                                </a>
                            </div>
                        </form>

                    </div>
                    <div class="col-md-7">
                        <div class="buttons-list">
                            <div class="pull-right-btn">
                                <a href="https://demo.phppointofsale.com/index.php/employees/view/-1" id="new-person-btn" class="btn btn-primary btn-lg" title="New Employee"><span class="">New Employee</span></a>					<div class="piluku-dropdown">

                                    <button type="button" class="btn btn-more dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <i class="ion-android-more-horizontal"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                        </li>
                                        <li>
                                            <a href="https://demo.phppointofsale.com/index.php/employees/excel_export" class="hidden-xs import" title="Excel Export"><span class="">Excel Export</span></a>							</li>
                                        <li>
                                            <a href="https://demo.phppointofsale.com/index.php/employees/cleanup" id="cleanup" class="" title="Cleanup old employees"><span class="">Cleanup old employees</span></a>															</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row manage-table">
                    <div class="panel panel-piluku">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                List of Employees					<span title="4 total employees" class="badge bg-primary tip-left" id="manage_total_items">4</span>
					<span class="panel-options custom">
											</span>
                            </h3>
                        </div>
                        <div class="panel-body nopadding table_holder table-responsive">
                            <table class="tablesorter table  table-hover" id="sortable_table"><thead><tr><th class="leftmost"><input type="checkbox" id="select_all"><label for="select_all"><span></span></label></th><th>Person ID</th><th class="header headerSortUp">Name</th><th>E-Mail</th><th>Phone Number</th><th>Clone</th><th>&nbsp;</th><th class="rightmost">&nbsp;</th></tr></thead><tbody><tr style="cursor: pointer;"><td><input type="checkbox" name="person_3" id="person_3" value="3"><label for="person_3"><span></span></label></td><td>3</td><td><a href="https://demo.phppointofsale.com/index.php/reports/specific_employee/2015-12-23/2016-06-23%2023:59:59/3/all/0" class="underline">Empleado1 </a></td><td><a href="mailto:Qwe@gmail.com" class="underline">Qwe@gmail.com</a></td><td></td><td class="rightmost"><a href="https://demo.phppointofsale.com/index.php/employees/clone_employee/3" class=" " title="Clone">Clone</a></td><td class="text-center"> <a href="https://demo.phppointofsale.com/index.php/messages/send_invidual_message/3" class="1	 manage-employees-message" data-toggle="modal" data-target="#myModal"><i class="ion-email"></i></a> </td><td><a href="https://demo.phppointofsale.com/index.php/employees/view/3/2" class="  update-person" title="Update Employee">Edit</a></td><td><a href="./Employees_files/avatar-default.jpg" class="rollover"><img src="./Employees_files/avatar-default.jpg" alt="Empleado1 " class="img-polaroid avatar" width="45"></a></td></tr><tr><td><input type="checkbox" name="person_8" id="person_8" value="8"><label for="person_8"><span></span></label></td><td>8</td><td><a href="https://demo.phppointofsale.com/index.php/reports/specific_employee/2015-12-23/2016-06-23%2023:59:59/8/all/0" class="underline">Mohamed </a></td><td><a href="mailto:mohadia12345@yahoo.com" class="underline">mohadia12345@yahoo.com</a></td><td></td><td class="rightmost"><a href="https://demo.phppointofsale.com/index.php/employees/clone_employee/8" class=" " title="Clone">Clone</a></td><td class="text-center"> <a href="https://demo.phppointofsale.com/index.php/messages/send_invidual_message/8" class="1	 manage-employees-message" data-toggle="modal" data-target="#myModal"><i class="ion-email"></i></a> </td><td><a href="https://demo.phppointofsale.com/index.php/employees/view/8/2" class="  update-person" title="Update Employee">Edit</a></td><td><a href="./Employees_files/avatar-default.jpg" class="rollover"><img src="./Employees_files/avatar-default.jpg" alt="Mohamed " class="img-polaroid avatar" width="45"></a></td></tr><tr><td><input type="checkbox" name="person_9" id="person_9" value="9"><label for="person_9"><span></span></label></td><td>9</td><td><a href="https://demo.phppointofsale.com/index.php/reports/specific_employee/2015-12-23/2016-06-23%2023:59:59/9/all/0" class="underline">Jack </a></td><td><a href="mailto:tiendaweb@gmail.com" class="underline">tiendaweb@gmail.com</a></td><td></td><td class="rightmost"><a href="https://demo.phppointofsale.com/index.php/employees/clone_employee/9" class=" " title="Clone">Clone</a></td><td class="text-center"> <a href="https://demo.phppointofsale.com/index.php/messages/send_invidual_message/9" class="1	 manage-employees-message" data-toggle="modal" data-target="#myModal"><i class="ion-email"></i></a> </td><td><a href="https://demo.phppointofsale.com/index.php/employees/view/9/2" class="  update-person" title="Update Employee">Edit</a></td><td><a href="./Employees_files/avatar-default.jpg" class="rollover"><img src="./Employees_files/avatar-default.jpg" alt="Jack " class="img-polaroid avatar" width="45"></a></td></tr><tr><td><input type="checkbox" name="person_1" id="person_1" value="1"><label for="person_1"><span></span></label></td><td>1</td><td><a href="https://demo.phppointofsale.com/index.php/reports/specific_employee/2015-12-23/2016-06-23%2023:59:59/1/all/0" class="underline">John Doe</a></td><td><a href="mailto:no-reply@phppointofsale.com" class="underline">no-reply@phppointofsale.com</a></td><td>555-555-5555</td><td class="rightmost"><a href="https://demo.phppointofsale.com/index.php/employees/clone_employee/1" class=" " title="Clone">Clone</a></td><td class="text-center"> <a href="https://demo.phppointofsale.com/index.php/messages/send_invidual_message/1" class="1	 manage-employees-message" data-toggle="modal" data-target="#myModal"><i class="ion-email"></i></a> </td><td><a href="https://demo.phppointofsale.com/index.php/employees/view/1/2" class="  update-person" title="Update Employee">Edit</a></td><td><a href="./Employees_files/avatar-default.jpg" class="rollover"><img src="./Employees_files/avatar-default.jpg" alt="John Doe" class="img-polaroid avatar" width="45"></a></td></tr></tbody></table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="footers" class="col-md-12 hidden-print text-center">
            Please visit our
            <a tabindex="-1" href="http://phppointofsale.com/" target="_blank">website</a> to learn the latest information about the project.
            <span class="text-info">You are using PHP Point Of Sale Version <span class="badge bg-primary"> 15.0</span></span> Built on 19-06-2016 06:14 pm EST			</div>
    </div>
    <!---content -->
</div>

<!-- wrapper -->
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"653e27187f","applicationID":"2375780","transactionName":"bwdVbUoEVhcAAUUMDlZNdlpMDFcKTidcFQ1XG1JcS0pRCgUHSQ==","queueTime":0,"applicationTime":69,"atts":"Q0BWGwIeRRk=","errorBeacon":"bam.nr-data.net","agent":""}</script>
<div id="ascrail2000" class="nicescroll-rails nicescroll-rails-vr" style="width: 7px; z-index: auto; cursor: default; position: fixed; top: 0px; left: 197px; height: 623px; display: block; opacity: 0;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 5px; height: 545px; border: 1px solid rgb(255, 255, 255); border-radius: 5px; background-color: rgb(66, 66, 66); background-clip: padding-box;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 7px; z-index: auto; top: 616px; left: 0px; position: fixed; cursor: default; display: block; width: 197px; opacity: 0;"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 5px; width: 199px; border: 1px solid rgb(255, 255, 255); border-radius: 5px; left: 0px; background-color: rgb(66, 66, 66); background-clip: padding-box;"></div></div><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none;"></ul></body></html>