<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgendasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('agendas')->insert([
            'nombre' => 'Juan Pérez',
            'telefono' => 123456789,
            'email' => 'juan@ejemplo.com',
            'fecha' => '2025-03-10',
        ]);

        DB::table('agendas')->insert([
            'nombre' => 'Ana Gómez',
            'telefono' => 987654321,
            'email' => 'ana@ejemplo.com',
            'fecha' => '2025-03-11',
        ]);
        
        // Agregar más datos según sea necesario
    }
}
