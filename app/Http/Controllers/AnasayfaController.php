<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaskaninMesajlari;

class AnasayfaController extends Controller
{
    public function index(){

$veri =array
(
    "isim"=> "ahmet",
    "mail"=> "mail@mail.com",
    "telefon"=> "55555 555 555",
    );

$baskan = BaskaninMesajlari::where('id', 1)->first();

return view("anasayfa",compact('veri','baskan'));
    }
}
