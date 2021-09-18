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
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Dashboard | Looper - Bootstrap 4 Admin Theme </title>
    <meta property="og:title" content="Dashboard">
    <meta name="author" content="Beni Arisandi">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    <link rel="canonical" href="index-2.html">
    <meta property="og:url" content="index-2.html">
    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
    <script type="application/ld+json">
      {
        "name": "Looper - Bootstrap 4 Admin Theme",
        "description": "Responsive admin theme build on top of Bootstrap 4",
        "author":
        {
          "@type": "Person",
          "name": "Beni Arisandi"
        },
        "@type": "WebSite",
        "url": "",
        "headline": "Dashboard",
        "@context": "http://schema.org"
      }
    </script><!-- End SEO tag -->
    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>assets/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/favicon.ico">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/flatpickr/flatpickr.min.css"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/custom.css"><!-- Disable unused skin immediately -->
    <script>
      var skin = localStorage.getItem('skin') || 'default';
      var unusedLink = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      unusedLink.setAttribute('rel', '');
      unusedLink.setAttribute('disabled', true);
    </script><!-- END THEME STYLES -->
<!-- END HEADER -->
<style type="text/css">
       .menu-text {
        color: #fff
       }

       .activemenu {
        color: #000
       }

     </style>

 <header class="app-header app-header-dark">
        <!-- .top-bar -->
        <div class="top-bar">
          <!-- .top-bar-brand -->
          <div class="top-bar-brand">
            <a href="#"><img src="<?php echo base_url();?>assets/images/logo_dark_new.png" alt="" style="height: 32px;width: auto;"></a>
          </div><!-- /.top-bar-brand -->
          <!-- .top-bar-list -->
          <div class="top-bar-list">
            <!-- .top-bar-item -->
            <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
              <!-- toggle menu -->
              <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
            </div><!-- /.top-bar-item -->
            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-full">
              <!-- .top-bar-search -->
            
            </div><!-- /.top-bar-item -->
            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
              <!-- .nav -->
              <ul class="header-nav nav">
                <!-- .nav-item -->
                <li class="nav-item dropdown header-nav-dropdown has-notified">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-pulse"></span></a>
                  <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                    <h6 class="dropdown-header stop-propagation">
                      <span>Activities <span class="badge">(2)</span></span>
                    </h6><!-- .dropdown-scroll -->
                    <div class="dropdown-scroll perfect-scrollbar">
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item unread">
                        <div class="user-avatar">
                          <img src="<?php echo base_url();?>assets/images/avatars/uifaces15.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Jeffrey Wells created a schedule </p><span class="date">Just now</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item unread">
                        <div class="user-avatar">
                          <img src="<?php echo base_url();?>assets/images/avatars/uifaces16.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Anna Vargas logged a chat </p><span class="date">3 hours ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="<?php echo base_url();?>assets/images/avatars/uifaces17.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Sara Carr invited to Stilearn Admin </p><span class="date">5 hours ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="<?php echo base_url();?>assets/images/avatars/uifaces18.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Arthur Carroll updated a project </p><span class="date">1 day ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="<?php echo base_url();?>assets/images/avatars/uifaces19.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Hannah Romero created a task </p><span class="date">1 day ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="<?php echo base_url();?>assets/images/avatars/uifaces20.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Angela Peterson assign a task to you </p><span class="date">2 days ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="<?php echo base_url();?>assets/images/avatars/uifaces21.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Shirley Mason and 3 others followed you </p><span class="date">2 days ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                    </div><!-- /.dropdown-scroll -->
                    <a href="user-activities.html" class="dropdown-footer">All activities <i class="fas fa-fw fa-long-arrow-alt-right"></i></a>
                  </div><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <!-- .nav-item -->
                <li class="nav-item dropdown header-nav-dropdown has-notified">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-envelope-open"></span></a>
                  <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                    <h6 class="dropdown-header stop-propagation">
                      <span>Messages</span> <a href="#">Mark all as read</a>
                    </h6><!-- .dropdown-scroll -->
                    <div class="dropdown-scroll perfect-scrollbar">
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item unread">
                        <div class="user-avatar">
                          <img src="<?php echo base_url();?>assets/images/avatars/team1.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Stilearning </p>
                          <p class="text text-truncate"> Invitation: Joe's Dinner @ Fri Aug 22 </p><span class="date">2 hours ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="<?php echo base_url();?>assets/images/avatars/team3.png" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Openlane </p>
                          <p class="text text-truncate"> Final reminder: Upgrade to Pro </p><span class="date">23 hours ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="tile tile-circle bg-green"> GZ </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Gogo Zoom </p>
                          <p class="text text-truncate"> Live healthy with this wireless sensor. </p><span class="date">1 day ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="tile tile-circle bg-teal"> GD </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Gold Dex </p>
                          <p class="text text-truncate"> Invitation: Design Review @ Mon Jul 7 </p><span class="date">1 day ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="<?php echo base_url();?>assets/images/avatars/team2.png" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Creative Division </p>
                          <p class="text text-truncate"> Need some feedback on this please </p><span class="date">2 days ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="tile tile-circle bg-pink"> LD </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Lab Drill </p>
                          <p class="text text-truncate"> Our UX exercise is ready </p><span class="date">6 days ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                    </div><!-- /.dropdown-scroll -->
                    <a href="page-messages.html" class="dropdown-footer">All messages <i class="fas fa-fw fa-long-arrow-alt-right"></i></a>
                  </div><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <!-- .nav-item -->
                <li class="nav-item dropdown header-nav-dropdown">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-grid-three-up"></span></a>
                  <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                    <!-- .dropdown-sheets -->
                    <div class="dropdown-sheets">
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-indigo"><i class="oi oi-people"></i></span> <span class="tile-peek">Teams</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-teal"><i class="oi oi-fork"></i></span> <span class="tile-peek">Projects</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-pink"><i class="fa fa-tasks"></i></span> <span class="tile-peek">Tasks</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-yellow"><i class="oi oi-fire"></i></span> <span class="tile-peek">Feeds</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-cyan"><i class="oi oi-document"></i></span> <span class="tile-peek">Files</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                    </div><!-- .dropdown-sheets -->
                  </div><!-- .dropdown-menu -->
                </li><!-- /.nav-item -->
              </ul><!-- /.nav -->
              <!-- .btn-account -->
              <div class="dropdown">
                <?php if(isset($this->session->user_id)){ ?>
                <button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="user-avatar user-avatar-md"><img src="<?php echo base_url();?>assets/images/avatars/profile.jpg" alt=""></span> <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name"><?php echo $this->session->user_name;?></span> <!-- <span class="account-description">Marketing Manager</span> --></span></button>
                <div class="dropdown-arrow dropdown-arrow-left"></div><!-- .dropdown-menu -->
                <div class="dropdown-menu">
                  <h6 class="dropdown-header d-none d-md-block d-lg-none"> <?php echo $this->session->user_name;?></h6>
                  <a class="dropdown-item" href="<?php echo site_url('myaccount')?>"><span class="dropdown-icon oi oi-person"></span> Profile</a>
                  <a class="dropdown-item" href="<?php echo site_url('users/logout')?>"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Help Center</a> <a class="dropdown-item" href="#">Ask Forum</a> <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
                <?php } ?>

                </div><!-- /.dropdown-menu -->
              </div><!-- /.btn-account -->
            </div><!-- /.top-bar-item -->
          </div><!-- /.top-bar-list -->
        </div><!-- /.top-bar -->
      </header><!-- /.app-header -->

       <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="<?php echo base_url();?>assets/vendor/pace/pace.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/stacked-menu/stacked-menu.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/chart.js/Chart.min.js"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="<?php echo base_url();?>assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="<?php echo base_url();?>assets/javascript/pages/dashboard-demo.js"></script> <!-- END PAGE LEVEL JS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-116692175-1');
    </script>