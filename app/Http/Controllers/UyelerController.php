<?php

namespace App\Http\Controllers;

use App\Models\Uyeler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UyelerController extends Controller
{
     public function index(){

        return view('pages.uyeler');
    }
    public function panel(){
        return view('panel.pages.panel-uyeler');

    }
    public function ekle(){
        return view('panel.pages.uye-ekle');

    }
    public function eklepost(request $request){

         $resimadi= rand(0,1000).".".$request->resim->getClientOriginalExtension();
         $yukle = $request->resim->move(public_path("uyeler"), $resimadi);
        $ekle= Uyeler::insert([
            'firmaunvan'=> $request->firmaunvan,
            'adsoyad'=> $request->adsoyad,
            'telefon'=> $request->telefon,
            'eposta'=> $request->eposta,
            'hakkinda'=> $request->hakkinda,
            'durum'=> $request->durum,
            'resim'=>$resimadi,
            'created_at'=>now()
        ]);
        if($ekle){
            return redirect()->route('uyelerpanel')->with('success', 'Üye Başarıyla Eklendi');
        }

    }
    public function uyeguncelle($id){
 $uye = Uyeler::find($id);


        return view('panel.pages.uye-duzenle',compact('uye'));


    }

    public function uyeguncellepost(request $request,$id){
 $uye = Uyeler::find($id);
    $uyeResim = $uye->resim;
    if(!$request->resim ==null){
        File::delete(public_path('uyeler/'.$uyeResim));
         $resimadi= rand(0,1000).".".$request->resim->getClientOriginalExtension();

        // resim doluysa
$guncelle= Uyeler::where('id',$id)->update([
    'firmaunvan'=> $request->firmaunvan,
    'adsoyad'=> $request->adsoyad,
    'telefon'=> $request->telefon,
    'eposta'=> $request->eposta,
    'hakkinda'=> $request->hakkinda,
     'resim'=>$resimadi,
    'durum'=> $request->durum,]);

    if($guncelle){
          $yukle = $request->resim->move(public_path("uyeler"), $resimadi);

            return redirect()->route('uyelerpanel')->with('success','Bilgiler Başarıyla Güncellendi');

    }



    }else{

        $guncelle= Uyeler::where('id',$id)->update([
    'firmaunvan'=> $request->firmaunvan,
    'adsoyad'=> $request->adsoyad,
    'telefon'=> $request->telefon,
    'eposta'=> $request->eposta,
    'hakkinda'=> $request->hakkinda,

    'durum'=> $request->durum,]);

    if($guncelle){


            return redirect()->route('uyelerpanel')->with('success','Bilgiler Başarıyla Güncellendi');

    }


        // resim boş ise
    }



    }


    public function uyesil($id){
        $Uye = Uyeler::where('id',$id)->first();
        $UyeSil  = Uyeler::where( 'id',$id)->delete();
        if($UyeSil){
               File::delete(public_path('uyeler/'.$Uye->resim));
            return redirect()->route('uyelerpanel')->with('info','Üye Başarıyla Silindi');
        }


    }




    public function durum($id){
        $uyebul =   Uyeler::where('id',$id)->first();
        if($uyebul->durum==1){
            Uyeler::where('id',$id)->update([
                'durum'=> 0,
            ]);
            return redirect()->route('uyelerpanel')->with('success','Başarıyla Güncellendi');
        }else{

            Uyeler::where('id',$id)->update([
                'durum'=> 1,
            ]);
            return redirect()->route('uyelerpanel')->with('success','Başarıyla Güncellendi');
        }

    }

}
