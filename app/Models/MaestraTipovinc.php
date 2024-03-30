<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MaestraTipovinc
 *
 * @property $id
 * @property $codigo
 * @property $tipovinc
 * @property $created_at
 * @property $updated_at
 *
 * @property SaludHistocab[] $saludHistocabs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MaestraTipovinc extends Model
{

    static $rules = [
        'create' => [
            'codigo' => 'required|unique:maestra_tipovincs,codigo',
		    'tipovinc' => 'required'
            ],
        'edit'   => [
            'codigo' => 'required',
		    'tipovinc' => 'required'
            ]
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','tipovinc'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludHistocabs()
    {
        return $this->hasMany('App\Models\SaludHistocab', 'idTipovinc', 'id');
    }


}
