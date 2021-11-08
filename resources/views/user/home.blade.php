@extends('user')
@section('title', 'My Account')

@section('css')
@endsection

@section('page')
<div class="row mb-4">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">card_membership</i>
                </div>
                <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Certificate Issued</p>
                    <h4 class="mb-0">0</h4>
                </div>
            </div>
            <div class="card-footer p-3"></div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute ">
                    <i class="material-icons opacity-10">assignment</i>
                </div>
                <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Course Materials</p>
                    <h4 class="mb-0">0</h4>
                </div>
            </div>
            <div class="card-footer p-3"></div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">menu_book</i>
                </div>
                <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Courses</p>
                    <h4 class="mb-0">{{ $course }}</h4>
                </div>
            </div>
            <div class="card-footer p-3"></div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">attach_money</i>
                </div>
                <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Amount Spent</p>
                    <h4 class="mb-0">₹ {{ $amount }}</h4>
                </div>
            </div>
            <div class="card-footer p-3"></div>
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-lg-12 col-md-12 mb-md-0">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Your Enrolled Courses</h6>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th width=10>#</th>
                                <th class="">Course Name</th>
                                <th class="">Enrolled on</th>
                                <th class="">Instructor</th>
                                <th class=""></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="text-dark font-weight-bold">{{ $course->course->title }}</td>
                                <td class="text-dark font-weight-bold">{{ $course->created_at->format('d M Y') }}</td>
                                <td class="text-dark font-weight-bold">{{ $course->instructor->name }}</td>
                                <td class="text-dark font-weight-bold">
                                    <a href="{{ route('user.account.message') }}?id={{ $course->instructor->id }}" class="btn btn-info btn-sm">Message Instructor</a>
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
<div class="row">
    <div class="col-lg-12 col-md-12 mb-md-0">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Meetings</h6>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th width=10>#</th>
                                <th class="">Course Name</th>
                                <th class="">Instructor</th>
                                <th class=""></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($meetings as $meeting)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="text-dark font-weight-bold">{{ $meeting->course->title }}</td>
                                <td class="text-dark font-weight-bold">{{ $meeting->instructor->name }}</td>
                                <td class="text-dark font-weight-bold">
                                    <a href="{{ route('user.account.meeting', ['meeting' => $meeting->meeting_id ]) }}" class="btn btn-info btn-sm">Join Meeting</a>
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
