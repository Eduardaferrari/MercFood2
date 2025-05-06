<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; // Importe a classe View

class SiteController extends Controller
{
    public function index(): View
    {
        return view('site'); // Carrega a view site.blade.php
    }
}