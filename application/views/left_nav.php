      <aside class="app-aside app-aside-expand-md app-aside-light" style="background: #0179a8">
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
              <ul class="menu" >
                <!-- .menu-item -->
                <!-- <li class="menu-item has-active" > -->
                  <li class="menu-item" >
                  <a href="<?php echo site_url('dashboard')?>" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text" style="color: #000">Dashboard</span></a>
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
               
                 <li class="menu-item has-child">
                  <a href="<?php echo site_url('dashboard/userteams')?>" class="menu-link"><span class="menu-icon oi oi-browser"></span> <span class="menu-text">My Team</span> <span class="badge badge-subtle badge-success"></span></a> <!-- child menu -->  
                </li><!-- /.menu-item -->

               <li class="menu-item has-child">
                  <a href="<?php echo site_url('dashboard/userorders')?>" class="menu-link"><span class="menu-icon oi oi-browser"></span> <span class="menu-text">My Orders</span> <span class="badge badge-subtle badge-success"></span></a> <!-- child menu -->  
                </li><!-- /.menu-item -->

                <li class="menu-item has-child">
                  <a href="<?php echo site_url('dashboard/mydirectrefers')?>" class="menu-link"><span class="menu-icon oi oi-browser"></span> <span class="menu-text">My Direct Refers</span> <span class="badge badge-subtle badge-success"></span></a> <!-- child menu -->  
                </li><!-- /.menu-item -->

                <!-- <li class="menu-item has-child">
                  <a href="<?php echo site_url('dashboard/useraddress')?>" class="menu-link"><span class="menu-icon oi oi-browser"></span> <span class="menu-text">My Address</span> <span class="badge badge-subtle badge-success"></span></a>
                </li> --><!-- /.menu-item -->
                
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="<?php echo site_url('dashboard/userprofile')?>" class="menu-link"><span class="menu-icon oi oi-person"></span> <span class="menu-text">My Profile </span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="<?php echo site_url('dashboard/userprofile')?>" class="menu-link">Profile</a>
                    </li>
                    <li class="menu-item">
                      <a href="<?php echo site_url('dashboard/useractivities')?>" class="menu-link">Activities</a>
                    </li>
                    <li class="menu-item">
                      <a href="<?php echo site_url('dashboard/userteams')?>" class="menu-link">Teams</a>
                    </li>
                    <li class="menu-item">
                      <a href="<?php echo site_url('dashboard/userprojects')?>" class="menu-link">Projects</a>
                    </li>
                    <li class="menu-item">
                      <a href="<?php echo site_url('dashboard/usertasks')?>" class="menu-link">Tasks</a>
                    </li>
                    <li class="menu-item">
                      <a href="<?php echo site_url('dashboard/userprofilesettings')?>" class="menu-link">Profile Settings</a>
                    </li>
                    <li class="menu-item">
                      <a href="<?php echo site_url('dashboard/useraccountsettings')?>" class="menu-link">Account Settings</a>
                    </li>
                    <li class="menu-item">
                      <a href="<?php echo site_url('dashboard/userbillingsettings')?>" class="menu-link">Billing Settings</a>
                    </li>
                    <li class="menu-item">
                      <a href="<?php echo site_url('dashboard/usernotificationsettings')?>" class="menu-link">Notification Settings</a>
                    </li>
                  </ul><!-- /child menu -->
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