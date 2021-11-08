@extends('instructor')
@section('title', 'Message')

@section('css')
<style>
    .mr-5 {
        margin-right: 10px;
    }

.discussion {
	max-width: 100%;
	margin: 0 auto;
	display: flex;
	flex-flow: column wrap;
}

.discussion > .bubble {
	border-radius: 1em;
	padding: 0.25em 0.75em;
	margin: 0.0625em;
	max-width: 80%;
}

.discussion > .bubble.sender {
	align-self: flex-start;
	background-color: cornflowerblue;
	color: #fff;
}
.discussion > .bubble.recipient {
	align-self: flex-end;
	background-color: #efefef;
}

.discussion > .bubble.sender.first { border-bottom-left-radius: 0.1em; }
.discussion > .bubble.sender.last { border-top-left-radius: 0.1em; }
.discussion > .bubble.sender.middle {
	border-bottom-left-radius: 0.1em;
 	border-top-left-radius: 0.1em;
}

.discussion > .bubble.recipient.first { border-bottom-right-radius: 0.1em; }
.discussion > .bubble.recipient.last { border-top-right-radius: 0.1em; }
.discussion > .bubble.recipient.middle {
	border-bottom-right-radius: 0.1em;
	border-top-right-radius: 0.1em;
}
.dateStamp{
    font-size: 10px;
    color: #ccc;
    margin-left: 10px
}
.snone{
    list-style: none;
}
.text-right{
    text-align: right;
}
</style>
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
                        <h5 class="px-3 text-white">Students</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        @foreach ($students as $student)
                            <a href="{{ route('instructor.message').'?id='.$student->user->id }}" class="list-group-item list-group-item-action">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm mr-5">
                                            <img src="{{ asset('assets/user.jpg') }}" alt="avatar" class="avatar-img rounded-circle">
                                        </div>
                                        <div>
                                            <div class="font-weight-bold">{{ $student->user->name }}</div>
                                            <small class="d-block text-muted">{{ $student->user->email }}</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 mt-4 mb-4">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <h5 class="px-3 text-white">Message</h5>
                    </div>
                </div>
                <div class="card-body">
                    @if (request('id') > 0)
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <h5 class="text-muted">{{ $student->user->name }}</h5>
                                        </div>
                                        <div class="col-lg-6 col-md-6 text-right">
                                            <a href="{{ route('instructor.message') }}" class="btn btn-primary">Back</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="chat-conversation">
                                                <ul class="conversation-list slimscroll" style="max-height: 470px; min-height: 280px;">
                                                    @foreach ($messages as $message)
                                                        <li class="clearfix snone">
                                                            <div class="chat-avatar">
                                                                <div class="chat-from">
                                                                    <span class="text-muted"></span>
                                                                    <div class="chat-message discussion">
                                                                        @if ($message->sender_id == Auth::user()->id)
                                                                            <div class="bubble recipient">{{ $message->message }} <i class="dateStamp">{{ $message->created_at->diffForHumans() }}</i></div>
                                                                            @elseif($message->receiver_id == Auth::user()->id)
                                                                            <div class="bubble sender">{{ $message->message }} <i class="dateStamp">{{ $message->created_at->diffForHumans() }}</i></div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <form action="{{ route('instructor.message.send', ['receiver'=>$student->user->id]) }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" placeholder="Type your message here..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                        <div class="text-center">
                            <h5 class="text-muted">Select a student to start messaging</h5>
                        </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
@endsection

@section('js')

@endsection
