@extends('dashboard.portal.master')

@section('topbanner')
    <div class="header_meta">
        <div class="container">
            <div class="weather_forecast">
                <span class="city">Portal Berita</span>
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
                            <span class="meta_date">{{ $berita2s->created_at->format('d-m-Y') }}</span>
                            <span class="meta_comments"><a href="#">Diposting oleh Admin</a></span>
                        </div>
                        <div class="entry_content">
                            <h1 class="entry_title">{{ $berita2s->judul }}</h1>
                            <p class="dropcap">{{ $berita2s->deskripsi }}</p>
                        </div>
                        <div class="bottom_wrapper">
                            <div class="entry_tags">
                                <span><i class="fa fa-tags"></i> Kategori</span>
                                <a href="#">{{ $berita2s->kategori }}</a>
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
                                        <div class="result">8/10</div>
                                    </div>
                                    <div class="review_footer">
                                        <span jQuery></span>
                                    </div>
                                </div>
                                <div class="review">
                                    <div class="review_header">
                                        <div class="title">Informatif</div>
                                        <div class="result">5/10</div>
                                    </div>
                                    <div class="review_footer">
                                        <span jQuery></span>
                                    </div>
                                </div>
                                <div class="review">
                                    <div class="review_header">
                                        <div class="title">Penyajian Konten Berita</div>
                                        <div class="result">9/10</div>
                                    </div>
                                    <div class="review_footer">
                                        <span jQuery></span>
                                    </div>
                                </div>
                                <div class="review_summary">
                                    <div class="final_result">
                                        <p>7</p>
                                        <strong>Bagus</strong>
                                        <div class="item_meta clearfix">
                                            <span class="meta_rating" title="Rated 1 out of 5">
                                                <span jQuery><strong>1</strong></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="final_summary">
                                        <h5>Kesimpulan Berita</h5>
                                        <p>Berita yang disajikan cukup informatif untuk masyarakat, menambah inlu pengetahuan di bidang pemerintahan, informatif karena menambah pengetahuan kedaerahan.</p>
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
                        @foreach( $berita2v as $beritas)
                            <div class="col col_4_of_12">
                                <div class="layout_post_1">
                                    <div class="item_thumb">
                                        <div class="thumb_icon">
                                            <a href="/berita2/{{ $beritas->id }}/show" jQuery><i class="fa fa-copy"></i></a>
                                        </div>
                                        <div class="thumb_meta">
                                            <span class="category" jQuery><a href="#">Kategori</a></span>
                                            <span class="comments"><a href="#">By Admin</a></span>
                                        </div>
                                    </div>
                                    <div class="item_content">
                                        <h4><a href="/berita2/{{ $beritas->id }}/show">{{ $beritas->ringkasan_judul }}</a></h4>
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
