<?php

namespace App\Http\Controllers;

use App\Models\Duyuru;
use App\Models\Etkinlikler;
use App\Models\Isbirlikleri;
use Illuminate\Http\Request;
use App\Models\Haber;
use Illuminate\Support\Facades\File;
class HaberController extends Controller
{
    public function index(){



        $haberler = Haber::getHaberler();


        return view('pages.Haberler', compact('haberler'));
    }







    /// DUYURULAR
    public function duyurular(){

        $duyurular = Duyuru::duyurular();

        return view('pages.duyurular',compact('duyurular'));
    }// FRONTEND DUYURU ÇEK
    public function panelDuyurular(){
$duyurular = Duyuru::duyurular();
return view('panel.pages.duyrular');





    }// panele haberleri çek

    public function DuyuruEkle(){
        return view('panel.pages.duyuru-ekle');

    }// duyuru ekle panel
    public function DuyuruEklePost(request $request){

        if($request->resim==null){

  $kaydet = Duyuru::insert([
            "baslik"=> $request->baslik,
            "metin"=> $request->metin,

         ]);
         if($kaydet){
            return redirect()->route("panelDuyuru")->with("success","duyuru Başarıyla Eklendi");
         }else{
            return redirect()->route("panelDuyuru")->with("error","duyuru Eklenemedi");
         }


        }else{


                 $resimadi= rand(0,1000).".".$request->resim->getClientOriginalExtension();
         $yukle = $request->resim->move(public_path("duyuru"), $resimadi);
         $kaydet = Duyuru::insert([
            "baslik"=> $request->baslik,
            "metin"=> $request->metin,
            "resim"=> $resimadi,
         ]);
         if($kaydet){
            return redirect()->route("panelDuyuru")->with("success","duyuru Başarıyla Eklendi");
         }else{
            return redirect()->route("panelDuyuru")->with("error","duyuru Eklenemedi");
         }

}

    }// duyuru ekle post

    public function DuyuruGuncelle($id){
$duyuru = Duyuru::where("id",$id)->first();

        return view('panel.pages.duyuru-duzenle',compact('duyuru'));


    }// duru güncelle ekranı

    public function  DuyuruGuncellePost(request $request,$id){



       $data = Duyuru::where('id',$id)->first();
        $eskiresim = $data->resim;



        if(!$request->resim==null){
            // resim var ise
            File::delete(public_path('duyuru/'.$eskiresim));
            $resimadi= rand(0,1000).".".$request->resim->getClientOriginalExtension();
         $yukle = $request->resim->move(public_path("duyuru"), $resimadi);

         $kaydet = Duyuru::where('id',$id)->update([
            "baslik"=> $request->baslik,
            "metin"=> $request->metin,
            "resim"=> $resimadi
         ]);
         if($kaydet){
            return redirect()->route("panelDuyuru")->with("success","Duyuru Başarıyla Güncellendi");
         }
         else{
            return redirect()->route("panelDuyuru")->with("error","Duyuru Güncellenemedi");
         }

        }else{
            $kaydet = Duyuru::where('id',$id)->update([
            "baslik"=> $request->baslik,
            "metin"=> $request->metin

         ]);
         if($kaydet){
            return redirect()->route("panelDuyuru")->with("success","Duyuru Başarıyla Güncellendi");
         }
         else{
            return redirect()->route("panelDuyuru")->with("error","Duyuru Güncellenemedi");
         }
        }




    }// duyuru güncelleme Postu
    public function DuyuruSil($id){
    $haber= Duyuru::where('id',$id)->first();
        $dosya = $haber->resim;

        $HaberSil = Duyuru::where('id',$id)->delete();
        if($HaberSil){

             File::delete(public_path('duyuru/'.$dosya));
            return redirect()->route('panelDuyuru')->with('success','Duyuru Başarıyla Silindi.');
        }


    }// duyuruları sil









    ///ETKİNLİKLER //////////////////////////////////////////////////////////////////

    public function etkinliksayfa(){
        $etkinlikler = Etkinlikler::orderBy('id','desc')->get();
        // yorum
        return view('pages.etkinlikler',compact('etkinlikler'));




    }

        public function panelEtkinlik(){


    $duyurular = Etkinlikler::etkinlikler();
    return view('panel.pages.etkinlikler');





        }// panele haberleri çek
    public function EtkinlikEkle(){


        return view('panel.pages.etkinlik-ekle');

    }// etkilik ekle panel

    public function EtkinlikEklePost(request $request){



                 $resimadi= rand(0,1000).".".$request->resim->getClientOriginalExtension();
         $yukle = $request->resim->move(public_path("etkinlik"), $resimadi);
         $kaydet = Etkinlikler::insert([
            "baslik"=> $request->baslik,
            "metin"=> $request->metin,
            "resim"=> $resimadi,
            "tarih"=>$request->tarih
         ]);
         if($kaydet){
            return redirect()->route("paneletkinlik")->with("success","Etkinlik Başarıyla Eklendi");
         }else{
            return redirect()->route("paneletkinlik")->with("error","Etkinlik Eklenemedi");
         }



    }// etkilik ekle post

    public function EtkinlikGuncelle($id){
$duyuru = Etkinlikler::where("id",$id)->first();

        return view('panel.pages.etkinlik-duzenle',compact('duyuru'));


    }// etkinlik güncelle ekranı

