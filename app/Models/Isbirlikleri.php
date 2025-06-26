<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Isbirlikleri extends Model

{
public static function veri(){

    return self::all();
}

    protected $table = 'isbirlikleri';
    protected $fillable = ['unvan', 'metin', 'resim', 'durum'];

    use HasFactory;
}
