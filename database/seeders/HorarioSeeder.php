<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Horario;


class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horarios = [
            ['hora_inicio' => '08:00:00', 'hora_fin' => '09:00:00'],
            ['hora_inicio' => '09:00:00', 'hora_fin' => '10:00:00'],
            ['hora_inicio' => '10:00:00', 'hora_fin' => '11:00:00'],
            ['hora_inicio' => '11:30:00', 'hora_fin' => '12:30:00'],
            ['hora_inicio' => '12:30:00', 'hora_fin' => '13:30:00'],
            ['hora_inicio' => '13:30:00', 'hora_fin' => '14:30:00'],
        ];

        Horario::insert($horarios);
    }
}
