<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReunionesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('reuniones')->insert([
            'agendas_id' => 1, // ID de la agenda (persona)
            'salas_id' => 1,   // ID de la sala
            'fecha' => '2025-03-10',
        ]);

        DB::table('reuniones')->insert([
            'agendas_id' => 2,
            'salas_id' => 2,
            'fecha' => '2025-03-11',
        ]);
        
        // Agregar más datos si es necesario
    }
}
