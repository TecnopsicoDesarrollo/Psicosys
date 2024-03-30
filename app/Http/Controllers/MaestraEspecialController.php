<?php

namespace App\Http\Controllers;

use App\Models\MaestraEspecial;
use Illuminate\Http\Request;

/**
 * Class MaestraEspecialController
 * @package App\Http\Controllers
 */
class MaestraEspecialController extends Controller
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
        $maestraEspecials = MaestraEspecial::paginate();

        return view('maestra-especial.index', compact('maestraEspecials'))
            ->with('i', (request()->input('page', 1) - 1) * $maestraEspecials->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maestraEspecial = new MaestraEspecial();
        $modo = true;
        return view('maestra-especial.create', compact('maestraEspecial','modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MaestraEspecial::$rules['create']);

        $maestraEspecial = MaestraEspecial::create($request->all());

        return redirect()->route('maestra-especial.index')
            ->with('success', 'MaestraEspecial created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maestraEspecial = MaestraEspecial::find($id);

        return view('maestra-especial.show', compact('maestraEspecial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maestraEspecial = MaestraEspecial::find($id);
        $modo = false;
        return view('maestra-especial.edit', compact('maestraEspecial','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MaestraEspecial $maestraEspecial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaestraEspecial $maestraEspecial)
    {
        request()->validate(MaestraEspecial::$rules['edit']);

        $maestraEspecial->update($request->all());

        return redirect()->route('maestra-especial.index')
            ->with('success', 'MaestraEspecial updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $maestraEspecial = MaestraEspecial::find($id)->delete();

        return redirect()->route('maestra-especial.index')
            ->with('success', 'MaestraEspecial deleted successfully');
    }
}
