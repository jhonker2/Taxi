<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('clientes.formulario');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $id = DB::table('personas')->insertGetId([
            'nombres'   => $request->input('nombres'), 
            'apellidos' => $request->input('apellidos'),
            'telefono'  => $request->input('telefono'),
            'foto'  => 'sinfoto',
            'correo'  => 'sin correo',
            'convensional'  =>$request->input('convensional'),
            'cedula'  => $request->input('cedula'),
            'id_dispositivo'  => '',
            'estado'=>'1'
            ]);
        if($id>0){
            $id_cliente= DB::table('clientes')->insertGetId([
                'id_persona'=>$id,
                'referencia'  => $request->input('referencia')
                 ]);
                if($id_cliente>0){
                    return response()->json(["registro"=>"ok" ]);
                }else{
                    return response()->json(["registro"=>"error" ]);
                }
        }else{
            return response()->json(["registro"=>"error" ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
