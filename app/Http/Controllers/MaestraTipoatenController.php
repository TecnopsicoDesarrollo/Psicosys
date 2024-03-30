<?php

namespace App\Http\Controllers;

use App\Models\MaestraTipoaten;
use Illuminate\Http\Request;

/**
 * Class MaestraTipoatenController
 * @package App\Http\Controllers
 */
class MaestraTipoatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maestraTipoatens = MaestraTipoaten::paginate();

        return view('maestra-tipoaten.index', compact('maestraTipoatens'))
            ->with('i', (request()->input('page', 1) - 1) * $maestraTipoatens->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maestraTipoaten = new MaestraTipoaten();
        return view('maestra-tipoaten.create', compact('maestraTipoaten'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MaestraTipoaten::$rules);

        $maestraTipoaten = MaestraTipoaten::create($request->all());

        return redirect()->route('maestra-tipoatens.index')
            ->with('success', 'MaestraTipoaten created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maestraTipoaten = MaestraTipoaten::find($id);

        return view('maestra-tipoaten.show', compact('maestraTipoaten'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maestraTipoaten = MaestraTipoaten::find($id);

        return view('maestra-tipoaten.edit', compact('maestraTipoaten'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MaestraTipoaten $maestraTipoaten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaestraTipoaten $maestraTipoaten)
    {
        request()->validate(MaestraTipoaten::$rules);

        $maestraTipoaten->update($request->all());

        return redirect()->route('maestra-tipoatens.index')
            ->with('success', 'MaestraTipoaten updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $maestraTipoaten = MaestraTipoaten::find($id)->delete();

        return redirect()->route('maestra-tipoatens.index')
            ->with('success', 'MaestraTipoaten deleted successfully');
    }
}
