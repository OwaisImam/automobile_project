<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Profile</title>
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
                <a href="index.html" class="logo">
                    <span class="logo-light">
                        <img src="<?php echo base_url();?>assets\images\dealer\logo.png">
                    </span>
                    <span class="logo-sm">
                        <img src="<?php echo base_url();?>assets\images\dealer\favicon.png">
                    </span>
                </a>
            </div>

            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">


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
                            <a href="<?php echo site_url('dealer/activitylog')?>" class="dropdown-item text-center notify-all text-primary">
                                    View all <i class="fi-arrow-right"></i>
                                </a>
                        </div>
                    </li>

                    <li class="dropdown notification-list list-inline-item">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?php echo base_url();?>assets\images\dealer\users\user-3.jpg" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <a class="dropdown-item" href="<?php echo site_url('dealer/profile')?>"><i class="mdi mdi-account-circle"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="index.html"><i class="mdi mdi-power text-danger"></i> Logout</a>
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
                        <li>
                            <a href="<?php echo site_url('dealer/dashboard')?>" class="waves-effect">
                                <i class="fas fa-chart-line"></i><span>Dashboard </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-grip-horizontal"></i><span> Products <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="product1.html">Product 1</a></li>
                                <li><a href="product2.html">Product 2</a></li>
                                <li><a href="product3.html">Product 3</a></li>
                                <li><a href="product4.html">Product 4</a></li>
                                <li><a href="product5.html">Product 5</a></li>
                                <li><a href="product6.html">Product 6</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fal fa-money-check" aria-hidden="true"></i><span> Bank A/c Details <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="<?php echo site_url('dealer/bankdetails')?>">A/c Details</a></li>
                                <li><a href="add-account.html">Add Bank A/c Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-crown"></i><span> Testimonials <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="<?php echo site_url('dealer/testimonial')?>">Testimonial</a></li>
                                <li><a href="add-testimonial.html">Add Testimonial</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo site_url('dealer/myorders')?>" class="waves-effect"><i class="fas fa-shopping-cart"></i><span> My Orders </span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fal fa-bell-on"></i><span> Send Reminders <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="reminder.html">Reminders</a></li>
                                <li><a href="add-reminder.html">Add Reminders</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo site_url('dealer/planner')?>" class="waves-effect"><i class="icon-calendar"></i><span> Planner </span></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('dealer/employeeaccess')?>" class="waves-effect"><i class="fas fa-users"></i><span> Employee Access </span></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('dealer/subscription')?>" class="waves-effect"><i class="mdi mdi-bell-outline noti-icon"></i><span> Subscription </span></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('dealer/businesscard')?>" class="waves-effect"><i class="fal fa-id-card-alt"></i><span> Business Card </span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-bullhorn"></i><span> Promotions <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="<?php echo site_url('dealer/promotion')?>">Promotion</a></li>
                                <li><a href="add-promotion.html">Add Promotion</a></li>
                                <li><a href="<?php echo site_url('dealer/broadcast')?>">Broadcast</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-copy"></i><span> Enquiry Form <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                    <li><a href="<?php echo site_url('dealer/saleenquiry')?>">Vehicle Enquiry</a></li>
                                <li><a href="<?php echo site_url('dealer/saleenquiry')?>">Sales</a></li>
                                <li><a href="<?php echo site_url('dealer/serviceenquiry')?>">Services</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo site_url('dealer/help')?>" class="waves-effect"><i class="mdi mdi-help-network-outline"></i><span> Help </span></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('dealer/activitylog')?>" class="waves-effect"><i class="fal fa-user-unlock"></i><span> Activity Log </span></a>
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
                                    <h4 class="page-title">Profile</h4>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="edit-profile.html" class="btn btn-outline-info waves-effect waves-light"><i class="fal fa-plus-square mr-2"></i>Edit Profile</a>       
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label class="col-form-label">Name</label>
                                                    <div>
                                                        <input class="form-control" type="text" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="col-form-label">Contact Number</label>
                                                    <div>
                                                        <input class="form-control" type="text" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="col-form-label">Contact Number2</label>
                                                    <div>
                                                        <input class="form-control" type="text" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="col-form-label">Email</label>
                                                    <div>
                                                        <input class="form-control" type="email" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="col-form-label">Type</label>
                                                    <div>
                                                        <input class="form-control" type="email" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="col-form-label">Type</label>
                                                    <div>
                                                        <input class="form-control" type="email" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="col-form-label">Option</label>
                                                    <div>
                                                        <input class="form-control" type="text" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="col-form-label">Description</label>
                                                    <div>
                                                        <input class="form-control" type="text" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="col-form-label">Address</label>
                                                    <div>
                                                        <textarea class="form-control" type="text" readonly></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="col-form-label">Town</label>
                                                    <div>
                                                        <input class="form-control" type="text" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="col-form-label">District</label>
                                                    <div>
                                                        <input class="form-control" type="email" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="col-form-label">State</label>
                                                   <div>
                                                        <input class="form-control" type="email" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="col-form-label">Pincode</label>
                                                    <div>
                                                         <input class="form-control" type="text" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="col-form-label">Remark</label>
                                                    <div>
                                                         <input class="form-control" type="text" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="col-form-label">Product Selection</label>
                                                    <div>
                                                         <input class="form-control" type="text" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="col-form-label">Description</label>
                                                    <div>
                                                        <textarea class="form-control" type="text" readonly></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="col-form-label">Location</label>
                                                    <input type="text" class="form-control mb-4" readonly>
                                                    <div class="map-view">
                                                        <img src="<?php echo base_url();?>assets\images\dealer\map.jpg" class="w-100">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->      

                        
                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->

            </div>

            <div class="content-page">
                <!-- Start content -->
                <div class="content mt-0">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <h4 class="page-title">Manpower Details</h4>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="edit-manpower.html" class="btn btn-outline-info waves-effect waves-light"><i class="fal fa-plus-square mr-2"></i>Edit Manpower</a>       
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label class="col-form-label">Name</label>
                                                    <div>
                                                        <input class="form-control" type="text" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="col-form-label">Contact Number</label>
                                                    <div>
                                                        <input class="form-control" type="text" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="col-form-label">Name</label>
                                                    <div>
                                                        <input class="form-control" type="text" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="col-form-label">Contact Number</label>
                                                    <div>
                                                        <input class="form-control" type="text" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="col-form-label">Name</label>
                                                    <div>
                                                        <input class="form-control" type="text" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="col-form-label">Contact Number</label>
                                                    <div>
                                                        <input class="form-control" type="text" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->      

                        
                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->

            </div>

            <div class="content-page">
                <!-- Start content -->
                <div class="content mt-0">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <h4 class="page-title">Business Hours</h4>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="edit-hour.html" class="btn btn-outline-info waves-effect waves-light"><i class="fal fa-plus-square mr-2"></i>Edit Hours</a>       
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group row align-items-center">
                                                    <label class="col-5 col-form-label">Monday:</label>
                                                    <div class="col-7">
                                                        <span>9:00 - 17:00</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-5 col-form-label">Tuesday:</label>
                                                    <div class="col-7">
                                                        <span>9:00 - 17:00</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-5 col-form-label">Wednesday:</label>
                                                    <div class="col-7">
                                                        <span>9:00 - 17:00</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-5 col-form-label">Thursday:</label>
                                                    <div class="col-7">
                                                        <span>9:00 - 17:00</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-5 col-form-label">Friday:</label>
                                                    <div class="col-7">
                                                        <span>9:00 - 17:00</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-5 col-form-label">Saturday:</label>
                                                    <div class="col-7">
                                                        <span>Closed</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-5 col-form-label">Sunday:</label>
                                                    <div class="col-7">
                                                        <span>Closed</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group row align-items-center">
                                                    <label class="col-5 col-form-label">Sample text:</label>
                                                    <div class="col-7">
                                                        <span>Sample Date</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group row align-items-center">
                                                    <label class="col-5 col-form-label">Sample text:</label>
                                                    <div class="col-7">
                                                        <span>Sample Date</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->      

                        
                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <!-- <script src="assets\js\jquery.min.js"></script>
        <script src="assets\js\bootstrap.bundle.min.js"></script>
        <script src="assets\js\metismenu.min.js"></script>
        <script src="assets\js\jquery.slimscroll.js"></script>
        <script src="assets\js\waves.min.js"></script>
 -->
        <!-- App js -->
        <!-- <script src="assets\js\app.js"></script> -->
        <?php $this->load->view('dealer/scripts'); ?>
        
    </body>

</html>