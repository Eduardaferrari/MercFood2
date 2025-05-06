<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelacomandaController extends Controller
{
    public function telacomanda()
    {
        return view('telacomanda'); 
    }
}