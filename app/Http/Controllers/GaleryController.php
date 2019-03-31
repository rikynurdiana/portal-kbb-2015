<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use App\Http\Models\Galery;
use File;
use Input;
use Redirect;
use Session;
use Validator;
use DB;
use Flash;
use Image;

class GaleryController extends Controller
{
    public function index()
    {
        $galery = Galery::orderBy('id','desc')->paginate(5);
        return view('dashboard.galery.index', compact('galery'));
    }

    public function create()
    {
        return view('dashboard.galery.create');
    }

    public function store(Request $request)
    {
        $input = Input::all();
        $file = array('gambar' => Input::file('gambar'));
        $destinationPath = 'gambar_kegiatan'; // upload path
        $extension = Input::file('gambar')->getClientOriginalExtension(); // getting image extension
        $fileName = rand(111,999).'.'.$extension; // renaming image
        Input::file('gambar')->move($destinationPath, $fileName); // uploading file to given path
        $input['gambar'] = $destinationPath. '/'.$fileName;
        Image::make($input['gambar'] = $destinationPath. '/'.$fileName)->fit(800, 540)->insert('watermark-kbb2.png')->save($destinationPath. '/'.$fileName);
        Galery::create( $input );

        Flash::overlay('Berhasil menambah kegiatan');
        return Redirect::route('galery.index');

    }

    public function lists(Galery $galery)
    {
        $galery = Galery::orderBy('id','desc')->paginate(40);
        return view('dashboard.galery.list', compact('galery'));
    }

    public function edit(Galery $galery)
    {
        return view('dashboard.galery.update', compact('galery'));
    }

    public function update(Galery $galery, Request $request)
    {
        $input = array_except(Input::all(), '_method');

        if (Input::hasFile('gambar'))
        {
            $file = array('gambar' => Input::file('gambar'));
            if (Input::file('gambar')->isValid()) {
                $destinationPath = 'gambar_kegiatan/';
                $extension = Input::file('gambar')->getClientOriginalExtension();
                $fileName = rand(111,999).'.'.$extension;
                Input::file('gambar')->move($destinationPath, $fileName);
                $input['gambar'] = $destinationPath.$fileName;
                Image::make($input['gambar'] = $destinationPath. '/'.$fileName)->fit(800, 540)->insert('watermark-kbb2.png')->save($destinationPath. '/'.$fileName);
                $galery->update($input);
                Flash::overlay('Kegiatan berhasil di update');
                return Redirect::route('galery.index');
            }
        }else {
        $galery->update($input);
        Flash::overlay('Kegiatan berhasil di update');
        return Redirect::route('galery.index');
        }
    }

    public function destroy(Galery $galery)
    {
        $galery->delete();
        Flash::overlay('Kegiatan berhasil di hapus');
        return Redirect::route('galery.index');
    }
}
