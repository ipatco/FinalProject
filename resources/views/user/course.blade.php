@extends('user')
@section('title', 'My Courses')

@section('css')
@endsection

@section('page')


    <div class="row">
        <x-user-mobile-nav></x-user-mobile-nav>
        <div class="col-lg-12">
            <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
                <h4 class="title float-left">Courses</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.account') }}">My Account</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Courses</li>
                </ol>
            </nav>
        </div>
        <div class="col-xl-12">
            <div class="application_statics" style="min-height: 600px;">
                <h4>Your Courses</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Course Name</th>
                                <th>Purchased on</th>
                                <th>Instructor</th>
                                <th>Video Call</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($courses)
                            @php
                                $index = 1;
                            @endphp
                                @foreach ($courses as $course)
                                    <tr>
                                        <td>{{ $index++ }}</td>
                                        <td>{{ $course->course->title }}</td>
                                        <td>{{ date('M d, Y', strtotime($course->created_at)) }}</td>
                                        <td>{{ $course->instructor->name }}</td>
                                        <td><a href="{{ route('user.account.meeting', ['meeting'=>'xxxx-xxxx-xxxx']) }}" class="btn btn-success btn-sm">Attend Video</a></td>
                                        <td><a href="{{ route('user.account.message') }}?id={{ $course->instructor->id }}" class="btn btn-info btn-sm">Message Instructor</a></td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
