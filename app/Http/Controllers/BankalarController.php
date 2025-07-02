<?php

namespace App\Http\Controllers;
use App\Models\Bankalar;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class BankalarController extends Controller
{
    public function index(){

    }// banakalr fronten

    public function panel(request $request){

        return view('panel.pages.panel-bankalar');


    }// bankalar panel
    public function ekle(request $request){
         $resimadi= rand(0,1000).".".$request->logo->getClientOriginalExtension();

 $ekle = Bankalar::insert(["bankaadi"=> $request->bankaadi,
 "iban"=> $request->iban,
 "durum"=> $request->durum,
 "logo"=> $resimadi,
 "created_at"=> now()]);
if($ekle){
      $yukle = $request->logo->move(public_path("banka"), $resimadi);
    return redirect()->back()->with("success","Bankal Biglisi Başarıyla Eklendi");
}
    } // banka ekle

    public function sil($id){
        $dosyalar = Bankalar::find($id);
        $dosya = $dosyalar->logo;
        $sil = Bankalar::find($id)->delete();
        if($sil){
                File::delete(public_path('banka/'.$dosya));
                return redirect()->back()->with("success","Başarıyla Silindi");
        }

    }// banka sil

        public function durum($id){
$veri = Bankalar::find($id);
$durum = $veri->durum;
if($durum == 1){
    Bankalar::where('id', $id)->update(['durum'=>0]);
    return redirect()->back()->with('success','');
}else{
        Bankalar::where('id', $id)->update(['durum'=>1]);
    return redirect()->back()->with('success','');

}


    }
}
