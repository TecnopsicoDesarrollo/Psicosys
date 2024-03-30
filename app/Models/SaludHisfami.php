<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SaludHisfami
 *
 * @property $id
 * @property $idhisto
 * @property $fecha
 * @property $idmedico
 * @property $idadmision
 * @property $miembro
 * @property $parencon
 * @property $edad
 * @property $cod_edad
 * @property $escolar
 * @property $idocupac
 * @property $vivo
 * @property $muerfec
 * @property $relacion
 * @property $idesex
 * @property $otropare
 * @property $habita
 * @property $observ
 * @property $aporte
 * @property $celular
 * @property $direccion
 * @property $familia
 * @property $redapoy
 * @property $created_at
 * @property $updated_at
 *
 * @property MaestraMedico $maestraMedico
 * @property MaestraOcupac $maestraOcupac
 * @property SaludAdmision $saludAdmision
 * @property SaludHistocab $saludHistocab
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SaludHisfami extends Model
{

    static $rules = [
		'idhisto' => 'required',
    ];

    protected $table = 'salud_hisfami';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     * //'fecha' => 'required',
     * @var array
     */
    protected $fillable = ['idhisto','fecha','idmedico','idadmision','miembro','parencon','edad','cod_edad','escolar','idocupac','vivo','muerfec','relacion','idesex','otropare','habita','observ','aporte','celular','direccion','familia','redapoy'];

    protected $dates = [
        'fecha'
    ];

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
    public function maestraOcupac()
    {
        return $this->hasOne('App\Models\MaestraOcupac', 'id', 'idocupac');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludAdmision()
    {
        return $this->hasOne('App\Models\SaludAdmision', 'id', 'idadmision');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludHistocab()
    {
        return $this->hasOne('App\Models\SaludHistocab', 'id', 'idhisto');
    }


}
