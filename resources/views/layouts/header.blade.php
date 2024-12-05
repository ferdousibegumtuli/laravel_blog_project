<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext 
    webgl no-touch geolocation postmessage no-websqldatabase indexeddb 
    hashchange history draganddrop websockets rgba hsla multiplebgs 
    backgroundsize borderimage borderradius boxshadow textshadow opacity 
    cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d 
    csstransitions fontface generatedcontent video audio localstorage sessionstorage 
    webworkers no-applicationcache svg inlinesvg smil svgclippaths">

<head>
    
    <title>Blog Project</title>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <link rel="icon" href="css/deshboard/favicon.ico" type="/image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/deshboard/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/deshboard/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="/css/deshboard/icofont.css">
    <link rel="stylesheet" type="text/css" href="/css/deshboard/style.css">
    <link rel="stylesheet" type="text/css" href="/css/deshboard/jquery.mCustomScrollbar.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body themebg-pattern="pattern2">
    <div id="pcoded" class="pcoded iscollapsed" theme-layout="vertical" vertical-placement="left" 
    vertical-layout="wide" pcoded-device-type="desktop" vertical-nav-type="expanded"
        vertical-effect="shrink" vnavigation-view="view1" 
        nav-type="st2" fream-type="theme1" layout-type="light">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header iscollapsed" header-theme="theme1" pcoded-header-position="fixed">
                <div class="navbar-wrapper">

                    <div class="navbar-logo" logo-theme="theme1">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="index.html">
                            <img class="img-fluid" src="/images/deshboard/logo.png" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="/images/deshboard/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>{{ Auth::user()->name }}</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container" style="margin-top: 80px;">
                <div class="pcoded-wrapper">
          