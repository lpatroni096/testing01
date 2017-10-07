<?php

use Illuminate\Database\Seeder;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado')->insert([
            ['descripcion' => 'No Iniciado'],
            ['descripcion' => 'Procede'],
            ['descripcion' => 'Entrevista'],
            ['descripcion' => 'En Analisis']]);
    }
}
