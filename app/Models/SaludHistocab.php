<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SaludHistocab
 *
 * @property $id
 * @property $no_identi
 * @property $nombre1
 * @property $nombre2
 * @property $apelli1
 * @property $apelli2
 * @property $nomhisto
 * @property $fechnac
 * @property $edad
 * @property $cod_edad
 * @property $sexo
 * @property $estcivil
 * @property $tipo_iden
 * @property $idocupac
 * @property $ideps
 * @property $nomresp
 * @property $parenresp
 * @property $telresp
 * @property $fechape
 * @property $vivo
 * @property $direccion
 * @property $telefono
 * @property $celular
 * @property $idciudad
 * @property $nomacom
 * @property $telacom
 * @property $zona
 * @property $idestrato
 * @property $gae
 * @property $usuario
 * @property $no_idenant
 * @property $tipoafil
 * @property $sangre
 * @property $idciunac
 * @property $escolar
 * @property $foto
 * @property $e_mail
 * @property $idTipovinc
 * @property $created_at
 * @property $updated_at
 *
 * @property MaestraEps $maestraEps
 * @property MaestraEstrato $maestraEstrato
 * @property MaestraMunicipio $maestraMunicipio
 * @property MaestraMunicipio $maestraMunicipio
 * @property MaestraOcupac $maestraOcupac
 * @property MaestraTipovinc $maestraTipovinc
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SaludHistocab extends Model
{

    static $rules = [
        'create' => [
            'no_identi' => 'required|unique:salud_histocabs,no_identi',
            'nombre1' => 'required',
            'apelli1' => 'required',
            'fechnac' => 'required',
            'sexo' => 'required',
            'estcivil' => 'required',
            'tipo_iden' => 'required',
            'direccion' => 'required',
            ],
        'edit'   => [
            'no_identi' => 'required',
            'nombre1' => 'required',
            'apelli1' => 'required',
            'fechnac' => 'required',
            'sexo' => 'required',
            'estcivil' => 'required',
            'tipo_iden' => 'required',
            'direccion' => 'required',
            ]
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['no_identi','nombre1','nombre2','apelli1','apelli2','nomhisto','fechnac','edad','cod_edad','sexo','estcivil','tipo_iden','idocupac','ideps','nomresp','parenresp','telresp','fechape','vivo','direccion','telefono','celular','idciudad','nomacom','telacom','zona','idestrato','gae','usuario','no_idenant','tipoafil','sangre','idciunac','escolar','foto','e_mail','idTipovinc'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestraEpss()
    {
        return $this->hasOne('App\Models\MaestraEps', 'id', 'ideps');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestraEstrato()
    {
        return $this->hasOne('App\Models\MaestraEstrato', 'id', 'idestrato');
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
    public function maestraOcupac()
    {
        return $this->hasOne('App\Models\MaestraOcupac', 'id', 'idocupac');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestraTipovinc()
    {
        return $this->hasOne('App\Models\MaestraTipovinc', 'id', 'idTipovinc');
    }


}
