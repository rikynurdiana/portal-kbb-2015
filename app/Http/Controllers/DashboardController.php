<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\Berita;
use App\Http\Models\Pengumuman;
use App\Http\Models\Media;
use App\Http\Models\Artikel;
use Input;
use Redirect;
use Validator;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $beritajan      = DB::table('beritas')->where('created_at','like','%2015-01%')->count();
        $beritafeb      = DB::table('beritas')->where('created_at','like','%2015-02%')->count();
        $beritamar      = DB::table('beritas')->where('created_at','like','%2015-03%')->count();
        $beritaapr      = DB::table('beritas')->where('created_at','like','%2015-04%')->count();
        $beritamei      = DB::table('beritas')->where('created_at','like','%2015-05%')->count();
        $beritajun      = DB::table('beritas')->where('created_at','like','%2015-06%')->count();
        $beritajul      = DB::table('beritas')->where('created_at','like','%2015-07%')->count();
        $beritaags      = DB::table('beritas')->where('created_at','like','%2015-08%')->count();
        $beritasep      = DB::table('beritas')->where('created_at','like','%2015-09%')->count();
        $beritaokt      = DB::table('beritas')->where('created_at','like','%2015-10%')->count();
        $beritanov      = DB::table('beritas')->where('created_at','like','%2015-11%')->count();
        $beritades      = DB::table('beritas')->where('created_at','like','%2015-12%')->count();

        $artikeljan      = DB::table('artikels')->where('created_at','like','%2015-01%')->count();
        $artikelfeb      = DB::table('artikels')->where('created_at','like','%2015-02%')->count();
        $artikelmar      = DB::table('artikels')->where('created_at','like','%2015-03%')->count();
        $artikelapr      = DB::table('artikels')->where('created_at','like','%2015-04%')->count();
        $artikelmei      = DB::table('artikels')->where('created_at','like','%2015-05%')->count();
        $artikeljun      = DB::table('artikels')->where('created_at','like','%2015-06%')->count();
        $artikeljul      = DB::table('artikels')->where('created_at','like','%2015-07%')->count();
        $artikelags      = DB::table('artikels')->where('created_at','like','%2015-08%')->count();
        $artikelsep      = DB::table('artikels')->where('created_at','like','%2015-09%')->count();
        $artikelokt      = DB::table('artikels')->where('created_at','like','%2015-10%')->count();
        $artikelnov      = DB::table('artikels')->where('created_at','like','%2015-11%')->count();
        $artikeldes      = DB::table('artikels')->where('created_at','like','%2015-12%')->count();

        $mediajan      = DB::table('media')->where('created_at','like','%2015-01%')->count();
        $mediafeb      = DB::table('media')->where('created_at','like','%2015-02%')->count();
        $mediamar      = DB::table('media')->where('created_at','like','%2015-03%')->count();
        $mediaapr      = DB::table('media')->where('created_at','like','%2015-04%')->count();
        $mediamei      = DB::table('media')->where('created_at','like','%2015-05%')->count();
        $mediajun      = DB::table('media')->where('created_at','like','%2015-06%')->count();
        $mediajul      = DB::table('media')->where('created_at','like','%2015-07%')->count();
        $mediaags      = DB::table('media')->where('created_at','like','%2015-08%')->count();
        $mediasep      = DB::table('media')->where('created_at','like','%2015-09%')->count();
        $mediaokt      = DB::table('media')->where('created_at','like','%2015-10%')->count();
        $medianov      = DB::table('media')->where('created_at','like','%2015-11%')->count();
        $mediades      = DB::table('media')->where('created_at','like','%2015-12%')->count();

        $berita2jan      = DB::table('berita2s')->where('created_at','like','%2015-01%')->count();
        $berita2feb      = DB::table('berita2s')->where('created_at','like','%2015-02%')->count();
        $berita2mar      = DB::table('berita2s')->where('created_at','like','%2015-03%')->count();
        $berita2apr      = DB::table('berita2s')->where('created_at','like','%2015-04%')->count();
        $berita2mei      = DB::table('berita2s')->where('created_at','like','%2015-05%')->count();
        $berita2jun      = DB::table('berita2s')->where('created_at','like','%2015-06%')->count();
        $berita2jul      = DB::table('berita2s')->where('created_at','like','%2015-07%')->count();
        $berita2ags      = DB::table('berita2s')->where('created_at','like','%2015-08%')->count();
        $berita2sep      = DB::table('berita2s')->where('created_at','like','%2015-09%')->count();
        $berita2okt      = DB::table('berita2s')->where('created_at','like','%2015-10%')->count();
        $berita2nov      = DB::table('berita2s')->where('created_at','like','%2015-11%')->count();
        $berita2des      = DB::table('berita2s')->where('created_at','like','%2015-12%')->count();

        $totalberita      = DB::table('beritas')->count();
        $totalpengumuman      = DB::table('pengumumen')->count();
        $totalmedia      = DB::table('media')->count();
        $totalberita2      = DB::table('berita2s')->count();
        $totalartikel      = DB::table('artikels')->count();
        $totalkegiatan      = DB::table('galeries')->count();

        $totberitanow     = DB::table('beritas')->whereRaw('created_at >= curdate()')->count();
        $totpengumumannow     = DB::table('pengumumen')->whereRaw('created_at >= curdate()')->count();
        $totmedianow     = DB::table('media')->whereRaw('created_at >= curdate()')->count();
        $totberita2now     = DB::table('berita2s')->whereRaw('created_at >= curdate()')->count();
        $totartikelnow     = DB::table('artikels')->whereRaw('created_at >= curdate()')->count();
        $totkegiatannow     = DB::table('galeries')->whereRaw('created_at >= curdate()')->count();

        $pemerintahan   = DB::table('galeries')->where('kategori','like','%pemerintahan%')->count();
        $skpd           = DB::table('galeries')->where('kategori','like','%skpd%')->count();
        $masyarakat     = DB::table('galeries')->where('kategori','like','%masyarakat%')->count();
        $selfie         = DB::table('galeries')->where('kategori','like','%selfie%')->count();

        $berita = Berita::orderBy('created_at','desc')->paginate(4);
        $pengumuman = Pengumuman::orderBy('created_at','desc')->paginate(4);
        $media = Media::orderBy('created_at','desc')->paginate(4);
        $artikel = Artikel::orderBy('created_at','desc')->paginate(4);

        $data = array(
        'beritajan'      => $beritajan,
        'beritafeb'      => $beritafeb,
        'beritamar'      => $beritamar,
        'beritaapr'      => $beritaapr,
        'beritamei'      => $beritamei,
        'beritajun'      => $beritajun,
        'beritajul'      => $beritajul,
        'beritaags'      => $beritaags,
        'beritasep'      => $beritasep,
        'beritaokt'      => $beritaokt,
        'beritanov'      => $beritanov,
        'beritades'      => $beritades,

        'artikeljan'      => $artikeljan,
        'artikelfeb'      => $artikelfeb,
        'artikelmar'      => $artikelmar,
        'artikelapr'      => $artikelapr,
        'artikelmei'      => $artikelmei,
        'artikeljun'      => $artikeljun,
        'artikeljul'      => $artikeljul,
        'artikelags'      => $artikelags,
        'artikelsep'      => $artikelsep,
        'artikelokt'      => $artikelokt,
        'artikelnov'      => $artikelnov,
        'artikeldes'      => $artikeldes,

        'mediajan'      => $mediajan,
        'mediafeb'      => $mediafeb,
        'mediamar'      => $mediamar,
        'mediaapr'      => $mediaapr,
        'mediamei'      => $mediamei,
        'mediajun'      => $mediajun,
        'mediajul'      => $mediajul,
        'mediaags'      => $mediaags,
        'mediasep'      => $mediasep,
        'mediaokt'      => $mediaokt,
        'medianov'      => $medianov,
        'mediades'      => $mediades,

        'berita2jan'      => $berita2jan,
        'berita2feb'      => $berita2feb,
        'berita2mar'      => $berita2mar,
        'berita2apr'      => $berita2apr,
        'berita2mei'      => $berita2mei,
        'berita2jun'      => $berita2jun,
        'berita2jul'      => $berita2jul,
        'berita2ags'      => $berita2ags,
        'berita2sep'      => $berita2sep,
        'berita2okt'      => $berita2okt,
        'berita2nov'      => $berita2nov,
        'berita2des'      => $berita2des,

        'pemerintahan'   => $pemerintahan,
        'skpd'           => $skpd,
        'masyarakat'     => $masyarakat,
        'selfie'         => $pemerintahan,

        'totalberita'      => $totalberita,
        'totalpengumuman'      => $totalpengumuman,
        'totalmedia'      => $totalmedia,
        'totalberita2'      => $totalberita2,
        'totalartikel'      => $totalartikel,
        'totalkegiatan'      => $totalkegiatan,

        'totberitanow'      => $totberitanow,
        'totpengumumannow'      => $totpengumumannow,
        'totmedianow'      => $totmedianow,
        'totberita2now'      => $totberita2now,
        'totartikelnow'      => $totartikelnow,
        'totkegiatannow'      => $totkegiatannow,


        'berita'         => $berita,
        'pengumuman'     => $pengumuman,
        'media'          => $media,
        'artikel'        => $artikel,
        );
        return view('dashboard.index', $data);
    }

}
