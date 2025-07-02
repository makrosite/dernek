<?php

namespace App\Http\Controllers;

use App\Models\Mesajlar;
use Illuminate\Http\Request;

class MesajlarController extends Controller
{
    public function panel(){
      return view('panel.pages.mesajlar');
    }
    public function goster($id){
        $mesaj = Mesajlar::find($id);
        $okundu = Mesajlar::where('id', $mesaj->id)->update(['okundu'=>1]);
        if($okundu){
return view('panel.pages.mesaj',compact('mesaj'));
        }


    }
    public function sil($id){

        $mesajsil = Mesajlar::where('id',$id)->delete();
        if($mesajsil){
        return redirect()->back()->with('success','Başarıyla Silindi');
          }
        }

        public function  iletisim(request $request){



        }

}
