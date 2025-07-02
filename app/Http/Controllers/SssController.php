<?php

namespace App\Http\Controllers;

use App\Models\Sss;
use Illuminate\Http\Request;

class SssController extends Controller
{
    public function panel(){
   return view('panel.pages.panel-sss');
    }
    public function eklepost(Request $request){
      $ekle=Sss::insert([
        'soru'=> $request->soru,
        'cevap'=> $request->cevap,
        'created_at'=>now()
      ]);
      if ($ekle){
        return redirect()->back()->with('success','Başarıyla Eklendi');
      }


    }
    public function sil($id)
    {
        $sssil = Sss::where('id',$id)->delete();
    if($sssil){
    return redirect()->back()->with('success','Başarıyla Silindi');

    }
    }
}
