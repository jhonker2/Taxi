<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    protected $fillable = [
        'nombres', 'apellidos', 'telefono','foto','correo','convensional','cedula','id_dispositivo','estado'
    ];
}
