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
                        <a href="#" class="logo-text"><span>METEOR</span></a>
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
                                        <img class="img-circle avatar" src="images/avatar1.png" width="40" height="40" alt="">
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

                                <!-- <li>
                                    <a href="javascript:void(0);" id="showRight">
                                        <i class="icon-bubbles"></i>
                                    </a>
                                </li> -->
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->



            
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <ul class="menu accordion-menu">
                        
                        <li class="<?=(isset($dashboard)) ? 'active' : ''?>"><a href="dashboard.php" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Dashboard</p><span class="active-page"></span></a></li>


                        <li class="<?=(isset($models)) ? 'active' : ''?>"><a href="models_slider.php" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Models</p><span class="active-page"></span></a></li>


                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-envelope-open"></span><p>Mailbox</p><span class=""></span></a></li>


                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-puzzle"></span><p>UI Kits</p><span class=""></span></a>
                        

                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-layers"></span><p>Layouts</p><span class=""></span></a>
                           
                        
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-grid"></span><p>Tables</p><span class=""></span></a>


                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pencil"></span><p>Forms</p><span class=""></span></a>
                            

                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pie-chart"></span><p>Charts</p><span class=""></span></a>
                            
                        </li>
                        

                        
                        <!-- <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-power"></span><p>Login</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="login.html">Login Form</a></li>
                                <li><a href="login-alt.html">Login Alt</a></li>
                                <li><a href="register.html">Register Form</a></li>
                                <li><a href="register-alt.html">Register Alt</a></li>
                                <li><a href="forgot.html">Forgot Password</a></li>
                                <li><a href="lock-screen.html">Lock Screen</a></li>
                            </ul>
                        </li> -->
                        
                        
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pointer"></span><p>Maps</p><span class=""></span></a>
                            

                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-present"></span><p>Extra</p><span class=""></span></a>
                           
                        
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-energy"></span><p>Levels</p><span class=""></span></a>
                           
                        <!-- <ul class="sub-menu">
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
                    </ul> -->

                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->