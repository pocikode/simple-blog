<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Blog</title>

    <!-- App CSS -->
    <link href="{{ asset('css/app.css') }}" rel='stylesheet'>
    
    <!-- Blog CSS -->
    <link href="{{ asset('css/blog.css') }}" rel='stylesheet'>
</head>
<body>

    <!-- Navigation -->
    @include('component.nav')
    
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Content -->
            <div class="col-md-8">
                @yield('content')
            </div>

            <!-- Sidebar -->
            <div class="col-md-4">
                @include('component.side')
            </div>
        </div>
    </div>

    <!-- JS Required -->
    <script src="js/app.js"></script>
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
    var OneSignal = window.OneSignal || [];
    OneSignal.push(function() {
        OneSignal.init({
        appId: "2156a6ea-cd4c-453e-b99f-789efd1536b4",
        });
    });
    </script>
</body>
</html>
