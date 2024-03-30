<?php

namespace App\Http\Controllers;

use App\Models\SaludHisgeneral;
use App\Models\SaludHistocab;
use App\Models\MaestraMunicipio;
use App\Models\MaestraOcupac;
use App\Models\MaestraEps;
use App\Models\MaestraMedico;
use App\Models\SaludCie;
use App\Models\SaludHisfami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

/**
 * Class SaludHisgeneralController
 * @package App\Http\Controllers
 */
class SaludHisgeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saludHisgenerals = SaludHisgeneral::paginate();

        return view('salud-hisgeneral.index', compact('saludHisgenerals'))
            ->with('i', (request()->input('page', 1) - 1) * $saludHisgenerals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saludHisgeneral = new SaludHisgeneral();
        $nohisto = SaludHistocab::pluck('nomhisto','id');
        $ciudom = MaestraMunicipio::pluck('ciudad','id');
        $ocupacion = MaestraOcupac::pluck('nombre','id');
        $eps = MaestraEps::pluck('entidad','id');
        $cie = SaludCie::pluck('nombre','id');
        $medico = MaestraMedico::pluck('nombre','id');
        $sexo = config('globales.sexo');
        $codedad = config('globales.codedad');
        $estadocivil = config('globales.estcivil');
        $escolar = config('globales.escolaridad');
        $parentesco = config('globales.parencom');
        $codedad = config('globales.codedad');
        $fechahoy = Carbon::now();
        $dataestru = DB::table('salud_hisestru')
                    ->join('salud_hiselem', 'salud_hisestru.idcodele', '=', 'salud_hiselem.id')
                    ->select('salud_hisestru.*', 'salud_hiselem.cm_nom', 'salud_hiselem.codele', 'salud_hiselem.elemento')
                    ->get();
        $saludHisfami = SaludHisfami::paginate();
        $saludHisfa = new SaludHisfami();
        $datohistoria = "";
        $relacion = config('globales.relacion');

        return view('salud-hisgeneral.create', compact('saludHisgeneral','nohisto','ciudom','ocupacion','eps','medico','sexo','codedad','estadocivil','escolar','cie','dataestru','fechahoy','saludHisfami','saludHisfa','parentesco','codedad','datohistoria','relacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SaludHisgeneral::$rules);

        $saludHisgeneral = SaludHisgeneral::create($request->all());

        return redirect()->route('salud-hisgeneral.index')
            ->with('success', 'Registro de Historia guardado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saludHisgeneral = SaludHisgeneral::find($id);

        return view('salud-hisgeneral.show', compact('saludHisgeneral'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saludHisgeneral = SaludHisgeneral::find($id);

        return view('salud-hisgeneral.edit', compact('saludHisgeneral'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SaludHisgeneral $saludHisgeneral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaludHisgeneral $saludHisgeneral)
    {
        request()->validate(SaludHisgeneral::$rules);

        $saludHisgeneral->update($request->all());

        return redirect()->route('salud-hisgeneral.index')
            ->with('success', 'SaludHisgeneral updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saludHisgeneral = SaludHisgeneral::find($id)->delete();
        $saludHisfa = SaludHisfami::find($id)->delete();


        return redirect()->route('salud-hisgeneral.index')
            ->with('success', 'SaludHisgeneral deleted successfully');
    }
}
