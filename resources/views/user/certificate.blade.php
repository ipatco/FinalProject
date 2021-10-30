@extends('user')
@section('title', 'Certificates')

@section('css')
@endsection

@section('page')


    <div class="row">
        <x-user-mobile-nav></x-user-mobile-nav>
        <div class="col-lg-12">
            <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
                <h4 class="title float-left">Certificates</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.account') }}">My Account</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Certificates</li>
                </ol>
            </nav>
        </div>
        <div class="col-xl-12">
            <div class="application_statics" style="min-height: 600px;">
                <h4>Your Certificates</h4>
                <p>Nothing found!</p>
            </div>
        </div>
    </div>
@endsection