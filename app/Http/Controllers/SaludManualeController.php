<?php

namespace App\Http\Controllers;

use App\Models\SaludManuale;
use Illuminate\Http\Request;

/**
 * Class SaludManualeController
 * @package App\Http\Controllers
 */
class SaludManualeController extends Controller
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
        $saludManuales = SaludManuale::paginate();

        return view('salud-manuale.index', compact('saludManuales'))
            ->with('i', (request()->input('page', 1) - 1) * $saludManuales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saludManuale = new SaludManuale();
        $modo = true;
        return view('salud-manuale.create', compact('saludManuale','modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SaludManuale::$rules['create']);

        $saludManuale = SaludManuale::create($request->all());

        return redirect()->route('salud-manuale.index')
            ->with('success', 'SaludManuale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saludManuale = SaludManuale::find($id);

        return view('salud-manuale.show', compact('saludManuale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saludManuale = SaludManuale::find($id);
        $modo = false;
        return view('salud-manuale.edit', compact('saludManuale','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SaludManuale $saludManuale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaludManuale $saludManuale)
    {
        request()->validate(SaludManuale::$rules['edit']);

        $saludManuale->update($request->all());

        return redirect()->route('salud-manuale.index')
            ->with('success', 'SaludManuale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saludManuale = SaludManuale::find($id)->delete();

        return redirect()->route('salud-manuale.index')
            ->with('success', 'SaludManuale deleted successfully');
    }
}
