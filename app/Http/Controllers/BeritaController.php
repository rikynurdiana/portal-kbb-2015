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

class BeritaController extends Controller
{

    public function index()
    {
        $berita = Berita::orderBy('id','desc')->paginate(5);
        return view('dashboard.berita.index', compact('berita'));
    }

    public function create()
    {
        return view('dashboard.berita.create');
    }

    public function store(Request $request)
    {
        $input = Input::all();
        $input['ringkasan'] = (strlen($input['deskripsi']) > 100) ? substr($input['deskripsi'], 0, 100) : $input['deskripsi'];
        $input['ringkasan_judul'] = (strlen($input['judul']) > 25) ? substr($input['judul'], 0, 25) : $input['judul'];
        $file = array('gambar' => Input::file('gambar'));
        $destinationPath = 'gambar_berita'; // upload path
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

        Berita::create( $input );

        Flash::overlay('Berhasil menambah berita');
        return Redirect::route('berita.index');
    }

    public function show(Artikel $artikel, Berita $berita, Galery $galery, Pengumuman $pengumuman, Berita2 $berita2, Media $media)
    {
        $beritax = Berita::orderBy('created_at','desc')->paginate(3);
        $galery = Galery::orderBy('created_at','desc')->paginate(6);
        $pengumuman = Pengumuman::orderBy('created_at','desc')->paginate(3);
        $artikelx = Artikel::orderBy('created_at','desc')->paginate(9);
        $media = Media::orderBy('created_at','desc')->paginate(3);
        $berita2 = Berita2::orderBy('created_at','desc')->paginate(3);
        $beritaq = Berita::orderBy('created_at','desc')->paginate(4);
        $pengumumanq = Pengumuman::orderBy('created_at','desc')->paginate(4);

        return view('dashboard.berita.detail', compact('artikelx','berita', 'beritax', 'galery', 'pengumuman', 'media', 'berita2', 'beritaq', 'pengumumanq'));
    }

    public function lists(Artikel $artikel, Berita $berita, Galery $galery, Pengumuman $pengumuman, Berita2 $berita2, Media $media)
    {
        $berita = Berita::orderBy('created_at','desc')->paginate(6);
        $artikelw = Artikel::orderBy('created_at','desc')->paginate(5);
        $beritax = Berita::orderBy('created_at','desc')->paginate(3);
        $galery = Galery::orderBy('created_at','desc')->paginate(6);
        $pengumuman = Pengumuman::orderBy('created_at','desc')->paginate(3);
        $artikelx = Artikel::orderBy('created_at','desc')->paginate(9);
        $media = Media::orderBy('created_at','desc')->paginate(4);
        $mediaz = Media::orderBy('created_at','desc')->paginate(5);
        $berita2 = Berita2::orderBy('created_at','desc')->paginate(3);
        $beritaq = Berita::orderBy('created_at','desc')->paginate(4);
        $pengumumanq = Pengumuman::orderBy('created_at','desc')->paginate(4);

        return view('dashboard.berita.list', compact('artikelx', 'berita', 'beritax', 'galery', 'pengumuman', 'media', 'berita2', 'beritaq', 'pengumumanq', 'artikelw', 'mediaz'));
    }

    public function edit(Berita $berita)
    {
        return view('dashboard.berita.update', compact('berita'));
    }

    public function update(Berita $berita, Request $request)
    {
        $input = array_except(Input::all(), '_method');
        $input['ringkasan'] = (strlen($input['deskripsi']) > 100) ? substr($input['deskripsi'], 0, 100) : $input['deskripsi'];
        $input['ringkasan_judul'] = (strlen($input['judul']) > 25) ? substr($input['judul'], 0, 25) : $input['judul'];

        if (Input::hasFile('gambar'))
        {
            $file = array('gambar' => Input::file('gambar'));
            if (Input::file('gambar')->isValid()) {
                $destinationPath = 'gambar_berita/';
                $extension = Input::file('gambar')->getClientOriginalExtension();
                $fileName = rand(111,999).'.'.$extension;
                Input::file('gambar')->move($destinationPath, $fileName);
                $input['gambar'] = $destinationPath.$fileName;
                Image::make($input['gambar'] = $destinationPath. '/'.$fileName)->fit(800, 540)->insert('watermark-kbb2.png')->save($destinationPath. '/'.$fileName);
                $berita->update($input);
                Flash::overlay('Berita berhasil diupdate');
                return Redirect::route('berita.index');
            }
        }else {
        Flash::overlay('Berita berhasil diupdate');
        $berita->update($input);
        return Redirect::route('berita.index');
        }
    }

    public function destroy(Berita $berita)
    {
        $berita->delete();
        Flash::overlay('Berita berhasil dihapus!!');
        return Redirect::route('berita.index');
    }
}
