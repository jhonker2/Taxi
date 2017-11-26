<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use db;

class vehiculocontroller extends Controller
{
    //
    public function index()
    {
        return view('vehiculos.formulario');
    }



}
