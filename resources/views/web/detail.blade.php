
@extends('web')
@section('title', $course->title)

@section('css')
<style>
	#myImg {
		border-radius: 5px;
		cursor: pointer;
		transition: 0.3s;
	}

	#myImg:hover {opacity: 0.7;}

	/* The Modal (background) */
	.modalX {
		display: none; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index: 10000; /* Sit on top */
		padding-top: 100px; /* Location of the box */
		left: 0;
		top: 0;
		width: 100%; /* Full width */
		height: 100%; /* Full height */
		overflow: auto; /* Enable scroll if needed */
		background-color: rgb(0,0,0); /* Fallback color */
		background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
	}

	/* Modal Content (Image) */
	.modal-contentX {
		margin: auto;
		display: block;
		width: 80%;
		max-width: 800px;
	}
	@keyframes zoom {
		from {transform:scale(0)}
		to {transform:scale(1)}
	}

	/* The Close Button */
	.closeX {
		position: absolute;
		top: 15px;
		right: 35px;
		color: #f1f1f1;
		font-size: 40px;
		font-weight: bold;
		transition: 0.3s;
	}

	.closeX:hover,
	.closeX:focus {
		color: #bbb;
		text-decoration: none;
		cursor: pointer;
	}

	/* 100% Image Width on Smaller Screens */
	@media only screen and (max-width: 700px){
		.modal-contentX {
			width: 100%;
		}
	}
	.cs_rwo_tabs.csv2 .nav-tabs .my-nav-link {
		font-size: 15px;
	}
	.cs_rwo_tabs.csv2 .nav-tabs .nav-link {
		border: 1px solid transparent;
		font-size: 18px;
		font-family: "Nunito";
		color: #0a0a0a;
		height: 64px;
		line-height: 2.5;
		text-align: center;
		width: 165px;
	}
	.p-nav-item.active > .p-nav-link {
        background-color: #130d4c;
        box-shadow: 0 1px 4px 0 rgba(0,0,0,.12);
        border-radius: 5px;
        position: relative;
        text-align: center;
        color: white;
    }
	.p-nav-tabs .p-nav-link {
		border: 1px solid transparent;
		border-top-left-radius: .25rem;
		border-top-right-radius: .25rem;
		text-align: center;
	}
	.p-nav-tabs .p-nav-item {
		margin-bottom: -1px;
	}
	.shop_single_tab_content .p-nav-tabs, .cs_rwo_tabs.csv2 .p-nav-tabs {
		border-bottom: none;
	}
	.myTab {
		position: sticky;
		top: 99px;
		padding: 10px 0px;
		z-index: 5;
        position: sticky;
        background: #fff;
        box-shadow: 0 1px 4px 0 rgba(0,0,0,.12);
        border-radius: 5px;
	}
	.p-nav-tabs {
		border-bottom: 1px solid #dee2e6;
	}
	.p-nav {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
		padding-left: 0;
		margin-bottom: 0;
		list-style: none;
	}
    .h-w-42px {
        height: 48px;
        width: 48px;
    }

    /* Hide in mobile */
    @media (max-width: 1100px) {
        .myTab {
            position: relative;
        }
    }
    .inner_page_breadcrumb::before {
        background-image: -moz-linear-gradient( 135deg, #130d4c 0%, rgb(147, 147, 147) 100%);
        background-image: -webkit-linear-gradient( 135deg, #130d4c 0%, rgb(147, 147, 147) 100%);
        background-image: -ms-linear-gradient( 135deg, #130d4c 0%, rgb(147, 147, 147) 100%);
    }
    .cs_row_one .cs_review_seller li:first-child a {
        background-color: #17a2b8;
    }
	s, strike{text-decoration:none;position:relative;}
	s::before, strike::before {
		top: 50%; /*tweak this to adjust the vertical position if it's off a bit due to your font family */
		background:red; /*this is the color of the line*/
		opacity:.7;
		content: '';
		width: 110%;
		position: absolute;
		height:.1em;
		border-radius:.1em;
		left: -5%;
		white-space:nowrap;
		display: block;
		transform: rotate(-15deg);
	}
	s::after, strike::after {
		top: 50%; /*tweak this to adjust the vertical position if it's off a bit due to your font family */
		background:red; /*this is the color of the line*/
		opacity:.7;
		content: '';
		width: 110%;
		position: absolute;
		height:.1em;
		border-radius:.1em;
		left: -5%;
		white-space:nowrap;
		display: block;
		transform: rotate(15deg);
	}
	s.straight::before, strike.straight::before{transform: rotate(0deg);left:-1%;width:102%;}
	.pOffer{
		transition: 1s ease-in-out;
	}
</style>
@endsection

@section('page')

<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb csv2">
	<div class="container">
		<div class="row">
			<div class="col-xl-9">
				<div class="breadcrumb_content">
					<div class="cs_row_one csv2">
						<div class="cs_ins_container">
							<div class="cs_instructor">
								<ul class="cs_instrct_list float-left mb0">
									{{-- <li class="list-inline-item"><a class="color-white" href="#">Last updated {{ date('m/Y', strtotime($course->updated_at)) }}</a></li> --}}
								</ul>
								<ul class="cs_watch_list float-right mb0">
									<li class="list-inline-item"><a class="color-white" href="#"><span class="flaticon-like"></span></a></li>
									<li class="list-inline-item"><a class="color-white" href="#">Add to Wishlist</a></li>
									<li class="list-inline-item"><a class="color-white" href="#"><span class="flaticon-share"> Share</span></a></li>
								</ul>
							</div>
							<h3 class="cs_title color-white">{{ ucfirst($course->title) }}</h3>
                            <ul class="cs_instrct_list float-left mb0 mr-3">
                                <li class="list-inline-item"><a class="color-white" href="#">Last updated {{ date('m/Y', strtotime($course->updated_at)) }}</a></li>
                            </ul>
							<ul class="cs_review_seller">
								<li class="list-inline-item"><a class="color-white" href="#"><span>Best Seller</span></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
								<li class="list-inline-item"><a class="color-white" href="#">4.5 (11,382 Ratings)</a></li>
							</ul>
							<ul class="cs_review_enroll">
								<li class="list-inline-item"><a class="color-white" href="#"><span class="flaticon-profile"></span> 57,869 students enrolled</a></li>
								<li class="list-inline-item"><a class="color-white" href="#"><span class="flaticon-comment"></span> 25 Review</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Our Team Members -->
<section class="course-single2 pb40">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8 col-xl-9">
				<div class="row">
					<div class="col-lg-12">
						<div class="courses_single_container">
							<div class="cs_row_two csv2">
								<div class="cs_overview pxPatco">
									<h4 class="title">Overview</h4>
									<h4 class="subtitle">Course Description</h4>
									<div class="description-p-mb20">
										{{ $course->description }}
									</div>
									<h4 class="subtitle">Requirements</h4>
									<ul class="list_requiremetn">
										@if ($course->requirement)
											@php
												$requirements = explode(PHP_EOL, $course->requirement);
											@endphp
											@foreach ($requirements as $requirement)
												<li>
													<i class="fa fa-check"></i>
													<p>{{ $requirement}}</p>
												</li>
											@endforeach
										@endif
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-xl-3">
				<div class="instructor_pricing_widget csv2" style="margin-top: -350px;">
                @if (strtolower($course->category->name) == 'master program')
                    <h4 class="title">Course Included</h4>
                    <hr>
                    <ul class="price_quere_list text-left">
                        @if ($course->courseModule)
                        @foreach ($course->courseModule as $module)
                        <li class="mb-2 font-bold" style="font-weight: bold"><span class="flaticon-right-arrow" style="color: navy"></span> {{ $module->title }}</li>
                            @endforeach
                        @endif
                    </ul>
                </div>
				<div class="instructor_pricing_widget csv2 mt-0">
                @endif
                    <div class="price"><span>Price</span> ₹ {{ $course->price }}</div>
                    @if (isset(Auth::user()->id) && Auth::user()->id > 0)
                        <a href="{{ route('web.purchase', ['slug'=>$course->slug]) }}" class="cart_btnss_white buyLink">Buy Now</a>
                    @else
                        <a href="javascript:;" class="cart_btnss_white" data-toggle="modal" data-target="#exampleModalCenter">Buy Now</a>
                    @endif

                    <h5 class="subtitle text-left">Includes</h5>
                    <ul class="price_quere_list text-left">
                        <li><a href="#"><span class="flaticon-play-button-1"></span> Live on-demand video</a></li>
                        <li><a href="#"><span class="flaticon-download"></span> Downloadable resources</a></li>
                        <li><a href="#"><span class="flaticon-user"></span> One on One Mentor</a></li>
                        <li><a href="#"><span class="flaticon-responsive"></span> Interview Preparation</a></li>
                        <li><a href="#"><span class="flaticon-flash"></span> Assignments</a></li>
                        <li><a href="#"><span class="flaticon-award"></span> Certificate of Completion</a></li>
                    </ul>
				</div>
				<div class="feature_course_widget csv1">
					<ul class="list-group">
						<h4 class="title">Course Features</h4>
						@if ($course->features)
							@php
								$features = explode(PHP_EOL, $course->features);
							@endphp
							@foreach ($features as $feature)
							@php
								$feature = explode('@', $feature);
							@endphp
								<li class="d-flex justify-content-between align-items-center">
									{{ $feature[0] }} <span class="float-right">{{ $feature[1] }}</span>
								</li>
							@endforeach
						@endif
					</ul>

				</div>
			</div>

			<div class="col-md-12 col-lg-12 col-xl-12">
				<div class="row">
					<div class="col-lg-12">
						<div class="courses_single_container">
							<div class="cs_rwo_tabs csv2">
								<ul class="p-nav p-nav-tabs myTab" id="mysTab">
									<li class="p-nav-item">
										<a class="p-nav-link my-nav-link" id="Eligibility-tab" href="#Eligibility">Eligibility</a>
									</li>
									<li class="p-nav-item">
										<a class="p-nav-link my-nav-link" id="learn-tab" href="#learn">What 'll Learn</a>
									</li>
									<li class="p-nav-item">
										<a class="p-nav-link my-nav-link" id="Benefits-tab" href="#Benefits">Benefits</a>
									</li>
									<li class="p-nav-item">
										<a class="p-nav-link my-nav-link" id="Modules-tab" href="#Modules">Modules</a>
									</li>
									<li class="p-nav-item">
										<a class="p-nav-link my-nav-link" id="Fees-tab" href="#Fees">Fees</a>
									</li>
									<li class="p-nav-item">
										<a class="p-nav-link my-nav-link" id="Certification-tab" href="#Certification">Certification</a>
									</li>
									<li class="p-nav-item">
										<a class="p-nav-link my-nav-link" id="Career-tab" href="#Career">Career Services </a>
									</li>
									<li class="p-nav-item">
										<a class="p-nav-link my-nav-link" id="Reviews-tab" href="#Reviews">Reviews</a>
									</li>
									<li class="p-nav-item">
										<a class="p-nav-link my-nav-link" id="FAQ-tab" href="#FAQ">FAQ’S</a>
									</li>
									<li class="">
										@if (isset(Auth::user()->id) && Auth::user()->id > 0)
											<a href="{{ route('web.purchase', ['slug'=>$course->slug]) }}" class="btn btn-info enrollBtn buyLink">Enroll Now</a>
										@else
											<a href="javascript:;" class="btn btn-info enrollBtn buyLink" data-toggle="modal" data-target="#exampleModalCenter">Enroll Now</a>
										@endif
									</li>
								</ul>
								<div class="" id="myTabContent">
									<div class="scrollspy" id="Eligibility" aria-labelledby="Eligibility-tab">
										<div class="cs_row_two csv2">
											<div class="cs_overview">
												<h4 class="title">Eligibility</h4>
												<ul class="cs_course_syslebus">
													<h4 class="subtitle">Who can apply for the course?</h4>
													@if ($course->courseEligibility)
														@foreach ($course->courseEligibility as $eligibility)
															<li>
																<i class="fa fa-check"></i>
																<p>{{ $eligibility->text }}</p>
															</li>
														@endforeach
													@endif
												</ul>
											</div>
										</div>
									</div>
									<div class="scrollspy" id="learn" aria-labelledby="learn-tab">
										<div class="cs_row_two csv2">
											<div class="cs_overview">
												<h4 class="subtitle">What you'll learn</h4>
												<ul class="cs_course_syslebus">
													@if ($course->courseLearn)
														@foreach ($course->courseLearn as $learn)
															<li>
																<i class="fa fa-check"></i>
																<p>{{ $learn->text }}</p>
															</li>
														@endforeach
													@endif
												</ul>
											</div>
										</div>
									</div>
									<div class="scrollspy" id="Benefits" aria-labelledby="Benefits-tab">
										<div class="cs_row_five csv2">
											<div class="student_feedback_container">
												<h4 class="aii_title">Benefits</h4>
												<div class="s_feeback_content">
													<h4 class="subtitle">Key Features</h4>
													<div class="row">
														@if ($course->courseBenifits)
                                                        @foreach ($course->courseBenifits as $benifit)
														@if ($benifit->type == 'feature')
															<div class="col-md-4 mb-3">
																<img src="{{ asset($benifit->icon_img) }}" alt="Image" class="mr-3 h-w-42px">
																{{ $benifit->text }}
															</div>
														@endif
														@endforeach
														@endif
													</div>
												</div>
												<div class="s_feeback_content mt-3">
													<h4 class="subtitle mb-3">Course Benefits</h4>
													<div class="row">
														@if ($course->courseBenifits)
                                                        @foreach ($course->courseBenifits as $benifit)
														@if ($benifit->type == 'benifit')
															<div class="col-md-4 mb-3">
																<img src="{{ asset($benifit->icon_img) }}" alt="Image" class="mr-3 h-w-42px">
																{{ $benifit->text }}
															</div>
														@endif
														@endforeach
														@endif
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="scrollspy" id="Modules" aria-labelledby="Modules-tab">
										<div class="cs_row_five csv2">
											<div class="student_feedback_container">
												<h4 class="aii_title">Curriculum</h4>
												<div class="s_feeback_content">
													<div class="row">
														<div class="col-md-8">
															<div id="accordion">
															@if ($course->courseModule)
																@foreach ($course->courseModule as $module)
																<div class="card">
																	<div class="card-header" id="headingOne">
																		<h5 class="mb-0">
																			<button class="btn btn-link accMenu collapsed" data-toggle="collapse" data-target="#collapse{{ $module->id }}" aria-expanded="false" aria-controls="collapse{{ $module->id }}">
																			{{ $module->title }} <span class="arrow"><i class="fa fa-arrow-down"></i></span>
																			</button>
																		</h5>
																	</div>
																	<div id="collapse{{ $module->id }}" class="collapse" aria-labelledby="heading{{ $module->id }}" data-parent="#accordion">
																		<div class="card-body">
																			{!! $module->description !!}
																		</div>
																	</div>
																</div>
																@endforeach
															@endif
															</div>
														</div>
														<div class="col-md-4">
															<div class="master-counselling-form-wrapper sticky-position">
															<div class="master-counselling-form-header">
															<p class="master-counselling-form-heading">Free Career Counselling</p>
															<p class="master-counselling-form-text">We are happy to help you 24/7</p>
															</div>
															<div class="master-counselling-form-body">
                                                                <form class="form-default" action="https://forms.zohopublic.com/intellipaat/form/PGLeadcapture/formperma/CIKQ4ndD5TNL_VQzXfDCuz4TNOLbGySX1o2T6_FqBC0/htmlRecords/submit" name="form" id="mscontactusfm" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                                                                    <input type="hidden" name="zf_referrer_name" value="">
                                                                    <input type="hidden" name="zc_gad" value="undefined">
                                                                    <input type="hidden" name="utm_source" value="intellipaat.com">
                                                                    <input type="hidden" name="utm_medium" value="referral">
                                                                    <input type="hidden" name="utm_campaign" value="">
                                                                    <input type="hidden" name="utm_term" value="">
                                                                    <input type="hidden" name="utm_content" value="">
                                                                    <input type="hidden" name="gclid" value="undefined">
                                                                    <div class="form-group">
                                                                        <input class="form-control" id="msctus_fname" placeholder="Full Name*" type="text" name="SingleLine" value="" fieldtype="1" maxlength="255" required="">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input class="form-control" placeholder="Email*" type="email" maxlength="255" name="Email" id="msctus_email1" value="" fieldtype="9" required="">
                                                                    </div>
                                                                    <div class="form-row m-0">
                                                                        <div class="form-group select-country-wrap pr-0" style="margin-right: -1px;">
                                                                            <select class="form-control rounded-0 ip-vk-select-cty-pass" placeholder="" compname="PhoneNumber_countrycodeval" name="PhoneNumber_countrycodeval" phoneformat="1" maxlength="10" id="msctus_country" required="">
                                                                                <option value="+91">+91&nbsp;&nbsp;IN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;INDIA</option>
                                                                                <option value="+44">+44&nbsp;&nbsp;UK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;UNITED KINGDOM</option>
                                                                                <option value="+1">+1&nbsp;&nbsp;US&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;UNITED STATES</option>
                                                                                <option value="+1">+1&nbsp;&nbsp;CA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CANADA</option>
                                                                                <option value="------">------&nbsp;&nbsp;--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;------------------------</option>
                                                                                <option value="+376">+376&nbsp;&nbsp;AD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ANDORRA</option>
                                                                                <option value="+971">+971&nbsp;&nbsp;AE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;UNITED ARAB EMIRATES</option>
                                                                                <option value="+93">+93&nbsp;&nbsp;AF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;AFGHANISTAN</option>
                                                                                <option value="+1268">+1268&nbsp;&nbsp;AG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ANTIGUA AND BARBUDA</option>
                                                                                <option value="+1264">+1264&nbsp;&nbsp;AI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ANGUILLA</option>
                                                                                <option value="+355">+355&nbsp;&nbsp;AL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ALBANIA</option>
                                                                                <option value="+374">+374&nbsp;&nbsp;AM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ARMENIA</option>
                                                                                <option value="+599">+599&nbsp;&nbsp;AN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NETHERLANDS ANTILLES</option>
                                                                                <option value="+244">+244&nbsp;&nbsp;AO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ANGOLA</option>
                                                                                <option value="+672">+672&nbsp;&nbsp;AQ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ANTARCTICA</option>
                                                                                <option value="+54">+54&nbsp;&nbsp;AR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ARGENTINA</option>
                                                                                <option value="+1684">+1684&nbsp;&nbsp;AS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;AMERICAN SAMOA</option>
                                                                                <option value="+43">+43&nbsp;&nbsp;AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;AUSTRIA</option>
                                                                                <option value="+61">+61&nbsp;&nbsp;AU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;AUSTRALIA</option>
                                                                                <option value="+297">+297&nbsp;&nbsp;AW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ARUBA</option>
                                                                                <option value="+994">+994&nbsp;&nbsp;AZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;AZERBAIJAN</option>
                                                                                <option value="+387">+387&nbsp;&nbsp;BA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BOSNIA AND HERZEGOVINA</option>
                                                                                <option value="+1246">+1246&nbsp;&nbsp;BB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BARBADOS</option>
                                                                                <option value="+880">+880&nbsp;&nbsp;BD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BANGLADESH</option>
                                                                                <option value="+32">+32&nbsp;&nbsp;BE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BELGIUM</option>
                                                                                <option value="+226">+226&nbsp;&nbsp;BF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BURKINA FASO</option>
                                                                                <option value="+359">+359&nbsp;&nbsp;BG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BULGARIA</option>
                                                                                <option value="+973">+973&nbsp;&nbsp;BH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BAHRAIN</option>
                                                                                <option value="+257">+257&nbsp;&nbsp;BI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BURUNDI</option>
                                                                                <option value="+229">+229&nbsp;&nbsp;BJ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BENIN</option>
                                                                                <option value="+590">+590&nbsp;&nbsp;BL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT BARTHELEMY</option>
                                                                                <option value="+1441">+1441&nbsp;&nbsp;BM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BERMUDA</option>
                                                                                <option value="+673">+673&nbsp;&nbsp;BN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BRUNEI DARUSSALAM</option>
                                                                                <option value="+591">+591&nbsp;&nbsp;BO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BOLIVIA</option>
                                                                                <option value="+55">+55&nbsp;&nbsp;BR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BRAZIL</option>
                                                                                <option value="+1242">+1242&nbsp;&nbsp;BS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BAHAMAS</option>
                                                                                <option value="+975">+975&nbsp;&nbsp;BT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BHUTAN</option>
                                                                                <option value="+267">+267&nbsp;&nbsp;BW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BOTSWANA</option>
                                                                                <option value="+375">+375&nbsp;&nbsp;BY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BELARUS</option>
                                                                                <option value="+501">+501&nbsp;&nbsp;BZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BELIZE</option>
                                                                                <option value="+61">+61&nbsp;&nbsp;CC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;COCOS (KEELING ISLANDS</option>
                                                                                <option value="+243">+243&nbsp;&nbsp;CD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>
                                                                                <option value="+236">+236&nbsp;&nbsp;CF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CENTRAL AFRICAN REPUBLIC</option>
                                                                                <option value="+242">+242&nbsp;&nbsp;CG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CONGO</option>
                                                                                <option value="+41">+41&nbsp;&nbsp;CH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SWITZERLAND</option>
                                                                                <option value="+225">+225&nbsp;&nbsp;CI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;COTE D IVOIRE</option>
                                                                                <option value="+682">+682&nbsp;&nbsp;CK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;COOK ISLANDS</option>
                                                                                <option value="+56">+56&nbsp;&nbsp;CL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CHILE</option>
                                                                                <option value="+237">+237&nbsp;&nbsp;CM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CAMEROON</option>
                                                                                <option value="+86">+86&nbsp;&nbsp;CN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CHINA</option>
                                                                                <option value="+57">+57&nbsp;&nbsp;CO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;COLOMBIA</option>
                                                                                <option value="+506">+506&nbsp;&nbsp;CR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;COSTA RICA</option>
                                                                                <option value="+53">+53&nbsp;&nbsp;CU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CUBA</option>
                                                                                <option value="+238">+238&nbsp;&nbsp;CV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CAPE VERDE</option>
                                                                                <option value="+61">+61&nbsp;&nbsp;CX&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CHRISTMAS ISLAND</option>
                                                                                <option value="+357">+357&nbsp;&nbsp;CY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CYPRUS</option>
                                                                                <option value="+420">+420&nbsp;&nbsp;CZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CZECH REPUBLIC</option>
                                                                                <option value="+49">+49&nbsp;&nbsp;DE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GERMANY</option>
                                                                                <option value="+253">+253&nbsp;&nbsp;DJ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;DJIBOUTI</option>
                                                                                <option value="+45">+45&nbsp;&nbsp;DK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;DENMARK</option>
                                                                                <option value="+1767">+1767&nbsp;&nbsp;DM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;DOMINICA</option>
                                                                                <option value="+1809">+1809&nbsp;&nbsp;DO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;DOMINICAN REPUBLIC</option>
                                                                                <option value="+213">+213&nbsp;&nbsp;DZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ALGERIA</option>
                                                                                <option value="+593">+593&nbsp;&nbsp;EC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ECUADOR</option>
                                                                                <option value="+372">+372&nbsp;&nbsp;EE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ESTONIA</option>
                                                                                <option value="+20">+20&nbsp;&nbsp;EG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;EGYPT</option>
                                                                                <option value="+291">+291&nbsp;&nbsp;ER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ERITREA</option>
                                                                                <option value="+34">+34&nbsp;&nbsp;ES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SPAIN</option>
                                                                                <option value="+251">+251&nbsp;&nbsp;ET&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ETHIOPIA</option>
                                                                                <option value="+358">+358&nbsp;&nbsp;FI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;FINLAND</option>
                                                                                <option value="+679">+679&nbsp;&nbsp;FJ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;FIJI</option>
                                                                                <option value="+500">+500&nbsp;&nbsp;FK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;FALKLAND ISLANDS (MALVINAS</option>
                                                                                <option value="+691">+691&nbsp;&nbsp;FM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MICRONESIA, FEDERATED STATES OF</option>
                                                                                <option value="+298">+298&nbsp;&nbsp;FO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;FAROE ISLANDS</option>
                                                                                <option value="+33">+33&nbsp;&nbsp;FR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;FRANCE</option>
                                                                                <option value="+241">+241&nbsp;&nbsp;GA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GABON</option>
                                                                                <option value="+1473">+1473&nbsp;&nbsp;GD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GRENADA</option>
                                                                                <option value="+995">+995&nbsp;&nbsp;GE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GEORGIA</option>
                                                                                <option value="+233">+233&nbsp;&nbsp;GH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GHANA</option>
                                                                                <option value="+350">+350&nbsp;&nbsp;GI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GIBRALTAR</option>
                                                                                <option value="+299">+299&nbsp;&nbsp;GL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GREENLAND</option>
                                                                                <option value="+220">+220&nbsp;&nbsp;GM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GAMBIA</option>
                                                                                <option value="+224">+224&nbsp;&nbsp;GN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GUINEA</option>
                                                                                <option value="+240">+240&nbsp;&nbsp;GQ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;EQUATORIAL GUINEA</option>
                                                                                <option value="+30">+30&nbsp;&nbsp;GR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GREECE</option>
                                                                                <option value="+502">+502&nbsp;&nbsp;GT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GUATEMALA</option>
                                                                                <option value="+1671">+1671&nbsp;&nbsp;GU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GUAM</option>
                                                                                <option value="+245">+245&nbsp;&nbsp;GW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GUINEA-BISSAU</option>
                                                                                <option value="+592">+592&nbsp;&nbsp;GY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GUYANA</option>
                                                                                <option value="+852">+852&nbsp;&nbsp;HK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;HONG KONG</option>
                                                                                <option value="+504">+504&nbsp;&nbsp;HN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;HONDURAS</option>
                                                                                <option value="+385">+385&nbsp;&nbsp;HR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CROATIA</option>
                                                                                <option value="+509">+509&nbsp;&nbsp;HT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;HAITI</option>
                                                                                <option value="+36">+36&nbsp;&nbsp;HU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;HUNGARY</option>
                                                                                <option value="+62">+62&nbsp;&nbsp;ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;INDONESIA</option>
                                                                                <option value="+353">+353&nbsp;&nbsp;IE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;IRELAND</option>
                                                                                <option value="+972">+972&nbsp;&nbsp;IL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ISRAEL</option>
                                                                                <option value="+44">+44&nbsp;&nbsp;IM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ISLE OF MAN</option>
                                                                                <option value="+964">+964&nbsp;&nbsp;IQ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;IRAQ</option>
                                                                                <option value="+98">+98&nbsp;&nbsp;IR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;IRAN, ISLAMIC REPUBLIC OF</option>
                                                                                <option value="+354">+354&nbsp;&nbsp;IS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ICELAND</option>
                                                                                <option value="+39">+39&nbsp;&nbsp;IT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ITALY</option>
                                                                                <option value="+1876">+1876&nbsp;&nbsp;JM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;JAMAICA</option>
                                                                                <option value="+962">+962&nbsp;&nbsp;JO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;JORDAN</option>
                                                                                <option value="+81">+81&nbsp;&nbsp;JP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;JAPAN</option>
                                                                                <option value="+254">+254&nbsp;&nbsp;KE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KENYA</option>
                                                                                <option value="+996">+996&nbsp;&nbsp;KG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KYRGYZSTAN</option>
                                                                                <option value="+855">+855&nbsp;&nbsp;KH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CAMBODIA</option>
                                                                                <option value="+686">+686&nbsp;&nbsp;KI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KIRIBATI</option>
                                                                                <option value="+269">+269&nbsp;&nbsp;KM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;COMOROS</option>
                                                                                <option value="+1869">+1869&nbsp;&nbsp;KN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT KITTS AND NEVIS</option>
                                                                                <option value="+850">+850&nbsp;&nbsp;KP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KOREA DEMOCRATIC PEOPLES REPUBLIC OF</option>
                                                                                <option value="+82">+82&nbsp;&nbsp;KR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KOREA REPUBLIC OF</option>
                                                                                <option value="+965">+965&nbsp;&nbsp;KW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KUWAIT</option>
                                                                                <option value="+1345">+1345&nbsp;&nbsp;KY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CAYMAN ISLANDS</option>
                                                                                <option value="+7">+7&nbsp;&nbsp;KZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KAZAKSTAN</option>
                                                                                <option value="+856">+856&nbsp;&nbsp;LA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LAO PEOPLES DEMOCRATIC REPUBLIC</option>
                                                                                <option value="+961">+961&nbsp;&nbsp;LB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LEBANON</option>
                                                                                <option value="+1758">+1758&nbsp;&nbsp;LC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT LUCIA</option>
                                                                                <option value="+423">+423&nbsp;&nbsp;LI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LIECHTENSTEIN</option>
                                                                                <option value="+94">+94&nbsp;&nbsp;LK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SRI LANKA</option>
                                                                                <option value="+231">+231&nbsp;&nbsp;LR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LIBERIA</option>
                                                                                <option value="+266">+266&nbsp;&nbsp;LS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LESOTHO</option>
                                                                                <option value="+370">+370&nbsp;&nbsp;LT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LITHUANIA</option>
                                                                                <option value="+352">+352&nbsp;&nbsp;LU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LUXEMBOURG</option>
                                                                                <option value="+371">+371&nbsp;&nbsp;LV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LATVIA</option>
                                                                                <option value="+218">+218&nbsp;&nbsp;LY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LIBYAN ARAB JAMAHIRIYA</option>
                                                                                <option value="+212">+212&nbsp;&nbsp;MA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MOROCCO</option>
                                                                                <option value="+377">+377&nbsp;&nbsp;MC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MONACO</option>
                                                                                <option value="+373">+373&nbsp;&nbsp;MD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MOLDOVA, REPUBLIC OF</option>
                                                                                <option value="+382">+382&nbsp;&nbsp;ME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MONTENEGRO</option>
                                                                                <option value="+1599">+1599&nbsp;&nbsp;MF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT MARTIN</option>
                                                                                <option value="+261">+261&nbsp;&nbsp;MG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MADAGASCAR</option>
                                                                                <option value="+692">+692&nbsp;&nbsp;MH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MARSHALL ISLANDS</option>
                                                                                <option value="+389">+389&nbsp;&nbsp;MK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option>
                                                                                <option value="+223">+223&nbsp;&nbsp;ML&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MALI</option>
                                                                                <option value="+95">+95&nbsp;&nbsp;MM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MYANMAR</option>
                                                                                <option value="+976">+976&nbsp;&nbsp;MN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MONGOLIA</option>
                                                                                <option value="+853">+853&nbsp;&nbsp;MO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MACAU</option>
                                                                                <option value="+1670">+1670&nbsp;&nbsp;MP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NORTHERN MARIANA ISLANDS</option>
                                                                                <option value="+222">+222&nbsp;&nbsp;MR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MAURITANIA</option>
                                                                                <option value="+1664">+1664&nbsp;&nbsp;MS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MONTSERRAT</option>
                                                                                <option value="+356">+356&nbsp;&nbsp;MT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MALTA</option>
                                                                                <option value="+230">+230&nbsp;&nbsp;MU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MAURITIUS</option>
                                                                                <option value="+960">+960&nbsp;&nbsp;MV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MALDIVES</option>
                                                                                <option value="+265">+265&nbsp;&nbsp;MW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MALAWI</option>
                                                                                <option value="+52">+52&nbsp;&nbsp;MX&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MEXICO</option>
                                                                                <option value="+60">+60&nbsp;&nbsp;MY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MALAYSIA</option>
                                                                                <option value="+258">+258&nbsp;&nbsp;MZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MOZAMBIQUE</option>
                                                                                <option value="+264">+264&nbsp;&nbsp;NA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NAMIBIA</option>
                                                                                <option value="+687">+687&nbsp;&nbsp;NC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NEW CALEDONIA</option>
                                                                                <option value="+227">+227&nbsp;&nbsp;NE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NIGER</option>
                                                                                <option value="+234">+234&nbsp;&nbsp;NG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NIGERIA</option>
                                                                                <option value="+505">+505&nbsp;&nbsp;NI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NICARAGUA</option>
                                                                                <option value="+31">+31&nbsp;&nbsp;NL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NETHERLANDS</option>
                                                                                <option value="+47">+47&nbsp;&nbsp;NO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NORWAY</option>
                                                                                <option value="+977">+977&nbsp;&nbsp;NP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NEPAL</option>
                                                                                <option value="+674">+674&nbsp;&nbsp;NR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NAURU</option>
                                                                                <option value="+683">+683&nbsp;&nbsp;NU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NIUE</option>
                                                                                <option value="+64">+64&nbsp;&nbsp;NZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NEW ZEALAND</option>
                                                                                <option value="+968">+968&nbsp;&nbsp;OM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;OMAN</option>
                                                                                <option value="+507">+507&nbsp;&nbsp;PA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PANAMA</option>
                                                                                <option value="+51">+51&nbsp;&nbsp;PE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PERU</option>
                                                                                <option value="+689">+689&nbsp;&nbsp;PF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;FRENCH POLYNESIA</option>
                                                                                <option value="+675">+675&nbsp;&nbsp;PG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PAPUA NEW GUINEA</option>
                                                                                <option value="+63">+63&nbsp;&nbsp;PH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PHILIPPINES</option>
                                                                                <option value="+92">+92&nbsp;&nbsp;PK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PAKISTAN</option>
                                                                                <option value="+48">+48&nbsp;&nbsp;PL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;POLAND</option>
                                                                                <option value="+508">+508&nbsp;&nbsp;PM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT PIERRE AND MIQUELON</option>
                                                                                <option value="+870">+870&nbsp;&nbsp;PN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PITCAIRN</option>
                                                                                <option value="+1">+1&nbsp;&nbsp;PR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PUERTO RICO</option>
                                                                                <option value="+351">+351&nbsp;&nbsp;PT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PORTUGAL</option>
                                                                                <option value="+680">+680&nbsp;&nbsp;PW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PALAU</option>
                                                                                <option value="+595">+595&nbsp;&nbsp;PY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PARAGUAY</option>
                                                                                <option value="+974">+974&nbsp;&nbsp;QA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;QATAR</option>
                                                                                <option value="+40">+40&nbsp;&nbsp;RO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ROMANIA</option>
                                                                                <option value="+381">+381&nbsp;&nbsp;RS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SERBIA</option>
                                                                                <option value="+7">+7&nbsp;&nbsp;RU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;RUSSIAN FEDERATION</option>
                                                                                <option value="+250">+250&nbsp;&nbsp;RW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;RWANDA</option>
                                                                                <option value="+966">+966&nbsp;&nbsp;SA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAUDI ARABIA</option>
                                                                                <option value="+677">+677&nbsp;&nbsp;SB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SOLOMON ISLANDS</option>
                                                                                <option value="+248">+248&nbsp;&nbsp;SC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SEYCHELLES</option>
                                                                                <option value="+249">+249&nbsp;&nbsp;SD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SUDAN</option>
                                                                                <option value="+46">+46&nbsp;&nbsp;SE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SWEDEN</option>
                                                                                <option value="+65">+65&nbsp;&nbsp;SG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SINGAPORE</option>
                                                                                <option value="+290">+290&nbsp;&nbsp;SH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT HELENA</option>
                                                                                <option value="+386">+386&nbsp;&nbsp;SI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SLOVENIA</option>
                                                                                <option value="+421">+421&nbsp;&nbsp;SK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SLOVAKIA</option>
                                                                                <option value="+232">+232&nbsp;&nbsp;SL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SIERRA LEONE</option>
                                                                                <option value="+378">+378&nbsp;&nbsp;SM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAN MARINO</option>
                                                                                <option value="+221">+221&nbsp;&nbsp;SN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SENEGAL</option>
                                                                                <option value="+252">+252&nbsp;&nbsp;SO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SOMALIA</option>
                                                                                <option value="+597">+597&nbsp;&nbsp;SR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SURINAME</option>
                                                                                <option value="+239">+239&nbsp;&nbsp;ST&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAO TOME AND PRINCIPE</option>
                                                                                <option value="+503">+503&nbsp;&nbsp;SV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;EL SALVADOR</option>
                                                                                <option value="+963">+963&nbsp;&nbsp;SY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SYRIAN ARAB REPUBLIC</option>
                                                                                <option value="+268">+268&nbsp;&nbsp;SZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SWAZILAND</option>
                                                                                <option value="+1649">+1649&nbsp;&nbsp;TC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TURKS AND CAICOS ISLANDS</option>
                                                                                <option value="+235">+235&nbsp;&nbsp;TD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CHAD</option>
                                                                                <option value="+228">+228&nbsp;&nbsp;TG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TOGO</option>
                                                                                <option value="+66">+66&nbsp;&nbsp;TH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;THAILAND</option>
                                                                                <option value="+992">+992&nbsp;&nbsp;TJ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TAJIKISTAN</option>
                                                                                <option value="+690">+690&nbsp;&nbsp;TK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TOKELAU</option>
                                                                                <option value="+670">+670&nbsp;&nbsp;TL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TIMOR-LESTE</option>
                                                                                <option value="+993">+993&nbsp;&nbsp;TM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TURKMENISTAN</option>
                                                                                <option value="+216">+216&nbsp;&nbsp;TN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TUNISIA</option>
                                                                                <option value="+676">+676&nbsp;&nbsp;TO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TONGA</option>
                                                                                <option value="+90">+90&nbsp;&nbsp;TR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TURKEY</option>
                                                                                <option value="+1868">+1868&nbsp;&nbsp;TT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TRINIDAD AND TOBAGO</option>
                                                                                <option value="+688">+688&nbsp;&nbsp;TV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TUVALU</option>
                                                                                <option value="+886">+886&nbsp;&nbsp;TW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TAIWAN, PROVINCE OF CHINA</option>
                                                                                <option value="+255">+255&nbsp;&nbsp;TZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TANZANIA, UNITED REPUBLIC OF</option>
                                                                                <option value="+380">+380&nbsp;&nbsp;UA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;UKRAINE</option>
                                                                                <option value="+256">+256&nbsp;&nbsp;UG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;UGANDA</option>
                                                                                <option value="+598">+598&nbsp;&nbsp;UY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;URUGUAY</option>
                                                                                <option value="+998">+998&nbsp;&nbsp;UZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;UZBEKISTAN</option>
                                                                                <option value="+39">+39&nbsp;&nbsp;VA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;HOLY SEE (VATICAN CITY STATE</option>
                                                                                <option value="+1784">+1784&nbsp;&nbsp;VC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT VINCENT AND THE GRENADINES</option>
                                                                                <option value="+58">+58&nbsp;&nbsp;VE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;VENEZUELA</option>
                                                                                <option value="+1284">+1284&nbsp;&nbsp;VG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;VIRGIN ISLANDS, BRITISH</option>
                                                                                <option value="+1340">+1340&nbsp;&nbsp;VI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;VIRGIN ISLANDS, U.S.</option>
                                                                                <option value="+84">+84&nbsp;&nbsp;VN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;VIET NAM</option>
                                                                                <option value="+678">+678&nbsp;&nbsp;VU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;VANUATU</option>
                                                                                <option value="+681">+681&nbsp;&nbsp;WF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;WALLIS AND FUTUNA</option>
                                                                                <option value="+685">+685&nbsp;&nbsp;WS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAMOA</option>
                                                                                <option value="+381">+381&nbsp;&nbsp;XK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KOSOVO</option>
                                                                                <option value="+967">+967&nbsp;&nbsp;YE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;YEMEN</option>
                                                                                <option value="+262">+262&nbsp;&nbsp;YT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MAYOTTE</option>
                                                                                <option value="+27">+27&nbsp;&nbsp;ZA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SOUTH AFRICA</option>
                                                                                <option value="+260">+260&nbsp;&nbsp;ZM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ZAMBIA</option>
                                                                                <option value="+263">+263&nbsp;&nbsp;ZW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ZIMBABWE</option>
                                                                            </select>
                                                                            <input type="hidden" id="ip-vk-zoho-cty" name="SingleLine5" checktype="c1" value="IN" maxlength="255" fieldtype="1">
                                                                        </div>
                                                                        <div class="form-group mobile-wrap-with-country pl-0">
                                                                            <input class="form-control rounded-0" placeholder="Mobile Number*" type="number" compname="PhoneNumber" name="PhoneNumber_countrycode" phoneformat="1" iscountrycodeenabled="true" maxlength="20" value="" fieldtype="11" id="msctus_phone_no" required="">
                                                                        </div>
                                                                        <input type="hidden" name="SingleLine2" checktype="c1" value="Drop a Query" maxlength="255" fieldtype="1">
                                                                        <input type="hidden" name="SingleLine4" checktype="c1" value="New" maxlength="255" fieldtype="1">
                                                                        <input type="hidden" name="SingleLine3" checktype="c1" value="Big Data and Data Science Master’s Course" maxlength="255" fieldtype="1">
                                                                        <input type="hidden" name="course_title" id="msctuscourse_title" value="Big Data and Data Science Master’s Course">
                                                                    </div>
                                                                    <div class="">
                                                                        <input id="pg-drop-query-fm" type="submit" name="msctus_submit" value="Submit" class="form-submit">
                                                                    </div>
                                                                    <div class="sglctfm-rsponse-msg" id="sglctfm-rsponse-msg"></div>
                                                                </form>
															</div>
															</div>

														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="cs_row_five csv2">
											<div class="student_feedback_container">
												<h4 class="aii_title">Skilled Covered</h4>
												<div class="s_feeback_content">
													<div class="row">
														@if ($course->courseSkill)
                                                            @foreach ($course->courseSkill as $skill)
															<div class="thisSkill col-md-4 col-sm-6">
																<p class="m-0">{{ $skill->title }}</p>
															</div>
															@endforeach
														@endif
													</div>
												</div>
											</div>
										</div>
										<div class="cs_row_five csv2">
											<div class="student_feedback_container">
												<h4 class="aii_title">Tools Covered</h4>
												<div class="s_feeback_content">
													<div class="row">
														@if ($course->courseTool)
                                                            @foreach ($course->courseTool as $tool)
															<div class="thisSkill col-md-2 col-sm-2">
																<img src="{{ asset($tool->image) }}" class="img-fluid mh-150 h-w-42px">
															</div>
															@endforeach
														@endif
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="scrollspy" id="Fees" aria-labelledby="Fees-tab">
										<div class="cs_row_five csv2">
											<div class="student_feedback_container">
												<h4 class="aii_title">Fees</h4>
												<div class="s_feeback_content">
													<div class="row">
														<div class="col-md-12">
															<div class="card card-me">
																<div class="card-body">
																	<div class="row">
																		<div class="col-md-7">

																			<div class="bubble with-border bubble__arrow-bottom">
																			<h2>Customized Learning</h2>
																			</div>
																			<p>Online Live  [ Online Class Room ]</p>
																		</div>
																		<div class="col-md-5">
																			<div class="cs_row_two csv2">
																				<div class="cs_overview pxPatco">
																			<ul class="list_requiremetn">
																				<li>
																					<i class="fa fa-check"></i>
																					<p>40+Hrs Live Training</p>
																				</li>
																				<li>
																					<i class="fa fa-check"></i>
																					<p>1:1 Sessions and Doubts clarification</p>
																				</li>
																				<li>
																					<i class="fa fa-check"></i>
																					<p>Flexible schedule</p>
																				</li>
																				<li>
																					<i class="fa fa-check"></i>
																					<p>24 x 7 Repository Access</p>
																				</li>
																			</ul>
																		</div>
																		</div>
																		</div>
																	</div>

																</div>
															</div>
														</div>
														<div class="col-md-7">
															<table class="table table-bordered">
																<thead class="thead-dark">
																	<tr>
																		<th scope="col"></th>
																		<th scope="col">Date</th>
																		<th scope="col">Session Schedule</th>
																		<th scope="col">weekday/weekend</th>
																	</tr>
																</thead>
																<tbody>
																@if ($course->courseFee)
																@foreach ($course->courseFee as $fee)
																	<tr>
																		<td>
																			<div class="custom-control custom-radio">
																				<input type="radio" class="custom-control-input" id="customRadio{{ $fee->id }}" name="example1" value="{{ $fee->id }}" onchange="PassURLToPurchase('{{ route('web.purchase', ['slug'=>$course->slug]) }}?id={{ $fee->id }}')">
																				<label class="custom-control-label" for="customRadio{{ $fee->id }}"></label>
																			</div>
																		</td>
																		<td><label for="customRadio{{ $fee->id }}">{{ $fee->date }}</label></td>
																		<td><label for="customRadio{{ $fee->id }}">{{ $fee->session }}</label></td>
																		<td><label for="customRadio{{ $fee->id }}">{{ $fee->weekend }}</label></td>
																	</tr>
																@endforeach
																@endif
																</tbody>
															</table>
														</div>
														<div class="col-md-5 text-center">
                                                            @php
                                                                $offer = false;
                                                                $discount_percentage = 0;
                                                                $price = $course->price;
                                                                if($course->offer_price > 0){
                                                                    if($course->offer_ends != '' && $course->offer_ends > date('Y-m-d')){
                                                                        if($course->offer_price < $course->price){
                                                                            $price = $course->offer_price;
                                                                            $offer = true;
                                                                            $discount_percentage = round((($course->price - $course->offer_price) / $course->price) * 100);
                                                                        }
                                                                    }
                                                                }
                                                            @endphp
															@if ($offer == true)
																<h3 class="mt-5"><s>₹ {{ $course->price }}</s></h3>
																<div class="h-5c0" style="height: 60px;">
																	<span class="offer pOffer badge badge-danger mb-3 mt-3" style="font-size: 20px; position: relative;">{{ $discount_percentage }}% OFF</span>
																</div>
																<h3>₹ {{ $price }}</h3>
																<p>Expires in <span class="timer_tick"></span></p>
                                                            @else
                                                                <h3>₹ {{ $price }}</h3>
                                                            @endif
                                                            @if (isset(Auth::user()->id) && Auth::user()->id > 0)
                                                                <a href="{{ route('web.purchase', ['slug'=>$course->slug]) }}" class="btn btn-info enrollBtn buyLink">Enroll Now</a>
                                                            @else
                                                                <a href="javascript:;" class="btn btn-info enrollBtn buyLink" data-toggle="modal" data-target="#exampleModalCenter">Enroll Now</a>
                                                            @endif
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="scrollspy" id="Certification" aria-labelledby="Certification-tab">
										<div class="cs_row_five csv2">
											<div class="student_feedback_container">
												<h4 class="aii_title">Certification</h4>
												<div class="s_feeback_content">
													<div class="row">
														<div class="col-md-8">
															{{ $course->certification }}
														</div>
														<div class="col-md-4">
															<img src="{{ asset($course->certificate_img) }}" alt="" id="myImg">
															<p>click here to zoom</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="scrollspy" id="Reviews" aria-labelledby="Reviews-tab">
										<div class="cs_row_five csv2">
											<div class="student_feedback_container">
												<h4 class="aii_title">Student feedback</h4>
												<div class="s_feeback_content">
													<ul class="skills">
														<li class="list-inline-item">Stars 5</li>
														<li class="list-inline-item progressbar1" data-width="84" data-target="100">%84</li>
													</ul>
													<ul class="skills">
														<li class="list-inline-item">Stars 4</li>
														<li class="list-inline-item progressbar2" data-width="9" data-target="100">%9</li>
													</ul>
													<ul class="skills">
														<li class="list-inline-item">Stars 3</li>
														<li class="list-inline-item progressbar3" data-width="3" data-target="100">%3</li>
													</ul>
													<ul class="skills">
														<li class="list-inline-item">Stars 2</li>
														<li class="list-inline-item progressbar4" data-width="1" data-target="100">%1</li>
													</ul>
													<ul class="skills">
														<li class="list-inline-item">Stars 1</li>
														<li class="list-inline-item progressbar5" data-width="2" data-target="100">%2</li>
													</ul>
												</div>
												<div class="aii_average_review text-center">
													<div class="av_content">
														<h2>4.5</h2>
														<ul class="aii_rive_list mb0">
															<li class="list-inline-item"><i class="fa fa-star"></i></li>
															<li class="list-inline-item"><i class="fa fa-star"></i></li>
															<li class="list-inline-item"><i class="fa fa-star"></i></li>
															<li class="list-inline-item"><i class="fa fa-star"></i></li>
															<li class="list-inline-item"><i class="fa fa-star"></i></li>
														</ul>
														<p>Course Rating</p>
													</div>
												</div>
											</div>
										</div>
										<div class="cs_row_six csv2">
											<div class="sfeedbacks">
												<div class="mbp_pagination_comments">
													<div class="mbp_first media csv1">
														<img src="images/resource/review1.png" class="mr-3" alt="review1.png">
														<div class="media-body">
															<h4 class="sub_title mt-0">
																Warren Bethell
																<span class="sspd_review float-right">
																	<ul>
																		<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
																		<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
																		<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
																		<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
																		<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
																		<li class="list-inline-item"></li>
																	</ul>
																</span>
															</h4>
															<a class="sspd_postdate fz14" href="#">6 months ago</a>
															<p class="fz15 mt20">This is the second Photoshop course I have completed with Cristian. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the Beginner to Advanced course first.</p>
															<p class="fz15 mt25 mb25">The sound and video quality is of a good standard. Thank you Cristian.</p>
															<div class="ssp_reply float-right"><span class="flaticon-consulting-message"></span><span class="pl10">Reply</span></div>
															<div class="sspd_review_liked"><a href="#"><i class="flaticon-like-1"></i> <span class="text-thm6 pl5 pr5 fz15">15</span> Thank Waren</a></div>
															<div class="custom_hr style2"></div>
															<div class="mbp_sub media csv1">
																<a href="#"><img src="images/resource/review1.png" class="mr-3" alt="review1.png"></a>
																<div class="media-body">
																	<h4 class="sub_title mt-0">
																		Anton Hilton
																		<span class="sspd_review float-right">
																			<ul>
																				<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
																				<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
																				<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
																				<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
																				<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
																				<li class="list-inline-item"></li>
																			</ul>
																		</span>
																	</h4>
																	<a class="sspd_postdate fz14" href="#">6 months ago</a>
																	<p class="fz15 mt20 mb50">This is the second Photoshop course I have completed with Cristian. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the</p>
																	<div class="ssp_reply float-right"><span class="flaticon-consulting-message"></span><span class="pl10">Reply</span></div>
																	<div class="sspd_review_liked">
																		<a href="#"><i class="flaticon-like-1"></i><span class="text-thm6 pl5 pr5 fz15">15</span> Thank Waren</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="custom_hr"></div>
													<div class="mbp_second media csv1">
														<img src="images/resource/review1.png" class="align-self-start mr-3" alt="review1.png">
														<div class="media-body">
															<h4 class="sub_title mt-0">
																Warren Bethell
																<span class="sspd_review float-right">
																	<ul>
																		<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
																		<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
																		<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
																		<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
																		<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
																		<li class="list-inline-item"></li>
																	</ul>
																</span>
															</h4>
															<a class="sspd_postdate fz14" href="#">6 months ago</a>
															<p class="fz15 mt20">This is the second Photoshop course I have completed with Cristian. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the Beginner to Advanced course first.</p>
															<p class="fz15 mt25 mb25">The sound and video quality is of a good standard. Thank you Cristian.</p>
															<div class="ssp_reply float-right"><span class="flaticon-consulting-message"></span><span class="pl10">Reply</span></div>
															<div class="sspd_review_liked"><a href="#"><i class="flaticon-like-1"></i> <span class="text-thm6 pl5 pr5 fz15">15</span> Thank Waren</a></div>
														</div>
													</div>
													<div class="text-center mt50">
														<div class="custom_hr"></div>
														<button type="button" class="more-review-btn btn">See more reviews</button>
													</div>
												</div>
											</div>
										</div>
										<div class="cs_row_seven csv2">
											<div class="sfeedbacks">
												<div class="mbp_comment_form style2 pb0">
													<h4>Add Reviews & Rate</h4>
													<ul>
														<li class="list-inline-item pr15">
															<p>What is it like to Course?</p>
														</li>
														<li class="list-inline-item">
															<span class="sspd_review">
																<ul>
																	<li class="list-inline-item"><a href="#"><i class="fa fa-star fz18"></i></a></li>
																	<li class="list-inline-item"><a href="#"><i class="fa fa-star fz18"></i></a></li>
																	<li class="list-inline-item"><a href="#"><i class="fa fa-star fz18"></i></a></li>
																	<li class="list-inline-item"><a href="#"><i class="fa fa-star fz18"></i></a></li>
																	<li class="list-inline-item"><a href="#"><i class="fa fa-star fz18"></i></a></li>
																	<li class="list-inline-item"></li>
																</ul>
															</span>
														</li>
													</ul>
													<form class="comments_form">
														<div class="form-group">
															<label for="exampleInputName1">Review Title</label>
															<input type="text" class="form-control" id="exampleInputName1" aria-describedby="textHelp">
														</div>
														<div class="form-group">
															<label for="exampleFormControlTextarea1">Review Content</label>
															<textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
														</div>
														<button type="submit" class="btn btn-thm">Submit Review <span class="flaticon-right-arrow-1"></span></button>
													</form>
												</div>
											</div>
										</div>
									</div>
									<div class="scrollspy" id="FAQ" aria-labelledby="FAQ-tab">
										<div class="cs_row_five csv2">
											<div class="student_feedback_container">
												<h4 class="aii_title">FAQ</h4>
												<div class="s_feeback_content">
													<div id="accordion">
														@if ($course->faq)
															@foreach ($course->faq as $faq)
															<div class="card">
																<div class="card-header" id="headingOne">
																	<h5 class="mb-0">
																		<button class="btn btn-link accMenu collapsed" data-toggle="collapse" data-target="#collapse{{ $faq->id }}" aria-expanded="false" aria-controls="collapse{{ $module->id }}">
																		{{ $faq->title }} <span class="arrow"><i class="fa fa-arrow-down"></i></span>
																		</button>
																	</h5>
																</div>
																<div id="collapse{{ $faq->id }}" class="collapse" aria-labelledby="heading{{ $faq->id }}" data-parent="#accordion">
																	<div class="card-body">
																		{!! $faq->description !!}
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
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<div id="myModalX" class="modalX">
    <span class="closeX">&times;</span>
    <img class="modal-contentX" id="img01">
</div>
@endsection

@section('js')
<script src="https://rawgit.com/r3plica/Scrollspy/master/scrollspy.js"></script>
<script>
	$('.p-nav-item').click(function(){
		$('.p-nav-item').removeClass('active');
		$(this).addClass('active');
	})
	// $("#myTab").scrollspy();
	$(window).bind('scroll', function() {
		var currentTop = $(window).scrollTop();
		var elems = $('.scrollspy');
		elems.each(function(index){
		var elemTop 	= ($(this).offset().top)-250;
		var elemBottom 	= elemTop + $(this).height();
		if(currentTop >= elemTop && currentTop <= elemBottom){
			var id 		= $(this).attr('id');
			var navElem = $('a[href="#' + id+ '"]');
		navElem.parent().addClass('active').siblings().removeClass( 'active' );
		}
		})
	});

	var countDownDate = new Date("{{ $course->offer_ends }}").getTime();

	// Update the count down every 1 second
	var x = setInterval(function() {

		// Get today's date and time
		var now = new Date().getTime();

		// Find the distance between now and the count down date
		var distance = countDownDate - now;

		// Time calculations for days, hours, minutes and seconds
		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);

		// Display the result in the element with id="demo"
		$('.timer_tick').html(days + "d " + hours + "h " + minutes + "m " + seconds + "s ")

		// If the count down is finished, write some text
		if (distance < 0) {
			clearInterval(x);
			$('.timer_tick').html("EXPIRED");
		}
		if($('.pOffer').hasClass('mOffer')){
			$('.pOffer').css('font-size','14px');
			$('.pOffer').removeClass('mOffer');
		}else{
			$('.pOffer').css('font-size','20px');
			$('.pOffer').addClass('mOffer');
		}
	}, 1000);

	// Get the modal
	var modal = document.getElementById("myModalX");

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var img = document.getElementById("myImg");
	var modalImg = document.getElementById("img01");
	img.onclick = function(){
		modal.style.display = "block";
		modalImg.src = this.src;
	}

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("closeX")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		modal.style.display = "none";
	}

	function PassURLToPurchase(link){
		$('.buyLink').attr('href', link)
	}
</script>
@endsection
