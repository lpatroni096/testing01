<?php

use Illuminate\Database\Seeder;

class EstadoEvaluacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_evaluacion')->insert([
            ['descripcion' => 'No Iniciado'],
            ['descripcion' => 'En Proceso'],
            ['descripcion' => 'Atendido']]);
    }
}
