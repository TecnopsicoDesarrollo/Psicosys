<?php

namespace App\Http\Controllers;

use App\Models\AdmonCliente;
use App\Models\MaestraMunicipio;
use Illuminate\Http\Request;

/**
 * Class AdmonClienteController
 * @package App\Http\Controllers
 */
class AdmonClienteController extends Controller
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
        $admonClientes = AdmonCliente::paginate();

        return view('admon-cliente.index', compact('admonClientes'))
            ->with('i', (request()->input('page', 1) - 1) * $admonClientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admonCliente = new AdmonCliente();

        $municip = MaestraMunicipio::pluck('ciudad','id');
        $tipoiden = config('globales.tipoiden');
        $tipopersona = config('globales.tipopersona');
        $regimen = config('globales.regimen');
        $zona = config('globales.zona');
        $modo = true;

        return view('admon-cliente.create', compact('admonCliente','municip','tipoiden','tipopersona','regimen','zona','modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AdmonCliente::$rules['create']);
        // $admonCliente = AdmonCliente::create($request->all());

        $cliente = new AdmonCliente($request->all());
        $cliente->no_identi = $request->no_identi;
        $cliente->digiveri = $request->digiveri;
        $cliente->tipo_iden = $request->tipo_iden;
        $cliente->nomclien = $request->nomclien;
        $cliente->nombre1 = $request->nombre1;
        $cliente->nombre2 = $request->nombre2;
        $cliente->apelli1 = $request->apelli1;
        $cliente->apelli2 = $request->apelli2;
        $cliente->autoret = (!request()->has('autoret') == '1' ? '0' : '1');
        $cliente->reteiva = (!request()->has('reteiva') == '1' ? '0' : '1');
        $cliente->rtefte = (!request()->has('rtefte') == '1' ? '0' : '1');
        $cliente->tipoper = $request->tipoper;
        $cliente->regimen = $request->regimen;
        $cliente->idacteco = $request->idacteco;
        $cliente->porrte = $request->porrte;
        $cliente->idCiudad = $request->idCiudad;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->celular = $request->celular;
        $cliente->cliente = (!request()->has('cliente') == '1' ? '0' : '1');
        $cliente->provee = (!request()->has('provee') == '1' ? '0' : '1');
        $cliente->otro = (!request()->has('otro') == '1' ? '0' : '1');
        $cliente->eseps = $request->eseps;
        $cliente->escree = $request->escree;
        $cliente->zona = $request->zona;
        $cliente->e_mail = $request->e_mail;
        $cliente->save();
        // dd($cliente);

        return redirect()->route('admon-cliente.index')
            ->with('success', 'Cliente creado con Exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admonCliente = AdmonCliente::find($id);

        $municip = MaestraMunicipio::pluck('ciudad','id');
        $tipoiden = config('globales.tipoiden');
        $tipopersona = config('globales.tipopersona');
        $regimen = config('globales.regimen');
        $zona = config('globales.zona');

        return view('admon-cliente.show', compact('admonCliente','municip','tipoiden','tipopersona','regimen','zona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admonCliente = AdmonCliente::find($id);

        $municip = MaestraMunicipio::pluck('ciudad','id');
        $tipoiden = config('globales.tipoiden');
        $tipopersona = config('globales.tipopersona');
        $regimen = config('globales.regimen');
        $zona = config('globales.zona');
        $modo = false;

        return view('admon-cliente.edit', compact('admonCliente','municip','tipoiden','tipopersona','regimen','zona','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AdmonCliente $admonCliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdmonCliente $admonCliente)
    {
        request()->validate(AdmonCliente::$rules['edit']);
        // $admonCliente->update($request->all());
        $admonCliente->no_identi = $request->no_identi;
        $admonCliente->digiveri = $request->digiveri;
        $admonCliente->tipo_iden = $request->tipo_iden;
        $admonCliente->nomclien = $request->nomclien;
        $admonCliente->nombre1 = $request->nombre1;
        $admonCliente->nombre2 = $request->nombre2;
        $admonCliente->apelli1 = $request->apelli1;
        $admonCliente->apelli2 = $request->apelli2;
        $admonCliente->autoret = (!request()->has('autoret') == '1' ? '0' : '1');
        $admonCliente->reteiva = (!request()->has('reteiva') == '1' ? '0' : '1');
        $admonCliente->rtefte = (!request()->has('rtefte') == '1' ? '0' : '1');
        $admonCliente->tipoper = $request->tipoper;
        $admonCliente->regimen = $request->regimen;
        $admonCliente->idacteco = $request->idacteco;
        $admonCliente->porrte = $request->porrte;
        $admonCliente->idCiudad = $request->idCiudad;
        $admonCliente->direccion = $request->direccion;
        $admonCliente->telefono = $request->telefono;
        $admonCliente->celular = $request->celular;
        $admonCliente->cliente = (!request()->has('cliente') == '1' ? '0' : '1');
        $admonCliente->provee = (!request()->has('provee') == '1' ? '0' : '1');
        $admonCliente->otro = (!request()->has('otro') == '1' ? '0' : '1');
        $admonCliente->eseps = $request->eseps;
        $admonCliente->escree = $request->escree;
        $admonCliente->zona = $request->zona;
        $admonCliente->e_mail = $request->e_mail;
        $admonCliente->save();

        return redirect()->route('admon-cliente.index')
            ->with('success', 'AdmonCliente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $admonCliente = AdmonCliente::find($id)->delete();

        return redirect()->route('admon-cliente.index')
            ->with('success', 'AdmonCliente deleted successfully');
    }
}
