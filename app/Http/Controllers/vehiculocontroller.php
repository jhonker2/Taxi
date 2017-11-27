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


public function store(Request $request)
 {
        $id = DB::table('vehiculos')->insertGetId([
            'placa'   => $request->input('placa'), 
            'unidad' => $request->input('unidad'),
            'marca'  => $request->input('marca'),
            'estado'=>'1',
            'id_chofer'=>$request->input('choferes')
          ]);
        if($id>0){
            return response()->json(["registro"=>"ok" ]);
        }else{
            return response()->json(["registro"=>"error" ]);
        }

    }



}
