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

    // KAMUYA AÇIK BAĞIŞ FORMU KAYIT
    public function store(Request $request)
    {
        \Log::info('Bagis formu POST verisi:', $request->all());
        $request->validate([
            'adsoyad' => 'required|string|max:255',
            'banka' => 'required|integer',
            'tutar' => 'required|numeric',
            'aciklama' => 'nullable|string',
        ]);

        try {
            Bagis::create([
                'adsoyad' => $request->adsoyad ?? $request->ad_soyad,
                'banka' => $request->banka,
                'tutar' => $request->tutar,
                'aciklama' => $request->aciklama,
                'durum' => 2,
            ]);
        } catch (\Exception $e) {
            \Log::error('Bagis kaydı hatası: ' . $e->getMessage());
            return redirect()->route('bagis.yap')->with('error', 'Bir hata oluştu, lütfen tekrar deneyin.');
        }

        return redirect()->route('bagis.yap')->with('success', 'Bağışınız için teşekkür ederiz.');
    }
}
