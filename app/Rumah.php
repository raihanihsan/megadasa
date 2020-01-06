<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    protected $fillable = [
        'Judul',
        'Gambar',
        'Harga'
    ];
}
