@extends('dashboard.master')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Konten Artikel</h3>
                </div>
                <div class="title_right"></div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>List Semua Artikel</h2>
                            <ul class="nav navbar-right panel_toolbox ">
                                <li><a href="/artikel/create" type="button" class="btn btn-success">Tambah Artikel</a></li>
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
                                        <th>Gambar Artikel </th>
                                        <th width="300px">judul </th>
                                        <th>Isi Artikel </th>
                                        <th>Kategori </th>
                                        <th class=" no-link last " width="100"><center><span class="nobr">Edit</span></center>
                                        <th class=" no-link last" width="100"><center><span class="nobr">Hapus</span></center></th>
                                    </tr>
                                </thead>
                                    @foreach( $artikel as $artikels )
                                        <tbody>
                                            <tr class="even pointer">
                                                {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('artikel.destroy', $artikels->id))) !!}
                                                <td class="a-center "></td>
                                                <td class=" "><img src="{{ asset($artikels->gambar) }}" class="img-rounded" alt="{{ $artikels->judul }}" width="200" height="140"></td>
                                                <td class=" ">{{ $artikels->judul }}</td>
                                                <td class=" ">{{ $artikels->ringkasan }}</td>
                                                <td class=" ">{{ $artikels->kategori }}</td>
                                                <td><center>{!! link_to_route('artikel.edit', 'Edit', array($artikels->id), array('class' => 'btn btn-info')) !!}</center></td>
                                                <td><center>{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}</center></td>
                                                {!! Form::close() !!}
                                            </tr>
                                        </tbody>
                                    @endforeach
                            </table>
                            {!!$artikel->render()!!}
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
    </div>
@endsection