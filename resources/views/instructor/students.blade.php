@extends('instructor')
@section('title', 'Students')

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
        <div class="col-lg-12 col-md-12 mt-4 mb-4">
            <div class="card z-index-2  ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                        <h5 class="px-3 text-white">List of Students</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width=10>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th width=100>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $student->user->name }}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{ $student->user->email }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm">
                                            {{ $student->user->email }}
                                        </td>
                                        <td class="">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $student->user->phone }}</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('instructor.students.file', ['student' =>$student->user->id]) }}" class="btn btn-sm btn-info">Send File</a>
                                            <a href="{{ route('instructor.message') }}?id={{ $student->user->id }}" class="btn btn-sm btn-info">Message</a>
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

@endsection
