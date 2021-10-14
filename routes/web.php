<?php

use App\Http\Controllers\ApiSerpro;
use App\Http\Controllers\ConectividadeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| Contains the "web" middleware group. Now create something great!
|
*/

//Aplicação GBL Tech
Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function(){
    return view('pages.about');
});

Route::get('/services', function(){
    return view('pages.services');
});

Route::get('/contact', function(){
    return view('pages.contact');
});

//Aplicação +Conectividade
Route::group(['prefix' => '/conectividade'], function(){
    Route::get('/', [ConectividadeController::class, 'index']);

    Route::get('/auxilio-emergencial', [ConectividadeController::class, 'auxilioEmergencial']);
    
    Route::get('/bolsa-familia', [ConectividadeController::class, 'bolsaFamilia']);

    //API
    Route::group(['prefix' => '/api/v1'], function(){
        
        Route::get('/bolsa/municipio', [ApiSerpro::class, 'consultarBolsaMunicipio']);
        
        Route::post('/bolsa/cpf-nis', [ApiSerpro::class, 'consultarBolsaCpfNis']);
        
        Route::post('/bolsa/saque-nis', [ApiSerpro::class, 'consultarBolsaSaqueNis']);
        
        Route::post('/auxilio/municipio', [ApiSerpro::class, 'consultarAuxilioMunicipio']);
        
        Route::post('/auxilio/cpf-nis', [ApiSerpro::class, 'consultarAuxilioCpfNis']);
        
        Route::post('/auxilio/benifeciario-municipio', [ApiSerpro::class, 'consultarAuxiliobenifeciarioMunicipio']);
    });
    
});
