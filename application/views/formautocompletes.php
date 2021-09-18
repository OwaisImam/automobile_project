<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from uselooper.com/form-autocompletes.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Mar 2019 09:45:10 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Input Autocompletes | Looper - Bootstrap 4 Admin Theme </title>
    <meta property="og:title" content="Input Autocompletes">
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
        "headline": "Input Autocompletes",
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
    <link rel="stylesheet" href="assets/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="assets/vendor/tributejs/tribute.css">
    <link rel="stylesheet" href="assets/vendor/at.js/css/jquery.atwho.min.css"><!-- END PLUGINS STYLES -->
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
                    <li class="menu-item has-active">
                      <a href="form-autocompletes.html" class="menu-link">Autocompletes</a>
                    </li>
                    <li class="menu-item">
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
                <h1 class="page-title"> Autocompletes </h1>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  <div class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                      <h4 class="card-title"> Select2 </h4>
                      <h6 class="card-subtitle mb-4"> A jQuery based replacement for select boxes. </h6><!-- form -->
                      <form>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="select2-single">Single select boxes</label> <select id="select2-single" class="form-control" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                          </select>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="select2-multiple">Multiple select boxes</label> <select id="select2-multiple" class="form-control" data-toggle="select2" data-placeholder="Select a state" data-maximum-selection-length="4" multiple>
                          </select>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="select2-data-array">Loading array data</label> <select id="select2-data-array" class="form-control" data-toggle="select2" data-data='[ {"id": 0, "text": "Visa"}, {"id": 1, "text": "Discover Card"}, {"id": 2, "text": "American Express"}, {"id": 3, "text": "MasterCard"}, {"id": 4, "text": "American Express"} ]' data-minimum-results-for-search="Infinity">
                          </select>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="select2-data-remote">Loading remote data</label> <select id="select2-data-remote" class="form-control">
                          </select>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <!-- .control-label -->
                          <label class="control-label" for="select2-tagging">Tagging support</label> <!-- you can put options directly in data attribute -->
                          <select id="select2-tagging" class="form-control" data-toggle="select2" data-options='{ "tags": ["SandyBrown", "GhostWhite", "LightSalmon", "Bisque", "LightSlateGray", "PaleTurquoise", "MediumVioletRed", "LightSteelBlue", "MidnightBlue", "Peru", "CornflowerBlue", "DimGray", "LightPink", "Lime", "Cornsilk", "Cyan", "DeepPink", "BurlyWood", "LightBlue", "Fuchsia", "LightGoldenRodYellow", "PaleGoldenRod", "DarkSalmon", "Darkorange", "Orange", "FloralWhite", "Ivory", "Pink", "Teal", "Tan", "LightCoral", "ForestGreen", "LimeGreen", "Chocolate", "Linen", "RosyBrown", "DarkTurquoise", "DarkOrchid", "DarkBlue", "Magenta", "SeaGreen", "DarkRed", "DarkSlateGray", "SaddleBrown", "DarkMagenta", "Gray", "Azure", "Black", "DarkKhaki", "Lavender", "Maroon", "Orchid", "DarkSeaGreen", "Gainsboro", "Brown", "Khaki", "MediumSeaGreen", "LightYellow", "Salmon", "MediumTurquoise", "IndianRed", "AntiqueWhite", "SpringGreen", "MistyRose", "DarkOliveGreen", "Thistle", "Violet", "Olive", "Crimson", "BlanchedAlmond", "PowderBlue", "SlateGray", "LawnGreen", "MintCream", "LightGreen", "LightSkyBlue", "Yellow", "Indigo", "HotPink", "WhiteSmoke", "Gold", "BlueViolet", "LavenderBlush", "OliveDrab", "PeachPuff", "OldLace", "GreenYellow", "Navy", "Aquamarine", "DarkSlateBlue", "Purple", "PaleGreen", "SteelBlue", "Blue", "Coral", "PaleVioletRed", "RoyalBlue", "Turquoise", "MediumOrchid", "Green", "Sienna", "DarkGray", "DodgerBlue", "SlateBlue", "LightGray", "DarkGoldenRod", "SkyBlue", "LightSeaGreen", "GoldenRod", "Snow", "YellowGreen", "CadetBlue", "PapayaWhip", "DeepSkyBlue", "LemonChiffon", "DimGrey", "MediumSpringGreen", "HoneyDew", "Plum", "Silver", "MediumBlue", "Aqua", "Chartreuse", "FireBrick", "Beige", "SeaShell", "Wheat", "AliceBlue", "MediumPurple", "OrangeRed", "DarkGreen", "Moccasin", "NavajoWhite", "DarkCyan", "MediumAquaMarine", "Red", "DarkViolet", "LightCyan", "MediumSlateBlue"], "tokenSeparators": [",", " "] }' multiple>
                            <option> White </option>
                            <option selected="selected"> Tomato </option>
                          </select>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label">Single select disable</label> <select class="form-control" data-toggle="select2" data-placeholder="Select a state" disabled>
                          </select>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label">Multiple select disable</label> <select class="form-control" data-toggle="select2" data-placeholder="Select a state" multiple disabled>
                            <option selected="selected"> White </option>
                            <option selected="selected"> Tomato </option>
                          </select>
                        </div><!-- /.form-group -->
                      </form><!-- /form -->
                      <!-- default demo source -->
                      <select id="select2-source-states" style="display: none">
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                          <option value="AK"> Alaska </option>
                          <option value="HI"> Hawaii </option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                          <option value="CA"> California </option>
                          <option value="NV"> Nevada </option>
                          <option value="OR"> Oregon </option>
                          <option value="WA"> Washington </option>
                        </optgroup>
                        <optgroup label="Mountain Time Zone">
                          <option value="AZ"> Arizona </option>
                          <option value="CO"> Colorado </option>
                          <option value="ID"> Idaho </option>
                          <option value="MT"> Montana </option>
                          <option value="NE"> Nebraska </option>
                          <option value="NM"> New Mexico </option>
                          <option value="ND"> North Dakota </option>
                          <option value="UT"> Utah </option>
                          <option value="WY"> Wyoming </option>
                        </optgroup>
                        <optgroup label="Central Time Zone">
                          <option value="AL"> Alabama </option>
                          <option value="AR"> Arkansas </option>
                          <option value="IL"> Illinois </option>
                          <option value="IA"> Iowa </option>
                          <option value="KS"> Kansas </option>
                          <option value="KY"> Kentucky </option>
                          <option value="LA"> Louisiana </option>
                          <option value="MN"> Minnesota </option>
                          <option value="MS"> Mississippi </option>
                          <option value="MO"> Missouri </option>
                          <option value="OK"> Oklahoma </option>
                          <option value="SD"> South Dakota </option>
                          <option value="TX" disabled="disabled"> Texas </option>
                          <option value="TN"> Tennessee </option>
                          <option value="WI"> Wisconsin </option>
                        </optgroup>
                        <optgroup label="Eastern Time Zone">
                          <option value="CT"> Connecticut </option>
                          <option value="DE"> Delaware </option>
                          <option value="FL"> Florida </option>
                          <option value="GA"> Georgia </option>
                          <option value="IN"> Indiana </option>
                          <option value="ME"> Maine </option>
                          <option value="MD"> Maryland </option>
                          <option value="MA"> Massachusetts </option>
                          <option value="MI"> Michigan </option>
                          <option value="NH"> New Hampshire </option>
                          <option value="NJ"> New Jersey </option>
                          <option value="NY"> New York </option>
                          <option value="NC" disabled="disabled"> North Carolina </option>
                          <option value="OH"> Ohio </option>
                          <option value="PA"> Pennsylvania </option>
                          <option value="RI"> Rhode Island </option>
                          <option value="SC"> South Carolina </option>
                          <option value="VT"> Vermont </option>
                          <option value="VA"> Virginia </option>
                          <option value="WV"> West Virginia </option>
                        </optgroup>
                      </select> <!-- /default demo source -->
                    </div><!-- /.card-body -->
                  </div><!-- /.card -->
                  <!-- .card -->
                  <div class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                      <h4 class="card-title"> Typeahead </h4>
                      <h6 class="card-subtitle mb-4"> A fast and fully-featured autocomplete library. </h6><!-- form -->
                      <form>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="the-basics">The Basics</label> <input id="the-basics" type="text" class="form-control" placeholder="States of USA">
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="bloodhound">Bloodhound <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip" data-container="body" title="Suggestion Engine"></i></label> <input id="bloodhound" type="text" class="form-control" placeholder="States of USA">
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="prefetch">Prefetch</label> <input id="prefetch" type="text" class="form-control" placeholder="Countries">
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="remote">Remote</label> <input id="remote" type="text" class="form-control" placeholder="Oscar winners for Best Picture">
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="custom-templates">Custom Templates</label> <input id="custom-templates" type="text" class="form-control" placeholder="Oscar winners for Best Picture">
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="default-suggestions">Default Suggestions</label> <input id="default-suggestions" type="text" class="form-control" placeholder="NFL Teams">
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="multiple-datasets">Multiple Datasets</label> <input id="multiple-datasets" type="text" class="form-control" placeholder="NBA and NHL teams">
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group has-typeahead-scrollable">
                          <label class="control-label" for="scrollable-dropdown-menu">Scrollable Dropdown Menu</label> <input id="scrollable-dropdown-menu" type="text" class="form-control" placeholder="Countries">
                        </div><!-- /.form-group -->
                      </form><!-- /form -->
                    </div><!-- /.card-body -->
                  </div><!-- /.card -->
                </div><!-- /.section-deck -->
                <!-- .section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  <div class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                      <h4 class="card-title"> Tribute </h4>
                      <h6 class="card-subtitle mb-4"> A cross-browser @mention engine. </h6><!-- form -->
                      <form>
                        <!-- .form-group -->
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Volunteer someone to participate. Start typing with @" autocomplete="off" data-toggle="tribute" data-remote="assets/data/tribute.json">
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <textarea class="form-control" placeholder="Start typing with @" data-toggle="tribute" data-remote="assets/data/tribute.json" data-item-template="true"></textarea>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <div class="border rounded p-3" data-toggle="tribute" data-remote="assets/data/tribute.json" data-item-template="true" data-select-template="true">
                            <a href="#" class="mention">@rue74</a> Destroying things is much easier than making them. </div>
                        </div><!-- /.form-group -->
                      </form><!-- /form -->
                    </div><!-- /.card-body -->
                  </div><!-- /.card -->
                  <!-- .card -->
                  <div class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                      <h4 class="card-title"> At.js </h4>
                      <h6 class="card-subtitle mb-4"> Add Github like mentions autocomplete to your application. </h6><!-- form -->
                      <form>
                        <!-- .form-group -->
                        <div class="form-group">
                          <textarea id="inputor" class="form-control autosize">At.js, a github-like autocomplete library :s</textarea>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <div id="editable" class="border rounded p-3" contenteditable="true">
                            <p>
                              <strong>And!!</strong> it support <strong style="font-size: 20px">ContentEditable</strong> mode too!! <img src="../assets-cdn.github.com/images/icons/emoji/smile.html" height="20" width="20" alt=""> <img src="../assets-cdn.github.com/images/icons/emoji/smiley.html" height="20" width="20" alt=""> <img src="../assets-cdn.github.com/images/icons/emoji/coffee.html" height="20" width="20" alt="">
                            </p>
                            <p> Try here now! <img src="../assets-cdn.github.com/images/icons/emoji/point_right.html" height="20" width="20" alt=""> <span>emoji :w</span> <span>mention @a</span> <span>issue #</span>
                            </p>
                          </div>
                        </div><!-- /.form-group -->
                      </form><!-- /form -->
                    </div><!-- /.card-body -->
                  </div><!-- /.card -->
                </div><!-- /.section-deck -->
                <!-- .section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  <div class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                      <h4 class="card-title"> Text Mask </h4>
                      <h6 class="card-subtitle mb-4"> It can create input masks for phone, date, currency, zip code, percentage, email, and literally anything! </h6><!-- form -->
                      <form>
                        <!-- .row -->
                        <div class="row mb-3">
                          <label for="maskUsphone" class="col-lg-3 text-lg-right">US Phone</label>
                          <div class="col-lg-8 col-xl-6">
                            <input type="text" id="maskUsphone" name="maskUsphone" class="form-control" autocomplete="off" data-mask="usphone" placeholder="(555) 495-3947">
                          </div>
                        </div><!-- /.row -->
                        <!-- .row -->
                        <div class="row mb-3">
                          <label for="maskUsphonecode" class="col-lg-3 text-lg-right">US Phone with code</label>
                          <div class="col-lg-8 col-xl-6">
                            <input type="text" id="maskUsphonecode" name="maskUsphonecode" class="form-control" autocomplete="off" data-mask="usphonecode" placeholder="+1 (555) 495-3947">
                          </div>
                        </div><!-- /.row -->
                        <!-- .row -->
                        <div class="row mb-3">
                          <label for="maskDate" class="col-lg-3 text-lg-right">Date</label>
                          <div class="col-lg-8 col-xl-6">
                            <input type="text" id="maskDate" name="maskDate" class="form-control" autocomplete="off" data-mask="date" placeholder="09/25/1970">
                          </div>
                        </div><!-- /.row -->
                        <!-- .row -->
                        <div class="row mb-3">
                          <label for="maskDateAuto" class="col-lg-3 text-lg-right">Date (auto corrected)</label>
                          <div class="col-lg-8 col-xl-6">
                            <input type="text" id="maskDateAuto" name="maskDateAuto" class="form-control" autocomplete="off" data-mask="date" data-auto-correct-date="mm/dd/yyyy" placeholder="Please enter a date">
                          </div>
                        </div><!-- /.row -->
                        <!-- .row -->
                        <div class="row mb-3">
                          <label for="maskCurrency" class="col-lg-3 text-lg-right">Currency</label>
                          <div class="col-lg-8 col-xl-6">
                            <input type="text" id="maskCurrency" name="maskCurrency" class="form-control text-right" autocomplete="off" data-mask="currency" placeholder="Enter an amount">
                          </div>
                        </div><!-- /.row -->
                        <!-- .row -->
                        <div class="row mb-3">
                          <label for="maskCurrencyDecimal" class="col-lg-3 text-lg-right">Currency (allow decimal)</label>
                          <div class="col-lg-8 col-xl-6">
                            <input type="text" id="maskCurrencyDecimal" name="maskCurrencyDecimal" class="form-control text-right" autocomplete="off" data-mask="currency" data-allow-decimal="true" data-decimal-limit="2" placeholder="Enter an amount">
                          </div>
                        </div><!-- /.row -->
                        <!-- .row -->
                        <div class="row mb-3">
                          <label for="maskPercentage" class="col-lg-3 text-lg-right">Percentage</label>
                          <div class="col-lg-8 col-xl-6">
                            <input type="text" id="maskPercentage" name="maskPercentage" class="form-control text-right" autocomplete="off" data-mask="percentage" data-integer-limit="3" data-allow-decimal="true" data-decimal-limit="2" placeholder="Enter an amount">
                          </div>
                        </div><!-- /.row -->
                        <!-- .row -->
                        <div class="row mb-3">
                          <label for="maskEmail" class="col-lg-3 text-lg-right">Email</label>
                          <div class="col-lg-8 col-xl-6">
                            <input type="text" id="maskEmail" name="maskEmail" class="form-control" autocomplete="off" data-mask="email" placeholder="john@smith.com">
                          </div>
                        </div><!-- /.row -->
                        <!-- .row -->
                        <div class="row mb-3">
                          <label for="maskUszip" class="col-lg-3 text-lg-right">US zip code</label>
                          <div class="col-lg-8 col-xl-6">
                            <input type="text" id="maskUszip" name="maskUszip" class="form-control" autocomplete="off" data-mask="uszip" placeholder="94303">
                          </div>
                        </div><!-- /.row -->
                        <!-- .row -->
                        <div class="row mb-3">
                          <label for="maskCazip" class="col-lg-3 text-lg-right">Canadian postal code</label>
                          <div class="col-lg-8 col-xl-6">
                            <input type="text" id="maskCazip" name="maskCazip" class="form-control" autocomplete="off" data-mask="cazip" placeholder="K1A 0B2">
                          </div>
                        </div><!-- /.row -->
                        <!-- .row -->
                        <div class="row mb-3">
                          <label for="maskCc" class="col-lg-3 text-lg-right">Credit card</label>
                          <div class="col-lg-8 col-xl-6">
                            <input type="text" id="maskCc" name="maskCc" class="form-control" autocomplete="off" data-mask="cc" placeholder="4242 4242 4242 4242">
                          </div>
                        </div><!-- /.row -->
                      </form><!-- /form -->
                    </div><!-- /.card-body -->
                  </div><!-- /.card -->
                </div><!-- /.section-deck -->
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
          <div class="copyright"> Copyright © 2018. All right reserved. </div>
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
    <script src="assets/vendor/handlebars/handlebars.min.js"></script>
    <script src="assets/vendor/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="assets/vendor/select2/js/select2.min.js"></script>
    <script src="assets/vendor/tributejs/tribute.min.js"></script>
    <script src="assets/vendor/jquery.caret/jquery.caret.min.js"></script>
    <script src="assets/vendor/at.js/js/jquery.atwho.min.js"></script>
    <script src="assets/vendor/text-mask/vanillaTextMask.js"></script>
    <script src="assets/vendor/text-mask/addons/textMaskAddons.js"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="assets/javascript/pages/select2-demo.js"></script>
    <script src="assets/javascript/pages/typeahead-demo.js"></script>
    <script src="assets/javascript/pages/atwho-demo.js"></script> <!-- END PAGE LEVEL JS -->
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

<!-- Mirrored from uselooper.com/form-autocompletes.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Mar 2019 09:45:13 GMT -->
</html>