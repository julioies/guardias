<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Zona;

class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zonas = [
            ['nombre' => 'Entrada Principal'],
            ['nombre' => 'Patio Central'],
            ['nombre' => 'Comedor'],
            ['nombre' => 'Pasillo de Aulas'],
            ['nombre' => 'Gimnasio'],
        ];

        Zona::insert($zonas);
    }
}
