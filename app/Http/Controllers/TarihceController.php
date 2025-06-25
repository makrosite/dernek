<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarihceController extends Controller
{
    public function index(){
        return view('pages.tarihce');
    }
}
