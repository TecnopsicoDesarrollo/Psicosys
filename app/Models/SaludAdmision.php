<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SaludAdmision
 *
 * @property $id
 * @property $dcto
 * @property $serdoc
 * @property $numadm
 * @property $idcontra
 * @property $idhisto
 * @property $fecha
 * @property $idmedico
 * @property $idtipovinc
 * @property $autoriz
 * @property $codfase
 * @property $idcodaten
 * @property $idfactura
 * @property $idcupspres
 * @property $iddiagpres
 * @property $ideps
 * @property $idcausaext
 * @property $nopoliza
 * @property $edad
 * @property $cod_edad
 * @property $sexo
 * @property $usuario
 * @property $idfinalidad
 * @property $idegreso
 * @property $iddiaging
 * @property $idcama
 * @property $anula
 * @property $copago
 * @property $consant
 * @property $consact
 * @property $cuotamod
 * @property $proyec
 * @property $ideps1
 * @property $notas
 * @property $admext
 * @property $idmedsoli
 * @property $fechsoli
 * @property $idorigen
 * @property $c19fiebre
 * @property $c19tos
 * @property $c19difres
 * @property $c19viaje
 * @property $c19person
 * @property $c19confir
 * @property $c19trabaj
 * @property $tipoest
 * @property $created_at
 * @property $updated_at
 *
 * @property MaestraEp $maestraEp
 * @property MaestraEp $maestraEp
 * @property MaestraMedico $maestraMedico
 * @property MaestraMedico $maestraMedico
 * @property MaestraTipoaten $maestraTipoaten
 * @property MaestraTipovinc $maestraTipovinc
 * @property SaludCausaext $saludCausaext
 * @property SaludCy $saludCy
 * @property SaludCy $saludCy
 * @property SaludContrato $saludContrato
 * @property SaludCup $saludCup
 * @property SaludFinalidad $saludFinalidad
 * @property SaludHisanexo[] $saludHisanexos
 * @property SaludHisfami[] $saludHisfamis
 * @property SaludHisfoto[] $saludHisfotos
 * @property SaludHisgeneral[] $saludHisgenerals
 * @property SaludHistocab $saludHistocab
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SaludAdmision extends Model
{
    
    static $rules = [
		'dcto' => 'required',
		'serdoc' => 'required',
		'numadm' => 'required',
		'idcontra' => 'required',
		'idhisto' => 'required',
		'fecha' => 'required',
		'idmedico' => 'required',
		'idcodaten' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dcto','serdoc','numadm','idcontra','idhisto','fecha','idmedico','idtipovinc','autoriz','codfase','idcodaten','idfactura','idcupspres','iddiagpres','ideps','idcausaext','nopoliza','edad','cod_edad','sexo','usuario','idfinalidad','idegreso','iddiaging','idcama','anula','copago','consant','consact','cuotamod','proyec','ideps1','notas','admext','idmedsoli','fechsoli','idorigen','c19fiebre','c19tos','c19difres','c19viaje','c19person','c19confir','c19trabaj','tipoest'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestraEp()
    {
        return $this->hasOne('App\Models\MaestraEp', 'id', 'ideps');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestraEp()
    {
        return $this->hasOne('App\Models\MaestraEp', 'id', 'ideps1');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestraMedico()
    {
        return $this->hasOne('App\Models\MaestraMedico', 'id', 'idmedico');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestraMedico()
    {
        return $this->hasOne('App\Models\MaestraMedico', 'id', 'idmedsoli');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestraTipoaten()
    {
        return $this->hasOne('App\Models\MaestraTipoaten', 'id', 'idcodaten');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestraTipovinc()
    {
        return $this->hasOne('App\Models\MaestraTipovinc', 'id', 'idtipovinc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludCausaext()
    {
        return $this->hasOne('App\Models\SaludCausaext', 'id', 'idcausaext');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludCy()
    {
        return $this->hasOne('App\Models\SaludCy', 'id', 'iddiaging');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludCy()
    {
        return $this->hasOne('App\Models\SaludCy', 'id', 'iddiagpres');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludContrato()
    {
        return $this->hasOne('App\Models\SaludContrato', 'id', 'idcontra');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludCup()
    {
        return $this->hasOne('App\Models\SaludCup', 'id', 'idcupspres');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludFinalidad()
    {
        return $this->hasOne('App\Models\SaludFinalidad', 'id', 'idfinalidad');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludHisanexos()
    {
        return $this->hasMany('App\Models\SaludHisanexo', 'idadmision', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludHisfamis()
    {
        return $this->hasMany('App\Models\SaludHisfami', 'idadmision', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludHisfotos()
    {
        return $this->hasMany('App\Models\SaludHisfoto', 'idadmision', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludHisgenerals()
    {
        return $this->hasMany('App\Models\SaludHisgeneral', 'idadmision', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludHistocab()
    {
        return $this->hasOne('App\Models\SaludHistocab', 'id', 'idhisto');
    }
    

}
