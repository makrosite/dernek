<?php

namespace App\Http\Controllers;

use App\Models\Iletisim;
use Illuminate\Http\Request;

class IletisimController extends Controller
{
    public function index(){
        $bilgi = Iletisim::find(1);
        return view('pages.iletisim',compact('bilgi'));


    }
}
