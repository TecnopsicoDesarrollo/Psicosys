<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MaestraMedico
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $direccion
 * @property $telefono
 * @property $celular
 * @property $mail
 * @property $tarjprof
 * @property $idEspecial
 * @property $intervate
 * @property $firma
 * @property $No_identi
 * @property $fech_nac
 * @property $tipodocu
 * @property $edad
 * @property $cod_edad
 * @property $activo
 * @property $idUser
 * @property $sexo
 * @property $dptonac
 * @property $idciudad
 * @property $dptores
 * @property $idciunac
 * @property $sangre
 * @property $foto
 * @property $area
 * @property $salbasico
 * @property $idSalud
 * @property $idPension
 * @property $created_at
 * @property $updated_at
 *
 * @property AdmonCliente $admonCliente
 * @property AdmonCliente $admonCliente
 * @property MaestraEspecial $maestraEspecial
 * @property MaestraMunicipio $maestraMunicipio
 * @property MaestraMunicipio $maestraMunicipio
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MaestraMedico extends Model
{

    static $rules = [
        'create' => [
            'codigo' => 'required|unique:maestra_medicos,codigo',
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
    protected $fillable = ['codigo','nombre','direccion','telefono','celular','mail','tarjprof','idEspecial','intervate','firma','No_identi','fech_nac','tipodocu','edad','cod_edad','activo','idUser','sexo','dptonac','idciudad','dptores','idciunac','sangre','foto','area','salbasico','idSalud','idPension'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function admonCliente()
    {
        return $this->hasOne('App\Models\AdmonCliente', 'id', 'idPension');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function admonCliente1()
    {
        return $this->hasOne('App\Models\AdmonCliente', 'id', 'idSalud');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestraEspecial()
    {
        return $this->hasOne('App\Models\MaestraEspecial', 'id', 'idEspecial');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestraMunicipio()
    {
        return $this->hasOne('App\Models\MaestraMunicipio', 'id', 'idciudad');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestraMunicipio1()
    {
        return $this->hasOne('App\Models\MaestraMunicipio', 'id', 'idciunac');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'idUser');
    }


}
