<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SaludHisgeneral
 *
 * @property $id
 * @property $idhisto
 * @property $fecha
 * @property $idmedico
 * @property $idadmision
 * @property $idcodaten
 * @property $moting
 * @property $enferact
 * @property $antefam
 * @property $anteper
 * @property $peso
 * @property $talla
 * @property $frecar
 * @property $freres
 * @property $tempe
 * @property $tendias
 * @property $tensist
 * @property $sentidos
 * @property $huesos
 * @property $respi
 * @property $cardio
 * @property $nervio
 * @property $gastro
 * @property $urinar
 * @property $endocri
 * @property $cabeza
 * @property $iddiaging
 * @property $iddiaging1
 * @property $iddiaging2
 * @property $iddiaging3
 * @property $proxcita
 * @property $iddiagsal
 * @property $iddiagsal1
 * @property $iddiagsal2
 * @property $iddiagsal3
 * @property $iddiagsal4
 * @property $iddiagsal5
 * @property $iddiagsal6
 * @property $imc
 * @property $imcexp
 * @property $pt
 * @property $ptexp
 * @property $te
 * @property $teexp
 * @property $pce
 * @property $pceexp
 * @property $pe
 * @property $peexp
 * @property $cc
 * @property $ccexp
 * @property $alergia
 * @property $sivigila
 * @property $fechfin
 * @property $edadmes
 * @property $tratam
 * @property $revsist
 * @property $exafisg
 * @property $examen
 * @property $impdiaa
 * @property $tratamb
 * @property $evoamb
 * @property $trathos
 * @property $evohos
 * @property $tramedg
 * @property $evomedg
 * @property $apreper
 * @property $evoenfe
 * @property $evoterocu
 * @property $resum
 * @property $concprof
 * @property $antepef
 * @property $valsicam
 * @property $valsicho
 * @property $reapoyo
 * @property $evsocial
 * @property $ningre
 * @property $evohosdia
 * @property $laborat
 * @property $planman
 * @property $planegr
 * @property $created_at
 * @property $updated_at
 *
 * @property MaestraMedico $maestraMedico
 * @property MaestraTipoaten $maestraTipoaten
 * @property SaludAdmision $saludAdmision
 * @property SaludCy $saludCy
 * @property SaludCy $saludCy
 * @property SaludCy $saludCy
 * @property SaludCy $saludCy
 * @property SaludCy $saludCy
 * @property SaludCy $saludCy
 * @property SaludCy $saludCy
 * @property SaludCy $saludCy
 * @property SaludCy $saludCy
 * @property SaludCy $saludCy
 * @property SaludCy $saludCy
 * @property SaludHistocab $saludHistocab
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SaludHisgeneral extends Model
{

    static $rules = [
		'idhisto' => 'required',
		'fecha' => 'required',
		'idmedico' => 'required',
    ];

    protected $table = 'salud_hisgeneral';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idhisto','fecha','idmedico','idadmision','idcodaten','moting','enferact','antefam','anteper','peso','talla','frecar','freres','tempe','tendias','tensist','sentidos','huesos','respi','cardio','nervio','gastro','urinar','endocri','cabeza','iddiaging','iddiaging1','iddiaging2','iddiaging3','proxcita','iddiagsal','iddiagsal1','iddiagsal2','iddiagsal3','iddiagsal4','iddiagsal5','iddiagsal6','imc','imcexp','pt','ptexp','te','teexp','pce','pceexp','pe','peexp','cc','ccexp','alergia','sivigila','fechfin','edadmes','tratam','revsist','exafisg','examen','impdiaa','tratamb','evoamb','trathos','evohos','tramedg','evomedg','apreper','evoenfe','evoterocu','resum','concprof','antepef','valsicam','valsicho','reapoyo','evsocial','ningre','evohosdia','laborat','planman','planegr'];


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
    public function maestraTipoaten()
    {
        return $this->hasOne('App\Models\MaestraTipoaten', 'id', 'idcodaten');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludAdmision()
    {
        return $this->hasOne('App\Models\SaludAdmision', 'id', 'idadmision');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludCiesal()
    {
        return $this->hasOne('App\Models\SaludCy', 'id', 'iddiagsal');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludCiesal1()
    {
        return $this->hasOne('App\Models\SaludCy', 'id', 'iddiagsal1');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludCiesal2()
    {
        return $this->hasOne('App\Models\SaludCy', 'id', 'iddiagsal2');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludCiesal3()
    {
        return $this->hasOne('App\Models\SaludCy', 'id', 'iddiagsal3');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludCiesal4()
    {
        return $this->hasOne('App\Models\SaludCy', 'id', 'iddiagsal4');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludCiesal5()
    {
        return $this->hasOne('App\Models\SaludCy', 'id', 'iddiagsal5');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludCiesal6()
    {
        return $this->hasOne('App\Models\SaludCy', 'id', 'iddiagsal6');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludCieing()
    {
        return $this->hasOne('App\Models\SaludCy', 'id', 'iddiaging');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludCieing1()
    {
        return $this->hasOne('App\Models\SaludCy', 'id', 'iddiaging1');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludCieing2()
    {
        return $this->hasOne('App\Models\SaludCy', 'id', 'iddiaging2');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludCieing3()
    {
        return $this->hasOne('App\Models\SaludCy', 'id', 'iddiaging3');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saludHistocab()
    {
        return $this->hasOne('App\Models\SaludHistocab', 'id', 'idhisto');
    }


}
