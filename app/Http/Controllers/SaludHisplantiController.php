<?php

namespace App\Http\Controllers;

use App\Models\SaludHisplanti;
use Illuminate\Http\Request;

/**
 * Class SaludHisplantiController
 * @package App\Http\Controllers
 */
class SaludHisplantiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saludHisplantis = SaludHisplanti::paginate();

        return view('salud-hisplanti.index', compact('saludHisplantis'))
            ->with('i', (request()->input('page', 1) - 1) * $saludHisplantis->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saludHisplanti = new SaludHisplanti();
        return view('salud-hisplanti.create', compact('saludHisplanti'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SaludHisplanti::$rules);

        $saludHisplanti = SaludHisplanti::create($request->all());

        return redirect()->route('salud-hisplanti.index')
            ->with('success', 'SaludHisplanti created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saludHisplanti = SaludHisplanti::find($id);

        return view('salud-hisplanti.show', compact('saludHisplanti'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saludHisplanti = SaludHisplanti::find($id);

        return view('salud-hisplanti.edit', compact('saludHisplanti'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SaludHisplanti $saludHisplanti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaludHisplanti $saludHisplanti)
    {
        request()->validate(SaludHisplanti::$rules);

        $saludHisplanti->update($request->all());

        return redirect()->route('salud-hisplanti.index')
            ->with('success', 'SaludHisplanti updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saludHisplanti = SaludHisplanti::find($id)->delete();

        return redirect()->route('salud-hisplanti.index')
            ->with('success', 'SaludHisplanti deleted successfully');
    }
}
