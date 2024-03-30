<?php

namespace App\Http\Controllers;

use App\Models\SaludCups;
use App\Models\SaludCupscapi;
use Illuminate\Http\Request;

/**
 * Class SaludCupssController
 * @package App\Http\Controllers
 */
class SaludCupssController extends Controller
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
        $saludCupss = SaludCups::paginate();

        return view('salud-cupss.index', compact('saludCupss'))
            ->with('i', (request()->input('page', 1) - 1) * $saludCupss->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saludCupss = new SaludCups();

        $cupscapi = SaludCupscapi::pluck('nombre','id');
        $seccion = config('globales.seccion');
        $faseaten = config('globales.faseaten');
        $modo = true;

        return view('salud-cupss.create', compact('saludCupss','cupscapi','seccion','faseaten','modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SaludCups::$rules['create']);

        //$saludCupss = SaludCups::create($request->all());
        $cups = new SaludCups;
        $cups->seccio = $request->seccio;
        $cups->nombre = $request->nombre;
        $cups->codfase = $request->codfase;
        $cups->codcups = $request->codcups;
        $cups->incluye = $request->incluye;
        $cups->excluye = $request->excluye;
        $cups->simult = $request->simult;
        $cups->idCapitulo = $request->isCapitulo;
        $cups->grupo = substr($request->codcups, 0, 2);
        $cups->subgrupo = substr($request->codcups, 2, 1);
        $cups->categor = substr($request->codcups, 3, 1);
        $cups->subcate = substr($request->codcups, 4, 2);
        $cups->aplicado = $request->seccio == "00" ? ('INDIVIDUO'): ($request->seccio == "01" ? ('INDIVIDUO'):'COLECTIVO');

        $cups->save();

        return redirect()->route('salud-cupss.index')
            ->with('success', 'Codigo CUPS creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saludCupss = SaludCups::find($id);

        return view('salud-cupss.show', compact('saludCupss'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saludCupss = SaludCups::find($id);

        $cupscapi = SaludCupscapi::pluck('nombre','id');
        $seccion = config('globales.seccion');
        $faseaten = config('globales.faseaten');
        $modo = false;

        return view('salud-cupss.edit', compact('saludCupss','cupscapi','seccion','faseaten','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SaludCupss $saludCupss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaludCups $saludCupss)
    {
        request()->validate(SaludCups::$rules['edit']);

        //$saludCupss->update($request->all());
        $saludCupss->seccio = $request->seccio;
        $saludCupss->nombre = $request->nombre;
        $saludCupss->codfase = $request->codfase;
        $saludCupss->codcups = $request->codcups;
        $saludCupss->incluye = $request->incluye;
        $saludCupss->excluye = $request->excluye;
        $saludCupss->simult = $request->simult;
        $saludCupss->idCapitulo = $request->isCapitulo;
        $saludCupss->grupo = substr($request->codcups, 0, 2);
        $saludCupss->subgrupo = substr($request->codcups, 2, 1);
        $saludCupss->categor = substr($request->codcups, 3, 1);
        $saludCupss->subcate = substr($request->codcups, 4, 2);
        $saludCupss->aplicado = $request->seccio == "00" ? ('INDIVIDUO'): ($request->seccio == "01" ? ('INDIVIDUO'):'COLECTIVO');
        $saludCupss->save();

        return redirect()->route('salud-cupss.index')
            ->with('success', 'SaludCupss updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saludCupss = SaludCups::find($id)->delete();

        return redirect()->route('salud-cupss.index')
            ->with('success', 'SaludCupss deleted successfully');
    }
}
