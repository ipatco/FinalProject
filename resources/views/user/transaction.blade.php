@extends('user')
@section('title', 'Transactions')

@section('css')
@endsection

@section('page')


    <div class="row">
        <x-user-mobile-nav></x-user-mobile-nav>
        <div class="col-lg-12">
            <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
                <h4 class="title float-left">Transactions</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.account') }}">My Account</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Transactions</li>
                </ol>
            </nav>
        </div>
        <div class="col-xl-12">
            <div class="application_statics" style="min-height: 600px;">
                <h4>Your Transactions</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Course Name</th>
                                <th>Purchased on</th>
                                <th>Amount</th>
                                <th>Method</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($transactions)
                            @php
                                $index = 1;
                            @endphp
                                @foreach ($transactions as $transaction)
                                    <tr>
                                        <td>{{ $index++ }}</td>
                                        <td>{{ $transaction->course->title }}</td>
                                        <td>{{ date('M d, Y', strtotime($transaction->created_at)) }}</td>
                                        <td>{{ $transaction->amount }}</td>
                                        <td>{{ $transaction->method }}</td>
                                        <td>{!! $transaction->verified == 'verified'?'<span class="badge badge-success">Verified</span>':'<span class="badge badge-danger">Unverified</span>' !!}</td>
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
