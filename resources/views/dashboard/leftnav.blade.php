<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="/admin" class="site_title"> <span> Dashboard KBB</span></a>
        </div>
        <div class="clearfix"></div>
        <div class="profile">
            <div class="profile_pic">
                <img src="{{ asset('images/img.jpg') }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Selamat Datang</span>
                <h2>{{ Auth::user()->name }}</h2>
            </div>
        </div>
        <br />
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Menu Dashboard</h3>
                <ul class="nav side-menu">
                    <li><a href="/admin"><i class="fa fa-home"></i> Home </a>
                    </li>
                    <li><a href="/berita/index"><i class="fa fa-edit"></i> Berita Utama</a>
                    </li>
                    <li><a href="/berita2/index"><i class="fa fa-file"></i> Berita Tanpa Foto</a>
                    </li>
                    <li><a href="/artikel/index"><i class="fa fa-book"></i> Artikel</a>
                    </li>
                    <li><a href="/media/index"><i class="fa fa-newspaper-o"></i> Berita Media Masa</a>
                    </li>
                    <li><a href="/galery/index"><i class="fa fa-desktop"></i> Galeri Kegiatan</a>
                    </li>
                    <li><a href="/pengumuman/index"><i class="fa fa-table"></i> Pengumuman</a>
                    </li>
                    <li><a href="#"><i class="fa fa-bar-chart-o"></i> Laporan Data <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">Data 1</a>
                            </li>
                            <li><a href="#">Data 2</a>
                            </li>
                            <li><a href="#">Data 3</a>
                            </li>
                            <li><a href="#">Data 3</a>
                            </li>
                            <li><a href="#">Data 4</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Portal</h3>
                <ul class="nav side-menu">
                    <li><a href="/"><i class="fa fa-laptop"></i> Kembali Ke Website <span class="label label-success pull-right">portal</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>