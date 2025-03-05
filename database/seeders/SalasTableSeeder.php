<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('salas')->insert([
            'nombre' => 'Sala A',
            'capacidad' => 10,
            'proyector' => 'Sí',
        ]);

        DB::table('salas')->insert([
            'nombre' => 'Sala B',
            'capacidad' => 20,
            'proyector' => 'No',
        ]);
        
        // Agregar más datos si es necesario
    }
}
