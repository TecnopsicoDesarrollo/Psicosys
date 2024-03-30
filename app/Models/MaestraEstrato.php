<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MaestraEstrato
 *
 * @property $id
 * @property $codigo
 * @property $estrato
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MaestraEstrato extends Model
{

    static $rules = [
        'create' => [
            'codigo' => 'required|unique:maestra_estratos,codigo',
		    'estrato' => 'required'
            ],
        'edit'   => [
            'codigo' => 'required',
		    'estrato' => 'required'
            ]
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','estrato'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludHistocab()
    {
        return $this->hasMany('App\Models\SaludHistocab', 'idestrato', 'id');
    }

}
