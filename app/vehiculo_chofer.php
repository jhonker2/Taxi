<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehiculo_chofer extends Model
{
    protected $fillable = [
        'dispositivo_id','usuario_id','estado','fecha_inicial','fecha_final'
    ];
}
