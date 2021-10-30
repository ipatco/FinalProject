

<!DOCTYPE html>
<html dir="ltr" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="CreativeLayers" content="">
		<!-- css file -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
		<!-- Responsive stylesheet -->
		<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
		<!-- Title -->
		<title>@yield('title')</title>
		<!-- Favicon -->
		<link href="{{ asset('assets/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon">
		<link href="{{ asset('assets/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			.my-nav-link {
				display: block;
				padding: 0.5rem 0rem;
				width: 120px !important;
				height: 45px !important;
			}
			.cs_rwo_tabs.csv2 .nav-tabs .my-nav-link {
			    font-size: 15px;
			}
			.myTab{
				position: sticky;
				top: 99px;
				background: #d9d9d9;
				padding: 10px 0px;
				z-index: 5;
			}
			.mm-listitem__text{
				color: white;
			}
			.image-296-193{
				height: 193px !important;
				width: 296px !important;
				object-fit: cover;
			}
			.vertical-wrapper .title-vertical.home5 {
				background-color: #130d4c;
			}
			.description-p-mb20{
				margin-bottom: 20px;
			}
			.accMenu{
				width: 100%;
				text-align: left;
			}
			.accMenu .arrow{
				float: right !important;
			}
			.nav-item.active > .nav-link {
				background-color: rgb(255, 255, 255);
				box-shadow: 0 1px 4px 0 rgba(0,0,0,.12);
				border-radius: 5px;
				position: relative;
			}

			.thisSkill {
				-ms-flex: 0 0 20%;
				flex: 0 0 20%;
				max-width: 20%;
				margin-bottom: 15px;
			}

			.thisSkill p {
				box-shadow: 0 2px 4px rgba(0,0,0,.2),inset 4px 0 0 #6659b8;
			}
			.thisSkill p {
				font-weight: 600;
				font-size: 14px;
				line-height: 20px;
				color: #000;
				padding: 15px;
				text-align: center;
				border-radius: 0;
				background: #fff;
				border: 1px solid rgba(114,157,245,.2);
				margin-bottom: 5px;
			}
			.mh-150{
				max-height: 150px;
			}
			.showGrid::before {
				/* content: url({{ asset('assets/grid.png') }}); */
				background-image: url({{ asset('assets/grid.png') }});
				background-size: 20px 20px;
				display: inline-block;
				width: 20px;
				height: 20px;
				content:"";
			}
			.vertical-wrapper:hover > .home5 > .showGrid::before {
				background-image: url({{ asset('assets/grid-color.png') }});
			}
			.logoImg{
				max-width: 65px;
			}
			.fa.fa-check{
				color: #00b62d !important;
			}

			.timer_tick{
				font-weight: 600;
			}



			.master-counselling-form-wrapper.sticky-position {
    position: -webkit-sticky;
    position: sticky;
    top: 64px;
}
.master-counselling-form-wrapper {
    box-shadow: 0 1px 2px rgb(0 0 0/12%);
    border-radius: 0 0 4px 4px;
}
.master-counselling-form-header {
    border-top: 3px solid #ff6e06;
    padding: 30px 20px;
    background-color: #6659b8;
    background-image: url({{ asset('assets/counselling-BG.webp')}});
    background-size: cover;
}
.master-counselling-form-body {
    padding: 20px;
    background-color: #6659b8;
    border-radius: 0 0 4px 4px;
}
.master-counselling-form-heading {
    font-size: 20px;
    line-height: 27px;
    color: #fff;
    margin-bottom: 5px;
}.master-counselling-form-text {
    font-size: 14px;
    line-height: 19px;
    color: #f5c723;
    margin-bottom: 0;
}
.master-counselling-form-body .form-default input, .master-counselling-form-body .form-default select {
    height: 42px;
}
.form-default input, .form-default label, .form-default select, .form-default textarea {
    color: #828282;
    font-size: 14px;
    border-color: #e0e0e0;
}
.form-row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px;
}
.select-country-wrap {
    width: 102px !important;
}
.pr-0 {
    padding-right: 0 !important;
}
.form-group {
    margin-bottom: 1rem;
}
.mobile-wrap-with-country {
    width: calc(100% - 102px) !important;
}
.master-counselling-form-body .form-default input, .master-counselling-form-body .form-default select {
    height: 42px;
}
.mobile-wrap-with-country input {
    border-top-right-radius: 4px !important;
    border-bottom-right-radius: 4px !important;
}
.form-default input, .form-default label, .form-default select, .form-default textarea {
    color: #828282;
    font-size: 14px;
    border-color: #e0e0e0;
}
.rounded-0 {
    border-radius: 0 !important;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
}.master-counselling-form-body .form-default input[type="submit"] {
    background: linear-gradient(270deg,#ff630b 0,#f90 100%);
    width: 100%;
    color: #fff;
    font-size: 15px;
    line-height: 20px;
    border: none;
}

			.inner_page_breadcrumb.csv2 .breadcrumb_content, .inner_page_breadcrumb.csv3 .breadcrumb_content {
				margin-top: 80px;
			}
			.pxPatco{
				margin-top: 0px !important;
			}
			.cs_row_one .cs_title {
				font-size: 28px;
			}
			.enrollBtn{
				margin-top: 5px;
			}
			.card-me{
				box-shadow: 0 1px 4px 0 rgba(0,0,0,.12);
margin-bottom: 10px;
			}

.bubble {
  background: #7979e6;
  border-radius: 15px;
  color: #fff;
  display: inline-block;
  margin: 25px;
  padding: 20px;
  position: relative;
}
.bubble:before, .bubble:after {
  height: 0;
  border: 14px solid transparent;
  content: "";
  position: absolute;
  width: 0;
  z-index: 5;
}
.bubble:after {
  z-index: 4;
}
.bubble__arrow-top:before, .bubble__arrow-top:after, .bubble__arrow-bottom:before, .bubble__arrow-bottom:after {
  left: 50%;
  margin-left: -14px;
}
.bubble__arrow-top:before {
  border-bottom-color: #7979e6;
  top: -28px;
}
.bubble__arrow-top.with-border:after {
  border-bottom-color: #000;
  border-width: 16px;
  margin-left: -16px;
  top: -32px;
}
.bubble__arrow-bottom:before {
  border-top-color: #7979e6;
  bottom: -28px;
}
.bubble__arrow-bottom.with-border:after {
  border-top-color: #000;
  border-width: 16px;
  margin-left: -16px;
  bottom: -32px;
}
.bubble__arrow-right:before, .bubble__arrow-right:after, .bubble__arrow-left:before, .bubble__arrow-left:after {
  top: 50%;
  margin-top: -14px;
}
.bubble__arrow-right:before {
  border-left-color: #7979e6;
  right: -28px;
}
.bubble__arrow-right.with-border:after {
  border-left-color: #000;
  border-width: 16px;
  margin-top: -16px;
  right: -32px;
}
.bubble__arrow-left:before {
  border-right-color: #7979e6;
  left: -28px;
}
.bubble__arrow-left.with-border:after {
  border-right-color: #000;
  border-width: 16px;
  margin-top: -16px;
  left: -32px;
}


.img-whp {
    height: 192px !important;
    object-fit: cover;
}
.vertical-wrapper .content-vertical .mega-vertical-menu > li .dropdown-menu.vertical-megamenu {
    padding: 5px;
}
		</style>
		@yield('css')

	</head>
	<body>
		<div class="wrapper">
			<div class="preloader"></div>
			<!-- Main Header Nav -->
			<header class="header-nav menu_style_home_five navbar-scrolltofixed stricky main-menu">
				<div class="container-fluid">
					<!-- Ace Responsive Menu -->
					<nav>
						<!-- Menu Toggle btn-->
						<div class="menu-toggle">
							<img class="nav_logo_img img-fluid" src="{{ asset('assets/logo.png') }}" alt="header-logo3.png">
							<button type="button" id="menu-btn">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
						</div>
						<a href="{{ route('web.home') }}" class="navbar_brand float-left dn-smd">
							<img class="logo1 img-fluid logoImg" src="{{ asset('assets/logo.png') }}" alt="header-logo2.png">
							<span>Learn to Earn</span>
						</a>
						<!-- Responsive Menu Structure-->
						<!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
						<div class="ht_left_widget home5 float-left">
							<ul>
								<li class="list-inline-item">
									<div class="header_top_lang_widget">
										<div class="ht-widget-container">
											<div class="vertical-wrapper">
												<h2 class="title-vertical home5">
													<i class="showGrid show-down mr-2" aria-hidden="true"></i> <span class="text-title"> Courses</span>
												</h2>
												<x-category-menu></x-category-menu>
											</div>
										</div>
									</div>
								</li>
								<li class="list-inline-item dn-1440">
									<div class="ht_search_widget">
										<div class="header_search_widget">
											<form class="form-inline mailchimp_form">
												<input type="email" class="form-control mb-2 mr-sm-2" id="inlineFormInputMail2" placeholder="Search for the software or skills you want to learn">
												<button type="submit" class="btn btn-primary mb-2"><span class="flaticon-magnifying-glass"></span></button>
											</form>
										</div>
									</div>
								</li>
								<li class="list-inline-item list_s dib-1440 dn">
									<div class="search_overlay home5">
										<a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
										<span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
										</a>
									</div>
								</li>
							</ul>
						</div>
						@if (isset(Auth::user()->id) && Auth::user()->id > 0)
						<ul class="home5_shop_reg_widget float-right mb0 mt20">
							<form method="POST" action="{{ route('logout') }}">
							<li class="list-inline-item"><a href="{{ route('user.account') }}" class="btn btn-md"><i class="flaticon-user pr5"></i> <span class="dn-lg">Account</span></a></li>
								@csrf
								<li class="list-inline-item"><a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="btn btn-md"><i class="flaticon-logout pr5"></i> <span class="dn-lg">{{ __('Log Out') }}</span></a></li>
							</ul>
						</form>
						@else
						<ul class="home5_shop_reg_widget float-right mb0 mt20">
							<li class="list-inline-item"><a href="#" class="btn btn-md" data-toggle="modal" data-target="#exampleModalCenter"><i class="flaticon-user pr5"></i> <span class="dn-lg">Login/Register</span></a></li>
						</ul>
						@endif
						<ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
							<li class="last">
								<a href="{{ route('web.contact') }}"><span class="title">Contact</span></a>
							</li>
							<li class="list_three">
								<a href="{{ route('web.corporate') }}"><span class="title">Corporate Training</span></a>
							</li>
							<li class="list_two">
								<a href="{{ route('web.explore') }}"><span class="title">Explore Courses</span></a>
							</li>
							<li class="list_one">
								<a href="{{ route('web.home') }}"><span class="title">Home</span></a>
							</li>
						</ul>
					</nav>
					<!-- End of Responsive Menu -->
				</div>
			</header>
			<!-- Modal -->

			<!-- Modal Search Button Bacground Overlay -->
			<div class="search_overlay dn-992">
				<div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
					<a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i class="fa fa-times"></i></a>
					<div id="mk-fullscreen-search-wrapper">
						<form method="get" id="mk-fullscreen-searchform">
							<input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input">
							<i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
						</form>
					</div>
				</div>
			</div>
			<!-- Main Header Nav For Mobile -->
			<div id="page" class="stylehome1 h0">
				<div class="mobile-menu">
					<div class="header stylehome1 home5">
						<div class="main_logo_home2">
							<img class="nav_logo_img img-fluid float-left mt20" src="{{ asset('assets/images/header-logo2.png') }}" alt="header-logo2.png">
							<span>Learn2Earn</span>
						</div>
						<ul class="menu_bar_home2 home5">
							<li class="list-inline-item">
								<div class="search_overlay">
									<a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger" href="#">
										<div id="search-button2"><i class="flaticon-magnifying-glass color-dark"></i></div>
									</a>
									<div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
										<a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i class="fa fa-times"></i></a>
										<div id="mk-fullscreen-search-wrapper2">
											<form method="get" id="mk-fullscreen-searchform2">
												<input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input2">
												<i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
											</form>
										</div>
									</div>
								</div>
							</li>
							<li class="list-inline-item"><a href="#menu"><span></span></a></li>
						</ul>
					</div>
				</div>
				<!-- /.mobile-menu -->
				<nav id="menu" class="stylehome1">
					<ul>
                        <li><a href="{{ route('web.home') }}"><span class="title">Home</span></a></li>
                        <li><a href="{{ route('web.explore') }}"><span class="title">Explore Courses</span></a></li>
                        <li><a href="{{ route('web.corporate') }}"><span class="title">Corporate Training</span></a></li>
						<li><a href="{{ route('web.contact') }}"><span class="title">Contact</span></a></li>
						<li><a href="#" onclick="$('.mm-menu_offcanvas').removeClass('mm-menu_opened'); $('#home-tab').click()" data-toggle="modal" data-target="#exampleModalCenter"><span class="flaticon-user"></span> Login</a></li>
						<li><a href="#" onclick="$('.mm-menu_offcanvas').removeClass('mm-menu_opened'); $('#profile-tab').click()" data-toggle="modal" data-target="#exampleModalCenter"><span class="flaticon-edit"></span> Register</a></li>
					</ul>
				</nav>
			</div>
			<!-- Home Design -->
			@yield('page')
			<!-- Our Newslatters -->
			<section id="our-newslatters" class="our-newslatters">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 offset-lg-3">
							<div class="main-title text-center">
								<h3 class="mt0">Get Newsletter</h3>
								<p>Your download should start automatically, if not Click here. Should I give up, huh?.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 offset-lg-3">
							<div class="footer_apps_widget_home1">
								<form class="form-inline mailchimp_form">
									<input type="email" class="form-control" placeholder="Email address">
									<button type="submit" class="btn btn-lg btn-thm dbxshad">Get it now <span class="flaticon-right-arrow-1"></span></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Our Footer -->
			<section class="footer_one">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
							<div class="footer_contact_widget">
								<h4>CONTACT</h4>
								<p>329 Queensberry Street, North Melbourne </p>
								<p>VIC 3051, Australia.</p>
								<p>123 456 7890</p>
								<p>support@edumy.com</p>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
							<div class="footer_company_widget">
								<h4>COMPANY</h4>
								<ul class="list-unstyled">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="page-contact.html">Contact</a></li>
									<li><a href="#">Become a Teacher</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
							<div class="footer_program_widget">
								<h4>PROGRAMS</h4>
								<ul class="list-unstyled">
									<li><a href="#">Nanodegree Plus</a></li>
									<li><a href="#">Veterans</a></li>
									<li><a href="#">Georgia</a></li>
									<li><a href="#">Self-Driving Car</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
							<div class="footer_support_widget">
								<h4>SUPPORT</h4>
								<ul class="list-unstyled">
									<li><a href="#">Documentation</a></li>
									<li><a href="#">Forums</a></li>
									<li><a href="#">Language Packs</a></li>
									<li><a href="#">Release Status</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-md-3 col-lg-3">
							<div class="footer_apps_widget">
								<h4>MOBILE</h4>
								<div class="app_grid">
									<button class="apple_btn btn-dark">
									<span class="icon">
									<span class="flaticon-apple"></span>
									</span>
									<span class="title">App Store</span>
									<span class="subtitle">Available now on the</span>
									</button>
									<button class="play_store_btn btn-dark">
									<span class="icon">
									<span class="flaticon-google-play"></span>
									</span>
									<span class="title">Google Play</span>
									<span class="subtitle">Get in on</span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Our Footer Middle Area -->
			<section class="footer_middle_area p0">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 pb15 pt15">
							<div class="logo-widget home1">
								<img class="img-fluid logoImg" src="{{ asset('assets/logo.png') }}" alt="header-logo.png">
								<span>Learn to Earn</span>
							</div>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 pb15 pt15">
							<div class="footer_social_widget mt15">
								<ul>
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Our Footer Bottom Area -->
			<section class="footer_bottom_area pt25 pb25">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 offset-lg-3">
							<div class="copyright-widget text-center">
								<p>Copyright iPatco © 2021. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<a class="scrollToHome home5" href="#"><i class="flaticon-up-arrow-1"></i></a>
		</div>
		<!-- Wrapper End -->
		<script type="text/javascript" src="{{ asset('assets/js/jquery-3.3.1.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/jquery.mmenu.all.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/ace-responsive-menu.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/isotop.js') }}"></script>
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
		<!-- Custom script for all pages -->
		<script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
		<x-auth-model></x-auth-model>
		<script>
			@if($errors != '[]')
			$('#exampleModalCenter').modal('show')
			@endif

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
		</script>
		@yield('js')
	</body>
</html>

