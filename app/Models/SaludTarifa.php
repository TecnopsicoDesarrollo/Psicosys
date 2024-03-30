<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SaludTarifa
 *
 * @property $id
 * @property $idManual
 * @property $codigo
 * @property $nombre
 * @property $uvresp
 * @property $uvrgen
 * @property $valuvr
 * @property $costo
 * @property $idCodcups
 * @property $grupquir
 * @property $sexo
 * @property $edadmin
 * @property $edadmax
 * @property $tipotar
 * @property $idConcecont
 * @property $iva
 * @property $porciva
 * @property $codrela
 * @property $tipocon
 * @property $codtar2
 * @property $excluido
 * @property $codatc
 * @property $usuario
 * @property $created_at
 * @property $updated_at
 *
 * @property AdmonConcecont $admonConcecont
 * @property SaludContraser[] $saludContrasers
 * @property SaludCupss $saludCupss
 * @property SaludManuale $saludManuale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SaludTarifa extends Model
{

    static $rules = [
        'create' => [
            'codigo' => 'required|unique:salud_tarifas,codigo',
		    'nombre' => 'required',
            'idManual' => 'required',
            'idCodcups' => 'required',
            'idConcecont' => 'required',
            ],
        'edit'   => [
            'idManual' => 'required',
            'codigo' => 'required',
            'nombre' => 'required',
            'idCodcups' => 'required',
            'idConcecont' => 'required',
            ]
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     * 'iva','porciva','codtar2','excluido','codatc','usuario'
     */
    protected $fillable = ['idManual','codigo','nombre','uvresp','uvrgen','valuvr','costo','idCodcups','grupquir','sexo','edadmin','edadmax','tipotar','idConcecont','codrela','tipocon'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function admonConcecont()
    {
        return $this->hasOne('App\Models\AdmonConcecont', 'id', 'idConcecont');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludContrasers()
    {
        return $this->hasMany('App\Models\SaludContraser', 'idCodserv', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludCupss()
    {
        return $this->hasOne('App\Models\SaludCupss', 'id', 'idCodcups');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludManuale()
    {
        return $this->hasOne('App\Models\SaludManuale', 'id', 'idManual');
    }


}
