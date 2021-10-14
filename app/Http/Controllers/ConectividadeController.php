<?php

namespace App\Http\Controllers;

class ConectividadeController extends Controller
{
    public function index(){
        return view('conectividade.pages.mapa');
    }

    public function auxilioEmergencial(){
        return view('conectividade.pages.buscaAuxilio');
    }

    public function bolsaFamilia(){
        return view('conectividade.pages.buscaBolsa');
    }
}
