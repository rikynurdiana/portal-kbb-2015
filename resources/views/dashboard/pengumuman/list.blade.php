@extends('dashboard.pengumuman.master')

@section('css')
    <link rel='stylesheet' type='text/css' href="{{ asset('main/css/bootstrap.min.css') }}" >
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

@section('banner')
    <div class="w-section inner-banner" id="top" data-ix="show-top-btn">
        <div class="w-container">
            <div class="w-row">
                <div class="w-col w-col-9">
                    <div class="breadcrumb">Pengumuman&nbsp;<span class="lighter"><span>|</span> <em>Pemda Kabupaten Bandung Barat.</em>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="normal-blog-wrapper">
        @foreach( $pengumuman as $pengumumans)
            <div class="blog-post">
                <div class="divider-space less-space">
                    <div class="divider-1-pattern"></div>
                </div>
                <div class="w-row">
                    <div class="w-col w-col-2">
                        <div class="blog-img" data-ix="show-portfolio-overlay">
                            <a class="w-inline-block portfolio-overlay" href="#">
                                <div class="pico-wrp">
                                    <div class="portfolio-ico" data-ix="zom-out-pico">
                                        <div class="w-embed"><i class="fa fa-pencil"></i></div>
                                    </div>
                                </div>
                            </a>
                            <img src="{{ asset($pengumumans->gambar) }}" alt="{{ $pengumumans->judul }}" width="220px">
                        </div>
                    </div>
                    <div class="w-col w-col-10">
                        <div class="padd-right">
                            <h4 class="portfolio-tittle r-mp"><a class="blog-link5" href="/pengumuman/{{ $pengumumans->id }}/show">{{ $pengumumans->judul }}</a></h4>
                            <div class="meta-tag">
                                <div>By&nbsp;<a class="email" href="#">admin</a> <span class="blue">/</span> {{ $pengumumans->created_at->format('d-m-Y') }} <span class="blue">/</span></div>
                                <div class="space">
                                    <p>{{ $pengumumans->ringkasan_deskripsi }} [...]&nbsp;<a class="link" href="/pengumuman/{{ $pengumumans->id }}/show">Selengkapnya →</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="divider-space less-space"><div class="divider-1-pattern"></div></div>
        <ul class="pagination">
          <li>{!!$pengumuman->render()!!}</li>
        </ul>
    </div>
@endsection

