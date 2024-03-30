<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MaestraTipoaten
 *
 * @property $id
 * @property $codigo
 * @property $nomtipo
 * @property $rip
 * @property $bodega
 * @property $created_at
 * @property $updated_at
 *
 * @property SaludAdmision[] $saludAdmisions
 * @property SaludHisgeneral[] $saludHisgenerals
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MaestraTipoaten extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'nomtipo' => 'required',
    ];

    protected $table = 'maestra_tipoaten';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nomtipo','rip','bodega'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludAdmisions()
    {
        return $this->hasMany('App\Models\SaludAdmision', 'idcodaten', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludHisgenerals()
    {
        return $this->hasMany('App\Models\SaludHisgeneral', 'idcodaten', 'id');
    }
    

}
