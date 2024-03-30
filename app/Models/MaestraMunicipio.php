<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MaestraMunicipio
 *
 * @property $id
 * @property $codigo
 * @property $ciudad
 * @property $dpto
 * @property $cod_muni
 * @property $iddpto
 * @property $created_at
 * @property $updated_at
 *
 * @property MaestraDepartam $maestraDepartam
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MaestraMunicipio extends Model
{

    static $rules = [
        'create' => [
            'codigo' => 'required|unique:maestra_municipios,codigo',
            'ciudad' => 'required',
            'dpto' => '',
            'cod_muni' => 'required',
            'iddpto' => 'required'
            ],
        'edit'   => [
            'codigo' => 'required',
            'ciudad' => 'required',
            'dpto' => '',
            'cod_muni' => 'required',
            'iddpto' => 'required'
            ]

    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['iddpto','cod_muni','ciudad','dpto','codigo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestraDepartam()
    {
        return $this->hasOne('App\Models\MaestraDepartam', 'id', 'iddpto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function admonCliente()
    {
        return $this->hasMany('App\Models\AdmonCliente', 'idCiudad', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludHistocab()
    {
        return $this->hasMany('App\Models\SaludHistocab', 'idCiudad', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludHistocab1()
    {
        return $this->hasMany('App\Models\SaludHistocab', 'idciunac', 'id');
    }

}
