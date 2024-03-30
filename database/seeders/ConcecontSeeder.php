<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdmonConcecont;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class ConcecontSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admon_conceconts')->delete();
        $json = File::get('database/json/conceptos.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            AdmonConcecont::create(array(
                'codigo'=> $obj->codigo,
                'concepto'=> $obj->concepto,
                'cta_debe' => $obj->cta_debe,
                'cta_haber' => $obj->cta_haber,
                'cta_iva' => $obj->cta_iva,
                'cta_riva' => $obj->cta_riva,
                'cta_dscto' => $obj->cta_dscto,
                'cta_inven' => $obj->cta_inven,
                'tipo_mov' => $obj->tipo_mov,
                'cta_costo' => $obj->cta_costo,
                'proyec' => $obj->proyec,
                'cta_almac' => $obj->cta_almac,
                'ivalmac' => $obj->ivalmac,
            ));
        }
    }
}
