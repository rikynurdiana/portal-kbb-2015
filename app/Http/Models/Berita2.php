<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Berita2 extends Model
{
    protected $fillable = [ 'judul',
                            'ringkasan_judul',
                            'ringkasan',
                            'deskripsi',
                            'kategori',
                            'nama',
                            'skpd',
                            'bidang',
                            'jabatan',
                            'profile',
                            'nilai_isi',
                            'nilai_informatif',
                            'nilai_penyajian',
                            'created_at'];
}
