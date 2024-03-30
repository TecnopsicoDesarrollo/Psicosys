<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SaludCie
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $sexo
 * @property $edadmin
 * @property $edadmax
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SaludCie extends Model
{

    static $rules = [
        'create' => [
            'codigo' => 'required|unique:salud_cies,codigo',
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
    protected $fillable = ['codigo','nombre','sexo','edadmin','edadmax'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludDsmv()
    {
        return $this->hasMany('App\Models\SaludDsmv', 'idCie10', 'id');
    }

}
