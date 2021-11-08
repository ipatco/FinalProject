@extends('user')
@section('title', 'My Certificates')

@section('css')
<style>
.text-right {
    text-align: right;
}
</style>
@endsection

@section('page')
<div class="row">
    <div class="col-lg-12 col-md-12 mb-md-0">
        <div class="row">
            @foreach ($certificates as $certificate)
            <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('uploads/certificates/'.$certificate->image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <h6>{{ $certificate->course->title }}</h6>
                                <a href="{{ asset('uploads/certificates/'.$certificate->image) }}" class="btn btn-primary" download="">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
