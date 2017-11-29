<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class localizacione extends Model
{
     protected $fillable = [
        'id_vehiculo','id_vehiculo_chofer','latitud','longitud','fecha','hora'
    ];
}
