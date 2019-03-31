<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Portal KBB">
        <meta name="author" content="Kabupaten bandung Barat">
        <title>Portal KBB | Profile Pimpinan Daerah</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('profile/css/bootstrap.min.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('profile/css/font-awesome.min.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('profile/css/animate.min.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('profile/css/prettyPhoto.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('profile/css/main.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('profile/css/responsive.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('profile/css/timeline.css') }}" >
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/logo_kbb.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/logo_kbb.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/logo_kbb.png') }}">
        <link rel="shortcut icon" href="{{ asset('images/logo_kbb.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('images/logo_kbb.png') }}">
    </head>
    <body class="homepage">
        <header id="header">
            @yield('navbar')
        </header>
        @yield('slide')
        @yield('biodata')
        @yield('pendidikan')
        @yield('galery')
        @yield('organisasi')

        <section id="conatcat-info">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="pull-left">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <h2>Anda Memiliki Pertanyaan Untuk Pemda Kabupaten Bandung Barat?</h2>
                                <p>Silahkan hubungi call center layanan masyarakat kami di no telepon +6222 123 456</p>
                                <p>pada jam kerja 08.00 - 17.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="partner">
            <div class="container">
                <div class="center wow fadeInDown">
                    <h1>Kabupaten Bandung Barat</h1>
                    <h2>"CERMAT"</h2>
                    <h2 class="lead">Cerdas Rasional Maju Agamis Sehat</h2>
                    <p class="lead">Mari kita jadikan hari esok lebih baik dari hari ini</p>
                </div>
            </div>
        </section>

        @yield('footer')

        <script type="text/javascript" src="{{ asset('profile/js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('profile/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('profile/js/jquery.prettyPhoto.js') }}"></script>
        <script type="text/javascript" src="{{ asset('profile/js/jquery.isotope.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('profile/js/main.js') }}"></script>
        <script type="text/javascript" src="{{ asset('profile/js/wow.min.js') }}"></script>
        <script>
            $('#myCarousel').carousel({
                interval:   2000
            });
        </script>
    </body>
</html>