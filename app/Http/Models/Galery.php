<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $fillable = [ 'deskripsi',
                            'kategori',
                            'gambar',
                            'skpd',
                            'created_at'];
}
