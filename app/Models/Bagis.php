<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bagis extends Model
{
    use HasFactory;

    protected $fillable = [
        'adsoyad', 'aciklama', 'banka', 'tutar', 'durum'
    ];
}
