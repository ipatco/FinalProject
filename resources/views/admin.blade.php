

<!DOCTYPE html>
<html lang="en" class="loading">
	<!-- BEGIN : Head-->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
		<meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
		<meta name="author" content="PIXINVENT">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>@yield('title')</title>
		<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('app-assets/img/ico/apple-icon-60.png') }}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('app-assets/img/ico/apple-icon-76.png') }}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('app-assets/img/ico/apple-icon-120.png') }}">
		<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('app-assets/img/ico/apple-icon-152.png') }}">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/img/ico/favicon.ico') }}">
		<link rel="shortcut icon" type="image/png" href="{{ asset('app-assets/img/ico/favicon-32.png') }}">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-touch-fullscreen" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="default">
		<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
		<!-- BEGIN VENDOR CSS-->
		<!-- font icons-->
		<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/feather/style.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/simple-line-icons/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/font-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/perfect-scrollbar.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/prism.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/chartist.min.css') }}">
		<!-- END VENDOR CSS-->
		<!-- BEGIN APEX CSS-->
		<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/app.css') }}">
		<!-- END APEX CSS-->
		<!-- BEGIN Page Level CSS-->
		<!-- END Page Level CSS-->
		<style>
			.h-150{
				height: 150px;
			}
			.myCard{
				box-shadow: 5px 5px 10px #d2d2d2;
				border: 1px solid #d2d2d2;
				padding: 5px 10px;
			}
			.myCard .close{
				color: red !important;
			}
			.close.edit{
				margin-right: 10px;
				color: #000 !important;
			}
		</style>
	</head>
	<!-- END : Head-->
	<!-- BEGIN : Body-->
	<body data-col="2-columns" class=" 2-columns ">
		<!-- ////////////////////////////////////////////////////////////////////////////-->
		<div class="wrapper">
			<!-- main menu-->
			<!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
			<div data-active-color="white" data-background-color="man-of-steel" data-image="{{ asset('app-assets/img/sidebar-bg/01.jpg') }}" class="app-sidebar">
				<!-- main menu header-->
				<!-- Sidebar Header starts-->
				<div class="sidebar-header">
					<div class="logo clearfix">
						<a href="" class="logo-text float-left">
							<div class="logo-img"><img src="{{ asset('app-assets/img/logo.png') }}"/></div>
							<span class="text align-middle">iPatco</span>
						</a>
						<a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="expanded" class="toggle-icon ft-toggle-right"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i></a>
					</div>
				</div>
				<!-- Sidebar Header Ends-->
				<!-- / main menu header-->
				<!-- main menu content-->
				<div class="sidebar-content">
					<div class="nav-container">
						<ul id="main-menu-navigation" data-menu="menu-navigation" data-scroll-to-active="true" class="navigation navigation-main">
							<li class="nav-item">
								<a href="">
									<i class="ft-home"></i> <span data-i18n="" class="menu-title">Dashboard</span>
								</a>
							</li>
							<li class="has-sub nav-item">
								<a href="#"><i class="ft-aperture"></i><span data-i18n="" class="menu-title">Catelog</span></a>
								<ul class="menu-content">
									<li><a href="{{ route('admin.categories') }}" class="menu-item">Categories</a>
									</li>
									<li class="has-sub">
										<a href="#" class="menu-item">Courses</a>
										<ul class="menu-content">
											<li><a href="{{ route('admin.courses') }}" class="menu-item">All Courses</a>
											</li>
											<li><a href="{{ route('admin.courses.add') }}" class="menu-item">Add New Course</a>
											</li>
											<li><a href="{{ route('admin.courses') }}" class="menu-item">Filters</a>
											</li>
										</ul>
									</li>
									<li><a href="" class="menu-item">Downloads</a>
									</li>
									<li><a href="" class="menu-item">Brands</a>
									</li>
									<li><a href="" class="menu-item">Search</a>
									</li>

								</ul>
							</li>
							<li class=" nav-item"><a href="{{ route('admin.users') }}"><i class="ft-droplet"></i><span data-i18n="" class="menu-title">Users</span></a>
							</li>
							<li class=" nav-item"><a href="{{ route('admin.users') }}"><i class="ft-droplet"></i><span data-i18n="" class="menu-title">Instructors</span></a>
							</li>
							<li class=" nav-item"><a href="{{ route('admin.users') }}"><i class="ft-droplet"></i><span data-i18n="" class="menu-title">Meetings</span></a>
							</li>
							<li class="has-sub nav-item">
								<a href="#"><i class="ft-layers"></i><span data-i18n="" class="menu-title">Orders</span></a>
								<ul class="menu-content">
									<li><a href="" class="menu-item">New Orders</a>
									</li>
									<li><a href="" class="menu-item">All Orders</a>
									</li>
								</ul>
							</li>
							<li class="has-sub nav-item">
								<a href="#"><i class="ft-layers"></i><span data-i18n="" class="menu-title">Transactions</span></a>
								<ul class="menu-content">
									<li><a href="" class="menu-item">Basic Cards</a>
									</li>
									<li><a href="" class="menu-item">Advanced Cards</a>
									</li>
								</ul>
							</li>
							<li class="has-sub nav-item">
								<a href="#"><i class="ft-layers"></i><span data-i18n="" class="menu-title">Cards</span></a>
								<ul class="menu-content">
									<li><a href="basic-cards.html" class="menu-item">Basic Cards</a>
									</li>
									<li><a href="advanced-cards.html" class="menu-item">Advanced Cards</a>
									</li>
								</ul>
							</li>
							<li class=" nav-item"><a href="inbox.html"><i class="ft-mail"></i><span data-i18n="" class="menu-title">Inbox</span></a>
							</li>
							<li class=" nav-item"><a href="chat.html"><i class="ft-message-square"></i><span data-i18n="" class="menu-title">Chat</span></a>
							</li>
							<li class=" nav-item"><a href="taskboard.html"><i class="ft-file-text"></i><span data-i18n="" class="menu-title">Task Board</span></a>
							</li>
							<li class=" nav-item"><a href="calendar.html"><i class="ft-calendar"></i><span data-i18n="" class="menu-title">Calendar</span></a>
							</li>

							<li class="has-sub nav-item">
								<a href="#"><i class="ft-box"></i><span data-i18n="" class="menu-title">Components</span></a>
								<ul class="menu-content">
									<li class="has-sub">
										<a href="#" class="menu-item">Bootstrap</a>
										<ul class="menu-content">
											<li><a href="components-lists.html" class="menu-item">List</a>
											</li>
											<li><a href="components-buttons.html" class="menu-item">Buttons</a>
											</li>
											<li><a href="components-alerts.html" class="menu-item">Alerts</a>
											</li>
											<li><a href="components-badges.html" class="menu-item">Badges</a>
											</li>
											<li><a href="components-dropdowns.html" class="menu-item">Dropdowns</a>
											</li>
											<li><a href="components-media-objects.html" class="menu-item">Media Objects</a>
											</li>
											<li><a href="components-pagination.html" class="menu-item">Pagination</a>
											</li>
											<li><a href="components-progress.html" class="menu-item">Progress Bars</a>
											</li>
											<li><a href="components-modals.html" class="menu-item">Modals</a>
											</li>
											<li><a href="components-collapse.html" class="menu-item">Collapse</a>
											</li>
											<li><a href="components-accordion.html" class="menu-item">Accordion</a>
											</li>
											<li><a href="components-carousel.html" class="menu-item">Carousel</a>
											</li>
											<li><a href="components-datepicker.html" class="menu-item">Datepicker</a>
											</li>
											<li><a href="components-popover.html" class="menu-item">Popover</a>
											</li>
											<li><a href="components-tabs.html" class="menu-item">Tabs</a>
											</li>
											<li><a href="components-tooltip.html" class="menu-item">Tooltip</a>
											</li>
											<li><a href="components-spinner.html" class="menu-item">Spinner</a>
											</li>
											<li><a href="components-toast.html" class="menu-item">Toast</a>
											</li>
											<li><a href="components-radio-checkboxes.html" class="menu-item">Radio &amp; Checkboxes</a>
											</li>
										</ul>
									</li>
									<li class="has-sub">
										<a href="#" class="menu-item">Extra</a>
										<ul class="menu-content">
											<li><a href="sweet-alerts.html" class="menu-item">Sweet Alert</a>
											</li>
											<li><a href="toastr.html" class="menu-item">Toastr</a>
											</li>
											<li><a href="nouislider.html" class="menu-item">NoUI Slider</a>
											</li>
											<li><a href="upload.html" class="menu-item">Upload</a>
											</li>
											<li><a href="editor.html" class="menu-item">Editor</a>
											</li>
											<li><a href="dragndrop.html" class="menu-item">Drag and Drop</a>
											</li>
											<li><a href="tour.html" class="menu-item">Tour</a>
											</li>
											<li><a href="image-cropper.html" class="menu-item">Image Cropper</a>
											</li>
											<li><a href="tags-input.html" class="menu-item">Input Tag</a>
											</li>
											<li><a href="switch.html" class="menu-item">Switch</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="has-sub nav-item">
								<a href="#"><i class="ft-edit"></i><span data-i18n="" class="menu-title">Forms</span></a>
								<ul class="menu-content">
									<li class="has-sub">
										<a href="#" class="menu-item">Elements</a>
										<ul class="menu-content">
											<li><a href="inputs.html" class="menu-item">Inputs</a>
											</li>
											<li><a href="input-groups.html" class="menu-item">Input Groups</a>
											</li>
											<li><a href="input-grid.html" class="menu-item">Input Grid</a>
											</li>
										</ul>
									</li>
									<li class="has-sub">
										<a href="#" class="menu-item">Layouts</a>
										<ul class="menu-content">
											<li><a href="basic-forms.html" class="menu-item">Basic Forms</a>
											</li>
											<li><a href="horizontal-forms.html" class="menu-item">Horizontal Forms</a>
											</li>
											<li><a href="hidden-labels.html" class="menu-item">Hidden Labels</a>
											</li>
											<li><a href="form-actions.html" class="menu-item">Form Actions</a>
											</li>
											<li><a href="bordered-forms.html" class="menu-item">Bordered Forms</a>
											</li>
											<li><a href="striped-rows.html" class="menu-item">Striped Rows</a>
											</li>
										</ul>
									</li>
									<li><a href="validation-forms.html" class="menu-item">Validation</a>
									</li>
									<li><a href="wizard-forms.html" class="menu-item">Wizard</a>
									</li>
								</ul>
							</li>
							<li class="has-sub nav-item">
								<a href="#"><i class="ft-grid"></i><span data-i18n="" class="menu-title">Tables</span></a>
								<ul class="menu-content">
									<li><a href="regular-table.html" class="menu-item">Regular</a>
									</li>
									<li><a href="extended-table.html" class="menu-item">Extended</a>
									</li>
								</ul>
							</li>
							<li class="has-sub nav-item">
								<a href="#"><i class="ft-layout"></i><span data-i18n="" class="menu-title">Data Tables</span></a>
								<ul class="menu-content">
									<li><a href="dt-basic-initialization.html" class="menu-item">Basic Initialisation</a>
									</li>
									<li><a href="dt-advanced-initialization.html" class="menu-item">Advanced initialisation</a>
									</li>
									<li><a href="dt-styling.html" class="menu-item">Styling</a>
									</li>
									<li><a href="dt-data-sources.html" class="menu-item">Data Sources</a>
									</li>
									<li><a href="dt-api.html" class="menu-item">API</a>
									</li>
								</ul>
							</li>
							<li class="has-sub nav-item">
								<a href="#"><i class="ft-layers"></i><span data-i18n="" class="menu-title">Cards</span></a>
								<ul class="menu-content">
									<li><a href="basic-cards.html" class="menu-item">Basic Cards</a>
									</li>
									<li><a href="advanced-cards.html" class="menu-item">Advanced Cards</a>
									</li>
								</ul>
							</li>
							<li class="has-sub nav-item">
								<a href="#"><i class="ft-map"></i><span data-i18n="" class="menu-title">Maps</span></a>
								<ul class="menu-content">
									<li><a href="google-map.html" class="menu-item">Google Map</a>
									</li>
								</ul>
							</li>
							<li class="has-sub nav-item">
								<a href="#"><i class="ft-bar-chart-2"></i><span data-i18n="" class="menu-title">Charts</span></a>
								<ul class="menu-content">
									<li><a href="chartjs.html" class="menu-item">ChartJs</a>
									</li>
									<li><a href="chartist.html" class="menu-item">Chartist</a>
									</li>
								</ul>
							</li>
							<li class="has-sub nav-item">
								<a href="#"><i class="ft-copy"></i><span data-i18n="" class="menu-title">Pages</span></a>
								<ul class="menu-content">
									<li><a href="forgot-password-page.html" class="menu-item">Forgot Password</a>
									</li>
									<li><a href="horizontal-timeline-page.html" class="menu-item">Horizontal Timeline</a>
									</li>
									<li><a href="vertical-timeline-page.html" class="menu-item">Vertical Timeline</a>
									</li>
									<li><a href="login-page.html" class="menu-item">Login</a>
									</li>
									<li><a href="register-page.html" class="menu-item">Register</a>
									</li>
									<li><a href="user-profile-page.html" class="menu-item">User Profile</a>
									</li>
									<li><a href="lock-screen-page.html" class="menu-item">Lock Screen</a>
									</li>
									<li><a href="invoice-page.html" class="menu-item">Invoice</a>
									</li>
									<li><a href="error-page.html" class="menu-item">Error</a>
									</li>
									<li><a href="coming-soon-page.html" class="menu-item">Coming Soon</a>
									</li>
									<li><a href="maintenance-page.html" class="menu-item">Maintenance</a>
									</li>
									<li><a href="gallery-page.html" class="menu-item">Gallery</a>
									</li>
								</ul>
							</li>
							<li class=" nav-item"><a href="https://pixinvent.com/apex-angular-4-bootstrap-admin-template/documentation"><i class="ft-book"></i><span data-i18n="" class="menu-title">Documentation</span></a>
							</li>
							<li class=" nav-item"><a href="https://pixinvent.ticksy.com/"><i class="ft-life-buoy"></i><span data-i18n="" class="menu-title">Support</span></a>
							</li>
						</ul>
					</div>
				</div>
				<!-- main menu content-->
				<div class="sidebar-background"></div>
				<!-- main menu footer-->
				<!-- include includes/menu-footer-->
				<!-- main menu footer-->
			</div>
			<!-- / main menu-->
			<!-- Navbar (Header) Starts-->
			<nav class="navbar navbar-expand-lg navbar-light bg-faded header-navbar">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><span class="d-lg-none navbar-right navbar-collapse-toggle"><a aria-controls="navbarSupportedContent" href="javascript:;" class="open-navbar-container black"><i class="ft-more-vertical"></i></a></span>
						<form role="search" class="navbar-form navbar-right mt-1">
							<div class="position-relative has-icon-right">
								<input type="text" placeholder="Search" class="form-control round"/>
								<div class="form-control-position"><i class="ft-search"></i></div>
							</div>
						</form>
					</div>
					<div class="navbar-container">
						<div id="navbarSupportedContent" class="collapse navbar-collapse">
							<ul class="navbar-nav">
								<li class="nav-item mr-2 d-none d-lg-block">
									<a id="navbar-fullscreen" href="javascript:;" class="nav-link apptogglefullscreen">
										<i class="ft-maximize font-medium-3 blue-grey darken-4"></i>
										<p class="d-none">fullscreen</p>
									</a>
								</li>
								<li class="dropdown nav-item">
									<a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle"><i class="ft-flag font-medium-3 blue-grey darken-4"></i><span class="selected-language d-none"></span></a>
									<div class="dropdown-menu dropdown-menu-right text-left"><a href="javascript:;" class="dropdown-item py-1"><img src="{{ asset('app-assets/img/flags/us.png') }}" class="langimg"/><span> English</span></a><a href="javascript:;" class="dropdown-item py-1"><img src="{{ asset('app-assets/img/flags/es.png') }}" class="langimg"/><span> Spanish</span></a><a href="javascript:;" class="dropdown-item py-1"><img src="{{ asset('app-assets/img/flags/br.png') }}" class="langimg"/><span> Portuguese</span></a><a href="javascript:;" class="dropdown-item"><img src="{{ asset('app-assets/img/flags/de.png') }}" class="langimg"/><span> French</span></a></div>
								</li>
								<li class="dropdown nav-item">
									<a id="dropdownBasic2" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
										<i class="ft-bell font-medium-3 blue-grey darken-4"></i><span class="notification badge badge-pill badge-danger">4</span>
										<p class="d-none">Notifications</p>
									</a>
									<div class="notification-dropdown dropdown-menu dropdown-menu-right">
										<div class="noti-list">
											<a class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4"><i class="ft-bell info float-left d-block font-large-1 mt-1 mr-2"></i><span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 info">New Order Received</span><span class="noti-text">Lorem ipsum dolor sit ametitaque in, et!</span></span></a>
										</div>
										<a class="noti-footer primary text-center d-block border-top border-top-blue-grey border-top-lighten-4 text-bold-400 py-1">Read All Notifications</a>
									</div>
								</li>
								<li class="dropdown nav-item">
									<a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
										<i class="ft-user font-medium-3 blue-grey darken-4"></i>
										<p class="d-none">User Settings</p>
									</a>
									<div ngbdropdownmenu="" aria-labelledby="dropdownBasic3" class="dropdown-menu text-left dropdown-menu-right">
										<a href="" class="dropdown-item py-1"><i class="ft-message-square mr-2"></i><span>Chat</span></a>
										<a href="" class="dropdown-item py-1"><i class="ft-edit mr-2"></i><span>Edit Profile</span></a>
										<a href="" class="dropdown-item py-1"><i class="ft-mail mr-2"></i><span>My Inbox</span></a>
										<div class="dropdown-divider"></div>
										<a href="" class="dropdown-item"><i class="ft-power mr-2"></i><span>Logout</span></a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
			<!-- Navbar (Header) Ends-->
			<div class="main-panel">
				<!-- BEGIN : Main Content-->
				@yield('page')
				<!-- END : End Main Content-->
				<!-- BEGIN : Footer-->
				<footer class="footer footer-static footer-light">
					<p class="clearfix text-muted text-sm-center px-2"><span>Copyright  &copy; 2021 <a href="" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">iPatco</a>, All rights reserved. </span></p>
				</footer>
				<!-- End : Footer-->
			</div>
		</div>
		<!-- ////////////////////////////////////////////////////////////////////////////-->

		<!-- Theme customizer Starts-->
		<div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-sm-none d-md-block">
			<a class="customizer-close"><i class="ft-x font-medium-3"></i></a><a id="customizer-toggle-icon" class="customizer-toggle bg-danger"><i class="ft-settings font-medium-4 fa fa-spin white align-middle"></i></a>
			<div data-ps-id="df6a5ce4-a175-9172-4402-dabd98fc9c0a" class="customizer-content p-3 ps-container ps-theme-dark">
				<h4 class="text-uppercase mb-0 text-bold-400">Theme Customizer</h4>
				<p>Customize & Preview in Real Time</p>
				<hr>
				<!-- Layout Options-->
				<h6 class="text-center text-bold-500 mb-3 text-uppercase">Layout Options</h6>
				<div class="layout-switch ml-4">
					<div class="custom-control custom-radio d-inline-block custom-control-inline light-layout">
						<input id="ll-switch" type="radio" name="layout-switch" checked class="custom-control-input">
						<label for="ll-switch" class="custom-control-label">Light</label>
					</div>
					<div class="custom-control custom-radio d-inline-block custom-control-inline dark-layout">
						<input id="dl-switch" type="radio" name="layout-switch" class="custom-control-input">
						<label for="dl-switch" class="custom-control-label">Dark</label>
					</div>
					<div class="custom-control custom-radio d-inline-block custom-control-inline transparent-layout">
						<input id="tl-switch" type="radio" name="layout-switch" class="custom-control-input">
						<label for="tl-switch" class="custom-control-label">Transparent</label>
					</div>
				</div>
				<hr>
				<!-- Sidebar Options Starts-->
				<h6 class="text-center text-bold-500 mb-3 text-uppercase sb-options">Sidebar Color Options</h6>
				<div class="cz-bg-color sb-color-options">
					<div class="row p-1">
						<div class="col"><span style="width:20px; height:20px;" data-bg-color="pomegranate" class="gradient-pomegranate d-block rounded-circle"></span></div>
						<div class="col"><span style="width:20px; height:20px;" data-bg-color="king-yna" class="gradient-king-yna d-block rounded-circle"></span></div>
						<div class="col"><span style="width:20px; height:20px;" data-bg-color="ibiza-sunset" class="gradient-ibiza-sunset d-block rounded-circle"></span></div>
						<div class="col"><span style="width:20px; height:20px;" data-bg-color="flickr" class="gradient-flickr d-block rounded-circle"></span></div>
						<div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-bliss" class="gradient-purple-bliss d-block rounded-circle"></span></div>
						<div class="col"><span style="width:20px; height:20px;" data-bg-color="man-of-steel" class="gradient-man-of-steel d-block rounded-circle"></span></div>
						<div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-love" class="gradient-purple-love d-block rounded-circle"></span></div>
					</div>
					<div class="row p-1">
						<div class="col"><span style="width:20px; height:20px;" data-bg-color="black" class="bg-black d-block rounded-circle"></span></div>
						<div class="col"><span style="width:20px; height:20px;" data-bg-color="white" class="bg-grey d-block rounded-circle"></span></div>
						<div class="col"><span style="width:20px; height:20px;" data-bg-color="primary" class="bg-primary d-block rounded-circle"></span></div>
						<div class="col"><span style="width:20px; height:20px;" data-bg-color="success" class="bg-success d-block rounded-circle"></span></div>
						<div class="col"><span style="width:20px; height:20px;" data-bg-color="warning" class="bg-warning d-block rounded-circle"></span></div>
						<div class="col"><span style="width:20px; height:20px;" data-bg-color="info" class="bg-info d-block rounded-circle"></span></div>
						<div class="col"><span style="width:20px; height:20px;" data-bg-color="danger" class="bg-danger d-block rounded-circle"></span></div>
					</div>
				</div>
				<!-- Sidebar Options Ends-->
				<!-- Transparent Layout Bg color Options-->
				<h6 class="text-center text-bold-500 mb-3 text-uppercase tl-color-options d-none">Background Colors</h6>
				<div class="cz-tl-bg-color d-none">
					<div class="row p-1">
						<div class="col"><span style="width:20px; height:20px;" data-bg-color="hibiscus" class="bg-hibiscus d-block rounded-circle"></span></div>
						<div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-purple-pizzazz" class="bg-purple-pizzazz d-block rounded-circle"></span></div>
						<div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-blue-lagoon" class="bg-blue-lagoon d-block rounded-circle"></span></div>
						<div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-electric-viloet" class="bg-electric-violet d-block rounded-circle"></span></div>
						<div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-protage" class="bg-portage d-block rounded-circle"></span></div>
						<div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-tundora" class="bg-tundora d-block rounded-circle"></span></div>
					</div>
				</div>
				<!-- Transparent Layout Bg color Ends-->
				<hr>
				<!-- Sidebar BG Image Starts-->
				<h6 class="text-center text-bold-500 mb-3 text-uppercase sb-bg-img">Sidebar Bg Image</h6>
				<div class="cz-bg-image row sb-bg-img">
					<div class="col-sm-2 mb-3"><img src="{{ asset('app-assets/img/sidebar-bg/01.jpg') }}" width="90" class="rounded sb-bg-01"></div>
					<div class="col-sm-2 mb-3"><img src="{{ asset('app-assets/img/sidebar-bg/02.jpg') }}" width="90" class="rounded sb-bg-02"></div>
					<div class="col-sm-2 mb-3"><img src="{{ asset('app-assets/img/sidebar-bg/03.jpg') }}" width="90" class="rounded sb-bg-03"></div>
					<div class="col-sm-2 mb-3"><img src="{{ asset('app-assets/img/sidebar-bg/04.jpg') }}" width="90" class="rounded sb-bg-04"></div>
					<div class="col-sm-2 mb-3"><img src="{{ asset('app-assets/img/sidebar-bg/05.jpg') }}" width="90" class="rounded sb-bg-05"></div>
					<div class="col-sm-2 mb-3"><img src="{{ asset('app-assets/img/sidebar-bg/06.jpg') }}" width="90" class="rounded sb-bg-06"></div>
				</div>
				<!-- Transparent BG Image Ends-->
				<div class="tl-bg-img d-none">
					<h6 class="text-center text-bold-500 text-uppercase">Background Images</h6>
					<div class="cz-tl-bg-image row">
						<div class="col-sm-3"><img src="{{ asset('app-assets/img/gallery/bg-glass-1.jpg') }}" width="90" class="rounded bg-glass-1 selected"></div>
						<div class="col-sm-3"><img src="{{ asset('app-assets/img/gallery/bg-glass-2.jpg') }}" width="90" class="rounded bg-glass-2"></div>
						<div class="col-sm-3"><img src="{{ asset('app-assets/img/gallery/bg-glass-3.jpg') }}" width="90" class="rounded bg-glass-3"></div>
						<div class="col-sm-3"><img src="{{ asset('app-assets/img/gallery/bg-glass-4.jpg') }}" width="90" class="rounded bg-glass-4"></div>
					</div>
				</div>
				<!-- Transparent BG Image Ends    -->
				<hr>
				<!-- Sidebar BG Image Toggle Starts-->
				<div class="togglebutton toggle-sb-bg-img">
					<div class="switch">
						<span>Sidebar Bg Image</span>
						<div class="float-right">
							<div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
								<input id="sidebar-bg-img" type="checkbox" checked class="custom-control-input cz-bg-image-display">
								<label for="sidebar-bg-img" class="custom-control-label"></label>
							</div>
						</div>
					</div>
					<hr>
				</div>
				<!-- Sidebar BG Image Toggle Ends-->
				<!-- Compact Menu Starts-->
				<div class="togglebutton">
					<div class="switch">
						<span>Compact Menu</span>
						<div class="float-right">
							<div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
								<input id="cz-compact-menu" type="checkbox" class="custom-control-input cz-compact-menu">
								<label for="cz-compact-menu" class="custom-control-label"></label>
							</div>
						</div>
					</div>
				</div>
				<!-- Compact Menu Ends-->
				<hr>
				<!-- Sidebar Width Starts-->
				<div>
					<label for="cz-sidebar-width">Sidebar Width</label>
					<select id="cz-sidebar-width" class="custom-select cz-sidebar-width float-right">
						<option value="small">Small</option>
						<option value="medium" selected="">Medium</option>
						<option value="large">Large</option>
					</select>
				</div>
				<!-- Sidebar Width Ends-->
			</div>
		</div>
		<!-- Theme customizer Ends-->
		<!-- BEGIN VENDOR JS-->
		<script src="{{ asset('app-assets/vendors/js/core/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('app-assets/vendors/js/core/popper.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('app-assets/vendors/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('app-assets/vendors/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('app-assets/vendors/js/prism.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('app-assets/vendors/js/jquery.matchHeight-min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('app-assets/vendors/js/screenfull.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('app-assets/vendors/js/pace/pace.min.js') }}" type="text/javascript"></script>
		<!-- BEGIN VENDOR JS-->
		<!-- BEGIN PAGE VENDOR JS-->
		<script src="{{ asset('app-assets/vendors/js/chartist.min.js') }}" type="text/javascript"></script>
		<!-- END PAGE VENDOR JS-->
		<!-- BEGIN APEX JS-->
		<script src="{{ asset('app-assets/js/app-sidebar.js') }}" type="text/javascript"></script>
		<script src="{{ asset('app-assets/custom.js') }}" type="text/javascript"></script>
		{{-- <script src="{{ asset('app-assets/js/notification-sidebar.js') }}" type="text/javascript"></script>
		<script src="{{ asset('app-assets/js/customizer.js') }}" type="text/javascript"></script> --}}
		<!-- END APEX JS-->
		<!-- BEGIN PAGE LEVEL JS-->
		<script>
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
		</script>
		@yield('js')
		<!-- END PAGE LEVEL JS-->
	</body>
	<!-- END : Body-->
</html>

