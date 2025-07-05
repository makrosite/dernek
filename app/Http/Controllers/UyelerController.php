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
        $data = $request->validate([
            'adi' => 'nullable|string',
            'soyadi' => 'nullable|string',
            'baba_adi' => 'nullable|string',
            'anne_adi' => 'nullable|string',
            'dogum_yeri' => 'nullable|string',
            'dogum_tarihi' => 'nullable|date',
            'tc_kimlik_no' => 'nullable|string|max:11',
            'meslegi' => 'nullable|string',
            'kan_grubu' => 'nullable|string',
            'is_telefonu' => 'nullable|string',
            'ev_telefonu' => 'nullable|string',
            'cep_telefonu' => 'nullable|string',
            'eposta' => 'nullable|string',
            'nufusa_kayit_il_ilce_mahalle' => 'nullable|string',
            'ikamet_adresi' => 'nullable|string',
            'is_adresi' => 'nullable|string',
            'ogrenim_durumu' => 'nullable|string',
            'durum' => 0,
            'firmaunvanı' => 'nullable|string',
            'resim' => 'nullable|image',
        ]);
        if($request->hasFile('resim')){
            $resimadi= rand(0,1000).".".$request->resim->getClientOriginalExtension();
            $request->resim->move(public_path("uyeler"), $resimadi);
            $data['resim'] = $resimadi;
        }
        Uyeler::create($data);
        return redirect()->route('uyelerpanel')->with('success', 'Üye Başarıyla Eklendi');
    }
    public function uyeguncelle($id){
 $uye = Uyeler::find($id);


        return view('panel.pages.uye-duzenle',compact('uye'));


    }

    public function uyeguncellepost(request $request,$id){
        $uye = Uyeler::find($id);
        $data = $request->validate([
            'adi' => 'nullable|string',
            'soyadi' => 'nullable|string',
            'baba_adi' => 'nullable|string',
            'anne_adi' => 'nullable|string',
            'dogum_yeri' => 'nullable|string',
            'dogum_tarihi' => 'nullable|date',
            'tc_kimlik_no' => 'nullable|string|max:11',
            'meslegi' => 'nullable|string',
            'kan_grubu' => 'nullable|string',
            'is_telefonu' => 'nullable|string',
            'ev_telefonu' => 'nullable|string',
            'cep_telefonu' => 'nullable|string',
            'eposta' => 'nullable|string',
            'nufusa_kayit_il_ilce_mahalle' => 'nullable|string',
            'ikamet_adresi' => 'nullable|string',
            'is_adresi' => 'nullable|string',
            'ogrenim_durumu' => 'nullable|string',
            'durum' => 'nullable|integer',
            'firmaunvanı' => 'nullable|string',
            'resim' => 'nullable|image',
        ]);
        if($request->hasFile('resim')){
            if($uye->resim && $uye->resim != 'resimyok.jpg'){
                \Illuminate\Support\Facades\File::delete(public_path('uyeler/'.$uye->resim));
            }
            $resimadi= rand(0,1000).".".$request->resim->getClientOriginalExtension();
            $request->resim->move(public_path("uyeler"), $resimadi);
            $data['resim'] = $resimadi;
        }
        $uye->update($data);
        return redirect()->route('uyelerpanel')->with('success','Bilgiler Başarıyla Güncellendi');
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

    // Üye Kayıt Formu (Kullanıcıdan gelen başvuru)
    public function uyeKayitPost(Request $request)
    {
        $data = $request->validate([
            'adi' => 'nullable|string',
            'soyadi' => 'nullable|string',
            'baba_adi' => 'nullable|string',
            'anne_adi' => 'nullable|string',
            'dogum_yeri' => 'nullable|string',
            'dogum_tarihi' => 'nullable|date',
            'tc_kimlik_no' => 'nullable|string|max:11',
            'meslegi' => 'nullable|string',
            'kan_grubu' => 'nullable|string',
            'is_telefonu' => 'nullable|string',
            'ev_telefonu' => 'nullable|string',
            'cep_telefonu' => 'nullable|string',
            'eposta' => 'nullable|string',
            'nufusa_kayit_il_ilce_mahalle' => 'nullable|string',
            'ikamet_adresi' => 'nullable|string',
            'is_adresi' => 'nullable|string',
            'ogrenim_durumu' => 'nullable|string',
            'firmaunvanı' => 'nullable|string',
            'resim' => 'nullable|image',
        ]);
        if ($request->hasFile('resim')) {
            $resimadi = uniqid('uye_') . '.' . $request->file('resim')->getClientOriginalExtension();
            $request->file('resim')->move(public_path('uyeler'), $resimadi);
            $data['resim'] = $resimadi;
        }
        Uyeler::create($data);
        return response()->json(['success' => true]);
    }

}
