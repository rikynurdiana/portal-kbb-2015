@extends('dashboard.master')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            {!! Form::model($berita2, ['method' => 'PATCH', 'route' => ['berita2.update', $berita2->id],'class' => 'form-horizontal','files' => true]) !!}
            <div class="page-title">
                <div class="title_left">
                    <h3>Konten Berita Tanpa Foto</h3>
                </div>
                <div class="title_right pull-right">
                    <div class="form-group pull-right">
                        <a href="/berita2/index" type="button" class="btn btn-primary">Batal</a>
                        <button id="send" type="submit" class="btn btn-success">Posting</button>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-10 col-xs-10">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Edit Berita </h2>
                            <ul class="nav navbar-right panel_toolbox ">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        @if ($errors->any())
                            <div class='flash alert-danger'>
                                @foreach ( $errors->all() as $error )
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        <div class="x_content">
                            <form class="form-horizontal form-label-left" novalidate>
                                <div class="form-group col-sm-12">
                                    {!! Form::label('judul', 'Judul Berita', array('class' => 'col-md-3 control-label'))  !!}
                                    <div class="col-md-9">
                                    {!! Form::text('judul', null,array('class' => 'form-control'),'') !!}</div>
                                </div>
                                <div class="form-group col-sm-12">
                                    {!! Form::label('deskripsi', 'Isi Berita', array('class' => 'col-md-3 control-label')) !!}
                                    <div class="col-md-9">{!! Form::textarea('deskripsi',null, array('class' => 'form-control', 'rows' => '11')) !!}  </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    {!! Form::label('kategori', 'Kategori berita', array('class' => 'col-md-3 control-label'))  !!}
                                    <div class="col-md-9">
                                    {!! Form::text('kategori', null,array('class' => 'form-control'),'') !!}<br></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
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