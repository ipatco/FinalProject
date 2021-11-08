@extends('instructor')
@section('title', 'Join Meeting')

@section('css')
<link rel='stylesheet' href='{{ asset('webrtc/css/style.css') }}'>
@endsection

@section('page')
    <div class="row mt-4">
        <div class="col-lg-3 col-md-3 mt-4 mb-4">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <h5 class="px-3 text-white">Message</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class='messenger_container'>
                        <div class='messages_container' id='messages_container'></div>
                        <div class='new_message_container display_none' id='new_message'>
                            <input class='new_message_input' id='new_message_input' type='text' placeholder="Type your message..."></input>
                            <button class='send_message_button' id='send_message_button'>
                                <img class='send_message_button_image' src='{{ asset('webrtc/utils/images/sendMessageButton.png') }}'></image>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 mt-4 mb-4">
            <div class="card z-index-2  ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                        <h5 class="px-3 text-white">Meeting</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class='call_container'>
                        <div class='videos_container'>
                            <div id='video_placeholder' class='videos_placeholder'>
                                <img src='{{ asset('webrtc/utils/images/logo.png') }}'></img>
                            </div>
                            <video class='remote_video display_none' muted autoplay id='remote_video'></video>
                            <div class='local_video_container'>
                                <video class="local_video local-video mirror-mode" id='local' volume='0' autoplay muted></video>
                            </div>
                            <div class='call_buttons_container display_none' id='call_buttons'>
                                <button class='call_button_small' id='toggle-mute'>
                                    <img src='{{ asset('webrtc/utils/images/mic.png') }}' id='mic_button_image'></img>
                                </button>
                                <button class='call_button_small' id='toggle-video'>
                                    <img src='{{ asset('webrtc/utils/images/camera.png') }}' id='camera_button_image'></img>
                                </button>
                                <button class='call_button_large' id='hang_up_button'>
                                    <img src='{{ asset('webrtc/utils/images/hangUp.png') }}'></img>
                                </button>
                                <button class='call_button_small' id='share-screen'>
                                    <img src='{{ asset('webrtc/utils/images/switchCameraScreenSharing.png') }}'></img>
                                </button>
                                <button class='call_button_small' id='record'>
                                    <img src='{{ asset('webrtc/utils/images/recordingStart.png') }}'></img>
                                </button>
                            </div>
                            <div class='finish_chat_button_container display_none' id='finish_chat_button_container'>
                                <button class='call_button_large' id='finish_chat_call_button'>
                                    <img src='{{ asset('webrtc/utils/images/hangUp.png') }}'></img>
                                </button>
                            </div>
                            <div class='video_recording_buttons_container display_none' id='video_recording_buttons'>
                                <button id='pause_recording_button'>
                                    <img src='{{ asset('webrtc/utils/images/pause.png') }}'></img>
                                </button>
                                <button id='resume_recording_button' class='display_none'>
                                    <img src='{{ asset('webrtc/utils/images/resume.png') }}'></img>
                                </button>
                                <button id='stop_recording_button'>
                                    Stop recording
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="module" src='{{ asset('webrtc/js/chat.js') }}'></script>
    <script type="module" src='{{ asset('webrtc/js/events.js') }}'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/7.3.0/adapter.min.js" integrity="sha256-2qQheewaqnZlXJ3RJRghVUwD/3fD9HNqxh4C+zvgmF4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.min.js'></script>
@endsection
