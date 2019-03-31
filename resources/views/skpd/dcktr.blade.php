@extends('skpd.master')

@section('title')
    <title>Profile SKPD - DCKTR</title>
@endsection

@section('css')
@endsection

@section('left-panel')
    <section id="left-contact" class="page-left dark">
        <div class="row">
            <article class="promo promo-contact span12 align-center add-top-main">
                <h2 class="title-sub">hubungi/<span class="title">K</span><span class="title-highlight">ami</span></h2>
                <h1 class="main-heading">Lebih dekat dengan kami</h1>
                {{-- <p class="add-top main-heading">We are aura, the creative agency that stands out from the crowd. Lorem ipsum dolor siter amet mundium corpes illon tolves lorem ipsum dolor.</p><p class="copyright">Copyright &copy; 2012 Designova.</p> --}}
            </article>
        </div>
    </section>
    <section id="left-blog" class="page-left dark">
        <div class="row">
            <article class="promo promo-blog span12 align-center add-top-main">
                <h2 class="title-sub">seputar/<span class="title">A</span><span class="title-highlight">rtikel</span></h2>
                <h1 class="main-heading">Artikel DCKTR</h1>
                {{-- <p class="add-top main-heading">We are aura, the creative agency that stands out from the crowd. Lorem ipsum dolor siter amet mundium corpes illon tolves lorem ipsum dolor.</p><p class="copyright">Copyright &copy; 2012 Designova.</p> --}}
            </article>
        </div>
    </section>
    <section id="left-team" class="page-left dark">
        <div class="row">
            <article class="promo promo-team span12 align-center add-top-main">
                <h2 class="title-sub">profile/<span class="title">S</span><span class="title-highlight">taff</span></h2>
                <h1 class="main-heading">Pejabat dan Staff SCKTR</h1>
                {{-- <p class="add-top main-heading">We are aura, the creative agency that stands out from the crowd. Lorem ipsum dolor siter amet mundium corpes illon tolves lorem ipsum dolor.</p><p class="copyright">Copyright &copy; 2012 Designova.</p> --}}
            </article>
        </div>
    </section>
    <section id="left-services" class="page-left dark">
        <div class="row">
            <article class="promo promo-services span12 align-center add-top-main">
                <h2 class="title-sub">pelayanan/<span class="title">Masyarakat</span><span class="title-highlight"></span></h2>
                <h1 class="main-heading">Pelayanan untuk masyarakat</h1>
                {{-- <p class="add-top main-heading">We are aura, the creative agency that stands out from the crowd. Lorem ipsum dolor siter amet mundium corpes illon tolves lorem ipsum dolor.</p><p class="copyright">Copyright &copy; 2012 Designova.</p> --}}
            </article>
        </div>
    </section>
    <section id="left-portfolio" class="page-left dark">
        <div class="row">
            <article class="promo promo-portfolio span12 align-center add-top-main">
                <h2 class="title-sub">Galeri/<span class="title">Kegiatan </span><span class="title-highlight"></span></h2>
                <h1 class="main-heading">Kegiatan seluruh bidang dan seksi</h1>
                {{-- <p class="add-top main-heading">We are aura, the creative agency that stands out from the crowd. Lorem ipsum dolor siter amet mundium corpes illon tolves lorem ipsum dolor.</p><p class="copyright">Copyright &copy; 2012 Designova.</p> --}}
            </article>
        </div>
    </section>
    <section id="left-about" class="page-left dark">
        <div class="row">
            <article class="promo promo-about span12 align-center add-top-main">
                <h2 class="title-sub">tentang/<span class="title">D</span><span class="title-highlight">CKTR</span></h2>
                <h1 class="main-heading">Selayang pandang</h1>
                {{-- <p class="add-top main-heading">We are aura, the creative agency that stands out from the crowd. Lorem ipsum dolor siter amet mundium corpes illon tolves lorem ipsum dolor.</p><p class="copyright">Copyright &copy; 2012 Designova.</p> --}}
            </article>
        </div>
    </section>
    <section id="left-home" class="page-left dark">
        <div class="row">
            <article class="promo promo-home span12 align-center ">
                <h2 class="title add-top-main-alt">D<span class="title-highlight">CKTR</span></h2>
                <h1 class="main-heading">DINAS CIPTA KARYA DAN TATA RUANG</h1>
                <p class="add-top main-heading">TERSELENGGARANYA PEMUKIMAN, PERUMAHAN DAN PENATAAN RUANG YANG BERBASIS PADA PENGEMBANGAN DAN PEMBERDAYAAN POTENSI WILAYAH UNTUK MENINGKATKAN DERAJAT HIDUP MASYARAKAT DALAM MENDUKUNG BANDUNG BARAT CERMAT</p>
            </article>
        </div>
    </section>
    <section class="page-left dark">
        <div class="row">
            <article class="promo promo-home span12 align-center ">
                <p class="add-top main-heading">&nbsp;</p>
            </article>
        </div>
    </section>
@endsection

