<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SaludCups
 *
 * @property $id
 * @property $aplicado
 * @property $seccio
 * @property $capitulo
 * @property $grupo
 * @property $subgrupo
 * @property $categor
 * @property $subcate
 * @property $nombre
 * @property $codfase
 * @property $codcups
 * @property $incluye
 * @property $excluye
 * @property $simult
 * @property $idCapitulo
 * @property $created_at
 * @property $updated_at
 *
 * @property SaludContraser[] $saludContrasers
 * @property SaludCupscapi $saludCupscapi
 * @property SaludTarifa[] $saludTarifas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SaludCups extends Model
{

    static $rules = [
        'create' => [
            'codcups' => 'required|unique:salud_cups,codcups',
		    'nombre' => 'required'
            ],
        'edit'   => [
            'codcups' => 'required',
		    'nombre' => 'required'
            ]
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     * 'grupo','subgrupo','categor','subcate', (agregar despues al  fillable)
     */
    protected $fillable = ['aplicado','seccio','capitulo','nombre','codfase','codcups','incluye','excluye','simult','idCapitulo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludContrasers()
    {
        return $this->hasMany('App\Models\SaludContraser', 'idCodcups', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludCupscapi()
    {
        return $this->hasOne('App\Models\SaludCupscapi', 'id', 'idCapitulo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludTarifas()
    {
        return $this->hasMany('App\Models\SaludTarifa', 'idCodcups', 'id');
    }


}
