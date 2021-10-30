@extends('user')
@section('title', 'My Account')

@section('css')
@endsection

@section('page')


    <div class="row">
        <x-user-mobile-nav></x-user-mobile-nav>
        <div class="col-lg-12">
            <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
                <h4 class="title float-left">Dashboard</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <div class="ff_one">
                <div class="icon"><span class="flaticon-speech-bubble"></span></div>
                <div class="detais">
                    <p>Messages</p>
                    <div class="timer">0</div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <div class="ff_one style2">
                <div class="icon"><span class="flaticon-rating"></span></div>
                <div class="detais">
                    <p>Certificate Issued</p>
                    <div class="timer">0</div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <div class="ff_one style3">
                <div class="icon"><span class="flaticon-online-learning"></span></div>
                <div class="detais">
                    <p>Courses</p>
                    <div class="timer">{{ $course }}</div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <div class="ff_one style4">
                <div class="icon"><span class="flaticon-like"></span></div>
                <div class="detais">
                    <p>Amount Spent</p>
                    <div class="timer">{{ $amount }}</div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="application_statics">
                <h4>Your Courses</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Course Name</th>
                                <th>Purchased on</th>
                                <th>Instructor</th>
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
