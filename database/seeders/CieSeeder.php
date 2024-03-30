<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SaludCie;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class CieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salud_cies')->delete();
        $json = File::get('database/json/cie.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            SaludCie::create(array(
                'codigo'=> $obj->codigo,
                'nombre'=> $obj->nombre,
                'sexo'=> $obj->sexo,
                'edadmin'=> $obj->edadmin,
                'edadmax'=> $obj->edadmax,
            ));
        }
    }
}
