@extends('user')
@section('title', 'Message')

@section('pagse')


    <div class="row">
        <x-user-mobile-nav></x-user-mobile-nav>
        <div class="col-lg-12">
            <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
                <h4 class="title float-left">Message</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.account') }}">My Account</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Message</li>
                </ol>
            </nav>
        </div>
        <div class="col-xl-12">
            <div class="application_statics" style="min-height: 600px;">
                <h4>Your Messages</h4>
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card chat-app">
                            <div id="plist" class="people-list">
                                {{-- <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search...">
                                </div> --}}
                                <ul class="list-unstyled chat-list mt-2 mb-0">
                                    @if ($instructors)
                                        @foreach ($instructors as $teacher)
                                            <li class="clearfix" onclick="location.href='{{ route('user.account.message') }}?id={{$teacher->instructor->id }}'" >
                                                <img src="{{ asset('assets/user.jpg') }}" alt="avatar">
                                                <div class="about">
                                                    <div class="name">{{ $teacher->instructor->name }}</div>
                                                    <div class="status">Instructor</div>
                                                </div>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            @if($instructor)
                            <div class="chat">
                                <div class="chat-header clearfix">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                                <img src="{{ asset('assets/user.jpg') }}" alt="avatar">
                                            </a>
                                            <div class="chat-about">
                                                <h6 class="m-b-0">{{ $instructor->name }}</h6>
                                                <small>Instructor</small>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 hidden-sm text-right">
                                            <a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-image"></i> Send Images</a>
                                            <a href="javascript:void(0);" class="btn btn-outline-info"><i class="fa fa-file"></i> Send File</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-history" style="max-height: 600px">
                                    <ul class="m-b-0">
                                        @if ($messages)
                                            @foreach ($messages as $message)
                                                @if ($message->sender_id == $user)
                                                    @if ($message->type == 'text')
                                                        <li class="clearfix my">
                                                            <div class="message-data text-right">
                                                                <span class="message-data-time">{{ date('M d, Y h:i a', strtotime($message->created_at)) }}</span>
                                                            </div>
                                                            <div class="message other-message float-right">{!! $message->message !!}</div>
                                                        </li>
                                                    @else
                                                    @endif
                                                @else
                                                    @if ($message->type == 'text')
                                                        <li class="clearfix his">
                                                            <div class="message-data">
                                                                <span class="message-data-time">{{ date('M d, Y h:i a', strtotime($message->created_at)) }}</span>
                                                            </div>
                                                            <div class="message my-message">{!! $message->message !!}</div>
                                                        </li>
                                                    @else
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                                <div class="chat-message clearfix">
                                    <form action="{{ route('user.account.message.send', ['receiver'=> $instructor->id, 'sender'=> $user]) }}" method="post">
                                        <div class="input-group mb-0">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-send"></i></span>
                                            </div>
                                            @csrf
                                            <textarea class="form-control" placeholder="Enter text here..." name="message"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info mt-2">Send Message</button>
                                    </form>
                                </div>
                            </div>
                            @else
                            <div class="chat">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Choose Instructor</h2>
                                    </div>
                                </div>
                            </div>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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
                        @if ($instructors)
                            @foreach ($instructors as $teacher)
                            <a href="{{ route('user.account.message') }}?id={{$teacher->instructor->id }}" class="list-group-item list-group-item-action">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm mr-5">
                                            <img src="{{ asset('assets/user.jpg') }}" alt="avatar" class="avatar-img rounded-circle">
                                        </div>
                                        <div>
                                            <div class="font-weight-bold">{{ $teacher->instructor->name }}</div>
                                            <small class="d-block text-muted">{{ $teacher->instructor->email }}</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        @endif
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
                                            <h5 class="text-muted">{{ $instructor->name }}</h5>
                                        </div>
                                        <div class="col-lg-6 col-md-6 text-right">
                                            <a href="{{ route('user.account.message') }}" class="btn btn-primary">Back</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="chat-conversation">
                                                <ul class="conversation-list slimscroll" style="max-height: 470px; min-height: 280px;">
                                                    @if ($messages)
                                                        @foreach ($messages as $message)
                                                        <li class="clearfix snone">
                                                            <div class="chat-avatar">
                                                                <div class="chat-from">
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
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <form action="{{ route('user.account.message.send', ['receiver'=> $instructor->id, 'sender'=> $user]) }}" method="POST">
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
                            <h5 class="text-muted">Select a instructor to start messaging</h5>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
