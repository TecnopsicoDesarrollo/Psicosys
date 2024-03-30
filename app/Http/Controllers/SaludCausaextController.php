<?php

namespace App\Http\Controllers;

use App\Models\SaludCausaext;
use Illuminate\Http\Request;

/**
 * Class SaludCausaextController
 * @package App\Http\Controllers
 */
class SaludCausaextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saludCausaexts = SaludCausaext::paginate();

        return view('salud-causaext.index', compact('saludCausaexts'))
            ->with('i', (request()->input('page', 1) - 1) * $saludCausaexts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saludCausaext = new SaludCausaext();
        return view('salud-causaext.create', compact('saludCausaext'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SaludCausaext::$rules);

        $saludCausaext = SaludCausaext::create($request->all());

        return redirect()->route('salud-causaexts.index')
            ->with('success', 'SaludCausaext created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saludCausaext = SaludCausaext::find($id);

        return view('salud-causaext.show', compact('saludCausaext'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saludCausaext = SaludCausaext::find($id);

        return view('salud-causaext.edit', compact('saludCausaext'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SaludCausaext $saludCausaext
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaludCausaext $saludCausaext)
    {
        request()->validate(SaludCausaext::$rules);

        $saludCausaext->update($request->all());

        return redirect()->route('salud-causaexts.index')
            ->with('success', 'SaludCausaext updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saludCausaext = SaludCausaext::find($id)->delete();

        return redirect()->route('salud-causaexts.index')
            ->with('success', 'SaludCausaext deleted successfully');
    }
}
