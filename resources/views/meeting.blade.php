<!DOCTYPE html>
<html>
    <head>
        <title>Multi-User Video Call</title>

        <meta content="width=device-width, initial-scale=1" name="viewport" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel='stylesheet' href='{{ asset('webrtc/css/app.css') }}' type="text/css">

        <script type="module" src='{{ asset('webrtc/js/chat.js') }}'></script>
        <script type="module" src='{{ asset('webrtc/js/events.js') }}'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/7.3.0/adapter.min.js" integrity="sha256-2qQheewaqnZlXJ3RJRghVUwD/3fD9HNqxh4C+zvgmF4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.min.js'></script>
        <style>
            .call_buttons_container {
  position: fixed;
  width: 395px;
  height: 75px;
  bottom: 10px;
  left: calc(50% - 200px);
  display: flex;
  justify-content: space-between;
  align-items: center;
  z-index: 99999999;
}
.call_button_small {
  width: 50px;
  height: 50px;
  background: rgba(0, 0, 0, 0.2);
  border-radius: 50px;
  transition: 0.3s;
}

.call_button_large {
  width: 75px;
  height: 75px;
  border-radius: 75px;
  background: #fc5d5b;
  transition: 0.3s;
}
        </style>
    </head>

    <body>
        <input type="hidden" id="user_name" value="{{ auth()->user()->name }}">
        <input type="hidden" id="meeting_id" value="{{ $meeting->meeting_id }}">
        <div class="custom-modal" id='recording-options-modal'>
            <div class="custom-modal-content">
                <div class="row text-center">
                    <div class="col-md-6 mb-2">
                        <span class="record-option" id='record-video'>Record video</span>
                    </div>
                    <div class="col-md-6 mb-2">
                        <span class="record-option" id='record-screen'>Record screen</span>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-outline-danger" id='closeModal'>Close</button>
                    </div>
                </div>
            </div>
        </div>


        <nav class="navbar fixed-top bg-info rounded-0 d-print-none">
            <div class="text-white">Video Call</div>

            {{-- <div class="pull-right room-comm" hidden>
                <button class="btn btn-sm rounded-0 btn-no-effect" id='toggle-video' title="Hide Video">
                    <i class="fa fa-video text-white"></i>
                </button>

                <button class="btn btn-sm rounded-0 btn-no-effect" id='toggle-mute' title="Mute">
                    <i class="fa fa-microphone-alt text-white"></i>
                </button>

                <button class="btn btn-sm rounded-0 btn-no-effect" id='share-screen' title="Share screen">
                    <i class="fa fa-desktop text-white"></i>
                </button>

                <button class="btn btn-sm rounded-0 btn-no-effect" id='record' title="Record">
                    <i class="fa fa-dot-circle text-white"></i>
                </button>

                <button class="btn btn-sm text-white pull-right btn-no-effect" id='toggle-chat-pane'>
                    <i class="fa fa-comment"></i> <span class="badge badge-danger very-small font-weight-lighter" id='new-chat-notification' hidden>New</span>
                </button>

                <button class="btn btn-sm rounded-0 btn-no-effect text-white">
                    <a href="/" class="text-white text-decoration-none"><i class="fa fa-sign-out-alt text-white" title="Leave"></i></a>
                </button>
            </div> --}}
        </nav>

        <div class="container-fluid room-comm" hidden>
            <div class="row local-vid-div">

            </div>

            <div class="row">
                <div class="col-md-12 main" id='main-section'>
                    <div class="row mt-2 mb-2" id='videos'></div>
                    <video class="local-video mirror-mode" id='local' volume='0' autoplay muted style="z-index: 9999"></video>
                    <div class='call_buttons_container display_none' id='call_buttons'>
                        <button class='call_button_small' id='toggle-mute'>
                            <img src='{{ asset('webrtc/utils/images/mic.png') }}' id='mic_button_image'></img>
                        </button>
                        <button class='call_button_small' id='toggle-video'>
                            <img src='{{ asset('webrtc/utils/images/camera.png') }}' id='camera_button_image'></img>
                        </button>
                        <button class='call_button_large' id='hang_up_button' onclick="location.href='/'">
                            <img src='{{ asset('webrtc/utils/images/hangUp.png') }}'></img>
                        </button>
                        <button class='call_button_small' id='share-screen'>
                            <img src='{{ asset('webrtc/utils/images/switchCameraScreenSharing.png') }}'></img>
                        </button>
                        <button class='call_button_small' id='record'>
                            <img src='{{ asset('webrtc/utils/images/recordingStart.png') }}'></img>
                        </button>
                    </div>
                </div>

                <div class="col-md-3 chat-col d-print-none mb-2 bg-info" id='chat-pane' hidden>
                    <div class="row">
                        <div class="col-12 text-center h2 mb-3">CHAT</div>
                    </div>

                    <div id='chat-messages'></div>

                    <div class="row">
                        <textarea id='chat-input' class="form-control rounded-0 chat-box border-info" rows='3' placeholder="Type here..."></textarea>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
