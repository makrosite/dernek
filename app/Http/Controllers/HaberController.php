<?php

namespace App\Http\Controllers;

use App\Models\Duyuru;
use App\Models\Isbirlikleri;
use Illuminate\Http\Request;
use App\Models\Haber;
class HaberController extends Controller
{
    public function index(){



        $haberler = Haber::getHaberler();


        return view('pages.Haberler', compact('haberler'));
    }
    public function duyurular(){

        $duyurular = Duyuru::duyurular();

        return view('pages.duyurular',compact('duyurular'));
    }

    public function etkinlikler(){

    }


    public function haberdetay($id){


    $haber = Haber::TekHaber($id);
        return view('pages.haber-detay',compact('haber'));
    }

    public function isbirlikleri(){
        $data = Isbirlikleri::veri();
        return view('pages.isbirlikleri',compact('data'));

    }
}
