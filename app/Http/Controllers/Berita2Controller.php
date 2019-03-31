<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use App\Http\Models\Berita;
use App\Http\Models\Artikel;
use App\Http\Models\Berita2;
use App\Http\Models\Pengumuman;
use App\Http\Models\Galery;
use App\Http\Models\Media;
use File;
use Input;
use Redirect;
use Session;
use Validator;
use DB;
use Flash;
use Image;


class Berita2Controller extends Controller
{

    public function index()
    {
        $berita2 = Berita2::orderBy('id','desc')->paginate(5);
        return view('dashboard.berita2.index', compact('berita2'));
    }

    public function create()
    {
        return view('dashboard.berita2.create');
    }

    public function store(Request $request)
    {
        $input = Input::all();
        $input['ringkasan'] = (strlen($input['deskripsi']) > 100) ? substr($input['deskripsi'], 0, 100) : $input['deskripsi'];
        $input['ringkasan_judul'] = (strlen($input['judul']) > 25) ? substr($input['judul'], 0, 25) : $input['judul'];
        Berita2::create( $input );

        Flash::overlay('Berhasil menambah berita');
        return Redirect::route('berita2.index');
    }

    public function show(Artikel $artikelx, Berita $berita, Berita2 $berita2s, Galery $galery, Pengumuman $pengumuman, Media $media)
    {
        $beritax = Berita::orderBy('created_at','desc')->paginate(3);
        $berita2v = Berita2::orderBy('created_at','desc')->paginate(3);
        $beritaz = Berita::orderBy('created_at','desc')->paginate(6);
        $galery = Galery::orderBy('created_at','desc')->paginate(6);
        $pengumuman = Pengumuman::orderBy('created_at','desc')->paginate(3);
        $artikelx = Artikel::orderBy('created_at','desc')->paginate(9);
        $media = Media::orderBy('created_at','desc')->paginate(3);
        $berita2 = Berita2::orderBy('created_at','desc')->paginate(3);
        $beritaq = Berita::orderBy('created_at','desc')->paginate(4);
        $pengumumanq = Pengumuman::orderBy('created_at','desc')->paginate(4);

        return view('dashboard.berita2.detail', compact('artikelx', 'berita', 'berita2', 'beritax', 'beritaz','galery', 'pengumuman', 'media', 'berita2s', 'berita2v', 'beritaq', 'pengumumanq'));
    }

    public function lists(Artikel $artikelx, Berita $berita, Berita2 $berita2, Galery $galery, Pengumuman $pengumuman, Media $media)
    {
        $berita = Berita::orderBy('created_at','desc')->paginate(7);
        $beritax = Berita::orderBy('created_at','desc')->paginate(3);
        $galery = Galery::orderBy('created_at','desc')->paginate(6);
        $pengumuman = Pengumuman::orderBy('created_at','desc')->paginate(3);
        $berita2 = Berita2::orderBy('created_at','desc')->paginate(3);
        $berita2s = Berita2::orderBy('created_at','desc')->paginate(13);
        $artikelx = Artikel::orderBy('created_at','desc')->paginate(9);
        $media = Media::orderBy('created_at','desc')->paginate(7);
        $beritaq = Berita::orderBy('created_at','desc')->paginate(4);
        $pengumumanq = Pengumuman::orderBy('created_at','desc')->paginate(4);

        return view('dashboard.berita2.list', compact('artikelx', 'berita', 'beritax', 'galery', 'pengumuman', 'berita2', 'berita2s', 'media', 'beritaq', 'pengumumanq'));
    }

    public function edit(Berita2 $berita2)
    {
        return view('dashboard.berita2.update', compact('berita2'));
    }

    public function update(Berita2 $berita2, Request $request)
    {
        $input = array_except(Input::all(), '_method');
        $input['ringkasan'] = (strlen($input['deskripsi']) > 100) ? substr($input['deskripsi'], 0, 100) : $input['deskripsi'];
        $input['ringkasan_judul'] = (strlen($input['judul']) > 25) ? substr($input['judul'], 0, 25) : $input['judul'];

        Flash::overlay('Berita berhasil diupdate');
        $berita2->update($input);
        return Redirect::route('berita2.index');
    }

    public function destroy(Berita2 $berita2)
    {
        $berita2->delete();
        Flash::overlay('Berita berhasil dihapus!!');
        return Redirect::route('berita2.index');
    }
}
