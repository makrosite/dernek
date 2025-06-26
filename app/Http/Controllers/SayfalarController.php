<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sayfalar;

class SayfalarController extends Controller
{
    public function index($id){

   $sayfa = Sayfalar::where('id',$id)->first();


   return view('pages.sayfa', compact('sayfa'));


}
}
