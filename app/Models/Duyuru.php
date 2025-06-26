<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duyuru extends Model
{
    public static function duyurular(){
    return self::all();


    }

    protected $table = 'duyurus';
    protected $fillable = [ 'metin', 'resim', 'baslik'];
    use HasFactory;
}
