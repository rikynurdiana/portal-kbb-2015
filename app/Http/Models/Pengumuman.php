<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $fillable = [ 'judul',
                            'kategori',
                            'ringkasan_deskripsi',
                            'ringkasan',
                            'ringkasan_judul',
                            'deskripsi',
                            'gambar',
                            'nama',
                            'skpd',
                            'bidang',
                            'jabatan',
                            'profile',
                            'created_at',
                            'updated_at'];
}

