@extends('tentang.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('profile/css/responsive.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('profile/css/timeline.css') }}" >
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
                    <div class="breadcrumb">Profile Lengkap&nbsp;<span class="lighter"><span>|</span> <em>Pemda Kabupaten Bandung Barat.</em></span></div>
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
            <h3 class="wow bounceInLeft" data-wow-delay="1s">“BANDUNG BARAT CERMAT”</h3>
            <h5 class="wow bounceInRight" data-wow-delay="1s">Bersama membangun masyarakat yang cerdas, rasional, maju, agamis, dan sehat. Berbasis pada pengembangan kawasan agroindustri dan wisata ramah lingkungan.</h5></center>
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

@section('content')
    <div>
        <img src="{{ asset('images/arti_logo.png') }}">
    </div>
@endsection

@section('content4')
    <div class="w-container">
        <div class="w-row">
            <center><h2 class="wow bounceInLeft" data-wow-delay="1s">Letak Geografis Kabupaten Bandung Barat</h2></center>
        <div class="shadow"><img src="{{ asset('images/shadow-3.png') }}" alt="shadow-3.png"></div>

            <div class="col-md-6">
                <div class="tittle-line wow bounceInLeft" data-wow-delay="1s">
                    <h4>Wilayah Administratif</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInLeft" data-wow-delay="1s">Berdasarkan data, luas wilayah Kabupaten Bandung Barat yaitu 1.305,77 KM², terletak antara 60º 41’ s/d 70º 19’ lintang Selatan dan 107º 22’ s/d 108º 05’ Bujur Timur. Mempunyai rata-rata ketinggian 110 M dan Maksimum 2.2429 M dari permukaan laut. Kemiringa wilayah yang bervariasi antara 0 – 8%, 8 – 15% hingga diatas 45%, dengan batas wilayah sebagai berikut :</h5>
                <div class="tittle-line wow bounceInLeft" data-wow-delay="1.5s">
                    <h4>Barat :</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInLeft" data-wow-delay="1.5s">berbatasan dengan kabupaten Cianjur.</h5>
                <div class="tittle-line wow bounceInLeft" data-wow-delay="2s">
                    <h4>Utara :</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInLeft" data-wow-delay="2s">berbatasan dengan Kabupaten Purwakarta dan Kabupaten Subang.</h5>
                <div class="tittle-line wow bounceInLeft" data-wow-delay="2.5s">
                    <h4>Timur :</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInLeft" data-wow-delay="2.5s">berbatasan dengan Kabupaten bandung dan Kota Cimahi.</h5>
                <div class="tittle-line wow bounceInLeft" data-wow-delay="3s">
                    <h4>Selatan :</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInLeft" data-wow-delay="3s">berbatasan dengan Selatan Kabupaten Badung dan Kabupaten Cianjur.</h5>
                <br>
                <div class="tittle-line wow bounceInLeft" data-wow-delay="1s">
                    <h4>Cakupan wilayah</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInLeft" data-wow-delay="1s">Cakupan wilayah Kabupaten Bandung Barat, meliputi 15 (lima belas) kecamatan yang terdiri dari :</h5>
                <div class="w-row">
                    <div class="col-md-4">
                        <h5 class="wow bounceInLeft" data-wow-delay="1s">> Padalarang,</h5>
                        <h5 class="wow bounceInLeft" data-wow-delay="1s">> Cikalongwetan,</h5>
                        <h5 class="wow bounceInLeft" data-wow-delay="1s">> Cililin,</h5>
                        <h5 class="wow bounceInLeft" data-wow-delay="1s">> Parongpong,</h5>
                        <h5 class="wow bounceInLeft" data-wow-delay="1s">> Cipatat,</h5>
                    </div>
                    <div class="col-md-4">
                        <h5 class="wow bounceInLeft" data-wow-delay="1s">> Cisarua,</h5>
                        <h5 class="wow bounceInLeft" data-wow-delay="1s">> Batujajar,</h5>
                        <h5 class="wow bounceInLeft" data-wow-delay="1s">> Ngamprah,</h5>
                        <h5 class="wow bounceInLeft" data-wow-delay="1s">> Gununghalu,</h5>
                        <h5 class="wow bounceInLeft" data-wow-delay="1s">> Cipongkor,</h5>
                    </div>
                    <div class="col-md-4">
                        <h5 class="wow bounceInLeft" data-wow-delay="1s">> Cipeundeuy,</h5>
                        <h5 class="wow bounceInLeft" data-wow-delay="1s">> Lembang,</h5>
                        <h5 class="wow bounceInLeft" data-wow-delay="1s">> Sindangkerta,</h5>
                        <h5 class="wow bounceInLeft" data-wow-delay="1s">> Cihampelas,</h5>
                        <h5 class="wow bounceInLeft" data-wow-delay="1s">> Rongga.</h5>
                    </div>
                </div>
                <br>
                <div class="tittle-line wow bounceInLeft" data-wow-delay="1s">
                    <h4>Penggunaan lahan Eksisting</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInLeft" data-wow-delay="1s">Dilihat dari sisi penggunaan lahan di wilayah Kabupaten Bandung Barat, penggunaan lahan untuk budidaya pertanian merupakan penggunaan lahan terbesar yaitu 66.500,294 HA, sedangkan yang termasuk kawasan lindung seluas 50.150,928 HA, budidaya non peratanian seluas 12.159,151 HA dan lainnya seluas 1.768,654 HA.</h5>
                <h5 class="wow bounceInLeft" data-wow-delay="1s">Luas wilayah lindung di daerah Kabupaten Bandung Barat terkait dengan isu kawasan bandung utara, disamping itu dilihat dari kondisi fisik geografis posisi wilayah Kabupaten Bandung Barat dinilai kurang menguntungkan, hal ini dikarenakan terdiri dari banyak cekungan yang berbukit-bukit dan di daerah-daerah tertentu sangat rawan dengan bencana alam.</h5>
                <br>
            </div>
            <div class="col-md-6">
                <div class="tittle-line wow bounceInRight" data-wow-delay="1s">
                    <h4>Batas wilayah</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInRight" data-wow-delay="1s">Dilihat dari sisi penggunaan lahan di wilayah Kabupaten Bandung Barat, penggunaan lahan untuk budidaya pertanian merupakan penggunaan lahan terbesar yaitu 66.500,294 HA, sedangkan yang termasuk kawasan lindung seluas 50.150,928 HA, budidaya non peratanian seluas 12.159,151 HA dan lainnya seluas 1.768,654 HA.</h5>
                <div class="tittle-line wow bounceInRight" data-wow-delay="2s">
                    <h4>Utara :</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <div class="w-row">
                    <div class="col-md-5">
                        <h5 class="wow bounceInRight" data-wow-delay="2s">> Kec. Cikalong Kulon,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="2s">> Kec. Maniis,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="2s">> Darang,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="2s">> Bojong,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="2s">> Kec. Wanayasa,</h5>
                    </div>
                    <div class="col-md-5">
                        <h5 class="wow bounceInRight" data-wow-delay="2s">> Kec. Sagalaherang,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="2s">> Jalancagak,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="2s">> Cisalak,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="2s">> Kab. Sumedang.</h5>
                    </div>
                </div>
                <div class="tittle-line wow bounceInRight" data-wow-delay="2.5s">
                    <h4>Timur :</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <div class="w-row">
                    <div class="col-md-5">
                        <h5 class="wow bounceInRight" data-wow-delay="2.5s">> Kec. Cilengkrang,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="2.5s">> Kec. Cimenyan,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="2.5s">> Kec. Margaasih,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="2.5s">> Kec. Soreang,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="2.5s">> Kec. Cidadap,</h5>
                    </div>
                    <div class="col-md-6">
                        <h5 class="wow bounceInRight" data-wow-delay="2.5s">> Kec. Sukasari</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="2.5s">> Kec. Cisalak,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="2.5s">> Kec. Cimahi Utara,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="2.5s">> Kec. Cimahi Tengah,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="2.5s">> Kec. Cimahi Selatan.</h5>
                    </div>
                </div>
                <div class="tittle-line wow bounceInRight" data-wow-delay="1s">
                    <h4>Selatan :</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <div class="w-row">
                    <div class="col-md-4">
                        <h5 class="wow bounceInLeft" data-wow-delay="1s">> Kec. Ciwidey,</h5>
                    </div>
                    <div class="col-md-4">
                        <h5 class="wow bounceInLeft" data-wow-delay="1s">> Kec. Rancabali,</h5>
                    </div>
                    <div class="col-md-4">
                        <h5 class="wow bounceInLeft" data-wow-delay="1s">> Kec. Pagelaran.</h5>
                    </div>
                </div>
                <div class="tittle-line wow bounceInRight" data-wow-delay="1s">
                    <h4>Barat :</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInRight" data-wow-delay="1s">&nbsp;&nbsp;&nbsp;> Kec. Campaka,</h5>
                <h5 class="wow bounceInRight" data-wow-delay="1s">&nbsp;&nbsp;&nbsp;> Kec. Cibeber,</h5>
                <h5 class="wow bounceInRight" data-wow-delay="1s">&nbsp;&nbsp;&nbsp;> Kec. Bojongpicung,</h5>
                <h5 class="wow bounceInRight" data-wow-delay="1s">&nbsp;&nbsp;&nbsp;> Kec. Ciranjang,</h5>
                <h5 class="wow bounceInRight" data-wow-delay="1s">&nbsp;&nbsp;&nbsp;> Kec. Mande.</h5>
                <br>
            </div>
        </div>
    </div>
    <br><br>
    <div class="wow bounceInLeft" data-wow-delay="1s">
        <center><h2 class="wow bounceInLeft" data-wow-delay="1s">Peta Wilayah Kabupaten Bandung Barat</h2></center>
        <div class="shadow"><img src="{{ asset('images/shadow-3.png') }}" alt="shadow-3.png"></div>
        <img src="{{ asset('images/peta_kbb.png') }}">
    </div>
    <br>
