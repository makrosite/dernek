<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sayfalar;

class SayfalarController extends Controller
{
    public function index($id){

   $sayfa = Sayfalar::where('id',$id)->first();


   return view('pages.sayfa', compact('sayfa'));


}//

public function PanelSayfa(){

    $sayfalar  = Sayfalar::sayfalar();

     return view('panel.pages.panel-sayfalar', compact('sayfalar'));

}// panelde sayfaları gösteriri

public function PanelSayfaEkle(){

    return view('panel.pages.sayfa-ekle');



}// panelde sayfalaekleme alanı


public function PanelSayfaEklePost( request $request){
    $ekle = Sayfalar::sayfaekle($request);
    if($ekle){
        return view('panel.pages.panel-sayfalar');


    }





}// panelde sayfalaekleme Post işlemi

public function PanelSayfaGuncelle($id){
    $sayfa = Sayfalar::where('id',$id)->first();
    return view('panel.pages.sayfa-duzenle',compact('sayfa'));





}// panelde sayfa Güncelleme alanı

public function PanelSayfaGuncellePost(request $request,$id){
  $guncelle = Sayfalar::where('id',$id)->update([
    'sayfa_adi'=> $request->input('sayfa_adi'),
    'baslik'=> $request->input('baslik'),
    'metin'=> $request->input('metin'),
    'durum'=> $request->input('durum')  ]);

    if($guncelle){

        return redirect()->route('panel-sayfalar')->with('success','Sayfa Başarıyla Güncellendi');

    }








}// panelde sayfa Güncelleme Post alanı


public function PanelSayfaSil($id){
  $sil = Sayfalar::sil($id);
  if($sil){
        return redirect()->route('panel-sayfalar')->with('success','Sayfa Başarıyla Sİlindi');
  }


}// panelde sayfa Silme Alanı


















}
