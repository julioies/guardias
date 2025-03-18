<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;


class Horario extends Model
{
    use HasFactory;
    //
    protected $table= 'horarios';


    protected $fillable = ['hora_inicio', 'hora_fin'];

    public function guardias()
    {
        return $this->hasMany(Guardia::class);
    }
}
