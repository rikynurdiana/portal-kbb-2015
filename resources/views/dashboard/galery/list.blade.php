@extends('dashboard.galery.master')

@section('css')
@endsection

@section('header')
 <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="{{ asset('images/logo_kbb.png') }}" alt="logo" width="70px"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Kembali Ke Beranda</a></li>
                </ul>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>GALERI KEGIATAN PEMDA KBB</h2>
            </div>

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">Semua</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".pemerintahan">Pemerintahan</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".masyarakat">Masyarakat</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".skpd">SKPD</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".selfie">Selfie</a></li>
            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">

                    @foreach( $galery as $galerys)
                    <div class="portfolio-item {{ $galerys->kategori }} col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ asset( $galerys->gambar) }}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h5><a class="preview" href="{{ asset( $galerys->gambar) }}" rel="prettyPhoto">{{ $galerys->deskripsi }}</a></h5>
                                    <a class="preview" href="{{ asset( $galerys->gambar) }}" rel="prettyPhoto"><i class="fa fa-eye"></i> Perbesar</a>
                                </div> 
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
@endsection