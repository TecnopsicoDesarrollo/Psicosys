<?php

namespace App\Http\Controllers;

use App\Models\SaludHisfami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Http\Requests\Request;
use Carbon\Carbon;

/**
 * Class SaludHisfamiController
 * @package App\Http\Controllers
 */
class SaludHisfamiController extends Controller
{
    /**
     * Display a listing of the resource.
     * salud-hisgeneral.create
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saludHisfamis = SaludHisfami::paginate();

        return view('salud-hisfami.index', compact('saludHisfamis'))
            ->with('i', (request()->input('page', 1) - 1) * $saludHisfamis->perPage());
    }

    /**
     * Carga todos los miembros del grupo familiar del paciente.
     * salud-hisgeneral.cargamiembro
     * Request $request
     */
    public function cargamiembro(Request $request)
    {
        if($request->ajax()){
            //$numhisto = (isset($_POST['id'])) ? $_POST['id'] : '';
            $numhisto = $request->id;
            $cabecera = DB::table('salud_histocabs')->where('no_identi',$numhisto)->get();

            $idhisto = $cabecera[0]->id;
            $datahis = DB::table('salud_hisfami')->where('idhisto',$idhisto)->get();

            echo json_encode($datahis);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saludHisfami = new SaludHisfami();
        return view('salud-hisfami.create', compact('saludHisfami'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SaludHisfami::$rules);

        $fecha = Carbon::now();
        $saludHisfami = new SaludHisfami($request->all());
        $saludHisfami->vivo = (!request()->has('vivo') == '1' ? '0' : '1');
        $saludHisfami->habita = (!request()->has('habita') == '1' ? '0' : '1');
        $saludHisfami->fecha = $fecha;
        $saludHisfami->save();

        $saludHisfami = SaludHisfami::paginate();
        /* return json_encode(array(
            "statusCode"=>200
        )); */
        return json_encode($saludHisfami);
        //return redirect()->route('salud-hisfami.index')
            //->with('success', 'SaludHisfami created successfully.');
    }

    /**
     * Carga un solo miembro del grupo familiar del paciente. (mismo EDIT)
     * salud-hisgeneral.cargafamiliar
     * Request $request
     */
    public function cargafamiliar(Request $request)
    {
        if($request->ajax()){
            //$numhisto = (isset($_POST['id'])) ? $_POST['id'] : '';
            $idhisto = $request->id;
            $datahis = DB::table('salud_hisfami')->where('id',$idhisto)->get();

            echo json_encode($datahis);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saludHisfami = SaludHisfami::find($id);
        return view('salud-hisfami.show', compact('saludHisfami'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saludHisfami = SaludHisfami::find($id);
        return view('salud-hisfami.edit', compact('saludHisfami'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @param  SaludHisfami $saludHisfami
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if($request->ajax()){
            //$numhisto = (isset($_POST['id'])) ? $_POST['id'] : '';
            $idhisto = $request->id;

            $saludHisfami = SaludHisfami::find($idhisto);
            $saludHisfami->vivo = (!request()->has('vivo') == '1' ? '0' : '1');
            $saludHisfami->habita = (!request()->has('habita') == '1' ? '0' : '1');
            $saludHisfami->save();
            //$saludHisfami->update($request->all());

            $saludHisfami = SaludHisfami::paginate();

            return json_encode($saludHisfami);
        }

        //request()->validate(SaludHisfami::$rules);

        //return redirect()->route('salud-hisfami.index')
        //    ->with('success', 'SaludHisfami updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saludHisfami = SaludHisfami::find($id)->delete();

        return redirect()->route('salud-hisfami.index')
            ->with('success', 'SaludHisfami deleted successfully');
    }
}
