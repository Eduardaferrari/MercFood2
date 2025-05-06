<?php

use App\Http\Controllers\siteController;
use App\Http\Controllers\cadastroController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\TelaComandaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});


Route::get('/login', [loginController::class, 'login'])->name('login');
Route::get('/site', [siteController::class, 'site'])->name('site');
Route::get('/cadastro', [cadastroController::class, 'cadastro'])->name('cadrasto');
Route::get('/telaComanda', [telaComandaController::class, 'telaComanda'])->name('telaComanda');