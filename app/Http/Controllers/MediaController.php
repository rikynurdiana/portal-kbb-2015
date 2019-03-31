<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use App\Http\Models\Berita;
use App\Http\Models\Berita2;
use App\Http\Models\Artikel;
use App\Http\Models\Media;
use App\Http\Models\Pengumuman;
use App\Http\Models\Galery;
use File;
use Input;
use Redirect;
use Session;
use Validator;
use DB;
use Flash;
use Image;

class MediaController extends Controller
{

    public function index()
    {
        $media = Media::orderBy('id','desc')->paginate(5);
        return view('dashboard.media.index', compact('media'));
    }

    public function create()
    {
        return view('dashboard.media.create');
    }

    public function store(Request $request)
    {
        $input = Input::all();
        $input['ringkasan'] = (strlen($input['deskripsi']) > 100) ? substr($input['deskripsi'], 0, 100) : $input['deskripsi'];
        $input['ringkasan_deskripsi'] = (strlen($input['deskripsi']) > 585) ? substr($input['deskripsi'], 0, 585) : $input['deskripsi'];
        $input['ringkasan_judul'] = (strlen($input['judul']) > 25) ? substr($input['judul'], 0, 25) : $input['judul'];
        $file = array('gambar' => Input::file('gambar'));
        $destinationPath = 'gambar_media'; // upload path
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

        Media::create( $input );

        Flash::overlay('Berhasil menambah berita media masa');
        return Redirect::route('media.index');
    }

    public function show(Media $mediaq, Artikel $artikel, Berita $berita, Galery $galery, Pengumuman $pengumuman, Berita2 $berita2)
    {
        $beritax = Berita::orderBy('created_at','desc')->paginate(3);
        $galery = Galery::orderBy('created_at','desc')->paginate(6);
        $pengumuman = Pengumuman::orderBy('created_at','desc')->paginate(3);
        $artikels = Artikel::orderBy('created_at','desc')->paginate(6);
        $artikelx = Artikel::orderBy('created_at','desc')->paginate(9);
        $mediax = Media::orderBy('created_at','desc')->paginate(3);
        $media = Media::orderBy('created_at','desc')->paginate(3);
        $berita2 = Berita2::orderBy('created_at','desc')->paginate(3);
        $beritaq = Berita::orderBy('created_at','desc')->paginate(4);
        $pengumumanq = Pengumuman::orderBy('created_at','desc')->paginate(4);

        return view('dashboard.media.detail', compact('mediaq', 'media', 'mediax','artikel', 'artikels', 'artikelx','berita', 'beritax', 'galery', 'pengumuman', 'berita2', 'beritaq', 'pengumumanq'));
    }

    public function lists(Media $media, Artikel $artikel, Berita $berita,  Berita2 $berita2,Galery $galery, Pengumuman $pengumuman)
    {
        $berita = Berita::orderBy('created_at','desc')->paginate(4);
        $berita2 = Berita2::orderBy('created_at','desc')->paginate(3);
        $beritax = Berita::orderBy('created_at','desc')->paginate(3);
        $galery = Galery::orderBy('created_at','desc')->paginate(6);
        $pengumuman = Pengumuman::orderBy('created_at','desc')->paginate(3);
        $artikels = Artikel::orderBy('created_at','desc')->paginate(7);
        $artikelx = Artikel::orderBy('created_at','desc')->paginate(9);
        $mediax = Media::orderBy('created_at','desc')->paginate(6);
        $mediav = Media::orderBy('created_at','desc')->paginate(4);
        $media = Media::orderBy('created_at','desc')->paginate(3);
        $beritaq = Berita::orderBy('created_at','desc')->paginate(4);
        $pengumumanq = Pengumuman::orderBy('created_at','desc')->paginate(4);

        return view('dashboard.media.list', compact('media', 'mediax', 'mediav','artikel', 'artikels', 'artikelx', 'berita', 'berita2', 'beritax', 'galery', 'pengumuman', 'beritaq', 'pengumumanq'));
    }

    public function edit(Media $media)
    {
        return view('dashboard.media.update', compact('media'));
    }

    public function update(Media $media, Request $request)
    {
        $input = array_except(Input::all(), '_method');
        $input['ringkasan'] = (strlen($input['deskripsi']) > 100) ? substr($input['deskripsi'], 0, 100) : $input['deskripsi'];
        $input['ringkasan_deskripsi'] = (strlen($input['deskripsi']) > 585) ? substr($input['deskripsi'], 0, 585) : $input['deskripsi'];
        $input['ringkasan_judul'] = (strlen($input['judul']) > 25) ? substr($input['judul'], 0, 25) : $input['judul'];

        if (Input::hasFile('gambar'))
        {
            $file = array('gambar' => Input::file('gambar'));
            if (Input::file('gambar')->isValid()) {
                $destinationPath = 'gambar_media/';
                $extension = Input::file('gambar')->getClientOriginalExtension();
                $fileName = rand(111,999).'.'.$extension;
                Input::file('gambar')->move($destinationPath, $fileName);
                $input['gambar'] = $destinationPath.$fileName;
                Image::make($input['gambar'] = $destinationPath. '/'.$fileName)->fit(800, 540)->insert('watermark-kbb2.png')->save($destinationPath. '/'.$fileName);
                $media->update($input);
                Flash::overlay('Berita Media Masa berhasil diupdate');
                return Redirect::route('media.index');
            }
        }else {
        Flash::overlay('Berita Media Masa berhasil diupdate');
        $media->update($input);
        return Redirect::route('media.index');
        }
    }

    public function destroy(Media $media)
    {
        $media->delete();
        Flash::overlay('Berita Media Masa berhasil dihapus!!');
        return Redirect::route('media.index');
    }
}
