<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Meteor | Responsive Admin Dashboard Template</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="stacks" />
        
        <!-- Styles -->
        <link href="plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="plugins/uniform/css/default.css" rel="stylesheet"/>
        <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>	
        <link href="plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>	
        <link href="plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>	
        	
        <!-- Theme Styles -->
        <link href="css/meteor.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/layers/dark-layer.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="plugins/3d-bold-navigation/js/modernizr.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="compact-menu">
        <!-- <div class="overlay"></div> -->
        
      
        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search" type="button"><i class="icon-close"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->


        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">

                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button push-sidebar">
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>

                    <div class="logo-box">
                        <a href="index.html" class="logo-text"><span>METEOR</span></a>
                    </div><!-- Logo Box -->

                    <div class="search-button">
                        <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                    </div>
                    
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li>		
                                    <a href="javascript:void(0);" class="sidebar-toggle"><i class="icon-arrow-left"></i></a>
                                </li>
                                <li>
                                    <a href="#cd-nav" class="cd-nav-trigger"><i class="icon-support"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-settings"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Fixed Header 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right fixed-header-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Fixed Sidebar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right fixed-sidebar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Horizontal bar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right horizontal-bar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Toggle Sidebar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right toggle-sidebar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Compact Menu 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right compact-menu-check" checked>
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Hover Menu 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right hover-menu-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Boxed Layout 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right boxed-layout-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="no-link"><button class="btn btn-default reset-options">Reset Options</button></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>	
                                    <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-envelope-open"></i><span class="badge badge-danger pull-right">6</span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">You have 6 new  messages!</p></li>
                                        <li class="dropdown-menu-list slimscroll messages">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
                                                        <p class="msg-name">Michael Lewis</p>
                                                        <p class="msg-text">Yeah science!</p>
                                                        <p class="msg-time">3 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png" alt=""></div>
                                                        <p class="msg-name">John Doe</p>
                                                        <p class="msg-text">Hi Nick</p>
                                                        <p class="msg-time">8 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar3.png" alt=""></div>
                                                        <p class="msg-name">Emma Green</p>
                                                        <p class="msg-text">Let's meet!</p>
                                                        <p class="msg-time">56 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar5.png" alt=""></div>
                                                        <p class="msg-name">Nick Doe</p>
                                                        <p class="msg-text">Nice to meet you</p>
                                                        <p class="msg-time">2 hours ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
                                                        <p class="msg-name">Michael Lewis</p>
                                                        <p class="msg-text">Yeah science!</p>
                                                        <p class="msg-time">5 hours ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png" alt=""></div>
                                                        <p class="msg-name">John Doe</p>
                                                        <p class="msg-text">Hi Nick</p>
                                                        <p class="msg-time">9 hours ago</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bell"></i><span class="badge badge-danger pull-right">3</span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">You have 3 pending tasks!</p></li>
                                        <li class="dropdown-menu-list slimscroll tasks">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-success"><i class="fa fa-user"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">1m</span>
                                                        <p class="task-details">New user registered</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-primary"><i class="fa fa-refresh"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">24m</span>
                                                        <p class="task-details">3 Charts refreshed</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-danger"><i class="fa fa-phone"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">24m</span>
                                                        <p class="task-details">2 Missed calls</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="user-name">Nick<i class="fa fa-angle-down"></i></span>
                                        <img class="img-circle avatar" src="assets/images/avatar1.png" width="40" height="40" alt="">
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        <li role="presentation"><a href="profile.html"><i class="icon-user"></i>Profile</a></li>
                                        <li role="presentation"><a href="calendar.html"><i class="icon-calendar"></i>Calendar</a></li>
                                        <li role="presentation"><a href="inbox.html"><i class="icon-envelope-open"></i>Inbox<span class="badge badge-success pull-right">4</span></a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a href="lock-screen.html"><i class="icon-lock"></i>Lock screen</a></li>
                                        <li role="presentation"><a href="login.html"><i class="icon-key m-r-xs"></i>Log out</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" id="showRight">
                                        <i class="icon-bubbles"></i>
                                    </a>
                                </li>
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <ul class="menu accordion-menu">
                        <li class="active"><a href="index.html" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Dashboard</p><span class="active-page"></span></a></li>
                        <li><a href="profile.html" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Profile</p></a></li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-envelope-open"></span><p>Mailbox</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="inbox.html">Inbox</a></li>
                                <li><a href="message-view.html">View Message</a></li>
                                <li><a href="compose.html">Compose</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-puzzle"></span><p>UI Kits</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="ui-alerts.html">Alerts</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-icons.html">Icons</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-notifications.html">Notifications</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>
                                <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-panels.html">Panels</a></li>
                                <li><a href="ui-progress.html">Progress Bars</a></li>
                                <li><a href="ui-sliders.html">Sliders</a></li>
                                <li><a href="ui-nestable.html">Nestable</a></li>
                                <li><a href="ui-tree-view.html">Tree View</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-layers"></span><p>Layouts</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="layout-blank.html">Blank Page</a></li>
                                <li><a href="layout-boxed.html">Boxed Page</a></li>
                                <li><a href="layout-horizontal-menu.html">Horizontal Menu</a></li>
                                <li><a href="layout-horizontal-menu-boxed.html">Boxed &amp; Horizontal Menu</a></li>
                                <li><a href="layout-horizontal-menu-minimal.html">Horizontal Menu Minimal</a></li>
                                <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li>
                                <li><a href="layout-fixed-header.html">Fixed Header</a></li>
                                <li><a href="layout-collapsed-sidebar.html">Collapsed Sidebar</a></li>
                                <li><a href="layout-menu-alt.html">Menu Alt</a></li>
                                <li><a href="layout-hover-menu.html">Hover Menu</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-grid"></span><p>Tables</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="table-static.html">Static Tables</a></li>
                                <li><a href="table-responsive.html">Responsive Tables</a></li>
                                <li><a href="table-data.html">Data Tables</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pencil"></span><p>Forms</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="form-elements.html">Form Elements</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-upload.html">File Upload</a></li>
                                <li><a href="form-image-crop.html">Image Crop</a></li>
                                <li><a href="form-image-zoom.html">Image Zoom</a></li>
                                <li><a href="form-select2.html">Select2</a></li>
                                <li><a href="form-x-editable.html">X-editable</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pie-chart"></span><p>Charts</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="charts-rickshaw.html">Rickshaw</a></li>
                                <li><a href="charts-morris.html">Morris</a></li>
                                <li><a href="charts-flotchart.html">Flotchart</a></li>
                                <li><a href="charts-chartjs.html">Chart.js</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-power"></span><p>Login</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="login.html">Login Form</a></li>
                                <li><a href="login-alt.html">Login Alt</a></li>
                                <li><a href="register.html">Register Form</a></li>
                                <li><a href="register-alt.html">Register Alt</a></li>
                                <li><a href="forgot.html">Forgot Password</a></li>
                                <li><a href="lock-screen.html">Lock Screen</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pointer"></span><p>Maps</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="maps-google.html">Google Maps</a></li>
                                <li><a href="maps-vector.html">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-present"></span><p>Extra</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="500.html">500 Page</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="calendar.html">Calendar</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="todo.html">Todo</a></li>
                                <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="search.html">Search Results</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-energy"></span><p>Levels</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li class="droplink"><a href="#"><p>Level 1.1</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="droplink"><a href="#"><p>Level 2.1</p><span class="arrow"></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Level 3.1</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Level 2.2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Level 1.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
            <div class="page-inner">
                <div class="page-title">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h3 class="panel-title">Sales</h3>
                                    <div class="panel-control">
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-reload" data-original-title="Reload"><i class="icon-reload"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-header-stats">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6">
                                                <i class="icon-basket"></i>
                                                <h4 class="no-m">$14,213</h4>
                                            </div>
                                            <div class="col-md-3 col-xs-6">
                                                <i class="icon-globe"></i>
                                                <h4 class="no-m">$374,700</h4>
                                            </div>
                                            <div class="col-md-3 col-xs-6">
                                                <i class="icon-credit-card"></i>
                                                <h4 class="no-m">$2,134</h4>
                                            </div>
                                            <div class="col-md-3 col-xs-6">
                                                <i class="icon-shield"></i>
                                                <h4 class="no-m">907</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <canvas id="chart1" height="165"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h3 class="panel-title">Visitors</h3>
                                    <div class="panel-control">
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-reload" data-original-title="Reload"><i class="icon-reload"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-header-stats">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6">
                                                <i class="icon-users"></i>
                                                <h4 class="no-m">Total: 4500</h4>
                                            </div>
                                            <div class="col-md-3 col-xs-6">
                                                <i class="icon-user"></i>
                                                <h4 class="no-m">Male: 2600</h4>
                                            </div>
                                            <div class="col-md-3 col-xs-6">
                                                <i class="icon-user-female"></i>
                                                <h4 class="no-m">Female: 1900</h4>
                                            </div>
                                            <div class="col-md-3 col-xs-6">
                                                <i class="icon-user-follow"></i>
                                                <h4 class="no-m">Avg: 2250</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <canvas id="chart2" height="165"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Weather</h4>
                                    <div class="panel-control">
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-reload" data-original-title="Reload"><i class="icon-reload"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="weather-widget">
                                        <div class="row">
                                            <div class="col-md-12 col-weather-headline">
                                                <div class="weather-top">
                                                    <div class="weather-current pull-left">
                                                        <i class="wi wi-day-cloudy weather-icon"></i>
                                                        <p><span>83<sup>°F</sup></span></p>
                                                    </div>
                                                    <h2 class="weather-day pull-right">Amsterdam, NL<br><small><b>6th July, 2016</b></small></h2>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-weather-info">
                                                <ul class="list-unstyled weather-info">
                                                    <li>Wind <span class="pull-right"><b>ESE 16 mph</b></span></li>
                                                    <li>Humidity <span class="pull-right"><b>64%</b></span></li>
                                                    <li>Pressure <span class="pull-right"><b>30.15 in</b></span></li>
                                                    <li>UV Index <span class="pull-right"><b>6</b></span></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-weather-info">
                                                <ul class="list-unstyled weather-info">
                                                    <li>Cloud Cover <span class="pull-right"><b>60%</b></span></li>
                                                    <li>Ceiling <span class="pull-right"><b>17800 ft</b></span></li>
                                                    <li>Dew Point <span class="pull-right"><b>70° F</b></span></li>
                                                    <li>Visibility <span class="pull-right"><b>10 mi</b></span></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12">
                                                <ul class="list-unstyled weather-days row">
                                                    <li class="col-xs-4 col-sm-2"><span>12:00</span><i class="wi wi-day-cloudy"></i><span>82<sup>°F</sup></span></li>
                                                    <li class="col-xs-4 col-sm-2"><span>13:00</span><i class="wi wi-day-cloudy"></i><span>82<sup>°F</sup></span></li>
                                                    <li class="col-xs-4 col-sm-2"><span>14:00</span><i class="wi wi-day-cloudy"></i><span>82<sup>°F</sup></span></li>
                                                    <li class="col-xs-4 col-sm-2"><span>15:00</span><i class="wi wi-day-cloudy"></i><span>83<sup>°F</sup></span></li>
                                                    <li class="col-xs-4 col-sm-2"><span>16:00</span><i class="wi wi-day-cloudy"></i><span>82<sup>°F</sup></span></li>
                                                    <li class="col-xs-4 col-sm-2"><span>17:00</span><i class="wi wi-day-sunny-overcast"></i><span>82<sup>°F</sup></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h3 class="panel-title">Table</h3>
                                    <div class="panel-control">
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-reload" data-original-title="Reload"><i class="icon-reload"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body statement-card">
                                    <div class="statement-card-head">
                                        <h3>Meteor<br><small>Statement</small></h3>
                                        <p><sup>$</sup><b>207,430</b></p>
                                    </div>
                                    <table class="table table-responsive">
                                        <tbody>
                                            <tr>
                                                <th scope="row">ORDER ID 4111</th>
                                                <td>johndoe</td>
                                                <td>N1</td>
                                                <td class="text-success"><b>$16</b></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ORDER ID 4110</th>
                                                <td>michaellewis</td>
                                                <td>N2</td>
                                                <td class="text-danger"><b>$13</b></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ORDER ID 4109</th>
                                                <td>emmagreen</td>
                                                <td>N3</td>
                                                <td class="text-success"><b>$16</b></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ORDER ID 4108</th>
                                                <td>sandrasmith</td>
                                                <td>N4</td>
                                                <td class="text-danger"><b>$13</b></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ORDER ID 4106</th>
                                                <td>emmagreen</td>
                                                <td>N6</td>
                                                <td class="text-success"><b>$16</b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        <nav class="cd-nav-container" id="cd-nav">
            <header>
                <h3>DEMOS</h3>
            </header>
            <div class="col-md-6 demo-block demo-selected demo-active">
                <p>Dark<br>Design</p>
            </div>
            <div class="col-md-6 demo-block">
                <a href="../admin2/index.html"><p>Light<br>Design</p></a>
            </div>
            <div class="col-md-6 demo-block">
                <a href="../admin3/index.html"><p>Material<br>Design</p></a>
            </div>
            <div class="col-md-6 demo-block demo-coming-soon">
                <p>Horizontal<br>(Coming)</p>
            </div>
            <div class="col-md-6 demo-block demo-coming-soon">
                <p>Coming<br>Soon</p>
            </div>
            <div class="col-md-6 demo-block demo-coming-soon">
                <p>Coming<br>Soon</p>
            </div>
        </nav>
        <div class="cd-overlay"></div>
	

        <!-- Javascripts -->
        <script src="plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="plugins/pace-master/pace.min.js"></script>
        <script src="plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="plugins/switchery/switchery.min.js"></script>
        <script src="plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="plugins/waves/waves.min.js"></script>
        <script src="plugins/3d-bold-navigation/js/main.js"></script>
        <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="plugins/toastr/toastr.min.js"></script>
        <script src="plugins/flot/jquery.flot.min.js"></script>
        <script src="plugins/flot/jquery.flot.time.min.js"></script>
        <script src="plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="plugins/curvedlines/curvedLines.js"></script>
        <script src="plugins/chartjs/Chart.bundle.min.js"></script>
        <script src="js/meteor.min.js"></script>
        <script src="js/pages/dashboard.js"></script>
        
    </body>
</html>