@extends('admin')

@section('title', 'Users')
@section('css')
    
@endsection

@section('page')
    <div class="main-content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content-header">Users</div>
                </div>
            </div>
            <!-- Input Validation start -->
            <section class="input-validation">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Users</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($users)
                                            @php $index = 1; @endphp
                                                @foreach ($users as $user)   
                                            <tr>
                                                <td>{{ $index++ }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone }}</td>
                                                <td>{{ $user->status == 1?'Active':'Inactive' }}</td>
                                                <td>
                                                    <a class="success p-0" data-original-title="" title="">
                                                        <i class="ft-eye font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="danger p-0" data-original-title="" title="">
                                                        <i class="ft-x font-medium-3 mr-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
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
    <script src="{{ asset('app-assets/vendors/js/jqBootstrapValidation.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/js/form-validation.js') }}" type="text/javascript"></script>
@endsection
