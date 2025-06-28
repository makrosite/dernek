<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SabitSayfalarController extends Controller
{
    public function index(){

        return view('panel.pages.sabit-duzenle');

    }
}
