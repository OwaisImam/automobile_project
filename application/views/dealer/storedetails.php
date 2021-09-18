<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Store Details</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description">
    <meta content="Themesdesign" name="author">
    <link rel="shortcut icon" href="assets\images\favicon.ico">

    <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets\css\metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets\css\icons.css" rel="stylesheet" type="text/css">
    <link href="assets\css\style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="javascript:void(0);" class="logo">
                    <span class="logo-light">
                        <img src="<?php echo base_url(); ?>assets\images\dealer\logo.png">
                    </span>
                    <span class="logo-sm">
                        <img src="<?php echo base_url(); ?>assets\images\dealer\favicon.png">
                    </span>
                </a>
            </div>


            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">


                    <!-- full screen -->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                            <i class="mdi mdi-arrow-expand-all noti-icon"></i>
                        </a>
                    </li>

                    <!-- notification -->
                    <li class="dropdown notification-list list-inline-item">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline noti-icon"></i>
                            <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                Notifications
                            </h6>
                            <div class="slimscroll notification-item-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                    <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                    <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is a long established fact that a reader will</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                    <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                </a>

                            </div>
                            <!-- All-->
                            <a href="<?php echo site_url('dealer/notifications') ?>" class="dropdown-item text-center notify-all text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>





                    <li class="dropdown notification-list list-inline-item">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?php echo base_url(); ?>assets\images\dealer\users\user-3.jpg" alt="user" class="rounded-circle">

                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="fas fa-user-tie"></i> My Profile</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-store-alt"></i>My Digital Store</a>
                                <a class="dropdown-item" href="<?php echo site_url('dealer/activitylog') ?>"><i class="fas fa-user-clock"></i> Activity Log</a>
                                <a class="dropdown-item" href="<?php echo site_url('dealer/subscription') ?>"><i class="mdi mdi-account-circle"></i> Subscription</a>
                                <a class="dropdown-item" href="#"><i class="far fa-sun"></i> Settings</a>
                                <a class="dropdown-item" href="<?php echo site_url('dealer/help') ?>"><i class="mdi mdi-help-rhombus"></i> Help</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="<?php echo site_url('dealer/login') ?>"><i class="mdi mdi-logout text-danger"></i> Logout</a>
                            </div>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                    <li class="d-none d-md-inline-block">
                        <form role="search" class="app-search">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="Search..">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title align-items-center">Menu</li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-user-tie"></i><span> My Business Profile <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="<?php echo site_url('dealer/businessdetails') ?>"> Business Details</a></li>
                                <li><a href="<?php echo site_url('dealer/storedetails') ?>"> Store Details</a></li>
                                <li><a href="<?php echo site_url('dealer/bankdetails') ?>"> Bank A/c Details</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-grip-horizontal"></i><span> Product Catalogue <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="<?php echo site_url('dealer/twowheelers') ?>"> Two-Wheelers</a></li>
                                <li><a href="<?php echo site_url('dealer/vehicleservice') ?>"> Vehicle Service</a></li>
                                <li><a href="<?php echo site_url('dealer/twowaccessories') ?>">2W Accessories</a></li>
                                <li><a href="<?php echo site_url('dealer/twowspareparts') ?>"> 2W Spare Parts</a></li>
                                <li><a href="<?php echo site_url('dealer/preownedvehicles') ?>"> Pre-Owned Vehicles</a></li>
                                <li><a href="<?php echo site_url('dealer/twowinsurance') ?>"> 2W Insurance</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-copy"></i><span> Enquiry Form <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="<?php echo site_url('dealer/saleenquiry') ?>">Vehicle Enquiry</a></li>
                                <li><a href="<?php echo site_url('dealer/serviceenquiry') ?>"> Service Job Card</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo site_url('dealer/myorders') ?>" class="waves-effect"><i class="fas fa-shopping-cart"></i><span> My Orders </span></a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('dealer/receivables') ?>" class="waves-effect"><i class="fas fa-money-bill"></i><span> Receivables </span></a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('dealer/dashboard') ?>" class="waves-effect"><i class="fas fa-chart-line"></i><span> Dashboard </span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('dealer/planner') ?>" class="waves-effect"><i class="fas fa-tasks"></i><span> Planner </span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-bullhorn"></i><span> Promotion <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="<?php echo site_url('dealer/advertise') ?>">Advertise</a></li>
                                <li><a href="<?php echo site_url('dealer/broadcast') ?>"> Broadcast</a></li>
                                <li><a href="<?php echo site_url('dealer/communications') ?>"> Communications</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="<?php echo site_url('dealer/businesscard') ?>" class="waves-effect"><i class="fas fa-id-card-alt"></i><span> Business Card </span></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('dealer/testimonial') ?>" class="waves-effect"><i class="far fa-smile"></i><span> Testimonials </span></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('dealer/employeeaccess') ?>" class="waves-effect"><i class="fas fa-users"></i><span> Employee Access </span></a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -left -->
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="mt-0 header-title">Store Details</h4>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('dealer/userhome') ?>">Home</a></li>
                                    <li class="breadcrumb-item active">Store Details</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div>
                    <!-- end page-title -->
                    <p>Get started with your digital stores by giving the details below</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <form class="" method="post" action="<?php echo site_url('dealer/storedetails') ?>">
                                        <div class="form-group">
                                            <div class="form-group">
                                                        <div class="form-group">
                                                            <label>Home Delivery Availability</label>
                                                            
                                                                                <div class="checkbox switcher">
                                                                                    <div class="checkbox switcher">
                                                                                        <div class="checkbox switcher">
                                                                                            <div class="checkbox switcher">
                                                                                                <div class="checkbox switcher">
                                                                                                    <label for="homedelievery">
                                                                                                        <input type="checkbox" id="homedelievery" name="homedelievery" class="form-control">
                                                                                                        <span><small></small></span>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                        
                                                        </div>

                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <div class="form-group">
                                                                    <label>Pick Up & Drop Facility</label>
                                                                    <div>
                                                                        <div>
                                                                            <div>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="checkbox switcher">
                                                                                            <div class="checkbox switcher">
                                                                                                <div class="checkbox switcher">
                                                                                                    <div class="checkbox switcher">
                                                                                                        <div class="checkbox switcher">
                                                                                                            <label for="pickup_drop">
                                                                                                                <input type="checkbox" id="pickup_drop" name="pickup_drop" class="form-control">
                                                                                                                <span><small></small></span>
                                                                                                            </label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>Sunday</label>

                                                                            <div class="checkbox switcher d-flex align-items-center">
                                                                                <div class="checkbox switcher d-flex align-items-center">
                                                                                    <div class="checkbox switcher d-flex align-items-center">
                                                                                        <div class="checkbox switcher d-flex align-items-center">
                                                                                            <div class="checkbox switcher d-flex align-items-center">
                                                                                                <label for="sun_delievery">
                                                                                                    <input type="checkbox" id="sun_delievery" name="sun_delievery" class="form-control" checked>
                                                                                                    <span><small></small></span>
                                                                                                </label>
                                                                                                <div class="d-flex align-items-center"><input type="time" name="sun_from" id="sun_from"> -- <input type="time" name="sun_to" id="sun_to"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <div class="form-group">
                                                                                <div class="form-group">
                                                                                    <label>Monday</label>
                                                                                    <div class="checkbox switcher d-flex align-items-center">
                                                                                        <div class="checkbox switcher d-flex align-items-center">
                                                                                            <div class="checkbox switcher d-flex align-items-center">
                                                                                                <div class="checkbox switcher d-flex align-items-center">
                                                                                                    <div class="checkbox switcher d-flex align-items-center">
                                                                                                        <label for="mon_delievery">
                                                                                                            <input type="checkbox" id="mon_delievery" name="mon_delievery" class="form-control" checked>
                                                                                                            <span><small></small></span>
                                                                                                        </label>
                                                                                                        <div class="d-flex align-items-center">
                                                                                                            <input type="date" name="mon_from" id="mon_from"> 
                                                                                                            -- 
                                                                                                            <input type="datetime" name="mon_to" id="mon_to"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="form-group">
                                                                                <div class="form-group">
                                                                                    <div class="form-group">
                                                                                        <div class="form-group">
                                                                                            <label>Tuesday</label>

                                                                                            <div class="checkbox switcher d-flex align-items-center">
                                                                                                <div class="checkbox switcher d-flex align-items-center">
                                                                                                    <div class="checkbox switcher d-flex align-items-center">
                                                                                                        <div class="checkbox switcher d-flex align-items-center">
                                                                                                            <div class="checkbox switcher d-flex align-items-center">
                                                                                                                <label for="tue_delievery">
                                                                                                                    <input type="checkbox" id="tue_delievery" name="tue_delievery" class="form-control" checked>
                                                                                                                    <span><small></small></span>
                                                                                                                </label>
                                                                                                                <div class="d-flex align-items-center"><input type="time" name="tue_from" id="tue_from"> -- <input type="time" name="tue_to" id="tue_to"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <div class="form-group">
                                                                                        <div class="form-group">
                                                                                            <div class="form-group">
                                                                                                <div class="form-group">
                                                                                                    <label>Wednesday</label>

                                                                                                    <div class="checkbox switcher d-flex align-items-center">
                                                                                                        <div class="checkbox switcher d-flex align-items-center">
                                                                                                            <div class="checkbox switcher d-flex align-items-center">
                                                                                                                <div class="checkbox switcher d-flex align-items-center">
                                                                                                                    <div class="checkbox switcher d-flex align-items-center">
                                                                                                                        <label for="wed_delievery">
                                                                                                                            <input type="checkbox" id="wed_delievery" name="wed_delievery" class="form-control" checked>
                                                                                                                            <span><small></small></span>
                                                                                                                        </label>
                                                                                                                        <div class="d-flex align-items-center"><input type="time" name="wed_from" id="wed_from"> -- <input type="time" name="wed_to" id="wed_to"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-group">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-group">
                                                                                                        <div class="form-group">
                                                                                                            <label>Thurday</label>

                                                                                                            <div class="checkbox switcher d-flex align-items-center">
                                                                                                                <div class="checkbox switcher d-flex align-items-center">
                                                                                                                    <div class="checkbox switcher d-flex align-items-center">
                                                                                                                        <div class="checkbox switcher d-flex align-items-center">
                                                                                                                            <div class="checkbox switcher d-flex align-items-center">
                                                                                                                                <label for="thu_delievery">
                                                                                                                                    <input type="checkbox" id="thu_delievery" name="thu_delievery" class="form-control" checked>
                                                                                                                                    <span><small></small></span>
                                                                                                                                </label>
                                                                                                                                <div class="d-flex align-items-center"><input type="time" name="thu_from" id="thu_from"> -- <input type="time" name="thu_to" id="thu_to"></div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <div class="form-group">
                                                                                                        <div class="form-group">
                                                                                                            <div class="form-group">
                                                                                                                <div class="form-group">
                                                                                                                    <label>Friday</label>

                                                                                                                    <div class="checkbox switcher d-flex align-items-center">
                                                                                                                        <div class="checkbox switcher d-flex align-items-center">
                                                                                                                            <div class="checkbox switcher d-flex align-items-center">
                                                                                                                                <div class="checkbox switcher d-flex align-items-center">
                                                                                                                                    <div class="checkbox switcher d-flex align-items-center">
                                                                                                                                        <label for="fri_delievery">
                                                                                                                                            <input type="checkbox" id="fri_delievery" name="fri_delievery" class="form-control" checked>
                                                                                                                                            <span><small></small></span>
                                                                                                                                            <span><small></small></span>
                                                                                                                                            <span><small></small></span>
                                                                                                                                            <span><small></small></span>
                                                                                                                                            <span><small></small></span>
                                                                                                                                        </label>
                                                                                                                                        </label>
                                                                                                                                        </label>
                                                                                                                                        </label>
                                                                                                                                        </label>
                                                                                                                                        <div class="d-flex align-items-center"><input type="time" name="fri_from" id="fri_from"> -- <input type="time" name="fri_to" id="fri_to"></div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <div class="form-group">
                                                                                                                <div class="form-group">
                                                                                                                    <div class="form-group">
                                                                                                                        <div class="form-group">
                                                                                                                            <label>Saturday</label>

                                                                                                                            <div class="checkbox switcher d-flex align-items-center">
                                                                                                                                <div class="checkbox switcher d-flex align-items-center">
                                                                                                                                    <div class="checkbox switcher d-flex align-items-center">
                                                                                                                                        <div class="checkbox switcher d-flex align-items-center">
                                                                                                                                            <div class="checkbox switcher d-flex align-items-center">
                                                                                                                                                <label for="sat_delievery">
                                                                                                                                                    <input type="checkbox" id="sat_delievery" name="sat_delievery" class="form-control" checked>
                                                                                                                                                    <span><small></small></span>
                                                                                                                                                    <span><small></small></span>
                                                                                                                                                    <span><small></small></span>
                                                                                                                                                    <span><small></small></span>
                                                                                                                                                    <span><small></small></span>
                                                                                                                                                </label>
                                                                                                                                                </label>
                                                                                                                                                </label>
                                                                                                                                                </label>
                                                                                                                                                </label>
                                                                                                                                                <div class="d-flex align-items-center"><input type="time" name="sat_from" id="sat_from"> -- <input type="time" name="sat_to" id="sat_to"></div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                                <div class="mt-4 text-center">
                                                                                                                    <div class="mt-4 text-center">
                                                                                                                        <div class="mt-4 text-center">
                                                                                                                            <div class="mt-4 text-center">
                                                                                                                                <div class="mt-4 text-center">
                                                                                                                                    <!-- <a href="#" class="btn btn-outline-info" role="button">Submit <i class="far fa-arrow-alt-circle-right"></i></a> -->
                                                                                                                                    <button name="storedetails" id="storedetails" class="btn btn-outline-info" type="submit">Submit <i class="far fa-arrow-alt-circle-right"></i></button>
                                                                                                                                    <a href="#" class="btn btn-outline-warning" role="button">Cancel <i class="fas fa-times-circle"></i></a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>

                                    </form>
                                    </form>
                                    </form>
                                    </form>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    </div><!-- end col -->
    </div><!-- end col -->
    </div><!-- end col -->
    </div><!-- end col -->
    </div><!-- end col -->
    </div> <!-- end row -->
    </div> <!-- end row -->
    </div> <!-- end row -->
    </div> <!-- end row -->
    </div> <!-- end row -->

    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- container-fluid -->
    <!-- container-fluid -->
    <!-- container-fluid -->
    <!-- container-fluid -->
    <!-- container-fluid -->
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- content -->
    <!-- content -->
    <!-- content -->
    <!-- content -->
    <!-- content -->
    <!--   <footer class="footer">	
              <!--   <footer class="footer">
                  <!--   <footer class="footer">	
              <!--   <footer class="footer">
                  <!--   <footer class="footer">	
                        © Copyright 2019 - 2020. All Rights Reserved.	
                    © Copyright 2019 - 2020. All Rights Reserved.
                        © Copyright 2019 - 2020. All Rights Reserved.	
                    © Copyright 2019 - 2020. All Rights Reserved.
                        © Copyright 2019 - 2020. All Rights Reserved.	
                    </footer> -->
    </footer> -->
    </footer> -->
    </footer> -->
    </footer> -->
    <?php $this->load->view('dealer/footer'); ?>

    </div>
    </div>
    </div>
    </div>
    </div>

    </div>

    <?php $this->load->view('dealer/scripts'); ?>

</body>

</html>