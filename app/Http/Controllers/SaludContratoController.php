<?php

namespace App\Http\Controllers;

use App\Models\SaludContrato;
use App\Models\SaludManuale;
use App\Models\MaestraEps;
use Illuminate\Http\Request;

/**
 * Class SaludContratoController
 * @package App\Http\Controllers
 */
class SaludContratoController extends Controller
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
        $saludContratos = SaludContrato::paginate();

        return view('salud-contrato.index', compact('saludContratos'))
            ->with('i', (request()->input('page', 1) - 1) * $saludContratos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saludContrato = new SaludContrato();

        $manual = SaludManuale::pluck('nombre','id');
        $manual2 = SaludManuale::pluck('nombre','id');
        $eps = MaestraEps::pluck('entidad','id');
        $eps1 = MaestraEps::pluck('entidad','id');
        $tipocontra = config('globales.tipocontra');
        $tipotar = config('globales.tipotar');
        $modo = true;

        return view('salud-contrato.create', compact('saludContrato','manual','manual2','eps','eps1','tipocontra','tipotar','modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SaludContrato::$rules['create']);

        //$saludContrato = SaludContrato::create($request->all());
        $saludContrato = new SaludContrato($request->all());
        $saludContrato->firmado = (!request()->has('firmado') == '1' ? '0' : '1');
        $saludContrato->save();

        return redirect()->route('salud-contrato.index')
            ->with('success', 'SaludContrato created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saludContrato = SaludContrato::find($id);

        return view('salud-contrato.show', compact('saludContrato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saludContrato = SaludContrato::find($id);

        $manual = SaludManuale::pluck('nombre','id');
        $manual2 = SaludManuale::pluck('nombre','id');
        $eps = MaestraEps::pluck('entidad','id');
        $eps1 = MaestraEps::pluck('entidad','id');
        $tipocontra = config('globales.tipocontra');
        $tipotar = config('globales.tipotar');
        $modo = false;

        return view('salud-contrato.edit', compact('saludContrato','manual','manual2','eps','eps1','tipocontra','tipotar','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SaludContrato $saludContrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaludContrato $saludContrato)
    {
        request()->validate(SaludContrato::$rules['edit']);

        $saludContrato->update($request->all());

        return redirect()->route('salud-contrato.index')
            ->with('success', 'SaludContrato updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saludContrato = SaludContrato::find($id)->delete();

        return redirect()->route('salud-contrato.index')
            ->with('success', 'SaludContrato deleted successfully');
    }
}
