<?php

namespace App\Http\Controllers;

use App\Models\Iletisim;
use App\Models\Mesajlar;
use Illuminate\Http\Request;

class IletisimController extends Controller
{
    public function index(){
        $bilgi = Iletisim::find(1);
        return view('pages.iletisim',compact('bilgi'));


    }

    public function mesajgonder(request $request){
 $mesajgonder = Mesajlar::insert([
    'adsoyad'=> $request->adsoyad,
    'telefon'=> $request->telefon,
    'eposta'=> $request->eposta,
    'sektor'=> $request->sektor,
    'konu'=> $request->konu,
    'mesaj'=> $request->mesaj,
    'okundu'=> 0,
    'created_at'=> now() ]);

    if($mesajgonder){
            return redirect()->back()->with('success','Mesajınız tarafımıza Ulaştı');

    }





    }


}
