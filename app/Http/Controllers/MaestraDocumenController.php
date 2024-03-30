<?php

namespace App\Http\Controllers;

use App\Models\MaestraDocumen;
use Illuminate\Http\Request;

/**
 * Class MaestraDocumenController
 * @package App\Http\Controllers
 */
class MaestraDocumenController extends Controller
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
        $maestraDocumens = MaestraDocumen::paginate();

        return view('maestra-documen.index', compact('maestraDocumens'))
            ->with('i', (request()->input('page', 1) - 1) * $maestraDocumens->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maestraDocumen = new MaestraDocumen();
        $modo = true;
        return view('maestra-documen.create', compact('maestraDocumen','modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MaestraDocumen::$rules['create']);

        $maestraDocumen = MaestraDocumen::create($request->all());

        return redirect()->route('maestra-documen.index')
            ->with('success', 'MaestraDocumen created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maestraDocumen = MaestraDocumen::find($id);

        return view('maestra-documen.show', compact('maestraDocumen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maestraDocumen = MaestraDocumen::find($id);
        $modo = false;
        return view('maestra-documen.edit', compact('maestraDocumen','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MaestraDocumen $maestraDocumen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaestraDocumen $maestraDocumen)
    {
        request()->validate(MaestraDocumen::$rules['edit']);

        $maestraDocumen->update($request->all());

        return redirect()->route('maestra-documen.index')
            ->with('success', 'MaestraDocumen updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $maestraDocumen = MaestraDocumen::find($id)->delete();

        return redirect()->route('maestra-documen.index')
            ->with('success', 'MaestraDocumen deleted successfully');
    }
}
