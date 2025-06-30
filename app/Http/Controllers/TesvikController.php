<?php

namespace App\Http\Controllers;

use App\Models\Tesvik;
use Illuminate\Http\Request;

class TesvikController extends Controller
{
    public function panel(){
        $tesvikler = Tesvik::all();
  return view('panel.pages.panel-tesvikler',compact('tesvikler'));

    }

    public function ekle(request $request){
        $tesvikler = Tesvik::insert([
            'baslik'=> $request->baslik,
             'metin'=> $request->metin,
            'kurum'=> $request->kurum,
            'tur'=> $request->tur,

        ]);

        if($tesvikler){
            return redirect()->route('paneltesvik')->with('success','Başarıyla Eklendi');
        }


    }

    public function tesviksil ($id){
$sil = Tesvik::where('id',$id)->delete();
if($sil){

    return redirect()->route('paneltesvik')->with('success','Başarıyla silindi');


    }
}
}
