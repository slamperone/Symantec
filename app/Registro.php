<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    //
        protected $fillable = [

        'nombre','apellidos','compania','dir','colonia','cp','telefono','correo','tamanio','encuesta'

    ];

}
