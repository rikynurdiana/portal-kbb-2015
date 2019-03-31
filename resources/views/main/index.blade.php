@extends('main.master')

@section('css')
    <link rel='stylesheet' type='text/css' href="{{ asset('lightbox/simplelightbox.min.css') }}" >
    <link rel='stylesheet' type='text/css' href="{{ asset('default/css/bootstrap.min.css') }}" >
    <link rel='stylesheet' type='text/css' href="{{ asset('default/css/style.css') }}" >
    <link rel="stylesheet" type="text/css" media="(min-width:769px) and (max-width:992px)" href="{{ asset('/blogs/css/responsive-768.css') }}">
    <link rel="stylesheet" type="text/css" media="(min-width:993px) and (max-width:1200px)" href="{{ asset('/blogs/css/responsive-992.css') }}">
    <link rel="stylesheet" type="text/css" media="(min-width:1201px)" href="{{ asset('/blogs/css/responsive-1200.css') }}">
@endsection

@section('gotop')
    <div class="w-hidden-small w-hidden-tiny w-clearfix go-top" data-ix="move-top-btn">
        <a class="w-inline-block button btn-top" href="#top">
            <i class="fa fa-arrow-up"></i>
        </a>
    </div>
@endsection

@section('video')
    <section class="w-section section video">
        <div class="video-wrapper">
            <div class="w-embed w-hidden-small w-hidden-tiny embed-video">
                <video autoplay loop style="width:100%; height: auto; position:absolute; z-index: -1;">
                    <source src="images/video2.webm" type="video/mp4">
                    <source src="images/video2.webm" type="video/webm">
                    <img src="images/video2.webm" alt="tunel">
                </video>

                <div class="video-overlay">
                    <div class="w-container container-inside-v">
                        <div class="w-row">
                            <br><br>
                            <div class="col-md-4 col-sm-6">
                                <div class="wow animated fadeInRightBig animation-delay-5">
                                    <img src="{{ asset('images/b1.png') }}" height="500px">
                                </div>
                            </div>
                            <div class="anim-wrapper">
                                <div class="wow swing" data-wow-delay="1s">
                                    <div class="col-md-4 col-sm-6"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="wow animated fadeInLeftBig animation-delay-5">
                                    <img src="{{ asset('images/b2.png') }}" height="500px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arrow"></div>
        </div>
    </section>
@endsection

@section('welcometext')
    <section class="about" id="about">
        <div class="container">
            <div class="row about-us">
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInLeft animated">
                    <h2>kabupaten bandung barat <strong><span></span></strong></h2><br>
                    <p><span>KBB</span>Website resmi kabupaten bandung barat. menyajikan berbagai macam informasi tentang pemerintahan kabupaten bandung barat. Mulai dari Potensi Daerah, Berita Lokal, Pengumuman Kegiatan, Wikipedia bandung Barat.</p>
                    <p>Bandung Barat Cermat. Cerdas Rasional Maju Agamis Sehat. Marilah kita dukung pembangunan daerah dengan berjuang bersama memajukan daerah kabupaten bandung barat bersama-sama. Mari kita jadikan hari esok lebih baik dari hari ini.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInRight animated">
                    <div class="anim-wrapper">
                        <div class="gallery">
                            <a href="{{ asset('images/bg-kbb.jpg') }}"><img src="{{ asset('images/bg-kbb.jpg') }}"width="100%"/><i class="icon-magnifying-glass"></i></a>
                        </div>
                    </div>
                    <div class="shadow"><img src="{{ asset('images/shadow-3.png') }}" alt="shadow-3.png"></div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
@endsection

