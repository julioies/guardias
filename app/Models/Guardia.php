<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Guardia extends Model
{
    use HasFactory;

    protected $table= 'guardias';

    protected $fillable = ['profesor_id', 'horario_id', 'zona_id', 'mes'];

    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }

    public function horario()
    {
        return $this->belongsTo(Horario::class);
    }

    public function zona()
    {
        return $this->belongsTo(Zona::class);
    }
}
