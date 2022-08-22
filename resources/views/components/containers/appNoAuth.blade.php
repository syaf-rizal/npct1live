<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('images/32.ico') }}" />
    <title>@yield('pageTitle')</title>
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="NPCT1" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/theme/vendor.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/theme/custom.min.css') }}" type="text/css">
    <script src="{{ URL::asset('js/theme/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/theme/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/theme/vendor.min.js') }}"></script>
    <script src="{{ URL::asset('js/theme/moment.js') }}"></script>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            @yield('content')
        </div>
    </div>
    <div class="loading-custom">
        <div class="loading-custom-content"></div>
    </div>
    <script src="{{ URL::asset('js/theme/bootbox.all.min.js') }}"></script>
    <script src="{{ URL::asset('js/theme/restrict.js') }}"></script>
</body>
</html>