@section('home')
    <section id="home" class="page-right">
        <div class="row">
            <article class="span10 align-center pad-top offset2 remove-offset-on-phone">
                <div class="row pad-top-extra">
                    <article class="align-left block add-bottom-extra">
                        <h1 class="in-main-heading color-high text-shadow-white">
                        <span class="iconize color-high">/</span>
                        <span class="iconize color-dark">/</span>
                        <span class="big-one add-left-half">Profile <span class="color-dark">D</span>CKTR</span>
                        </h1>
                        <h3 class="in-sub-heading add-top add-bottom color-dark">
                        DINAS CIPTA KARYA DAN TATA RUANG KABUPATEN BANDUNG BARAT.
                        </h3>
                        {{-- <a class="scrollme btn btn-aura-dark" href="#about">More About Us</a> --}}
                    </article>
                    <article class="align-left block add-bottom-extra">
                        <h1 class="in-main-heading color-high text-shadow-white">
                        <span class="iconize color-high">/</span>
                        <span class="iconize color-dark">/</span>
                        <span class="big-one add-left-half">Profile Pejabat & Staff <span class="color-dark"></span></span>
                        </h1>

                        {{-- <img src="{{ asset('/images/skpd/struktur_dcktr.png') }}"> --}}
                        <ul class="portfolio group">
                                <a href="{{ asset('/images/skpd/dcktr/struktur_dcktr.png') }}" data-gal="prettyPhoto">
                                <img src="{{ asset('/images/skpd/dcktr/struktur_dcktr.png') }}" />
                                <h5>Struktur Organisasi</h5>
                                </a>
                        </ul>
                        <div class="row pad-left-medium pad-top-half add-bottom remove-pad-on-phone">
                            <article class="span4 home-inner-block thumbnail">
                                <a class="scrollme" href="#works">
                                <img  alt="aura" title="aura by designova" src="{{ asset('images/img/team/01.jpg') }}"/>
                                <h5>Kepala Dinas</h5>
                                <p class="small-para">nama</p>
                                </a>
                            </article>
                            <article class="span4 home-inner-block thumbnail">
                                <a class="scrollme" href="#works">
                                <img  alt="aura" title="aura by designova" src="{{ asset('images/img/team/02.jpg') }}"/>
                                <h5>Sekdis</h5>
                                <p class="small-para">nama</p>
                                </a>
                            </article>
                            <article class="span4 home-inner-block thumbnail">
                                <a class="scrollme" href="#works">
                                <img  alt="aura" title="aura by designova" src="{{ asset('images/img/team/03.jpg') }}"/>
                                <h5>Kabid Perumahan</h5>
                                <p class="small-para">nama</p>
                                </a>
                            </article>
                        </div>
                        <div class="row pad-left-medium pad-top-half add-bottom remove-pad-on-phone">
                            <article class="span4 home-inner-block thumbnail">
                                <a class="scrollme" href="#works">
                                <img  alt="aura" title="aura by designova" src="{{ asset('images/img/team/team1.png') }}"/>
                                <h5>Kabid Prasarana Lingkungan Pemukiman</h5>
                                <p class="small-para">nama</p>
                                </a>
                            </article>
                            <article class="span4 home-inner-block thumbnail">
                                <a class="scrollme" href="#works">
                                <img  alt="aura" title="aura by designova" src="{{ asset('images/img/team/team2.png') }}"/>
                                <h5>Kabid Tata Ruang</h5>
                                <p class="small-para">nama</p><br>
                                </a>
                            </article>
                            <article class="span4 home-inner-block thumbnail">
                                <a class="scrollme" href="#works">
                                <img  alt="aura" title="aura by designova" src="{{ asset('images/img/team/team3.png') }}"/>
                                <h5>Kabid Pembangunan dan Pengendalian bangunan</h5>
                                <p class="small-para">nama</p>
                                </a>
                            </article>
                        </div>
                        {{-- <a class="scrollme btn btn-aura-dark" href="#portfolio">View All Works</a> --}}
                    </article>

                    <article class="align-left block add-bottom-extra">
                        <div class="row pad-left-medium pad-top-half add-bottom remove-pad-on-phone">
                            <nav class="promo-social pad-top-half align-left">
                                <a href="#"><i class="icon-facebook-sign"></i></a>
                                <a href="#"><i class="icon-twitter"></i></a>
                                <a href="#"><i class="icon-linkedin"></i></a>
                                <a href="#"><i class="icon-pinterest"></i></a>
                                <a href="#"><i class="icon-google-plus"></i></a>
                            </nav>
                        </div>
                    </article>
                </div>
            </article>
        </div>
    </section>
@endsection

