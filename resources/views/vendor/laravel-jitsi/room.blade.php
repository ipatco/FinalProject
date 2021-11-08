<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
        content="ie=edge">
    <title>{{ $room }}</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
        }

        #jitsi-container {
            height: 100vh;
            width: 100vw;
        }
    </style>
</head>

<body>
    <div id="jitsi-container"></div>

    <script src="https://{{ config('laravel-jitsi.domain') }}/external_api.js"></script>
    <script>
        const domain = "{{ config('laravel-jitsi.domain') }}"
        const options = {
            roomName: "{{ $room }}",
            width: "100%",
            height: "100%",
            parentNode: document.querySelector('#jitsi-container'),
            interfaceConfigOverwrite: {
                DEFAULT_REMOTE_DISPLAY_NAME: 'Learn To Earn User',
                SHOW_JITSI_WATERMARK: false,
                // SHOW_WATERMARK_FOR_GUESTS: true,
                APP_NAME: 'Learn To Earn',
                BRAND_WATERMARK_LINK: 'https://learn-to-earn.in/',
                disableInviteFunctions: true
            },
            configOverwrite: {
                disableInviteFunctions: true,
                liveStreamingEnabled: true
            },
            userInfo: {
                email: '{{ auth()->user()->email }}',
                displayName: '{{ auth()->user()->name }}'
            },
        };

        @if (! is_null($jwt))
        // options.jwt = '{{ $jwt }}';
        @endif

        const api = new JitsiMeetExternalAPI(domain, options);
    </script>
</body>

</html>
