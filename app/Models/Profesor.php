<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profesor extends Model
{
    use HasFactory;

    protected $table= 'profesores';
    protected $fillable = ['nombre','apellidos','email'];

    public function guardias()
    {
        return $this->hasMany(Guardia::class);
    }
}
