<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteAyar extends Model
{

    public static function SiteAyar(){
        return self::where('id','1')->first();
    }




    use HasFactory;

 protected $table = 'site_ayar';
    protected $fillable = ['sitebasliği','aciklama', 'logo', 'baslikresim','footer', 'keyword','renk','bakim'];
    use HasFactory;
}
