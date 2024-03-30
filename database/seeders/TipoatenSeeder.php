<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MaestraTipoaten;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class TipoatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maestra_tipoaten')->delete();
        $json = File::get('database/json/tipoaten.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            MaestraTipoaten::create(array(
                'codigo'=> $obj->codigo,
                'nomtipo'=> $obj->nomtipo,
                'rip' => $obj->rip,
                'bodega' => $obj->bodega,
            ));
        }
    }
}
