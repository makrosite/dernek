<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sayfalar extends Model
{


    public static function sayfalar(){

    return self::where('durum',operator: 1)->get();

    }// tüm sayfaları getir

    public static function teksayfa($id){


return self::where('id',$id)->first();

    }// tek sayfa çağırma fonksiyonu

    public static function sayfaekle( $request){
        return self::create([
            'sayfa_adi'=> $request->sayfa_adi,
            'baslik'=> $request->baslik,
            'metin'=> $request->metin,
            'durum'=> $request->durum,

        ]);





    }

    public static function sil($id){
        return self::where('id',$id)->delete();

    }


        protected $table = 'sayfalar';
    protected $fillable = ['id','sayfa_adi', 'baslik', 'metin', 'durum'];
    use HasFactory;
}
