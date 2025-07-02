<?php

namespace App\Http\Controllers;

use App\Models\Hizmet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HizmetController extends Controller
{
    public function panel(){
        return view('panel.pages.hizmetler');
    }
    public function ekle(request $request) {

       $resimadi= rand(0,1000).".".$request->resim->getClientOriginalExtension();
         $yukle = $request->resim->move(public_path("hizmet"), $resimadi);
         $kaydet = Hizmet::insert([
            "baslik"=> $request->baslik,
            "menu"=> $request->menu,
            "metin"=> $request->metin,
            "durum"=> $request->durum,
            "created_at"=>now(),
            "resim"=> $resimadi,
         ]);
         if($kaydet){
            return redirect()->route("panelhizmet")->with("success"," Başarıyla Eklendi");

    }



    }
    public function sil($id){
        $veri = Hizmet::find($id);
        $dosya = $veri->resim;

        $sil = Hizmet::find($id)->delete();
        if($sil){
            File::delete(public_path('hizmet/'.$dosya));
                return redirect()->route('panelhizmet')->with('success','Başarıyla gerçekleşti');


        }

    }
    public function durum($id){
$veri = Hizmet::find($id);
$durum = $veri->durum;
if($durum == 1){
    Hizmet::where('id', $id)->update(['durum'=>0]);
    return redirect()->route('panelhizmet')->with('success','');
}else{
        Hizmet::where('id', $id)->update(['durum'=>1]);
    return redirect()->route('panelhizmet')->with('success','');

}


    }
}
