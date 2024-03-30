<?php

namespace App\Http\Controllers;

use App\Models\SaludFinalidad;
use Illuminate\Http\Request;

/**
 * Class SaludFinalidadController
 * @package App\Http\Controllers
 */
class SaludFinalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saludFinalidads = SaludFinalidad::paginate();

        return view('salud-finalidad.index', compact('saludFinalidads'))
            ->with('i', (request()->input('page', 1) - 1) * $saludFinalidads->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saludFinalidad = new SaludFinalidad();
        return view('salud-finalidad.create', compact('saludFinalidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SaludFinalidad::$rules);

        $saludFinalidad = SaludFinalidad::create($request->all());

        return redirect()->route('salud-finalidads.index')
            ->with('success', 'SaludFinalidad created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saludFinalidad = SaludFinalidad::find($id);

        return view('salud-finalidad.show', compact('saludFinalidad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saludFinalidad = SaludFinalidad::find($id);

        return view('salud-finalidad.edit', compact('saludFinalidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SaludFinalidad $saludFinalidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaludFinalidad $saludFinalidad)
    {
        request()->validate(SaludFinalidad::$rules);

        $saludFinalidad->update($request->all());

        return redirect()->route('salud-finalidads.index')
            ->with('success', 'SaludFinalidad updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saludFinalidad = SaludFinalidad::find($id)->delete();

        return redirect()->route('salud-finalidads.index')
            ->with('success', 'SaludFinalidad deleted successfully');
    }
}
