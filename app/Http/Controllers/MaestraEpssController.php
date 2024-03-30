<?php

namespace App\Http\Controllers;

use App\Models\MaestraEps;
use Illuminate\Http\Request;

/**
 * Class MaestraEpssController
 * @package App\Http\Controllers
 */
class MaestraEpssController extends Controller
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
        $maestraEpss = MaestraEps::paginate();

        return view('maestra-epss.index', compact('maestraEpss'))
            ->with('i', (request()->input('page', 1) - 1) * $maestraEpss->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maestraEpss = new MaestraEps();
        $modo = true;
        return view('maestra-epss.create', compact('maestraEpss','modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MaestraEps::$rules['create']);

        $maestraEpss = MaestraEps::create($request->all());

        return redirect()->route('maestra-epss.index')
            ->with('success', 'MaestraEpss created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maestraEpss = MaestraEps::find($id);

        return view('maestra-epss.show', compact('maestraEpss'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maestraEpss = MaestraEps::find($id);
        $modo = false;
        return view('maestra-epss.edit', compact('maestraEpss','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MaestraEpss $maestraEpss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaestraEps $maestraEpss)
    {
        request()->validate(MaestraEps::$rules['edit']);

        $maestraEpss->update($request->all());

        return redirect()->route('maestra-epss.index')
            ->with('success', 'MaestraEpss updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $maestraEpss = MaestraEps::find($id)->delete();

        return redirect()->route('maestra-epss.index')
            ->with('success', 'MaestraEpss deleted successfully');
    }
}
