<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MaestraEspecial;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maestra_especial')->delete();
        $json = File::get('database/json/especialidad.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            MaestraEspecial::create(array(
                'codigo'=> $obj->codigo,
                'especiali'=> $obj->especiali,
            ));
        }
    }
}
