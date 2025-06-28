<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function slider(){

        $slider = Slider::all();

        return view('panel.pages.slider',compact('slider'));


    }///slider çek


    public function sliderEkle(request$request){

         $resimadi= rand(0,1000).".".$request->resim->getClientOriginalExtension();
         $yukle = $request->resim->move(public_path("slider"), $resimadi);
         $kaydet = Slider::insert([
            "baslik"=> $request->baslik,
            "metin"=> $request->metin,
            "resim"=> $resimadi,
            "durum"=>$request->durum
         ]);
         if($kaydet){
            return redirect()->route("slider")->with("success"," Başarıyla Eklendi");

    }// SLİDER EKLEME

}
    public function sliderSil($id){

        $slider = Slider::find($id);
         $dosya = $slider->resim;
        $slideSil= Slider::where('id',$id)->delete();
        if($slideSil){
            File::delete(public_path('slider/'.$dosya));
            return redirect()->route('slider')->with('success','Başarıyla Kaldırıldı');

        }
    }// slider silme alanı

    public function SlideDuzenle($id){
$slide = Slider::find($id)->first();
return view('panel.pages.slide-duzenle',compact('slide'));

    }

        public function SliderGuncelle(request$request, $id){
            $slider = Slider::find($id);
             $dosya = $slider->resim;

             if(!$request->resim==null){
     File::delete(public_path('slider/'.$dosya));
     $resimadi= rand(0,1000).".".$request->resim->getClientOriginalExtension();
     $yukle = $request->resim->move(public_path("slider"), $resimadi);
          $kaydet = Slider::where('id',$id)->update([
            "baslik"=> $request->baslik,
            "metin"=> $request->metin,
            "resim"=> $resimadi,
            "durum"=>$request->durum
         ]);
            if($kaydet){
                return redirect()->route("slider")->with("success"," Başarıyla Eklendi");

        }

    }else{
        $kaydet = Slider::where('id',$id)->update([
            "baslik"=> $request->baslik,
            "metin"=> $request->metin,
            "durum"=>$request->durum
         ]);
            if($kaydet){
                return redirect()->route("slider")->with("success"," Başarıyla Eklendi");

        }


    }








}

}
