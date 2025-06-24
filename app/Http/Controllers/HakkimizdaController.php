<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HakkimizdaController extends Controller
{

public function index(){

$data = [

    "metin"=> "metin",
] ;
    return view('pages.hakkinda',compact('data'));

}


}
