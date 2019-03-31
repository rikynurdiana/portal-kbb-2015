@extends('dashboard.master')

@section('css')
<style type="text/css">
#container_berita {
    height: 400px;
    min-width: 310px;
    max-width: 800px;
    margin: 0 auto;
}
</style>
@endsection

@section('content')
<div class="right_col" role="main">

    <div class="row tile_count">
        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <span class="count_top"><i class="fa fa-user"></i> Total Berita</span>
                <div class="count green">{!! $totalberita !!}</div>
                <span class="count_bottom"><i class="green">{!! $totberitanow !!} </i>Berita baru hari ini</span>
            </div>
        </div>
        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <span class="count_top"><i class="fa fa-clock-o"></i> Total Pengumuman</span>
                <div class="count ">{!! $totalpengumuman !!}</div>
                <span class="count_bottom"><i class="green">{!! $totpengumumannow !!} </i>Pengumuman baru hari ini</span>
            </div>
        </div>
        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <span class="count_top"><i class="fa fa-user"></i> Total Berita Media Masa</span>
                <div class="count ">{!! $totalmedia !!}</div>
                <span class="count_bottom"><i class="green">{!! $totmedianow !!} </i>Berita baru hari ini</span>
            </div>
        </div>
        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <span class="count_top"><i class="fa fa-user"></i> Total Berita Tanpa Foto</span>
                <div class="count ">{!! $totalberita2 !!}</div>
                <span class="count_bottom"><i class="green">{!! $totberita2now !!} </i>Berita baru hari ini</span>
            </div>
        </div>
        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <span class="count_top"><i class="fa fa-user"></i> Total Artikel</span>
                <div class="count">{!! $totalartikel !!}</div>
                <span class="count_bottom"><i class="green">{!! $totartikelnow !!} </i>Artikel baru hari ini</span>
            </div>
        </div>
        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <span class="count_top"><i class="fa fa-user"></i> Total Foto kegiatan</span>
                <div class="count">{!! $totalkegiatan !!}</div>
                <span class="count_bottom"><i class="green">{!! $totkegiatannow !!} </i>Foto baru hari ini</span>
            </div>
        </div>
    </div>

    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-8">
                <div class="x_panel" style="height:600px;">
                    <div class="x_title">
                        <h2>Grafik Pertumbuhan Berita SKPD</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                     <div class="x_content">
                        <div class="dashboard-widget-content">

                <div id="container_berita" ></div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="x_panel" style="height:600px;">
                    <div class="x_title">
                        <h2>Berita Terbaru</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="dashboard-widget-content">
                            <ul class="list-unstyled timeline widget">
                            @foreach( $berita as $beritas )
                                <li>
                                    <div class="block">
                                        <div class="block_content">
                                            <h2 class="title">
                                                <a>{{ $beritas->ringkasan_judul }}...</a>
                                            </h2>
                                            <div class="byline">
                                                <span>{{ $beritas->created_at }}</span> by <a>{{ $beritas->nama }}</a>
                                            </div>
                                            <p class="excerpt">{{ $beritas->ringkasan }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="x_panel" style="height:500px;">
                    <div class="x_title">
                        <h2>Pertumbuhan Foto Kegiatan</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="dashboard-widget-content">
                            <div id="container_galeri" ></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="x_panel" style="height:500px;">
                    <div class="x_title">
                        <h2>Grafik Pertumbuhan Artikel, Berita Media Masa dan Berita Tanpa Foto</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="dashboard-widget-content">
                            <div id="container_news" ></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="x_panel" >
                    <div class="x_title">
                        <h2>Pengumuman Terbaru </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <ul class="list-unstyled timeline">
                        @foreach( $pengumuman as $pengumumans )
                            <li>
                                <div class="block">
                                    <div class="tags">
                                        <a href="#" class="tag">
                                            <span>{{ $pengumumans->skpd }}</span>
                                        </a>
                                    </div>
                                    <div class="block_content">
                                        <h2 class="title">
                                            <a>{{ $pengumumans->ringkasan_judul }}</a>
                                        </h2>
                                        <div class="byline">
                                            <span>{{ $pengumumans->created_at }}</span> by <a>{{ $pengumumans->nama }}</a>
                                        </div>
                                        <p class="excerpt">{{ $pengumumans->ringkasan }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="x_panel" >
                    <div class="x_title">
                        <h2>Berita Media Masa Terbaru </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <ul class="list-unstyled timeline">
                        @foreach( $media as $medias )
                            <li>
                                <div class="block">
                                    <div class="tags">
                                        <a href="#" class="tag">
                                            <span>{{ $medias->skpd }}</span>
                                        </a>
                                    </div>
                                    <div class="block_content">
                                        <h2 class="title">
                                            <a>{{ $medias->ringkasan_judul }}</a>
                                        </h2>
                                        <div class="byline">
                                            <span>{{ $medias->created_at }}</span> by <a>{{ $medias->nama }}</a>
                                        </div>
                                        <p class="excerpt">{{ $medias->ringkasan }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="x_panel" >
                    <div class="x_title">
                        <h2>Artikel Terbaru </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <ul class="list-unstyled timeline">
                        @foreach( $artikel as $artikels )
                            <li>
                                <div class="block">
                                    <div class="tags">
                                        <a href="#" class="tag">
                                            <span>{{ $artikels->skpd }}</span>
                                        </a>
                                    </div>
                                    <div class="block_content">
                                        <h2 class="title">
                                            <a>{{ $artikels->ringkasan_judul }}</a>
                                        </h2>
                                        <div class="byline">
                                            <span>{{ $artikels->created_at }}</span> by <a>{{ $artikels->nama }}</a>
                                        </div>
                                        <p class="excerpt">{{ $artikels->ringkasan }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            {{-- <div class="col-md-4">
                <div class="x_panel" style="height:600px;">
                    <div class="x_title">
                        <h2>Konten Website</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                     <div class="x_content">
                        <div class="dashboard-widget-content">


                        </div>
                    </div>
                </div>
            </div> --}}


        </div>
    </div>
    <footer>
        <div class="">
            <p class="pull-right">| copyright © 2016. Kabupaten Bandung Barat  <a>| Design & Develop by Riky Nurdiana |</a>
            <span class="lead"> <i class="fa fa-star"></i> Kabupaten Bandung Barat <i class="fa fa-star"></i></span>
            </p>
        </div>
        <div class="clearfix"></div>
    </footer>
</div>
@endsection

@section('js')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
$(function () {
$('#container_berita').highcharts({
    chart: {
        type: 'column',
        margin: 75,
        options3d: {
            enabled: true,
            alpha: 10,
            beta: 25,
            depth: 70
        }
    },
    title: {
        text: 'Jumlah Berita SKPD'
    },
    subtitle: {
        text: 'Pemda Kabupaten Bandung Barat'
    },
    plotOptions: {
        column: {
            depth: 25
        }
    },
    xAxis: {
        categories: Highcharts.getOptions().lang.shortMonths
    },
    yAxis: {
        title: {
            text: null
        }
    },
    series: [{
        name: 'Konten berita',
        data: [{{ $beritajan }}, {{ $beritafeb }}, {{ $beritamar }}, {{ $beritaapr }}, {{ $beritamei }}, {{ $beritajun }}, {{ $beritajul }}, {{ $beritaags }}, {{ $beritasep }}, {{ $beritaokt }}, {{ $beritanov }}, {{ $beritades }}]
    }]
});
});
</script>

<script type="text/javascript">
$(function () {
    $('#container_galeri').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Jumlah Kegiatan Berdasarkan Kategori'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Galeri Kegiatan',
            data: [
                ['pemerintahan', {{ $pemerintahan }}],
                ['masyarakat', {{ $masyarakat }}],
                {
                    name: 'SKPD',
                    y: {{ $skpd }},
                    sliced: true,
                    selected: true
                },
                ['selfie', {{ $selfie }}]
            ]
        }]
    });
});
</script>