@section('about')
    <section id="about" class="page-right">
        <div class="row">
            <article class="span10 align-center pad-top offset2 remove-offset-on-phone">
                <div class="row pad-top-extra">
                    <article class="align-left block add-bottom-extra">
                        <h1 class="in-main-heading color-high text-shadow-white">
                        <span class="iconize color-high">/</span>
                        <span class="iconize color-dark">/</span>
                        <span class="big-one add-left-half">Selayang Pandang <span class="color-dark">D</span>CKTR</span>
                        </h1>
                        <h3 class="in-sub-heading add-top add-bottom-half color-dark">
                        Struktur Organsasi Dinas Cipta Karya dan Tata Ruang Kabupaten Bandung Barat berdasarkan Peraturan Daerah Kabupaten Bandung Barat Nomor 3 Tahun 2012, tentang Organisasi Perangkat Daerah dan Peraturan Bupati Bandung Barat Nomor 55 Tahun 2012 tentang Rincian Tugas Pokok, Fungsi dan Rincian Tugas Dinas Cipta Karya dan Tata Ruang. Dinas Cipta Karya dan Tata Ruang mempunyai tugas pokok melaksanakan urusan pemerintah daerah di bidang cipta karya dan tata ruang berdasarkan asas otonomi dan tugas pembantuan.
                        Dalam melaksanakan tugas pokok Dinas Cipta Karya dan Tata Ruang menyelenggarakan fungsi:</h3>
                        <h5>(a) perumusan kebijakan teknis di bidang Cipta Karya dan Tata Ruang;</h5>
                        <h5>(b) penyelenggaraan urusan pemerintahan dan pelayanan umum di bidang Cipta Karya dan Tata Ruang;</h5>
                        <h5>(c) pembinaan dan pelaksanaan tugas di bidang Cipta Karya dan Tata Ruang;</h5>
                        <h5>(d) pelaksanaan tugas lain yang diberikan oleh Bupati sesuai dengan tugas dan fungsinya</h5>
                    </article>
                    <article class="align-left block add-bottom-extra">
                        <h1 class="in-main-heading color-high text-shadow-white">
                        <span class="iconize color-high">/</span>
                        <span class="iconize color-dark">/</span>
                        <span class="big-one add-left-half">Visi <span class="color-dark"></span></span>
                        </h1>
                        <h3 class="in-sub-heading add-top add-bottom-half color-dark">
                        “ TERSELENGGARANYA PEMUKIMAN, PERUMAHAN DAN PENATAAN RUANG YANG BERBASIS PADA PENGEMBANGAN DAN PEMBERDAYAAN POTENSI WILAYAH UNTUK MENINGKATKAN DERAJAT HIDUP MASYARAKAT DALAM MENDUKUNG BANDUNG BARAT CERMAT ”</h3>
                        <h5>a. Permukiman dan Perumahan adalah tempat bermukim masyarakat baik di perkotaan maupun di perdesaan yang layak huni memenuhi Norma Standar Pelayanan Minimal (NSPM) perumahan dan permukiman</h5>
                        <h5>b. Penataan Ruang adalah :</h5>
                        <h5>- Pemanfaatan Ruang sesuai Rencana Detai Tata Ruang Kawasan (RDTRK)</h5>
                        <h5>- Tata Letak dan Rancang Bangun, Konstruksi Bangunan harus mengikuti peraturan perundangan.</h5>
                        <h5>c. Potensi Wilayah adalah kemampuan yang mempunyai kemungkinan dikembangkan, kekuatan, kesanggupan dan daya pada suatu wilayah</h5>
                        <br>
                        <h1 class="in-main-heading color-high text-shadow-white">
                        <span class="iconize color-high">/</span>
                        <span class="iconize color-dark">/</span>
                        <span class="big-one add-left-half">Misi <span class="color-dark"></span></span>
                        </h1>
                        <div class="row pad-left-medium pad-top-half remove-pad-on-phone">
                            <article class="span6 add-top-half">
                                <i class="icon-flag features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Permukiman</h3>
                                <p class="text-shadow-off pad-right add-top small-para">Menyelenggarakan Permukiman dan Perumahan yang Tertata Baik serta Layak Huni.</p>
                            </article>
                            <article class="span6 add-top-half">
                                <i class="icon-leaf features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Efektif</h3>
                                <p class="text-shadow-off pad-right add-top small-para">Meyelenggarakan Penataan Ruang yang Efektif, Efisien dan Berwawasan Lingkungan serta Bekelanjutan</p>
                            </article>
                        </div>
                        <div class="row pad-left-medium pad-top-half remove-pad-on-phone">
                            <article class="span6 add-top-half">
                                <i class="icon-th-large features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Infrastruktur</h3>
                                <p class="text-shadow-off pad-right add-top small-para">Mewujudkan Pembangunan Infrastruktur Permukiman dalam rangka Meningkatkan Derajat Hidup Masyarakat</p>
                            </article>
                            <article class="span6 add-top-half">
                                <i class="icon-cloud features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Penataan</h3>
                                <p class="text-shadow-off pad-right add-top small-para">Menyelenggrakan Penataan dan Pengendalian Bangunan yang Berbasis pada Daya Dukung Lingkungan</p>
                            </article>
                        </div>
                        <div class="row pad-left-medium pad-top-half add-bottom remove-pad-on-phone">
                            <article class="span6 add-top-half">
                                <i class="icon-heart features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Pengelolaan</h3>
                                <p class="text-shadow-off pad-right add-top small-para">Menyelenggarakan Sistem Pengelolaan Persampahan,yang Berawawasan Lingkungan dan Partisipatif</p>
                            </article>
                            <article class="span6 add-top-half">
                                <i class="icon-eye-open features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Pencegahan</h3>
                                <p class="text-shadow-off pad-right add-top small-para">Menyelenggarakan Sistem Pencegahan dan Penanggulangan Bahaya Kebakaran</p>
                            </article>
                        </div>
                    </article>
                    <article class="align-left block add-bottom-extra">
                        <div class="row pad-left-medium pad-top-half add-bottom remove-pad-on-phone">
                            <nav class="promo-social pad-top-half align-left">
                                <a href="#"><i class="icon-facebook-sign"></i></a>
                                <a href="#"><i class="icon-twitter"></i></a>
                                <a href="#"><i class="icon-linkedin"></i></a>
                                <a href="#"><i class="icon-pinterest"></i></a>
                                <a href="#"><i class="icon-google-plus"></i></a>
                            </nav>
                        </div>
                    </article>
                </div>
            </article>
        </div>
    </section>
