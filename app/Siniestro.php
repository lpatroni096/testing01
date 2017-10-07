<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siniestro extends Model
{
    protected $table='siniestros';

    public static function lista()
    {
        return [''=>'Seleccionar Siniestro'] + Self::pluck('descripcion','id')->toArray();
    }
}
