<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SaludContrato
 *
 * @property $id
 * @property $idcontra
 * @property $plan
 * @property $idEps
 * @property $nombre
 * @property $fechini
 * @property $durac
 * @property $fechfin
 * @property $fechfirma
 * @property $telconta
 * @property $firmado
 * @property $idManual
 * @property $tipo
 * @property $topemes
 * @property $salmin
 * @property $tipotar
 * @property $porcen
 * @property $usuario
 * @property $idManual1
 * @property $notas
 * @property $idEps1
 * @property $modival
 * @property $created_at
 * @property $updated_at
 *
 * @property MaestraEps $maestraEps
 * @property MaestraEps $maestraEps
 * @property SaludContraser[] $saludContrasers
 * @property SaludManuale $saludManuale
 * @property SaludManuale $saludManuale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SaludContrato extends Model
{

    static $rules = [
        'create' => [
            'idcontra' => 'required',
            'plan' => 'required',
            'idEps' => 'required',
            'nombre' => 'required',
            'fechini' => 'required',
            'durac' => 'required',
            'idManual' => 'required',
            'tipo' => 'required',
            'tipotar' => 'required'
            ],
        'edit'   => [
            'idcontra' => 'required',
            'plan' => 'required',
            'idEps' => 'required',
            'nombre' => 'required',
            'fechini' => 'required',
            'durac' => 'required',
            'idManual' => 'required',
            'tipo' => 'required',
            'tipotar' => 'required'
            ]
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idcontra','plan','idEps','nombre','fechini','durac','fechfin','fechfirma','telconta','firmado','idManual','tipo','topemes','salmin','tipotar','porcen','usuario','idManual1','notas','idEps1','modival'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestraEps()
    {
        return $this->hasOne('App\Models\MaestraEps', 'id', 'idEps1');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestraEpss()
    {
        return $this->hasOne('App\Models\MaestraEps', 'id', 'idEps');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludContrasers()
    {
        return $this->hasMany('App\Models\SaludContraser', 'idContra', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludManual()
    {
        return $this->hasOne('App\Models\SaludManuale', 'id', 'idManual');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludManuale()
    {
        return $this->hasOne('App\Models\SaludManuale', 'id', 'idManual1');
    }


}
