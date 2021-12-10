
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/instructor/img/apple-icon.png') }}">
		<link rel="icon" type="image/png" href="{{ asset('assets/instructor/img/favicon.png') }}">
		<title>@yield('title') | Learn to Earn</title>
		<!--     Fonts and icons     -->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
		<!-- Nucleo Icons -->
		<link href="{{ asset('assets/instructor/css/nucleo-icons.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/instructor/css/nucleo-svg.css') }}" rel="stylesheet" />
		<!-- Font Awesome Icons -->
		<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
		<!-- Material Icons -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
		<!-- CSS Files -->
		<link id="pagestyle" href="{{ asset('assets/instructor/css/material-dashboard.css?v=3.0.0') }}" rel="stylesheet" />
        @yield('css')
        <style>
            .fs-25{
                font-size: 25px;
            }
            .max-height-3rem{
                max-height: 3rem !important;
            }
            .sidenav .navbar-brand {
                padding: 0.7rem 1.5rem;
            }
            .sidenav-header{
                background: #f0f2f5;
            }
        </style>
	</head>
	<body class="g-sidenav-show  bg-gray-200">
		<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
			<div class="sidenav-header">
				<i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
				<a class="navbar-brand m-0" href="">
				<img src="{{ asset('assets/logo.png') }}" class="navbar-brand-img h-100 max-height-3rem" alt="main_logo">
				<span class="ms-1 font-weight-bold fs-25">Learn to Earn</span>
				</a>
			</div>
			<hr class="horizontal light mt-0 mb-2">
			<div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-white {{ request()->url() == route('user.account')?' active bg-gradient-primary':'' }}" href="{{ route('user.account') }}">
							<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
								<i class="material-icons opacity-10">space_dashboard</i>
							</div>
							<span class="nav-link-text ms-1">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white {{ request()->url() == route('user.account.course')?' active bg-gradient-primary':'' }}" href="{{ route('user.account.course') }}">
							<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
								<i class="material-icons opacity-10">menu_book</i>
							</div>
							<span class="nav-link-text ms-1">My Courses</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white {{ request()->url() == route('user.account.transaction')?' active bg-gradient-primary':'' }}" href="{{ route('user.account.transaction') }}">
							<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
								<i class="material-icons opacity-10">payments</i>
							</div>
							<span class="nav-link-text ms-1">Transactions</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white {{ request()->url() == route('user.account.message')?' active bg-gradient-primary':'' }}" href="{{ route('user.account.message') }}">
							<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
								<i class="material-icons opacity-10">question_answer</i>
							</div>
							<span class="nav-link-text ms-1">Messages</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white {{ request()->url() == route('user.account.materials')?' active bg-gradient-primary':'' }}" href="{{ route('user.account.materials') }}">
							<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
								<i class="material-icons opacity-10">assignment</i>
							</div>
							<span class="nav-link-text ms-1">Course Materials</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white {{ request()->url() == route('user.account.certificates')?' active bg-gradient-primary':'' }}" href="{{ route('user.account.certificates') }}">
							<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
								<i class="material-icons opacity-10">card_membership</i>
							</div>
							<span class="nav-link-text ms-1">Certificates</span>
						</a>
					</li>
					<li class="nav-item mt-3">
						<h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white {{ request()->url() == route('user.account.setting')?' active bg-gradient-primary':'' }}" href="{{ route('user.account.setting') }}">
							<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
								<i class="material-icons opacity-10">settings</i>
							</div>
							<span class="nav-link-text ms-1">Settings</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white " href="{{ route('user.account.certificates') }}">
							<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
								<i class="material-icons opacity-10">logout</i>
							</div>
							<span class="nav-link-text ms-1">Logout</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="sidenav-footer position-absolute w-100 bottom-0 ">
				<div class="mx-3">
					<a class="btn bg-gradient-primary mt-4 w-100" href="{{ route('web.home') }}" type="button">Back to Website</a>
				</div>
			</div>
		</aside>
		<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
			<!-- Navbar -->
			<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
				<div class="container-fluid py-1 px-3">
					<nav aria-label="breadcrumb">
						<h6 class="font-weight-bolder mb-0">@yield('title')</h6>
					</nav>
					<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
						<div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
						<ul class="navbar-nav  justify-content-end">
							<li class="nav-item d-flex align-items-center">
								<a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
								<i class="fa fa-share me-sm-1"></i>
								<span class="d-sm-inline d-none">Logout</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- End Navbar -->
			<div class="container-fluid py-4">
                {{-- alert --}}
                <div class="alert alert-success alert-dismissible fade show mb-5 text-white" role="alert">
                    <strong>Welcome {{ auth()->user()->name }}</strong> to your account.
                </div>
                @yield('page')
			</div>
		</main>

		<!--   Core JS Files   -->
        {{-- Jquery cdn --}}
        <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="{{ asset('assets/instructor/js/core/popper.min.js') }}"></script>
		<script src="{{ asset('assets/instructor/js/core/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/instructor/js/plugins/perfect-scrollbar.min.js') }}"></script>
		<script src="{{ asset('assets/instructor/js/plugins/smooth-scrollbar.min.js') }}"></script>
		<script src="{{ asset('assets/instructor/js/plugins/chartjs.min.js') }}"></script>
        @yield('js')
		<script>
			var win = navigator.platform.indexOf('Win') > -1;
			if (win && document.querySelector('#sidenav-scrollbar')) {
			  var options = {
			    damping: '0.5'
			  }
			  Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
			}
		</script>
		<!-- Github buttons -->
		<script async defer src="https://buttons.github.io/buttons.js"></script>
		<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
		<script src="{{ asset('assets/instructor/js/material-dashboard.min.js?v=3.0.0') }}"></script>
	</body>
</html>

