<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SaludFinalidad;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class FinalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salud_finalidad')->delete();
        $json = File::get('database/json/finalidad.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            SaludFinalidad::create(array(
                'codigo'=> $obj->codigo,
                'finalidad'=> $obj->finalidad,
            ));
        }
    }
}
