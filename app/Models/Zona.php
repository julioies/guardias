<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Zona
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Laravel.guardia[] $laravel.guardias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Zona extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function guardias()
    {
        return $this->hasMany(\App\Models\Laravel.guardia::class, 'id', 'zona_id');
    }

}
