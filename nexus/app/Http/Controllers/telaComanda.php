<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; 

class telaComanda extends Controller
{
    public function index(): View
    {
        return view('telaComanda');
    }
}
