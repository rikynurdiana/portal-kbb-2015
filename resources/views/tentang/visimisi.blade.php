@extends('tentang.master')

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
                    <div class="breadcrumb">Visi & Misi&nbsp;<span class="lighter"><span>|</span> <em>Pemda Kabupaten Bandung Barat.</em></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="shadow"><img src="{{ asset('images/shadow-3.png') }}" alt="shadow-3.png"></div>
@endsection

@section('content2')
    <div class="w-container">
        <div class="w-row">
            <center><h1 class="wow bounceInLeft" data-wow-delay="1s">VISI MISI</h1>
            <h3 class="wow bounceInLeft" data-wow-delay="1.5s">“BANDUNG BARAT CERMAT”</h3>
            <h5 class="wow bounceInRight" data-wow-delay="1.5s">Bersama membangun masyarakat yang cerdas, rasional, maju, agamis, dan sehat. Berbasis pada pengembangan kawasan agroindustri dan wisata ramah lingkungan.</h5></center>
            <br>
            <div class="col-sm-6">
                <center><h2 class="wow bounceInLeft" data-wow-delay="1s">VISI</h2></center>
                <div class="shadow"><img src="{{ asset('images/shadow-3.png') }}" alt="shadow-3.png"></div>
                <div class="tittle-line wow bounceInLeft" data-wow-delay="1s">
                    <h4>Cerdas</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInLeft" data-wow-delay="1s">Mengandung pengertian seluruh komponen sumber daya manusia di kabupaten bandung barat baik sumber daya aparatur mapun masyarakat harus berpendidikan, berahlak mulia dan memiliki intergritas dan nerdaya saing.</h5>
                <br>
                <div class="tittle-line wow bounceInLeft" data-wow-delay="1s">
                    <h4>Rasional</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInLeft" data-wow-delay="1s">Mengandung pengertian di dalam melaksanakan pembangunan haruslah disesuaikan dengan realitas yang ada termasuk didalamnya pemanfaatan potensi lokal dan kemampuan sumber daya serta harus memiliki indikator capaian kinerja yang terukur.</h5>
                <br>
                <div class="tittle-line wow bounceInLeft" data-wow-delay="1s">
                    <h4>Maju</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInLeft" data-wow-delay="1s">Mengandung pengertian seiring dengan bertambahnya waktu kabupaten bandung barat harus terus maju ke depan, mengalami peningkatan dan bertambah baik di semua aspek kehidupan.</h5>
                <br>
                <div class="tittle-line wow bounceInLeft" data-wow-delay="1s">
                    <h4>Agamis</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInLeft" data-wow-delay="1s">Mengandung pengertian bahwa keyakinan beragama menjadi landasan pengikat kebersamaan dalam seluruh aspek penyelenggaraan pemerintahan, pembangunan, dan kemasyarakatan.</h5>
                <br>
                <div class="tittle-line wow bounceInLeft" data-wow-delay="1s">
                    <h4>Sehat</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInLeft" data-wow-delay="1s">Mengandung pengertian di setiap komponen kehidupan bermasyarakat baik sumber daya manusia, penyelenggaraan pemerintahan maupun alam dan lingkungannya haruslah terawat, bersih, nyaman dan senantiasa berada dalam keadaan yang baik.</h5>
                <br>
                <div class="tittle-line wow bounceInLeft" data-wow-delay="1s">
                    <h4>Agroindustri</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInLeft" data-wow-delay="1s">Mengandung pengertian terwujudnya peningkatan nilai ekonomis hasil produksi pertanian di kabupaten bandung barat melalui diversifikasi hasil-hasil pertanian.</h5>
                <br>
                <div class="tittle-line wow bounceInLeft" data-wow-delay="1s">
                    <h4>Wisata Ramah Lingkungan</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInLeft" data-wow-delay="1s">lingkunga Mengandung pengertian terwujudnya pengembangan kawasan wisata alam berdasarkan potensi dan kearifan lokal dalam pelestarian lingkungan.</h5>

            </div>
            <div class="col-sm-6">
                <center><h2 class="wow bounceInRight" data-wow-delay="1s">MISI</h2></center>
                <div class="shadow"><img src="{{ asset('images/shadow-3.png') }}" alt="shadow-3.png"></div>
                <div class="tittle-line wow bounceInRight" data-wow-delay="1s">
                    <h4>Pro-Publik</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInRight" data-wow-delay="1s">Meningkatkan penyelenggaraan pemerintahan yang amanah, profesional, efektif, efisien, dan ekonomis yang berbasis pada sistem penganggaran yang pro-publik.</h5>
                <br>
                <div class="tittle-line wow bounceInRight" data-wow-delay="1s">
                    <h4>Peningkatan SDM</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInRight" data-wow-delay="1s">Meningkatkan kualitas sumber daya manusia yang berakhlak, cerdas sehat dan berdaya saing.</h5>
                <br>
                <div class="tittle-line wow bounceInRight" data-wow-delay="1s">
                    <h4>Pengentasan Kemiskinan</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInRight" data-wow-delay="1s">Memberdayakan perekonomian daerah berbasis ekonomi kerakyatan yang berorientasi pada pengembangan sektor agrobisnis dan agro wisata dalam upaya pengentasan kemiskinan.</h5>
                <br>
                <div class="tittle-line wow bounceInRight" data-wow-delay="1s">
                    <h4>Pembangunan</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInRight" data-wow-delay="1s">Mewujudkan pembangunan berkelanjutan berwawasan lingkungan.</h5>
                <br>
                <div class="tittle-line wow bounceInRight" data-wow-delay="1s">
                    <h4>Berkeadilan</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInRight" data-wow-delay="1s">Meningkatkan kualitas derajat kehidupan masyarakat yang berkeadilan.</h5>
                <br>
                <div class="tittle-line wow bounceInRight" data-wow-delay="1s">
                    <h4>Modernisasi Desa</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInRight" data-wow-delay="1s">Modernisasi desa melalui peningkatan kapasitas pemerintahan desa dan pemberdayaan masyarakat desa.</h5>
                <img src="{{ asset('images/bg-kbb.jpg') }}" alt="kbb" class="wow bounceInRight" data-wow-delay="1s">
                <div class="shadow"><img src="{{ asset('images/shadow-3.png') }}" alt="shadow-3.png"></div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection