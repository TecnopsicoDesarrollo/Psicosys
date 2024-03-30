<?php

namespace App\Http\Controllers;

use App\Models\SaludHistocab;
use App\Models\MaestraMunicipio;
use App\Models\MaestraOcupac;
use App\Models\MaestraEps;
use App\Models\MaestraEstrato;
use App\Models\MaestraTipovinc;
use App\Models\SaludContrato;
use Illuminate\Http\Request;

/**
 * Class SaludHistocabController
 * @package App\Http\Controllers
 */
class SaludHistocabController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saludHistocabs = SaludHistocab::paginate();

        return view('salud-histocab.index', compact('saludHistocabs'))
            ->with('i', (request()->input('page', 1) - 1) * $saludHistocabs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saludHistocab = new SaludHistocab();
        $ciunac = MaestraMunicipio::pluck('ciudad','id');
        $ciudom = MaestraMunicipio::pluck('ciudad','id');
        $ocupacion = MaestraOcupac::pluck('nombre','id');
        $eps = MaestraEps::pluck('entidad','id');
        $estrato = MaestraEstrato::pluck('estrato','id');
        $tipovinc = MaestraTipovinc::pluck('tipovinc','id');
        $sexo = config('globales.sexo');
        $codedad = config('globales.codedad');
        $estadocivil = config('globales.estcivil');
        $tipoiden = config('globales.tipoiden');
        $escolar = config('globales.escolaridad');
        $sangre = config('globales.tiposangre');
        $zona = config('globales.zona');
        $tipoafil = config('globales.tipoafil');
        $parenresp = config('globales.parentesco');
        $modo = true;
        return view('salud-histocab.create', compact('saludHistocab','modo','ciunac','ciudom','ocupacion','sexo','codedad','estadocivil','tipoiden','eps','escolar','sangre','zona','estrato','tipovinc','tipoafil','parenresp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SaludHistocab::$rules['create']);

        $saludHistocab = SaludHistocab::create($request->all());

        return redirect()->route('salud-histocab.index')
            ->with('success', 'SaludHistocab created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saludHistocab = SaludHistocab::find($id);

        return view('salud-histocab.show', compact('saludHistocab'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saludHistocab = SaludHistocab::find($id);
        $ciunac = MaestraMunicipio::pluck('ciudad','id');
        $ciudom = MaestraMunicipio::pluck('ciudad','id');
        $ocupacion = MaestraOcupac::pluck('nombre','id');
        $eps = MaestraEps::pluck('entidad','id');
        $estrato = MaestraEstrato::pluck('estrato','id');
        $tipovinc = MaestraTipovinc::pluck('tipovinc','id');
        $sexo = config('globales.sexo');
        $codedad = config('globales.codedad');
        $estadocivil = config('globales.estcivil');
        $tipoiden = config('globales.tipoiden');
        $escolar = config('globales.escolaridad');
        $sangre = config('globales.tiposangre');
        $zona = config('globales.zona');
        $tipoafil = config('globales.tipoafil');
        $parenresp = config('globales.parentesco');
        $modo = false;
        return view('salud-histocab.edit', compact('saludHistocab','modo','ciunac','ciudom','ocupacion','sexo','codedad','estadocivil','tipoiden','eps','escolar','sangre','zona','estrato','tipovinc','tipoafil','parenresp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SaludHistocab $saludHistocab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaludHistocab $saludHistocab)
    {
        request()->validate(SaludHistocab::$rules['edit']);

        $saludHistocab->update($request->all());

        return redirect()->route('salud-histocab.index')
            ->with('success', 'SaludHistocab updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saludHistocab = SaludHistocab::find($id)->delete();

        return redirect()->route('salud-histocabs.index')
            ->with('success', 'SaludHistocab deleted successfully');
    }
}
