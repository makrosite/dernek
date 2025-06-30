<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tesvik extends Model
{
    public static function tesvikler(){
          return self::all();


    }



    use HasFactory;
}
