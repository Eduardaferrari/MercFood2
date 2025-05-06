<?php

use App\Http\Controllers\telaComanda;
use App\Http\Controllers\cadastro;
use App\Http\Controllers\loginController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', [TestController::class, 'test'])->name('test');

Route::post('/site', function () {
    return view('site'); 
});

Route::post('/cadastro', function() {
    return view('cadastro');
});

Route::get('/telaComanda', function() {
    return view('telaComanda');
});