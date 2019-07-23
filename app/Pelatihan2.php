<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelatihan2 extends Model
{
    protected $table ='pelatihan2s';
    protected $fillable = [
    'judul',
    'keterangan',
    'gambar',
    ];
}
