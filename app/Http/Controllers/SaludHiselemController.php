<?php

namespace App\Http\Controllers;

use App\Models\SaludHiselem;
use Illuminate\Http\Request;

/**
 * Class SaludHiselemController
 * @package App\Http\Controllers
 */
class SaludHiselemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saludHiselems = SaludHiselem::paginate();

        return view('salud-hiselem.index', compact('saludHiselems'))
            ->with('i', (request()->input('page', 1) - 1) * $saludHiselems->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saludHiselem = new SaludHiselem();
        $tipoelem = config('globales.tipoelemento');
        $tipocampo = config('globales.tipocampo');
        $campoelem = config('globales.campoelem');
        $modo = true;

        return view('salud-hiselem.create', compact('saludHiselem','tipoelem','tipocampo','campoelem','modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SaludHiselem::$rules['create']);

        $saludHiselem = SaludHiselem::create($request->all());

        return redirect()->route('salud-hiselem.index')
            ->with('success', 'SaludHiselem created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saludHiselem = SaludHiselem::find($id);

        return view('salud-hiselem.show', compact('saludHiselem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saludHiselem = SaludHiselem::find($id);
        $tipoelem = config('globales.tipoelemento');
        $tipocampo = config('globales.tipocampo');
        $campoelem = config('globales.campoelem');
        $modo = false;

        return view('salud-hiselem.edit', compact('saludHiselem','tipoelem','tipocampo','campoelem','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SaludHiselem $saludHiselem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaludHiselem $saludHiselem)
    {
        request()->validate(SaludHiselem::$rules['edit']);

        $saludHiselem->update($request->all());

        return redirect()->route('salud-hiselem.index')
            ->with('success', 'SaludHiselem updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saludHiselem = SaludHiselem::find($id)->delete();

        return redirect()->route('salud-hiselem.index')
            ->with('success', 'SaludHiselem deleted successfully');
    }
}
