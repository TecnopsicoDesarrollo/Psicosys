<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SaludDsmv
 *
 * @property $id
 * @property $padre
 * @property $codigo
 * @property $nombre
 * @property $eje
 * @property $cie10
 * @property $idCie10
 * @property $criterio
 * @property $created_at
 * @property $updated_at
 *
 * @property SaludCy $saludCy
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SaludDsmv extends Model
{

    static $rules = [
        'create' => [
            'codigo' => 'required|unique:salud_dsmv,codigo',
		    'nombre' => 'required',
            'padre_id' => 'required'
            ],
        'edit'   => [
            'codigo' => 'required',
		    'nombre' => 'required',
            'padre_id' => 'required'
            ]
    ];

    protected $table = 'salud_dsmv';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['padre','padre_id','codigo','nombre','eje','cie10','idCie10','criterio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludCie()
    {
        return $this->hasOne('App\Models\SaludCie', 'id', 'idCie10');
    }

    /**
     * Get the index name for the model.
     *
     * @return string
    */
    public function childs() {
        return $this->hasMany('App\Models\SaludDsmv','padre_id','id') ;
    }


}
