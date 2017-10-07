<?php

namespace App;
use App\Reclamo;
use Illuminate\Http\Request;

class Filtro_Reclamo 
{
    public static function filtro (Request $request)
    {
        $reclamos = Reclamo::query();

        if($request->has('siniestro') &&  $request->siniestro!=null  )
        {
            $reclamos->where('siniestro_id',$request->siniestro);
        }

        if($request->has('cliente') &&  $request->cliente!=null)
        {
            $reclamos->where('asegurado_id',$request->cliente);
        }

        if($request->has('fecha') &&  $request->fecha!=null)
        {
            $reclamos->where('fecha',$request->fecha);
        }
        
        if($request->has('importe_reclamado') &&  $request->importe_reclamado!=null )
        {
            $reclamos->where('monto',$request->importe_reclamado);
        }
        
        if($request->has('documento') &&  $request->documento!=null)
        {
            $documento = $request->documento;

            $reclamos->whereHas('asegurado', function ($reclamos) use ($documento)
            {
                $reclamos->where('documento', $documento);
            });
        }
        
        return $reclamos;

    }
}
