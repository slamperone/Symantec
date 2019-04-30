<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    //

    protected $fillable = [
    	'idRegistrado','hash','asistencia'
    ];
}
