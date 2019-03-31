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
                    <div class="panel_title">
                        <div>
                            <h4><a href="#">Berita Tanpa Foto</a></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col_12_of_12">

                            @foreach( $berita2s as $beritas)
                            <div class="layout_post_2 clearfix">
                                <div class="item_thumb">
                                    <div class="thumb_icon">
                                        <a href="/berita2/{{ $beritas->id }}/show"><i class="fa fa-copy"></i></a>
                                    </div>
                                    <div class="thumb_meta">
                                        <span class="category"><a href="#">Kategori</a></span>
                                        <span class="comments"><a href="#">By Admin</a></span>
                                    </div>
                                </div>
                                <div class="item_content">
                                    <h4><a href="/berita2/{{ $beritas->id }}/show">{{ $beritas->judul }}</a></h4>
                                    <p>{{ $beritas->ringkasan }} [...]</p>
                                    <div class="item_meta clearfix">
                                    <span class="meta_date">{{ $beritas->created_at->format('d-m-Y') }}</span>
                                </div>
                                </div>
                            </div>
                            @endforeach
                            <ul class="pagination">
                              <li>{!!$berita2s->render()!!}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel_title">
                        <div>
                            <h4><a href="#">Berita Lainnya</a></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col_6_of_12">


                            <div class="list_posts">
                                @foreach( $berita as $beritas)
                                <div class="post clearfix">
                                    <div class="item_thumb">
                                        <div class="thumb_icon">
                                            <a href="/berita/{{ $beritas->id }}/show"><i class="fa fa-copy"></i></a>
                                        </div>
                                        <div class="thumb_hover">
                                            <a href="/berita/{{ $beritas->id }}/show"><img src="{{ asset($beritas->gambar) }}" alt="Post"></a>
                                        </div>
                                    </div>
                                    <div class="item_content">

                                        <h4><a href="/berita/{{ $beritas->id }}/show">{{ $beritas->ringkasan_judul }}</a></h4>
                                        <div class="item_meta clearfix">
                                            <span class="meta_date">{{ $beritas->created_at->format('d-m-Y') }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col col_6_of_12">
                            <div class="list_posts">
                                @foreach( $media as $medias)
                                <div class="post clearfix">
                                    <div class="item_thumb">
                                        <div class="thumb_icon">
                                            <a href="/media/{{ $medias->id }}/show"><i class="fa fa-copy"></i></a>
                                        </div>
                                        <div class="thumb_hover">
                                            <a href="/media/{{ $medias->id }}/show"><img src="{{ asset($medias->gambar) }}" alt="Post"></a>
                                        </div>
                                    </div>
                                    <div class="item_content">

                                        <h4><a href="/media/{{ $medias->id }}/show">{{ $medias->ringkasan_judul }}</a></h4>
                                        <div class="item_meta clearfix">
                                            <span class="meta_date">{{ $medias->created_at->format('d-m-Y') }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
@endsection


