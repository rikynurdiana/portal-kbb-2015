<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function bupati()
    {
        return view('profile.bupati');
    }

    public function wabup()
    {
        return view('profile.wabup');
    }

    public function sekda()
    {
        return view('profile.sekda');
    }

    public function profileDcktr()
    {
        return view('skpd.dcktr');
    }

}
