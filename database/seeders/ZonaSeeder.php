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
            ['nombre' => 'PB'],
            ['nombre' => 'P1'],
            ['nombre' => 'P2'],
            ['nombre' => 'SUS1'],
            ['nombre' => 'SUS2'],
            ['nombre' => 'Z1'],
            ['nombre' => 'Z2'],
            ['nombre' => 'Z3'],
            ['nombre' => 'Z4'],
            ['nombre' => 'Z5'],
            ['nombre' => 'SUS3'],
        ];

        Zona::insert($zonas);
    }
}
