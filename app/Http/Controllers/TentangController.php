<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\Berita;
use App\Http\Models\Artikel;
use App\Http\Models\Pengumuman;


class TentangController extends Controller
{
    public function profile()
    {
        $beritaq = Berita::orderBy('created_at','desc')->paginate(4);
        $pengumumanq = Pengumuman::orderBy('created_at','desc')->paginate(4);
        $artikel = Artikel::orderBy('created_at','desc')->paginate(9);

        return view('tentang.profile', compact('beritaq', 'pengumumanq', 'artikel'));
    }

    public function logo()
    {
        $beritaq = Berita::orderBy('created_at','desc')->paginate(4);
        $pengumumanq = Pengumuman::orderBy('created_at','desc')->paginate(4);
        $artikel = Artikel::orderBy('created_at','desc')->paginate(9);

        return view('tentang.logo-kbb', compact('beritaq', 'pengumumanq', 'artikel'));
    }

    public function visimisi()
    {
        $beritaq = Berita::orderBy('created_at','desc')->paginate(4);
        $pengumumanq = Pengumuman::orderBy('created_at','desc')->paginate(4);
        $artikel = Artikel::orderBy('created_at','desc')->paginate(9);

        return view('tentang.visimisi', compact('beritaq', 'pengumumanq', 'artikel'));
    }

    public function sejarah()
    {
        $beritaq = Berita::orderBy('created_at','desc')->paginate(4);
        $pengumumanq = Pengumuman::orderBy('created_at','desc')->paginate(4);
        $artikel = Artikel::orderBy('created_at','desc')->paginate(9);

        return view('tentang.sejarah', compact('beritaq', 'pengumumanq', 'artikel'));
    }

    public function geografis()
    {
        $beritaq = Berita::orderBy('created_at','desc')->paginate(4);
        $pengumumanq = Pengumuman::orderBy('created_at','desc')->paginate(4);
        $artikel = Artikel::orderBy('created_at','desc')->paginate(9);

        return view('tentang.geografis', compact('beritaq', 'pengumumanq', 'artikel'));
    }

}
