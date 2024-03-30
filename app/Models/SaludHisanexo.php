<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SaludHisanexo
 *
 * @property $id
 * @property $idadmision
 * @property $idhisto
 * @property $fecha
 * @property $detalle
 * @property $rutadoc
 * @property $area
 * @property $usuario
 * @property $created_at
 * @property $updated_at
 *
 * @property SaludAdmision $saludAdmision
 * @property SaludHistocab $saludHistocab
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SaludHisanexo extends Model
{
    
    static $rules = [
		'idhisto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idadmision','idhisto','fecha','detalle','rutadoc','area','usuario'];


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
