<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use App\Http\Models\Pengumuman;
use App\Http\Models\Artikel;
use App\Http\Models\Berita;
use File;
use Input;
use Redirect;
use Session;
use Validator;
use DB;
use Flash;
use Image;


class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::orderBy('id','desc')->paginate(5);
        return view('dashboard.pengumuman.index', compact('pengumuman'));
    }

    public function create()
    {
        return view('dashboard.pengumuman.create');
    }

    public function store(Request $request)
    {
        $input = Input::all();
        $input['ringkasan'] = (strlen($input['deskripsi']) > 100) ? substr($input['deskripsi'], 0, 100) : $input['deskripsi'];
        $input['ringkasan_deskripsi'] = (strlen($input['deskripsi']) > 585) ? substr($input['deskripsi'], 0, 585) : $input['deskripsi'];
        $input['ringkasan_judul'] = (strlen($input['judul']) > 25) ? substr($input['judul'], 0, 25) : $input['judul'];
        $file = array('gambar' => Input::file('gambar'));
        $destinationPath = 'gambar_pengumuman'; // upload path
        $extension = Input::file('gambar')->getClientOriginalExtension(); // getting image extension
        $fileName = rand(111,999).'.'.$extension; // renaming image
        Input::file('gambar')->move($destinationPath, $fileName); // uploading file to given path
        $input['gambar'] =$destinationPath. '/'.$fileName;
        Image::make($input['gambar'] = $destinationPath. '/'.$fileName)->widen(800, null)->insert('watermark-kbb2.png')->save($destinationPath. '/'.$fileName);

        $file = array('profile' => Input::file('profile'));
        $destinationPath2 = 'gambar_profile'; // upload path
        $extension2 = Input::file('profile')->getClientOriginalExtension(); // getting image extension
        $fileName2 = rand(222,888).'.'.$extension2; // renaming image
        Input::file('profile')->move($destinationPath2, $fileName2); // uploading file to given path
        $input['profile'] =$destinationPath2. '/'.$fileName2;

        Pengumuman::create( $input );

        Flash::overlay('Berhasil menambah pengumuman');
        return Redirect::route('pengumuman.index');
    }

    public function show(Artikel $artikel, Pengumuman $pengumuman, Berita $berita)
    {
        $berita = Berita::orderBy('id','desc')->paginate(4);
        $artikel = Artikel::orderBy('created_at', 'desc')->paginate(9);
        $beritaq = Berita::orderBy('id','desc')->paginate(4);
        $pengumumanq = Pengumuman::orderBy('id','desc')->paginate(4);
        return view('dashboard.pengumuman.detail', compact('artikel', 'pengumuman', 'berita', 'beritaq', 'pengumumanq'));
    }

    public function lists(Artikel $artikel, Pengumuman $pengumuman, Berita $berita)
    {
        $pengumuman = Pengumuman::orderBy('id','desc')->paginate(4);
        $berita = Berita::orderBy('id','desc')->paginate(4);
        $beritaq = Berita::orderBy('id','desc')->paginate(4);
        $artikel = Artikel::orderBy('created_at','desc')->paginate(9);
        $pengumumanq = Pengumuman::orderBy('id','desc')->paginate(4);
        return view('dashboard.pengumuman.list', compact('artikel', 'pengumuman', 'berita', 'beritaq', 'pengumumanq'));
    }

    public function edit(Pengumuman $pengumuman)
    {
        return view('dashboard.pengumuman.update', compact('pengumuman'));
    }

    public function update(Pengumuman $pengumuman, Request $request)
    {
        $input = array_except(Input::all(), '_method');
        $input['ringkasan'] = (strlen($input['deskripsi']) > 100) ? substr($input['deskripsi'], 0, 100) : $input['deskripsi'];
        $input['ringkasan_deskripsi'] = (strlen($input['deskripsi']) > 585) ? substr($input['deskripsi'], 0, 585) : $input['deskripsi'];
        $input['ringkasan_judul'] = (strlen($input['judul']) > 25) ? substr($input['judul'], 0, 25) : $input['judul'];

        if (Input::hasFile('gambar'))
        {
            $file = array('gambar' => Input::file('gambar'));
            if (Input::file('gambar')->isValid()) {
                $destinationPath = 'gambar_pengumuman/';
                $extension = Input::file('gambar')->getClientOriginalExtension();
                $fileName = rand(111,999).'.'.$extension;
                Input::file('gambar')->move($destinationPath, $fileName);
                $input['gambar'] = $destinationPath.$fileName;
                Image::make($input['gambar'] = $destinationPath. '/'.$fileName)->widen(800, null)->insert('watermark-kbb2.png')->save($destinationPath. '/'.$fileName);
                $pengumuman->update($input);
                Flash::overlay('Pengumuman berhasil diupdate');
                return Redirect::route('pengumuman.index');
            }
        }else {
        Flash::overlay('Pengumuman berhasil diupdate');
        $pengumuman->update($input);
        return Redirect::route('pengumuman.index');
        }
    }

    public function destroy(Pengumuman $pengumuman)
    {
        $pengumuman->delete();
        Flash::overlay('Pengumuman berhasil dihapus!!');
        return Redirect::route('pengumuman.index');
    }
}
