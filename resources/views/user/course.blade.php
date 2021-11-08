@extends('user')
@section('title', 'My Courses')

@section('css')
@endsection

@section('page')
<div class="row">
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

@endsection
