<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SaludCups;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class CupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salud_cups')->delete();
        $json = File::get('database/json/cups.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            SaludCups::create(array(
                'aplicado'=> $obj->aplicado,
                'seccio'=> $obj->seccio,
                'capitulo'=> $obj->capitulo,
                'grupo'=> $obj->grupo,
                'subgrupo'=> $obj->subgrupo,
                'categor'=> $obj->categor,
                'subcate'=> $obj->subcate,
                'nombre'=> $obj->nombre,
                'codfase'=> $obj->codfase,
                'codcups'=> $obj->codcups,
                'incluye'=> $obj->incluye,
                'excluye'=> $obj->excluye,
                'simult'=> $obj->simult,
                'idCapitulo'=> $obj->Idcapitulo,
            ));
        }
    }
}
