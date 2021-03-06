<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from uselooper.com/form-pickers.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Mar 2019 09:45:13 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Input Pickers | Looper - Bootstrap 4 Admin Theme </title>
    <meta property="og:title" content="Input Pickers">
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
        "headline": "Input Pickers",
        "@context": "http://schema.org"
      }
    </script><!-- End SEO tag -->
    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="144x144" href="assets/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/vendor/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="assets/vendor/nouislider/nouislider.min.css"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="assets/stylesheets/custom.css"><!-- Disable unused skin immediately -->
    <script>
      var skin = localStorage.getItem('skin') || 'default';
      var unusedLink = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      unusedLink.setAttribute('rel', '');
      unusedLink.setAttribute('disabled', true);
    </script><!-- END THEME STYLES -->
  </head>
  <body>
    <!-- .app -->
    <div class="app">
      <!--[if lt IE 10]>
      <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
      <![endif]-->
      <!-- .app-header -->
      <header class="app-header app-header-dark">
        <!-- .top-bar -->
        <div class="top-bar">
          <!-- .top-bar-brand -->
          <div class="top-bar-brand">
            <a href="index.html"><img src="assets/images/brand-inverse.png" alt="" style="height: 32px;width: auto;"></a>
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
              <form class="top-bar-search">
                <div class="input-group input-group-search">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                  </div><input type="text" class="form-control" aria-label="Search" placeholder="Search">
                </div>
              </form><!-- /.top-bar-search -->
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
                          <img src="assets/images/avatars/uifaces15.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Jeffrey Wells created a schedule </p><span class="date">Just now</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item unread">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/uifaces16.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Anna Vargas logged a chat </p><span class="date">3 hours ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/uifaces17.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Sara Carr invited to Stilearn Admin </p><span class="date">5 hours ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/uifaces18.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Arthur Carroll updated a project </p><span class="date">1 day ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/uifaces19.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Hannah Romero created a task </p><span class="date">1 day ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/uifaces20.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Angela Peterson assign a task to you </p><span class="date">2 days ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/uifaces21.jpg" alt="">
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
                          <img src="assets/images/avatars/team1.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Stilearning </p>
                          <p class="text text-truncate"> Invitation: Joe's Dinner @ Fri Aug 22 </p><span class="date">2 hours ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/team3.png" alt="">
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
                          <img src="assets/images/avatars/team2.png" alt="">
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
                <button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="user-avatar user-avatar-md"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name">Beni Arisandi</span> <span class="account-description">Marketing Manager</span></span></button>
                <div class="dropdown-arrow dropdown-arrow-left"></div><!-- .dropdown-menu -->
                <div class="dropdown-menu">
                  <h6 class="dropdown-header d-none d-md-block d-lg-none"> Beni Arisandi </h6><a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Help Center</a> <a class="dropdown-item" href="#">Ask Forum</a> <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
                </div><!-- /.dropdown-menu -->
              </div><!-- /.btn-account -->
            </div><!-- /.top-bar-item -->
          </div><!-- /.top-bar-list -->
        </div><!-- /.top-bar -->
      </header><!-- /.app-header -->
      <!-- .app-aside -->
      <aside class="app-aside app-aside-expand-md app-aside-light">
        <!-- .aside-content -->
        <div class="aside-content">
          <!-- .aside-header -->
          <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name">Beni Arisandi</span> <span class="account-description">Marketing Manager</span></span></button> <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
              <!-- dropdown-items -->
              <div class="pb-3">
                <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
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
                <li class="menu-item">
                  <a href="index.html" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon far fa-file"></span> <span class="menu-text">App Pages</span> <span class="badge badge-warning">New</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="page-clients.html" class="menu-link">Clients</a>
                    </li>
                    <li class="menu-item">
                      <a href="page-teams.html" class="menu-link">Teams</a>
                    </li>
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link">Team</a> <!-- grand child menu -->
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="page-team.html" class="menu-link">Overview</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-team-feeds.html" class="menu-link">Feeds</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-team-projects.html" class="menu-link">Projects</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-team-members.html" class="menu-link">Members</a>
                        </li>
                      </ul><!-- /grand child menu -->
                    </li>
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link">Project</a> <!-- grand child menu -->
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="page-project.html" class="menu-link">Overview</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-project-board.html" class="menu-link">Board</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-project-gantt.html" class="menu-link">Gantt View</a>
                        </li>
                      </ul><!-- /grand child menu -->
                    </li>
                    <li class="menu-item">
                      <a href="page-calendar.html" class="menu-link">Calendar</a>
                    </li>
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link">Invoices</a> <!-- grand child menu -->
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="page-invoices.html" class="menu-link">List</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-invoice.html" class="menu-link">Details</a>
                        </li>
                      </ul><!-- /grand child menu -->
                    </li>
                    <li class="menu-item">
                      <a href="page-messages.html" class="menu-link">Messages</a>
                    </li>
                    <li class="menu-item">
                      <a href="page-conversations.html" class="menu-link">Conversations</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-wrench"></span> <span class="menu-text">Auth</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="auth-comingsoon-v1.html" class="menu-link">Coming Soon v1</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-comingsoon-v2.html" class="menu-link">Coming Soon v2</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-cookie-consent.html" class="menu-link">Cookie Consent</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-empty-state.html" class="menu-link">Empty State</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-error-v1.html" class="menu-link">Error Page v1</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-error-v2.html" class="menu-link">Error Page v2</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-error-v3.html" class="menu-link">Error Page v3</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-maintenance.html" class="menu-link">Maintenance</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-page-message.html" class="menu-link">Page Message</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-session-timeout.html" class="menu-link">Session Timeout</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-signin-v1.html" class="menu-link">Sign In v1</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-signin-v2.html" class="menu-link">Sign In v2</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-signup.html" class="menu-link">Sign Up</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-recovery-username.html" class="menu-link">Recovery Username</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-recovery-password.html" class="menu-link">Recovery Password</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-lockscreen.html" class="menu-link">Screen Locked</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-person"></span> <span class="menu-text">User</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="user-profile.html" class="menu-link">Profile</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-activities.html" class="menu-link">Activities</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-teams.html" class="menu-link">Teams</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-projects.html" class="menu-link">Projects</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-tasks.html" class="menu-link">Tasks</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-profile-settings.html" class="menu-link">Profile Settings</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-account-settings.html" class="menu-link">Account Settings</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-billing-settings.html" class="menu-link">Billing Settings</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-notification-settings.html" class="menu-link">Notification Settings</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-browser"></span> <span class="menu-text">Layouts</span> <span class="badge badge-subtle badge-success">+4</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="layout-blank.html" class="menu-link">Blank Page</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-nosearch.html" class="menu-link">Header no Search</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-fullwidth.html" class="menu-link">Full Width</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-pagenavs.html" class="menu-link">Page Navs</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-pagecover.html" class="menu-link">Page Cover</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-pagecover-img.html" class="menu-link">Cover Image</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-pagesidebar.html" class="menu-link">Page Sidebar</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-pagesidebar-fluid.html" class="menu-link">Sidebar Fluid</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-pagesidebar-hidden.html" class="menu-link">Sidebar Hidden</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-custom.html" class="menu-link">Custom</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-header -->
                <li class="menu-header">Interfaces </li><!-- /.menu-header -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-puzzle-piece"></span> <span class="menu-text">Components</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="component-general.html" class="menu-link">General</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-icons.html" class="menu-link">Icons</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-rich-media.html" class="menu-link">Rich Media</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-list-views.html" class="menu-link">List Views</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-sortable-nestable.html" class="menu-link">Sortable & Nestable</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-activity.html" class="menu-link">Activity</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-steps.html" class="menu-link">Steps</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-tasks.html" class="menu-link">Tasks</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-metrics.html" class="menu-link">Metrics</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-active has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-pencil"></span> <span class="menu-text">Forms</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="form-basic.html" class="menu-link">Basic Elements</a>
                    </li>
                    <li class="menu-item">
                      <a href="form-autocompletes.html" class="menu-link">Autocompletes</a>
                    </li>
                    <li class="menu-item has-active">
                      <a href="form-pickers.html" class="menu-link">Pickers</a>
                    </li>
                    <li class="menu-item">
                      <a href="form-editors.html" class="menu-link">Editors</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon fas fa-table"></span> <span class="menu-text">Tables</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="table-basic.html" class="menu-link">Basic Table</a>
                    </li>
                    <li class="menu-item">
                      <a href="table-datatables.html" class="menu-link">Datatables</a>
                    </li>
                    <li class="menu-item">
                      <a href="table-responsive-datatables.html" class="menu-link">Responsive Datatables</a>
                    </li>
                    <li class="menu-item">
                      <a href="table-filters-datatables.html" class="menu-link">Filter Columns</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-bar-chart"></span> <span class="menu-text">Collections</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link">Chart.js</a> <!-- grand child menu -->
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="collection-chartjs-line.html" class="menu-link">Line</a>
                        </li>
                        <li class="menu-item">
                          <a href="collection-chartjs-bar.html" class="menu-link">Bar</a>
                        </li>
                        <li class="menu-item">
                          <a href="collection-chartjs-radar-scatter.html" class="menu-link">Radar & Scatter</a>
                        </li>
                        <li class="menu-item">
                          <a href="collection-chartjs-others.html" class="menu-link">Others</a>
                        </li>
                      </ul><!-- /grand child menu -->
                    </li>
                    <li class="menu-item">
                      <a href="collection-flot-charts.html" class="menu-link">Flot</a>
                    </li>
                    <li class="menu-item">
                      <a href="collection-inline-charts.html" class="menu-link">Inline charts</a>
                    </li>
                    <li class="menu-item">
                      <a href="collection-jqvmap.html" class="menu-link">Vector Map</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-list-rich"></span> <span class="menu-text">Level Menu</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="#" class="menu-link">Menu item</a>
                    </li>
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link">Menu item</a> <!-- grand child menu -->
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="#" class="menu-link">Child item</a>
                        </li>
                        <li class="menu-item">
                          <a href="#" class="menu-link">Child item</a>
                        </li>
                        <li class="menu-item has-child">
                          <a href="#" class="menu-link">Child item</a> <!-- grand child menu -->
                          <ul class="menu">
                            <li class="menu-item">
                              <a href="#" class="menu-link">Grand Child item</a>
                            </li>
                            <li class="menu-item">
                              <a href="#" class="menu-link">Grand Child item</a>
                            </li>
                            <li class="menu-item">
                              <a href="#" class="menu-link">Grand Child item</a>
                            </li>
                            <li class="menu-item">
                              <a href="#" class="menu-link">Grand Child item</a>
                            </li>
                          </ul><!-- /grand child menu -->
                        </li>
                        <li class="menu-item">
                          <a href="#" class="menu-link">Child item</a>
                        </li>
                      </ul><!-- /grand child menu -->
                    </li>
                    <li class="menu-item">
                      <a href="#" class="menu-link">Menu item</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
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
              <header class="page-title-bar">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                      <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Forms</a>
                    </li>
                  </ol>
                </nav>
                <h1 class="page-title"> Pickers </h1>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  <div class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                      <h4 class="card-title"> Flatpickr </h4>
                      <h6 class="card-subtitle mb-4"> Lightweight and powerful datetimepicker with no dependencies </h6><!-- form -->
                      <form>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="flatpickr01">Basic</label> <input id="flatpickr01" type="text" class="form-control" data-toggle="flatpickr">
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="flatpickr02">DateTime</label> <input id="flatpickr02" type="text" class="form-control" data-toggle="flatpickr" data-enable-time="true" data-date-format="Y-m-d H:i">
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="flatpickr03">Human-friendly Dates</label> <input id="flatpickr03" type="text" class="form-control" data-toggle="flatpickr" data-alt-input="true" data-alt-format="F j, Y" data-date-format="Y-m-d">
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="flatpickr04">minDate and maxDate</label> <input id="flatpickr04" type="text" class="form-control" data-toggle="flatpickr" data-default-date="2018-11-01" data-min-date="2018-11-03" data-max-date="2018-11-25"> <small class="form-text text-muted">14 days from now</small>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="flatpickr05">Disabling dates</label> <input id="flatpickr05" type="text" class="form-control" data-toggle="flatpickr" data-default-date="2018-11-01" data-disables='[ { "from": "2018-11-03", "to": "2018-11-03" }, { "from": "2018-11-20", "to": "2018-11-25" } ]' data-date-format="Y-m-d">
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="flatpickr06">Selecting multiple dates</label> <input id="flatpickr06" type="text" class="form-control" data-toggle="flatpickr" data-mode="multiple" data-default-date='["2018-03-03", "2018-03-20"]' data-date-format="Y-m-d">
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="flatpickr07">Range Calendar</label> <input id="flatpickr07" type="text" class="form-control" data-toggle="flatpickr" data-mode="range" data-date-format="Y-m-d" data-default-date='["2018-03-03", "2018-03-20"]'>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="flatpickr08">Time Picker</label> <input id="flatpickr08" type="text" class="form-control" data-toggle="flatpickr" data-enable-time="true" data-no-calendar="true" data-date-format="H:i" data-default-date="13:45">
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="flatpickr-wrap">Wrap element</label>
                          <div class="input-group input-group-alt flatpickr" id="flatpickr9" data-toggle="flatpickr" data-wrap="true">
                            <input id="flatpickr-wrap" type="text" class="form-control" data-input="">
                            <div class="input-group-append">
                              <button type="button" class="btn btn-secondary" data-toggle=""><i class="far fa-calendar"></i></button> <button type="button" class="btn btn-secondary" data-clear=""><i class="fa fa-times"></i></button>
                            </div>
                          </div>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label">Inline Calendar</label> <input id="flatpickr10" type="hidden" class="form-control d-none" data-toggle="flatpickr" data-inline="true">
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="flatpickr11">Month Select</label> <input id="flatpickr11" type="text" class="form-control" data-toggle="flatpickr" data-monthselect="true">
                        </div><!-- /.form-group -->
                      </form><!-- /form -->
                    </div><!-- /.card-body -->
                  </div><!-- /.card -->
                  <!-- .card -->
                  <div class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                      <h4 class="card-title"> Colorpicker </h4>
                      <h6 class="card-subtitle mb-4"> Simple and customizable colorpicker. </h6><!-- form -->
                      <form>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="colorpicker1" class="control-label">Simple input field</label> <input id="colorpicker1" type="text" class="form-control" data-toggle="colorpicker" value="#9474a9">
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="inputColorpicker2" class="control-label">As a component</label>
                          <div id="colorpicker2" class="input-group input-group-alt" data-toggle="colorpicker">
                            <input id="inputColorpicker2" type="text" class="form-control" value="#04C4A5"> <span class="input-group-append"><span class="input-group-text colorpicker-input-addon"><i class="align-self-center"></i></span></span>
                          </div>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="inputColorpicker3" class="control-label">Custom options</label>
                          <div id="colorpicker3" class="input-group input-group-alt" data-toggle="colorpicker" data-color="#4D9DE0" data-format="rgb">
                            <input id="inputColorpicker3" type="text" class="form-control" value="#C5906C"> <span class="input-group-append"><span class="input-group-text colorpicker-input-addon"><i class="align-self-center"></i></span></span>
                          </div>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="inputColorpicker4" class="control-label">Disable alpha channel</label>
                          <div id="colorpicker4" class="input-group input-group-alt" data-toggle="colorpicker" data-use-alpha="false">
                            <input id="inputColorpicker4" type="text" class="form-control" value="#C5906C"> <span class="input-group-append"><span class="input-group-text colorpicker-input-addon"><i class="align-self-center"></i></span></span>
                          </div>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="colorpicker5" class="control-label">Transparent color support</label> <input id="colorpicker5" type="text" class="form-control" data-toggle="colorpicker" data-color="transparent" data-format="rgba">
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="colorpicker6" class="control-label">Horizontal mode</label> <input id="colorpicker6" type="text" class="form-control" data-toggle="colorpicker" data-color="#C5906C" data-horizontal="true">
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label">Inline mode</label>
                          <div class="d-block">
                            <div id="colorpicker7" data-toggle="colorpicker" data-color="#C56C6C" data-container="true" data-inline="true"></div>
                          </div>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="inputColorpicker8" class="control-label">Aliased color palette</label>
                          <div id="colorpicker8" class="input-group input-group-alt" data-toggle="colorpicker" data-extensions='[ { "name": "swatches", "colors": { "black": "#000000", "white": "#ffffff", "red": "#FF0000", "default": "#777777", "primary": "#337ab7", "success": "#5cb85c", "info": "#5bc0de", "warning": "#f0ad4e", "danger": "#d9534f" }, "namesAsValues": true } ]'>
                            <input id="inputColorpicker8" type="text" class="form-control" value="#9474a9"> <span class="input-group-append"><span class="input-group-text colorpicker-input-addon"><i class="align-self-center"></i></span></span>
                          </div>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label">Custom template</label>
                          <div class="d-block">
                            <div id="colorpicker9" data-color="#04C4A5"></div>
                          </div>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label">Inside a modal</label>
                          <div class="d-block">
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#cpModal">Show modal</button>
                          </div><!-- .modal -->
                          <div class="modal fade" id="cpModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <!-- .modal-dialog -->
                            <div class="modal-dialog">
                              <!-- .modal-content -->
                              <div class="modal-content">
                                <!-- .modal-body -->
                                <div class="modal-body">
                                  <div id="colorpicker10" class="input-group input-group-alt" data-toggle="colorpicker">
                                    <input type="text" class="form-control" value="#4D9DE0"> <span class="input-group-append"><span class="input-group-text colorpicker-input-addon"><i class="align-self-center"></i></span></span>
                                  </div>
                                </div><!-- /.modal-body -->
                              </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                        </div><!-- /.form-group -->
                      </form><!-- /form -->
                    </div><!-- /.card-body -->
                  </div><!-- /.card -->
                </div><!-- /.section-deck -->
                <hr class="my-5">
                <!-- grid row -->
                <div class="row">
                  <!-- grid column -->
                  <div class="col-lg-4">
                    <!-- .section-block -->
                    <div class="section-block mt-0">
                      <h2 class="section-title pt-0"> Uploader </h2>
                      <p class="text-muted"> File Upload widget with multiple file selection, drag & drop support, progress bar, validation and preview images, audio and video. Supports cross-domain, chunked and resumable file uploads. Works with any server-side platform (Google App Engine, PHP, Python, Ruby on Rails, Java, etc.) that supports standard HTML form file uploads. </p>
                    </div><!-- /.section-block -->
                  </div><!-- /grid column -->
                  <!-- grid column -->
                  <div class="col-lg-8">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- The avatar upload progress bar -->
                      <div id="progress-avatar" class="progress progress-xs rounded-0 fade">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><!-- .card-body -->
                      <div class="card-body">
                        <!-- .media -->
                        <div class="media">
                          <div class="user-avatar user-avatar-xl fileinput-button">
                            <div class="fileinput-button-label"> Change photo </div><img src="assets/images/avatars/profile.jpg" alt=""> <input id="fileupload-avatar" type="file" name="avatar">
                          </div>
                          <div class="media-body pl-3">
                            <h3 class="card-title"> jQuery File Upload </h3>
                            <p class="card-text"> Click the current avatar to change your photo. </p>
                            <p class="card-text text-muted"> The maximum file size allowed is 2MB. </p>
                          </div>
                        </div><!-- /.media -->
                      </div><!-- /.card-body -->
                      <div id="avatar-warning-container" class="alert alert-danger fade mb-0"></div>
                    </div><!-- /.card -->
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <!-- The fileinput-button span is used to style the file input field as button -->
                        <label>Using custom input</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="fileupload-customInput" multiple> <label class="custom-file-label" for="fileupload-customInput">Choose files</label>
                        </div>
                        <hr>
                        <label class="mr-2">Using button</label>
                        <div class="btn btn-secondary fileinput-button">
                          <i class="fa fa-plus fa-fw"></i> <span>Add files...</span> <!-- The file input field used as target for the file upload widget -->
                          <input id="fileupload-btn" type="file" name="files[]" multiple>
                        </div>
                        <hr>
                        <label>Using dropzone</label>
                        <div id="dropzone" class="fileinput-dropzone">
                          <span>Drop files or click to upload.</span> <!-- The file input field used as target for the file upload widget -->
                          <input id="fileupload-dropzone" type="file" name="files[]" multiple>
                        </div>
                      </div><!-- /.card-body -->
                      <!-- The progress bar -->
                      <div id="progress" class="progress progress-xs rounded-0 fade">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><!-- The container for the uploaded files -->
                      <div id="uploadList" class="list-group list-group-flush list-group-divider"></div>
                    </div><!-- /.card -->
                  </div><!-- /grid column -->
                </div><!-- /grid row -->
                <hr class="my-5">
                <!-- grid row -->
                <div class="row">
                  <!-- grid column -->
                  <div class="col-lg-4">
                    <!-- .section-block -->
                    <div class="section-block mt-0">
                      <h2 class="section-title pt-0"> Spinner </h2>
                      <p class="text-muted"> A mobile and touch friendly input spinner component. It supports the mousewheel and the up/down keys. </p>
                    </div><!-- /.section-block -->
                  </div><!-- /grid column -->
                  <!-- grid column -->
                  <div class="col-lg-8">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <!-- form -->
                        <form>
                          <!-- .form-group -->
                          <div class="form-group">
                            <label class="control-label" for="spinner1">Basic spinner</label> <input type="text" id="spinner1" data-toggle="touchspin">
                          </div><!-- /.form-group -->
                          <!-- .form-group -->
                          <div class="form-group">
                            <label class="control-label" for="spinner2">With postfix</label> <input type="text" value="55" id="spinner2" data-toggle="touchspin" data-min="0" data-max="100" data-step="0.1" data-decimals="2" data-boostat="5" data-maxboostedstep="10" data-postfix="%">
                          </div><!-- /.form-group -->
                          <!-- .form-group -->
                          <div class="form-group">
                            <label class="control-label" for="spinner3">With prefix</label> <input type="text" value="33" id="spinner3" data-toggle="touchspin" data-min="-1000000000" data-max="1000000000" data-stepinterval="50" data-maxboostedstep="10000000" data-prefix="$">
                          </div><!-- /.form-group -->
                          <!-- .form-group -->
                          <div class="form-group">
                            <label class="control-label" for="spinner4">Vertical button alignment</label> <input type="text" value="55" id="spinner4" data-toggle="touchspin" data-verticalbuttons="true">
                          </div><!-- /.form-group -->
                          <!-- .form-group -->
                          <div class="form-group">
                            <label class="control-label" for="spinner5">Vertical buttons with custom icons</label> <input type="text" value="55" id="spinner5" data-toggle="touchspin" data-verticalbuttons="true" data-verticalup="&lt;i class='fa fa-angle-up'&gt;&lt;/i&gt;" data-verticaldown="&lt;i class='fa fa-angle-down'&gt;&lt;/i&gt;">
                          </div><!-- /.form-group -->
                        </form><!-- /form -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->
                </div><!-- /grid row -->
                <hr class="my-5">
                <!-- .section-block -->
                <div class="section-block">
                  <h2 class="section-title"> Slider </h2>
                  <p class="text-muted"> Lightweight JavaScript range slider library. It offers a wide selection of options and settings, and is compatible with a ton of (touch) devices, including those running iOS, Android, Windows 8/8.1/10, Windows Phone 8.1 and Windows Mobile 10. </p>
                </div><!-- /.section-block -->
                <!-- .masonry-layout -->
                <div class="masonry-layout">
                  <!-- .masonry-item -->
                  <div class="masonry-item col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h3 class="card-title"> noUiSlider </h3><!-- .media -->
                        <div class="media">
                          <!-- .media-left -->
                          <div class="media-left">
                            <div class="text-truncate p-3" id="nouislider-colorpicker">
                              <div class="noUi-danger mr-4 d-inline-block" id="red" style="height:220px" data-toggle="nouislider" data-start="128" data-connect='[true, false]' data-orientation="vertical" data-range='{ "min": 0, "max": 255 }' data-format-wnumb='{ "decimals": 0 }'></div>
                              <div class="noUi-success mr-4 d-inline-block" id="green" style="height:220px" data-toggle="nouislider" data-start="128" data-connect='[true, false]' data-orientation="vertical" data-range='{ "min": 0, "max": 255 }' data-format-wnumb='{ "decimals": 0 }'></div>
                              <div class="noUi-info mr-4 d-inline-block" id="blue" style="height:220px" data-toggle="nouislider" data-start="128" data-connect='[true, false]' data-orientation="vertical" data-range='{ "min": 0, "max": 255 }' data-format-wnumb='{ "decimals": 0 }'></div>
                            </div>
                          </div><!-- /.media-left -->
                          <!-- .media-body -->
                          <div class="media-body align-middle p-3">
                            <div class="bordered" id="ncp-result" style="width:100px;height:100px;background-color: rgb(128,128,128)"></div>
                          </div><!-- /.media-body -->
                        </div><!-- /.media -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /.masonry-item -->
                  <!-- .masonry-item -->
                  <div class="masonry-item col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h3 class="card-title"> Using HTML5 input elements </h3>
                        <div class="nouislider-wrapper">
                          <div id="html5" data-toggle="nouislider" data-start="[ 10, 30 ]" data-connect="true" data-range='{ "min": -20, "max": 40 }'></div>
                        </div><!-- grid row -->
                        <div class="form-row">
                          <!-- grid column -->
                          <div class="col">
                            <select id="input-select" class="custom-select">
                            </select>
                          </div><!-- /grid column -->
                          <!-- grid column -->
                          <div class="col">
                            <input id="input-number" class="form-control" type="number" min="-20" max="40" step="1">
                          </div><!-- /grid column -->
                        </div><!-- /grid row -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /.masonry-item -->
                  <!-- .masonry-item -->
                  <div class="masonry-item col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h3 class="card-title"> Non linear slider </h3>
                        <div class="nouislider-wrapper">
                          <div id="nonlinear" class="noUi-danger" data-toggle="nouislider" data-connect="true" data-behaviour="tap" data-start='[ 500, 4000 ]' data-range='{ "min": [ 0 ], "10%": [ 500, 500 ], "50%": [ 4000, 1000 ], "max": [ 10000 ] }'></div>
                        </div><span class="badge badge-info" id="lower-value"></span> <span class="badge badge-info" id="upper-value"></span>
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /.masonry-item -->
                  <!-- .masonry-item -->
                  <div class="masonry-item col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h3 class="card-title"> Colored Connect Elements </h3>
                        <p>
                          <button id="lockbutton" class="btn btn-secondary">Lock</button>
                        </p>
                        <p>
                          <span class="badge badge-info" id="slider1-span"></span>
                        </p>
                        <div class="nouislider-wrapper">
                          <div class="noUi-success" id="slider1" data-toggle="nouislider" data-start="60" data-connect='[true, false]' data-animate="false" data-range='{ "min": 50, "max": 100 }'></div>
                        </div>
                        <p>
                          <span class="badge badge-info" id="slider2-span"></span>
                        </p>
                        <div class="nouislider-wrapper">
                          <div class="noUi-warning" id="slider2" data-toggle="nouislider" data-start="80" data-connect='[true, false]' data-animate="false" data-range='{ "min": 50, "max": 100 }'></div>
                        </div>
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /.masonry-item -->
                  <!-- .masonry-item -->
                  <div class="masonry-item col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h3 class="card-title"> Locking sliders together </h3>
                        <p> noUiSlider's connect elements can be individually colored or otherwise styled. </p>
                        <div class="nouislider-wrapper">
                          <div id="slider-color" data-toggle="nouislider" data-start='[4000, 8000, 12000, 16000]' data-connect='[false, true, true, true, true]' data-range='{ "min": [2000], "max": [20000] }'></div>
                        </div>
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /.masonry-item -->
                  <!-- .masonry-item -->
                  <div class="masonry-item col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h3 class="card-title"> Changing the slider by keypress in input </h3>
                        <div class="nouislider-wrapper">
                          <div id="keypress" data-toggle="nouislider" data-start="[20, 80]" data-connect="true" data-direction="rtl" data-tooltips="true" data-range='{ "min": [0], "10%": [10, 10], "50%": [80, 50], "80%": 150, "max": 200 }'></div>
                        </div><!-- grid row -->
                        <div class="form-row">
                          <!-- grid column -->
                          <div class="col">
                            <input type="text" id="input-with-keypress-1" class="form-control">
                          </div><!-- /grid column -->
                          <!-- grid column -->
                          <div class="col">
                            <input type="text" id="input-with-keypress-0" class="form-control">
                          </div><!-- /grid column -->
                        </div><!-- /grid row -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /.masonry-item -->
                  <!-- .masonry-item -->
                  <div class="masonry-item col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h3 class="card-title"> Skipping steps </h3>
                        <p> Notice how <code>40</code> and <code>80</code> can't be selected on the slider. </p>
                        <div class="nouislider-wrapper">
                          <div id="skipstep" data-toggle="nouislider" data-range='{ "min": 0, "10%": 10, "20%": 20, "30%": 30, "50%": 50, "60%": 60, "70%": 70, "90%": 90, "max": 100 }' data-snap="true" data-start='[20, 90]'></div>
                        </div><span id="skip-value-lower" class="badge badge-secondary"></span> <span id="skip-value-upper" class="badge badge-secondary"></span>
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /.masonry-item -->
                  <!-- .masonry-item -->
                  <div class="masonry-item col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h3 class="card-title"> Huge numbers </h3>
                        <p> If you are working with arbitrarily large numbers, you should <strong>not use these directly in noUiSlider</strong>, as you'll run into some JavaScript limitations. Instead, you should <strong>map</strong> your values to an <code>array</code>. </p>
                        <div class="nouislider-wrapper">
                          <div id="slider-huge" data-toggle="nouislider" data-start="4" data-step="1" data-connect='[true, false]' data-format-wnumb='{ "decimals": 0 }' data-range='{ "min": 0, "max": 13 }'></div>
                        </div>
                        <div id="huge-value" class="help-block"></div>
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /.masonry-item -->
                  <!-- .masonry-item -->
                  <div class="masonry-item col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h3 class="card-title"> Adding keyboard support </h3>
                        <p> Much like the keypress example, handles can be made keyboard-focusable. </p>
                        <div class="form-group">
                          <input class="form-control" placeholder="Hit tab to focus on the handle.">
                        </div>
                        <div class="nouislider-wrapper">
                          <div id="keyboard" data-toggle="nouislider" data-start="10" data-step="10" data-range='{ "min": 0, "max": 100 }'></div>
                        </div>
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /.masonry-item -->
                  <!-- .masonry-item -->
                  <div class="masonry-item col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h3 class="card-title"> Working with dates </h3>
                        <div class="nouislider-wrapper">
                          <!-- we use getTime() fn to get range and start values -->
                          <div id="slider-date" data-toggle="nouislider" data-range='{ "min": 1262304000000, "max": 1451606400000 }' data-step="604800000" data-start='[1293840000000, 1420070400000]' data-format-wnumb='{ "decimals": 0 }'></div>
                        </div><span class="badge badge-info" id="event-start"></span> <span class="badge badge-info" id="event-end"></span>
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /.masonry-item -->
                  <!-- .masonry-item -->
                  <div class="masonry-item col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h3 class="card-title"> Soft limits </h3>
                        <div class="nouislider-wrapper mb-5">
                          <div id="slider-soft" data-toggle="nouislider" data-start="50" data-range='{ "min": 0, "max": 100 }' data-pips='{ "mode": "values", "values": [20, 80], "density": 4 }'></div>
                        </div>
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /.masonry-item -->
                </div><!-- /.masonry-layout -->
              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
          </div><!-- /.page -->
        </div><!-- .app-footer -->
        <footer class="app-footer">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a class="text-muted" href="#">Support</a>
            </li>
            <li class="list-inline-item">
              <a class="text-muted" href="#">Help Center</a>
            </li>
            <li class="list-inline-item">
              <a class="text-muted" href="#">Privacy</a>
            </li>
            <li class="list-inline-item">
              <a class="text-muted" href="#">Terms of Service</a>
            </li>
          </ul>
          <div class="copyright"> Copyright ?? 2018. All right reserved. </div>
        </footer><!-- /.app-footer -->
        <!-- /.wrapper -->
      </main><!-- /.app-main -->
    </div><!-- /.app -->
    <!-- BEGIN BASE JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="assets/vendor/pace/pace.min.js"></script>
    <script src="assets/vendor/stacked-menu/stacked-menu.min.js"></script>
    <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/vendor/masonry-layout/masonry.pkgd.min.js"></script>
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="assets/vendor/flatpickr/plugins/monthSelect/monthSelect.js"></script>
    <script src="assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="assets/vendor/nouislider/wNumb.js"></script>
    <script src="assets/vendor/nouislider/nouislider.min.js"></script>
    <script src="assets/vendor/blueimp-file-upload/js/vendor/jquery.ui.widget.min.js"></script>
    <script src="assets/vendor/blueimp-load-image/load-image.all.min.js"></script>
    <script src="assets/vendor/blueimp-canvas-to-blob/canvas-to-blob.min.js"></script>
    <script src="assets/vendor/blueimp-file-upload/js/jquery.iframe-transport.min.js"></script>
    <script src="assets/vendor/blueimp-file-upload/js/jquery.fileupload.min.js"></script>
    <script src="assets/vendor/blueimp-file-upload/js/jquery.fileupload-process.min.js"></script>
    <script src="assets/vendor/blueimp-file-upload/js/jquery.fileupload-image.min.js"></script>
    <script src="assets/vendor/blueimp-file-upload/js/jquery.fileupload-audio.min.js"></script>
    <script src="assets/vendor/blueimp-file-upload/js/jquery.fileupload-video.min.js"></script>
    <script src="assets/vendor/blueimp-file-upload/js/jquery.fileupload-validate.min.js"></script>
    <script src="assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="assets/javascript/pages/colorpicker-demo.js"></script>
    <script src="assets/javascript/pages/uploader-demo.js"></script>
    <script src="assets/javascript/pages/slider-demo.js"></script> <!-- END PAGE LEVEL JS -->
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
  </body>

<!-- Mirrored from uselooper.com/form-pickers.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Mar 2019 09:45:17 GMT -->
</html>