@extends('web')
@section('title', 'Explore Courses')

@section('css')
@endsection

@section('page')
			<!-- Inner Page Breadcrumb -->
			<section class="inner_page_breadcrumb">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 offset-xl-3 text-center">
							<div class="breadcrumb_content">
								<h4 class="breadcrumb_title">Explore Courses</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Explore Courses</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Courses List 2 -->
			<section class="courses-list2 pb40">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-8 col-xl-9">
							<div class="row courses_list_heading style2 d-none">
								<div class="col-xl-4 p0">
									<div class="instructor_search_result style2">
										<p class="mt10 fz15"><span class="color-dark pr10">85 </span> results <span class="color-dark pr10">1,236</span> Video Tutorials</p>
									</div>
								</div>
								<div class="col-xl-8 p0">
									<div class="candidate_revew_select style2 text-right">
										<ul class="mb0">
											<li class="list-inline-item">
												<select class="selectpicker show-tick">
													<option>Newly published</option>
													<option>Recent</option>
													<option>Old Review</option>
												</select>
											</li>
											<li class="list-inline-item">
												<div class="candidate_revew_search_box course fn-520">
													<form class="form-inline my-2 my-lg-0">
														<input class="form-control mr-sm-2" type="search" placeholder="Search our instructors" aria-label="Search">
														<button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
													</form>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="row courses_container style2">
								@if ($courses)
									@foreach ($courses as $course)
								<div class="col-lg-12 p0">
									<div class="courses_list_content">
										<div class="top_courses list">
											<div class="thumb">
												<img class="img-whp image-296-193" src="{{ asset($course->cover_img) }}" alt="t1.jpg">
												<div class="overlay">
													<div class="icon"><span class="flaticon-like"></span></div>
													<a class="tc_preview_course" href="{{ route('web.detail', ['slug'=>$course->slug]) }}">Preview Course</a>
												</div>
											</div>
											<div class="details">
												<div class="tc_content">
													<p>Exclusive</p>
													<h5><a href="{{ route('web.detail', ['slug'=>$course->slug]) }}">{{ $course->title }} <span class="tag">Best Seller</span></a></h5>
													<p>{{ Str::limit($course->description, 200) }}</p>
												</div>
												<div class="tc_footer">

													<ul class="tc_review float-right fn-414">
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#">(5)</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
									@endforeach
								@endif
							</div>
							<div class="row">
								<div class="col-lg-12 mt50">
									<div class="mbp_pagination">
										{{ $courses->links('pagination::default') }}
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-xl-3 d-none">
							<div class="selected_filter_widget style3 mb30">
								<div id="accordion" class="panel-group">
									<div class="panel">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Software</a>
											</h4>
										</div>
										<div id="panelBodySoftware" class="panel-collapse collapse show">
											<div class="panel-body">
												<div class="ui_kit_checkbox">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck14">
														<label class="custom-control-label" for="customCheck14">Photoshop <span class="float-right">(03)</span></label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck15">
														<label class="custom-control-label" for="customCheck15">Adobe Illustrator <span class="float-right">(15)</span></label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck16">
														<label class="custom-control-label" for="customCheck16">Graphic Design <span class="float-right">(126)</span></label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck17">
														<label class="custom-control-label" for="customCheck17">Sketch <span class="float-right">(1,584)</span></label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck18">
														<label class="custom-control-label" for="customCheck18">InDesign <span class="float-right">(34)</span></label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck19">
														<label class="custom-control-label" for="customCheck19">CorelDRAW <span class="float-right">(34)</span></label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck20">
														<label class="custom-control-label" for="customCheck20">After Effects <span class="float-right">(06)</span></label>
													</div>
													<a class="color-orose" href="#"><span class="fa fa-plus pr10"></span> See More</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="selected_filter_widget style3">
								<div id="accordion" class="panel-group">
									<div class="panel">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a href="#panelBodyAuthors" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Author</a>
											</h4>
										</div>
										<div id="panelBodyAuthors" class="panel-collapse collapse show">
											<div class="panel-body">
												<div class="cl_skill_checkbox">
													<div class="content ui_kit_checkbox style2 text-left">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="customCheck80">
															<label class="custom-control-label" for="customCheck80">Chris Convrse <span class="float-right">(03)</span></label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="customCheck1">
															<label class="custom-control-label" for="customCheck1">Morten Rand <span class="float-right">(15)</span></label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="customCheck2">
															<label class="custom-control-label" for="customCheck2">Rayi Villalobos  <span class="float-right">(125)</span></label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="customCheck3">
															<label class="custom-control-label" for="customCheck3">James William <span class="float-right">(1.584)</span></label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="customCheck4">
															<label class="custom-control-label" for="customCheck4">Jen Kramery <span class="float-right">(34)</span></label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="customCheck5">
															<label class="custom-control-label" for="customCheck5">Chris Notder  <span class="float-right">(58)</span></label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="customCheck6">
															<label class="custom-control-label" for="customCheck6">Kramery Chris <span class="float-right">(06)</span></label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="customCheck7">
															<label class="custom-control-label" for="customCheck7">James William <span class="float-right">(62)</span></label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="customCheck8">
															<label class="custom-control-label" for="customCheck8">Chris Notder <span class="float-right">(43)</span></label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="customCheck9">
															<label class="custom-control-label" for="customCheck9">Rayi Villalobos <span class="float-right">(23)</span></label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="customCheck10">
															<label class="custom-control-label" for="customCheck10">Kramery Chris <span class="float-right">(57)</span></label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="selected_filter_widget style3 mb30">
								<div id="accordion" class="panel-group">
									<div class="panel">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a href="#panelBodyPrice" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Price</a>
											</h4>
										</div>
										<div id="panelBodyPrice" class="panel-collapse collapse show">
											<div class="panel-body">
												<div class="ui_kit_whitchbox">
													<div class="custom-control custom-switch">
														<input type="checkbox" class="custom-control-input" id="customSwitch1">
														<label class="custom-control-label" for="customSwitch1">Paid </label>
													</div>
													<div class="custom-control custom-switch">
														<input type="checkbox" class="custom-control-input" id="customSwitch2">
														<label class="custom-control-label" for="customSwitch2">Free</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="selected_filter_widget style3 mb30">
								<div id="accordion" class="panel-group">
									<div class="panel">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a href="#panelBodySkills" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Skill level</a>
											</h4>
										</div>
										<div id="panelBodySkills" class="panel-collapse collapse show">
											<div class="panel-body">
												<div class="ui_kit_checkbox">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck14">
														<label class="custom-control-label" for="customCheck14">Beginner <span class="float-right">(03)</span></label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck15">
														<label class="custom-control-label" for="customCheck15">Intermediate <span class="float-right">(15)</span></label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck16">
														<label class="custom-control-label" for="customCheck16">Advanced <span class="float-right">(126)</span></label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck17">
														<label class="custom-control-label" for="customCheck17">Appropriate for all <span class="float-right">(1,584)</span></label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="selected_filter_widget style3">
								<div id="accordion" class="panel-group">
									<div class="panel">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a href="#panelBodyRating" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Rating</a>
											</h4>
										</div>
										<div id="panelBodyRating" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="ui_kit_checkbox style2">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck80">
														<label class="custom-control-label" for="customCheck80">Show All <span class="float-right">(03)</span></label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck82">
														<label class="custom-control-label" for="customCheck82">1 star and higher <span class="float-right">(15)</span></label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck83">
														<label class="custom-control-label" for="customCheck83">2 star and higher <span class="float-right">(126)</span></label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck84">
														<label class="custom-control-label" for="customCheck84">3 star and higher <span class="float-right">(1,584)</span></label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck85">
														<label class="custom-control-label" for="customCheck85">4 star and higher <span class="float-right">(34)</span></label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck86">
														<label class="custom-control-label" for="customCheck86">5 star and higher <span class="float-right">(58)</span></label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="selected_filter_widget style4">
								<span class="float-left"><img class="mr20" src="{{ asset('assets/images') }}/resource\2.png" alt="2.png"></span>
								<h4 class="mt15 fz20 fw500">Not sure?</h4>
								<br>
								<p>Every course comes with a 30-day money-back guarantee</p>
							</div>
						</div>
					</div>
				</div>
			</section>
@endsection

@section('js')
@endsection
