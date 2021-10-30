@extends('web')
@section('title', 'Home')

@section('css')
@endsection

@section('page')
<section class="home-five bg-img5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="home5_slider">
					<div class="item">
						<div class="home-text">
							<h2>We Can T<span class="text-thm">each You!</span></h2>
							<p>Technology is brining a massive wave of evolution on learning things on different ways.</p>
							<a class="btn home_btn" href="#">Join In Free</a>
						</div>
					</div>
					<div class="item">
						<div class="home-text">
							<h2>We Can T<span class="text-thm">each You!</span></h2>
							<p>Technology is brining a massive wave of evolution on learning things on different ways.</p>
							<a class="btn home_btn" href="#">Join In Free</a>
						</div>
					</div>
					<div class="item">
						<div class="home-text">
							<h2>We Can T<span class="text-thm">each You!</span></h2>
							<p>Technology is brining a massive wave of evolution on learning things on different ways.</p>
							<a class="btn home_btn" href="#">Join In Free</a>
						</div>
					</div>
					<div class="item">
						<div class="home-text">
							<h2>We Can T<span class="text-thm">each You!</span></h2>
							<p>Technology is brining a massive wave of evolution on learning things on different ways.</p>
							<a class="btn home_btn" href="#">Join In Free</a>
						</div>
					</div>
					<div class="item">
						<div class="home-text">
							<h2>We Can T<span class="text-thm">each You!</span></h2>
							<p>Technology is brining a massive wave of evolution on learning things on different ways.</p>
							<a class="btn home_btn" href="#">Join In Free</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- School Category Courses -->
<section id="our-courses" class="our-courses">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="main-title text-center">
					<h3 class="mt0">Via School Categories Courses</h3>
					<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				</div>
			</div>
		</div>
		<div class="row">
			@if ($categories)
				@foreach ($categories as $category)
					<div class="col-sm-6 col-lg-3">
						<div class="img_hvr_box" style="background-image: url({{ asset($category->icon) }});">
							<div class="overlay">
								<div class="details">
									<h5>{{ $category->name }}</h5>
									<p>&nbsp;</p>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			@endif
			
			<div class="col-lg-6 offset-lg-3">
				<div class="courses_all_btn text-center">
					<a class="btn btn-transparent" href="#">View All Courses</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Divider -->
<section class="divider_home1 parallax bg-img2" data-stellar-background-ratio="0.3">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="divider-one">
					<p class="color-white">STARTING ONLINE LEARNING</p>
					<h1 class="color-white text-uppercase">Enhance your skIlls wIth best OnlIne courses</h1>
					<a class="btn btn-transparent divider-btn" href="#">Get Started Now</a>						
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Top Courses -->
<section id="top-courses" class="top-courses pb30">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="main-title text-center">
					<h3 class="mt0">Browse Our Top Courses</h3>
					<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div id="options" class="alpha-pag full">
					<div class="option-isotop">
						<ul id="filter" class="option-set" data-option-key="filter">
							<li class="list-inline-item"><a href="#all" data-option-value="*" class="selected">All</a></li>
							@if ($categories)
								@foreach ($categories as $category)
							<li class="list-inline-item"><a href="#cat__{{ $category->id }}" data-option-value=".cat__{{ $category->id }}">{{ $category->name }}</a></li>
								@endforeach
							@endif
						</ul>
					</div>
				</div>
				<!-- FILTER BUTTONS -->
				<div class="emply-text-sec">
					<div class="row" id="masonry_abc">
						@if ($courses)
							@foreach ($courses as $course)
								<div class="col-md-6 col-lg-4 col-xl-3 cat__{{ $course->category }}">
									<div class="top_courses">
										<div class="thumb">
											<img class="img-whp" src="{{ asset($course->cover_img) }}" alt="t1.jpg">
											<div class="overlay">
												<div class="tag">Best Seller</div>
												<div class="icon"><span class="flaticon-like"></span></div>
												<a class="tc_preview_course" href="{{ route('web.detail', ['slug'=>$course->slug]) }}">Preview Course</a>
											</div>
										</div>
										<div class="details">
											<div class="tc_content">
												<h5>{{ $course->title }}</h5>
												<ul class="tc_review">
													<li class="list-inline-item"><a href="{{ route('web.detail', ['slug'=>$course->slug]) }}"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="{{ route('web.detail', ['slug'=>$course->slug]) }}"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="{{ route('web.detail', ['slug'=>$course->slug]) }}"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="{{ route('web.detail', ['slug'=>$course->slug]) }}"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="{{ route('web.detail', ['slug'=>$course->slug]) }}"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="{{ route('web.detail', ['slug'=>$course->slug]) }}">(6)</a></li>
												</ul>
											</div>
											<div class="tc_footer">
												<ul class="tc_meta float-left">
													<li class="list-inline-item"><a href="{{ route('web.detail', ['slug'=>$course->slug]) }}"><i class="flaticon-profile"></i></a></li>
													<li class="list-inline-item"><a href="{{ route('web.detail', ['slug'=>$course->slug]) }}">1548</a></li>
													<li class="list-inline-item"><a href="{{ route('web.detail', ['slug'=>$course->slug]) }}"><i class="flaticon-comment"></i></a></li>
													<li class="list-inline-item"><a href="{{ route('web.detail', ['slug'=>$course->slug]) }}">25</a></li>
												</ul>
												<div class="tc_price float-right">₹ {{ $course->price }}</div>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Our Testimonials -->
