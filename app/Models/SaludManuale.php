<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SaludManuale
 *
 * @property $id
 * @property $manual
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SaludManuale extends Model
{

    static $rules = [
        'create' => [
            'manual' => 'required|unique:salud_manuales,manual',
		    'nombre' => 'required'
            ],
        'edit'   => [
            'manual' => 'required',
		    'nombre' => 'required'
            ]
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['manual','nombre'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludContrato()
    {
        return $this->hasMany('App\Models\SaludManuale', 'idManual', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludContratos()
    {
        return $this->hasMany('App\Models\SaludManuale', 'idManual1', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludContraser()
    {
        return $this->hasMany('App\Models\SaludContraser', 'idManual', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludTarifa()
    {
        return $this->hasMany('App\Models\SaludTarifa', 'idManual', 'id');
    }

}
