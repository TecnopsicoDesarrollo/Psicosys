<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MaestraTipovinc;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class TipovincSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maestra_tipovincs')->delete();
        $json = File::get('database/json/tipovinc.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            MaestraTipovinc::create(array(
                'codigo'=> $obj->codigo,
                'tipovinc'=> $obj->tipovinc,
            ));
        }
    }
}
