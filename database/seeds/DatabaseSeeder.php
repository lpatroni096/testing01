<?php

use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\Schema; // At the top of your file
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        
        // $this->call(UsersTableSeeder::class);
        $this->call(AseguradoTableSeeder::class);
        $this->call(EstadoEvaluacionTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(ReclamoTableSeeder::class);
        $this->call(SiniestroTableSeeder::class);
        
    }
}
