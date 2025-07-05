<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaskaninMesajlari extends Model
{


        protected $table = 'baskanin_mesajlaris';
    protected $fillable = ['menu_adi', 'baslik', 'mesaj', 'resim', 'ad_soyad', 'alt_baslik'];

    use HasFactory;
}
