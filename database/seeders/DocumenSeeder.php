<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MaestraDocumen;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class DocumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maestra_documens')->delete();
        $json = File::get('database/json/documen.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            MaestraDocumen::create(array(
                'docu' => $obj->docu,
                'serdoc' => $obj->serdoc,
                'nombre' => $obj->nombre,
                'no_ini' => $obj->no_ini,
                'no_fin' => $obj->no_fin,
                'no_actual' => $obj->no_actual,
                'manual' => $obj->manual,
                'predeter' => $obj->predeter,
                'facele' => $obj->facele
            ));
        }
    }
}
