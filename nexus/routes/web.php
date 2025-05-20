<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TelaComandaController;
use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\reservaController;


Route::get('/', function () {
    return view('login');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/site', [SiteController::class, 'site'])->name('site');
Route::get('/cadastro', [CadastroController::class, 'cadastro'])->name('cadastro');
Route::get('/telaComanda', [TelaComandaController::class, 'telaComanda'])->name('telaComanda');
Route::resource('clientes', ClientesController::class);
Route::get('/reserva', [reservaController::class, 'reserva'])->name('reserva');
 