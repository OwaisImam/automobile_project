
<head>
  <title>Home</title>
  <!-- Basic Page Needs -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<!--Header -->
<header id="header">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><img src="<?php echo base_url();?>assets\images\customer\logo.png" class="img-fluid animated" alt=""></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li><a href="<?php echo site_url('customer')?>">Home</a></li>
            <li><a href="<?php echo site_url('customer#about')?>">About Us</a></li>
            <li><a href="<?php echo site_url('customer#products')?>">Products & Services</a></li>
            <li><a href="<?php echo site_url('customer#testimonial')?>">Testimonials</a></li>
            <li><a href="<?php echo site_url('customer#Promotions')?>">Promotions</a></li>
            <li><a href="<?php echo site_url('customer#contact')?>">Contact Us</a></li>
            <!-- <li><a href="Home.html#about">About Us</a></li> -->
            <!-- <li><a href="<?php echo site_url('customer#about')?>Home.html#products">Products & Services</a></li> -->
            <!-- <li><a href="Home.html#testimonial">Testimonials</a></li>
            <li><a href="Promotions.html">Promotions</a></li>
            <li><a href="Home.html#contact">Contact Us</a></li> -->
        </ul>
      </nav><!-- .nav-menu -->
      
        <div class="nav-item account-btn dropdown ml-lg-4">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="d-none d-lg-block">Mr.User</span>
                <i class="fas fa-user-tie d-lg-none"></i>
             </a>
            <div class="dropdown-menu pb-0">    
              <ul>
                <li><a href="<?php echo site_url('customer/order')?>">Shopping Cart</a></li>
                <li><a href="<?php echo site_url('customer#feedback')?>">Feedback</a></li>
                <li><a href="<?php echo site_url('customer/help')?>">Help</a></li>
                <li><a href="<?php echo site_url('customer')?>">Logout</a></li>
               <!--  <li><a href="Order.html">Shopping Cart</a></li>
                <li><a href="Home.html#feedback">Feedback</a></li>
                <li><a href="<?php echo site_url('customer/help')?>">Help</a></li>
                <li><a href="Home.html">Logout</a></li> -->
              </ul>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->
