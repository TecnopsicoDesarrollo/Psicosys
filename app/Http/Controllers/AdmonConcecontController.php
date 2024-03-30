<?php

namespace App\Http\Controllers;

use App\Models\AdmonConcecont;
use Illuminate\Http\Request;

/**
 * Class AdmonConcecontController
 * @package App\Http\Controllers
 */
class AdmonConcecontController extends Controller
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
        $admonConceconts = AdmonConcecont::paginate();

        return view('admon-concecont.index', compact('admonConceconts'))
            ->with('i', (request()->input('page', 1) - 1) * $admonConceconts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admonConcecont = new AdmonConcecont();
        $modo = true;
        return view('admon-concecont.create', compact('admonConcecont','modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AdmonConcecont::$rules['create']);

        $admonConcecont = AdmonConcecont::create($request->all());

        return redirect()->route('admon-concecont.index')
            ->with('success', 'AdmonConcecont created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admonConcecont = AdmonConcecont::find($id);

        return view('admon-concecont.show', compact('admonConcecont'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admonConcecont = AdmonConcecont::find($id);
        $modo = false;
        return view('admon-concecont.edit', compact('admonConcecont','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AdmonConcecont $admonConcecont
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdmonConcecont $admonConcecont)
    {
        request()->validate(AdmonConcecont::$rules['edit']);

        $admonConcecont->update($request->all());

        return redirect()->route('admon-concecont.index')
            ->with('success', 'AdmonConcecont updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $admonConcecont = AdmonConcecont::find($id)->delete();

        return redirect()->route('admon-concecont.index')
            ->with('success', 'AdmonConcecont deleted successfully');
    }
}
