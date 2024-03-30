<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MaestraDocumen
 *
 * @property $id
 * @property $docu
 * @property $serdoc
 * @property $nombre
 * @property $no_ini
 * @property $no_fin
 * @property $no_actual
 * @property $manual
 * @property $predeter
 * @property $facele
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MaestraDocumen extends Model
{

    static $rules = [
        'create' => [
            'docu' => 'required',
            'serdoc' => 'required',
            'nombre' => 'required',
            'no_ini' => 'required',
            'no_fin' => 'required',
            'no_actual' => 'required'
        ],
        'edit'   => [
            'docu' => 'required',
            'serdoc' => 'required',
            'nombre' => 'required',
            'no_ini' => 'required',
            'no_fin' => 'required',
            'no_actual' => 'required'
        ]
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['docu','serdoc','nombre','no_ini','no_fin','no_actual','manual','predeter','facele'];



}
