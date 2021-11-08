@extends('user')
@section('title', 'Transactions')

@section('css')
@endsection

@section('page')
<div class="row">
    <div class="col-lg-12 col-md-12 mb-md-0">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Transaction History</h6>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th width=10>#</th>
                                <th>Course Name</th>
                                <th>Payment on</th>
                                <th>Amount</th>
                                <th>Method</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transactions as $transaction)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $transaction->course->title }}</td>
                                <td>{{ $transaction->created_at->format('d M Y') }}</td>
                                <td>{{ $transaction->amount }}</td>
                                <td>{{ ucwords($transaction->method) }}</td>
                                <td>
                                    @if($transaction->verified == 'verified')
                                    <span class="badge badge-sm bg-gradient-success">{{ $transaction->verified }}</span>
                                    @elseif($transaction->verified == 'failed')
                                    <span class="badge badge-sm bg-gradient-danger">{{ $transaction->verified }}</span>
                                    @endif
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
