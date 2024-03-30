<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MaestraOcupac
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MaestraOcupac extends Model
{

    static $rules = [
        'create' => [
            'codigo' => 'required|unique:maestra_ocupacs,codigo',
		    'nombre' => 'required'
            ],
        'edit'   => [
            'codigo' => 'required',
		    'nombre' => 'required'
            ]
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nombre'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludHistocab()
    {
        return $this->hasMany('App\Models\SaludHistocab', 'idocupac', 'id');
    }

}
