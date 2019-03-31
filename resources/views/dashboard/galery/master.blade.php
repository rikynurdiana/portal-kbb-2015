<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portal KBB</title>
        <link href="{{ asset('profile/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('profile/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset('profile/css/prettyPhoto.css')}}" rel="stylesheet">
        <link href="{{ asset('profile/css/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset('profile/css/main.css')}}" rel="stylesheet">
        <link href="{{ asset('profile/css/responsive.css')}}" rel="stylesheet">
        @yield('css')
    </head>
    <body>
        <header>
            @yield('header')
        </header>
        @yield('content')

        @include('dashboard.galery.footer')
        @yield('js')
        <script src="{{ asset('profile/js/jquery.js')}}"></script>
        <script src="{{ asset('profile/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('profile/js/jquery.prettyPhoto.js')}}"></script>
        <script src="{{ asset('profile/js/jquery.isotope.min.js')}}"></script>
        <script src="{{ asset('profile/js/main.js')}}"></script>
        <script src="{{ asset('profile/js/wow.min.js')}}"></script>
    </body>
</html>