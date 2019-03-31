<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard Portal KBB </title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/rsz_logo_kbb.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('images/rsz_logo_kbb.png') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/bootstrap.min.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/fonts/css/font-awesome.min.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/animate.min.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/custom.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/icheck/flat/green.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/datatables/tools/css/dataTables.tableTools.css') }}" >
        @yield('css')
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                @include('dashboard.leftnav')
                @include('dashboard.topnav')
                @yield('content')
            </div>
        </div>
        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>
        <script type="text/javascript" src="{{ asset('dashboard/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/chartjs/chart.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/progressbar/bootstrap-progressbar.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/nicescroll/jquery.nicescroll.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/icheck/icheck.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/custom.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/validator/validator.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/datatables/js/jquery.dataTables.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/datatables/tools/js/dataTables.tableTools.js') }}"></script>
        @yield('js')
        <script>
            $('#flash-overlay-modal').modal();
        </script>
        </body>
    </html>