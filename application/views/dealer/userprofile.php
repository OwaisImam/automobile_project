<?php $this->load->view('scripts'); ?>
<body>
  <style type="text/css">
    #panel{
    
    
}
#close{
    display:block;
    float:right;
    width:30px;
    height:29px;
    background:url(https://web.archive.org/web/20110126035650/http://digitalsbykobke.com/images/close.png) no-repeat center center;
}

  </style>
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
      <aside class="app-aside app-aside-expand-md app-aside-light" style="background-color:#0179a8">
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
          <div class="aside-menu overflow-hidden" >
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
              <!-- .menu -->
              <ul class="menu">
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="<?php echo site_url('dashboard')?>" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
               
                
                <!-- .menu-item -->
                <li class="menu-item ">
                  <a href="<?php echo site_url('dashboard/userprofile')?>" class="menu-link"><span class="menu-icon oi oi-person"></span> <span class="menu-text"  style="color: #000">My Profile </span></a> <!-- child menu -->
                 
                </li><!-- /.menu-item -->

                 <!-- .menu-item -->
                <!-- <li class="menu-item has-child">
                  <a href="<?php echo site_url('users/logout')?>" class="menu-link"><span class="menu-icon oi oi-browser"></span> <span class="menu-text">Logout</span> <span class="badge badge-subtle badge-success"></span></a> 
                </li> --><!-- /.menu-item -->
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
      <main class="app-main" style="background: #fff">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">

              <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
           
               <div class="page-section">
                <!-- .section-block -->
                
            <!-- .page-cover -->
          
              <!-- section-deck -->
                <div class="section-deck" >
                  <!-- .card -->
                  <div class="card card-fluid pb-3" style="background: #fff">
                    <div class="card-header" style="color: #000"> My Profile </div><!-- .lits-group -->
                    <div class="lits-group list-group-flush">
                      <div class="card-body">
                       <input type="hidden"  name="user_id" value="<?php echo $userData->user_id;?>"> 
                       <input type="hidden"  name="adress_proof" value="<?php echo $userData->adress_proof;?>"> 
                       

                                <form method="post" name="enq" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                          <label>Full Name : <span class="required">
                                             <input type="text"  name="user_name" value="<?php echo $userData->user_name;?>"> 
                                            </span></label>
                                            
                                         </div>
                                        <div class="form-group col-md-12">
                                          <label>Username : <span class="required">
                                            <input type="text"  name="username" value="<?php echo $userData->username;?>"> </span></label>
                                        </div>

                                        <div class="form-group col-md-12">
                                          <label>Email Address : <span class="required">
                                            <input type="text"  name="user_email" value="<?php echo $userData->user_email;?>"> 
                                          </span></label>
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                          <label>Mobile Number : <span class="required">
                                            <input type="text"  name="user_mobile" value="<?php echo $userData->user_mobile;?>"> </span></label>
                                        </div>

                                        <!-- <div class="form-group col-md-12">
                                          <label>Referal Id : <span class="required"><?php echo $userData->referal_id;?></span></label>
                                        </div>
 -->
                                        <div class="form-group col-md-12">
                                          <label>Address : <span class="required">
                                            <input type="text"  name="addessline1" value="<?php echo $userData->addessline1;?>"> </span></label>
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                          <label>Town / City : <span class="required">
                                            <input type="text"  name="city" value="<?php echo $userData->city;?>"> </span></label>
                                        </div>

                                        <div class="form-group col-md-12">
                                          <label>State : <span class="required">
                                            <input type="text"  name="state" value="<?php echo $userData->state;?>"> </span></label>
                                        </div>

                                        <div class="form-group col-md-12">
                                          <label>PIN Code : <span class="required">
                                            <input type="text"  name="pincode" value="<?php echo $userData->pincode;?>"> </span></label>
                                        </div>


                                        
                                         <div class="form-group col-md-12" id="panel">
                                          <label>Address Proof : 
                                            <span class="required">
                                              <?php if($userData->adress_proof) { ?>
                                              <img src="<?php echo base_url();?>\<?php echo $userData->adress_proof?>" width="150" height="150" />
                                              <? } ?>
                                              <!-- <a id="close" href="#"></a> -->
                                              <label>Upload New <span class="required"></span></label>
                                            <input required="" type="file" id="file" name="file[]" multiple>
                                          
                                            </span></label>
                                            
                                         </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">Update</button>
                                        </div> 
                                    </div>
                                </form>
                                <div style="color: #000;margin-top: 20px">
                                <?php
                                //echo $productSaved;
                                 if (isset($errors)) {
                                    echo implode('<br/>', $errors);
                                } 
                                if ($saved) {
                                    echo 'User details updated successfully.';
                                }
                                ?>
                              </div>
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