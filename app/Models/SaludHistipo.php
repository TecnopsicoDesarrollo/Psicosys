<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SaludHistipo
 *
 * @property $id
 * @property $codhis
 * @property $nombre
 * @property $idEspecial
 * @property $created_at
 * @property $updated_at
 *
 * @property MaestraEspecial $maestraEspecial
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SaludHistipo extends Model
{

    static $rules = [
        'create' => [
            'codhis' => 'required|unique:salud_histipo,codhis',
		    'nombre' => 'required'
            ],
        'edit'   => [
            'codhis' => 'required',
		    'nombre' => 'required'
            ]
    ];

    protected $table = 'salud_histipo';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codhis','nombre','idEspecial'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestraEspecial()
    {
        return $this->hasOne('App\Models\MaestraEspecial', 'id', 'idEspecial');
    }


}
