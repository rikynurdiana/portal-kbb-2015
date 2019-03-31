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
                    <div class="breadcrumb">Peta dan Letak Geografis&nbsp;<span class="lighter"><span>|</span> <em>Pemda Kabupaten Bandung Barat.</em>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shadow"><img src="{{ asset('images/shadow-3.png') }}" alt="shadow-3.png"></div>
@endsection

@section('content2')
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
                <div class="tittle-line wow bounceInLeft" data-wow-delay="1s">
                    <h4>Barat :</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInLeft" data-wow-delay="1s">berbatasan dengan kabupaten Cianjur.</h5>
                <div class="tittle-line wow bounceInLeft" data-wow-delay="1s">
                    <h4>Utara :</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInLeft" data-wow-delay="1s">berbatasan dengan Kabupaten Purwakarta dan Kabupaten Subang.</h5>
                <div class="tittle-line wow bounceInLeft" data-wow-delay="1s">
                    <h4>Timur :</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInLeft" data-wow-delay="1s">berbatasan dengan Kabupaten bandung dan Kota Cimahi.</h5>
                <div class="tittle-line wow bounceInLeft" data-wow-delay="1s">
                    <h4>Selatan :</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <h5 class="wow bounceInLeft" data-wow-delay="1s">berbatasan dengan Selatan Kabupaten Badung dan Kabupaten Cianjur.</h5>
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
                <div class="tittle-line wow bounceInRight" data-wow-delay="1s">
                    <h4>Utara :</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <div class="w-row">
                    <div class="col-md-5">
                        <h5 class="wow bounceInRight" data-wow-delay="1s">> Kec. Cikalong Kulon,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="1s">> Kec. Maniis,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="1s">> Darang,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="1s">> Bojong,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="1s">> Kec. Wanayasa,</h5>
                    </div>
                    <div class="col-md-5">
                        <h5 class="wow bounceInRight" data-wow-delay="1s">> Kec. Sagalaherang,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="1s">> Jalancagak,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="1s">> Cisalak,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="1s">> Kab. Sumedang.</h5>
                    </div>
                </div>
                <div class="tittle-line wow bounceInRight" data-wow-delay="1s">
                    <h4>Timur :</h4>
                    <div class="divider-1 small"><div class="divider-small"></div></div>
                </div>
                <div class="w-row">
                    <div class="col-md-5">
                        <h5 class="wow bounceInRight" data-wow-delay="1s">> Kec. Cilengkrang,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="1s">> Kec. Cimenyan,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="1s">> Kec. Margaasih,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="1s">> Kec. Soreang,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="1s">> Kec. Cidadap,</h5>
                    </div>
                    <div class="col-md-6">
                        <h5 class="wow bounceInRight" data-wow-delay="1s">> Kec. Sukasari</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="1s">> Kec. Cisalak,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="1s">> Kec. Cimahi Utara,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="1s">> Kec. Cimahi Tengah,</h5>
                        <h5 class="wow bounceInRight" data-wow-delay="1s">> Kec. Cimahi Selatan.</h5>
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

@section('js')
@endsection