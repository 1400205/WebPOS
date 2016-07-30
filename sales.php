<?php
include ("myglobal.php");
//include ("clsGetProduct.php");
include ("clsGetCustomerID.php");
?>
<!DOCTYPE html>
<html class="english">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8"> <title>WebPOS | Easy to use Online POS Software</title>
    <link rel="icon" href="https://demo.phppointofsale.com/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"> <!--320-->
    <script src="jq/jquery-3.1.0.js"/>

<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!--    <script type="text/javascript" src="js/script.js"></script>-->
    <!-- base href="https://demo.phppointofsale.com/" -->



    <link rel="icon" href="https://demo.phppointofsale.com/favicon.ico" type="image/x-icon">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script>
        $(document).ready(function(){


            $("#item_id").change(function() {
               // var customerID = '<?php echo $resultText; ?>';
               //$("#customerID").val(customerID));
                $("#customerID").load("clsGetShelfID.php");
                $("#customerID").val(<?php echo $resultText; ?>)


            });
       /* $("#shelfName").change(function() {
            $("#shelfID").load("clsGetShelfID.php?shelfName=" + $("#shelfName").val());

        });*/
        });
    </script>

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
                    url: '#',
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

<div class="wrapper sales-bar mini-bar">
    <div tabindex="0" style="overflow: hidden;" class="left-bar hidden-print">
        <div class="admin-logo" style="">
            <div class="logo-holder pull-left">
                <img src="img/header_logo.png" class="hidden-print logo" id="header-logo" alt=""></div>
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
                <a tabindex="-1" href="#" class="waves-effect waves-light">
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
                    <a tabindex="-1" href="https://demo.phppointofsale.com/index.php/home">Dashboard</a><a class="current" tabindex="-1" href="https://demo.phppointofsale.com/index.php/sales">Sales</a>					</div>

                <ul class="nav navbar-nav navbar-right top-elements">
                    <li class="dropdown">
                        <a tabindex="-1" href="#" class="fullscreen" data-toggle="" role="button" aria-expanded="false"><i class="ion-arrow-expand  icon-notification"></i></a>
                    </li>
                    <li class="dropdown">
                        <a tabindex="-1" data-target="#" class="" data-toggle="" role="button" aria-expanded="false"><i class="ion-bag  icon-notification"></i><span class="badge info-number cart cart-number count">0</span></a>
                    </li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="ion-ios-bell-outline  icon-notification"></i><span class="badge info-number count " id="unread_message_count">0</span></a>
                        <ul style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;" class="dropdown-menu animated fadeInUp wow message_drop neat_drop animated" data-wow-duration="1500ms" role="menu">
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Default <span class="drop-icon"><i class="ion ion-chevron-down"></i></span></a>
                        <ul style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;" class="dropdown-menu animated fadeInUp wow locations-drop locations-drop neat_drop animated" data-wow-duration="1500ms" role="menu">
                            <li><a class="set_employee_current_location_id" data-location-id="1" href="https://demo.phppointofsale.com/index.php/home/set_employee_current_location_id/1"><span class="badge" style="background-color:">&nbsp;</span> Default </a></li>
                            <li><a class="set_employee_current_location_id" data-location-id="2" href="https://demo.phppointofsale.com/index.php/home/set_employee_current_location_id/2"><span class="badge" style="background-color:">&nbsp;</span> nowhere </a></li>
                            <li><a class="set_employee_current_location_id" data-location-id="3" href="https://demo.phppointofsale.com/index.php/home/set_employee_current_location_id/3"><span class="badge" style="background-color:">&nbsp;</span> asd </a></li>
                            <li><a class="set_employee_current_location_id" data-location-id="4" href="https://demo.phppointofsale.com/index.php/home/set_employee_current_location_id/4"><span class="badge" style="background-color:#e0bd04">&nbsp;</span> India </a></li>
                        </ul>
                    </li>





                    <li class="dropdown">
                        <a tabindex="-1" href="#" class="dropdown-toggle avatar_width" data-toggle="dropdown" role="button" aria-expanded="false"><span class="avatar-holder">

							<img src="Demo%20-%20PHP%20Point%20Of%20Sale%20_%20Easy%20to%20use%20Online%20POS%20Software_files/avatar-default.jpg" alt=""></span>

                            <span class="avatar_info hidden-sm">John Doe</span></a>
                        <ul style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;" class="dropdown-menu user-dropdown animated fadeInUp wow avatar_drop neat_drop animated" data-wow-duration="1500ms" role="menu">

                            <li><a href="https://demo.phppointofsale.com/index.php/config" tabindex="-1"><i class="ion-android-settings"></i><span class="text">Settings</span></a></li>

                            <li>
                                <a tabindex="-1" id="switch_user" href="https://demo.phppointofsale.com/index.php/login/switch_user/0" data-toggle="modal" data-target="#myModalDisableClose"><i class="ion-ios-toggle-outline"></i><span class="text">Switch User</span></a>
                            </li>
                            <li>
                                <a tabindex="-1" title="" href="https://demo.phppointofsale.com/index.php/login/edit_profile" data-toggle="modal" data-target="#myModal"><i class="ion-edit"></i><span class="text">Edit profile</span></a>
                            </li>

                            <li>
                                <a href="https://demo.phppointofsale.com/index.php/sales/closeregister?continue=logout" class="logout_button" tabindex="-1"><i class="ion-power"></i><span class="text">Logout</span></a>								</li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- top-bar -->
        <div class="main-content">

            <div id="sales_page_holder">
                <div id="sale-grid-big-wrapper" class="clearfix register">
                    <div class="row">
                        <div class="clearfix" id="category_item_selection_wrapper">
                            <div class="">
                                <div class="spinner" id="grid-loader" style="display: none;">
                                    <div class="rect1"></div>
                                    <div class="rect2"></div>
                                    <div class="rect3"></div>
                                </div>

                                <div class="text-center">
                                    <div id="grid_selection" class="btn-group" role="group">
                                        <a href="javascript:void(0);" class="btn active btn btn-grid" id="by_category">Categories</a>
                                        <a href="javascript:void(0);" class=" btn btn-grid" id="by_tag">Tags</a>
                                    </div>
                                </div>

                                <div id="grid_breadcrumbs"><a href="javascript:void(0);" class="category_breadcrumb_item" data-category_id="0">All</a></div>
                                <div id="category_item_selection" class="row register-grid"><div class="category_item category col-md-2 register-holder categories-holder col-sm-3 col-xs-6"><p> <i class="ion-archive"></i> a</p></div><div class="category_item category col-md-2 register-holder categories-holder col-sm-3 col-xs-6"><p> <i class="ion-archive"></i> fff</p></div></div>
                                <div class="pagination hidden-print alternate text-center categories"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="register_container" class="sales clearfix">


                    <div class="row register">
                        <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 no-padding-right no-padding-left">
                            <div class="register-box register-items-form">
                                <a tabindex="-1" href="#" class="dismissfullscreen hidden"><i class="ion-close-circled"></i></a>
                                <div class="item-form">
                                    <!-- Item adding form -->

                                    <form action="https://demo.phppointofsale.com/index.php/sales/add" id="add_item_form" class="form-inline" autocomplete="off" method="post" accept-charset="utf-8">
                                        <div class="input-group input-group-mobile contacts">
						<span class="input-group-addon">
							<a href="https://demo.phppointofsale.com/index.php/items/view/-1/1/sale" class="none add-new-item" title="New Item" id="new-item-mobile" tabindex="-1"><i class="icon ti-pencil-alt"></i> <span class="register-btn-text">New Item</span></a>						</span>
                                            <div class="input-group-addon register-mode sale-mode dropdown">
                                                <a href="https://demo.phppointofsale.com/index.php/#" class="none active" tabindex="-1" title="Sale" id="select-mode-1" data-target="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"><i class="icon ti-shopping-cart"></i> <span class="register-btn-text">Sale</span></a>					        <ul class="dropdown-menu sales-dropdown">
                                                    <li><a tabindex="-1" href="#" data-mode="return" class="change-mode">Return</a></li>
                                                    <li><a tabindex="-1" href="#" data-mode="store_account_payment" class="change-mode">Store Account Payment</a></li>
                                                </ul>
                                            </div>

						<span class="input-group-addon grid-buttons ">
							<a href="https://demo.phppointofsale.com/index.php/#" class="none show-grid" tabindex="-1" title="Show Grid"><i class="icon ti-layout"></i> <span class="register-btn-text">Show Grid</span></a>							<a href="https://demo.phppointofsale.com/index.php/#" class="none hide-grid hidden" tabindex="-1" title="Hide Grid"><i class="icon ti-layout"></i> <span class="register-btn-text">Hide Grid</span></a>						</span>
                                        </div>

                                        <div class="input-group contacts register-input-group">

                                            <!-- Css Loader  -->
                                            <div class="spinner" id="ajax-loader" style="display:none">
                                                <div class="rect1"></div>
                                                <div class="rect2"></div>
                                                <div class="rect3"></div>
                                            </div>

						<span class="input-group-addon">
							<a href="https://demo.phppointofsale.com/index.php/items/view/-1/1/sale" class="none add-new-item" title="New Item" id="new-item" tabindex="-1"><i class="icon ti-pencil-alt"></i></a>						</span>
                                            <span class="ui-helper-hidden-accessible" aria-live="polite" role="status"></span>



                                            <input autocomplete="off" id="item_id" name="keyword" onkeyup="autocomplet()"class="add-item-input pull-left ui-autocomplete-input" placeholder="Enter item name or scan barcode" type="text">
                                            <ul id="item_list_id"></ul>
                                            <label>QUANTITY:</label> <br>
                                            <input autocomplete="off" id="myqty" name="myqty" onkeyup="#"class="add-item-input pull-left ui-autocomplete-input"  type="number" min="1" value="1"><br>

                                            <input autocomplete="off" id="customerID" name="customerID" onkeyup="#"class="add-item-input pull-left ui-autocomplete-input"  type="text" value=<?php echo $resultText; ?><br>



                                            <button type="button" id="getCustomer" class="btn btn-block btn-primary" onclick="alert('Hello world!')">Sell All</button>



                                            <div class="input-group-addon register-mode sale-mode dropdown">
                                                <a href="https://demo.phppointofsale.com/index.php/#" class="none active" tabindex="-1" title="Sale" id="select-mode-2" data-target="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"><i class="icon ti-shopping-cart"></i>Sale</a>					        <ul class="dropdown-menu sales-dropdown">
                                                    <li><a tabindex="-1" href="#" data-mode="return" class="change-mode">Return</a></li>
                                                    <li><a tabindex="-1" href="#" data-mode="store_account_payment" class="change-mode">Store Account Payment</a></li>
                                                </ul>
                                            </div>

						<span class="input-group-addon grid-buttons ">
							<a href="https://demo.phppointofsale.com/index.php/#" class="none show-grid" tabindex="-1" title="Show Grid"><i class="icon ti-layout"></i> Show Grid</a>							<a href="https://demo.phppointofsale.com/index.php/#" class="none hide-grid hidden" tabindex="-1" title="Hide Grid"><i class="icon ti-layout"></i> Hide Grid</a>						</span>
                                        </div>


                                    </form>
                                </div>
                            </div>
                            <!-- Register Items. @contains : Items table -->
                            <div class="register-box register-items paper-cut">
                                <div class="register-items-holder">

                                    <table id="register" class="table table-hover">

                                        <thead>
                                        <tr class="register-items-header">
                                            <th></th>
                                            <th class="item_name_heading">Item Name</th>
                                            <th class="sales_price">Price</th>
                                            <th class="sales_quantity">Qty.</th>
                                            <th class="sales_discount">Disc %</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>

                                        <tbody class="register-item-content">
                                        <tr class="cart_content_area">
                                            <td colspan="6">
                                                <div class="text-center text-warning"> <h3>There are no items in the cart<span class="flatGreenc"> [Sales]</span></h3></div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>

                                <!-- End of Sales or Return Mode -->
                                <!-- End of Store Account Payment Mode -->

                            </div>
                            <!-- /.Register Items -->
                        </div>
                        <!-- /.Col-lg-8 @end of left Column -->

                        <!-- col-lg-4 @start of right Column -->
                        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 no-padding-right">
                            <div class="register-box register-right">

                                <!-- Sale Top Buttons  -->
                                <div class="sale-buttons">
                                    <!-- Extra links -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-more dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="ion-android-more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu sales-dropdown" role="menu">
                                            <li>
                                                <a href="https://demo.phppointofsale.com/index.php/sales/new_giftcard" class="" title="Sell GiftCard"><i class="ion-card"></i> Sell GiftCard</a>									</li>

                                            <li>
                                                <a href="https://demo.phppointofsale.com/index.php/sales/suspended" class="" title="Suspended Sales"><i class="ion-ios-list-outline"></i> Suspended Sales</a>								</li>

                                            <li>
                                                <a href="https://demo.phppointofsale.com/index.php/reports/sales_generator" class="" title="Search Sales"><i class="ion-search"></i> Search Sales</a>
                                            </li>


                                            <li>
                                                <a href="https://demo.phppointofsale.com/index.php/sales/change_mode/store_account_payment/1" class="" title="Store Account Payment"><i class="ion-toggle-filled"></i> Store Account Payment</a>									</li>


                                            <li>
                                                <a href="https://demo.phppointofsale.com/index.php/sales/batch_sale" class="none suspended_sales_btn" title="Batch sale"><i class="ion-bag"></i> Batch sale</a>								</li>



                                            <li>
                                                <a href="#look-up-receipt" class="look-up-receipt" data-toggle="modal"><i class="ion-document"></i> Lookup Receipt</a>						</li>

                                            <li><a href="https://demo.phppointofsale.com/index.php/sales/receipt/54" target="_blank" class="look-up-receipt" title="Lookup Receipt"><i class="ion-document"></i> Show last sale receipt</a></li>
                                            <li><a href="https://demo.phppointofsale.com/index.php/sales/customer_display/1" class="" target="_blank"><i class="ion-ios-monitor-outline"></i> Customer Facing Display</a></li>

                                            <li>
                                                <a href="https://demo.phppointofsale.com/index.php/sales/open_drawer" class="" target="_blank"><i class="ion-android-open"></i> Pop Open Cash Drawer</a>						</li>



                                            <li><a href="https://demo.phppointofsale.com/index.php/sales/register_add_subtract/add" class=""><i class="ion-cash"></i> Add cash to register</a></li>
                                            <li><a href="https://demo.phppointofsale.com/index.php/sales/register_add_subtract/subtract" class=""><i class="ion-log-out"></i> Remove cash from register</a></li>

                                            <li class="danger">
                                                <a href="https://demo.phppointofsale.com/index.php/sales/closeregister?continue=closeoutreceipt" class=""><i class="ion-close-circled"></i> Close Register</a>						</li>



                                        </ul>
                                    </div>

                                </div>

                                <!-- If customer is added to the sale -->

                                <div class="customer-form">

                                    <!-- if the customer is not set , show customer adding form -->
                                    <form action="https://demo.phppointofsale.com/index.php/sales/select_customer" id="select_customer_form" autocomplete="off" class="form-inline" method="post" accept-charset="utf-8">
                                        <div class="input-group contacts">
					<span class="input-group-addon">
						<a href="https://demo.phppointofsale.com/index.php/customers/view/-1/1" class="none" title="New Customer" id="new-customer" tabindex="-1"><i class="ion-person-add"></i></a>					</span>
                                            <span class="ui-helper-hidden-accessible" aria-live="polite" role="status"></span><input autocomplete="off" id="customer" name="customer" class="add-customer-input ui-autocomplete-input" placeholder="Type customer name..." type="text">
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="register-box register-summary paper-cut">

                                <!-- Tiers if its greater than 1 -->
                                <div class="tier-group">
                                    <a tabindex="-1" href="#" class="item-tier ">
                                        Item Tiers: <span class="selected-tier">None</span>
                                    </a>
                                    <div class="list-group item-tiers">
                                        <a tabindex="-1" href="#" data-value="0" class="list-group-item">None</a>
                                        <a tabindex="-1" href="#" data-value="1" class="list-group-item">sefds</a>
                                        <a tabindex="-1" href="#" data-value="2" class="list-group-item">erer</a>
                                    </div>
                                </div>


                                <!-- Tiers if its greater than 1 -->


                                <ul class="list-group">
                                    <li class="list-group-item global-discount-group">
                                        <div class="key">Discount all Items by Percent: 	</div>
                                        <div class="value pull-right">
                                            <a href="#" id="discount_all_percent" class="xeditable editable editable-click editable-empty" data-validate-number="false" data-placement="left" data-type="text" data-pk="1" data-name="discount_all_percent" data-url="https://demo.phppointofsale.com/index.php/sales/discount_all" data-title="Discount all Items by Percent" data-emptytext="Set Discount" data-placeholder="Set Discount">Set Discount</a>				</div>
                                    </li>

                                    <li class="list-group-item global-discount-group">
                                        <div class="key">Discount Entire Sale: 	</div>
                                        <div class="value pull-right">
                                            <a href="#" id="discount_all_flat" class="xeditable editable editable-click editable-empty" data-validate-number="false" data-placement="left" data-type="text" data-pk="1" data-name="discount_all_flat" data-url="https://demo.phppointofsale.com/index.php/sales/discount_all" data-title="Discount Entire Sale" data-emptytext="Set Discount" data-placeholder="Set Discount (% or fixed)">Set Discount</a>
                                        </div>
                                    </li>



                                    <li class="sub-total list-group-item">
                                        <span class="key">Sub Total:</span>
                                        <span class="value">$0.00</span>
                                    </li>



                                </ul>

                                <div class="amount-block">
                                    <div class="total amount">
                                        <div class="side-heading">
                                            Total				</div>
                                        <div class="amount total-amount" data-speed="1000" data-currency="$" data-decimals="2">
                                            $0.00				</div>
                                    </div>
                                    <div class="total amount-due">
                                        <div class="side-heading">
                                            Amount Due				</div>
                                        <div class="amount">
                                            $0.00				</div>
                                    </div>
                                </div>
                                <!-- ./amount block -->

                                <!-- Finish Sale Button Handler -->
                                <div id="finish_sale" class="finish-sale">
                                    <form action="https://demo.phppointofsale.com/index.php/sales/start_cc_processing?provider=" id="finish_sale_form" autocomplete="off" method="post" accept-charset="utf-8">
                                    </form>				</div>


                                <!-- End of complete sale button -->
                            </div>
                        </div>
                    </div>

                    <a href="#" class="pull-right visible-lg" id="keyboard_toggle">Keyboard shortcuts help</a>

                    <div id="keyboardhelp" style="display: none;background-color:white;padding:12px;" title="Keyboard shortcuts help">

                        <div>
                            <span>[F1]  =&gt; Start a New Sale</span><br>
                            <span>[F4]  =&gt; Completes current sale</span><br>
                            <span>[F2]  =&gt; Set focus on item search</span><br>
                            <span>[F7]  =&gt; Set focus on payment amount field</span><br>
                            <span>[ESC] =&gt; Cancel current sale</span><br>
                        </div>

                    </div>
                </div>

                <div class="modal fade look-up-receipt" id="look-up-receipt" role="dialog" aria-labelledby="lookUpReceipt" aria-hidden="true">
                    <div class="modal-dialog customer-recent-sales">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title" id="lookUpReceipt">Lookup Receipt</h4>
                            </div>
                            <div class="modal-body">
                                <form action="https://demo.phppointofsale.com/index.php/sales/receipt_validate" class="look-up-receipt-form" autocomplete="off" method="post" accept-charset="utf-8">

                                    <span class="text-danger text-center has-error look-up-receipt-error"></span>
                                    <input class="form-control text-center" name="sale_id" id="sale_id" placeholder="Sale ID" type="text">
                                    <input name="submit_look_up_receipt_form" value="Lookup Receipt" class="btn btn-block btn-primary" type="submit">
                                </form>	        </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <script type="text/javascript">
                </script>

                <script type="text/javascript" language="javascript">

                    var submitting = false;

                    $(document).ready(function(){

                        $( "#keyboard_toggle" ).click(function(e) {
                            e.preventDefault();
                            $( "#keyboardhelp" ).toggle();
                        });

                        $.fn.editable.defaults.mode = 'popup';

                        $('.fullscreen').on('click',function (e) {
                            e.preventDefault();
                            salesRecvFullScreen();
                            $.get('https://demo.phppointofsale.com/index.php/home/set_fullscreen/1');
                        });

                        $('.dismissfullscreen').on('click',function (e) {
                            e.preventDefault();
                            salesRecvDismissFullscren();
                            $.get('https://demo.phppointofsale.com/index.php/home/set_fullscreen/0');
                        });

                        $('.xeditable').editable({
                            validate: function(value) {
                                if ($.isNumeric(value) == '' && $(this).data('validate-number')) {
                                    return "Only numbers are allowed";
                                }
                            },
                            success: function(response, newValue) {
                                last_focused_id = $(this).attr('id');
                                $("#register_container").html(response);
                            }
                        });

                        $('.xeditable').on('shown', function(e, editable) {

                            $(this).closest('.table-responsive').css('overflow-x','hidden');

                            editable.input.postrender = function() {
                                //Set timeout needed when calling price_to_change.editable('show') (Not sure why)
                                setTimeout(function() {
                                    editable.input.$input.select();
                                }, 50);
                            };
                        });

                        $('.xeditable').on('hidden', function(e, editable) {
                            $(this).closest('.table-responsive').css('overflow-x','auto');
                        });

                        $('.xeditable').on('hidden', function(e, editable) {
                            last_focused_id = $(this).attr('id');
                            $('#'+last_focused_id).focus();
                            $('#'+last_focused_id).select();
                        });


                        // Look up receipt form handling

                        $('#look-up-receipt').on('shown.bs.modal', function() {
                            $('#sale_id').focus();
                        });

                        $('.look-up-receipt-form').on('submit',function(e){
                            e.preventDefault();

                            $('.look-up-receipt-form').ajaxSubmit({
                                success:function(response)
                                {
                                    if(response.success)
                                    {
                                        window.location.href = 'http://webpos-project.azurewebsites.net/index.php/sales/receipt/'+$("#sale_id").val();
                                    }
                                    else
                                    {
                                        $('.look-up-receipt-error').html(response.message);
                                    }
                                },
                                dataType:'json'
                            });
                        });

                        //Set Item tier after selection
                        $('.item-tiers a').on('click',function(e){
                            e.preventDefault();

                            $('.selected-tier').html($(this).text());
                            $.post('http://webpos-project.azurewebsites.net/index.php/sales/set_tier_id', {tier_id: $(this).data('value')}, function(response)
                            {
                                $('.item-tiers').slideToggle("fast", function()
                                {
                                    $("#register_container").html(response);
                                });
                            });
                        });

                        //Slide Toggle item tier options
                        $('.item-tier').on('click',function(e){
                            e.preventDefault();
                            $('.item-tiers').slideToggle("fast");
                        });


                        //Set Item tier after selection
                        $('.select-sales-persons a').on('click',function(e){
                            e.preventDefault();

                            $('.selected-sales-person').html($(this).text());
                            $.post('https://demo.phppointofsale.com/index.php/sales/set_sold_by_employee_id', {sold_by_employee_id: $(this).data('value')}, function()
                            {
                                $('.select-sales-persons').slideToggle("fast");
                                $("#register_container").load('https://demo.phppointofsale.com/index.php/sales/reload');
                            });
                        });

                        //Slide Toggle item tier options
                        $('.select-sales-person').on('click',function(e){
                            e.preventDefault();
                            $('.select-sales-persons').slideToggle("fast");
                        });

                        checkPaymentTypeGiftcard();
                        checkPaymentTypePoints();



                        $('#toggle_email_receipt').on('click',function(e) {
                            e.preventDefault();
                            var checkBoxes = $("#email_receipt");
                            checkBoxes.prop("checked", !checkBoxes.prop("checked")).trigger("change");
                            $(this).toggleClass('email-checked');

                        })

                        $('#email_receipt').change(function(e)
                        {
                            e.preventDefault();
                            $.post('https://demo.phppointofsale.com/index.php/sales/set_email_receipt', {email_receipt: $('#email_receipt').is(':checked') ? '1' : '0'});
                        });

                        // Customer form script
                        $('#item,#customer').click(function()
                        {
                            $(this).attr('value','');
                        });


                        // if #mode is changed
                        $('.change-mode').click(function(e){
                            e.preventDefault();
                            if ($(this).data('mode') == "store_account_payment") { // Hiding the category grid
                                $('#show_hide_grid_wrapper, #category_item_selection_wrapper').fadeOut();
                            }else { // otherwise, show the categories grid
                                $('#show_hide_grid_wrapper, #show_grid').fadeIn();
                                $('#hide_grid').fadeOut();
                            }
                            $.post('https://demo.phppointofsale.com/index.php/sales/change_mode', {mode: $(this).data('mode')}, function(response)
                            {
                                $("#register_container").html(response);
                            });
                        });


                        if (last_focused_id && last_focused_id != 'item')
                        {
                            $('#'+last_focused_id).focus();
                            $('#'+last_focused_id).select();
                        }
                        $(document).focusin(function(event)
                        {
                            last_focused_id = $(event.target).attr('id');
                        });


                        $('#select_customer_form').ajaxForm({target: "#register_container", beforeSubmit: salesBeforeSubmit});
                        $('#add_item_form').ajaxForm({target: "#register_container", beforeSubmit: salesBeforeSubmit, success: itemScannedSuccess});

                        $( "#item" ).autocomplete({
                            source: 'https://demo.phppointofsale.com/index.php/sales/item_search',
                            delay: 150,
                            autoFocus: false,
                            minLength: 0,
                            select: function( event, ui )
                            {
                                $( "#item" ).val(ui.item.value);
                                $('#add_item_form').ajaxSubmit({target: "#register_container", beforeSubmit: salesBeforeSubmit, success: itemScannedSuccess});

                            },
                        }).data("ui-autocomplete")._renderItem = function (ul, item) {
                            return $("<li class='item-suggestions'></li>")
                                .data("item.autocomplete", item)
                                .append('<a class="suggest-item"><div class="item-image">' +
                                    '<img src="' + item.image + '" alt="">' +
                                    '</div>' +
                                    '<div class="details">' +
                                    '<div class="name">' +
                                    item.label +
                                    '</div>' +
                                    '<span class="attributes">' +
                                    'Category' + ' : <span class="value">' + (item.category ? item.category : "None") + '</span>' +
                                    '</span>' +
                                    '</div>')
                                .appendTo(ul);
                        };





                        $( "#customer" ).autocomplete({
                            source: 'https://demo.phppointofsale.com/index.php/sales/customer_search',
                            delay: 150,
                            autoFocus: false,
                            minLength: 0,
                            select: function( event, ui )
                            {
                                $.post('https://demo.phppointofsale.com/index.php/sales/select_customer', {customer: ui.item.value }, function(response)
                                {
                                    $("#register_container").html(response);
                                });
                            },
                        }).data("ui-autocomplete")._renderItem = function (ul, item) {
                            return $("<li class='customer-badge suggestions'></li>")
                                .data("item.autocomplete", item)
                                .append('<a class="suggest-item"><div class="avatar">' +
                                    '<img src="' + item.avatar + '" alt="">' +
                                    '</div>' +
                                    '<div class="details">' +
                                    '<div class="name">' +
                                    item.label +
                                    '</div>' +
                                    '<span class="email">' +
                                    item.subtitle +
                                    '</span>' +
                                    '</div></a>')
                                .appendTo(ul);
                        };



                        $('#customer').blur(function()
                        {
                            $(this).attr('value',"Type customer name...");
                        });

                        $('#change_sale_date_enable').is(':checked') ? $("#change_sale_date_picker").show() : $("#change_sale_date_picker").hide();

                        $('#change_sale_date_enable').click(function() {
                            if( $(this).is(':checked')) {
                                $("#change_sale_date_picker").show();
                            } else {
                                $("#change_sale_date_picker").hide();
                            }
                        });

                        $('#comment').change(function()
                        {
                            $.post('https://demo.phppointofsale.com/index.php/sales/set_comment', {comment: $('#comment').val()});
                        });

                        $('#show_comment_on_receipt').change(function()
                        {
                            $.post('https://demo.phppointofsale.com/index.php/sales/set_comment_on_receipt', {show_comment_on_receipt:$('#show_comment_on_receipt').is(':checked') ? '1' : '0'});
                        });


                        date_time_picker_field($("#change_sale_date"), JS_DATE_FORMAT + " "+JS_TIME_FORMAT);

                        $("#change_sale_date").on("dp.change", function(e) {
                            $.post('https://demo.phppointofsale.com/index.php/sales/set_change_sale_date', {change_sale_date: $('#change_sale_date').val()});
                        });

                        //Input change
                        $("#change_sale_date").change(function(){
                            $.post('https://demo.phppointofsale.com/index.php/sales/set_change_sale_date', {change_sale_date: $('#change_sale_date').val()});
                        });

                        $('#change_sale_date_enable').change(function()
                        {
                            $.post('https://demo.phppointofsale.com/index.php/sales/set_change_sale_date_enable', {change_sale_date_enable: $('#change_sale_date_enable').is(':checked') ? '1' : '0'});
                        });


                        $('.delete-item, .delete-payment, #delete_customer, .delete-tax').click(function(event)
                        {
                            event.preventDefault();
                            $("#register_container").load($(this).attr('href'));
                        });


                        $('#redeem_discount,#unredeem_discount').click(function(event)
                        {
                            event.preventDefault();
                            $("#register_container").load($(this).attr('href'));
                        });

                        //Layaway Sale
                        $("#layaway_sale_button").click(function(e)
                        {
                            e.preventDefault();
                            bootbox.confirm("Are you sure you want to suspend this sale?", function(result)
                            {
                                if(result)
                                {
                                    $.post('https://demo.phppointofsale.com/index.php/sales/set_comment', {comment: $('#comment').val()}, function() {
                                        $("#register_container").load('https://demo.phppointofsale.com/index.php/sales/suspend');
                                    });
                                }
                            });
                        });

                        //Estimate Sale
                        $("#estimate_sale_button").click(function(e)
                        {
                            e.preventDefault();
                            bootbox.confirm("Are you sure you want to suspend this sale?", function(result)
                            {
                                if(result)
                                {
                                    $.post('https://demo.phppointofsale.com/index.php/sales/set_comment', {comment: $('#comment').val()}, function() {
                                        $("#register_container").load('https://demo.phppointofsale.com/index.php/sales/suspend/2');
                                    });
                                }
                            });
                        });

                        //Cancel Sale
                        $("#cancel_sale_button").click(function(e)
                        {
                            e.preventDefault();
                            bootbox.confirm("Are you sure you want to clear this sale? All items will cleared.", function(result)
                            {
                                if (result)
                                {
                                    $('#cancel_sale_form').ajaxSubmit({target: "#register_container", beforeSubmit: salesBeforeSubmit});
                                }
                            });
                        });
                        //Select Payment
                        $('.select-payment').on('click',selectPayment);


                        function selectPayment(e)
                        {
                            e.preventDefault();
                            $.post('https://demo.phppointofsale.com/index.php/sales/set_selected_payment', {payment: $(this).data('payment')});
                            $('#payment_types').val($(this).data('payment'));
                            // start_cc_processing
                            $('.select-payment').removeClass('active');
                            $(this).addClass('active');
                            $("#amount_tendered").focus();
                            $("#amount_tendered").select();
                            $("#amount_tendered").attr('placeholder','');

                            checkPaymentTypeGiftcard();
                            checkPaymentTypePoints();
                        }

                        //Add payment to the sale
                        $("#add_payment_button").click(function(e)
                        {
                            e.preventDefault();

                            $('#add_payment_form').ajaxSubmit({target: "#register_container", beforeSubmit: salesBeforeSubmit});
                        });

                        //Add payment to the sale when hit enter on amount tendered input
                        $('#amount_tendered').bind('keypress', function(e) {
                            if(e.keyCode==13)
                            {
                                e.preventDefault();

                                //Quick complete possible
                                if ($("#finish_sale_alternate_button").is(":visible"))
                                {
                                    $('#add_payment_form').ajaxSubmit({target: "#register_container", beforeSubmit: salesBeforeSubmit, complete: function()
                                    {
                                        $('#finish_sale_button').trigger('click');
                                    }});
                                }
                                else
                                {
                                    $('#add_payment_form').ajaxSubmit({target: "#register_container", beforeSubmit: salesBeforeSubmit});
                                }
                            }
                        });

                        //Select all text in the input when input is clicked
                        $("input[type=text]").not(".description").click(function() {
                            $(this).select();
                        });


                        // Finish Sale button
                        $("#finish_sale_button").click(function(e)
                        {
                            e.preventDefault();

                            var confirm_messages = [];

                            //Prevent double submission of form
                            $("#finish_sale_button").hide();
                            $('#grid-loader').show();




                            if (confirm_messages.length)
                            {
                                bootbox.confirm(confirm_messages.join("<br />"), function(result)
                                {
                                    if (result)
                                    {
                                        finishSale();
                                    }
                                    else
                                    {
                                        //Bring back submit and unmask if fail to confirm
                                        $("#finish_sale_button").show();
                                        $('#grid-loader').hide();
                                    }
                                });
                            }
                            else
                            {
                                finishSale();
                            }
                        });


                        if ($("#payment_types").val() == "Gift Card")
                        {
                            $('#finish_sale_alternate_button').removeClass('hidden');
                            $('#add_payment_button').addClass('hidden');
                        }
                        else if($("#payment_types").val() == "Points")
                        {
                            $('#finish_sale_alternate_button').addClass('hidden');
                            $('#add_payment_button').removeClass('hidden');
                        }
                        else
                        {
                            if ($('#amount_tendered').val()>=0.00)
                            {
                                $('#finish_sale_alternate_button').removeClass('hidden');
                                $('#add_payment_button').addClass('hidden');
                            }
                            else
                            {
                                $('#finish_sale_alternate_button').addClass('hidden');
                                $('#add_payment_button').removeClass('hidden');
                            }
                        }


                        $('#amount_tendered').on('input',function(){
                            if ($("#payment_types").val() == "Gift Card")
                            {
                                $('#finish_sale_alternate_button').removeClass('hidden');
                                $('#add_payment_button').addClass('hidden');
                            }
                            else if($("#payment_types").val() == "Points")
                            {
                                $('#finish_sale_alternate_button').addClass('hidden');
                                $('#add_payment_button').removeClass('hidden');
                            }
                            else
                            {
                                if ($('#amount_tendered').val()>=0.00)
                                {
                                    $('#finish_sale_alternate_button').removeClass('hidden');
                                    $('#add_payment_button').addClass('hidden');
                                }
                                else
                                {
                                    $('#finish_sale_alternate_button').addClass('hidden');
                                    $('#add_payment_button').removeClass('hidden');
                                }
                            }

                        });

                        $('#finish_sale_alternate_button').on('click',function(e){
                            e.preventDefault();
                            $('#add_payment_form').ajaxSubmit({target: "#register_container", beforeSubmit: salesBeforeSubmit, complete: function()
                            {
                                $('#finish_sale_button').trigger('click');
                            }});
                        });


                        // Show or hide item grid
                        $("#show_grid, .show-grid").on('click',function(e)
                        {
                            e.preventDefault();
                            $("#category_item_selection_wrapper").slideDown();

                            $('.show-grid').addClass('hidden');
                            $('.hide-grid').removeClass('hidden');
                        });

                        $("#hide_grid,#hide_grid_top, .hide-grid").on('click',function(e)
                        {
                            e.preventDefault();
                            $("#category_item_selection_wrapper").slideUp();

                            $('.hide-grid').addClass('hidden');
                            $('.show-grid').removeClass('hidden');
                        });

                        // Save credit card info
                        $('#save_credit_card_info').change(function()
                        {
                            $.post('https://demo.phppointofsale.com/index.php/sales/set_save_credit_card_info', {save_credit_card_info:$('#save_credit_card_info').is(':checked') ? '1' : '0'});
                        });

                        // Use saved cc info
                        $('#use_saved_cc_info').change(function()
                        {
                            $.post('https://demo.phppointofsale.com/index.php/sales/set_use_saved_cc_info', {use_saved_cc_info:$('#use_saved_cc_info').is(':checked') ? '1' : '0'});
                        });

                        // Prompt for cc info (EMV integration only)
                        $('#prompt_for_card').change(function()
                        {
                            $.post('https://demo.phppointofsale.com/index.php/sales/set_prompt_for_card', {prompt_for_card:$('#prompt_for_card').is(':checked') ? '1' : '0'});
                        });

                        $('.cart-number').html(0);


                    });
                    // end of document ready


                    // Re-usable Functions

                    function checkPaymentTypeGiftcard()
                    {
                        if ($("#payment_types").val() == "Gift Card")
                        {
                            $("#amount_tendered").val('');
                            $("#amount_tendered").attr('placeholder',"Swipe\/Type gift card #");

                            $("#amount_tendered").focus();

                            giftcard_swipe_field($("#amount_tendered"));
                        }
                    }

                    function checkPaymentTypePoints()
                    {
                        if ($("#payment_types").val() == "Points")
                        {
                            $("#amount_tendered").val('');
                            $("#amount_tendered").attr('placeholder',"Enter amount of points to use");

                            $("#amount_tendered").focus();

                        }
                    }

                    function salesBeforeSubmit(formData, jqForm, options)
                    {
                        if (submitting)
                        {
                            return false;
                        }
                        submitting = true;
                        $('.cart-number').html(0);
                        $("#ajax-loader").show();
                        $("#add_payment_button").hide();
                        $("#finish_sale_button").hide();
                    }

                    function itemScannedSuccess(responseText, statusText, xhr, $form)
                    {
                        setTimeout(function(){$('#item').focus();}, 10);
                    }

                    function finishSale()
                    {
                        if ($("#comment").val())
                        {
                            $.post('https://demo.phppointofsale.com/index.php/sales/set_comment', {comment: $('#comment').val()}, function()
                            {
                                $('#finish_sale_form').submit();
                            });
                        }
                        else
                        {
                            $('#finish_sale_form').submit();
                        }

                    }
                </script></div>

        </div>

        <script type="text/javascript">
            $(document).ready(function()
            {

                $(window).load(function()
                {
                    setTimeout(function()
                    {
                        $('.dismissfullscreen').click();

                    }, 0);
                });

                var current_category_id = null;
                var current_tag_id = null;

                var categories_stack = [{category_id: 0, name: "All"}];

                function updateBreadcrumbs()
                {
                    var breadcrumbs = '';
                    for(var k = 0; k< categories_stack.length;k++)
                    {
                        var category_name = categories_stack[k].name;
                        var category_id = categories_stack[k].category_id;

                        breadcrumbs += (k != 0 ? ' &raquo ' : '' )+'<a href="javascript:void(0);"class="category_breadcrumb_item" data-category_id = "'+category_id+'">'+category_name+"</a>";
                    }

                    $("#grid_breadcrumbs").html(breadcrumbs);
                }

                $(document).on('click', ".category_breadcrumb_item",function()
                {
                    var clicked_category_id = $(this).data('category_id');
                    var categories_size = categories_stack.length;
                    current_category_id = clicked_category_id;

                    for(var k = 0; k< categories_size; k++)
                    {
                        var current_category = categories_stack[k]
                        var category_id = current_category.category_id;

                        if (category_id == clicked_category_id)
                        {
                            if (categories_stack[k+1] != undefined)
                            {
                                categories_stack.splice(k+1,categories_size - k - 1);
                            }
                            break;
                        }
                    }

                    if (current_category_id != 0)
                    {
                        loadCategoriesAndItems(current_category_id,0);
                    }
                    else
                    {
                        loadTopCategories();
                    }
                });

                function loadTopCategories()
                {
                    $('#grid-loader').show();
                    $.get('https://demo.phppointofsale.com/index.php/sales/categories', function(json)
                    {
                        processCategoriesResult(json);
                    }, 'json');
                }

                function loadTags()
                {
                    $('#grid-loader').show();
                    $.get('https://demo.phppointofsale.com/index.php/sales/tags', function(json)
                    {
                        processTagsResult(json);
                    }, 'json');
                }

                function loadCategoriesAndItems(category_id, offset)
                {
                    $('#grid-loader').show();
                    current_category_id = category_id;
                    //Get sub categories then items
                    $.get('https://demo.phppointofsale.com/index.php/sales/categories_and_items/'+current_category_id+'/'+offset, function(json)
                    {
                        processCategoriesAndItemsResult(json);
                    }, "json");
                }

                function loadTagItems(tag_id, offset)
                {
                    $('#grid-loader').show();
                    current_tag_id = tag_id;
                    //Get sub categories then items
                    $.get('https://demo.phppointofsale.com/index.php/sales/tag_items/'+tag_id+'/'+offset, function(json)
                    {
                        processTagItemsResult(json);
                    }, "json");
                }

                $(document).on('click', ".pagination.categories a", function(event)
                {
                    $('#grid-loader').show();
                    event.preventDefault();
                    var offset = !is_int($(this).attr('href').substring($(this).attr('href').lastIndexOf('/')+1)) ? 0 : $(this).attr('href').substring($(this).attr('href').lastIndexOf('/') + 1);

                    $.get('https://demo.phppointofsale.com/index.php/sales/categories/0/'+offset, function(json)
                    {
                        processCategoriesResult(json);

                    }, "json");
                });

                $(document).on('click', ".pagination.tags a", function(event)
                {
                    $('#grid-loader').show();
                    event.preventDefault();
                    var offset = !is_int($(this).attr('href').substring($(this).attr('href').lastIndexOf('/')+1)) ? 0 : $(this).attr('href').substring($(this).attr('href').lastIndexOf('/') + 1);

                    $.get('https://demo.phppointofsale.com/index.php/sales/tags/'+offset, function(json)
                    {
                        processTagsResult(json);

                    }, "json");
                });


                $(document).on('click', ".pagination.categoriesAndItems a", function(event)
                {
                    $('#grid-loader').show();
                    event.preventDefault();
                    var offset = !is_int($(this).attr('href').substring($(this).attr('href').lastIndexOf('/')+1)) ? 0 : $(this).attr('href').substring($(this).attr('href').lastIndexOf('/') + 1);
                    loadCategoriesAndItems(current_category_id, offset);
                });

                $(document).on('click', ".pagination.items a", function(event)
                {
                    $('#grid-loader').show();
                    event.preventDefault();
                    var offset = !is_int($(this).attr('href').substring($(this).attr('href').lastIndexOf('/')+1)) ? 0 : $(this).attr('href').substring($(this).attr('href').lastIndexOf('/') + 1);
                    loadTagItems(current_tag_id, offset);
                });

                $('#category_item_selection_wrapper').on('click','.category_item.category', function(event)
                {
                    event.preventDefault();
                    current_category_id = $(this).data('category_id');
                    var category_obj = {category_id: current_category_id, name: $(this).find('p').text()};
                    categories_stack.push(category_obj);
                    loadCategoriesAndItems($(this).data('category_id'), 0);
                });

                $('#category_item_selection_wrapper').on('click','.category_item.tag', function(event)
                {
                    event.preventDefault();
                    current_tag_id = $(this).data('tag_id');
                    loadTagItems($(this).data('tag_id'), 0);
                });

                $('#category_item_selection_wrapper').on('click','#by_category', function(event)
                {
                    current_category_id = null;
                    current_tag_id = null;
                    $("#grid_breadcrumbs").html('');
                    $('.btn-grid').removeClass('active');
                    $(this).addClass('active');
                    categories_stack = [{category_id: 0, name: "All"}];
                    loadTopCategories();
                });

                $('#category_item_selection_wrapper').on('click','#by_tag', function(event)
                {
                    current_category_id = null;
                    current_tag_id = null;
                    $('.btn-grid').removeClass('active');
                    $(this).addClass('active');
                    $("#grid_breadcrumbs").html('');
                    loadTags();
                });


                $('#category_item_selection_wrapper').on('click','.category_item.item', function(event)
                {
                    $('#grid-loader').show();
                    event.preventDefault();
                    $.post('https://demo.phppointofsale.com/index.php/sales/add', {item: $(this).data('id') }, function(response)
                    {
                        show_feedback('success', "You have successfully added item", "Success");			$('#grid-loader').hide();
                        $("#register_container").html(response);
                        $('.show-grid').addClass('hidden');
                        $('.hide-grid').removeClass('hidden');
                    });
                });

                $("#category_item_selection_wrapper").on('click', '#back_to_categories', function(event)
                {
                    $('#grid-loader').show();
                    event.preventDefault();

                    //Remove element from stack
                    categories_stack.pop();

                    //Get current last element
                    var back_category = categories_stack[categories_stack.length - 1];

                    if (back_category.category_id != 0)
                    {
                        loadCategoriesAndItems(back_category.category_id,0);
                    }
                    else
                    {
                        loadTopCategories();
                    }
                });

                $("#category_item_selection_wrapper").on('click', '#back_to_tags', function(event)
                {
                    $('#grid-loader').show();
                    event.preventDefault();
                    loadTags();
                });


                function processCategoriesResult(json)
                {

                    $("#category_item_selection_wrapper .pagination").removeClass('categoriesAndItems').removeClass('tags').removeClass('items').addClass('categories');
                    $("#category_item_selection_wrapper .pagination").html(json.pagination);

                    $("#category_item_selection").html('');

                    for(var k=0;k<json.categories.length;k++)
                    {
                        var category_item = $("<div/>").attr('class', 'category_item category col-md-2 register-holder categories-holder col-sm-3 col-xs-6').data('category_id',json.categories[k].id).append('<p> <i class="ion-archive"></i> '+json.categories[k].name+'</p>');
                        $("#category_item_selection").append(category_item);
                    }

                    updateBreadcrumbs();
                    $('#grid-loader').hide();
                }

                function processTagsResult(json)
                {
                    $("#category_item_selection_wrapper .pagination").removeClass('categoriesAndItems').removeClass('categories').removeClass('items').addClass('tags');
                    $("#category_item_selection_wrapper .pagination").html(json.pagination);

                    $("#category_item_selection").html('');

                    for(var k=0;k<json.tags.length;k++)
                    {
                        var tag_item = $("<div/>").attr('class', 'category_item tag col-md-2 register-holder tags-holder col-sm-3 col-xs-6').data('tag_id',json.tags[k].id).append('<p> <i class="ion-pricetags"></i> '+json.tags[k].name+'</p>');
                        $("#category_item_selection").append(tag_item);
                    }

                    $('#grid-loader').hide();
                }

                function processCategoriesAndItemsResult(json)
                {
                    $("#category_item_selection").html('');
                    var back_to_categories_button = $("<div/>").attr('id', 'back_to_categories').attr('class', 'category_item register-holder no-image back-to-categories col-md-2 col-sm-3 col-xs-6 ').append('<p>&laquo; '+"Back To Categories"+'</p>');
                    $("#category_item_selection").append(back_to_categories_button);

                    for(var k=0;k<json.categories_and_items.length;k++)
                    {
                        if (json.categories_and_items[k].type == 'category')
                        {
                            var category_item = $("<div/>").attr('class', 'category_item category col-md-2 register-holder categories-holder col-sm-3 col-xs-6').data('category_id',json.categories_and_items[k].id).append('<p> <i class="ion-archive"></i> '+json.categories_and_items[k].name+'</p>');
                            $("#category_item_selection").append(category_item);
                        }
                        else if (json.categories_and_items[k].type == 'item')
                        {
                            var image_src = json.categories_and_items[k].image_src;
                            var prod_image = "";
                            var image_class = "no-image";
                            var item_parent_class = "";
                            if (image_src != '' ) {
                                var item_parent_class = "item_parent_class";
                                var prod_image = '<img src="'+image_src+'" alt="" />';
                                var image_class = "";
                            }

                            var item = $("<div/>").attr('class', 'category_item item col-md-2 register-holder ' + image_class + ' col-sm-3 col-xs-6  '+item_parent_class).attr('data-id', json.categories_and_items[k].id).append(prod_image+'<p>'+json.categories_and_items[k].name+'<br /><span class="text-bold">'+(json.categories_and_items[k].price ? '('+(json.categories_and_items[k].different_price ? '<span style="text-decoration: line-through;">'+json.categories_and_items[k].regular_price+'</span> ': '')+json.categories_and_items[k].price+')' : '')+'</span></p>');
                            $("#category_item_selection").append(item);

                        }
                    }

                    $("#category_item_selection_wrapper .pagination").removeClass('categories').removeClass('tags').removeClass('items').addClass('categoriesAndItems');
                    $("#category_item_selection_wrapper .pagination").html(json.pagination);

                    updateBreadcrumbs();
                    $('#grid-loader').hide();

                }

                function processTagItemsResult(json)
                {
                    $("#category_item_selection").html('');
                    var back_to_categories_button = $("<div/>").attr('id', 'back_to_tags').attr('class', 'category_item register-holder no-image back-to-categories col-md-2 col-sm-3 col-xs-6 ').append('<p>&laquo; '+"Back to tags"+'</p>');
                    $("#category_item_selection").append(back_to_categories_button);

                    for(var k=0;k<json.items.length;k++)
                    {
                        var image_src = json.items[k].image_src;
                        var prod_image = "";
                        var image_class = "no-image";
                        var item_parent_class = "";
                        if (image_src != '' ) {
                            var item_parent_class = "item_parent_class";
                            var prod_image = '<img src="'+image_src+'" alt="" />';
                            var image_class = "";
                        }

                        var item = $("<div/>").attr('class', 'category_item item col-md-2 register-holder ' + image_class + ' col-sm-3 col-xs-6  '+item_parent_class).attr('data-id', json.items[k].id).append(prod_image+'<p>'+json.items[k].name+'<br /> <span class="text-bold">'+(json.items[k].price ? '('+(json.items[k].different_price ? '<span style="text-decoration: line-through;">'+json.items[k].regular_price+'</span> ': '')+json.items[k].price+')' : '')+'</span></p>');
                        $("#category_item_selection").append(item);

                    }

                    $("#category_item_selection_wrapper .pagination").removeClass('categories').removeClass('tags').removeClass('categoriesAndItems').addClass('items');
                    $("#category_item_selection_wrapper .pagination").html(json.pagination);

                    $('#grid-loader').hide();
                }

                loadTopCategories();
            });

            var last_focused_id = null;

            setTimeout(function(){$('#item').focus();}, 10);
        </script>


        <script>
            //Keyboard events...only want to load once
            $(document).keyup(function(event)
            {
                var mycode = event.keyCode;

                //tab
                if (mycode == 9)
                {
                    var $tabbed_to = $(event.target);

                    if ($tabbed_to.hasClass('xeditable'))
                    {
                        $tabbed_to.trigger('click').editable('show');
                    }
                }

            });

            $(document).keydown(function(event)
            {
                var mycode = event.keyCode;

                //F2
                if (mycode == 113)
                {
                    $("#item").focus();
                }

                //F4
                if (mycode == 115)
                {
                    event.preventDefault();
                    $("#finish_sale_alternate_button").click();
                    $("#finish_sale_button").click();
                }

                //F7
                if (mycode == 118)
                {
                    event.preventDefault();
                    $("#amount_tendered").focus();
                    $("#amount_tendered").select();
                }

                //ESC
                if (mycode == 27)
                {
                    event.preventDefault();
                    $("#cancel_sale_button").click();
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
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"653e27187f","applicationID":"2375780","transactionName":"bwdVbUoEVhcAAUUMDlZNdlpMDFcKTjFQCQRLTV5XXABA","queueTime":0,"applicationTime":136,"atts":"Q0BWGwIeRRk=","errorBeacon":"bam.nr-data.net","agent":""}</script>
<div style="width: 5px; z-index: 999999; cursor: default; position: fixed; top: 0px; left: 84px; height: 659px; display: block; opacity: 0;" class="nicescroll-rails nicescroll-rails-vr" id="ascrail2000"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 5px; height: 561px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div></div><div style="height: 5px; z-index: 999999; top: 654px; left: 0px; position: fixed; cursor: default; display: block; width: 84px; opacity: 0;" class="nicescroll-rails nicescroll-rails-hr" id="ascrail2000-hr"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 5px; width: 199px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; left: 0px;"></div></div><ul style="display: none;" tabindex="0" id="ui-id-1" class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all"></ul><ul style="display: none;" tabindex="0" id="ui-id-2" class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all"></ul></body></html>