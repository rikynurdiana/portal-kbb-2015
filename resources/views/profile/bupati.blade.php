@extends('profile.master')

@section('navbar')
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
                    <li><a href="/profile/wabup">Profile Wakil Bupati</a></li>
                    <li><a href="/profile/sekda">Profile SEKDA</a></li>
                </ul>
            </div>
        </div>
    </nav>
@endsection

@section('slide')
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <div class="carousel-inner">
                <div class="item active" style="background-image: url({{ asset('images/background.jpg') }})">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Drs. H. Abubakar, M.Si,</h1>
                                    <h2 class="animation animated-item-2">Bupati Kabupaten Bandung Barat</h2>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="{{ asset('images/b1.png') }}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('biodata')
    <section id="middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown" data-wow-delay="1s">
                    <div class="skill">
                        <h2>PROFILE BUPATI</h2>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Lahir pada tanggal 9 Desember 1952 di Cimahi - Bandung. Masa kecil dan pendidikan dasar hingga meraih gelar Magister ditempuh dengan suka cita di kota kelahirannya. Selepas menamatkan pendidikan di SMA Negeri 5 Bandung (1971) beliau melanjutkan studinya di Universitas Langlangbuana Bandung dan memperoleh gelar sarjananya pada tahun 1990. 
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Sedangkan gelar Magister Manajemen diraihnya dari UNIGA pada tahun 2000. Sampai saat ini telah dikaruniai 3 (tiga) orang anak dari istrinya yang bernama Dra. Hj.Elin Suharliah, M.Si. Drs. H. Abubakar, M.Si sekarang ini bertempat tinggal di alamat Jl. Grand Hotel No. 33 RT.04 / RW. 05 Lembang - Kabupaten Bandung Barat.
                        </p>
                    </div>

                </div>

                <div class="col-sm-6 wow fadeInDown" data-wow-delay="2s">
                    <div class="accordion">
                        <h2>BIODATA SINGKAT</h2>
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  Biodata diri
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                    <div class="media-body">
                                         <p>Nama Lengkap : Drs. H. Abubakar, M.Si</p>
                                         <p>Tempat, Tanggal Lahir : Bandung, 9 Desember 1952</p>
                                         <p>Agama : Islam</p>
                                         <p></p>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Keluarga
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <p>Nama Isteri : Dra. Hj.Elin Suharliah, M.Si.</p>
                                <p>Nama Anak :</p>
                                <p>1. Hj. Alia Kadarsih Abubakar</p>
                                <p>2. Aulia Hasan Sumantri</p>
                                <p>3. Aulia HUsen Subagja</p>
                                <p></p>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  Jenjang pendidikan kedinasan
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <p>> APDN Bandung, Lulus tahun 1975</p>
                                <p>> Diklat Pembentukan Pembantu Jaksa, Tahun 1980</p>
                                <p>> Diklat Kepemimpinan Pemerintahan Dalam Negeri Angkatan I, Tahun 1989</p>
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

@section('pendidikan')
    <section id="services" class="service-item">
       <div class="container">
            <div class="row">
                  <div class="page-header wow fadeInDown" data-wow-delay="1s">
                    <h7 id="timeline">JENJANG PENDIDIKAN FORMAL</h7>
                  </div>
                  <ul class="timeline">
                    <li class="wow fadeInLeft" data-wow-delay="1s">
                      <div class="timeline-badge">2000</div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Pasca Sarjana UNIGA</h4>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Lulus tahun 2000</small></p>
                        </div>
                      </div>
                    </li>
                    <li class="timeline-inverted wow fadeInRight" data-wow-delay="1s">
                      <div class="timeline-badge warning">1990</div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Universitas Langlang Buana</h4>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Lulus tahun 1990</small></p>
                        </div>
                      </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-delay="1s">
                      <div class="timeline-badge danger">1971</div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">SMA Negeri 5 Bandung</h4>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Lulus tahun 1971</small></p>
                        </div>
                      </div>
                    </li>
                    <li class="timeline-inverted wow fadeInRight" data-wow-delay="1s">
                        <div class="timeline-badge success">1968</div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">SMP Negeri 1 Cimahi</h4>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Lulus tahun 1968</small></p>
                        </div>
                      </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-delay="1s">
                      <div class="timeline-badge info">1965</div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">SD Negeri II Cimahi</h4>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Lulus tahun 1965</small></p>
                        </div>
                      </div>
                    </li>
                  </ul>

            </div>
        </div>
    </section>
@endsection

