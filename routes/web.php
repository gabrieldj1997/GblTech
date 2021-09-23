<?php

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

Route::get('/conectividade', [ConectividadeController::class, 'index']);