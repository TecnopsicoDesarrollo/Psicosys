<?php

namespace App\Http\Controllers;

use App\Models\SaludAdmision;
use Illuminate\Http\Request;

/**
 * Class SaludAdmisionController
 * @package App\Http\Controllers
 */
class SaludAdmisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saludAdmisions = SaludAdmision::paginate();

        return view('salud-admision.index', compact('saludAdmisions'))
            ->with('i', (request()->input('page', 1) - 1) * $saludAdmisions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saludAdmision = new SaludAdmision();
        return view('salud-admision.create', compact('saludAdmision'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SaludAdmision::$rules);

        $saludAdmision = SaludAdmision::create($request->all());

        return redirect()->route('salud-admisions.index')
            ->with('success', 'SaludAdmision created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saludAdmision = SaludAdmision::find($id);

        return view('salud-admision.show', compact('saludAdmision'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saludAdmision = SaludAdmision::find($id);

        return view('salud-admision.edit', compact('saludAdmision'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SaludAdmision $saludAdmision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaludAdmision $saludAdmision)
    {
        request()->validate(SaludAdmision::$rules);

        $saludAdmision->update($request->all());

        return redirect()->route('salud-admisions.index')
            ->with('success', 'SaludAdmision updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saludAdmision = SaludAdmision::find($id)->delete();

        return redirect()->route('salud-admisions.index')
            ->with('success', 'SaludAdmision deleted successfully');
    }
}
