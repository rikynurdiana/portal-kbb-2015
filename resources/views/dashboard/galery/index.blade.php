@extends('dashboard.master')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Konten Galery Kegiatan</h3>
                </div>
                <div class="title_right"></div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>List Semua Kegiatan</h2>
                            <ul class="nav navbar-right panel_toolbox ">
                                <li><a href="/galery/create" type="button" class="btn btn-success">Tambah Kegiatan</a></li>
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        @include('flash::message')
                            @if ( Session::has('flash_message') )
                                <div class="allert {{ Session::get('flash_type') }}">
                                    <h1>{{ Session::get('flash_message') }}</h1>
                                </div>
                            @endif
                        <div class="x_content">
                            <table id="example" class="table table-striped responsive-utilities jambo_table">
                                <thead>
                                    <tr class="headings">
                                        <th></th>
                                        <th width="250px">Gambar Kegiatan </th>
                                        <th>SKPD </th>
                                        <th>Deskripsi </th>
                                        <th>Kategori </th>
                                        <th class=" no-link last " width="100"><center><span class="nobr">Edit</span></center></th>
                                        <th class=" no-link last" width="100"><center><span class="nobr">Hapus</span></center></th>
                                    </tr>
                                </thead>
                                @foreach( $galery as $galerys )
                                <tbody>
                                    <tr class="even pointer">
                                        {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('galery.destroy', $galerys->id))) !!}
                                        <td class="a-center "></td>
                                        <td class=" "><img src="{{ asset($galerys->gambar) }}" class="img-rounded" alt="{{ $galerys->deskripsi }}" width="200" height="140"></td>
                                        <td class=" ">{{ $galerys->skpd }}</td>
                                        <td class=" ">{{ $galerys->deskripsi }}</td>
                                        <td class=" ">{{ $galerys->kategori }}</td>
                                        <td><center>{!! link_to_route('galery.edit', 'Edit', array($galerys->id), array('class' => 'btn btn-info')) !!}</center></td>
                                        <td><center>{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}</center></td>
                                        {!! Form::close() !!}
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                            {!!$galery->render()!!}
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