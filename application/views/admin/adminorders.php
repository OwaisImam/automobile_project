<?php $this->load->view('scripts'); ?>
<body>
<?php //$this->load->view('header'); ?>
<?php include 'headerafterlogin.php'; ?>
 <!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url();?>">Home</a></li>
                    <li class="breadcrumb-item active">My Account</li>
                </ol>
            </div>
            <div class="col-md-6">
                <div class="page-title">
                <h1>Login</h1>
                </div>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<?php //include 'left_nav.php'; ?>
      <aside class="app-aside app-aside-expand-md app-aside-light" style="background: #346cb0">
        <!-- .aside-content -->
        <div class="aside-content">
          <!-- .aside-header -->
          <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="<?php echo base_url();?>assets/images/avatars/profile.jpg" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name">Beni Arisandi</span> <span class="account-description">Marketing Manager</span></span></button> <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
              <!-- dropdown-items -->
              <div class="pb-3">
                <a class="dropdown-item" href="<?php echo site_url('dashboard/userprofile')?>"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="<?php echo site_url('dashboard/authsigninv1')?>"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Help Center</a> <a class="dropdown-item" href="#">Ask Forum</a> <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
              </div><!-- /dropdown-items -->
            </div><!-- /.dropdown-aside -->
          </header><!-- /.aside-header -->
          <!-- .aside-menu -->
          <div class="aside-menu overflow-hidden">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
              <!-- .menu -->
              <ul class="menu">
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="<?php echo site_url('admin/dashboard')?>" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
               
                 <!-- <li class="menu-item has-child">
                  <a href="<?php echo site_url('admin/adminusers')?>" class="menu-link"><span class="menu-icon oi oi-browser"></span> <span class="menu-text">Users</span> <span class="badge badge-subtle badge-success"></span></a> 
                </li> -->

                <li class="menu-item has-child">
                  <a href="<?php echo site_url('admin/activeusers')?>" class="menu-link"><span class="menu-icon oi oi-browser"></span> <span class="menu-text">Active Users</span> <span class="badge badge-subtle badge-success"></span></a> 
                </li>

                <li class="menu-item has-child">
                  <a href="<?php echo site_url('admin/inactiveusers')?>" class="menu-link"><span class="menu-icon oi oi-browser"></span> <span class="menu-text">InActive Users</span> <span class="badge badge-subtle badge-success"></span></a> 
                </li>

               <li class="menu-item has-active">
                  <a href="<?php echo site_url('admin/adminorders')?>" class="menu-link"><span class="menu-icon oi oi-browser"></span> <span class="activemenu">Orders</span> <span class="badge badge-subtle badge-success"></span></a> <!-- child menu -->  
                </li><!-- /.menu-item -->
                
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="<?php echo site_url('admin/adminprofile')?>" class="menu-link"><span class="menu-icon oi oi-person"></span> <span class="menu-text">My Profile </span></a> <!-- child menu -->
                 
                </li><!-- /.menu-item -->

                
                <li class="menu-item has-child">
                  <a href="<?php echo site_url('admin/products')?>" class="menu-link"><span class="menu-icon oi oi-person"></span> <span class="menu-text">Products </span></a> <!-- child menu -->
                 
                </li><!-- /.menu-item -->

                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="<?php echo site_url('admin/logout')?>" class="menu-link"><span class="menu-icon oi oi-browser"></span> <span class="menu-text">Logout</span> <span class="badge badge-subtle badge-success"></span></a> <!-- child menu -->
                  
                </li><!-- /.menu-item -->
                <!-- .menu-header -->
              
              </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
          </div><!-- /.aside-menu -->
          <!-- Skin changer -->
          <footer class="aside-footer border-top p-3">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin">Night mode <i class="fas fa-moon ml-1"></i></button>
          </footer><!-- /Skin changer -->
        </div><!-- /.aside-content -->
      </aside><!-- /.app-aside -->
      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">

              <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
           
               <div class="page-section">
                <!-- .section-block -->
                <div class="section-block">
                  <!-- metric row -->
           
            <!-- .page-cover -->
          
              <!-- section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  <div class="card card-fluid pb-3">
                    <div class="card-header"> My Orders </div><!-- .lits-group -->
                    <div class="lits-group list-group-flush">

                    <div class="tab-content dashboard_content">
                    <div class="tab-pane fade  active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                      <table id="orders-table" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                            <th>OrderId</th>
                            <th>Product Name</th>
                            <th>Ordered By</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Ordered ON</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($orders  as $orderDetails){?>
                         
                            <tr>
                               
                                <td><a href="vieworder?orderId=<?php echo $orderDetails->orderId?>"><?php echo $orderDetails->orderId?></a></td>
                                <td><a href="vieworder?orderId=<?php echo $orderDetails->orderId?>"><?php echo $orderDetails->productName?></a></td>
                                <td><a href="vieworder?orderId=<?php echo $orderDetails->orderId?>"><?php echo $orderDetails->user_name?>(<?php echo $orderDetails->user_mobile?>)</a></td>
                                <td><?php echo $orderDetails->orderAmount?></td>
                                <td><?php echo $orderDetails->orderStatus?></td>
                                <td><?php echo date('d/m/Y',strtotime($orderDetails->orderDate))?></td>
                            </tr>
                            </a>
                        <?php }?>
                        </tbody>
                      </table>
                    </div>

                      </div><!-- /.lits-group -->
                  </div><!-- /.card -->
                <!-- /Modal Members List -->
                <!-- spinner -->
             
              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
    
        <?php include 'footernew.php'; ?>
  </body>
</html>