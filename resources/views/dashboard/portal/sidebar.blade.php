@section('sidebar')
                    <div class="col col_3_of_12">
                        <div class="widget">
                            <div class="widget_title"><h3>Medsos</h3></div>
                            <div class="tb_widget_socialize clearfix">
                                <a href="http://www.facebook.com/" target="_blank" class="icon facebook">
                                    <div class="symbol"><i class="fa fa-facebook"></i></div>
                                    <div class="text"><p>46,841</p><p>Facebook</p></div>
                                </a>
                                <a href="https://plus.google.com" target="_blank" class="icon google">
                                    <div class="symbol"><i class="fa fa-google-plus"></i></div>
                                    <div class="text"><p>17,045</p><p>Google+</p></div>
                                </a>
                                <a href="http://www.twitter.com/" target="_blank" class="icon twitter">
                                    <div class="symbol"><i class="fa fa-twitter"></i></div>
                                    <div class="text"><p>3,075</p><p>Twitter</p></div>
                                </a>
                                <a href="http://www.linkedin.com/" target="_blank" class="icon linkedin">
                                    <div class="symbol"><i class="fa fa-linkedin"></i></div>
                                    <div class="text"><p>15,441</p><p>LinkedIn</p></div>
                                </a>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget_title"><h3>Berita Utama</h3></div>
                            <div class="tb_widget_top_rated clearfix">
                                <div class="item clearfix">
                                    @foreach( $beritax as $beritas)
                                        <div class="item_thumb">
                                            <a href="{{ asset($beritas->gambar) }}" class="popup_link"></a>
                                            <div class="thumb_hover">
                                                <a href="{{ asset($beritas->gambar) }}" class="popup_link"><img src="{{ asset($beritas->gambar) }}" alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="item_content">
                                            <h4><a href="/berita/{{ $beritas->id }}/show">{{ $beritas->ringkasan_judul }}...</a></h4>
                                            <div class="item_meta clearfix">
                                                <p><span class="meta_date">{{ $beritas->created_at->format('d-m-Y') }}</span></p>
                                            </div>
                                        </div><br>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget_title"><h3>Media Masa Umum</h3></div>
                            <div class="tb_widget_timeline clearfix">
                                @foreach( $media as $medias )
                                    <article>
                                        <span class="date">{{ $medias->created_at->format('d-m-Y') }}</span>
                                        <div class="timeline_content">
                                            <i class="fa fa-clock-o" jQuery></i>
                                            <h3><a href="/media/{{ $medias->id }}/show">{{ $medias->judul }}</a></h3>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget_title"><h3>Kegiatan Terbaru</h3></div>
                            <div class="tb_widget_banner_125 clearfix">
                                @foreach( $galery as $galerys )
                                        <a href="{{ asset($galerys->gambar) }}" class="popup_link"><img src="{{ asset($galerys->gambar) }}" alt="Image"></a>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget_title"><h3>Pengumuman SKPD</h3></div>
                            <div class="tb_widget_recent_list clearfix">
                                @foreach( $pengumuman as $pengumumans)
                                    <div class="item clearfix">
                                        <div class="item_thumb">
                                            <a href="{{ asset($pengumumans->gambar) }}" class="popup_link"></a>
                                            <div class="thumb_hover">
                                                <a href="{{ asset($pengumumans->gambar) }}" class="popup_link"><img src="{{ asset($pengumumans->gambar) }}" alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="item_content">
                                            <h4><a href="/pengumuman/{{ $pengumumans->id }}/show">{{ $pengumumans->ringkasan_judul }} ...</a></h4>
                                            <div class="item_meta clearfix">
                                                <span class="meta_date">{{ $pengumumans->created_at->format('d-m-Y') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget_title"><h3>Berita Tanpa Foto</h3></div>
                            <div class="tb_widget_posts_big clearfix">
                                @foreach( $berita2 as $beritaz)
                                    <div class="item clearfix">
                                        <div class="item_content">
                                            <h4><a href="/berita2/{{ $beritaz->id }}/show"><span class="format" jQuery>Acara</span>{{ $beritaz->ringkasan_judul }} ...</a></h4>
                                            <p>{{ $beritaz->ringkasan }} [...]</p>
                                            <div class="item_meta clearfix">
                                                <span class="meta_date">{{ $beritaz->created_at->format('d-m-Y') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection