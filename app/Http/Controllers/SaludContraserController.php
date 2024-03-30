<?php

namespace App\Http\Controllers;

use App\Models\SaludContraser;
use Illuminate\Http\Request;

/**
 * Class SaludContraserController
 * @package App\Http\Controllers
 */
class SaludContraserController extends Controller
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
        $saludContrasers = SaludContraser::paginate();

        return view('salud-contraser.index', compact('saludContrasers'))
            ->with('i', (request()->input('page', 1) - 1) * $saludContrasers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saludContraser = new SaludContraser();
        $modo = true;
        return view('salud-contraser.create', compact('saludContraser','modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SaludContraser::$rules['create']);

        $saludContraser = SaludContraser::create($request->all());

        return redirect()->route('salud-contrasers.index')
            ->with('success', 'SaludContraser created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saludContraser = SaludContraser::find($id);

        return view('salud-contraser.show', compact('saludContraser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saludContraser = SaludContraser::find($id);
        $modo = false;
        return view('salud-contraser.edit', compact('saludContraser','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SaludContraser $saludContraser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaludContraser $saludContraser)
    {
        request()->validate(SaludContraser::$rules['edit']);

        $saludContraser->update($request->all());

        return redirect()->route('salud-contrasers.index')
            ->with('success', 'SaludContraser updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saludContraser = SaludContraser::find($id)->delete();

        return redirect()->route('salud-contrasers.index')
            ->with('success', 'SaludContraser deleted successfully');
    }
}
