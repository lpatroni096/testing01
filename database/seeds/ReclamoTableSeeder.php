<?php

use Illuminate\Database\Seeder;

class ReclamoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reclamos')->insert([
            ['asegurado_id' => 1,'siniestro_id' => 1,'estado_ev_id' => 2,'estado_id' => 2,'fecha'=>'2017-10-07','monto'=>500],
            ['asegurado_id' => 2,'siniestro_id' => 2,'estado_ev_id' => 2,'estado_id' => 3,'fecha'=>'2017-10-07','monto'=>500],
            ['asegurado_id' => 3,'siniestro_id' => 3,'estado_ev_id' => 3,'estado_id' => 2,'fecha'=>'2017-10-07','monto'=>500],
            ['asegurado_id' => 4,'siniestro_id' => 2,'estado_ev_id' => 2,'estado_id' => 3,'fecha'=>'2017-10-07','monto'=>500],
            ['asegurado_id' => 5,'siniestro_id' => 2,'estado_ev_id' => 3,'estado_id' => 2,'fecha'=>'2017-10-07','monto'=>500]
            
        ]);
    }
}
