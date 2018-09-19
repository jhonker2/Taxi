<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class monitoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('monitores.formulario');
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
        //
       $id = DB::table('personas')->insertGetId([
            'nombres'   => $request->input('nombres'), 
            'apellidos' => $request->input('apellidos'),
            'telefono'  => $request->input('telefono'),
            'foto'  => 'sinfoto',
            'correo'  => 'sin correo',
            'convensional'  =>$request->input('convensional'),
            'cedula'  => $request->input('cedula'),
            'id_dispositivo'  => '',
            'estado'=>'1',
            ]);
       $id_users = DB::table('users')->insertGetId([
                    'usuario'   => $request->input('usuario'), 
                    'password' => $request->input('clave'),
                    'tipo'  => '1',
                    ]);
        if ($id>0 and $id_users>0) 
        {
            # code...
            $id_monitor=DB::table('monitores')->insertGetId(['id_persona'=>$id,
                                                             'id_users'=>$id_users]);
            if ($id_monitor>0) {
                # code...
                 return response()->json(["registro"=>"ok"]);
            }

            
        }else
        {
            return response()->json(["registro"=>"error"]);
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
