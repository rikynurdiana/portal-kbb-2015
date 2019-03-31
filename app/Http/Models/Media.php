<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [ 'judul',
                            'ringkasan_judul',
                            'ringkasan_deskripsi',
                            'ringkasan',
                            'deskripsi',
                            'gambar',
                            'kategori',
                            'sumber',
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
