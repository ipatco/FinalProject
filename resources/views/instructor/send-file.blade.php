@extends('instructor')
@section('title', 'Send File to Students')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-fileinput/css/fileinput.css') }}">
<style>
    .file-caption-name{
        height: 42px;
    }
</style>
@endsection

@section('page')
    <div class="row">
        <div class="col-xl-12 col-sm-12 mb-xl-0 ">
            {{-- error --}}
            @if ($errors->any())
                <div class="alert alert-danger my-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-white">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- Success --}}
            @if (session('success'))
                <div class="alert alert-success text-white my-4">
                    {{ session('success') }}
                </div>
            @endif
            {{-- failure --}}
            @if (session('failure'))
                <div class="alert alert-danger text-white my-4">
                    {{ session('failure') }}
                </div>
            @endif
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12 col-md-12 mt-4 mb-4">
            <div class="card z-index-2  ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                        <h5 class="px-3 text-white">Send File to Student</h5>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('instructor.students.file.upload', ['student' => $id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input id="file-demo" type="file" class="file" data-preview-file-type="any" name="file">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                {{-- Title --}}
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                                <div class="form-group  input-group-outline my-3">
                                    <label for="course_id">Course</label>
                                    <select class="form-control" name="course_id" id="course_id" style="border: 1px solid rgb(138, 138, 138)">
                                        <option value="">Select Course</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->course->id }}">{{ $course->course->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-block">Upload File</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 mt-4 mb-4">
            <div class="card z-index-2  ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                        <h5 class="px-3 text-white">List of Materials</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Course</th>
                                    <th>Date Uploaded</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($files as $file)
                                    <tr>
                                        <td>{{ $file->title }}</td>
                                        <td>{{ $file->description }}</td>
                                        <td>{{ $file->course->title }}</td>
                                        <td>{{ $file->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ asset($file->file) }}" class="btn btn-success btn-sm" download="">Download</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/plugins/bootstrap-fileinput/js/fileinput.min.js') }}"></script>
    <script>
        $("#file-demo").fileinput({
            required: true,
            showPreview: false,
            showUpload: false,
            showPreview: true,
        });
    </script>
@endsection
