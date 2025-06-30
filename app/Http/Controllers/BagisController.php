<?php

namespace App\Http\Controllers;

use App\Models\Bagis;
use Illuminate\Http\Request;

class BagisController extends Controller
{
    public function index(){

    }
    public function panel(){

        $bagislar = Bagis::orderBy('created_at', 'desc')->get();

        return view('panel.pages.panel-bagis',compact('bagislar'));

    }
    public function sil($id){
$bagissil = Bagis::where('id',$id)->delete();
if($bagissil){
    return redirect()->back()->with('success','Başarıyla Silindi');
}

    }

    public function ekle(request $request){
        $bagisEkle = Bagis::insert([
            'adsoyad'=> $request->adsoyad,
            'aciklama'=> $request->aciklama,
            'banka'=> $request->banka,
            'tutar'=> $request->tutar,
            'durum'=>2,
            'created_at'=>now()

        ]);

        return redirect()->back()->with('success','BAĞIŞ BEKLEMEDE OLARAK EKLENDİ ');

    }
    public function durum($id){
        $veri = Bagis::where('id',$id)->first();
        $durum = $veri->durum;
 if( $durum== 2)
{
    Bagis::where('id',$id)->update(['durum'=>1]);
    return redirect()->back()->with('success','');
    // 1 olacak

}
else if($durum == 1){
        Bagis::where('id',$id)->update(['durum'=>3]);
    return redirect()->back()->with('success','');
}

else if($durum == 3){
        Bagis::where('id',$id)->update(['durum'=>2]);
    return redirect()->back()->with('success','');
}
else {
        Bagis::where('id',$id)->update(['durum'=>1]);
    return redirect()->back()->with('success','');
}

    }
}
