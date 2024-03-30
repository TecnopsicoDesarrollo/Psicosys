<?php

namespace App\Http\Controllers;

use App\Models\MaestraOcupac;
use Illuminate\Http\Request;

/**
 * Class MaestraOcupacController
 * @package App\Http\Controllers
 */
class MaestraOcupacController extends Controller
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
        $maestraOcupacs = MaestraOcupac::paginate();

        return view('maestra-ocupac.index', compact('maestraOcupacs'))
            ->with('i', (request()->input('page', 1) - 1) * $maestraOcupacs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maestraOcupac = new MaestraOcupac();
        $modo = true;
        return view('maestra-ocupac.create', compact('maestraOcupac','modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MaestraOcupac::$rules['create']);

        $maestraOcupac = MaestraOcupac::create($request->all());

        return redirect()->route('maestra-ocupac.index')
            ->with('success', 'MaestraOcupac created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maestraOcupac = MaestraOcupac::find($id);

        return view('maestra-ocupac.show', compact('maestraOcupac'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maestraOcupac = MaestraOcupac::find($id);
        $modo = false;
        return view('maestra-ocupac.edit', compact('maestraOcupac','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MaestraOcupac $maestraOcupac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaestraOcupac $maestraOcupac)
    {
        request()->validate(MaestraOcupac::$rules['edit']);

        $maestraOcupac->update($request->all());

        return redirect()->route('maestra-ocupac.index')
            ->with('success', 'MaestraOcupac updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $maestraOcupac = MaestraOcupac::find($id)->delete();

        return redirect()->route('maestra-ocupac.index')
            ->with('success', 'MaestraOcupac deleted successfully');
    }
}
