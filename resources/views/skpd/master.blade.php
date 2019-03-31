<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('title')
        <link href="{{ asset('skpd/css/bootstrap.css') }}" rel="stylesheet">
        <style type="text/css">
            .sidebar-nav {
                padding: 9px 0;
            }
            .collapse-inner {
                list-style: none !important;
                margin: 0px !important;
                }
                .collapse-inner li{
                    background: #fff;
                    color: #000;
                    border-bottom: solid 1px #ccc;
                    padding: 3px 6px;
                }
                .promo-home{
                    margin-top: -30px !important;
                }
        </style>
        <link rel="stylesheet" href="{{ asset('skpd/css/bootstrap-responsive.css') }}" >
        <link rel="stylesheet" href="{{ asset('skpd/css/extension.css') }}" >
        <link rel="stylesheet" href="{{ asset('skpd/css/typography.css') }}" >
        <link rel="stylesheet" href="{{ asset('skpd/css/fonts/fontawesome/css/font-awesome.css') }}"  >
        <link rel="stylesheet" href="{{ asset('skpd/css/prettyPhoto.css') }}" >
        <link rel="stylesheet" href="{{ asset('skpd/css/style.css') }}" >
        <link rel="stylesheet" href="{{ asset('skpd/css/responsive.css') }}" >
        <link rel="shortcut icon" href="{{ asset('images/logo_kbb.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/logo_kbb.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/logo_kbb.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/logo_kbb.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('images/logo_kbb.png') }}">
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-28259415-1']);
            _gaq.push(['_setDomainName', 'designova.net']);
            _gaq.push(['_trackPageview']);
            (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
        @yield('css')
    </head>
    <body>
        <section id="master-wrapper">
            @include('skpd.navbar')
            <div class="container-fluid">
                <div class="row-fluid">
                    <header id="left-panel" class="span6 hidden-phone">
                        @yield('left-panel')
                    </header>
                    <section id="right-panel" class="span6 offset5 pad-left-extra remove-pad-on-phone">
                        @yield('home')
                        @yield('about')
                        @yield('portfolio')
                        @yield('services')
                        @yield('team')
                        @yield('blog')
                        @yield('contact')
                    </section>
                </div>
            </div>
        </section>
        <script type="text/javascript"  src="{{ asset('skpd/js/jquery.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/jquery.easing.1.3.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/bootstrap-transition.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/bootstrap-alert.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/bootstrap-modal.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/bootstrap-dropdown.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/bootstrap-scrollspy.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/bootstrap-tab.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/bootstrap-tooltip.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/bootstrap-popover.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/bootstrap-button.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/bootstrap-collapse.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/bootstrap-carousel.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/bootstrap-typeahead.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/waypoints.min.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/jquery.scrollerBird.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/jquery.prettyPhoto.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/jquery.quicksand.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/vendor/json2.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/src/jquery.collapse.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/src/jquery.collapse_storage.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/src/jquery.collapse_cookie_storage.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/jquery.backstretch.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/form-validation.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/aura.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('skpd/js/script.js') }}"></script>
        @yield('js')
    </body>
</html>