<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {// dd(auth()->user());
        return view('inicio');
    }
}
