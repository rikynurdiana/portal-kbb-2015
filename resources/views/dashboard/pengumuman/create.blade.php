@extends('dashboard.master')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Konten Pengumuman</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-6 col-xs-6">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Input Pengumuman <small>baru</small></h2>
                            <ul class="nav navbar-right panel_toolbox ">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            {!! Form::model(new App\Http\Models\Pengumuman, ['class' => 'form-horizontal','files'=>true, 'route' => ['pengumuman.store']]) !!}
                            <form class="form-horizontal form-label-left" novalidate>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="judul">Judul Pengumuman <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="judul" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="judul" required="required" type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="deskripsi">Isi Pengumuman <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="deskripsi" data-validate-length-range="6" required="required" name="deskripsi" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('gambar', 'Gambar / File / Lampiran Pengumuman ( .jpg / .png ) *', array('class' => 'col-md-4 control-label'))  !!}
                                    <div class="col-md-6">
                                        {!! Form::file('gambar',['class' => 'btn']) !!}
                                        <p class="errors">{!!$errors->first('image')!!}</p>
                                        @if(Session::has('error'))
                                        <p class="errors">{!! Session::get('error') !!}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="x_title">
                            <h2>Data Pembuat Pengumuman <small></small></h2>
                            <div class="clearfix"></div>
                        </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Pembuat <span class="required">*</span></label>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <input id="nama" class="form-control col-md-7 col-xs-12" name="nama" required="required" type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="skpd">SKPD <span class="required">*</span></label>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <input id="skpd" class="form-control col-md-7 col-xs-12" name="skpd" required="required" type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bidang">Bidang / Seksi <span class="required">*</span></label>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <input id="bidang" class="form-control col-md-7 col-xs-12" name="bidang" required="required" type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jabatan">Jabatan <span class="required">*</span></label>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <input id="jabatan" class="form-control col-md-7 col-xs-12" name="jabatan" required="required" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('profile', 'Foto Pembuat Pengumuman *', array('class' => 'col-md-4 control-label'))  !!}
                                    <div class="col-md-6">
                                        {!! Form::file('profile',['class' => 'btn']) !!}
                                        <p class="errors">{!!$errors->first('image')!!}</p>
                                        @if(Session::has('error'))
                                        <p class="errors">{!! Session::get('error') !!}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-4 col-md-offset-3">
                                        <a href="/pengumuman/index" type="button" class="btn btn-primary">Batal</a>
                                        <button id="send" type="submit" class="btn btn-success">Posting</button>
                                    </div>
                                </div>
                            </form>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
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