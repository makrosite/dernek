<?php

namespace App\Http\Controllers;

use App\Models\Ayarlar;
use App\Models\Iletisim;
use App\Models\SosyalMedya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AyarlarController extends Controller
{
public function index(){

    }// frontend

public function genelayarlar(){
    $ayarlar =Ayarlar::find(1);
    return view('panel.pages.genel-ayarlar',compact('ayarlar'));



    }// genel ayarlar panel
public function genelayarlarpost(request $request){
$guncelle =Ayarlar::find(1)->update([

            'baslik' => $request->baslik,
            'decs' => $request->decs,
            'keywords' =>$request->keywords,
            'googleapi'=> $request->googleapi,
            'footer'=>$request->footer,
            'renk' =>$request->renk,
            'updated_at' => now()

]);
if($guncelle){
    return redirect()->back()->with('success','Ayarlar Başarıyla Güncellendi');
}


    }// genel ayarlar panel post

public function iletisimayar(){
    $iletisimbilgileri = Iletisim::find(1);
    return view('panel.pages.iletisim-ayarlar',compact('iletisimbilgileri'));


    }// iletişim ayaları
public function iletisimayarpost(request  $request){
    $guncelle=Iletisim::find(1)->update([
        'telefon'=> $request->telefon,
        'gsm'=> $request->gsm,
        'eposta'=> $request->eposta,
        'wp'=> $request->wp,
        'wpbutton'=> $request->wpbutton,
        'adres'=> $request->adres,
        'maps'=> $request->maps,
        'updated_at'=> now()

    ]);
    if($guncelle){
        return redirect()->back()->with('success','başarıyla güncellendi');
    }

}// iletişim ayaları post
public function smayar(){
    $sosyalmedya = SosyalMedya::all();
    return view('panel.pages.sosyal-medya',compact('sosyalmedya'));


    }// sosyal medya ayarları
public function smayarpost(request $request){
     $resimadi= rand(0,1000).".".$request->logo->getClientOriginalExtension();

     $kaydet = SosyalMedya::insert([
            'baslik'=>$request->baslik,
            'logo'=>$resimadi,
            'durum'=>$request->durum,
            'link'=>$request->link,
            'created_at'=>now()

     ]);
     if($kaydet){
         $yukle = $request->logo->move(public_path("sm"), $resimadi);
         return redirect()->back()->with('success','başarıyla eklendi');

     }


    }// sosyal medya ayarları post

public function logoayar(){
    $logobanner=Ayarlar::find(1);
    return view('panel.pages.logo-baner',compact('logobanner'));

}// Logo ve bannerlar
public function logopost(request $request){
    $tur = $request->tur;
       $resimadi= rand(0,1000).".".$request->resim->getClientOriginalExtension();


    if($tur =="logo"){
        $guncelle = Ayarlar::find(1)->update(['logo'=>$resimadi]);
        if($guncelle){
             $yukle = $request->resim->move(public_path("logo"), $resimadi);
            return redirect()->back()->with('success','Başarıyla GÜncellendi');
        }
        echo "logo güncelle";

    }else if($tur=="baslik"){
        $guncelle = Ayarlar::find(1)->update(['bc'=>$resimadi]);
           if($guncelle){
             $yukle = $request->resim->move(public_path("logo"), $resimadi);
            return redirect()->back()->with('success','Başarıyla GÜncellendi');
        }

        echo "başlık güncelle";

    }else{
         $guncelle = Ayarlar::find(1)->update(['footerlogo'=>$resimadi]);
            if($guncelle){
                 $yukle = $request->resim->move(public_path("logo"), $resimadi);
            return redirect()->back()->with('success','Başarıyla GÜncellendi');
        }
echo "footer güncelle";

    }








}// Logo ve bannerlar post
public function logosil($id){
    $sil =SosyalMedya::find($id)->delete();
    if($sil){
        return redirect()->back()->with("success","Başarıyla Silindi");
    }




}
}
