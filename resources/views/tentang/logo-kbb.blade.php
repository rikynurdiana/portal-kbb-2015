@extends('tentang.master')

@section('css')
    <link rel='stylesheet' type='text/css' href="{{ asset('main/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" type="text/css" media="(min-width:769px) and (max-width:992px)" href="{{ asset('/blogs/css/responsive-768.css') }}">
    <link rel="stylesheet" type="text/css" media="(min-width:993px) and (max-width:1200px)" href="{{ asset('/blogs/css/responsive-992.css') }}">
    <link rel="stylesheet" type="text/css" media="(min-width:1201px)" href="{{ asset('/blogs/css/responsive-1200.css') }}">
@endsection

@section('gotop')
    <div class="w-hidden-small w-hidden-tiny w-clearfix go-top" data-ix="move-top-btn">
        <a class="w-inline-block button btn-top" href="#top">
        <i class="fa fa-arrow-up"></i>
        </a>
    </div>
@endsection

@section('banner')
    <div class="w-section inner-banner" id="top" data-ix="show-top-btn">
        <div class="w-container">
            <div class="w-row">
                <div class="w-col w-col-9">
                    <div class="breadcrumb">Lambang Daerah&nbsp;<span class="lighter"><span>|</span> <em>Pemda Kabupaten Bandung Barat.</em>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div>
        <img src="{{ asset('images/arti_logo.png') }}">
    </div>
@endsection

@section('js')
@endsection