<section id="our-testimonials" class="our-testimonials">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="main-title text-center">
					<h3 class="mt0">What People Say</h3>
					<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="testimonialsec">
					<ul class="tes-nav">
						<li>
							<img class="img-fluid" src="{{ asset('assets/images') }}\testimonial\1.jpg" alt="1.jpg">
						</li>
						<li>
							<img class="img-fluid" src="{{ asset('assets/images') }}\testimonial\2.jpg" alt="2.jpg">
						</li>
						<li>
							<img class="img-fluid" src="{{ asset('assets/images') }}\testimonial\3.jpg" alt="3.jpg">
						</li>
						<li>
							<img class="img-fluid" src="{{ asset('assets/images') }}\testimonial\4.jpg" alt="4.jpg">
						</li>
					</ul>
					<ul class="tes-for">
						<li>
							<div class="testimonial_item">
								<div class="details">
									<h5>Ali Tufan</h5>
									<span class="small text-thm">Client</span>
									<p>Customization is very easy with this theme. Clean and quality design and full support for any kind of request! Great theme!</p>
								</div>
							</div>
						</li>
						<li>
							<div class="testimonial_item">
								<div class="details">
									<h5>Ali Tufan</h5>
									<span class="small text-thm">Client</span>
									<p>Customization is very easy with this theme. Clean and quality design and full support for any kind of request! Great theme!</p>
								</div>
							</div>
						</li>
						<li>
							<div class="testimonial_item">
								<div class="details">
									<h5>Ali Tufan</h5>
									<span class="small text-thm">Client</span>
									<p>Customization is very easy with this theme. Clean and quality design and full support for any kind of request! Great theme!</p>
								</div>
							</div>
						</li>
						<li>
							<div class="testimonial_item">
								<div class="details">
									<h5>Ali Tufan</h5>
									<span class="small text-thm">Client</span>
									<p>Customization is very easy with this theme. Clean and quality design and full support for any kind of request! Great theme!</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Our Blog -->
