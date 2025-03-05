<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Database\QueryException;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear un nuevo usuario con rol de 'admin'
        try {
            User::create([
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('adminexample'),
                'role' => 'admin',
            ]);
        } catch (QueryException $e) {
            // Si hay un error de duplicado en el correo electrónico
            if ($e->getCode() === '23000') {
                echo "El correo 'admin@example.com' ya está registrado.\n";
            } else {
                echo "Error al crear el usuario admin: " . $e->getMessage() . "\n";
            }
        }

        // Crear un usuario con rol de 'worker'
        try {
            User::create([
                'name' => 'worker',
                'email' => 'worker@example.com',
                'password' => bcrypt('workerexample'),
                'role' => 'worker',
            ]);
        } catch (QueryException $e) {
            // Si hay un error de duplicado en el correo electrónico
            if ($e->getCode() === '23000') {
                echo "El correo 'worker@example.com' ya está registrado.\n";
            } else {
                echo "Error al crear el usuario worker: " . $e->getMessage() . "\n";
            }
        }

        // Crear un usuario con rol de 'usuario'
        try {
            User::create([
                'name' => 'noelia',
                'email' => 'noelia@example.com',
                'password' => bcrypt('123456789'),
                'role' => 'usuario',
            ]);
        } catch (QueryException $e) {
            // Si hay un error de duplicado en el correo electrónico
            if ($e->getCode() === '23000') {
                echo "El correo 'noelia@example.com' ya está registrado.\n";
            } else {
                echo "Error al crear el usuario noelia: " . $e->getMessage() . "\n";
            }
        }
    }
}
