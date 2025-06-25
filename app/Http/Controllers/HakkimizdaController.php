<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HakkimizdaController extends Controller
{

public function index(){
    $data = DB::table('hakkimizdas')->where('id',1)->first();
    $baskan = DB::table('baskanin_mesajlaris')->where('id',1)->first();




    return view('pages.hakkinda',compact('data','baskan'));

}


}
