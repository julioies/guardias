<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Guardia
 *
 * @property $id
 * @property $profesor_id
 * @property $horario_id
 * @property $zona_id
 * @property $mes
 * @property $created_at
 * @property $updated_at
 *
 * @property Horario $horario
 * @property Profesore $profesore
 * @property Zona $zona
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Guardia extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['profesor_id', 'horario_id', 'zona_id', 'mes'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function horario()
    {
        return $this->belongsTo(\App\Models\Horario::class, 'horario_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function profesore()
    {
        return $this->belongsTo(\App\Models\Profesore::class, 'profesor_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function zona()
    {
        return $this->belongsTo(\App\Models\Zona::class, 'zona_id', 'id');
    }
    
}
