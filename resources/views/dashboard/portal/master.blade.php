<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pemda KBB | Kabupaten Bandung Barat</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/rsz_logo_kbb.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('images/rsz_logo_kbb.png') }}">
        <link rel="stylesheet" href="{{ asset('/blogs/css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('/blogs/css/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('/blogs/css/weather.css') }}">
        <link rel="stylesheet" href="{{ asset('/blogs/css/colors.css') }}">
        <link rel="stylesheet" href="{{ asset('/blogs/css/typography.css') }}">
        <link rel="stylesheet" href="{{ asset('/blogs/css/style.css') }}">
        <link rel="stylesheet" type="text/css" media="(max-width:768px)" href="{{ asset('/blogs/css/responsive-0.css') }}">
        <link rel="stylesheet" type="text/css" media="(min-width:769px) and (max-width:992px)" href="{{ asset('/blogs/css/responsive-768.css') }}">
        <link rel="stylesheet" type="text/css" media="(min-width:993px) and (max-width:1200px)" href="{{ asset('/blogs/css/responsive-992.css') }}">
        <link rel="stylesheet" type="text/css" media="(min-width:1201px)" href="{{ asset('/blogs/css/responsive-1200.css') }}">
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:300,300italic,400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="wrapper" class="wide">
            <header id="header" role="banner">
                @yield('topbanner')
                @include('dashboard.portal.navmenu')
            </header>
            @yield('content')
            @include('dashboard.portal.sidebar')
        </div>
        @yield('sidebar')
        @include('dashboard.portal.footer')

        <script type="text/javascript" src="{{ asset('/blogs/js/jqueryscript.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/blogs/js/jqueryuiscript.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/blogs/js/easing.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/blogs/js/smoothscroll.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/blogs/js/magnific.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/blogs/js/bxslider.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/blogs/js/fitvids.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/blogs/js/viewportchecker.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/blogs/js/init.js') }}"></script>
    </body>
</html>
