<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Brunette I Chats</title>
    <meta name="description" content="Chat application" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Toggles CSS -->
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
    
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
            <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
            <a class="navbar-brand" href="dashboard1.html">
                <img class="brand-img d-inline-block" src="dist/img/logo-light.png" alt="brand" />
            </a>
            <ul class="navbar-nav hk-navbar-content">
                <li class="nav-item">
                    <a id="navbar_search_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="search"></i></span></a>
                </li>
                <li class="nav-item">
                    <a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="settings"></i></span></a>
                </li>
                <li class="nav-item dropdown dropdown-notifications">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="feather-icon"><i data-feather="bell"></i></span><span class="badge-wrap"><span class="badge badge-brown badge-indicator badge-indicator-sm badge-pill pulse"></span></span></a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <h6 class="dropdown-header">Notifications <a href="javascript:void(0);" class="">View all</a></h6>
                        <div class="notifications-nicescroll-bar">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <img src="dist/img/avatar1.jpg" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text"><span class="text-dark text-capitalize">Evie Ono</span> accepted your invitation to join the team</div>
                                            <div class="notifications-time">12m</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <img src="dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">New message received from <span class="text-dark text-capitalize">Misuko Heid</span></div>
                                            <div class="notifications-time">1h</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-primary rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-account font-18"></i></span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">You have a follow up with<span class="text-dark text-capitalize"> Brunette head</span> on <span class="text-dark text-capitalize">friday, dec 19</span> at <span class="text-dark">10.00 am</span></div>
                                            <div class="notifications-time">2d</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-success rounded-circle">
													<span class="initial-wrap"><span>A</span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Application of <span class="text-dark text-capitalize">Sarah Williams</span> is waiting for your approval</div>
                                            <div class="notifications-time">1w</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-warning rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-notifications font-18"></i></span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Last 2 days left for the project</div>
                                            <div class="notifications-time">15d</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar">
                                    <img src="dist/img/avatar12.jpg" alt="user" class="avatar-img rounded-circle">
                                </div>
                                <span class="badge badge-success badge-indicator"></span>
                            </div>
                            <div class="media-body">
                                <span>Madelyn Shane<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-card"></i><span>My balance</span></a>
                        <a class="dropdown-item" href="inbox.html"><i class="dropdown-icon zmdi zmdi-email"></i><span>Inbox</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a>
                        <div class="dropdown-divider"></div>
                        <div class="sub-dropdown-menu show-on-hover">
                            <a href="#" class="dropdown-toggle dropdown-item no-caret"><i class="zmdi zmdi-check text-success"></i>Online</a>
                            <div class="dropdown-menu open-left-side">
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-check text-success"></i><span>Online</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                    </div>
                </li>
            </ul>
        </nav>
        <form role="search" class="navbar-search">
            <div class="position-relative">
                <a href="javascript:void(0);" class="navbar-search-icon"><span class="feather-icon"><i data-feather="search"></i></span></a>
                <input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
                <a id="navbar_search_close" class="navbar-search-close" href="#"><span class="feather-icon"><i data-feather="x"></i></span></a>
            </div>
        </form>
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <nav class="hk-nav hk-nav-light">
            <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
            <div class="nicescroll-bar">
                <div class="navbar-nav-wrap">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#dash_drp">
                                <span class="feather-icon"><i data-feather="activity"></i></span>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                            <ul id="dash_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard1.html">CRM</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard2.html">Project</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard3.html">Statistics</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="dashboard4.html">Classic</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="dashboard5.html">Analytics</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link link-with-badge" href="javascript:void(0);" data-toggle="collapse" data-target="#app_drp">
                                <span class="feather-icon"><i data-feather="package"></i></span>
                                <span class="nav-link-text">Application</span>
                                <span class="badge badge-brown badge-pill">4</span>
                            </a>
                            <ul id="app_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="chats.html">Chat</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="calendar.html">Calendar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="email.html">Email</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="file-manager.html">File Manager</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#auth_drp">
                                <span class="feather-icon"><i data-feather="zap"></i></span>
                                <span class="nav-link-text">Authentication</span>
                            </a>
                            <ul id="auth_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#signup_drp">
													Sign Up
												</a>
                                            <ul id="signup_drp" class="nav flex-column collapse collapse-level-2">
                                                <li class="nav-item">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="signup.html">Cover</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="signup-simple.html">Simple</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#signin_drp">
													Login
												</a>
                                            <ul id="signin_drp" class="nav flex-column collapse collapse-level-2">
                                                <li class="nav-item">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="login.html">Cover</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="login-simple.html">Simple</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#recover_drp">
													Recover Password
												</a>
                                            <ul id="recover_drp" class="nav flex-column collapse collapse-level-2">
                                                <li class="nav-item">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="forgot-password.html">Forgot Password</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="reset-password.html">Reset Password</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="lock-screen.html">Lock Screen</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="404.html">Error 404</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="maintenance.html">Maintenance</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#pages_drp">
                                <span class="feather-icon"><i data-feather="file-text"></i></span>
                                <span class="nav-link-text">Pages</span>
                            </a>
                            <ul id="pages_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="profile.html">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="invoice.html">Invoice</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="gallery.html">Gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="activity.html">Activity</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="faq.html">Faq</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <hr class="nav-separator">
                    <div class="nav-header">
                        <span>User Interface</span>
                        <span>UI</span>
                    </div>
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#Components_drp">
                                <span class="feather-icon"><i data-feather="layout"></i></span>
                                <span class="nav-link-text">Components</span>
                            </a>
                            <ul id="Components_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="alerts.html">Alerts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="avatar.html">Avatar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="badge.html">Badge</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="buttons.html">Buttons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cards.html">Cards</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="carousel.html">Carousel</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="collapse.html">Collapse</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dropdowns.html">Dropdown</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="list-group.html">List Group</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modal.html">Modal</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="nav.html">Nav</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="navbar.html">Navbar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="nestable.html">Nestable</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pagination.html">Pagination</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="popovers.html">Popovers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="progress.html">Progress</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="tooltip.html">Tooltip</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#content_drp">
                                <span class="feather-icon"><i data-feather="type"></i></span>
                                <span class="nav-link-text">Content</span>
                            </a>
                            <ul id="content_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="typography.html">Typography</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="images.html">Images</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="media-object.html">Media Object</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#utilities_drp">
                                <span class="feather-icon"><i data-feather="anchor"></i></span>
                                <span class="nav-link-text">Utilities</span>
                            </a>
                            <ul id="utilities_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="background.html">Background</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="border.html">Border</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="colors.html">Colors</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="embeds.html">Embeds</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icons.html">Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="shadow.html">Shadow</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="sizing.html">Sizing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="spacing.html">Spacing</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#forms_drp">
                                <span class="feather-icon"><i data-feather="server"></i></span>
                                <span class="nav-link-text">Forms</span>
                            </a>
                            <ul id="forms_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="form-element.html">Form Elements</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="input-groups.html">Input Groups</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="form-layout.html">Form Layout</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="form-mask.html">Form Mask</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="form-validation.html">Form Validation</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="form-wizard.html">Form Wizard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="file-upload.html">File Upload</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="editor.html">Editor</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#tables_drp">
                                <span class="feather-icon"><i data-feather="list"></i></span>
                                <span class="nav-link-text">Tables</span>
                            </a>
                            <ul id="tables_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="basic-table.html">Basic Table</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="data-table.html">Data Table</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="responsive-table.html">Responsive Table</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="editable-table.html">Editable Table</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#charts_drp">
                                <span class="feather-icon"><i data-feather="pie-chart"></i></span>
                                <span class="nav-link-text">Charts</span>
                            </a>
                            <ul id="charts_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="line-charts.html">Line Chart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="area-charts.html">Area Chart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="bar-charts.html">Bar Chart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pie-charts.html">Pie Chart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="realtime-charts.html">Realtime Chart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="mini-charts.html">Mini Chart</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#maps_drp">
                                <span class="feather-icon"><i data-feather="map"></i></span>
                                <span class="nav-link-text">Maps</span>
                            </a>
                            <ul id="maps_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="google-map.html">Google Map</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="vector-map.html">Vector Map</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <hr class="nav-separator">
                    <div class="nav-header">
                        <span>Getting Started</span>
                        <span>GS</span>
                    </div>
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="documentation.html" >
                                <span class="feather-icon"><i data-feather="book"></i></span>
                                <span class="nav-link-text">Documentation</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-with-badge" href="#">
                                <span class="feather-icon"><i data-feather="eye"></i></span>
                                <span class="nav-link-text">Changelog</span>
                                <span class="badge badge-sm badge-success badge-pill">v 1.0</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="feather-icon"><i data-feather="headphones"></i></span>
                                <span class="nav-link-text">Support</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!-- /Vertical Nav -->

        <!-- Setting Panel -->
        <div class="hk-settings-panel">
            <div class="nicescroll-bar position-relative">
                <div class="settings-panel-wrap">
                    <div class="settings-panel-head">
                        <img class="brand-img d-inline-block align-top" src="dist/img/logo-light.png" alt="brand" />
                        <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
                    </div>
                    <hr>
                    <h6 class="mb-5">Layout</h6>
                    <p class="font-14">Choose your preferred layout</p>
                    <div class="layout-img-wrap">
                        <div class="row">
                            <a href="javascript:void(0);" class="col-6 mb-30 active">
                                <img class="rounded opacity-70" src="dist/img/layout1.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                            <a href="dashboard2.html" class="col-6 mb-30">
                                <img class="rounded opacity-70" src="dist/img/layout2.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                           <a href="dashboard3.html" class="col-6 mb-30">
                                <img class="rounded opacity-70" src="dist/img/layout3.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
							<a href="dashboard4.html" class="col-6 mb-30">
                                <img class="rounded opacity-70" src="dist/img/layout4.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
							<a href="dashboard5.html" class="col-6">
                                <img class="rounded opacity-70" src="dist/img/layout5.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <h6 class="mb-5">Navigation</h6>
                    <p class="font-14">Menu comes in two modes: dark & light</p>
                    <div class="button-list hk-nav-select mb-10">
                        <button type="button" id="nav_light_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="nav_dark_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <h6 class="mb-5">Top Nav</h6>
                    <p class="font-14">Choose your liked color mode</p>
                    <div class="button-list hk-navbar-select mb-10">
                        <button type="button" id="navtop_light_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="navtop_dark_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <h6>Scrollable Header</h6>
                        <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
                    </div>
                    <button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
                </div>
            </div>
            <img class="d-none" src="dist/img/logo-light.png" alt="brand" />
            <img class="d-none" src="dist/img/logo-dark.png" alt="brand" />
        </div>
        <!-- /Setting Panel -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper pb-0">
            <!-- Container -->
            <div class="container-fluid">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12 pa-0">
                        <div class="chatapp-wrap">
                            <div class="chatapp-left">
                                <header>
                                    <a href="javascript:void(0)" class="chat-more">
                                        <span class="feather-icon"><i data-feather="more-vertical"></i></span>
                                    </a>
                                    <span class="">Chats</span>
                                    <a href="javascript:void(0)" class="chat-compose">
                                        <span class="feather-icon"><i data-feather="edit"></i></span>
                                    </a>
                                </header>
                                <form role="search" class="chat-search">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="feather-icon"><i data-feather="search"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </form>
                                <div class="chatapp-users-list">
                                    <div class="nicescroll-bar">
                                        <a href="javascript:void(0);" class="media">
                                            <div class="media-img-wrap">
                                                <div class="avatar">
                                                    <img src="dist/img/avatar1.jpg" alt="user" class="avatar-img rounded-circle">
                                                </div>
                                                <span class="badge badge-warning badge-indicator"></span>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="user-name">Clay Masse</div>
                                                    <div class="user-last-chat">No one saves us but ourselves.</div>
                                                </div>
                                                <div>
                                                    <div class="last-chat-time block">5 min</div>
                                                    <div class="badge badge-success badge-pill">15</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hr-wrap">
                                            <hr>
                                        </div>
                                        <a href="javascript:void(0);" class="media read-chat active-user">
                                            <div class="media-img-wrap">
                                                <div class="avatar">
                                                    <img src="dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
                                                </div>
                                                <span class="badge badge-success badge-indicator"></span>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="user-name">Evie Ono</div>
                                                    <div class="user-last-chat">Unity is strength 😀</div>
                                                </div>
                                                <div>
                                                    <div class="last-chat-time block">4:56 PM</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hr-wrap">
                                            <hr>
                                        </div>
                                        <a href="javascript:void(0);" class="media">
                                            <div class="media-img-wrap">
                                                <div class="avatar">
                                                    <img src="dist/img/avatar3.jpg" alt="user" class="avatar-img rounded-circle">
                                                </div>
                                                <span class="badge badge-warning badge-indicator"></span>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="user-name">Madalyn Rascon</div>
                                                    <div class="user-last-chat">Respect yourself if you would have others respect you.</div>
                                                </div>
                                                <div>
                                                    <div class="last-chat-time block">5:00 PM</div>
                                                    <div class="badge badge-success badge-pill">3</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hr-wrap">
                                            <hr>
                                        </div>
                                        <a href="javascript:void(0);" class="media read-chat">
                                            <div class="media-img-wrap">
                                                <div class="avatar">
                                                    <img src="dist/img/avatar4.jpg" alt="user" class="avatar-img rounded-circle">
                                                </div>
                                                <span class="badge badge-danger badge-indicator"></span>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="user-name">Mitsuko Heid</div>
                                                    <div class="user-last-chat">OK that sounds perfect 🤞</div>
                                                </div>
                                                <div>
                                                    <div class="last-chat-time block">10:14 AM</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hr-wrap">
                                            <hr>
                                        </div>
                                        <a href="javascript:void(0);" class="media read-chat">
                                            <div class="media-img-wrap">
                                                <div class="avatar">
                                                    <img src="dist/img/avatar5.jpg" alt="user" class="avatar-img rounded-circle">
                                                </div>
                                                <span class="badge badge-success badge-indicator"></span>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="user-name">Ezequiel Merideth</div>
                                                    <div class="user-last-chat">staff was calling me to make sure I was there</div>
                                                </div>
                                                <div>
                                                    <div class="last-chat-time block">9:15 AM</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hr-wrap">
                                            <hr>
                                        </div>
                                        <a href="javascript:void(0);" class="media read-chat">
                                            <div class="media-img-wrap">
                                                <div class="avatar">
                                                    <img src="dist/img/avatar6.jpg" alt="user" class="avatar-img rounded-circle">
                                                </div>
                                                <span class="badge badge-success badge-indicator"></span>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="user-name">Jonnie Metoyer</div>
                                                    <div class="user-last-chat">There is so much caos happening</div>
                                                </div>
                                                <div>
                                                    <div class="last-chat-time block">10:24 AM</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hr-wrap">
                                            <hr>
                                        </div>
                                        <a href="javascript:void(0);" class="media read-chat">
                                            <div class="media-img-wrap">
                                                <div class="avatar">
                                                    <img src="dist/img/avatar7.jpg" alt="user" class="avatar-img rounded-circle">
                                                </div>
                                                <span class="badge badge-warning badge-indicator"></span>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="user-name">Angelic Lauver</div>
                                                    <div class="user-last-chat">Concentrate on studdies will be the text</div>
                                                </div>
                                                <div>
                                                    <div class="last-chat-time block">12.56 PM</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hr-wrap">
                                            <hr>
                                        </div>
                                        <a href="javascript:void(0);" class="media read-chat">
                                            <div class="media-img-wrap">
                                                <div class="avatar">
                                                    <img src="dist/img/avatar8.jpg" alt="user" class="avatar-img rounded-circle">
                                                </div>
                                                <span class="badge badge-danger badge-indicator"></span>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="user-name">Prischila Shy</div>
                                                    <div class="user-last-chat">Good morning! I am here to talk to you about the meeting</div>
                                                </div>
                                                <div>
                                                    <div class="last-chat-time block">Yesterday</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hr-wrap">
                                            <hr>
                                        </div>
                                        <a href="javascript:void(0);" class="media read-chat">
                                            <div class="media-img-wrap">
                                                <div class="avatar">
                                                    <img src="dist/img/avatar9.jpg" alt="user" class="avatar-img rounded-circle">
                                                </div>
                                                <span class="badge badge-danger badge-indicator"></span>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="user-name">Lynda Stack</div>
                                                    <div class="user-last-chat">How much should we contribute?</div>
                                                </div>
                                                <div>
                                                    <div class="last-chat-time block">Friday</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hr-wrap">
                                            <hr>
                                        </div>
                                        <a href="javascript:void(0);" class="media read-chat">
                                            <div class="media-img-wrap">
                                                <div class="avatar">
                                                    <img src="dist/img/avatar10.jpg" alt="user" class="avatar-img rounded-circle">
                                                </div>
                                                <span class="badge badge-success badge-indicator"></span>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="user-name">Aash Bill</div>
                                                    <div class="user-last-chat">I have to revise the task</div>
                                                </div>
                                                <div>
                                                    <div class="last-chat-time block">Thursday</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="chatapp-right">
                                <header>
                                    <a id="back_user_list" href="javascript:void(0)" class="back-user-list">
                                        <span class="feather-icon"><i data-feather="chevron-left"></i></span>
                                    </a>
                                    <div class="media">
                                        <div class="media-img-wrap">
                                            <div class="avatar">
                                                <img src="dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
                                            </div>
                                            <span class="badge badge-success badge-indicator"></span>
                                        </div>
                                        <div class="media-body">
                                            <div class="user-name">Evie Ono</div>
                                            <div class="user-status">online</div>
                                        </div>
                                    </div>
                                    <div class="chat-options-wrap">
                                        <a href="javascript:void(0)" class=""><span class="feather-icon"><i data-feather="video"></i></span></a>
                                        <a href="javascript:void(0)" class=""><span class="feather-icon"><i data-feather="phone"></i></span></a>
                                    </div>
                                </header>
                                <div class="chat-body">
                                    <div class="nicescroll-bar">
                                        <ul class="list-unstyled">
                                            <li class="media received">
                                                <div class="avatar">
                                                    <img src="dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <div class="msg-box">
                                                        <div>
                                                            <p>Cool, lets talk about it tomorrow</p>
                                                            <span class="chat-time">10:55 AM</span>
                                                            <div class="arrow-triangle-wrap">
                                                                <div class="arrow-triangle right"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="msg-box">
                                                        <div>
                                                            <p>Images for new marketing pages have been sent</p>
                                                            <span class="chat-time">10:56 AM</span>
                                                            <div class="arrow-triangle-wrap">
                                                                <div class="arrow-triangle right"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media received">
                                                <div class="avatar">
                                                    <img src="dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <div class="msg-box">
                                                        <div>
                                                            <p>Hey Ben, just a reminder that you are coming for the meeting today in the conference. We are proposing a change in the client briefing.</p>
                                                            <span class="chat-time">2:35 PM</span>
                                                            <div class="arrow-triangle-wrap">
                                                                <div class="arrow-triangle right"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media sent">
                                                <div class="media-body">
                                                    <div class="msg-box">
                                                        <div>
                                                            <p>Sure, on my way to office. Please give me quick update.</p>
                                                            <span class="chat-time">11:45 AM</span>
                                                            <div class="arrow-triangle-wrap">
                                                                <div class="arrow-triangle left"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="day-sep">today</li>
                                            <li class="media received">
                                                <div class="avatar">
                                                    <img src="dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <div class="msg-box">
                                                        <div>
                                                            <p>
                                                                Me: Can you please grow?
                                                                <br/> Hair: Nah..!
                                                                <br/> Muscle: Nope..!!
                                                                <br/> Salary: Don't even dream..!!!
                                                                <br/> Stomach: Anything for you dear..</p>
                                                            <span class="chat-time">7:24 PM</span>
                                                            <div class="arrow-triangle-wrap">
                                                                <div class="arrow-triangle right"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media sent">
                                                <div class="media-body">
                                                    <div class="msg-box">
                                                        <div>
                                                            <p>Haha, this joke is hilarious. Is it what your heart feel about the salary?</p>
                                                            <span class="chat-time">7:57 PM</span>
                                                            <div class="arrow-triangle-wrap">
                                                                <div class="arrow-triangle left"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="msg-box">
                                                        <div>
                                                            <p>Anyways, I am working on something that you would like to know. This project is based on angular js and you are the keeda in it. I need you help in it.</p>
                                                            <span class="chat-time">7:59 PM</span>
                                                            <div class="arrow-triangle-wrap">
                                                                <div class="arrow-triangle left"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <footer>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="btn-file  btn btn-light">
                                                <div class="btn-icon-wrap">
                                                    <span class="feather-icon"><i data-feather="paperclip"></i></span>
                                                    <input type="file">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="text" id="input_msg_send_chatapp" name="send-msg" class="input-msg-send form-control" placeholder="Type something">
                                        <div class="input-group-append">
                                            <button type="button" class="btn  btn-light  dropdown-toggle no-caret" data-toggle="dropdown"><span class="feather-icon"><i data-feather="at-sign"></i></span></button>
                                        </div>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Row -->

            </div>
            <!-- /Container -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Toggles JavaScript -->
    <script src="vendors/jquery-toggles/toggles.min.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Toggles JavaScript -->
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>

</body>

</html>