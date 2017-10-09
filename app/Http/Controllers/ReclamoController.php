<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reclamo;
use App\Siniestro;
use App\Filtro_Reclamo;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ReclamoController extends Controller
{

    public function search()
    {
        $siniestros = Siniestro::lista();

        return view('reclamo.search',['siniestros'=>$siniestros]);
    }

    public function buscar(Request $request)
    {
        $reclamos = Filtro_Reclamo::filtro($request)->with('siniestro','asegurado','estado','estado_ev')->get();

        $array_datos_ordenados = [];

        foreach($reclamos as $reclamo)
        {
            //ordena los valores con llaves requeridas para el datatables
            $array_datos_ordenados [] = [

                "siniestro" => isset($reclamo->siniestro)? $reclamo->siniestro->descripcion : '',
                "importe" => $reclamo->monto ,
                "nombre" => $reclamo->asegurado->nombres ,
                "documento" => isset($reclamo->asegurado)? $reclamo->asegurado->documento : '',
                "estado_ev" =>isset($reclamo->estado_ev)? $reclamo->estado_ev->descripcion : '',
                "estado" =>isset($reclamo->estado)? $reclamo->estado->descripcion : '',

            ];
        }

        return response()->json(array('data'=>$array_datos_ordenados));
    }


    public function analizar()
    {
        $siniestros = Siniestro::lista();
        
        return view('reclamo.analizar',['siniestros'=>$siniestros]);
    }


    public function analisis_python()
    {
        //http://symfony.com/doc/current/components/process.html
        //Aqui va el proceso
        $process = new Process('python3 /home/luis/Desktop/test.py');

        $process->run();
        
        // executes after the command finishes
        if (!$process->isSuccessful())
        {
            echo 'Error.';
        }
        
        echo $process->getOutput();

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
