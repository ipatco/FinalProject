@extends('instructor')
@section('title', 'Meetings')

@section('css')

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
        <div class="col-lg-3 col-md-3 mt-4 mb-4">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <h5 class="px-3 text-white">Update Profile</h5>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('instructor.meeting.create') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="input-group input-group-static">
                                    <label>Course</label>
                                    <select name="course_id" class="form-control">
                                        <option value="">Select Course</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->course->id }}">{{ $course->course->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="input-group input-group-static">
                                    <label>Students</label>
                                    <select name="user_id" class="form-control">
                                        <option value="">Select Students</option>
                                        @foreach ($students as $student)
                                            <option value="{{ $student->user->id }}">{{ $student->user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <button type="submit" class="btn btn-primary btn-block">Create meeting</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 mt-4 mb-4">
            <div class="card z-index-2  ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                        <h5 class="px-3 text-white">List of Meetings</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Course</th>
                                    <th>Student</th>
                                    <th>Student In</th>
                                    <th>Student Out</th>
                                    <th>Status</th>
                                    <th>Join</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($meetings as $meeting)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $meeting->course->title }}</td>
                                        <td>{{ $meeting->user->name }}</td>
                                        <td>{{ $meeting->student_in }}</td>
                                        <td>{{ $meeting->student_out }}</td>
                                        <td>
                                            @if ($meeting->status == 0)
                                                <span class="badge badge-sm bg-gradient-warning">Pending</span>
                                            @elseif ($meeting->status == 1)
                                                <span class="badge badge-sm bg-gradient-success">Accepted</span>
                                            @elseif ($meeting->status == 2)
                                                <span class="badge badge-sm bg-gradient-danger">Rejected</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('instructor.join.meeting', $meeting->meeting_id) }}" class="btn btn-sm btn-primary">Join</a>
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

@endsection
