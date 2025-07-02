<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesajlar extends Model
{
    use HasFactory;
         protected $fillable = ['adsoyad', 'telefon', 'eposta','sektor','konu','mesaj','okundu','created_at'];
    protected $table = 'mesajlar';
}
