<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ChoferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Chofer.formulario');
    }

    public function choferes()
    {   
        $choferes = DB::select("Select c.id, concat(p.nombres,' ',p.apellidos)as chofer, p.telefono, p.cedula, p.estado from personas p, choferes c where p.id=c.id_persona");
        
        return view('Chofer.choferes',compact('choferes'));
    }

    public function view_tabla(){
        $choferes = DB::select("Select c.id, concat(p.nombres,' ',p.apellidos)as chofer, p.telefono, p.cedula, p.estado from personas p, choferes c where p.id=c.id_persona");
        
        return view('Chofer.tabla',compact('choferes'));
    }

    public function delete_chofer($id){
        $chofer= DB::update('update personas,choferes set estado="0" where choferes.id=? and choferes.id_persona=personas.id',[$id]);
        if($chofer==1){
            return response()->json(["RES"=>true]);
        }else{
            return response()->json(["RES"=>false]);
        }
    }
    public function activar_chofer($id){
        $chofer= DB::update('update personas,choferes set estado="1" where choferes.id=? and choferes.id_persona=personas.id',[$id]);
        if($chofer==1){
            return response()->json(["RES"=>true]);
        }else{
            return response()->json(["RES"=>false]);
        }
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
            $id_chofer= DB::table('choferes')->insertGetId(['id_persona'=>$id ]);
                if($id_chofer>0){
                    return response()->json(["registro"=>"ok" ]);
                }else{
                    return response()->json(["registro"=>"error" ]);
                }
        }else{
            return response()->json(["registro"=>"error" ]);
        }

    }

    public function GET_CHOFERES(){
        $chofer=DB::select("select * from personas");
        return $chofer;
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
