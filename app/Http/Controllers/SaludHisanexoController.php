<?php

namespace App\Http\Controllers;

use App\Models\SaludHisanexo;
use Illuminate\Http\Request;

/**
 * Class SaludHisanexoController
 * @package App\Http\Controllers
 */
class SaludHisanexoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saludHisanexos = SaludHisanexo::paginate();

        return view('salud-hisanexo.index', compact('saludHisanexos'))
            ->with('i', (request()->input('page', 1) - 1) * $saludHisanexos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saludHisanexo = new SaludHisanexo();
        return view('salud-hisanexo.create', compact('saludHisanexo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SaludHisanexo::$rules);

        $saludHisanexo = SaludHisanexo::create($request->all());

        return redirect()->route('salud-hisanexo.index')
            ->with('success', 'SaludHisanexo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saludHisanexo = SaludHisanexo::find($id);

        return view('salud-hisanexo.show', compact('saludHisanexo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saludHisanexo = SaludHisanexo::find($id);

        return view('salud-hisanexo.edit', compact('saludHisanexo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SaludHisanexo $saludHisanexo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaludHisanexo $saludHisanexo)
    {
        request()->validate(SaludHisanexo::$rules);

        $saludHisanexo->update($request->all());

        return redirect()->route('salud-hisanexo.index')
            ->with('success', 'SaludHisanexo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saludHisanexo = SaludHisanexo::find($id)->delete();

        return redirect()->route('salud-hisanexo.index')
            ->with('success', 'SaludHisanexo deleted successfully');
    }
}
