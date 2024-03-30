<?php

namespace App\Http\Controllers;

use App\Models\MaestraMunicipio;
use App\Models\MaestraDepartam;
use Illuminate\Http\Request;

/**
 * Class MaestraMunicipioController
 * @package App\Http\Controllers
 */
class MaestraMunicipioController extends Controller
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
        $maestraMunicipios = MaestraMunicipio::paginate();

        return view('maestra-municipio.index', compact('maestraMunicipios'))
            ->with('i', (request()->input('page', 1) - 1) * $maestraMunicipios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maestraMunicipio = new MaestraMunicipio();
        $depart = MaestraDepartam::pluck('dpto','id');
        $modo = true;
        return view('maestra-municipio.create', compact('maestraMunicipio','depart','modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MaestraMunicipio::$rules['create']);

        $maestraMunicipio = MaestraMunicipio::create($request->all());

        //se modifica codigo por implementacion de ajax en codigo del create
/*         $mpio = new MaestraMunicipio;
        $mpio->iddpto = $request->iddpto;
        $mpio->cod_muni = $request->cod_muni;
        $mpio->ciudad = $request->ciudad;

        $mmpio = $mpio->iddpto;
        $mdepar = MaestraDepartam::select('maestra_departams.codigo')->where('id',$mmpio)->get();
        $mpio->dpto = $mdepar[0]->codigo;
        $mpio->codigo = $mdepar[0]->codigo.$mpio->cod_muni;

        if (MaestraMunicipio::where('codigo', '=', $mpio->codigo)->count() > 0) {
            return redirect()->back()->with('success', 'Municipio ya Existe en la tabla.')->withInput();
            //El mensaje no aparece cuando el municipio ya existe;
        }

        $mpio->save(); */

        return redirect()->route('maestra-municipio.index')
            ->with('success', 'Municipio creado con Exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maestraMunicipio = MaestraMunicipio::find($id);

        return view('maestra-municipio.show', compact('maestraMunicipio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maestraMunicipio = MaestraMunicipio::find($id);
        $depart = MaestraDepartam::pluck('dpto','id');
        $modo = false;
        return view('maestra-municipio.edit', compact('maestraMunicipio','depart','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MaestraMunicipio $maestraMunicipio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaestraMunicipio $maestraMunicipio)
    {
        request()->validate(MaestraMunicipio::$rules['edit']);

        $maestraMunicipio->update($request->all());

/*         $maestraMunicipio->iddpto = $request->iddpto;
        $maestraMunicipio->cod_muni = $request->cod_muni;
        $maestraMunicipio->ciudad = $request->ciudad;

        $mmpio = $maestraMunicipio->iddpto;
        $mdepar = MaestraDepartam::select('maestra_departams.codigo')->where('id',$mmpio)->get();
        $maestraMunicipio->dpto = $mdepar[0]->codigo;
        $maestraMunicipio->codigo = $mdepar[0]->codigo.$maestraMunicipio->cod_muni;

        if (MaestraMunicipio::where('codigo', '=', $maestraMunicipio->codigo)->count() > 0) {
            return redirect()->back()->with('success', 'Municipio ya Existe en la tabla.')->withInput();
            //El mensaje no aparece cuando el municipio ya existe;
        }
        $maestraMunicipio->save(); */

        return redirect()->route('maestra-municipio.index')
            ->with('success', 'Municipio Modificado con Exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $maestraMunicipio = MaestraMunicipio::find($id)->delete();

        return redirect()->route('maestra-municipio.index')
            ->with('success', 'MaestraMunicipio deleted successfully');
    }
}
