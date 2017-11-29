<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\localizacione;

class LocalizacionConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function localizacion(Request $request){
        $date = Carbon::now();
        /*$user_login = DB::select("select u.cedula,u.nombre from usuario_systems u, dispositivos d, dispositivo_usuarios du where d.id_movil=? and du.estado='online' and u.cedula=?",[$request->id_dispositivo, $request->cedula]);
        if($user_login!=[]){
            $id_dis_usu    =   DB::select("Select id from dispositivo_usuarios where usuario_id= ? and estado='online'",[$request->cedula]);
                if($id_dis_usu!=[]){
                    $id_du=0;
                        foreach ($id_dis_usu as $du) {
                            $id_du=$du->id;
                        }
                }
        */
           /* $dispositivo = DB::select("Select id from dispositivos where id_movil = ?",[$request->id_dispositivo]);
            $id=0;
                foreach ($dispositivo as $disp) {
                    $id=$disp->id;
                }*/
        localizacione::create([ 'id_vehiculo' => '1',
                                'id_vehiculo_chofer' => '1',
                                'latitud'        => $request->latitud,
                                'longitud'       => $request->longitud,
                                'fecha'          => $date->format('Y-m-d'),
                                'hora'           => $date->format('H:i:s')
            ]);

            return response()->json(["Actualizacion"=>"true"]);
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
        //
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
