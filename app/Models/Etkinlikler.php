<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etkinlikler extends Model
{


    public static function etkinlikler(){
          return self::all();

    }


        protected $table = 'etkinlikler';
    protected $fillable = ['baslik', 'metin', 'resim', 'durum', 'tarih'];

    use HasFactory;
}
