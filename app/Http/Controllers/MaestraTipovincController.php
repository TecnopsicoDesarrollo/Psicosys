<?php

namespace App\Http\Controllers;

use App\Models\MaestraTipovinc;
use Illuminate\Http\Request;

/**
 * Class MaestraTipovincController
 * @package App\Http\Controllers
 */
class MaestraTipovincController extends Controller
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
        $maestraTipovincs = MaestraTipovinc::paginate();

        return view('maestra-tipovinc.index', compact('maestraTipovincs'))
            ->with('i', (request()->input('page', 1) - 1) * $maestraTipovincs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maestraTipovinc = new MaestraTipovinc();
        $modo = true;
        return view('maestra-tipovinc.create', compact('maestraTipovinc','modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MaestraTipovinc::$rules['create']);

        $maestraTipovinc = MaestraTipovinc::create($request->all());

        return redirect()->route('maestra-tipovinc.index')
            ->with('success', 'MaestraTipovinc created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maestraTipovinc = MaestraTipovinc::find($id);

        return view('maestra-tipovinc.show', compact('maestraTipovinc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maestraTipovinc = MaestraTipovinc::find($id);
        $modo = false;
        return view('maestra-tipovinc.edit', compact('maestraTipovinc','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MaestraTipovinc $maestraTipovinc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaestraTipovinc $maestraTipovinc)
    {
        request()->validate(MaestraTipovinc::$rules['edit']);

        $maestraTipovinc->update($request->all());

        return redirect()->route('maestra-tipovinc.index')
            ->with('success', 'MaestraTipovinc updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $maestraTipovinc = MaestraTipovinc::find($id)->delete();

        return redirect()->route('maestra-tipovinc.index')
            ->with('success', 'MaestraTipovinc deleted successfully');
    }
}
