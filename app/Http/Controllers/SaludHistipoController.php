<?php

namespace App\Http\Controllers;

use App\Models\SaludHistipo;
use App\Models\MaestraEspecial;
use Illuminate\Http\Request;

/**
 * Class SaludHistipoController
 * @package App\Http\Controllers
 */
class SaludHistipoController extends Controller
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
        $saludHistipos = SaludHistipo::paginate();

        return view('salud-histipo.index', compact('saludHistipos'))
            ->with('i', (request()->input('page', 1) - 1) * $saludHistipos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saludHistipo = new SaludHistipo();
        $especial = MaestraEspecial::pluck('especiali','id');
        $modo = true;
        return view('salud-histipo.create', compact('saludHistipo','modo','especial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SaludHistipo::$rules['create']);

        $saludHistipo = SaludHistipo::create($request->all());

        return redirect()->route('salud-histipo.index')
            ->with('success', 'SaludHistipo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saludHistipo = SaludHistipo::find($id);

        return view('salud-histipo.show', compact('saludHistipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saludHistipo = SaludHistipo::find($id);
        $especial = MaestraEspecial::pluck('especiali','id');
        $modo = false;
        return view('salud-histipo.edit', compact('saludHistipo','modo','especial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SaludHistipo $saludHistipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaludHistipo $saludHistipo)
    {
        request()->validate(SaludHistipo::$rules['edit']);

        $saludHistipo->update($request->all());

        return redirect()->route('salud-histipo.index')
            ->with('success', 'SaludHistipo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saludHistipo = SaludHistipo::find($id)->delete();

        return redirect()->route('salud-histipo.index')
            ->with('success', 'SaludHistipo deleted successfully');
    }
}
