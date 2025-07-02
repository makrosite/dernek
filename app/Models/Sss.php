<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sss extends Model
{
    use HasFactory;
     protected $fillable = ['soru', 'cevap','created_at'];
    protected $table = 'sss';
}