@section('sidebar')
    <div class="sidebar">
        <div class="divider-space less-space">
            <div class="divider-1-pattern"></div>
        </div>
        <div class="space x2">
            <div class="tittle-line tittle-sml-mg">
                <h5>Tentang Pengumuman</h5>
                <div class="divider-1 small">
                    <div class="divider-small"></div>
                </div>
            </div>
            <p>Pengumuman berasal dari setiap SKPD yang memiliki kepentingan untuk menyebar luaskan informasi. Pengumuman dapat berupa kegiatan, acara masyarakat, upacara atau apapun yang berbentuk informasi untuk umum.</p>
        </div>
        <div class="space x2">
            <div class="toggle-wrapper" data-ix="open-close-toggle">
                <a class="w-clearfix w-inline-block toggle-header third-style" href="#">
                    <div class="remove-alert">
                        <div class="w-embed"><i class="fa fa-magic"></i></div>
                    </div>
                    <div class="toggle-ico">
                        <div class="toggle-line dark-color"></div>
                        <div class="toggle-line-2 dark-color"></div>
                    </div>
                    <div>Pellentesque egestas</div>
                </a>
                <div class="toggle-content">
                    <div class="toggle-space">
                        <p>Vivamus consectetuer hendrerit lacus. In hac habitasse platea dictumst. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Cras id dui.</p>
                    </div>
                </div>
            </div>
            <div class="toggle-wrapper" data-ix="open-close-toggle">
                <a class="w-clearfix w-inline-block toggle-header third-style" href="#">
                    <div class="remove-alert">
                        <div class="w-embed"><i class="fa fa-leaf"></i></div>
                    </div>
                    <div class="toggle-ico">
                        <div class="toggle-line dark-color"></div>
                        <div class="toggle-line-2 dark-color"></div>
                    </div>
                    <div>Fusce fermentum odio</div>
                </a>
                <div class="toggle-content">
                    <div class="toggle-space">
                        <p>Praesent turpis. Vestibulum volutpat pretium libero. Ut id nisl quis enim dignissim sagittis. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros.</p>
                    </div>
                </div>
            </div>
            <div class="toggle-wrapper" data-ix="open-close-toggle">
                <a class="w-clearfix w-inline-block toggle-header third-style" href="#">
                    <div class="remove-alert">
                        <div class="w-embed"><i class="fa fa-rocket"></i></div>
                    </div>
                    <div class="toggle-ico">
                        <div class="toggle-line dark-color"></div>
                        <div class="toggle-line-2 dark-color"></div>
                    </div>
                    <div>Nullam accumsan</div>
                </a>
                <div class="toggle-content">
                    <div class="toggle-space">
                        <p>Praesent egestas neque eu enim. Praesent adipiscing. Vivamus laoreet. Pellentesque commodo eros a enim.
                        <br>
                        <br>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Sed lectus. Etiam ut purus mattis mauris sodales aliquam..</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="space x2">
            <div class="tittle-line tittle-sml-mg">
                <h5>Berita Terbaru</h5>
                <div class="divider-1 small">
                    <div class="divider-small"></div>
                </div>
            </div>
            <div>
                @foreach( $berita as $beritas )
                    <ul class="w-list-unstyled">
                        <li class="li-post" data-ix="show-dt-blog">
                            <div class="w-clearfix">
                                <a class="w-inline-block blog-item blog-popular-sidebar" href="/berita/{{ $beritas->id }}/show"><img src="{{  asset($beritas->gambar) }}" alt="{{ $beritas->judul }}">
                                    <div class="dt-blog" data-ix="move-dt-blog"><div>{{ $beritas->created_at->format('d-m-Y') }}</div></div>
                                </a>
                                <div class="blog-wrapper">
                                    <h5 class="portfolio-tittle blog-tittle"><a class="blog-link" href="/berita/{{ $beritas->id }}/show">{{ $beritas->judul }}</a></h5>
                                </div>
                            </div>
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>
        <div class="space x2">
            <div class="tittle-line tittle-sml-mg">
                <h5>TESTIMONIAL</h5>
                <div class="divider-1 small"><div class="divider-small"></div></div>
            </div>
            <div class="w-slider carousel-project" data-animation="outin" data-duration="500" data-infinite="1" data-nav-spacing="6">
                <div class="w-slider-mask">
                    <div class="w-slide">
                        <div class="w-clearfix testi-wrapper">
                            <div class="qoute-ico display-none">
                                <div class="w-embed"><i class="fa fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="test-text-wrapper">
                                <p><em>Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Pellentesque ut neque. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Nullam vel sem. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo.</em>
                                </p>
                                <div class="space">
                                    <h5 class="portfolio-tittle">Collis <span class="sub-tittle-test">– CEO&nbsp;&amp;&nbsp;Founder @Envato</span>&nbsp;</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-slide">
                        <div class="w-clearfix testi-wrapper">
                            <div class="qoute-ico display-none">
                                <div class="w-embed"><i class="fa fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="test-text-wrapper">
                                <p><em>In auctor lobortis lacus. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Quisque id mi. Ut id nisl quis enim dignissim sagittis. Vivamus elementum semper nisi. Quisque id mi. Ut id nisl quis enim dignissim sagittis. Vivamus elementum semper nisi.</em>
                                </p>
                                <div class="space">
                                    <h5 class="portfolio-tittle">Collis <span class="sub-tittle-test">– CEO&nbsp;&amp;&nbsp;Founder @Envato</span>&nbsp;</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-slide">
                        <div class="w-clearfix testi-wrapper">
                            <div class="qoute-ico display-none">
                                <div class="w-embed"><i class="fa fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="test-text-wrapper">
                                <p><em>Praesent vestibulum dapibus nibh. Praesent egestas neque eu enim. Praesent ut ligula non mi varius sagittis. Praesent turpis. Curabitur blandit mollis lacus. Fusce fermentum odio nec arcu.<br>Sed in libero ut nibh placerat accumsan.</em>
                                </p>
                                <div class="space">
                                    <h5 class="portfolio-tittle">Collis <span class="sub-tittle-test">– CEO&nbsp;&amp;&nbsp;Founder @Envato</span>&nbsp;</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-slide">
                        <div class="w-clearfix testi-wrapper">
                            <div class="qoute-ico display-none">
                                <div class="w-embed"><i class="fa fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="test-text-wrapper">
                                <p><em>Phasellus ullamcorper ipsum rutrum nunc. Aenean viverra rhoncus pede. Praesent venenatis metus at tortor pulvinar varius. Etiam imperdiet imperdiet orci. Ipsum rutrum nunc. Aenean viverra rhoncus pede. Praesent venenatis metus at tortor pulvinar varius. Etiam imperdiet imperdiet orci.</em>
                                </p>
                                <div class="space">
                                    <h5 class="portfolio-tittle">Collis <span class="sub-tittle-test">– CEO&nbsp;&amp;&nbsp;Founder @Envato</span>&nbsp;</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-slider-nav w-slider-nav-invert w-round carousel-dots"></div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection