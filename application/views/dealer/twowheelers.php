<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Two Wheelers</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description">
        <meta content="Themesdesign" name="author">
        <link rel="shortcut icon" href="assets\images\favicon.ico">

        <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.css" rel="stylesheet" type="text/css">
        <link href="assets\css\style.css" rel="stylesheet" type="text/css">
		<style>
                .img_wrp {
        display: inline-block;
        position: relative;
        }
        .close {
        position: absolute;
        top: 0;
        right: 0;
        }
        </style>
		
		 

    </head>
<?php

if ($refreshHeader ==1 ) {
    echo 'header need to reset;';exit;
}

?>
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
                                    <h4 class="mt-0 header-title">Two Wheelers</h4>									
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a >Product Catalogue</a></li>
                                        <li class="breadcrumb-item active">Two- Wheelers</li>										
                                    </ol>									
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end page-title -->
						
													
						<div class="row">
							
							<div class="col-md-6">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <form method="post" enctype="multipart/form-data">
										<h4 class="mt-0 text-align-center header-title"><a ><i class="fas fa-plus-circle"></i> | Add Product</a></h4>
										<br>
											
											<div class="form-group ">
                                            
                                            <div >
                                                <select class="form-control" name="product_type">
                                                    <option>Select</option>
                                                    <option>TVS </option>
                                                    <option>Hero </option>
													<option>Bajaj </option>
                                                    <option>Honda</option>
													<option>Suzuki</option>
													<option>Yamaha</option>
													<option>Royal Enfield</option>
													<option>Others</option>
                                                </select>
                                            </div>
                                        </div>	
										
										<div class="form-group">                                                
                                                <input type="text" name="product_name" class="form-control"  placeholder="Product Name"/>
                                            </div>
											
											<div class="form-group">
                                                <label>Product Image(s)</label>
                                                <input type="file" class="form-control"  name="file[]"  placeholder="" multiple/>
												<!-- <input type="file" class="form-control"  placeholder=""/>
												  <input type="file" class="form-control"  placeholder=""/>-->
                                            </div>
											
											<div class="form-group">
                                                <label>Product Logo</label>
                                                <input type="file" class="form-control" name="product_logo" placeholder=""/>												 
                                            </div>                                           		
												
                                            <div class="form-group">                                               
                                                <input type="text" name="capacity" class="form-control"  placeholder="Engine Capacity"/>
                                            </div>
											
											<div class="form-group">                                              
                                                <input type="text" name="power" class="form-control"  placeholder="Power"/>
                                            </div>
											
											<div class="form-group">                                                
                                                <input type="text" name="weight" class="form-control"  placeholder="Weight"/>
                                            </div>											
																					
											<div class="form-group">                                               
                                                <input type="text" class="form-control" name="features"  placeholder="Feature(s)"/>
                                            </div>
																						
											<div class="form-group">                                               
                                                <div>
                                                    <textarea  placeholder="Description" name="description" class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>
											
											<div class="form-group">
                                                <label>Product Brochure</label>
                                                <input type="file" class="form-control" name="brochure" placeholder=""/>												 
                                            </div>
											
											<div class="form-group">                                               
                                                <input type="text" class="form-control" name="price" placeholder="Ex-Showroom Price"/>
                                            </div>
											<div class="mt-4 text-center">
                                            <!--
                                            <a href="#" class="btn btn-outline-info" role="button" >Submit <i class="far fa-arrow-alt-circle-right"></i></a>
                                            -->
                                            <a href="#" class="btn btn-outline-info" role="button" type="submit">
                                                 <button type="submit" class="btn outline-info" name="add" value="Submit">
                                                 Submit
                                                    <i class="far fa-arrow-alt-circle-right"></i>
                                                </button>
                                            </a>
											<a href="#" class="btn btn-outline-warning" role="button">Cancel <i class="fas fa-times-circle"></i></a>
											</div>
											
											
                                        </form>
                                        <?php
                                 if (isset($errors)) {
                                    echo implode('<br/>', $errors);
                                } 
                                if ($productSaved) {
                                    echo 'Product added Successfully';
                                }

                                ?>
                                    </div>
                                </div>  
                            </div> <!-- end col -->
							
							
							<div class="col-md-6">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <form method="post">
										<h4 class="mt-0 text-align-center header-title"><a ><i class="fas fa-edit"></i> | Edit Product</a></h4>
										<br>
											
										<div class="form-group ">
                                            
                                            <div >
                                                <select class="form-control" name="product_type">
                                                    <option value="0">Select</option>
                                                    <?php if(isset($productInfo->product_type)) { ?>
                                                        <option <?php if($productInfo->product_type == 'TVS') { ?> selected <?php } ?> >TVS </option>
                                                        <option <?php if($productInfo->product_type == 'Hero') { ?> selected <?php } ?>>Hero </option>
                                                        <option <?php if($productInfo->product_type == 'Bajaj') { ?> selected <?php } ?>>Bajaj </option>
                                                        <option <?php if($productInfo->product_type == 'Honda') { ?> selected <?php } ?>>Honda</option>
                                                        <option <?php if($productInfo->product_type == 'Suzuki') { ?> selected <?php } ?>>Suzuki</option>
                                                        <option <?php if($productInfo->product_type == 'Yamaha') { ?> selected <?php } ?>>Yamaha</option>
                                                        <option <?php if($productInfo->product_type == 'Royal Enfield') { ?> selected <?php } ?>>Royal Enfield</option>
                                                        <option <?php if($productInfo->product_type == 'Others') { ?> selected <?php } ?>>Others</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>	
										
										<div class="form-group">
                                        <input type="hidden" class="form-control" name="productId" value="<?php if(isset($productInfo->id)) { echo $productInfo->id;}?>"/>
                                                <input type="text" class="form-control" name="product_name" placeholder="Product Name" value="<?php if(isset($productInfo->product_name)) { echo $productInfo->product_name; } ?>"/>
                                            </div>
											<?php 
                                            $arr = [];
                                            if(isset($productInfo->product_images)) { 
                                                $arr = explode(",", $productInfo->product_images);
                                            }
                                             ?>
											<div class="form-group">
                                                <label>Product Image(s)</label>
                                                <?php  
                                                for ($i=0; $i<count($arr); $i++) { 
                                                    if ($arr[$i]) {
                                                    ?>
                                                        <div class="img_wrp">
                                                            <a href="<?php echo base_url().$arr[$i];?>">
                                                            <img class="rounded mr-3" src="<?php echo base_url().$arr[$i];?>" alt="" width="100px">
                                                            </a>
                                                            <a data-toggle="modal" data-target=".bs-example-modal-center"><img class="close" src="https://wecision.com/wecision/images/icons/closeIcon.png" /> </a>
                                                            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body text-center">
                                                                                <p><i class="sure-icon fal fa-info-circle"></i></p>
                                                                                <h4>Are You Sure?</h4>
                                                                                <p>Do you really want to delete the image.</p>
                                                                                <div>
                                                                                    <button type="button" class="btn btn-secondary waves-effect mr-3" data-dismiss="modal">Close</button>
                                                                                    <a href="<?php echo site_url('dealer/twowheelers')."?action=deleteProductImage&id=".$productInfo->id.'&name='.$arr[$i];?>" >
                                                                                    <button type="button" class="btn btn-danger waves-effect waves-light">Yes, delete it!</button>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- /.modal-content -->
                                                                    </div><!-- /.modal-dialog -->
                                                                </div><!-- /.modal -->
                                                        </div>
                                                        <?php } } ?>
                                            </div>
											
											<div class="form-group">
                                                <label>Product Logo</label>
                                                <?php if(isset($productInfo->product_logo)){ 
                                                    if($productInfo->product_logo){ ?>
                                                     <div class="img_wrp">
                                                        <a href="<?php echo base_url().$productInfo->product_logo;?>">
                                                            <img src="<?php echo base_url().$productInfo->product_logo;?>" width="100px">
                                                        </a>
                                                        <a data-toggle="modal" data-target=".bs-example-modal-center"><img class="close" src="https://wecision.com/wecision/images/icons/closeIcon.png" /> </a>
                                                            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body text-center">
                                                                                <p><i class="sure-icon fal fa-info-circle"></i></p>
                                                                                <h4>Are You Sure?</h4>
                                                                                <p>Do you really want to delete the image.</p>
                                                                                <div>
                                                                                    <button type="button" class="btn btn-secondary waves-effect mr-3" data-dismiss="modal">Close</button>
                                                                                    <a href="<?php echo site_url('dealer/twowheelers')."?action=deleteProductLogo&id=".$productInfo->id.'&name='.$productInfo->product_logo;?>" >
                                                                                    <button type="button" class="btn btn-danger waves-effect waves-light">Yes, delete it!</button>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- /.modal-content -->
                                                                    </div><!-- /.modal-dialog -->
                                                                </div><!-- /.modal -->
                                                    </div>
                                                    <?php  }else{ echo 'N/A'; } 
                                                }?>
												 
                                            </div>
                                           		
												
                                            <div class="form-group">
                                               
                                                <input type="text" class="form-control"  name="capacity" placeholder="Engine Capacity" value="<?php if(isset($productInfo->capacity)) { echo $productInfo->capacity;}?>"/>
                                            </div>
											
											<div class="form-group">
                                               
                                                <input type="text" class="form-control" name="power" placeholder="Power" value="<?php if(isset($productInfo->power)) { echo $productInfo->power;}?>"/>
                                            </div>
											
											<div class="form-group">
                                                
                                                <input type="text" class="form-control" name="weight" placeholder="Weight" value="<?php if(isset($productInfo->weight)) { echo $productInfo->weight;}?>"/>
                                            </div>
											
																					
											<div class="form-group">
                                               
                                                <input type="text" class="form-control"  name="features" placeholder="Feature(s)" value="<?php if(isset($productInfo->features)) { echo $productInfo->features;}?>"/>
                                            </div>
																						
											<div class="form-group">
                                               
                                                <div>
                                                    <textarea  placeholder="Description" name="description" class="form-control" rows="5"><?php if(isset($productInfo->description)) { echo $productInfo->description;}?></textarea>
                                                </div>
                                            </div>
											
											<div class="form-group">
                                                <label>Product Brochure</label>
                                                <?php if(isset($productInfo->brochure)){ 
                                                    if($productInfo->brochure){ ?>
                                                     <div class="img_wrp">
                                                        <a href="<?php echo base_url().$productInfo->brochure;?>">
                                                            <img src="<?php echo base_url().$productInfo->brochure;?>" width="100px">
                                                        </a>
                                                        <a data-toggle="modal" data-target=".bs-example-modal-center"><img class="close" src="https://wecision.com/wecision/images/icons/closeIcon.png" /> </a>
                                                            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body text-center">
                                                                                <p><i class="sure-icon fal fa-info-circle"></i></p>
                                                                                <h4>Are You Sure?</h4>
                                                                                <p>Do you really want to delete the image.</p>
                                                                                <div>
                                                                                    <button type="button" class="btn btn-secondary waves-effect mr-3" data-dismiss="modal">Close</button>
                                                                                    <a href="<?php echo site_url('dealer/twowheelers')."?action=deleteProductBrochure&id=".$productInfo->id.'&name='.$productInfo->brochure;?>" >
                                                                                    <button type="button" class="btn btn-danger waves-effect waves-light">Yes, delete it!</button>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- /.modal-content -->
                                                                    </div><!-- /.modal-dialog -->
                                                                </div><!-- /.modal -->
                                                    </div>
                                                    <?php }else{ echo ''; } 
                                                }?>
												 
                                            </div>
											
											<div class="form-group">
                                               
                                                <input type="text" class="form-control" name="price" placeholder="Ex-Showroom Price" value="<?php if(isset($productInfo->price)) { echo $productInfo->price;}?>"/>
                                            </div>
											
											<div class="mt-4 text-center">
											<a href="#" class="btn btn-outline-info" role="button" type="submit">
                                                 <button type="submit" class="btn outline-info" name="edit" value="Submit">
                                                 Update
                                                    <i class="far fa-arrow-alt-circle-right"></i>
                                                </button>
                                            </a>
											</div>
											
                                        </form>
                                        <?php
                                 if (isset($errors)) {
                                    echo implode('<br/>', $errors);
                                } 
                                if ($productUpdated) {
                                    echo 'Product Updated Successfully';
                                    header('Location: '.base_url().'/dealer/twowheelers');
                                }
                                if ($productDeleteStatus) {
                                    echo 'Product Deleted Successfully';
                                    header('Location: '.base_url().'/dealer/twowheelers');
                                }

                                ?>
                                    </div>
                                </div>  
                            </div> <!-- end col -->
							
							
						</div> <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Prodct Name</th>
                                                    <th>Product Logo</th>
                                                    <th>Product Images</th>
                                                    <th>Engine Capacity</th>
                                                    <th>Power</th>
                                                    <th>Ex-Showroom Price</th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                
                                                <?php 
                                                $count=0;
                                                foreach($products  as $productDetails){  
                                                    $count = $count+1;
                                                    $arr = explode(",", $productDetails->product_images); ?>                      
                                                    <tr>
                                                        <th scope="row"><?php echo $count;?></th>
                                                        <td>Radeon</td>
                                                        <td class="product-logo">
                                                        <?php if($productDetails->product_logo){ ?>
                                                        <img src="<?php echo base_url().$productDetails->product_logo;?>">
                                                        <?php }else{ echo 'N/A'; }?>
                                                        </td>
                                                        <td class="product-img">
                                                            <?php for($i=0; $i<count($arr); $i++){ ?>
                                                                <img class="rounded mr-3" src="<?php echo base_url().$arr[$i];?>" alt="">
                                                            <?php } ?>
                                                        </td>
                                                        <td><?php echo $productDetails->capacity;?></td>
                                                        <td><?php echo $productDetails->weight;?></td>
                                                        <td><?php echo 'Rs '.$productDetails->price.'/-';?></td>
                                                        <td><?php echo $productDetails->description;?></td>
                                                        <td class="action-btn">
                                                            <ul>
                                                                <li class="mr-2">
                                                                    <a href="<?php echo site_url('dealer/twowheelers')."?action=edit&id=".$productDetails->id;?>" class="edit-btn"><i class="fal fa-edit"></i></a>
                                                                </li>
                                                                
                                                                <li class="mr-2">
                                                                    <a data-toggle="modal" data-target=".bs-example-modal-center" class="delete-btn"><i class="fal fa-trash-alt"></i></a>
                                                                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered">
                                                                            <div class="modal-content">
                                                                                <div class="modal-body text-center">
                                                                                    <p><i class="sure-icon fal fa-info-circle"></i></p>
                                                                                    <h4>Are You Sure?</h4>
                                                                                    <p>Do you really want to delete these record.</p>
                                                                                    <div>
                                                                                        <button type="button" class="btn btn-secondary waves-effect mr-3" data-dismiss="modal">Close</button>
                                                                                        <a href="<?php echo site_url('dealer/twowheelers')."?action=delete&id=".$productDetails->id;?>" >
                                                                                        <button type="button" class="btn btn-danger waves-effect waves-light">Yes, delete it!</button>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div><!-- /.modal-content -->
                                                                        </div><!-- /.modal-dialog -->
                                                                    </div><!-- /.modal -->
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
						
        
                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->

               <!--  <footer class="footer">
                    © Copyright 2019 - 2020. All Rights Reserved.
                </footer> -->
                <?php $this->load->view('dealer/footer'); ?>

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
        <script src="assets\js\waves.min.js"></script> -->

        <!-- App js -->
        <!-- <script src="assets\js\app.js"></script> -->
        <?php $this->load->view('dealer/scripts'); ?>
        
    </body>

</html>