<?php

namespace App\Http\Controllers;

use App\Models\YonetimKurulu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class YonetimKuruluController extends Controller
{
    public function index(){
        return view('pages.yonetim-kurulu');
    }

    public function panel(){
        return view('panel.pages.panel-kurul');


    }//yönetim kurulu bilgilerini getirir.

    public function ekle(request $request){
        $resimadi= rand(0,max: 1000).".".$request->resim->getClientOriginalExtension();
        $ekle = YonetimKurulu::insert([
            'adsoyad'=> $request->adsoyad,
            'statu'=> $request->statu,
            'created_at'=> now(),
            "resim"=>$resimadi

        ]);
        if($ekle){
             $yukle = $request->resim->move(public_path("kurul"), $resimadi);
                return redirect()->route('panelkurul')->with('success','başaryıla eklendi');
        }


    }//yönetim kurulu bilgileri ekler

    public function sil($id){
    $kurul = YonetimKurulu::find($id);
    $sil = YonetimKurulu::where('id',$id)->delete();
    if($sil){
        File::delete(public_path('kurul/'.$kurul->resim));
        return redirect()->route('panelkurul')->with('success','Başarıyla Sİlindi');
    }

    }// yönetim Kurulunu Sİler
}
