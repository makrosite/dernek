<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurum extends Model
{


    public static function kurumlar(){
        return self::all();
    }

    public static function kurumgetir($id){

        return self::where("id",$id)->first();

    }

    protected $table = 'kurums';
    protected $fillable = ['id', 'baslik', 'resim'];

    use HasFactory;
}
