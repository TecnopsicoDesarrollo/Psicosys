<?php

namespace App\Http\Controllers;

use App\Models\Sieparam;
use Illuminate\Http\Request;

/**
 * Class SieparamController
 * @package App\Http\Controllers
 */
class SieparamController extends Controller
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
        $sieparams = Sieparam::paginate();

        return view('sieparam.index', compact('sieparams'))
            ->with('i', (request()->input('page', 1) - 1) * $sieparams->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sieparam = new Sieparam();
        $modo = true;
        return view('sieparam.create', compact('sieparam','modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Sieparam::$rules['create']);

        $sieparam = Sieparam::create($request->all());

        return redirect()->route('sieparam.index')
            ->with('success', 'Sieparam created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sieparam = Sieparam::find($id);

        return view('sieparam.show', compact('sieparam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sieparam = Sieparam::find($id);
        $modo = false;
        return view('sieparam.edit', compact('sieparam','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sieparam $sieparam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sieparam $sieparam)
    {
        request()->validate(Sieparam::$rules['edit']);

        $sieparam->update($request->all());

        return redirect()->route('sieparam.index')
            ->with('success', 'Sieparam updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sieparam = Sieparam::find($id)->delete();

        return redirect()->route('sieparam.index')
            ->with('success', 'Sieparam deleted successfully');
    }
}
