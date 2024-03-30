<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MaestraEps
 *
 * @property $id
 * @property $codigo
 * @property $entidad
 * @property $tipenti
 * @property $no_identi
 * @property $created_at
 * @property $updated_at
 * @property $idTercero
 *
 * @property AdmonCliente $admonCliente
 * @property AdmonCliente[] $admonClientes
 * @property SaludContraser[] $saludContrasers
 * @property SaludContrato[] $saludContratos
 * @property SaludContrato[] $saludContratos
 * @property SaludHistocab[] $saludHistocabs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MaestraEps extends Model
{

    static $rules = [
        'create' => [
            'codigo' => 'required|unique:maestra_eps,codigo',
		    'entidad' => 'required'
            ],
        'edit'   => [
            'codigo' => 'required',
		    'entidad' => 'required'
            ]
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','entidad','tipenti','no_identi','idTercero'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function admonCliente()
    {
        return $this->hasOne('App\Models\AdmonCliente', 'id', 'idTercero');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function admonClientes()
    {
        return $this->hasMany('App\Models\AdmonCliente', 'idEps', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludContrasers()
    {
        return $this->hasMany('App\Models\SaludContraser', 'idEps', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludContrato()
    {
        return $this->hasMany('App\Models\SaludContrato', 'idEps1', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludContratos()
    {
        return $this->hasMany('App\Models\SaludContrato', 'idEps', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludHistocabs()
    {
        return $this->hasMany('App\Models\SaludHistocab', 'ideps', 'id');
    }


}