    public function  EtkinlikGuncellePost(request $request,$id){



       $data = Etkinlikler::where('id',$id)->first();
        $eskiresim = $data->resim;



        if(!$request->resim==null){
            // resim var ise
            File::delete(public_path('etkinlik/'.$eskiresim));
            $resimadi= rand(0,1000).".".$request->resim->getClientOriginalExtension();
         $yukle = $request->resim->move(public_path("etkinlik"), $resimadi);

         $kaydet = Etkinlikler::where('id',$id)->update([
            "baslik"=> $request->baslik,
            "metin"=> $request->metin,
            "tarih"=>$request->tarih,
            "resim"=> $resimadi
         ]);
         if($kaydet){
            return redirect()->route("paneletkinlik")->with("success","Etkinlik Başarıyla Güncellendi");
         }
         else{
            return redirect()->route("paneletkinlik")->with("error","Etkinlik Güncellenemedi");
         }

        }else{
            $kaydet = Etkinlikler::where('id',$id)->update([
            "baslik"=> $request->baslik,
            "metin"=> $request->metin,
             "tarih"=>$request->tarih

         ]);
         if($kaydet){
            return redirect()->route("paneletkinlik")->with("success","Etkinlik Başarıyla Güncellendi");
         }
         else{
            return redirect()->route("paneletkinlik")->with("error","Etkinlik Güncellenemedi");
         }
        }




    }// duyuru güncelleme Postu
    public function EtkinlikSil($id){
    $haber= Etkinlikler::where('id',$id)->first();
        $dosya = $haber->resim;

        $HaberSil = Etkinlikler::where('id',$id)->delete();
        if($HaberSil){

             File::delete(public_path('etkinlik/'.$dosya));
            return redirect()->route('paneletkinlik')->with('success','Etkinlik Başarıyla Silindi.');
        }


    }// duyuruları sil
































    public function etkinlikler(){


    }
    public function isbirlikleri(){
        $data = Isbirlikleri::veri();
        return view('pages.isbirlikleri',compact('data'));

    }/// frontend





       /// HABERLER

        public function haberdetay($id){


    $haber = Haber::TekHaber($id);
        return view('pages.haber-detay',compact('haber'));
    }

    public function haberler(){


    $haber = Haber::haberler();

  return view( 'panel.pages.haberler',compact('haber'));

    }//haberleri panele aldık

    public function haberduzenle($id){

        $haber = Haber::where('id',$id)->first();
        return view('panel.pages.haber-duzenle',compact('haber'));


    }// haber duzenle



    public function haberduzenlePost(request $request,$id){
        $data = Haber::where('id',$id)->first();
        $eskiresim = $data->resim;

        if(!$request->resim==null){
            // resim var ise
            File::delete(public_path('haber/'.$eskiresim));
            $resimadi= rand(0,1000).".".$request->resim->getClientOriginalExtension();
         $yukle = $request->resim->move(public_path("haber"), $resimadi);

         $kaydet = Haber::where('id',$id)->update([
            "baslik"=> $request->baslik,
            "metin"=> $request->metin,
            "durum"=> $request->durum,
            "resim"=> $resimadi,
            "kategori"=>1,
            "okunma"=>1,
            "yazar"=>1
         ]);
         if($kaydet){
            return redirect()->route("panel-haberler")->with("success","Haber Başarıyla Güncellendi");
         }
         else{
            return redirect()->route("panel-haberler")->with("error","Haber Güncellenemedi");
         }

        }else{
            $kaydet = Haber::where('id',$id)->update([
            "baslik"=> $request->baslik,
            "metin"=> $request->metin,
            "durum"=> $request->durum,

            "kategori"=>1,
            "okunma"=>1,
            "yazar"=>1
         ]);
         if($kaydet){
            return redirect()->route("panel-haberler")->with("success","Haber Başarıyla Güncellendi");
         }
         else{
            return redirect()->route("panel-haberler")->with("error","Haber Güncellenemedi");
         }
        }
    }// haber duzenle post

    public function habersil($id){
        $haber= Haber::where('id',$id)->first();
        $dosya = $haber->resim;

        $HaberSil = Haber::where('id',$id)->delete();
        if($HaberSil){

             File::delete(public_path('haber/'.$dosya));
            return redirect()->route('panel-haberler')->with('success','Haber Başarıyla Silindi.');
        }
    } // haber sil

    public function HaberEkle(){

        return view('panel.pages.haber-ekle');


    }
        public function HaberEklePost(request $request){
         $resimadi= rand(0,1000).".".$request->resim->getClientOriginalExtension();
         $yukle = $request->resim->move(public_path("haber"), $resimadi);
         $kaydet = Haber::insert([
            "baslik"=> $request->baslik,
            "metin"=> $request->metin,
            "durum"=> $request->durum,
            "resim"=> $resimadi,
            "kategori"=>1,
            "okunma"=>1,
            "yazar"=>1
         ]);
         if($kaydet){
            return redirect()->route("panel-haberler")->with("success","Haber Başarıyla Eklendi");
         }else{
            return redirect()->route("panel-haberler")->with("error","Haber Eklenemedi");
         }




    }
}
