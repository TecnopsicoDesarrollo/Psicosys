<?php

namespace App\Http\Controllers;

use App\Models\SaludHissegu;
use Illuminate\Http\Request;

/**
 * Class SaludHisseguController
 * @package App\Http\Controllers
 */
class SaludHisseguController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saludHissegus = SaludHissegu::paginate();

        return view('salud-hissegu.index', compact('saludHissegus'))
            ->with('i', (request()->input('page', 1) - 1) * $saludHissegus->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saludHissegu = new SaludHissegu();
        return view('salud-hissegu.create', compact('saludHissegu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SaludHissegu::$rules);

        $saludHissegu = SaludHissegu::create($request->all());

        return redirect()->route('salud-hissegu.index')
            ->with('success', 'SaludHissegu created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saludHissegu = SaludHissegu::find($id);

        return view('salud-hissegu.show', compact('saludHissegu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saludHissegu = SaludHissegu::find($id);

        return view('salud-hissegu.edit', compact('saludHissegu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SaludHissegu $saludHissegu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaludHissegu $saludHissegu)
    {
        request()->validate(SaludHissegu::$rules);

        $saludHissegu->update($request->all());

        return redirect()->route('salud-hissegu.index')
            ->with('success', 'SaludHissegu updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saludHissegu = SaludHissegu::find($id)->delete();

        return redirect()->route('salud-hissegu.index')
            ->with('success', 'SaludHissegu deleted successfully');
    }
}
