<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SaludCupscapi
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property SaludCupss[] $saludCupsses
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SaludCupscapi extends Model
{

    static $rules = [
        'create' => [
            'codigo' => 'required|unique:salud_cupscapis,codigo',
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
    public function saludCupsses()
    {
        return $this->hasMany('App\Models\SaludCupss', 'idCapitulo', 'id');
    }


}
