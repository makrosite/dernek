<?php

namespace App\Http\Controllers;

use App\Models\Kurum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KurumController extends Controller
{
    public function index(){

        return view('panel.pages.kurumlar');


    }


    public function KurumEklePost(Request $request){



         $resimadi= rand(0,1000).".".$request->resim->getClientOriginalExtension();
         $yukle = $request->resim->move(public_path("kurum"), $resimadi);
         $kaydet = Kurum::insert([
            "baslik"=> $request->baslik,
            "resim"=> $resimadi,
         ]);
         if($kaydet){
            return redirect()->route("panelkurumlar")->with("success"," Başarıyla Eklendi");

    }


    }

  public function KurumSil($id){
    $kurum = Kurum::find($id);
    $dosya = $kurum->resim;


    $sil = Kurum::where('id',$id)->delete();
    if($sil){
          File::delete(public_path('kurum/'.$dosya));

 return redirect()->route('panelkurumlar')->with('success','Kurum Başarıyla Silindi.');


    }


  }
}