<script type="text/javascript">
$(function () {
    $('#container_news').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Informasi Grafik Pertumbuhan Berita Perbulan'
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'Mei',
                'Jun',
                'Jul',
                'Ags',
                'Sep',
                'Okt',
                'Nov',
                'Des'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Banyaknya Berita'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Artikel',
            data: [{{ $artikeljan }}, {{ $artikelfeb }}, {{ $artikelmar }}, {{ $artikelapr }}, {{ $artikelmei }}, {{ $artikeljun }}, {{ $artikeljul }}, {{ $artikelags }}, {{ $artikelsep }}, {{ $artikelokt }}, {{ $artikelnov }}, {{ $artikeldes }}]

        }, {
            name: 'Berita media masa',
            data: [{{ $mediajan }}, {{ $mediafeb }}, {{ $mediamar }}, {{ $mediaapr }}, {{ $mediamei }}, {{ $mediajun }}, {{ $mediajul }}, {{ $mediaags }}, {{ $mediasep }}, {{ $mediaokt }}, {{ $medianov }}, {{ $mediades }}]

        }, {
            name: 'Berita Tanpa Foto',
            data: [{{ $berita2jan }}, {{ $berita2feb }}, {{ $berita2mar }}, {{ $berita2apr }}, {{ $berita2mei }}, {{ $berita2jun }}, {{ $berita2jul }}, {{ $berita2ags }}, {{ $berita2sep }}, {{ $berita2okt }}, {{ $berita2nov }}, {{ $berita2des }}]

        }]
    });
});
</script>
@endsection