<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HakkimizdaController extends Controller
{

public function index(){
   // $data = DB::table('hakkimizdas')->where('id',1)->first();
   return view('pages.hakkinda');





}

public function update(){
    $metin=DB::table('hakkimizdas')->where('id',1)->first();
    return view('panel.pages.panel-hakkimizda',compact('metin'));



}
public function hakkimizdaPost(request $request){
// return $request->baslik;
$kaydet = DB::table('hakkimizdas')->where('id',1)->update(

    [
        'baslik'=> $request->input('baslik'),
        'metin'=> $request->input('metin'),
        'modulmetin'=> $request->input('modulmetin')
    ]
);
if($kaydet){
    return redirect('/yonetim/hakkimizda')->with('success','');
}






}


}
