<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bankalar extends Model
{







    use HasFactory;
    protected $fillable = ['bankaadi', 'iban', 'doviz_turu', 'logo','durum','created_at'];
    protected $table = 'bankalar';
}
