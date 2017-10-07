<?php

use Illuminate\Database\Seeder;

class AseguradoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asegurados')->insert([
            ['documento' => '11111111','nombres' => 'Juan','apellido_paterno' => 'Perez','apellido_materno' => 'Perez'],
            ['documento' => '22222222','nombres' => 'Maria','apellido_paterno' => 'Paz','apellido_materno' => 'Paz'],
            ['documento' => '33333333','nombres' => 'Pedro','apellido_paterno' => 'Gomez','apellido_materno' => 'Gomez'],
            ['documento' => '44444444','nombres' => 'Julio','apellido_paterno' => 'Rodriguez','apellido_materno' => 'Rodriguez'],
            ['documento' => '55555555','nombres' => 'Pepe','apellido_paterno' => 'Martinez','apellido_materno' => 'Martinez']
        ]);
    }       
}
