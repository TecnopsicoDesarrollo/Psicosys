<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SaludHissegu
 *
 * @property $id
 * @property $idcodhis
 * @property $idcodele
 * @property $usuario
 * @property $sec_prompt
 * @property $idmedico
 * @property $sec_adic
 * @property $sec_edit
 * @property $created_at
 * @property $updated_at
 *
 * @property MaestraMedico $maestraMedico
 * @property SaludHiselem $saludHiselem
 * @property SaludHistipo $saludHistipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SaludHissegu extends Model
{

    static $rules = [
		'idcodhis' => 'required',
		'idcodele' => 'required',
		'idmedico' => 'required',
    ];

    protected $table = 'salud_hissegu';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idcodhis','idcodele','usuario','sec_prompt','idmedico','sec_adic','sec_edit'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestraMedico()
    {
        return $this->hasOne('App\Models\MaestraMedico', 'id', 'idmedico');
    }

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
