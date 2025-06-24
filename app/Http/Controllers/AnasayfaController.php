<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    public function index(){

$veri =array
(
    "isim"=> "ahmet",
    "mail"=> "mail@mail.com",
    "telefon"=> "55555 555 555",
    );

return view("anasayfa",compact('veri'));
    }
}
