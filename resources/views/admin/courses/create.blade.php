@extends('admin')

@section('title', 'Add Course')
@section('css')
    
@endsection

@section('page')
    <div class="main-content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content-header">Add Course</div>
                </div>
            </div>
            <!-- Input Validation start -->
            <section class="input-validation">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add New Course</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('admin.courses.save') }}" novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <h5>Title<span class="required">*</span></h5>
                                                    <div class="controls mb-1">
                                                        <input type="text" name="title" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <h5>Slug <span class="required">*</span></h5>
                                                    <div class="controls mb-1">
                                                        <input type="text" name="slug" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <h5>Description <span class="required">*</span></h5>
                                                    <div class="controls mb-1">
                                                        <textarea name="description" class="form-control" required data-validation-required-message="This field is required"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <h5>Preview Video URL <span class="required">*</span></h5>
                                                    <div class="controls mb-1">
                                                        <input type="text" name="preview_video" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <h5>Cover Image <span class="required">*</span></h5>
                                                    <div class="controls mb-1">
                                                        <input type="file" name="cover_img" accept="image/*" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <h5>Certification Description <span class="required">*</span></h5>
                                                    <div class="controls mb-1">
                                                        <textarea name="certification" class="form-control" required data-validation-required-message="This field is required"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <div class="form-group">
                                                    <h5>Certificate Image<span class="required">*</span></h5>
                                                    <div class="controls mb-1">
                                                        <input type="file" name="certificate_img" accept="image/*" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <div class="form-group">
                                                    <h5>Price <span class="required">*</span></h5>
                                                    <div class="controls mb-1">
                                                        <input type="text" name="price" class="form-control" required data-validation-required-message="This field is required">
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
                                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <h5>Curriculum Description <span class="required">*</span></h5>
                                                    <div class="controls mb-1">
                                                        <textarea name="curriculum" class="form-control" required data-validation-required-message="This field is required"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <h5>Status <span class="required">*</span></h5>
                                                    <div class="controls mb-1">
                                                        <select name="status" class="custom-select" required data-validation-required-message="This field is required">
                                                            <option value="" selected>Select Status</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">Draft</option>
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
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! $validator !!}
@endsection