@section('galery')
    <section>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="well">
                    <div id="myCarousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-3"><a href="#" class="thumbnail"><img class="img-responsive" src="{{ asset('images/7.jpg') }}" alt="Thumb11"></a>
                                    </div>
                                    <div class="col-md-3"><a href="#" class="thumbnail"><img class="img-responsive" src="{{ asset('images/5.jpg') }}" alt="Thumb12"></a>
                                    </div>
                                    <div class="col-md-3"><a href="#" class="thumbnail"><img class="img-responsive" src="{{ asset('images/6.jpg') }}" alt="Thumb13"></a>
                                    </div>
                                    <div class="col-md-3"><a href="#" class="thumbnail"><img class="img-responsive" src="{{ asset('images/7.jpg') }}" alt="Thumb14"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-3"><a href="#" class="thumbnail"><img class="img-responsive" src="{{ asset('images/8.jpg') }}" alt="Thumb21"></a>
                                    </div>
                                    <div class="col-md-3"><a href="#" class="thumbnail"><img class="img-responsive" src="{{ asset('images/7.jpg') }}" alt="Thumb22"></a>
                                    </div>
                                    <div class="col-md-3"><a href="#" class="thumbnail"><img class="img-responsive" src="{{ asset('images/6.jpg') }}" alt="Thumb23"></a>
                                    </div>
                                    <div class="col-md-3"><a href="#" class="thumbnail"><img class="img-responsive" src="{{ asset('images/5.jpg') }}" alt="Thumb24"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-3"><a href="#" class="thumbnail"><img class="img-responsive" src="{{ asset('images/7.jpg') }}" alt="Thumb31"></a>
                                    </div>
                                    <div class="col-md-3"><a href="#" class="thumbnail"><img class="img-responsive" src="{{ asset('images/5.jpg') }}" alt="Thumb32"></a>
                                    </div>
                                    <div class="col-md-3"><a href="#" class="thumbnail"><img class="img-responsive" src="{{ asset('images/6.jpg') }}" alt="Thumb33"></a>
                                    </div>
                                    <div class="col-md-3"><a href="#" class="thumbnail"><img class="img-responsive" src="{{ asset('images/7.jpg') }}" alt="Thumb34"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"></a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next"></a>

                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('organisasi')
    <section id="services" class="service-item">
        <div class="container">
            <div class="row">
                  <div class="page-header wow fadeInDown" data-wow-delay="1s">
                    <h7 id="timeline">KEDUDUKAN DALAM BERORGANISASI</h7>
                  </div>
                  <ul class="timeline">
                    <li class="wow fadeInLeft" data-wow-delay="1.5s">
                      <div class="timeline-badge">2012</div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Dewan Penasihat FKPPI Kabupaten Bandung</h4>
                        </div>
                      </div>
                    </li>
                    <li class="timeline-inverted wow fadeInRight" data-wow-delay="1s">
                      <div class="timeline-badge warning">2012</div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Dewan Musytasyar Dewan Masjid Indonesia Kabupaten Bandung</h4>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Periode 2007 - 2012</small></p>
                        </div>
                      </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-delay="1s">
                      <div class="timeline-badge danger">2007</div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Ketua Badan Pertimbangan BAZ (Badan Amil Zakat) Kabupaten Bandung</h4>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Tahun 2007 s/d sekarang</small></p>
                        </div>
                      </div>
                    </li>
                    <li class="timeline-inverted wow fadeInRight" data-wow-delay="1s">
                        <div class="timeline-badge success">2006</div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Wakil Ketua BNK Bandung (Badan Narkotika Kabupaten Bandung</h4>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Tahun 2006 s/d sekarang</small></p>
                        </div>
                      </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-delay="1s">
                      <div class="timeline-badge info">2006</div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Ketua SATLAK PPK - IPM Kabupaten Bandung</h4>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Tahun 2006 s/d sekarang</small></p>
                        </div>
                      </div>
                    </li>
                    <li class="timeline-inverted wow fadeInRight" data-wow-delay="1s">
                        <div class="timeline-badge success">2005</div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Ketua I L L I Kabupaten Bandung</h4>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Tahun 2005 s/d sekarang</small></p>
                        </div>
                      </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-delay="1s">
                      <div class="timeline-badge">2005</div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Penasehat KBIH Nurul Failah</h4>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Tahun 2005 s/d sekarang</small></p>
                        </div>
                      </div>
                    </li>
                    <li class="timeline-inverted wow fadeInRight" data-wow-delay="1s">
                        <div class="timeline-badge info">2003</div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Ketua Umum Persikab Kabupaten Bandung</h4>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Tahun 2003 s/d sekarang</small></p>
                        </div>
                      </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-delay="1s">
                      <div class="timeline-badge warning">2003</div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Sekretaris Mabicab Kwarcab Pramuka Kabupaten Bandung</h4>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Tahun 2003 s/d sekarang</small></p>
                        </div>
                      </div>
                    </li>
                    <li class="timeline-inverted wow fadeInRight" data-wow-delay="1s">
                        <div class="timeline-badge danger">2003</div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Pembina Koperasi RRKR Kabupaten Bandung</h4>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Tahun 2003 s/d sekarang</small></p>
                        </div>
                      </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-delay="1s">
                      <div class="timeline-badge success">2003</div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Ketua LPTQ Kabupaten Bandung, Tahun</h4>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Tahun 2003 s/d sekarang</small></p>
                        </div>
                      </div>
                    </li>
                    <li class="timeline-inverted wow fadeInRight" data-wow-delay="1s">
                        <div class="timeline-badge">1993</div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Dewan Penasihat DKM Masjid Agung Lembang</h4>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Tahun 1993 s/d sekarang</small></p>
                        </div>
                      </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-delay="1s">
                      <div class="timeline-badge info">1976</div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Ketua Dewan Pengurus KORPRI Kabupaten Bandung</h4>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Tahun 1976 s/d sekarang</small></p>
                        </div>
                      </div>
                    </li>
                  </ul>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p>&copy; 2016 Kabupaten bandung Barat.</p>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="/">Kembali Ke Beranda</a></li>
                        <li><a href="/profile/wabup">Profile Wakil Bupati</a></li>
                        <li><a href="/peofile/sekda">Profile SEKDA</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection

