<?php

namespace App\Http\Controllers;

use App\Models\Tesvik;
use App\Models\Kurum;
use Illuminate\Http\Request;

class TesvikController extends Controller
{


    public function index(){
$tesvik = Tesvik::all();
return view('pages.tesvikler',compact('tesvik'));


    }
    public function tesvikdetay($id){
        $tesvik = Tesvik::find( $id );
        $kurum = Kurum::where('id',$tesvik->kurum)->first();
        $kurumlogo = $kurum->resim;
        return view('pages.tesvk-detay',compact('tesvik','kurumlogo'));

    }
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
