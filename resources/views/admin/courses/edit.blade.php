@extends('admin')

@section('title', 'Edit Course')
@section('css')

@endsection

@section('page')
    <div class="main-content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content-header">Edit Course</div>
                </div>
            </div>
            <!-- Input Validation start -->
            <section class="input-validation">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Course</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#basic_details">Basic Detail</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#Eligibility">Eligibility</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#what_u_learn">What You Learn</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#Benifits">Benifits</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#Modules">Modules</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#Skills">Skills</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#Tools">Tools</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#Fees">Fees</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#Career_Services">Career Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#Faq">Faq</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane container active" id="basic_details">
                                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('admin.courses.update', ['id'=>$course->id]) }}" novalidate>
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <h5>Title<span class="required">*</span></h5>
                                                            <div class="controls mb-1">
                                                                <input type="text" name="title" class="form-control" required data-validation-required-message="This field is required" value="{{$course->title}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <h5>Slug <span class="required">*</span></h5>
                                                            <div class="controls mb-1">
                                                                <input type="text" name="slug" class="form-control" required data-validation-required-message="This field is required" value="{{$course->slug}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <h5>Description <span class="required">*</span></h5>
                                                            <div class="controls mb-1">
                                                                <textarea name="description" class="form-control" required data-validation-required-message="This field is required">{{$course->description}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <h5>Preview Video URL <span class="required">*</span></h5>
                                                            <div class="controls mb-1">
                                                                <input type="text" name="preview_video" class="form-control" required data-validation-required-message="This field is required" value="{{$course->preview_video}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <h5>Cover Image <span class="required">*</span></h5>
                                                            <div class="controls mb-1">
                                                                <input type="file" name="cover_img" accept="image/*" class="form-control" required data-validation-required-message="This field is required" value="{{$course->cover_img}}">
                                                                <input type="hidden" name="cover_img_old" class="form-control" required data-validation-required-message="This field is required" value="{{$course->cover_img}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <h5>Certification Description <span class="required">*</span></h5>
                                                            <div class="controls mb-1">
                                                                <textarea name="certification" class="form-control" required data-validation-required-message="This field is required">{{$course->certification}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group">
                                                            <h5>Certificate Image<span class="required">*</span></h5>
                                                            <div class="controls mb-1">
                                                                <input type="file" name="certificate_img" accept="image/*" class="form-control" required data-validation-required-message="This field is required" value="{{$course->certificate_img}}">
                                                                <input type="hidden" name="certificate_img_old" class="form-control" required data-validation-required-message="This field is required" value="{{$course->certificate_img}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group">
                                                            <h5>Price <span class="required">*</span></h5>
                                                            <div class="controls mb-1">
                                                                <input type="text" name="price" class="form-control" required data-validation-required-message="This field is required" value="{{$course->price}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group">
                                                            <h5>Category <span class="required">*</span></h5>
                                                            <div class="controls mb-1">
                                                                <select name="category" class="custom-select">
                                                                    <option value="" selected>Select Category</option>
                                                                    @if ($categories)
                                                                        @foreach ($categories as $category)
                                                                            <option value="{{ $category->id }}" {{ $course->category->id == $category->id?'selected':'' }}>{{ $category->name }}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group">
                                                            <h5>Offer Price <span class="required">*</span></h5>
                                                            <div class="controls mb-1">
                                                                <input type="text" name="offer_price" class="form-control" data-validation-required-message="This field is required" value="{{$course->offer_price}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group">
                                                            <h5>Discount Text <span class="required">*</span></h5>
                                                            <div class="controls mb-1">
                                                                <input type="text" placeholder="50% Discount" name="discount_text" class="form-control" data-validation-required-message="This field is required" value="{{$course->discount_text}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group">
                                                            <h5>Offer Ends in <span class="required">*</span></h5>
                                                            <div class="controls mb-1">
                                                                <input type="text" name="offer_ends" class="form-control" data-validation-required-message="This field is required" value="{{$course->offer_ends}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <h5>Curriculum Description <span class="required">*</span></h5>
                                                            <div class="controls mb-1">
                                                                <textarea name="curriculum" class="form-control" required data-validation-required-message="This field is required">{{$course->curriculum}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <h5>Requirement <span class="required">*</span></h5>
                                                            <div class="controls mb-1">
                                                                <textarea name="requirement" class="form-control" required data-validation-required-message="This field is required">{{$course->requirement}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <h5>Features <span class="required">*</span></h5>
                                                            <div class="controls mb-1">
                                                                <textarea name="features" class="form-control" required data-validation-required-message="This field is required">{{$course->features}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <h5>Status <span class="required">*</span></h5>
                                                            <div class="controls mb-1">
                                                                <select name="status" class="custom-select" required data-validation-required-message="This field is required">
                                                                    <option value="" selected>Select Status</option>
                                                                    <option value="1" {{$course->status == '1'?'selected':''}}>Active</option>
                                                                    <option value="0" {{$course->status == '0'?'selected':''}}>Draft</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="text-right">
                                                            <button type="submit" class="btn btn-success">Submit <i class="fa fa-thumbs-o-up position-right"></i></button>
                                                            <button type="reset" class="btn btn-danger">Reset <i class="fa fa-refresh position-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane container fade" id="Eligibility">
                                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('admin.courses.update.eligibility', ['id'=>$course->id]) }}" novalidate>
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group addEligibility">
                                                            <h5>Eligibility<span class="required">*</span></h5>
                                                            @if ($course->courseEligibility)
                                                                @foreach ($course->courseEligibility as $eligibility)
                                                                <div class="controls mb-1">
                                                                    <input type="text" name="text[]" class="form-control" required data-validation-required-message="This field is required" value="{{$eligibility->text}}">
                                                                </div>
                                                                @endforeach
                                                            @endif
                                                        </div>

                                                        <div class="text-right">
                                                            <button type="button" class="btn btn-info" onclick="addEligibility()">Add More <i class="fa fa-plus position-right"></i></button>
                                                            <button type="submit" class="btn btn-success">Submit <i class="fa fa-thumbs-o-up position-right"></i></button>
                                                            <button type="reset" class="btn btn-danger">Reset <i class="fa fa-refresh position-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane container fade" id="what_u_learn">
                                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('admin.courses.update.learn', ['id'=>$course->id]) }}" novalidate>
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group addWhatYouWillLearn">
                                                            <h5>What you will learn <span class="required">*</span></h5>
                                                            @if ($course->courseLearn)
                                                                @foreach ($course->courseLearn as $learn)
                                                                <div class="controls mb-1">
                                                                    <input type="text" name="text[]" class="form-control" required data-validation-required-message="This field is required" value="{{$learn->text}}">
                                                                </div>
                                                                @endforeach
                                                            @endif
                                                        </div>

                                                        <div class="text-right">
                                                            <button type="button" class="btn btn-info" onclick="addWhatYouWillLearn()">Add More <i class="fa fa-plus position-right"></i></button>
                                                            <button type="submit" class="btn btn-success">Submit <i class="fa fa-thumbs-o-up position-right"></i></button>
                                                            <button type="reset" class="btn btn-danger">Reset <i class="fa fa-refresh position-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane container fade" id="Benifits">
                                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('admin.courses.update.benifit.edit', ['id'=>$course->id]) }}" novalidate>
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12 addBenifit">
                                                        <div class="row">
                                                    @if ($course->courseBenifits)
                                                        @foreach ($course->courseBenifits as $benifit)
                                                                <div class="col-lg-4 col-md-4 myCard m-2">
                                                                    <h2>{{$benifit->text}}</h2>
                                                                    <p>{{ucfirst($benifit->type)}}</p>
                                                                    <a href="{{route('admin.courses.update.benifit.delete', ['id'=>$benifit->id])}}" class="close">Delete</a>
                                                                    <a href="" class="close edit" data-toggle="modal" data-target="#editBenifit" onclick="editBenifit('{{$benifit->id}}', '{{$benifit->text}}', '{{$benifit->type}}', '{{$benifit->icon_img}}')">Edit</a>
                                                                </div>
                                                                @endforeach
                                                                @endif
                                                            </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="text-right">
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addBenifit">Add New <i class="fa fa-plus position-right"></i></button>
                                                            <button type="submit" class="btn btn-success">Submit <i class="fa fa-thumbs-o-up position-right"></i></button>
                                                            <button type="reset" class="btn btn-danger">Reset <i class="fa fa-refresh position-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane container fade" id="Modules">
                                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('admin.courses.update.module', ['id'=>$course->id]) }}" novalidate>
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row addModule">
                                                            @if ($course->courseModule)
                                                                @foreach ($course->courseModule as $module)
                                                                    <div class="col-lg-12 col-md-12 myCard mb-3">
                                                                        <div class="form-group">
                                                                            <h5>Title<span class="required">*</span></h5>
                                                                            <div class="controls mb-1">
                                                                                <input type="text" name="question[]" class="form-control" required data-validation-required-message="This field is required" value="{{$module->title}}">
                                                                                <input type="hidden" name="id[]" value="{{$module->id}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <h5>Description <span class="required">*</span></h5>
                                                                            <div class="controls mb-1">
                                                                                <textarea name="answer[]" class="form-control" required data-validation-required-message="This field is required">{{$module->description}}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <h5>File <span class="required">*</span></h5>
                                                                            <div class="controls mb-1">
                                                                                <input type="file" name="userfile[]" class="form-control" required data-validation-required-message="This field is required">
                                                                                <input type="hidden" name="file_old[]" class="form-control" required data-validation-required-message="This field is required" value="{{ $module->file }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="text-right">
                                                            <button type="button" class="btn btn-info" onclick="addModule()">Add More <i class="fa fa-plus position-right"></i></button>
                                                            <button type="submit" class="btn btn-success">Submit <i class="fa fa-thumbs-o-up position-right"></i></button>
                                                            <button type="reset" class="btn btn-danger">Reset <i class="fa fa-refresh position-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane container fade" id="Skills">
                                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('admin.courses.update.skill', ['id'=>$course->id]) }}" novalidate>
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group addSkill">
                                                            <h5>Skills <span class="required">*</span></h5>
                                                            @if ($course->courseSkill)
                                                                @foreach ($course->courseSkill as $skill)
                                                                <div class="controls mb-1">
                                                                    <input type="text" name="text[]" class="form-control" required data-validation-required-message="This field is required" value="{{$skill->title}}">
                                                                </div>
                                                                @endforeach
                                                            @endif
                                                        </div>

                                                        <div class="text-right">
                                                            <button type="button" class="btn btn-info" onclick="addSkill()">Add More <i class="fa fa-plus position-right"></i></button>
                                                            <button type="submit" class="btn btn-success">Submit <i class="fa fa-thumbs-o-up position-right"></i></button>
                                                            <button type="reset" class="btn btn-danger">Reset <i class="fa fa-refresh position-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane container fade" id="Tools">
                                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('admin.courses.update.tools', ['id'=>$course->id]) }}" novalidate>
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group addTools">
                                                            <h5>Tools Icon <span class="required">*</span></h5>
                                                            <div class="row">
                                                            @if ($course->courseTool)
                                                                @foreach ($course->courseTool as $tools)
                                                                    <div class="col-md-2 mb-2">
                                                                        <img src="{{asset($tools->image)}}" class="w-100 h-150" ondblclick="gotoUrl('{{ route('admin.courses.update.tools.delete', ['id'=>$tools->id]) }}')">
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                            </div>
                                                        </div>

                                                        <div class="text-right">
                                                            <button type="button" class="btn btn-info" onclick="addTools()">Add More <i class="fa fa-plus position-right"></i></button>
                                                            <button type="submit" class="btn btn-success">Submit <i class="fa fa-thumbs-o-up position-right"></i></button>
                                                            <button type="reset" class="btn btn-danger">Reset <i class="fa fa-refresh position-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane container fade" id="Fees">
                                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('admin.courses.update.fee', ['id'=>$course->id]) }}" novalidate>
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row addFee">
                                                            @if ($course->courseFee)
                                                                @foreach ($course->courseFee as $fee)
                                                                    <div class="col-lg-12 col-md-12 myCard mb-3">
                                                                        <div class="form-group">
                                                                            <h5>Date<span class="required">*</span></h5>
                                                                            <div class="controls mb-1">
                                                                                <input type="text" name="date[]" class="form-control" required data-validation-required-message="This field is required" value="{{$fee->date}}">
                                                                                <input type="hidden" name="id[]" value="{{$fee->id}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <h5>Schedule<span class="required">*</span></h5>
                                                                            <div class="controls mb-1">
                                                                                <input type="text" name="session[]" class="form-control" required data-validation-required-message="This field is required" value="{{$fee->session}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <h5>Weekday<span class="required">*</span></h5>
                                                                            <div class="controls mb-1">
                                                                                <input type="text" name="weekday[]" class="form-control" required data-validation-required-message="This field is required" value="{{$fee->weekend}}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="text-right">
                                                            <button type="button" class="btn btn-info" onclick="addFee()">Add More <i class="fa fa-plus position-right"></i></button>
                                                            <button type="submit" class="btn btn-success">Submit <i class="fa fa-thumbs-o-up position-right"></i></button>
                                                            <button type="reset" class="btn btn-danger">Reset <i class="fa fa-refresh position-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane container fade" id="Career_Services">...</div>
                                        <div class="tab-pane container fade" id="Faq">
                                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('admin.courses.update.faq', ['id'=>$course->id]) }}" novalidate>
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row addFaq">
                                                            @if ($course->faq)
                                                                @foreach ($course->faq as $faq)
                                                                    <div class="col-lg-12 col-md-12 myCard mb-3">
                                                                        <div class="form-group">
                                                                            <h5>Question<span class="required">*</span></h5>
                                                                            <div class="controls mb-1">
                                                                                <input type="text" name="question[]" class="form-control" required data-validation-required-message="This field is required" value="{{$faq->title}}">
                                                                                <input type="hidden" name="id[]" value="{{$faq->id}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <h5>Answer <span class="required">*</span></h5>
                                                                            <div class="controls mb-1">
                                                                                <textarea name="answer[]" class="form-control" required data-validation-required-message="This field is required">{{$faq->description}}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="text-right">
                                                            <button type="button" class="btn btn-info" onclick="addFaq()">Add More <i class="fa fa-plus position-right"></i></button>
                                                            <button type="submit" class="btn btn-success">Submit <i class="fa fa-thumbs-o-up position-right"></i></button>
                                                            <button type="reset" class="btn btn-danger">Reset <i class="fa fa-refresh position-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('js')
    <div class="modal" id="addBenifit">
        <div class="modal-dialog modal-dialog-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Benifits</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{ route('admin.courses.update.benifit.save', ['id'=>$course->id]) }}" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <h5>Title<span class="required">*</span></h5>
                                    <div class="controls mb-1">
                                        <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <h5>Icon <span class="required">*</span></h5>
                                    <div class="controls mb-1">
                                        <input type="file" name="icon_img" accept="image/*" class="form-control" required data-validation-required-message="This field is required">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <h5>Status <span class="required">*</span></h5>
                                    <div class="controls mb-1">
                                        <select name="type" class="custom-select" required data-validation-required-message="This field is required">
                                            <option value="" selected>Select Type</option>
                                            <option value="feature">Feature</option>
                                            <option value="benifit">Benifit</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @csrf
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Save</button>
                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal" id="editBenifit">
        <div class="modal-dialog modal-dialog-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Benifits</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{ route('admin.courses.update.benifit.edit', ['id'=>$course->id]) }}" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <h5>Title<span class="required">*</span></h5>
                                    <div class="controls mb-1">
                                        <input type="text" name="text" class="form-control" id="editBenifitTitle" required data-validation-required-message="This field is required">
                                        <input type="hidden" name="id" id="editBenifitId" required>
                                        <input type="hidden" name="icon_img_old" id="editBenifitImg" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <h5>Icon <span class="required">*</span></h5>
                                    <div class="controls mb-1">
                                        <input type="file" name="icon_img" accept="image/*" class="form-control" required data-validation-required-message="This field is required">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <h5>Status <span class="required">*</span></h5>
                                    <div class="controls mb-1">
                                        <select name="type" class="custom-select" id="editBenifitType" required data-validation-required-message="This field is required">
                                            <option value="" selected>Select Type</option>
                                            <option value="feature">Feature</option>
                                            <option value="benifit">Benifit</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @csrf
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Save</button>
                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! $validator !!}
@endsection