@section('pembatas1')
    <div class="call-to-action">
        <div class="w-container">
            <div class="w-row center">
                <div class="anim-wrapper">
                    <div class="wow bounceInRight" data-wow-delay="1s">
                        <div class="w-col w-col-9 w-col-stack">
                            <h4>Selamat Datang di Website Resmi Pemerintah Kabupaten Bandung Barat</h4>
                        </div>
                    </div>
                </div>
                <div class="w-col w-col-3 w-col-stack left-aglin-column cetner">
                    <a class="w-clearfix w-inline-block button btn-line btn-small wow shake" data-wow-delay="0.3s" href="/profile-kbb">
                        <div class="btn-ico">
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="btn-txt">Profile Bandung Barat</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="shadow"><img src="{{ asset('images/shadow-3.png') }}" alt="shadow-3.png"></div>
@endsection

@section('konten')
    <section class="w-section section light-gray">
        <div class="w-container">
            <div class="w-row">
                <div class="w-col w-col-7 w-col-stack">
                    <div class="anim-wrapper">
                        <div class="wow flipInX" data-wow-delay="0.5s">
                            <div class="row">
                                <div class="w-tabs tab-slider" data-duration-in="300" data-duration-out="100">
                                    <div class="w-tab-content">
                                        @foreach( $berita as $beritas )
                                            <div class="w-tab-pane" data-w-tab="Tab {{ $beritas->id }}">
                                                <div>
                                                    <div class="anim-wrapper">
                                                        <a href="/berita/{{ $beritas->id }}/show"><img href="/berita/{{ $beritas->id }}/show" src="{{ asset($beritas->gambar) }}" alt="{{ $beritas->judul }}" width="665" height="auto"></a>
                                                    </div>
                                                    <div class="w-hidden-small w-hidden-tiny side-cont-tab" data-ix="side-tab">
                                                        <div>
                                                        <h7 class="h-tb"><small>| {{ $beritas->created_at->format('d-M-Y') }} | Diposting oleh {{ $beritas->nama }} | {{ $beritas->skpd }} |</small></h7>
                                                            <h7 class="h-tb"><a class="tab-link-caption" href="berita/{{ $beritas->id }}/show"><br xmlns="http://www.w3.org/1999/xhtml">{{ $beritas->judul }}</a></h7>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="w-tab-menu w-clearfix">
                                        @foreach( $berita as $beritas )
                                            <a class="w-tab-link w--current w-inline-block tab-slide" data-w-tab="Tab {{ $beritas->id }}">
                                            <div class="w-clearfix">
                                                <div class="tab-sl-wrapper">
                                                    <img src="{{ asset($beritas->gambar) }}" alt="{{ asset($beritas->gambar) }}" width="113px">
                                                </div>
                                            </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="shadow"><img src="{{ asset('images/shadow-3.png') }}" alt="shadow-3.png"></div>
                            </div>
                            <center><a class="fa fa-newspaper-o link" href="/berita/list"> Lihat Semua Berita →</a></center><br><br>
                        </div>
                    </div>
                </div>
                <div class="anim-wrapper">
                    <div class="wow bounceInLeft" data-wow-delay="0.5s">
                        <div class="w-col w-col-5 w-col-stack res-space">
                            <div class="w-tabs" data-duration-in="300" data-duration-out="100">
                                <div class="w-tab-menu">
                                    <a class="w-tab-link  w-clearfix w-inline-block tab" data-w-tab="Tab 1">
                                    <div class="li-ico tab-ico">
                                        <i class="fa fa-institution"></i>
                                    </div>
                                    <center><div class="tab-txt">Media Masa</div></center>
                                    </a>
                                    <a class="w-tab-link w--current w-clearfix w-inline-block tab" data-w-tab="Tab 2">
                                    <div class="li-ico tab-ico">
                                        <i class="fa fa-street-view"></i>
                                    </div>
                                    <center><div class="tab-txt">Pengumuman</div></center>
                                    </a>
                                </div>
                                <div class="shadow"><img src="{{ asset('images/shadow-3.png') }}" alt="shadow-3.png"></div>
                                <div class="w-tab-content tab-content">
                                    <div class="w-tab-pane " data-w-tab="Tab 1">
                                        <div class="w-slider carousel-project" data-animation="slide" data-duration="500" data-infinite="1" data-nav-spacing="5">
                                            <div class="w-slider-mask">
                                                @foreach( $media as $medias )
                                                    <div class="w-slide">
                                                        <ul class="w-list-unstyled">
                                                            <li class="w-clearfix li-blog" data-ix="show-dt-blog">
                                                                <a class="w-inline-block blog-item" href="media/{{ $medias->id }}/show"><img src="{{ asset($medias->gambar) }}" alt="{{ $medias->judul }}">
                                                                <div class="dt-blog" data-ix="move-dt-blog">
                                                                    <div>{{ $medias->created_at->format('d-m-Y') }}</div>
                                                                </div>
                                                                </a>
                                                                <div class="blog-wrapper">
                                                                    <h5 class="portfolio-tittle blog-tittle">
                                                                    <a class="blog-link3" href="media/{{ $medias->id }}/show">{{ $medias->judul }}</a>
                                                                    </h5>
                                                                    <p>{{$medias->ringkasan_deskripsi.' ...'}}&nbsp;<a class="link" href="media/{{ $medias->id }}/show">Detail Berita →</a>
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="w-slider-nav w-slider-nav-invert w-round carousel-dots"></div>
                                        </div>
                                    </div>
                                    <div class="w-tab-pane" data-w-tab="Tab 3">
                                        <div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                                        </div>
                                        <ul class="w-list-unstyled ul">
                                            @foreach( $pengumumanx as $pengumumans)
                                                <li class="w-clearfix li-list">
                                                    <div class="li-ico li-blue">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <a class="blog-link3" href="pengumuman/{{ $pengumumans->id }}/show">{{ $pengumumans->ringkasan_judul }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="w-tab-pane w--tab-active" data-w-tab="Tab 2">
                                        @foreach( $pengumuman as $pengumumans)
                                            <ul class="w-list-unstyled">
                                                <li class="li-post" data-ix="show-dt-blog">
                                                    <div class="w-clearfix">
                                                        <a class="w-inline-block blog-item blog-popular-sidebar" href="pengumuman/{{ $pengumumans->id }}/show"><img src="{{ asset($pengumumans->gambar) }}">
                                                        <div class="dt-blog" data-ix="move-dt-blog">
                                                            <div>{{ $pengumumans->created_at->format('d-m-Y') }}</div>
                                                        </div>
                                                        </a>
                                                        <div class="blog-wrapper">
                                                            <h5 class="portfolio-tittle blog-tittle"><a class="blog-link3" href="pengumuman/{{ $pengumumans->id }}/show">{{ $pengumumans->judul }}</a></h5>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        @endforeach
                                    </div>
                                </div>
                                <br><center><a class="fa fa-file-powerpoint-o link" href="/pengumuman/list"> Lihat Semua Pengumuman →</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="anim-wrapper">
                <div class="wow bounceInRight" data-wow-delay="1s">
                    <div class="spac-bott" >
                        <div class="w-row">
                            <div class="w-col w-col-3" >
                                <div class="tittle-line">
                                    <h5>Berita Tanpa Foto</h5>
                                    <div class="divider-1 small">
                                        <div class="divider-small"></div>
                                    </div>
                                </div>
                                <ul class="w-list-unstyled ul">
                                    @foreach( $berita2 as $beritas)
                                        <li class="w-clearfix li-list">
                                            <a class="fa fa-tags blog-link6" href="berita2/{{ $beritas->id }}/show"> {{ $beritas->ringkasan_judul }}..</a>
                                        </li>
                                    @endforeach
                                </ul>
                                <a class="fa fa-book link" href="/berita2/list"> Arsip Berita Tanpa Foto →</a>
                            </div>
                            <div class="w-col w-col-6 res-space">
                                <div class="tittle-line">
                                    <h5>Kegiatan SKPD</h5>
                                    <div class="divider-1 small">
                                        <div class="divider-small"></div>
                                    </div>
                                </div>
                                <div data-ix="show-carousel-pagination">
                                    <div class="w-slider carousel-project" data-animation="slide" data-duration="500" data-infinite="1" data-nav-spacing="5">
                                        <div class="w-slider-mask">
                                            <div class="w-slide w-clearfix">
                                                @foreach( $galery as $galeris )
                                                    <article class="mix mix-3" data-ix="show-portfolio-overlay">
                                                        <div class="portfolio-wrapper">
                                                            <img src="{{ asset($galeris->gambar) }}" alt="{{ $galeris->judul }}">
                                                            <a class="w-inline-block portfolio-overlay" href="/galery/list">
                                                                <div class="pico-wrp">
                                                                    <div class="portfolio-ico" data-ix="zom-out-pico"><i class="fa fa-share"></i></div>
                                                                </div>
                                                            </a>
                                                        </div><a class="w-inline-block portfolio-text-wrapper" href="/galery/list"><h5 class="portfolio-tittle">{{ $galeris->skpd }}</h5><div class="portfolio-sub">{{ $galeris->created_at->format('d-m-Y') }}</div></a>
                                                    </article>
                                                @endforeach
                                            </div>
                                            <div class="shadow"><img src="{{ asset('images/shadow-3.png') }}" alt="shadow-3.png"></div>
                                        </div>
                                        <a class="fa fa-book link" href="/berita/list"> Arsip Kegiatan SKPD →</a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-col w-col-3">
                                <div class="tittle-line">
                                    <h5>Keterbukaan Informasi Publik</h5>
                                    <div class="divider-1 small">
                                        <div class="divider-small"></div>
                                    </div>
                                </div>
                                <div class="toggle-wrapper" data-ix="open-close-toggle">
                                    <a class="w-clearfix w-inline-block toggle-header third-style" href="#">
                                        <div class="remove-alert">
                                            <i class="fa fa-bar-chart-o"></i>
                                        </div>
                                        <div class="toggle-ico">
                                            <div class="toggle-line blue-color"></div>
                                            <div class="toggle-line-2 blue-color"></div>
                                        </div>
                                        <div>Laporan</div>
                                    </a>
                                    <div class="toggle-content">
                                        <div class="toggle-space">
                                            <a class="fa fa-file blog-link6" href="#"> Link Laporan 1</a>
                                            <a class="fa fa-file blog-link6" href="#"> Link Laporan 2</a>
                                            <a class="fa fa-file blog-link6" href="#"> Link Laporan 3</a>
                                            <a class="fa fa-file blog-link6" href="#"> Link Laporan 3</a>
                                        </div>
                                        <div class="shadow"><img src="{{ asset('images/shadow-3.png') }}" alt="shadow-3.png"></div>
                                    </div>
                                </div>
                                <div class="toggle-wrapper" data-ix="open-close-toggle">
                                    <a class="w-clearfix w-inline-block toggle-header third-style" href="#">
                                        <div class="remove-alert">
                                            <i class="fa fa-check-square-o"></i>
                                        </div>
                                        <div class="toggle-ico">
                                            <div class="toggle-line blue-color"></div>
                                            <div class="toggle-line-2 blue-color"></div>
                                        </div>
                                        <div>Dokumentasi</div>
                                    </a>
                                    <div class="toggle-content">
                                        <div class="toggle-space">
                                            <a class="fa fa-file-text-o blog-link6" href="#"> Link Dokumen 1</a>
                                            <a class="fa fa-file-text-o blog-link6" href="#"> Link Dokumen 2</a>
                                            <a class="fa fa-file-text-o blog-link6" href="#"> Link Dokumen 3</a>
                                            <a class="fa fa-file-text-o blog-link6" href="#"> Link Dokumen 3</a>
                                        </div>
                                        <div class="shadow"><img src="{{ asset('images/shadow-3.png') }}" alt="shadow-3.png"></div>
                                    </div>
                                </div>
                                <div class="toggle-wrapper" data-ix="open-close-toggle">
                                    <a class="w-clearfix w-inline-block toggle-header third-style" href="#">
                                        <div class="remove-alert">
                                            <div class="w-embed"><i class="fa fa-bank"></i></div>
                                        </div>
                                        <div class="toggle-ico">
                                            <div class="toggle-line blue-color"></div>
                                            <div class="toggle-line-2 blue-color"></div>
                                        </div>
                                        <div>Realisasi</div>
                                    </a>
                                    <div class="toggle-content">
                                        <div class="toggle-space">
                                            <a class="fa fa-toggle-right blog-link6" href="#"> Link Realisasi 1</a>
                                            <a class="fa fa-toggle-right blog-link6" href="#"> Link Realisasi 2</a>
                                            <a class="fa fa-toggle-right blog-link6" href="#"> Link Realisasi 3</a>
                                            <a class="fa fa-toggle-right blog-link6" href="#"> Link Realisasi 4</a>
                                        </div>
                                        <div class="shadow"><img src="{{ asset('images/shadow-3.png') }}" alt="shadow-3.png"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('apps')
    <section class="w-section section logo">
        <div class="anim-wrapper">
            <div class="wow flipInY" data-wow-delay="1s">
                <div class="w-container">
                    <div class="tittle-line">
                        <h5>Sistem Informasi / Aplikasi Pemerintahan</h5>
                        <div class="divider-1 small">
                            <div class="divider-small"></div>
                        </div>
                    </div>
                    <div>
                        <div class="w-slider carousel-project" data-animation="slide" data-duration="500" data-infinite="1" data-delay="4000" data-autoplay="1" data-nav-spacing="5">
                            <div class="w-slider-mask">
                                <div class="w-slide w-clearfix">
                                    <div class="logo-wrapper"><img src="images/logo1.png" alt="logo1.png"></div>
                                    <div class="logo-wrapper"><img src="images/logo2.png" alt="logo2.png"></div>
                                    <div class="logo-wrapper"><img src="images/logo3.png" alt="logo3.png"></div>
                                    <div class="logo-wrapper"><img src="images/logo4.png" alt="logo4.png"></div>
                                    <div class="logo-wrapper"><img src="images/logo6.png" alt="Logo6.png"></div>
                                </div>
                                <div class="w-slide">
                                    <div class="logo-wrapper"><img src="images/logo5.png" alt="logo5.png"></div>
                                    <div class="logo-wrapper"><img src="images/logo6.png" alt="logo6.png"></div>
                                    <div class="logo-wrapper"><img src="images/logo1.png" alt="logo1.png"></div>
                                    <div class="logo-wrapper"><img src="images/logo3.png" alt="logo3.png"></div>
                                    <div class="logo-wrapper"><img src="images/logo2.png" alt="logo2.png"></div>
                                </div>
                            </div>
                            <div class="w-slider-nav w-slider-nav-invert w-round carousel-dots"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('pembatas2')
    <div class="call-to-action">
        <div class="w-container">
            <div class="w-row center">
                <div class="w-col w-col-9 w-col-stack"></div>
                <div class="w-col w-col-3 w-col-stack left-aglin-column cetner">
                    <a class="w-clearfix w-inline-block button btn-line btn-small wow shake" data-wow-delay="0.3s" href="/galery/list">
                        <div class="btn-ico"><i class="fa fa-camera"></i></div>
                        <div class="btn-txt">Foto Galery Kegiatan</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('galery')
    <img src="{{ asset('images/background-footer.png') }}">
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('lightbox/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lightbox/simple-lightbox.js') }}"></script>
    <script>
        $(function(){
        var gallery = $('.gallery a').simpleLightbox();
        });
    </script>
@endsection

