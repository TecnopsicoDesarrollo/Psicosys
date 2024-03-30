<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SaludContraser
 *
 * @property $id
 * @property $idContra
 * @property $idEps
 * @property $idManual
 * @property $idCodserv
 * @property $nombre
 * @property $idCodcups
 * @property $incremen
 * @property $tipotar
 * @property $idConcecont
 * @property $grupquir
 * @property $excluido
 * @property $created_at
 * @property $updated_at
 *
 * @property AdmonConcecont $admonConcecont
 * @property MaestraEps $maestraEps
 * @property SaludContrato $saludContrato
 * @property SaludCupss $saludCupss
 * @property SaludManuale $saludManuale
 * @property SaludTarifa $saludTarifa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SaludContraser extends Model
{

    static $rules = [
		'idContra' => 'required',
		'idEps' => 'required',
		'idManual' => 'required',
		'idCodserv' => 'required',
		'nombre' => 'required',
		'idCodcups' => 'required',
		'idConcecont' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idContra','idEps','idManual','idCodserv','nombre','idCodcups','incremen','tipotar','idConcecont','grupquir','excluido'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function admonConcecont()
    {
        return $this->hasOne('App\Models\AdmonConcecont', 'id', 'idConcecont');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestraEpss()
    {
        return $this->hasOne('App\Models\MaestraEps', 'id', 'idEps');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludContrato()
    {
        return $this->hasOne('App\Models\SaludContrato', 'id', 'idContra');
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludTarifa()
    {
        return $this->hasOne('App\Models\SaludTarifa', 'id', 'idCodserv');
    }

}
