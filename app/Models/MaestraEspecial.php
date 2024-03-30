<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MaestraEspecial
 *
 * @property $id
 * @property $codigo
 * @property $especiali
 * @property $created_at
 * @property $updated_at
 *
 * @property MaestraMedico[] $maestraMedicos
 * @property SaludHistipo[] $saludHistipos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MaestraEspecial extends Model
{

    static $rules = [
        'create' => [
            'codigo' => 'required|unique:maestra_especial,codigo',
		    'especiali' => 'required'
            ],
        'edit'   => [
            'codigo' => 'required',
		    'especiali' => 'required'
            ]
    ];

    protected $table = 'maestra_especial';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','especiali'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function maestraMedicos()
    {
        return $this->hasMany('App\Models\MaestraMedico', 'idEspecial', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludHistipos()
    {
        return $this->hasMany('App\Models\SaludHistipo', 'idEspecial', 'id');
    }


}
