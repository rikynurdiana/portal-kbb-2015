@extends('dashboard.portal.master')

@section('topbanner')
    <div class="header_meta">
        <div class="container">
            <div class="weather_forecast">
                <span class="city">Arsip Berita</span>
                <span class="temp">Pemda Kabupaten Bandung Barat</span>
            </div>
        </div>
    </div>
@endsection

@section('content')
        <section>
        <div class="container">
            <div class="row">
                <div class="col col_9_of_12">
                    <article class="post">
                        <div class="entry_media"></div>
                        <div class="full_meta clearfix">
                            <span class="meta_format"><i class="fa fa-file-text"></i></span>
                            <span class="meta_date">{{ $berita->created_at->format('d-m-Y') }}</span>
                            <span class="meta_comments"><a href="#">Diposting oleh {{ $berita->nama }}</a></span>
                        </div>
                        <div class="entry_content">
                            <h1 class="entry_title">{{ $berita->judul }}</h1>
                            <figure class="wp-caption alignleft" jQuery>
                                <a href="{{ asset($berita->gambar) }}" class="popup_link"><img src="{{ asset($berita->gambar) }}" alt="Image" width="300px"></a>
                                <figcaption class="wp-caption-text">Foto diambil oleh {{ $berita->nama }}</figcaption>
                            </figure>
                            <p class="dropcap">{{ $berita->deskripsi }}</p>
                            <blockquote>
                                <p><span></span>Membaca adalah jendela ilmu, makin banyak membaca maka akan makin banyak ilmu, jadi mari lah sering sering membaca agar ilmu pengetahuan kita semakin bertambah<span></span></p>
                                <footer>Mari kita jadikan hari esok lebih baik dari hari ini</footer>
                            </blockquote>
                        </div>
                        <div class="bottom_wrapper">
                            <div class="entry_tags">
                                <span><i class="fa fa-tags"></i> Kategori</span>
                                <a href="#">{{ $berita->kategori }}</a>
                            </div>
                        </div>
                        <div class="editor_review">
                            <div class="panel_title">
                                <div>
                                    <h4><a href="#">Editor review</a></h4>
                                </div>
                            </div>
                            <div class="inner clearfix">
                                <div class="review">
                                    <div class="review_header">
                                        <div class="title">isi berita</div>
                                        <div class="result">{{ $berita->nilai_isi }}/10</div>
                                    </div>
                                    <div class="review_footer">
                                        <span jQuery></span>
                                    </div>
                                </div>
                                <div class="review">
                                    <div class="review_header">
                                        <div class="title">Informatif</div>
                                        <div class="result">{{ $berita->nilai_informatif }}/10</div>
                                    </div>
                                    <div class="review_footer">
                                        <span jQuery></span>
                                    </div>
                                </div>
                                <div class="review">
                                    <div class="review_header">
                                        <div class="title">Penyajian Konten Berita</div>
                                        <div class="result">{{ $berita->nilai_penyajian }}/10</div>
                                    </div>
                                    <div class="review_footer">
                                        <span jQuery></span>
                                    </div>
                                </div>
                                <div class="review_summary">
                                    <div class="final_result">
                                        <img src="{{ asset( $berita->profile) }}" >
                                    </div>
                                    <div class="final_summary">
                                        <h5>Data Pembuat Berita</h5>
                                        <h5>nama : {{ $berita->nama }}</h5>
                                        <h5>skpd : {{ $berita->skpd }}</h5>
                                        <h5>bidang / seksi : {{ $berita->bidang }}</h5>
                                        <h5>jabatan : {{ $berita->jabatan }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="panel_title">
                        <div>
                            <h4><a href="#">Berita Lainnya</a></h4>
                        </div>
                    </div>
                    <div class="row">
                        @foreach( $beritax as $beritas)
                            <div class="col col_4_of_12">
                                <div class="layout_post_1">
                                    <div class="item_thumb">
                                        <div class="thumb_icon">
                                            <a href="/berita/{{ $beritas->id }}/show" jQuery><i class="fa fa-copy"></i></a>
                                        </div>
                                        <div class="thumb_hover">
                                            <a href="/berita/{{ $beritas->id }}/show"><img src="{{ asset($beritas->gambar) }}" alt="Post" class="visible animated"></a>
                                        </div>
                                        <div class="thumb_meta">
                                            <span class="category" jQuery><a href="#">Kategori</a></span>
                                            <span class="comments"><a href="#">By Admin</a></span>
                                        </div>
                                    </div>
                                    <div class="item_content">
                                        <h4><a href="/berita/{{ $beritas->id }}/show">{{ $beritas->ringkasan_judul }} ...</a></h4>
                                        <div class="item_meta clearfix">
                                            <span class="meta_date">{{ $beritas->created_at->format('d-m-Y') }}</span>
                                        </div>
                                        <p>{{ $beritas->ringkasan }} [...]</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
@endsection
