<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SaludTarifa;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class TarifasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salud_tarifas')->delete();
        $json = File::get('database/json/tarifas.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            SaludTarifa::create(array(
                'idManual'=> $obj->idmanual,
                'codigo'=> $obj->codigo,
                'nombre'=> $obj->nombre,
                'uvresp'=> $obj->uvresp,
                'uvrgen'=> $obj->uvrgen,
                'valuvr'=> $obj->valuvr,
                'costo'=> $obj->costo,
                'idCodcups'=> $obj->idCodcups,
                'grupquir'=> $obj->grupquir,
                'sexo'=> $obj->sexo,
                'edadmin'=> $obj->edadmin,
                'edadmax'=> $obj->edadmax,
                'tipotar'=> $obj->tipotar,
                'idConcecont'=> $obj->Idconcecont,
                'iva'=> $obj->iva,
                'porciva'=> $obj->porciva,
                'codrela'=> $obj->codrela,
                'tipocon'=> $obj->tipocon,
                'codtar2'=> $obj->codtar2,
                'excluido'=> $obj->excluido,
            ));
        }
    }
}
