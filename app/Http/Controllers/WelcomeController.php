<?php

namespace App\Http\Controllers;

use App\Http\Models\Berita;
use App\Http\Models\Artikel;
use App\Http\Models\Berita2;
use App\Http\Models\Galery;
use App\Http\Models\Media;
use App\Http\Models\Pengumuman;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;
use Validator;

class WelcomeController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        $berita = Berita::orderBy('id','desc')->paginate(5);
        $beritaz = Berita::orderBy('id','desc')->paginate(3);
        $berita2 = Berita2::orderBy('id','desc')->paginate(6);
        $galery = Galery::orderBy('id','desc')->paginate(3);
        $galeryz = Galery::orderBy('id','desc')->paginate(10);
        $pengumuman = Pengumuman::orderBy('id','desc')->paginate(5);
        $pengumumanx = Pengumuman::orderBy('id','desc')->paginate(9);
        $artikel = Artikel::orderBy('created_at','desc')->paginate(9);
        $media = Media::orderBy('created_at','desc')->paginate(5);
        $beritaq = Berita::orderBy('id','desc')->paginate(4);
        $pengumumanq = Pengumuman::orderBy('id','desc')->paginate(4);


        $data = array(
        'berita' => $berita,
        'beritaq' => $beritaq,
        'beritaz' => $beritaz,
        'berita2' => $berita2,
        'galery' => $galery,
        'galeryz' => $galeryz,
        'pengumuman' => $pengumuman,
        'pengumumanq' => $pengumumanq,
        'pengumumanx' => $pengumumanx,
        'artikel' => $artikel,
        'media' => $media,
        );
        return view('main.index', $data);
    }

}
