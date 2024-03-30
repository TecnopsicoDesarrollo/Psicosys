<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MaestraDepartam
 *
 * @property $id
 * @property $codigo
 * @property $dpto
 * @property $created_at
 * @property $updated_at
 *
 * @property MaestraMunicipio[] $maestraMunicipios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MaestraDepartam extends Model
{

    static $rules = [
        'create' => [
            'codigo' => 'required|unique:maestra_departams,codigo',
		    'dpto' => 'required'
            ],
        'edit'   => [
            'codigo' => 'required',
		    'dpto' => 'required'
            ]
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     * //|unique:maestra_departams'
     *
     * @var array
     */
    protected $fillable = ['codigo','dpto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function maestraMunicipios()
    {
        return $this->hasMany('App\Models\MaestraMunicipio', 'iddpto', 'id');
    }


}
