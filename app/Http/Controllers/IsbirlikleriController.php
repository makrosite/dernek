<?php

namespace App\Http\Controllers;

use App\Models\Isbirlikleri;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

class IsbirlikleriController extends Controller
{
    public function panel(){
return view('panel.pages.panel-isbirlikleri');

    }
    public function ekle(request $request){

 $resimadi= rand(0,1000).".".$request->resim->getClientOriginalExtension();
         $yukle = $request->resim->move(public_path("isbirlikleri"), $resimadi);
         $kaydet = Isbirlikleri::insert([
            "unvan"=> $request->unvan,
            "metin"=> $request->metin,
            "resim"=> $resimadi,
            "durum"=>$request->durum
         ]);
         if($kaydet){
            return redirect()->route("panelisbirlikleri")->with("success"," Başarıyla Eklendi");

    }


    }
    public function sil($id){
          $ib = Isbirlikleri::find($id);
         $dosya = $ib->resim;
        $sil = Isbirlikleri::where('id',$id)->delete();
if($sil){

  File::delete(public_path('isbirlikleri/'.$dosya));

    return redirect()->route('panelisbirlikleri')->with('success','Başarıyla silindi');


    }



    }
}
