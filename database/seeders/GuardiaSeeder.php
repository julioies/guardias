<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guardia;
use App\Models\Profesor;
use App\Models\Zona;
use App\Models\Horario;

class GuardiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $meses = ['Septiembre', 'Octubre', 'Noviembre', 'Diciembre', 'Enero',
                  'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'];

        $profesores = Profesor::all();
        $horarios = Horario::all();
        $zonas = Zona::all();

        foreach ($meses as $mes) {
            foreach ($horarios as $horario) {
                foreach ($zonas as $zona) {
                    $profesor = $profesores->random();

                    Guardia::create([
                        'profesor_id' => $profesor->id,
                        'horario_id' => $horario->id,
                        'zona_id' => $zona->id,
                        'mes' => $mes,
                    ]);
                }
            }
        }
    }
}
