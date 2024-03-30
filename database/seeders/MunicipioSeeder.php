<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\MaestraMunicipio;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maestra_municipios')->delete();
        $json = File::get('database/json/municipio.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            MaestraMunicipio::create(array(
                'codigo' => $obj->codigo,
                'ciudad' => $obj->ciudad,
                'dpto' => $obj->dpto,
                'cod_muni' => $obj->cod_muni,
                'iddpto' => $obj->iddpto,
            ));
        }
    }
}
