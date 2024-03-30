<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SaludDsmv;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class DsmvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salud_dsmv')->delete();
        $json = File::get('database/json/dsmv.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            SaludDsmv::create(array(
                'padre'=> $obj->padre,
                'padre_id'=> $obj->padre_id,
                'codigo'=> $obj->codigo,
                'nombre'=> $obj->nombre,
                'eje'=> $obj->eje,
                'cie10'=> $obj->cie10,
                'idcie10'=> $obj->idcie10,
                'criterio'=> $obj->criterio,
            ));
        }
    }
}
