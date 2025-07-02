<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iletisim extends Model
{
    use HasFactory;
    protected $table = 'iletisims';
    protected $fillable = ['telefon','gsm','eposta','wp','wpbutton','adres','maps','updated_at'];
}
