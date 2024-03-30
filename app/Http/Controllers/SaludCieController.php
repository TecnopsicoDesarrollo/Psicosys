<?php

namespace App\Http\Controllers;

use App\Models\SaludCie;
use Illuminate\Http\Request;

/**
 * Class SaludCieController
 * @package App\Http\Controllers
 */
class SaludCieController extends Controller
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
        $saludCies = SaludCie::paginate();

        return view('salud-cie.index', compact('saludCies'))
            ->with('i', (request()->input('page', 1) - 1) * $saludCies->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saludCie = new SaludCie();
        $modo = true;
        return view('salud-cie.create', compact('saludCie','modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SaludCie::$rules['create']);

        $saludCie = SaludCie::create($request->all());

        return redirect()->route('salud-cie.index')
            ->with('success', 'SaludCie created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saludCie = SaludCie::find($id);

        return view('salud-cie.show', compact('saludCie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saludCie = SaludCie::find($id);
        $modo = false;
        return view('salud-cie.edit', compact('saludCie','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SaludCie $saludCie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaludCie $saludCie)
    {
        request()->validate(SaludCie::$rules['edit']);

        $saludCie->update($request->all());

        return redirect()->route('salud-cie.index')
            ->with('success', 'SaludCie updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saludCie = SaludCie::find($id)->delete();

        return redirect()->route('salud-cie.index')
            ->with('success', 'SaludCie deleted successfully');
    }
}
