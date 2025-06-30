<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Haber extends Model
{
    public static function getHaberler(){
        return self::where('durum', 1)->get();
    }

public static function TekHaber($id){

    return  self::where('id',$id)->first();
}



public static function haberler(){
        return self::all();
}

public static function haberekle($request){



}



    protected $table = 'habers';
    protected $fillable = ['baslik', 'metin', 'resim', 'durum', 'kategori', 'yazar', 'okunma'];
    use HasFactory;
}
