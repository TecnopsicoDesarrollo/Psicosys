<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SaludCupscapi;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class CupscapiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salud_cupscapis')->delete();
        $json = File::get('database/json/cupscapi.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            SaludCupscapi::create(array(
                'codigo' => $obj->codigo,
                'nombre' => $obj->nombre,
            ));
        }
    }
}
