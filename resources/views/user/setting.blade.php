@extends('user')
@section('title', 'Settings')

@section('css')
@endsection

@section('page')


    <div class="row">
        <x-user-mobile-nav></x-user-mobile-nav>
        <div class="col-lg-12">
            <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
                <h4 class="title float-left">Settings</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.account') }}">My Account</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Settings</li>
                </ol>
            </nav>
        </div>
        <div class="col-xl-12">
            <div class="application_statics" style="min-height: 600px;">
                <h4>Change Password</h4>
                <div class="row">
                    <div class="offset-md-3 col-md-6">
                        <form action="{{ route('user.account.setting.password') }}" method="post" accept="enctype/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-sm-12 text-secondary">
                                    <h6 class="mb-0">New Password</h6>
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12 text-secondary">
                                    <h6 class="mb-0">Confirm Password</h6>
                                    <input type="password" class="form-control" name="password_confirmation">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" value="Save Changes">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