@endsection

@section('portfolio')
    <section id="portfolio" class="page-right">
        <div class="row">
            <article class="span10 align-center pad-top offset2 remove-offset-on-phone">
                <div class="row pad-top-extra">
                    <!--block : starts-->
                    <article class="align-left block add-bottom-extra">
                        <h1 class="in-main-heading color-high text-shadow-white">
                        <span class="iconize color-high">/</span>
                        <span class="iconize color-dark">/</span>
                        <span class="big-one add-left-half">Kegiatan <span class="color-dark">D</span>CKTR</span>
                        </h1>

                    </article>
                    <!--block : ends-->



                    <div class="row pad-left-medium remove-pad-on-phone">
                        <div class="group">
                            <ul class="filter group">
                                <li class="current all"><a href="#">Semua</a></li>
                                <li class="web"><a href="#">Perumahan</a></li>
                                <li class="print"><a href="#">Lingkungan</a></li>
                                <li class="brand"><a href="#">Tataruang</a></li>
                                <li class="digital"><a href="#">Pembangunan</a></li>
                            </ul>
                        </div>
                        <!-- Portfolio Items -->
                        <ul class="portfolio group">
                            <li class="item" data-id="id-1" data-type="all brand">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/01.jpg') }}" width="173" height="173" alt="Portfolio Image 1" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-2" data-type="all print">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/02.jpg') }}" width="173" height="173" alt="Portfolio Image 2" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-3" data-type="all digital">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/03.jpg') }}" width="173" height="173" alt="Portfolio Image 3" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-4" data-type="all web">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/04.jpg') }}" width="173" height="173" alt="Portfolio Image 4" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-5" data-type="all brand">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/05.jpg') }}" width="173" height="173" alt="Portfolio Image 5" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-6" data-type="all print">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/06.jpg') }}" width="173" height="173" alt="Portfolio Image 6" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-7" data-type="all digital">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/07.jpg') }}" width="173" height="173" alt="Portfolio Image 7" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-8" data-type="all web">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/08.jpg') }}" width="173" height="173" alt="Portfolio Image 8" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-9" data-type="all print">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/09.jpg') }}" width="173" height="173" alt="Portfolio Image 9" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-10" data-type="all digital">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/10.jpg') }}" width="173" height="173" alt="Portfolio Image 10" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-7" data-type="all web">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/11.jpg') }}" width="173" height="173" alt="Portfolio Image 7" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-8" data-type="all brand">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/12.jpg') }}" width="173" height="173" alt="Portfolio Image 8" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-9" data-type="all print">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/13.jpg') }}" width="173" height="173" alt="Portfolio Image 9" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-10" data-type="all digital">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/14.jpg') }}" width="173" height="173" alt="Portfolio Image 10" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-9" data-type="all print">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/15.jpg') }}" width="173" height="173" alt="Portfolio Image 9" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-10" data-type="all web">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/16.jpg') }}" width="173" height="173" alt="Portfolio Image 10" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>

                        </ul>
                        <div class="clear-float"></div>

                    </div>

                    <!--block : starts-->
                    <article class="align-left block add-bottom-extra">
                        <div class="row pad-left-medium pad-top-half add-bottom remove-pad-on-phone">

                            <nav class="promo-social pad-top-half align-left">
                                <a href="#"><i class="icon-facebook-sign"></i></a>
                                <a href="#"><i class="icon-twitter"></i></a>
                                <a href="#"><i class="icon-linkedin"></i></a>
                                <a href="#"><i class="icon-pinterest"></i></a>
                                <a href="#"><i class="icon-google-plus"></i></a>
                            </nav>

                        </div>
                    </article>
                    <!--block : ends-->


                </div>
                <!--outer row : ends-->

            </article>
            <!--span12 ends-->
        </div>
    </section>
@endsection

