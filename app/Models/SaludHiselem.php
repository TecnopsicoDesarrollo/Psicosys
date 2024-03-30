<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SaludHiselem
 *
 * @property $id
 * @property $codele
 * @property $elemento
 * @property $cm_nom
 * @property $cm_tipo
 * @property $cm_ancho
 * @property $cm_deci
 * @property $tipo
 * @property $comando
 * @property $predeter
 * @property $planti
 * @property $explica
 * @property $created_at
 * @property $updated_at
 *
 * @property SaludHisestru[] $saludHisestrus
 * @property SaludHissegu[] $saludHissegus
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SaludHiselem extends Model
{
    static $rules = [
        'create' => [
            'codele' => 'required|unique:salud_hiselem,codele',
		    'elemento' => 'required'
            ],
        'edit'   => [
            'codele' => 'required',
		    'elemento' => 'required'
            ]
    ];

    protected $table = 'salud_hiselem';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codele','elemento','cm_nom','cm_tipo','cm_ancho','cm_deci','tipo','comando','predeter','planti','explica'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludHisestrus()
    {
        return $this->hasMany('App\Models\SaludHisestru', 'idcodele', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saludHissegus()
    {
        return $this->hasMany('App\Models\SaludHissegu', 'idcodele', 'id');
    }


}
