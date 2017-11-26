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
          ]);
        if($id>0){
            $id_vehiculo= DB::table('vehiculos')->insertGetId(['id_vehiculo'=>$id ]);
                if($id_vehiculo>0){
                    return response()->json(["registro"=>"ok" ]);
                }else{
                    return response()->json(["registro"=>"error" ]);
                }
        }else{
            return response()->json(["registro"=>"error" ]);
        }

    }



}
