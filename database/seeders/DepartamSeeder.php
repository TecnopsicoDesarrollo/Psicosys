<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MaestraDepartam;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class DepartamSeeder extends Seeder
{
    public function run()
    {
        DB::table('maestra_departams')->delete();
        $json = File::get('database/json/departam.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            MaestraDepartam::create(array(
                'codigo' => $obj->codigo,
                'dpto' => $obj->dpto,
            ));
        }
    }
}
