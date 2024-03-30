<?php

namespace App\Http\Controllers;

use App\Models\SaludCupscapi;
use Illuminate\Http\Request;

/**
 * Class SaludCupscapiController
 * @package App\Http\Controllers
 */
class SaludCupscapiController extends Controller
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
        $saludCupscapis = SaludCupscapi::paginate();

        return view('salud-cupscapi.index', compact('saludCupscapis'))
            ->with('i', (request()->input('page', 1) - 1) * $saludCupscapis->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saludCupscapi = new SaludCupscapi();
        $modo = true;
        return view('salud-cupscapi.create', compact('saludCupscapi','modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SaludCupscapi::$rules['create']);

        $saludCupscapi = SaludCupscapi::create($request->all());

        return redirect()->route('salud-cupscapis.index')
            ->with('success', 'SaludCupscapi created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saludCupscapi = SaludCupscapi::find($id);

        return view('salud-cupscapi.show', compact('saludCupscapi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saludCupscapi = SaludCupscapi::find($id);
        $modo = false;
        return view('salud-cupscapi.edit', compact('saludCupscapi','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SaludCupscapi $saludCupscapi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaludCupscapi $saludCupscapi)
    {
        request()->validate(SaludCupscapi::$rules['edit']);

        $saludCupscapi->update($request->all());

        return redirect()->route('salud-cupscapis.index')
            ->with('success', 'SaludCupscapi updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saludCupscapi = SaludCupscapi::find($id)->delete();

        return redirect()->route('salud-cupscapis.index')
            ->with('success', 'SaludCupscapi deleted successfully');
    }
}
