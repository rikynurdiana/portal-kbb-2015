<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="widget">
                    <div class="widget_title"><h3>Hubungi Kami</h3></div>
                    <div class="tb_widget_categories">
                        <ul>
                            <li><a href="#">Alamat :</a> Jl padalarang - cisarua km 2 Ds.Mekarsari Kec.Ngamprah Kode Pos 40552</li>
                            <li><a href="#">Telepon :</a> (022) 123 456 789</li>
                            <li><a href="#">Email</a> admin@bandungbaratkab.go,id</li>
                            <li><a href="#">Website :</a> www.bandungbaratkab.com</li>
                        </ul>
                    </div>
                </div>
                <div class="widget">
                    <div class="widget_title"><h3>Sosial Media</h3></div>
                    <div class="tb_widget_socialize clearfix">
                        <a href="http://www.facebook.com/" target="_blank" class="icon facebook">
                            <div class="symbol"><i class="fa fa-facebook"></i></div>
                            <div class="text"><p>46,841</p><p>Facebook</p></div>
                        </a>
                        <a href="https://plus.google.com" target="_blank"  class="icon google">
                            <div class="symbol"><i class="fa fa-google-plus"></i></div>
                            <div class="text"><p>17,045</p><p>Google+</p></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget">
                    <div class="widget_title"><h3>Berita Terbaru</h3></div>
                    <div class="tb_widget_top_rated clearfix">

                    @foreach( $beritaq as $beritas )
                        <div class="item clearfix">
                            <div class="item_thumb">
                                <div class="thumb_hover">
                                    <a href="/berita/{{ $beritas->id }}/show"><img src="{{ asset($beritas->gambar) }}" alt="Post" height="55px"></a>
                                </div>
                            </div>
                            <div class="item_content">
                                <div class="item_meta clearfix">
                                    <span class="meta_rating" title="Rated 4.50 out of 5">
                                        <span jQuery>
                                           {{ $beritas->created_at->format('d-m-Y') }}
                                        </span>
                                    </span>
                                </div>
                                <h4><a href="/berita/{{ $beritas->id }}/show">{{ $beritas->ringkasan_judul }}..</a></h4>
                            </div>
                            <div class="order">{{ $beritas->id }}</div>
                        </div>
                    @endforeach

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget">
                    <div class="widget_title"><h3>Pengumuman Baru</h3></div>
                    <div class="tb_widget_recent_list clearfix">

                    @foreach ( $pengumumanq as $pengumumans)
                        <div class="item clearfix">
                            <div class="item_thumb">
                                <div class="thumb_icon">
                                    <a href="/pengumuman/{{ $pengumumans->id }}/show"><i class="fa fa-copy"></i></a>
                                </div>
                                <div class="thumb_hover">
                                    <a href="/pengumuman/{{ $pengumumans->id }}/show"><img src="{{ asset($pengumumans->gambar) }}" alt="Post" height="55px"></a>
                                </div>
                            </div>
                            <div class="item_content">
                                <h4><a href="/pengumuman/{{ $pengumumans->id }}/show">{{ $pengumumans->ringkasan_judul }}..</a></h4>
                                <div class="item_meta clearfix">
                                    <span class="meta_date">{{ $pengumumans->created_at->format('d-m-Y') }}</span>
                                    <span class="meta_comments"><a href="#">{{ $pengumumans->id }}</a></span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget">
                    <div class="widget_title"><h3>Artikel</h3></div>
                    <div class="tb_widget_categories">
                        <ul>
                            @foreach( $artikel as $artikels )
                            <li><a href="/artikel/{{ $artikels->id }}/show">{{ $artikels->ringkasan_judul }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="copyright" role="contentinfo">
    <div class="container">
        <p>&copy; 2016 Kabupaten Bandung Barat.</p>
    </div>
</div>
