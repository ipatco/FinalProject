<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="academy, college, coursera, courses, education, elearning, kindergarten, lms, lynda, online course, online education, school, training, udemy, university">
<meta name="description" content="Edumy - LMS Online Education Course & School HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/dashbord_navitaion.css') }}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
<!-- Title -->
<title>@yield('title')</title>
<!-- Favicon -->
<link href="{{ asset('assets/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{ asset('assets/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" />
<style>
    .logoImg{
        max-width: 65px !important;
    }
</style>
@yield('css')
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapperx">
	<div class="preloader"></div>

	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one dashbord_pages navbar-scrolltofixed stricky main-menu">
		<div class="container-fluid">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid logoImg" src="{{ asset('assets/logo.png') }}" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="{{ route('user.account') }}" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid logoImg" src="{{ asset('assets/logo.png') }}" alt="header-logo.png">
		            <img class="logo2 img-fluid logoImg" src="{{ asset('assets/logo.png') }}" alt="header-logo.png">
		            <span>Learn to Earn</span>
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                    <li>
                        <a href="{{ route('web.home') }}"><span class="title">Home</span></a>
                    </li>
                    <li>
                        <a href="{{ route('web.explore') }}"><span class="title">Explore Courses</span></a>
                    </li>
                    <li>
                        <a href="{{ route('web.corporate') }}"><span class="title">Corporate Training</span></a>
                    </li>
                    <li>
                        <a href="{{ route('web.contact') }}"><span class="title">Contact</span></a>
                    </li>
		        </ul>
		    </nav>
		</div>
	</header>

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1 dashbord_mobile_logo dashbord_pages">
				<div class="main_logo_home2">
		            <img class="nav_logo_img img-fluid float-left mt20 logoImg" src="{{ asset('assets/logo.png') }}" alt="header-logo.png">
		            <span>Learn to Earn</span>
				</div>
				<ul class="menu_bar_home2">
					<li class="list-inline-item"></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li>
                    <a href="{{ route('web.home') }}"><span class="title">Home</span></a>
                </li>
                <li>
                    <a href="{{ route('web.explore') }}"><span class="title">Explore Courses</span></a>
                </li>
                <li>
                    <a href="{{ route('web.corporate') }}"><span class="title">Corporate Training</span></a>
                </li>
                <li>
                    <a href="{{ route('web.contact') }}"><span class="title">Contact</span></a>
                </li>
			</ul>
		</nav>
	</div>
    <!-- Our Dashbord Sidebar -->
	<section class="dashboard_sidebar dn-1199">
		<div class="dashboard_sidebars">
			<div class="user_board">
				<div class="user_profile">
					<div class="media">
					  	<div class="media-body">
					    	<h4 class="mt-0">Start</h4>
						</div>
					</div>
				</div>
				<div class="dashbord_nav_list">
					<ul>
						<li class="active"><a href="{{ route('user.account') }}"><span class="flaticon-puzzle-1"></span> Dashboard</a></li>
						<li><a href="{{ route('user.account.course') }}"><span class="flaticon-online-learning"></span> My Courses</a></li>
						<li><a href="{{ route('user.account.transaction') }}"><span class="flaticon-shopping-bag-1"></span> Transactions</a></li>
						<li><a href="{{ route('user.account.message') }}"><span class="flaticon-speech-bubble"></span> Messages</a></li>
						<li><a href="{{ route('user.account.materials') }}"><span class="flaticon-resume"></span> Course Materials</a></li>
						<li><a href="{{ route('user.account.certificates') }}"><span class="flaticon-graduation-cap"></span> Certificates</a></li>
					</ul>
					<h4>Account</h4>
					<ul>
						<li><a href="{{ route('user.account.setting') }}"><span class="flaticon-settings"></span> Settings</a></li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
						    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"><span class="flaticon-logout"></span> Logout</a></li>
                        </form>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Dashbord -->
	<div class="our-dashbord dashbord">
		<div class="dashboard_main_content">
			<div class="container-fluid">
				<div class="main_content_container">
					@yield('page')
					<div class="row mt50 mb50">
						<div class="col-lg-6 offset-lg-3">
							<div class="copyright-widget text-center">
								<p class="color-black2">Copyright Learn to Earn © {{ date('Y') }}. All Rights Reserved. | iPatco</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="{{ asset('assets/js/jquery-3.3.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.mmenu.all.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/ace-responsive-menu.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/chart.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/chart-custome.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/snackbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/simplebar.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/parallax.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/scrollto.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery-scrolltofixed-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.counterup.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/progressbar.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/slider.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/timepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/dashboard-script.js') }}"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
@yield('js')
</body>
</html>