@endsection

@section('content5')
    <section id="services" class="service-item">
       <div class="container">
            <div class="row">
                  <div class="page-header wow fadeInDown" data-wow-delay="1s">
                    <h8 id="timeline">SEJARAH KABUPATEN BANDUNG BARAT</h8>
                  </div>
                  <ul class="timeline">
                    <li class="wow fadeInLeft" data-wow-delay="1s">
                      <div class="timeline-badge"></div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Wacana</h4>
                          <p>Wacana pemekaran Kabupaten Bandung menjadi 2 kabupaten telah muncul sejak tahun l999. Berdasarkan surat permohonan Bupati KDH TK.II Bandung yang saat itu dijabat oleh bapak H.U.Hatta Djati Permana . S.Ip mengajukan surat kepada Ketua DPRD yang saat itu pimpinan DPRD / Ketua DPRD diketuai Bapak H.Obar Sobarna.S.Ip. Surat permohonan Bupati bernomor :135/1235/Tapem tanggal 22 juni 1999 perihal permohonan persetujuan pemekaran wilayah Kabupaten Dati II Bandung. Bupati memohon kepada pimpinan beserta anggota DPRD kiranya dapat mengabulkan dan mendukung atas terselenggaranya rencana pemekaran Kabupaten Bandung menjadi Kabupaten DT II Bandung dan Kabupaten Padalarang (sekarang Kabupaten Bandung Barat). Hal tersebut disambut positif oleh DPRD Kabupaten Bandung dengan diterbitkannya surat keputusan DPRD Dati II Bandung no.5/1999/12/07 tentang persetujuan awal DPRDterhadap pemekaran wilayah Kabupaten Dati II Bandung. Namun pada tanggal 23 Desember 1999, Ketua DPRD Kabupaten Bandung melayangkan surat No.135/1499/TU tentang pemekaran Kabupaten Bandung yang isinya antara lain : Kami sampaikan bahwa proses awal yang sedang ditempuh oleh Pemda (sesuai UU no 5/74) agar ditangguhkan /dihentikan , demi ketertiban dan kelancaran pelaksanaan selanjutnya sesuai dengan Undang-Undang no 22/1999.</p>
                        </div>
                      </div>
                    </li>
                    <li class="timeline-inverted wow fadeInRight" data-wow-delay="1s">
                      <div class="timeline-badge warning"></div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Perkembangan</h4>
                          <p>Perkembangan selanjutnya sesuai UU No.22/1999, sebagian kecil dari wilayah Kabupaten Bandung yaitu Kota Administratif Cimahi ditingkatkan statusnya menjadi Pemerintah Kota Cimahi ( yang meliputi 3 Kecamatan ) yaitu Kecamatan Cimahi Selatan, Kecamatan Cimahi tengah dan Kecamatan Cimahi utara, maka rencana pemekaran Kabupaten Bandung semakin tertunda karena Kota Cimahi sebelumnya merupakan bagian dari wilayah administratif Kabupaten Bandung. Setelah Cimahi menjadi Kota Otonom, terpisah dari kabupaten Bandung, tuntutan pemekaran Kabupaten Bandung mencuat kembali ke permukaan sejalan dengan dibukanya ruang publik untuk mengaspirasikan kehendak membentuk daerah otonom baru hal tersebut dijamin oleh Undang-Undang No.22/1999.</p>
                        </div>
                      </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-delay="1s">
                      <div class="timeline-badge danger"></div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Tuntutan</h4>
                          <p>Tuntutan pemekaran wilayah kabupaten Bandung, dilihat dari kondisi geografisnya oleh beberapa kalangan dinilai dapat dipahami sebab wilayah Kabupaten Bandung cukup luas (2.324.84 KM2) dengan letak wilayah mengelilingi Kota Bandung dan Kota Cimahi, disamping itu jumlah penduduknya cukup banyak , berdasarkan SUPAS 2002 sebanyak 4,3 Juta jiwa. Berangkat dari kondisi itulah pada tanggal 9 agustus 1999 para tokoh masyarakat Bandung Barat berkumpul membentuk Forum Pendukung Percepatan Pemekaran Kabupaten Bandung Barat yang dipimpin ketuanya Drs.H.Endang Anwar, setahun kemudian terbentuk lagi Forum Peduli Bandung Barat yang diketuai Asep Suhardi, Forum Bandung Barat Bersatu yang dipimpin H.Zaenal Abidin , Drs. Ade Ratmadja , Asep Suhardi dan Asep Ridwan Hermawan., serta Forom Pemuda Bandung Barat yang dipimpin Eman Sulaeman SE. Karena sama-sama untuk memperjuangkan berdirinya Kabupaten Bandung Barat, untuk menyamakan visi misi perjuangan maka berbagai LSM dan Forum bergabung dalam satu wadah Komite Pembentukan Kabupaten Bandung Barat (KPPKBB) yang dipimpin ketua umumnya Drs.H.Endang Anwar. KPKBB bersama elemen masyarakat Bandung Barat mengawali upaya perjuangannya dengan melaksanakan DEKLARASI BERSAMA untuk terus berjuang agar Bandung Barat menjadi DAERAH OTONOM terpisah dari Kabupaten Bandung , deklarasi tersebut dilaksanakan di Gedung Diklat Keuangan Gado Bangkong Kecamatan Ngamprah pada tanggal 30 Agustus 2003 Naskah Deklarasi dibacakan dan ditanda tangani berbagai elemen masyarakat Bandung Barat. Hal tersebut diakukan KPPKBB sebagai bentuk komitmen bersama dalam upayanya memperjuangkan dan menyampaikan aspirasi keberbagai lembaga baik legislatif maupun eksekutif Daerah Kab.Bandung, Provinsi Jawa Barat dan Pemerinah Pusat serta DPR RI/DPD RI . sampai lahirnya Undang-Undang Republik Indonesia No12.tahun 2007 Tentang Pembentukan Kabupaten Bandung Barat Menjadi Daerah Otonom di Provinsi Jawa Barat.</p>
                        </div>
                      </div>
                    </li>
                    <li class="timeline-inverted wow fadeInRight" data-wow-delay="1s">
                        <div class="timeline-badge success"></div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Penjabat Sementara</h4>
                          <p>Penjabat Sementara Bupati Bandung Barat Drs.H.Tjatja Kuswara ,SH.MH selesai menjalankan tugasnya pada tanggal 17 Juli 2008, Bupati dan Wakil Bupati Bandung Barat pertama Drs.H.Abubakar M.Si dan Drs.Ernawan Natasaputra hasil pemilihan langsung dilantik pada tanggal 17 juli 2008 oleh Gubernur Jawa Barat Achmad Heriawan, Lc atas nama Presiden. (Drs. Ade Ratmadja. Kabupaten Bandung Barat adalah kabupaten baru provinsi Jawa Barat, Indonesia, pemekaran dari Kabupaten Bandung. Kabupaten ini berbatasan dengan Kabupaten Purwakarta dan Kabupaten Subang di sebelah barat dan utara, Kabupaten Bandung dan Kota Cimahi di sebelah timur, serta Kabupaten Cianjur di sebelah barat dan timur. Kabupaten Bandung Barat mewarisi sekitar 1,4 juta penduduk dari 42,9% wilayah lama Kabupaten Bandung</p>
                        </div>
                      </div>
                    </li>
                  </ul>
            </div>
        </div>
    </section>
@endsection

@section('js')
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
@endsection