@section('services')
    <section id="services" class="page-right">
        <div class="row">
            <!--span12 starts-->
            <article class="span10 align-center pad-top offset2 remove-offset-on-phone">

                <!--outer row : starts-->
                <div class="row pad-top-extra">

                    <!--block : starts-->
                    <article class="align-left block add-bottom-extra">
                        <h1 class="in-main-heading color-high text-shadow-white">
                        <span class="iconize color-high">/</span>
                        <span class="iconize color-dark">/</span>
                        <span class="big-one add-left-half">Pelayanan <span class="color-dark">Masyarakat</span></span>
                        </h1>
                        <div class="row pad-left-medium pad-top remove-pad-on-phone">

                            <article class="span12 add-top-half">
                                <i class="icon-flag features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Permukiman dan Perumahan</h3>
                                <h3 class="text-shadow-off pad-right add-top small-para">Menyelenggarakan Permukiman dan Perumahan yang Tertata Baik serta Layak Huni.</h3>
                                <img  class="border-bottom-high" src="{{ asset('images/skpd/dcktr/perumahan1.jpg') }}" width="700" />
                            </article>

                        </div>

                        <div class="row pad-left-medium pad-top remove-pad-on-phone">

                            <article class="span12 add-top-half">
                                <i class="icon-th-large features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Penataan Ruang</h3>
                                <p class="text-shadow-off pad-right add-top small-para">Meyelenggarakan Penataan Ruang yang Efektif, Efisien dan Berwawasan Lingkungan serta Bekelanjutan</p>
                                <img class="border-bottom-high" src="{{ asset('images/skpd/dcktr/tataruang1.jpg') }}" width="700" />
                            </article>

                        </div>

                        <div class="row pad-left-medium pad-top add-bottom remove-pad-on-phone">

                            <article class="span12 add-top-half">
                                <i class="icon-heart features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Pembangunan Infrastruktur</h3>
                                <p class="text-shadow-off pad-right add-top small-para">Mewujudkan Pembangunan Infrastruktur Permukiman dalam rangka Meningkatkan Derajat Hidup </p>
                                <img class="border-bottom-high" src="{{ asset('images/skpd/dcktr/infrastruktur1.jpg') }}" width="700"/>
                            </article>

                        </div>

                        <div class="row pad-left-medium pad-top add-bottom remove-pad-on-phone">

                            <article class="span12 add-top-half">
                                <i class="icon-heart features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Penataan dan Pengendalian Bangunan</h3>
                                <p class="text-shadow-off pad-right add-top small-para">Menyelenggrakan Penataan dan Pengendalian Bangunan yang Berbasis pada Daya Dukung Lingkungan </p>
                                <img class="border-bottom-high" src="{{ asset('images/skpd/dcktr/penataan.jpg') }}" width="700"/>
                            </article>

                        </div>

                        <div class="row pad-left-medium pad-top add-bottom remove-pad-on-phone">

                            <article class="span12 add-top-half">
                                <i class="icon-heart features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Sistem Pengelolaan Persampahan</h3>
                                <p class="text-shadow-off pad-right add-top small-para">Menyelenggarakan Sistem Pengelolaan Persampahan,yang Berawawasan Lingkungan dan Partisipatif </p>
                                <img class="border-bottom-high" src="{{ asset('images/skpd/dcktr/sampah1.jpg') }}" width="700"/>
                            </article>

                        </div>

                        <div class="row pad-left-medium pad-top add-bottom remove-pad-on-phone">

                            <article class="span12 add-top-half">
                                <i class="icon-heart features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Sistem Pencegahan</h3>
                                <p class="text-shadow-off pad-right add-top small-para">Menyelenggarakan Sistem Pencegahan dan Penanggulangan Bahaya Kebakaran </p>
                                <img class="border-bottom-high" src="{{ asset('images/skpd/dcktr/damkar.jpg') }}" width="700"/>
                            </article>

                        </div>

                        <div class="row pad-left-medium pad-top add-bottom remove-pad-on-phone">

                            <article class="span12 add-top-half">
                                <i class="icon-heart features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Ruang Terbuka Hijau</h3>
                                <p class="text-shadow-off pad-right add-top small-para">Menyediakan Ruang Terbuka Hijau yang Nyaman dan Estetis </p>
                                <img class="border-bottom-high" src="{{ asset('images/skpd/dcktr/hijau.jpg') }}" width="700"/>
                            </article>

                        </div>
                    </article>
                    <!--block : ends-->



                    <!--block : starts-->
                    <article class="align-left block add-bottom-extra">
                        <div class="row pad-left-medium pad-top-half add-bottom remove-pad-on-phone">

                            <nav class="promo-social pad-top-half align-left">
                                <a href="#"><i class="icon-facebook-sign"></i></a>
                                <a href="#"><i class="icon-twitter"></i></a>
                                <a href="#"><i class="icon-linkedin"></i></a>
                                <a href="#"><i class="icon-pinterest"></i></a>
                                <a href="#"><i class="icon-google-plus"></i></a>
                            </nav>

                        </div>
                    </article>
                    <!--block : ends-->

                </div>
                <!--outer row : ends-->

            </article>
            <!--span12 ends-->
        </div>
    </section>
@endsection

@section('team')
    <section id="team" class="page-right">
        <div class="row">
            <!--span12 starts-->
            <article class="span10 align-center pad-top offset2 remove-offset-on-phone">

                <!--outer row : starts-->
                <div class="row pad-top-extra">

                    <!--block : starts-->
                    <article class="align-left block add-bottom-medium">
                        <h1 class="in-main-heading color-high text-shadow-white">
                        <span class="iconize color-high">/</span>
                        <span class="iconize color-dark">/</span>
                        <span class="big-one add-left-half">Staff dan <span class="color-dark">karyawan</span></span>
                        </h1>
                        {{-- <h3 class="in-sub-heading add-top add-bottom-half color-dark">
                        We are creative people without having any limitation to our thoughts. We freak out, we dance, we jump in the air and sometimes we never sleep! We are that much awesome so you can never miss a project with us.
                        </h3> --}}
                    </article>
                    <!--block : ends-->

                    <!--block : starts-->
                    <div class="row pad-left-medium pad-top-medium remove-pad-on-phone">

                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center team-block-in">
                                    <div class="team-img-wrap">
                                        <img title="aura by designova" alt="aura" src="{{ asset('images/img/team/01.jpg') }}">
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">nama</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">Subbagian Penyusunan Program</h4>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>


                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center">
                                    <div class="team-img-wrap">
                                        <img title="aura by designova" alt="aura" src="{{ asset('images/img/team/02.jpg') }}">
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">nama</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">Subbagian Keuangan</h4>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>


                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center team-block-in">
                                    <div class="team-img-wrap">
                                        <img src="{{ asset('images/img/team/03.jpg') }}" title="aura by designova" alt="aura"/>
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">nama</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">Subbagian Kepegawaian dan Umum</h4>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>

                    </div>

                    <div class="row pad-left-medium pad-top-medium remove-pad-on-phone">

                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center team-block-in">
                                    <div class="team-img-wrap">
                                        <img title="aura by designova" alt="aura" src="{{ asset('images/img/team/01.jpg') }}">
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">nama</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">Seksi Pembangunan dan Pembinaan Perumahan</h4>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>


                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center">
                                    <div class="team-img-wrap">
                                        <img title="aura by designova" alt="aura" src="{{ asset('images/img/team/02.jpg') }}">
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">nama</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">Seksi Pengembangan Fasilitas Umum</h4>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>


                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center team-block-in">
                                    <div class="team-img-wrap">
                                        <img src="{{ asset('images/img/team/03.jpg') }}" title="aura by designova" alt="aura"/>
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">nama</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">Seksi Pengembangan Kawasan</h4><br>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>

                    </div>

                    <div class="row pad-left-medium pad-top-medium remove-pad-on-phone">

                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center team-block-in">
                                    <div class="team-img-wrap">
                                        <img title="aura by designova" alt="aura" src="{{ asset('images/img/team/01.jpg') }}">
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">nama</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">Seksi Penyehatan Lingkungan Permukiman</h4>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>


                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center">
                                    <div class="team-img-wrap">
                                        <img title="aura by designova" alt="aura" src="{{ asset('images/img/team/02.jpg') }}">
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">nama</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">Seksi Air Bersih</h4><br>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>


                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center team-block-in">
                                    <div class="team-img-wrap">
                                        <img src="{{ asset('images/img/team/03.jpg') }}" title="aura by designova" alt="aura"/>
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">nama</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">Seksi Persampahan</h4><br>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>

                    </div>

                    <div class="row pad-left-medium pad-top-medium remove-pad-on-phone">

                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center team-block-in">
                                    <div class="team-img-wrap">
                                        <img title="aura by designova" alt="aura" src="{{ asset('images/img/team/01.jpg') }}">
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">nama</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">Seksi Pemanfaatan dan pengendalian</h4>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>


                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center">
                                    <div class="team-img-wrap">
                                        <img title="aura by designova" alt="aura" src="{{ asset('images/img/team/02.jpg') }}">
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">nama</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">Seksi Perencanaan Ruang</h4><br>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>


                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center team-block-in">
                                    <div class="team-img-wrap">
                                        <img src="{{ asset('images/img/team/03.jpg') }}" title="aura by designova" alt="aura"/>
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">nama</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">Seksi Pembinaan Pemanfaatan Ruang</h4>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>

                    </div>

                    <div class="row pad-left-medium pad-top-medium remove-pad-on-phone">

                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center team-block-in">
                                    <div class="team-img-wrap">
                                        <img title="aura by designova" alt="aura" src="{{ asset('images/img/team/01.jpg') }}">
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">nama</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">Seksi Pembangunan Gedung</h4>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>


                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center">
                                    <div class="team-img-wrap">
                                        <img title="aura by designova" alt="aura" src="{{ asset('images/img/team/02.jpg') }}">
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">nama</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">Seksi Pengendalian Bangunan</h4>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>


                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center team-block-in">
                                    <div class="team-img-wrap">
                                        <img src="{{ asset('images/img/team/03.jpg') }}" title="aura by designova" alt="aura"/>
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">nama</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">Seksi Pembinaan Jasa Konstruksi</h4>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>

                    </div>

                    <div class="row pad-left-medium pad-top-medium remove-pad-on-phone">

                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center team-block-in">
                                    <div class="team-img-wrap">
                                        <img title="aura by designova" alt="aura" src="{{ asset('images/img/team/01.jpg') }}">
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">nama</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">UPT Pemadam Kebakaran</h4>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>


                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center">
                                    <div class="team-img-wrap">
                                        <img title="aura by designova" alt="aura" src="{{ asset('images/img/team/02.jpg') }}">
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">nama</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">UPT Kebersihan</h4>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>


                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center team-block-in">
                                    <div class="team-img-wrap">
                                        <img src="{{ asset('images/img/team/03.jpg') }}" title="aura by designova" alt="aura"/>
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">nama</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">UPT Pemakaman dan Pertamanan</h4>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>

                    </div>


                    <!--block : starts-->
                    <article class="align-left block add-top add-bottom-extra">
                        <div class="row pad-left-medium pad-top-half add-bottom remove-pad-on-phone">

                            <nav class="promo-social pad-top-half align-left">
                                <a href="#"><i class="icon-facebook-sign"></i></a>
                                <a href="#"><i class="icon-twitter"></i></a>
                                <a href="#"><i class="icon-linkedin"></i></a>
                                <a href="#"><i class="icon-pinterest"></i></a>
                                <a href="#"><i class="icon-google-plus"></i></a>
                            </nav>

                        </div>
                    </article>
                    <!--block : ends-->

                </div>
                <!--outer row : ends-->

            </article>
            <!--span12 ends-->
        </div>
    </section>
