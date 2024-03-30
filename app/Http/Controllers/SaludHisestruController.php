<?php

namespace App\Http\Controllers;

use App\Models\SaludHisestru;
use App\Models\SaludHistipo;
use App\Models\SaludHiselem;
use Illuminate\Http\Request;

/**
 * Class SaludHisestruController
 * @package App\Http\Controllers
 */
class SaludHisestruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saludHisestrus = SaludHisestru::paginate();

        return view('salud-hisestru.index', compact('saludHisestrus'))
            ->with('i', (request()->input('page', 1) - 1) * $saludHisestrus->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saludHisestru = new SaludHisestru();
        $histipo = SaludHistipo::pluck('nombre','id');
        $elemento = SaludHiselem::pluck('elemento','id');
        $tipoelem = config('globales.tipoelemento');
        $areaapli = config('globales.areaapli');

        return view('salud-hisestru.create', compact('saludHisestru','histipo','elemento','tipoelem','areaapli'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SaludHisestru::$rules);

        //$saludHisestru = SaludHisestru::create($request->all());
        $saludHisestru = new SaludHisestru($request->all());
        $saludHisestru->siplanti = (!request()->has('siplanti') == '1' ? '0' : '1');
        $saludHisestru->formul = (!request()->has('formul') == '1' ? '0' : '1');
        $saludHisestru->save();

        return redirect()->route('salud-hisestru.index')
            ->with('success', 'SaludHisestru created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saludHisestru = SaludHisestru::find($id);

        return view('salud-hisestru.show', compact('saludHisestru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saludHisestru = SaludHisestru::find($id);
        $histipo = SaludHistipo::pluck('nombre','id');
        $elemento = SaludHiselem::pluck('elemento','id');
        $tipoelem = config('globales.tipoelemento');
        $areaapli = config('globales.areaapli');

        return view('salud-hisestru.edit', compact('saludHisestru','histipo','elemento','tipoelem','areaapli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SaludHisestru $saludHisestru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaludHisestru $saludHisestru)
    {
        request()->validate(SaludHisestru::$rules);

        //$saludHisestru->update($request->all());
        $saludHisestru->idcodele = $request->idcodele;
        $saludHisestru->idcodhis = $request->idcodhis;
        $saludHisestru->orden = $request->orden;
        $saludHisestru->siplanti = (!request()->has('siplanti') == '1' ? '0' : '1');
        $saludHisestru->planti = $request->planti;
        $saludHisestru->formul = (!request()->has('formul') == '1' ? '0' : '1');
        $saludHisestru->tipo = $request->tipo;
        $saludHisestru->comando = $request->comando;
        $saludHisestru->areaapli = $request->areaapli;
        //dd($saludHisestru);
        $saludHisestru->save();

        return redirect()->route('salud-hisestru.index')
            ->with('success', 'SaludHisestru updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saludHisestru = SaludHisestru::find($id)->delete();

        return redirect()->route('salud-hisestru.index')
            ->with('success', 'SaludHisestru deleted successfully');
    }
}
