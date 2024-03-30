<?php

namespace App\Http\Controllers;

use App\Models\SaludTarifa;
use App\Models\SaludManuale;
use App\Models\SaludCups;
use App\Models\AdmonConcecont;
use Illuminate\Http\Request;

/**
 * Class SaludTarifaController
 * @package App\Http\Controllers
 */
class SaludTarifaController extends Controller
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
        $saludTarifas = SaludTarifa::paginate();

        return view('salud-tarifa.index', compact('saludTarifas'))
            ->with('i', (request()->input('page', 1) - 1) * $saludTarifas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saludTarifa = new SaludTarifa();

        $manual = SaludManuale::pluck('nombre','id');
        $tipotarifa = config('globales.tipotarifa');
        $tipocon = config('globales.tipocon');
        $sexo1 = config('globales.sexo1');
        $cups = SaludCups::pluck('nombre','id');
        $concecont = AdmonConcecont::pluck('concepto','id');
        $modo = true;

        return view('salud-tarifa.create', compact('saludTarifa','manual','tipotarifa','tipocon','sexo1','cups','concecont','modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SaludTarifa::$rules['create']);

        $saludTarifa = SaludTarifa::create($request->all());

        return redirect()->route('salud-tarifa.index')
            ->with('success', 'Tarifa Creada con Exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saludTarifa = SaludTarifa::find($id);

        return view('salud-tarifa.show', compact('saludTarifa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saludTarifa = SaludTarifa::find($id);

        $manual = SaludManuale::pluck('nombre','id');
        $tipotarifa = config('globales.tipotarifa');
        $tipocon = config('globales.tipocon');
        $sexo1 = config('globales.sexo1');
        $cups = SaludCups::pluck('nombre','id');
        $concecont = AdmonConcecont::pluck('concepto','id');
        $modo = false;

        return view('salud-tarifa.edit', compact('saludTarifa','manual','tipotarifa','tipocon','sexo1','cups','concecont','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SaludTarifa $saludTarifa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaludTarifa $saludTarifa)
    {
        request()->validate(SaludTarifa::$rules['edit']);

        $saludTarifa->update($request->all());

        return redirect()->route('salud-tarifa.index')
            ->with('success', 'SaludTarifa updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saludTarifa = SaludTarifa::find($id)->delete();

        return redirect()->route('salud-tarifa.index')
            ->with('success', 'SaludTarifa deleted successfully');
    }
}
