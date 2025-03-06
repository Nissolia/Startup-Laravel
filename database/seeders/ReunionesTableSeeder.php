<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReunionesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('reunions')->insert([
            'cliente_id' => 1,  // Nombre correcto de la columna
            'sala_id' => 1,      // Nombre correcto de la columna
            'fecha' => '2025-03-10',
        ]);
        

        DB::table('reunions')->insert([
            'cliente_id' => 2,
            'sala_id' => 2,
            'fecha' => '2025-03-11',
        ]);
        
        // Agregar más datos si es necesario
    }
}
