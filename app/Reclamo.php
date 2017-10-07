<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamo extends Model
{
    protected $table='reclamos';

    public function siniestro()
    {
    	return $this->hasOne('App\Siniestro','id','siniestro_id');
    }

    public function asegurado()
    {
    	return $this->hasOne('App\Asegurado','id','asegurado_id');
    }

    public function estado_ev()
    {
    	return $this->hasOne('App\EstadoEvaluacion','id','estado_ev_id');
    }

    public function estado()
    {
    	return $this->hasOne('App\Estado','id','estado_id');
    }

}
