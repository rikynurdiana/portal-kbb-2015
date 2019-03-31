<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use App\Http\Models\Berita;
use App\Http\Models\Berita2;
use App\Http\Models\Artikel;
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

class ArtikelController extends Controller
{

    public function index()
    {
        $artikel = Artikel::orderBy('id','desc')->paginate(5);
        return view('dashboard.artikel.index', compact('artikel'));
    }

    public function create()
    {
        return view('dashboard.artikel.create');
    }

    public function store(Request $request)
    {
        $input = Input::all();
        $input['ringkasan'] = (strlen($input['deskripsi']) > 100) ? substr($input['deskripsi'], 0, 100) : $input['deskripsi'];
        $input['ringkasan_judul'] = (strlen($input['judul']) > 25) ? substr($input['judul'], 0, 25) : $input['judul'];
        $file = array('gambar' => Input::file('gambar'));
        $destinationPath = 'gambar_artikel'; // upload path
        $extension = Input::file('gambar')->getClientOriginalExtension(); // getting image extension
        $fileName = rand(111,999).'.'.$extension; // renaming image
        Input::file('gambar')->move($destinationPath, $fileName); // uploading file to given path
        $input['gambar'] =$destinationPath. '/'.$fileName;
        Image::make($input['gambar'] = $destinationPath. '/'.$fileName)->fit(800, 540)->insert('watermark-kbb2.png')->save($destinationPath. '/'.$fileName);

        $file = array('profile' => Input::file('profile'));
        $destinationPath2 = 'gambar_profile'; // upload path
        $extension2 = Input::file('profile')->getClientOriginalExtension(); // getting image extension
        $fileName2 = rand(222,888).'.'.$extension2; // renaming image
        Input::file('profile')->move($destinationPath2, $fileName2); // uploading file to given path
        $input['profile'] =$destinationPath2. '/'.$fileName2;
        Image::make($input['profile'] = $destinationPath2. '/'.$fileName2)->fit(130, 130)->save($destinationPath2. '/'.$fileName2);
        Artikel::create( $input );

        Flash::overlay('Berhasil menambah artikel');
        return Redirect::route('artikel.index');
    }

    public function show(Artikel $artikel, Berita $berita, Galery $galery, Pengumuman $pengumuman, Berita2 $berita2)
    {
        $beritax = Berita::orderBy('created_at','desc')->paginate(3);
        $galery = Galery::orderBy('created_at','desc')->paginate(6);
        $pengumuman = Pengumuman::orderBy('created_at','desc')->paginate(3);
        $artikels = Artikel::orderBy('created_at','desc')->paginate(3);
        $artikelx = Artikel::orderBy('created_at','desc')->paginate(9);
        $media = Media::orderBy('created_at','desc')->paginate(3);
        $berita2 = Berita2::orderBy('created_at','desc')->paginate(3);
        $beritaq = Berita::orderBy('created_at','desc')->paginate(4);
        $pengumumanq = Pengumuman::orderBy('created_at','desc')->paginate(4);

        return view('dashboard.artikel.detail', compact('artikel', 'artikels', 'artikelx','berita', 'beritax', 'galery', 'pengumuman', 'media', 'berita2', 'beritaq', 'pengumumanq'));
    }

    public function lists(Artikel $artikel, Berita $berita, Berita2 $berita2,Galery $galery, Pengumuman $pengumuman)
    {
        $berita = Berita::orderBy('created_at','desc')->paginate(5);
        $berita2 = Berita2::orderBy('created_at','desc')->paginate(3);
        $beritax = Berita::orderBy('created_at','desc')->paginate(3);
        $galery = Galery::orderBy('created_at','desc')->paginate(6);
        $pengumuman = Pengumuman::orderBy('created_at','desc')->paginate(3);
        $artikels = Artikel::orderBy('created_at','desc')->paginate(6);
        $artikelx = Artikel::orderBy('created_at','desc')->paginate(9);
        $media = Media::orderBy('created_at','desc')->paginate(4);
        $mediaz = Media::orderBy('created_at','desc')->paginate(5);
        $beritaq = Berita::orderBy('created_at','desc')->paginate(4);
        $pengumumanq = Pengumuman::orderBy('created_at','desc')->paginate(4);

        return view('dashboard.artikel.list', compact('artikel', 'artikels', 'artikelx', 'berita', 'berita2', 'beritax', 'galery', 'pengumuman', 'media', 'beritaq', 'pengumumanq', 'mediaz'));
    }

    public function edit(Artikel $artikel)
    {
        return view('dashboard.artikel.update', compact('artikel'));
    }

    public function update(Artikel $artikel, Request $request)
    {
        $input = array_except(Input::all(), '_method');
        $input['ringkasan'] = (strlen($input['deskripsi']) > 100) ? substr($input['deskripsi'], 0, 100) : $input['deskripsi'];
        $input['ringkasan_judul'] = (strlen($input['judul']) > 25) ? substr($input['judul'], 0, 25) : $input['judul'];

        if (Input::hasFile('gambar'))
        {
            $file = array('gambar' => Input::file('gambar'));
            if (Input::file('gambar')->isValid()) {
                $destinationPath = 'gambar_artikel/';
                $extension = Input::file('gambar')->getClientOriginalExtension();
                $fileName = rand(111,999).'.'.$extension;
                Input::file('gambar')->move($destinationPath, $fileName);
                $input['gambar'] = $destinationPath.$fileName;
                Image::make($input['gambar'] = $destinationPath. '/'.$fileName)->fit(800, 540)->insert('watermark-kbb2.png')->save($destinationPath. '/'.$fileName);
                $artikel->update($input);
                Flash::overlay('Artikel berhasil diupdate');
                return Redirect::route('artikel.index');
            }
        }else {
        Flash::overlay('Artikel berhasil diupdate');
        $artikel->update($input);
        return Redirect::route('artikel.index');
        }
    }

    public function destroy(Artikel $artikel)
    {
        $artikel->delete();
        Flash::overlay('Artikel berhasil dihapus!!');
        return Redirect::route('artikel.index');
    }
}
