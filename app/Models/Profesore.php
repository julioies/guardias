<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Profesore
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property Laravel.guardia[] $laravel.guardias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Profesore extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'apellidos', 'email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function guardias()
    {
        return $this->hasMany(\App\Models\Laravel.guardia::class, 'id', 'profesor_id');
    }

}
