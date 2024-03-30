<?php

namespace App\Http\Controllers;

use App\Models\MaestraMedico;
use App\Models\MaestraMunicipio;
use App\Models\MaestraDepartam;
use App\Models\MaestraEspecial;
use App\Models\AdmonCliente;
use Illuminate\Http\Request;

/**
 * Class MaestraMedicoController
 * @package App\Http\Controllers
 */
class MaestraMedicoController extends Controller
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
        $maestraMedicos = MaestraMedico::paginate();

        return view('maestra-medico.index', compact('maestraMedicos'))
            ->with('i', (request()->input('page', 1) - 1) * $maestraMedicos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maestraMedico = new MaestraMedico();
        $deparnac = MaestraDepartam::pluck('dpto','id');
        $depardom = MaestraDepartam::pluck('dpto','id');
        $ciunac = MaestraMunicipio::pluck('ciudad','id');
        $ciudom = MaestraMunicipio::pluck('ciudad','id');
        $especial = MaestraEspecial::pluck('especiali','id');
        $salud = AdmonCliente::pluck('nomclien','id');
        $pension = AdmonCliente::pluck('nomclien','id');
        $sexo = config('globales.sexo');
        $codedad = config('globales.codedad');
        $area = config('globales.area');
        $tipoiden = config('globales.tipoiden');
        $modo = true;
        return view('maestra-medico.create', compact('maestraMedico','modo','sexo','codedad','area','deparnac','depardom','ciunac','ciudom','especial','salud','pension','tipoiden'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MaestraMedico::$rules['create']);

        //$maestraMedico = MaestraMedico::create($request->all());
        $medico = new MaestraMedico($request->all());
        $medico->activo = (!request()->has('activo') == '1' ? '0' : '1');
       
        $medico->save();

        return redirect()->route('maestra-medico.index')
            ->with('success', 'Profesional de salud Mental creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maestraMedico = MaestraMedico::find($id);

        return view('maestra-medico.show', compact('maestraMedico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maestraMedico = MaestraMedico::find($id);
        $modo = false;
        return view('maestra-medico.edit', compact('maestraMedico','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MaestraMedico $maestraMedico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaestraMedico $maestraMedico)
    {
        request()->validate(MaestraMedico::$rules['edit']);

        $maestraMedico->update($request->all());

        return redirect()->route('maestra-medico.index')
            ->with('success', 'MaestraMedico updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $maestraMedico = MaestraMedico::find($id)->delete();

        return redirect()->route('maestra-medico.index')
            ->with('success', 'MaestraMedico deleted successfully');
    }
}
