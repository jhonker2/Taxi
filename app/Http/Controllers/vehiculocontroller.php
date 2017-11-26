<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;


class vehiculocontroller extends Controller
{
    //
    public function index()
    {
    	$chofer = DB::select("Select c.id, concat(p.nombres,' ',p.apellidos) as chofer from personas p,choferes c where p.id=c.id_persona");
        return view('vehiculos.formulario',compact('chofer'));
    }



}
