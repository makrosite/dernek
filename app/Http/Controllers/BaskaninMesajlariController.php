<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaskaninMesajlari;
use Illuminate\Support\Facades\File;

class BaskaninMesajlariController extends Controller
{
    public function index(){
        return view('pages.baskain-mesajlari');
    }

    public function guncelle(request $request){

    $data = BaskaninMesajlari::where('id', 1)->first();
    $dosya = $data->resim;
if(!$request->resim==null){

    //File::delete(public_path('gorseller/'.$dosya));
    $resimadi= rand(0,1000).".".$request->resim->getClientOriginalExtension();
     $yukle = $request->resim->move(public_path("gorseller/"), $resimadi);
    $kaydet = BaskaninMesajlari::where('id',1)->update([
        'menu_adi'=> $request->menu_adi,
        'baslik'=> $request->baslik,
        'mesaj'=> $request->mesaj,
        'resim'=>$resimadi

    ]);

if($kaydet){

           return redirect()->route("sabitsayfalar")->with("success"," Başarıyla Güncellendi");
}


}else{
       $kaydet = BaskaninMesajlari::where('id',1)->update([
        'menu_adi'=> $request->menu_adi,
        'baslik'=> $request->baslik,
        'mesaj'=> $request->mesaj,

       ]);

          return redirect()->route("sabitsayfalar")->with("success"," Başarıyla Güncellendi");



}


    }
}
