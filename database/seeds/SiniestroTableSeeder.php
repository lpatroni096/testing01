<?php

use Illuminate\Database\Seeder;

class SiniestroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siniestros')->insert([
            ['descripcion' => 'Robo'],
            ['descripcion' => 'Muerte Accidental'],
            ['descripcion' => 'Accidentes Personales']
        ]);
    }
}
