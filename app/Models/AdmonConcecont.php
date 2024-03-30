<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AdmonConcecont
 *
 * @property $id
 * @property $codigo
 * @property $concepto
 * @property $cta_debe
 * @property $cta_haber
 * @property $cta_iva
 * @property $cta_riva
 * @property $cta_dscto
 * @property $cta_inven
 * @property $tipo_mov
 * @property $cta_costo
 * @property $proyec
 * @property $cta_almac
 * @property $ivalmac
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AdmonConcecont extends Model
{

    static $rules = [
        'create' => [
            'codigo' => 'required|unique:admon_conceconts,codigo',
		    'concepto' => 'required'
            ],
        'edit'   => [
            'codigo' => 'required',
		    'concepto' => 'required'
            ]
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','concepto','cta_debe','cta_haber','cta_iva','cta_riva','cta_dscto','cta_inven','tipo_mov','cta_costo','proyec','cta_almac','ivalmac'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludContraser()
    {
        return $this->hasMany('App\Models\SaludContraser', 'idConcecont', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludTarifa()
    {
        return $this->hasMany('App\Models\SaludTarifa', 'idConcecont', 'id');
    }

}
