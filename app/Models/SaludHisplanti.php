<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SaludHisplanti
 *
 * @property $id
 * @property $codplanti
 * @property $nombre
 * @property $planti
 * @property $tipoexa
 * @property $edadmin
 * @property $edadmax
 * @property $sexo
 * @property $created_at
 * @property $updated_at
 *
 * @property SaludHisplantd[] $saludHisplantds
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SaludHisplanti extends Model
{
    
    static $rules = [
		'codplanti' => 'required',
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codplanti','nombre','planti','tipoexa','edadmin','edadmax','sexo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludHisplantds()
    {
        return $this->hasMany('App\Models\SaludHisplantd', 'idplanti', 'id');
    }
    

}
