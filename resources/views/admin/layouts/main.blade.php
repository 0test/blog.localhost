<!DOCTYPE HTML>
<html>

<head>
    <title>@yield('title') </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="is-preload admin">
    <div id="wrapper">
        <div id="main">
            <div class="inner">
                @include('admin.parts.header')
                @yield('content')
            </div>
        </div>
        @include('admin.parts.sidebar')
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/browser.min.js') }}"></script>
    <script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/util.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.min.js') }}"></script>
    @stack('custom-scripts')
</body>
</html>
