<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\MaestraOcupac;

class OcupacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maestra_ocupacs')->delete();
        $json = File::get('database/json/ocupac.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            MaestraOcupac::create(array(
                'codigo' => $obj->codigo,
                'nombre' => $obj->nombre,
            ));
        }
    }
}
