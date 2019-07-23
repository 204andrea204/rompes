<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    protected $table ='pelatihan';
    protected $fillable = [
    'pengantar1',
    'pengantar2',
    'gambar',
    ];
}
