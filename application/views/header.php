<!-- LOADER -->
<div class="preloader">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- END LOADER -->
<?php 
if($this->session->userdata('cart')){
    $cartProCount = count(array_values(unserialize($this->session->userdata('cart'))));
}
else
{
    $cartProCount = "0";
}
?>
<!-- START HEADER -->
<header class="header_wrap fixed-top header_with_topbar">
	<div class="top-header" style="background: #2ba289">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                	<div class="d-flex align-items-center justify-content-center justify-content-md-start">
                        <ul class="contact_detail text-center text-lg-left">
                            <li><i class="ti-email"></i><span>hello@drmart.com</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                	<div class="text-center text-md-right nav-bar">
                       	<ul class="header_list navbar-nav">
                            <li class="dropdown cart_dropdown">
                                <?php if(isset($this->session->user_id)){ ?>
                                <a href="javascript:void(0)"><i class="ti-user"></i><span><?php echo $this->session->user_name;?></span></a>
                                <div class="account_box dropdown-menu dropdown-menu-right">
                                    <ul class="account_list">
                                       <!--  <li><a href="<?php echo site_url('myaccount')?>"><i class="ti-id-badge"></i> My Account </a></li> -->
                                        <li><a href="<?php echo site_url('dashboard')?>"><i class="ti-id-badge"></i> Dashboard </a></li>
                                        <li><a href="<?php echo site_url('users/logout')?>"><i class="ti-lock"></i> Logout</a></li>
                                    </ul>
                                </div>
                                <?php } else { ?>
                                   <i class="ti-user"></i><span><a href="<?php echo base_url()."login"; ?>">Signin</a> &nbsp; | &nbsp;<a href="<?php echo base_url()."users/register"; ?>">Signup</a></span>
                                <?php } ?>
                            </li>
						</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase">
    	<div class="container">
            <nav class="navbar navbar-expand-lg"> 
                <a class="navbar-brand" href="<?php echo base_url()?>">
                    <!-- <img class="logo_light" src="<?php echo base_url();?>assets\images\logo_light.png" alt="logo"> -->
                    <img class="logo_dark" src="<?php echo base_url();?>assets\images\logo_dark_new.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> 
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li><a class="nav-link nav_item active" href="<?php echo base_url();?>">Home</a></li>
                        <li><a class="nav-link nav_item" href="<?php echo base_url();?>products">Shop</a></li>
                        <!-- <li><a class="nav-link nav_item" href="<?php echo base_url()?>pages/about">About Us</a></li> -->

                        <li><a class="nav-link nav_item" href="<?php echo base_url()?>pages/legal">Legal</a></li>
                        <li><a class="nav-link nav_item" href="contact.html">Contact Us</a></li> 
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                            <form>
                                <input type="text" placeholder="Search" class="form-control" id="search_input">
                                <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div><div class="search_overlay"></div>
                    </li>
                    <li><a class="nav-link" href="<?php echo site_url('cart')?>"><i class="linearicons-cart"></i><span class="cart_count" id="cart_count"><?php echo $cartProCount;?></span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- END HEADER -->