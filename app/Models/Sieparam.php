<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sieparam
 *
 * @property $id
 * @property $empresa
 * @property $direccion
 * @property $telefono
 * @property $rut
 * @property $ciudad
 * @property $sie_contab
 * @property $licen
 * @property $numemp
 * @property $serialdd
 * @property $logo
 * @property $codpres
 * @property $iva
 * @property $ctacopa
 * @property $ctacopcxc
 * @property $horatemp
 * @property $horinidis
 * @property $horfindis
 * @property $ctacxcglo
 * @property $ctagasglo
 * @property $ctacopgas
 * @property $tipoemp
 * @property $contproy
 * @property $proveefac
 * @property $redondea
 * @property $fotodef
 * @property $hisocup
 * @property $histera
 * @property $hispsic
 * @property $hiscons
 * @property $hisimag
 * @property $hisaudi
 * @property $hisespi
 * @property $hisopto
 * @property $sicree
 * @property $porcree
 * @property $debecree
 * @property $habecree
 * @property $cboespe
 * @property $ctamod
 * @property $copaest
 * @property $bloqcon
 * @property $costodet
 * @property $hisocup1
 * @property $hislabo
 * @property $siica
 * @property $tasaica
 * @property $debeica
 * @property $habeica
 * @property $sibom
 * @property $porcbom
 * @property $debebom
 * @property $habebom
 * @property $sirtefte
 * @property $porrte
 * @property $deberte
 * @property $costinv
 * @property $rutagem
 * @property $sikit
 * @property $tipoliq
 * @property $regimen
 * @property $hispeq
 * @property $covid19
 * @property $ushispol
 * @property $ushisoxi
 * @property $ushispre
 * @property $usbod
 * @property $usprovee
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sieparam extends Model
{
    
    static $rules = [
		'empresa' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'rut' => 'required',
		'ciudad' => 'required',
		'sie_contab' => 'required',
		'licen' => 'required',
		'numemp' => 'required',
		'serialdd' => 'required',
		'logo' => 'required',
		'codpres' => 'required',
		'iva' => 'required',
		'ctacopa' => 'required',
		'ctacopcxc' => 'required',
		'horatemp' => 'required',
		'horinidis' => 'required',
		'horfindis' => 'required',
		'ctacxcglo' => 'required',
		'ctagasglo' => 'required',
		'ctacopgas' => 'required',
		'tipoemp' => 'required',
		'contproy' => 'required',
		'proveefac' => 'required',
		'redondea' => 'required',
		'fotodef' => 'required',
		'hisocup' => 'required',
		'histera' => 'required',
		'hispsic' => 'required',
		'hiscons' => 'required',
		'hisimag' => 'required',
		'hisaudi' => 'required',
		'hisespi' => 'required',
		'hisopto' => 'required',
		'sicree' => 'required',
		'porcree' => 'required',
		'debecree' => 'required',
		'habecree' => 'required',
		'cboespe' => 'required',
		'ctamod' => 'required',
		'copaest' => 'required',
		'bloqcon' => 'required',
		'costodet' => 'required',
		'hisocup1' => 'required',
		'hislabo' => 'required',
		'siica' => 'required',
		'tasaica' => 'required',
		'debeica' => 'required',
		'habeica' => 'required',
		'sibom' => 'required',
		'porcbom' => 'required',
		'debebom' => 'required',
		'habebom' => 'required',
		'sirtefte' => 'required',
		'porrte' => 'required',
		'deberte' => 'required',
		'costinv' => 'required',
		'rutagem' => 'required',
		'sikit' => 'required',
		'tipoliq' => 'required',
		'regimen' => 'required',
		'hispeq' => 'required',
		'covid19' => 'required',
		'ushispol' => 'required',
		'ushisoxi' => 'required',
		'ushispre' => 'required',
		'usbod' => 'required',
		'usprovee' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['empresa','direccion','telefono','rut','ciudad','sie_contab','licen','numemp','serialdd','logo','codpres','iva','ctacopa','ctacopcxc','horatemp','horinidis','horfindis','ctacxcglo','ctagasglo','ctacopgas','tipoemp','contproy','proveefac','redondea','fotodef','hisocup','histera','hispsic','hiscons','hisimag','hisaudi','hisespi','hisopto','sicree','porcree','debecree','habecree','cboespe','ctamod','copaest','bloqcon','costodet','hisocup1','hislabo','siica','tasaica','debeica','habeica','sibom','porcbom','debebom','habebom','sirtefte','porrte','deberte','costinv','rutagem','sikit','tipoliq','regimen','hispeq','covid19','ushispol','ushisoxi','ushispre','usbod','usprovee'];



}
