<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SaludHiselem;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class HiselemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salud_hiselem')->delete();
        $json = File::get('database/json/hiselem.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            SaludHiselem::create(array(
                'codele'=> $obj->codele,
                'elemento'=> $obj->elemento,
                'cm_nom'=> $obj->cm_nom,
                'cm_tipo'=> $obj->cm_tipo,
                'cm_ancho'=> $obj->cm_ancho,
                'cm_deci'=> $obj->cm_deci,
                'tipo'=> $obj->tipo,
                'comando'=> $obj->comando,
                'predeter'=> $obj->predeter,
            ));
        }
    }
}
