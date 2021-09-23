<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConectividadeController extends Controller
{
    public function index(){
        return view('conectividade.pages.mapa');
    }
}
