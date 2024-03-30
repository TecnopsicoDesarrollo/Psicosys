<?php

namespace App\Http\Controllers;

use App\Models\MaestraEstrato;
use Illuminate\Http\Request;

/**
 * Class MaestraEstratoController
 * @package App\Http\Controllers
 */
class MaestraEstratoController extends Controller
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
        $maestraEstratos = MaestraEstrato::paginate();

        return view('maestra-estrato.index', compact('maestraEstratos'))
            ->with('i', (request()->input('page', 1) - 1) * $maestraEstratos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maestraEstrato = new MaestraEstrato();
        $modo = true;
        return view('maestra-estrato.create', compact('maestraEstrato','modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (MaestraEstrato::where('codigo', '=', $request->codigo)->count() > 0) {
            return redirect()->back()->with('success', 'Estrato ya Existe en la tabla.')->withInput();
        }

        request()->validate(MaestraEstrato::$rules['create']);

        $maestraEstrato = MaestraEstrato::create($request->all());

        return redirect()->route('maestra-estrato.index')
            ->with('success', 'MaestraEstrato created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maestraEstrato = MaestraEstrato::find($id);

        return view('maestra-estrato.show', compact('maestraEstrato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maestraEstrato = MaestraEstrato::find($id);
        $modo = false;
        return view('maestra-estrato.edit', compact('maestraEstrato','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MaestraEstrato $maestraEstrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaestraEstrato $maestraEstrato)
    {
        request()->validate(MaestraEstrato::$rules['edit']);

        $maestraEstrato->update($request->all());

        return redirect()->route('maestra-estrato.index')
            ->with('success', 'MaestraEstrato updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $maestraEstrato = MaestraEstrato::find($id)->delete();

        return redirect()->route('maestra-estrato.index')
            ->with('success', 'MaestraEstrato deleted successfully');
    }
}
