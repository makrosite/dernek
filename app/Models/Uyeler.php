<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uyeler extends Model
{



    use HasFactory;
    
    protected $fillable = [
        'adi',
        'soyadi',
        'baba_adi',
        'anne_adi',
        'dogum_yeri',
        'dogum_tarihi',
        'tc_kimlik_no',
        'meslegi',
        'kan_grubu',
        'is_telefonu',
        'ev_telefonu',
        'cep_telefonu',
        'eposta',
        'nufusa_kayit_il_ilce_mahalle',
        'ikamet_adresi',
        'is_adresi',
        'ogrenim_durumu',
        'durum',
        'firmaunvanı',
        'resim',
    ];
}
