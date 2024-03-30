<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AdmonCliente
 *
 * @property $id
 * @property $no_identi
 * @property $tipo_iden
 * @property $direccion
 * @property $telefono
 * @property $nomclien
 * @property $idCiudad
 * @property $zona
 * @property $e_mail
 * @property $celular
 * @property $internor
 * @property $intermora
 * @property $tipoper
 * @property $digiveri
 * @property $regimen
 * @property $autoret
 * @property $reteiva
 * @property $rtefte
 * @property $no_ideant
 * @property $cliente
 * @property $provee
 * @property $otro
 * @property $eseps
 * @property $idEps
 * @property $usuario
 * @property $nombre1
 * @property $nombre2
 * @property $apelli1
 * @property $apelli2
 * @property $diascre
 * @property $cupocxc
 * @property $idacteco
 * @property $escree
 * @property $rutarut
 * @property $porrte
 * @property $nomcial
 * @property $nomatri
 * @property $idoblig
 * @property $idtipoimp
 * @property $regitrib
 * @property $idpostal
 * @property $created_at
 * @property $updated_at
 *
 * @property MaestraEps $maestraEps
 * @property MaestraEps[] $maestraEps
 * @property MaestraMunicipio $maestraMunicipio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AdmonCliente extends Model
{

    static $rules = [
        'create' => [
            'no_identi' => 'required|unique:admon_clientes,no_identi',
            'tipo_iden' => 'required',
            'direccion' => 'required',
            'idCiudad' => 'required',
            'celular' => 'required'
            ],
        'edit'   => [
            'no_identi' => 'required',
            'tipo_iden' => 'required',
            'direccion' => 'required',
            'idCiudad' => 'required',
            'celular' => 'required'
            ]
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['no_identi','tipo_iden','direccion','telefono','nomclien','idCiudad','zona','e_mail','celular','tipoper','digiveri','regimen','autoret','reteiva','rtefte','cliente','provee','otro','eseps','nombre1','nombre2','apelli1','apelli2','idacteco','escree'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestraEps()
    {
        return $this->hasOne('App\Models\MaestraEps', 'id', 'idEps');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function maestraEpss()
    {
        return $this->hasMany('App\Models\MaestraEps', 'idTercero', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestraMunicipio()
    {
        return $this->hasOne('App\Models\MaestraMunicipio', 'id', 'idCiudad');
    }


}