<section class="our-blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="main-title text-center">
					<h3 class="mt0">Latest News And Events</h3>
					<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-xl-6">
				<div class="blog_slider_home1">
					<div class="item">
						<div class="blog_post one">
							<div class="thumb">
								<div class="post_title">Events</div>
								<img class="img-fluid w100" src="{{ asset('assets/images') }}\blog\1.jpg" alt="1.jpg">
								<a class="post_date" href="#"><span>28 <br> March</span></a>
							</div>
							<div class="details">
								<div class="post_meta">
									<ul>
										<li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
										<li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
									</ul>
								</div>
								<h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="blog_post one">
							<div class="thumb">
								<div class="post_title">Events</div>
								<img class="img-fluid w100" src="{{ asset('assets/images') }}\blog\1a.jpg" alt="1a.jpg">
								<a class="post_date" href="#"><span>28 <br> March</span></a>
							</div>
							<div class="details">
								<div class="post_meta">
									<ul>
										<li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
										<li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
									</ul>
								</div>
								<h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="blog_post one">
							<div class="thumb">
								<div class="post_title">Events</div>
								<img class="img-fluid w100" src="{{ asset('assets/images') }}\blog\1b.jpg" alt="1b.jpg">
								<a class="post_date" href="#"><span>28 <br> March</span></a>
							</div>
							<div class="details">
								<div class="post_meta">
									<ul>
										<li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
										<li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
									</ul>
								</div>
								<h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 col-xl-3">
				<div class="blog_post">
					<div class="thumb">
						<img class="img-fluid w100" src="{{ asset('assets/images') }}\blog\2.jpg" alt="2.jpg">
						<a class="post_date" href="#">July 21, 2019</a>
					</div>
					<div class="details">
						<h5>Marketing</h5>
						<h4>A Solution Built for Teachers</h4>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 col-xl-3">
				<div class="blog_post">
					<div class="thumb">
						<img class="img-fluid w100" src="{{ asset('assets/images') }}\blog\3.jpg" alt="3.jpg">
						<a class="post_date" href="#">July 21, 2019</a>
					</div>
					<div class="details">
						<h5>Tips</h5>
						<h4>An Overworked Newspaper Editor</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt30">
			<div class="col-lg-12">
				<div class="read_more_home text-center">
					<h4>Like what you see? <a href="#">See more posts<span class="flaticon-right-arrow pl10"></span></a></h4>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Popular Job Categories -->
<section class="home1-divider2 parallax" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-lg-7">
				<div class="app_grid">
					<h1 class="mt0">Download & Enjoy</h1>
					<p>Access your courses anywhere,<br> anytime & prepare with practice tests.</p>
					<button class="apple_btn btn-transparent">
					<span class="icon">
					<span class="flaticon-apple"></span>
					</span>
					<span class="title">App Store</span>
					<span class="subtitle">Available now on the</span>
					</button>
					<button class="play_store_btn btn-transparent">
					<span class="icon">
					<span class="flaticon-google-play"></span>
					</span>
					<span class="title">Google Play</span>
					<span class="subtitle">Get in on</span>
					</button>
				</div>
			</div>
			<div class="col-md-5 col-lg-5">
				<div class="phone_img">
					<img class="img-fluid" src="{{ asset('assets/images') }}\resource\phone_home.png" alt="phone_home.png">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Our Partners -->
<section id="our-partners" class="our-partners">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="main-title text-center">
					<h3 class="mt0">Need To Train Your Team?</h3>
					<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg">
				<div class="our_partner">
					<img class="img-fluid" src="{{ asset('assets/images') }}\partners\1.png" alt="1.png">
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg">
				<div class="our_partner">
					<img class="img-fluid" src="{{ asset('assets/images') }}\partners\2.png" alt="2.png">
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg">
				<div class="our_partner">
					<img class="img-fluid" src="{{ asset('assets/images') }}\partners\3.png" alt="3.png">
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg">
				<div class="our_partner">
					<img class="img-fluid" src="{{ asset('assets/images') }}\partners\4.png" alt="4.png">
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg">
				<div class="our_partner">
					<img class="img-fluid" src="{{ asset('assets/images') }}\partners\5.png" alt="5.png">
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('js')
@endsection