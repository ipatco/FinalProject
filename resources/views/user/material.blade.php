@extends('user')
@section('title', 'My Course Materials')

@section('css')
@endsection

@section('page')
<div class="row">
    <div class="col-lg-12 col-md-12 mb-md-0">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Course Materials</h6>
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
                            @foreach ($materials as $material)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="text-dark font-weight-bold">{{ $material->course->title }}</td>
                                <td class="text-dark font-weight-bold">{{ $material->instructor->name }}</td>
                                <td class="text-dark font-weight-bold">
                                    <a href="{{ asset($material->file) }}" class="btn btn-info btn-sm" download="">Download Material</a>
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
