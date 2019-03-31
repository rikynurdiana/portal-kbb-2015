<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portal KBB | Website Resmi Kabupaten Bandung Barat</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/rsz_logo_kbb.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('images/rsz_logo_kbb.png') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('main/css/normalize.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('main/css/base.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('main/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('main/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('main/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('main/css/fontastic.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('main/css/colors/red.css') }}" id="colors">
        @yield('css')
    </head>
    <body>
        @yield('gotop')
        <header>
            @include('main.navmenu')
        </header>
        @yield('video')
        @yield('welcometext')
        @yield('pembatas1')
        @yield('konten')
        @yield('apps')
        @yield('pembatas2')
        @yield('galery')
        @include('main.footer')
        @yield('js')
        <script type="text/javascript" src="{{ asset('main/js/modernizr.js') }}"></script>
        <script type="text/javascript" src="{{ asset('main/js/webfont.js') }}"></script>
        <script type="text/javascript" src="{{ asset('main/js/jquery.moutheme.js') }}"></script>
        <script type="text/javascript" src="{{ asset('main/js/form.js') }}"></script>
        <script type="text/javascript" src="{{ asset('main/js/jquery.mixitup.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('main/js/wow.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('main/js/affix.js') }}"></script>
        <script type="text/javascript" src="{{ asset('main/js/tweecool.js') }}"></script>
        <script type="text/javascript" src="{{ asset('main/js/jquery.stellar.js') }}"></script>
        <script type="text/javascript" src="{{ asset('main/js/default.js') }}"></script>
    </body>
</html>