<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Service Job Card</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../plugins/morris/morris.css">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

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
                        <img src="<?php echo base_url();?>assets\images\dealer\logo.png">
                    </span>
                    <span class="logo-sm">
                        <img src="<?php echo base_url();?>assets\images\dealer\favicon.png">
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
                            <a href="<?php echo site_url('dealer/notifications')?>" class="dropdown-item text-center notify-all text-primary">
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
								<a class="dropdown-item" href="#"><i class="fas fa-user-tie"></i> My Profile</a>
								<a class="dropdown-item" href="#"><i class="fas fa-store-alt"></i>My Digital Store</a>
								<a class="dropdown-item" href="<?php echo site_url('dealer/activitylog')?>"><i class="fas fa-user-clock"></i> Activity Log</a>
                                <a class="dropdown-item" href="<?php echo site_url('dealer/subscription')?>"><i class="mdi mdi-account-circle"></i> Subscription</a>
                                <a class="dropdown-item" href="#"><i class="far fa-sun"></i> Settings</a>
                                <a class="dropdown-item" href="<?php echo site_url('dealer/help')?>"><i class="mdi mdi-help-rhombus"></i> Help</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="<?php echo site_url('dealer/login')?>"><i class="mdi mdi-logout text-danger"></i> Logout</a>
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
                                   <li><a href="<?php echo site_url('dealer/businessdetails')?>"> Business Details</a></li>
                                    <li><a href="<?php echo site_url('dealer/storedetails')?>"> Store Details</a></li>
                                    <li><a href="<?php echo site_url('dealer/bankdetails')?>"> Bank A/c Details</a></li>
									
									
									
									
                                    
                                </ul>
                            </li>
									
						<li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-grip-horizontal"></i><span> Product Catalogue <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="<?php echo site_url('dealer/twowheelers')?>"> Two-Wheelers</a></li>
                                    <li><a href="<?php echo site_url('dealer/vehicleservice')?>"> Vehicle Service</a></li>
                                    <li><a href="<?php echo site_url('dealer/twowaccessories')?>">2W Accessories</a></li>
                                    <li><a href="<?php echo site_url('dealer/twowspareparts')?>"> 2W Spare Parts</a></li>
                                    <li><a href="<?php echo site_url('dealer/preownedvehicles')?>"> Pre-Owned Vehicles</a></li>
                                    <li><a href="<?php echo site_url('dealer/twowinsurance')?>"> 2W Insurance</a></li>
									
                                    
                                </ul>
                            </li>
						<li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-copy"></i><span> Enquiry Form <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                     <li><a href="<?php echo site_url('dealer/saleenquiry')?>">Vehicle Enquiry</a></li>
                                    <li><a href="<?php echo site_url('dealer/serviceenquiry')?>"> Service Job Card</a></li>
									
									
                                    
                                </ul>
                            </li>
						<li>
                            <a href="<?php echo site_url('dealer/myorders')?>" class="waves-effect"><i class="fas fa-shopping-cart"></i><span> My Orders </span></a>
                        </li>
                        
                        <li>
                            <a href="<?php echo site_url('dealer/receivables')?>" class="waves-effect"><i class="fas fa-money-bill"></i><span> Receivables </span></a>
                        </li>
                        
                        <li>
                            <a href="<?php echo site_url('dealer/dashboard')?>" class="waves-effect"><i class="fas fa-chart-line"></i><span> Dashboard </span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo site_url('dealer/planner')?>" class="waves-effect"><i class="fas fa-tasks"></i><span> Planner </span></a>
                        </li>
						<li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-bullhorn"></i><span> Promotion <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="<?php echo site_url('dealer/advertise')?>">Advertise</a></li>
                                    <li><a href="<?php echo site_url('dealer/broadcast')?>"> Broadcast</a></li>
                                    <li><a href="<?php echo site_url('dealer/communications')?>"> Communications</a></li>
									
									
                                    
                                </ul>
                            </li>
						
						
						
						<li>
                            <a href="<?php echo site_url('dealer/businesscard')?>" class="waves-effect"><i class="fas fa-id-card-alt"></i><span> Business Card </span></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('dealer/testimonial')?>" class="waves-effect"><i class="far fa-smile"></i><span> Testimonials </span></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('dealer/employeeaccess')?>" class="waves-effect"><i class="fas fa-users"></i><span> Employee Access </span></a>
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
                                    <h4 class="mt-0 header-title">Job Card</h4>
									
									
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="<?php echo site_url('dealer/userhome')?>">Home</a></li>
                                        <li class="breadcrumb-item active">Job Card</li>
										
                                    </ol>
									
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->
											
						<div class="row">
                            <div class="col-lg-12">
                                <div class="card m-b-30">
                                    <div class="card-body pt-3 sale">
                                        <form method="POST" enctype="multipart/form-data">
                                            <h4 class="mt-0 header-title mb-4">Customer Details</h4>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" id="name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Number</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"m id="number">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Location</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" id="location">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Date of Enquiry</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="date" id="date">
                                                </div>
                                            </div>
                                            <h4 class="mt-0 header-title mt-5 mb-4">Product Details</h4>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Maker</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="maker">
                                                        <option>Select</option>
                                                        <option>Large select</option>
                                                        <option>Small select</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Model</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="model">
                                                        <option>Select</option>
                                                        <option>Large select</option>
                                                        <option>Small select</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Model Number</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" id="model_number">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Job Details</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="job_details">
                                                        <option>Select</option>
                                                        <option>Large select</option>
                                                        <option>Small select</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Mechanic Attended</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="mechanic_attended">
                                                        <option>Select</option>
                                                        <option>Large select</option>
                                                        <option>Small select</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h4 class="mt-0 header-title mt-5 mb-4">Job Type</h4>
                                            <div class="form-group row align-items-center">
                                                <label class="col-sm-2 col-form-label">Preliminary Inspection</label>
                                                <div class="col-sm-10">
                                                    <label class="checkbox-inline"><input type="checkbox" value="" id="preliminary_inspection">Option 1</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="" id="preliminary_inspection">Option 2</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="" id="preliminary_inspection">Option 3</label>
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center">
                                                <label class="col-sm-2 col-form-label">Further Work</label>
                                                <div class="col-sm-10">
                                                    <label class="checkbox-inline"><input type="checkbox" value="" id="futher_work">Option 1</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="" id="futher_work">Option 2</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="" id="futher_work">Option 3</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Actual Work Done</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" id="actual_work_done"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Parts Included</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="parts_included">
                                                        <option>Select</option>
                                                        <option>Large select</option>
                                                        <option>Small select</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h4 class="mt-0 header-title mt-5 mb-4">Delivery Details</h4>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Delivery Type</label>
                                                <div class="col-sm-12">
                                                    <label class="radio-img mr-3">
                                                        <input type="radio" name="delivery" value="Home" checked="" id="delivery_type">
                                                        <div class="model-data">Home</div>
                                                    </label>
                                                    <label class="radio-img">
                                                        <input type="radio" name="delivery" value="Delarship" id="delivery_type">
                                                        <div class="model-data">Delarship</div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Delivery Status</label>
                                                <div class="col-sm-12">
                                                    <label class="radio-img mr-3">
                                                        <input type="radio" name="Delivery Status" value="Delivered" checked="">
                                                        <div class="model-data">Delivered</div>
                                                    </label>
                                                    <label class="radio-img">
                                                        <input type="radio" name="Delivery Status" value="not delivered">
                                                        <div class="model-data">Not Delivered</div>
                                                    </label>
                                                </div>
                                            </div>
                                            <h4 class="mt-0 header-title mt-5 mb-4">Charges</h4>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Labout Charge</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Parts Charge</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Tax</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Total Amount</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <h4 class="mt-0 header-title mt-5 mb-4">Followup Details</h4>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Followup Date</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="date">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Followup Status</label>
                                                <div class="col-sm-12">
                                                    <label class="radio-img mr-3">
                                                        <input type="radio" name="Followup" value="Pending" checked="">
                                                        <div class="model-data">Pending</div>
                                                    </label>
                                                    <label class="radio-img">
                                                        <input type="radio" name="Followup" value="Delivered">
                                                        <div class="model-data">Delivered</div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Remarks</label>
                                                <div class="col-sm-12">
                                                    <label class="radio-img mr-3">
                                                        <input type="radio" name="Remarks" value="due" checked="">
                                                        <div class="model-data">Due</div>
                                                    </label>
                                                    <label class="radio-img">
                                                        <input type="radio" name="Remarks" value="reminder">
                                                        <div class="model-data">Reminder</div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mt-4 text-center">
											<a href="#" class="btn btn-outline-info" role="button">Submit <i class="far fa-arrow-alt-circle-right"></i></a>
											<a href="#" class="btn btn-outline-warning" role="button">Cancel <i class="fas fa-times-circle"></i></a>
											</div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->		
                

            </div> <!-- container-fluid -->
            <!-- content -->

           <!--  <footer class="footer">
                © 2021 All rights <span class="d-none d-sm-inline-block"> Reserved.
            </footer> -->
<?php $this->load->view('dealer/footer'); ?>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <!-- <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script> -->

    <!--Morris Chart-->
    <script src="../plugins/morris/morris.min.js"></script>
    <script src="../plugins/raphael/raphael.min.js"></script>

    <script src="assets/pages/dashboard.init.js"></script>
	
	<!-- Sweet-Alert  -->
        <script src="../plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="assets/pages/sweet-alert.init.js"></script> 
	

    <!-- App js -->
    <!-- <script src="assets/js/app.js"></script> -->
    <?php $this->load->view('dealer/scripts'); ?>

</body>

</html>