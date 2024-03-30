<?php

namespace App\Http\Controllers;

use App\Models\MaestraDepartam;
use Illuminate\Http\Request;

/**
 * Class MaestraDepartamController
 * @package App\Http\Controllers
 */
class MaestraDepartamController extends Controller
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
        $maestraDepartams = MaestraDepartam::paginate();

        return view('maestra-departam.index', compact('maestraDepartams'))
            ->with('i', (request()->input('page', 1) - 1) * $maestraDepartams->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maestraDepartam = new MaestraDepartam();
        $modo = true;
        return view('maestra-departam.create', compact('maestraDepartam','modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MaestraDepartam::$rules['create']);

        $maestraDepartam = MaestraDepartam::create($request->all());

        return redirect()->route('maestra-departam.index')
            ->with('success', 'MaestraDepartam created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maestraDepartam = MaestraDepartam::find($id);

        return view('maestra-departam.show', compact('maestraDepartam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maestraDepartam = MaestraDepartam::find($id);
        $modo = false;
        return view('maestra-departam.edit', compact('maestraDepartam','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MaestraDepartam $maestraDepartam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaestraDepartam $maestraDepartam)
    {
        request()->validate(MaestraDepartam::$rules['edit']);

        $maestraDepartam->update($request->all());

        return redirect()->route('maestra-departam.index')
            ->with('success', 'MaestraDepartam updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $maestraDepartam = MaestraDepartam::find($id)->delete();

        return redirect()->route('maestra-departam.index')
            ->with('success', 'MaestraDepartam deleted successfully');
    }
}
