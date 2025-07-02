<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bankalar extends Model
{







    use HasFactory;
    protected $fillable = ['bankaadi', 'iban', 'logo','durum','created_at'];
    protected $table = 'bankalar';
}