@endsection

@section('blog')
    <section id="blog" class="page-right">
        <div class="row">
            <!--span12 starts-->
            <article class="span10 align-center pad-top offset2 remove-offset-on-phone">


                <!--outer row : starts-->
                <div class="row pad-top-extra">

                    <!--block : starts-->
                    <article class="align-left block add-bottom-medium">
                        <h1 class="in-main-heading color-high text-shadow-white">
                        <span class="iconize color-high">/</span>
                        <span class="iconize color-dark">/</span>
                        <span class="big-one add-left-half">Artikel <span class="color-dark">DCKTR</span></span>
                        </h1>
                        <h3 class="in-sub-heading add-top add-bottom-half color-dark">
                        Artikel yang berhubungan dengan penyelenggaraan kegiatan maupun ilmu pengetahuan yang berhubungan dengan DCKTR
                        </h3>
                    </article>
                    <!--block : ends-->

                    <!--block : starts-->
                    <div class="row pad-left-medium pad-top-medium remove-pad-on-phone">


                        <div class="span12">

                            <!--blog-block : starts-->
                            <article class="blog-block add-bottom">
                                <img  alt="aura" title="aura by designova" src="{{ asset('images/img/posts/01.jpg') }}"/>
                                <div class="blog-post-heading">
                                    <h3 class="blog-title">Judul Artikel</h3>
                                    <a class="blog-button btn btn-aura-dark" href="#">Baca Detail</a>
                                    <br class="blog-clear"/>
                                </div>
                                <div class="blog-stats">
                                    <ul class="post-data">
                                        <li><i class="icon-calendar"></i> 02/10/12</li>
                                        <li><i class="icon-user"></i> <a href="#">Di tulis Oleh Admin</a></li>
                                    </ul>
                                </div>
                            </article>
                            <!--blog-block : ends-->
                            <!--blog-block : starts-->
                            <article class="blog-block add-bottom">
                                <img  alt="aura" title="aura by designova" src="{{ asset('images/img/posts/01.jpg') }}"/>
                                <div class="blog-post-heading">
                                    <h3 class="blog-title">Judul Artikel</h3>
                                    <a class="blog-button btn btn-aura-dark" href="#">Baca Detail</a>
                                    <br class="blog-clear"/>
                                </div>
                                <div class="blog-stats">
                                    <ul class="post-data">
                                        <li><i class="icon-calendar"></i> 02/10/12</li>
                                        <li><i class="icon-user"></i> <a href="#">Di tulis Oleh Admin</a></li>
                                    </ul>
                                </div>
                            </article>
                            <!--blog-block : ends-->
                            <!--blog-block : starts-->
                            <article class="blog-block add-bottom">
                                <img  alt="aura" title="aura by designova" src="{{ asset('images/img/posts/01.jpg') }}"/>
                                <div class="blog-post-heading">
                                    <h3 class="blog-title">Judul Artikel</h3>
                                    <a class="blog-button btn btn-aura-dark" href="#">Baca Detail</a>
                                    <br class="blog-clear"/>
                                </div>
                                <div class="blog-stats">
                                    <ul class="post-data">
                                        <li><i class="icon-calendar"></i> 02/10/12</li>
                                        <li><i class="icon-user"></i> <a href="#">Di tulis Oleh Admin</a></li>
                                    </ul>
                                </div>
                            </article>
                            <!--blog-block : ends-->
                            <!--blog-block : starts-->
                            <article class="blog-block add-bottom">
                                <img  alt="aura" title="aura by designova" src="{{ asset('images/img/posts/01.jpg') }}"/>
                                <div class="blog-post-heading">
                                    <h3 class="blog-title">Judul Artikel</h3>
                                    <a class="blog-button btn btn-aura-dark" href="#">Baca Detail</a>
                                    <br class="blog-clear"/>
                                </div>
                                <div class="blog-stats">
                                    <ul class="post-data">
                                        <li><i class="icon-calendar"></i> 02/10/12</li>
                                        <li><i class="icon-user"></i> <a href="#">Di tulis Oleh Admin</a></li>
                                    </ul>
                                </div>
                            </article>
                            <!--blog-block : ends-->

                        </div>
                        <!--span12 : ends-->

                    </div>
                    <!--block : ends-->


                </div>
                <!--outer row : ends-->


            </article>
            <!--span12 ends-->
        </div>
    </section>
@endsection

