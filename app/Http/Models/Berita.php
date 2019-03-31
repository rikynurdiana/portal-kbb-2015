<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [ 'judul',
                            'ringkasan_judul',
                            'ringkasan',
                            'deskripsi',
                            'kategori',
                            'gambar',
                            'nama',
                            'skpd',
                            'bidang',
                            'jabatan',
                            'profile',
                            'nilai_isi',
                            'nilai_informatif',
                            'nilai_penyajian',
                            'kategori',
                            'created_at'];
}
