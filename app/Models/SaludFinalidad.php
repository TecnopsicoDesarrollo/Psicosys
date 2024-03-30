<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SaludFinalidad
 *
 * @property $id
 * @property $codigo
 * @property $finalidad
 * @property $created_at
 * @property $updated_at
 *
 * @property SaludAdmision[] $saludAdmisions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SaludFinalidad extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'finalidad' => 'required',
    ];

    protected $table = 'salud_finalidad';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','finalidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludAdmisions()
    {
        return $this->hasMany('App\Models\SaludAdmision', 'idfinalidad', 'id');
    }
    

}