@section('contact')
    <section id="contact" class="page-right">
        <div class="row">
            <!--span12 starts-->
            <article class="span10 align-center pad-top offset2 remove-offset-on-phone">


                <!--outer row : starts-->
                <div class="row pad-top-extra">

                    <!--block : starts-->
                    <article class="align-left block add-bottom-medium">
                        <h1 class="in-main-heading color-high text-shadow-white">
                        <span class="iconize color-high">/</span>
                        <span class="iconize color-dark">/</span>
                        <span class="big-one add-left-half">Lebih dekat dengan kami <span class="color-dark"></span></span>
                        </h1>
                        <h3 class="in-sub-heading add-top add-bottom-half color-dark">
                        Kami membuka pintu untuk seluruh masyarakat yang ingin mengetahui semua tentang dinas kami.
                        </h3>
                    </article>
                    <!--block : ends-->

                    <!--block : starts-->
                    <div class="row pad-left-medium pad-top-medium remove-pad-on-phone">


                        <div class="span12">

                            <!--contact-block : starts-->
                            <div class="contact-block">


                                <!--contact-block-in : starts-->
                                {{-- <div class="align-center contact-block-in"> --}}


                                    <!--contactform : starts-->
                                    {{-- <div class="contactform pad-top pad-bottom-half add-bottom align-left pad-left">


                                        <form method="post" enctype="multipart/form-data" action="sendcontact.php" id="contactForm" name="myform">

                                            <article>
                                                Name
                                                <span class="error" id="fname" style="display: none;">Please enter your Name</span>
                                                <br>
                                                <input type="text" required id="name" name="name">
                                            </article>

                                            <article>
                                                Email
                                                <span class="error" id="fmail" style="display: none;">Please enter a valid Email</span>
                                                <br>
                                                <input type="email" required id="email" name="email">
                                            </article>


                                            <article>
                                                Message
                                                <span class="error" id="fmsg" style="display: none;">Please enter your Message</span>
                                                <br>
                                                <textarea id="msg" required name="message"></textarea>
                                            </article>

                                            <article>
                                                <button id="submit" name="submit" type="submit" class="btn btn-large btn-aura-dark">Send message</button>
                                            </article>
                                        </form>


                                    </div> --}}
                                    <!--contactform : ends-->


                                {{-- </div> --}}
                                <!--contact-block-in : ends-->

                            </div>
                            <!--contact-block : ends-->
                            <!--contact-block : starts-->
                            <div class="contact-block address-panel">


                                <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">Alamat</h3>
                                <p class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">
                                DINAS CIPTA KARYA DAN TATA RUANG.<br/>
                                Kabupaten Bandung Barat<br/>
                                Jl padalarang - cisarua km 2 Ds.Mekarsari Kec.Ngamprah Kode Pos 40552<br/><br/>
                                Telepon: +012-345678<br/>
                                Fax: +012-345678<br/>
                                </p>

                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#" title="email@domain.tld"> <i class="icon-envelope-alt"></i></a>
                                    <a href="#" title="+123-4546789"><i class="icon-phone"></i></a>
                                    <a href="#" title="skype username"><i class="icon-cloud"></i></a>
                                </nav>

                            </div>
                            <!--contact-block : ends-->


                            <!--block : starts-->
                            <article class="align-left block add-top add-bottom-extra">
                                <div class="row pad-left-medium pad-top-half add-bottom remove-pad-on-phone">

                                    <nav class="promo-social pad-top-half align-left">
                                        <a href="#"><i class="icon-facebook-sign"></i></a>
                                        <a href="#"><i class="icon-twitter"></i></a>
                                        <a href="#"><i class="icon-linkedin"></i></a>
                                        <a href="#"><i class="icon-pinterest"></i></a>
                                        <a href="#"><i class="icon-google-plus"></i></a>
                                    </nav>

                                </div>
                            </article>
                            <!--block : ends-->


                        </div>
                        <!--span12 : ends-->

                    </div>
                    <!--block : ends-->


                </div>
                <!--outer row : ends-->


            </article>
            <!--span12 ends-->
        </div>
    </section>
@endsection

@section('js')
    <script>
        // Create an array of images that you'd like to use
        var images = [
            "{{ asset('images/skpd/dcktr/tataruang.jpg') }}",
            "{{ asset('images/skpd/dcktr/perumahan.jpg') }}",
            "{{ asset('images/skpd/dcktr/infrastruktur.jpg') }}",
            "{{ asset('images/skpd/dcktr/ruang_hijau.jpg') }}"
        ];

        // A little script for preloading all of the images
        // It's not necessary, but generally a good idea
        $(images).each(function(){
            $('<img/>')[0].src = this;
        });

        // The index variable will keep track of which image is currently showing
            var index = 0;

            // Call backstretch for the first time,
            // In this case, I'm settings speed of 500ms for a fadeIn effect between images.
            $.backstretch(images[index], {speed: 500});

            // Set an interval that increments the index and sets the new image
            // Note: The fadeIn speed set above will be inherited
            setInterval(function() {
                index = (index >= images.length - 1) ? 0 : index + 1;
                $.backstretch(images[index]);
            }, 5000);
    </script>
@endsection
