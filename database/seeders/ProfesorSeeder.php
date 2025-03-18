<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profesor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profesores = [
            ['nombre' => 'María López','apellidos'=> 'Guti','email' => 'maria.lopez@example.com'],
            ['nombre' => 'Juan Pérez','apellidos'=> 'Noguera','email' => 'juan.perez@example.com'],
            ['nombre' => 'Ana García', 'apellidos'=> 'CLiment','email' => 'ana.garcia@example.com'],
            ['nombre' => 'Carlos Fernández','apellidos'=> 'Maestre', 'email' => 'carlos.fernandez@example.com'],
            ['nombre' => 'Laura Sánchez', 'apellidos'=> 'Sancho','email' => 'laura.sanchez@example.com'],
        ];

        Profesor::insert($profesores);
    }
}
