<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sayfalar extends Model
{


    public static function sayfalar(){

    return self::where('durum',1)->get();

    }// tüm sayfaları getir

    public static function teksayfa($id){


return self::where('id',$id)->first();

    }// tek sayfa çağırma fonksiyonu


        protected $table = 'sayfalar';
    protected $fillable = ['id','sayfa_adi', 'baslik', 'metin','resim', 'durum'];
    use HasFactory;
}
