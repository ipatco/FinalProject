@extends('user')
@section('title', 'Change Password')

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

        <div class="offset-md-3 offset-lg-3 col-lg-6 col-md-6 mt-4 mb-4">
            <div class="card z-index-2  ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                        <h5 class="px-3 text-white">Change Password</h5>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.account.setting.password') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="input-group input-group-static">
                                    <label>Old Password</label>
                                    <input type="password" class="form-control" placeholder="Old Password" name="old_password">
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="input-group input-group-static">
                                    <label>New Password</label>
                                    <input type="password" class="form-control" placeholder="New Password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="input-group input-group-static">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <button type="submit" class="btn btn-success btn-block">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
