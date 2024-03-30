<?php

namespace App\Http\Controllers;

use App\Models\SaludDsmv;
use Illuminate\Http\Request;

/**
 * Class SaludDsmvController
 * @package App\Http\Controllers
 */
class SaludDsmvController extends Controller
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
        $saludDsmvs = SaludDsmv::paginate();

        //$saludDsmvs = SaludDsmv::find($id);
        $categories = SaludDsmv::where('padre_id', '=', '0')->get();
        $allCategories = SaludDsmv::pluck('nombre','id')->all();
        return view('salud-dsmv.index',compact('categories','allCategories','saludDsmvs'));

/*         return view('salud-dsmv.index', compact('saludDsmvs'))
            ->with('i', (request()->input('page', 1) - 1) * $saludDsmvs->perPage()); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saludDsmv = new SaludDsmv();
        $modo = true;
        return view('salud-dsmv.create', compact('saludDsmv','modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SaludDsmv::$rules['create']);

        $saludDsmv = SaludDsmv::create($request->all());

        return redirect()->route('salud-dsmv.index')
            ->with('success', 'SaludDsmv created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saludDsmv = SaludDsmv::find($id);

        return view('salud-dsmv.show', compact('saludDsmv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saludDsmv = SaludDsmv::find($id);
        $modo = false;
        return view('salud-dsmv.edit', compact('saludDsmv','modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SaludDsmv $saludDsmv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaludDsmv $saludDsmv)
    {
        request()->validate(SaludDsmv::$rules['edit']);

        $saludDsmv->update($request->all());

        return redirect()->route('salud-dsmv.index')
            ->with('success', 'SaludDsmv updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saludDsmv = SaludDsmv::find($id)->delete();

        return redirect()->route('salud-dsmv.index')
            ->with('success', 'SaludDsmv deleted successfully');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function manageDsmv()
    {
        $saludDsmvs = SaludDsmv::paginate();

        $categories = SaludDsmv::where('padre_id', '=', '0')->get();
        $allCategories = SaludDsmv::pluck('nombre','id')->all();
        return view('salud-dsmv.index',compact('categories','allCategories','saludDsmvs'));
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function addDsmv(Request $request)
    {
        $this->validate($request, [
        		'nombre' => 'required',
        	]);
        $input = $request->all();
        $input['padre_id'] = empty($input['padre_id']) ? 0 : $input['padre_id'];

        SaludDsmv::create($input);
        return back()->with('success', 'New Category added successfully.');
    }

}
