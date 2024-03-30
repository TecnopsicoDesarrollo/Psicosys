<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SaludHisestru
 *
 * @property $id
 * @property $idcodhis
 * @property $idcodele
 * @property $orden
 * @property $siplanti
 * @property $planti
 * @property $formul
 * @property $tipo
 * @property $comando
 * @property $areaapli
 * @property $created_at
 * @property $updated_at
 *
 * @property SaludHiselem $saludHiselem
 * @property SaludHistipo $saludHistipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SaludHisestru extends Model
{

    static $rules = [
		'idcodhis' => 'required',
		'idcodele' => 'required',
		// 'orden' => 'required|unique:salud_hisestru,orden',
    ];

    protected $table = 'salud_hisestru';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idcodhis','idcodele','orden','siplanti','planti','formul','tipo','comando','areaapli'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludHiselem()
    {
        return $this->hasOne('App\Models\SaludHiselem', 'id', 'idcodele');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludHistipo()
    {
        return $this->hasOne('App\Models\SaludHistipo', 'id', 'idcodhis');
    }


}
