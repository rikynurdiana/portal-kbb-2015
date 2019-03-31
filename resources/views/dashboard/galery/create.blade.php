@extends('dashboard.master')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Konten Galery kegiatan</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Input Galery Kegiatan <small>baru</small></h2>
                            <ul class="nav navbar-right panel_toolbox ">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            {!! Form::model(new App\Http\Models\Galery, ['class' => 'form-horizontal','files'=>true, 'route' => ['galery.store']]) !!}
                            <form class="form-horizontal form-label-left" novalidate>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="deskripsi">Deskripsi Kegiatan <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="deskripsi" class="form-control col-md-7 col-xs-12" data-validate-length-range="3" name="deskripsi" required="required" type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="skpd">SKPD <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="skpd" class="form-control col-md-7 col-xs-12" name="skpd" required="required" type="text">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kategori">Kategory Pemerintahan</label>
                                    <div class="radio">
                                        <label class="">
                                            <div class="iradio_flat-green" style="position: relative;"><input value="pemerintahan" type="radio" class="flat" name="kategori" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> 
                                        </label>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kategori">Kategory Masyarakat</label>
                                    <div class="radio">
                                        <label class="">
                                            <div class="iradio_flat-green" style="position: relative;"><input value="masyarakat" type="radio" class="flat" name="kategori" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> 
                                        </label>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kategori">Kategory SKPD</label>
                                    <div class="radio">
                                        <label class="">
                                            <div class="iradio_flat-green" style="position: relative;"><input value="skpd" type="radio" class="flat" name="kategori" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> 
                                        </label>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kategori">Kategory Selfie</label>
                                    <div class="radio">
                                        <label class="">
                                            <div class="iradio_flat-green" style="position: relative;"><input value="selfie" type="radio" class="flat" name="kategori" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> 
                                        </label>
                                    </div>
                                </div>

                                <div class="item form-group ">
                                    {!! Form::label('gambar', 'Foto Kegiatan', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))  !!}
                                    <div class="col-md-6">
                                        {!! Form::file('gambar',['class' => 'btn']) !!}
                                        <p class="errors">{!!$errors->first('image')!!}</p>
                                        @if(Session::has('error'))
                                        <p class="errors">{!! Session::get('error') !!}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <a href="/galery/index" type="button" class="btn btn-primary">Batal</a>
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