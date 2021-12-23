<?php

namespace App\Http\Controllers;

use App\Models\EstadoCivile;
use Illuminate\Http\Request;

/**
 * Class EstadoCivileController
 * @package App\Http\Controllers
 */
class EstadoCivileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadoCiviles = EstadoCivile::paginate();

        return view('estado-civile.index', compact('estadoCiviles'))
            ->with('i', (request()->input('page', 1) - 1) * $estadoCiviles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estadoCivile = new EstadoCivile();
        return view('estado-civile.create', compact('estadoCivile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EstadoCivile::$rules);

        $estadoCivile = EstadoCivile::create($request->all());

        return redirect()->route('estado-civiles.index')
            ->with('success', 'EstadoCivile created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estadoCivile = EstadoCivile::find($id);

        return view('estado-civile.show', compact('estadoCivile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estadoCivile = EstadoCivile::find($id);

        return view('estado-civile.edit', compact('estadoCivile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EstadoCivile $estadoCivile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstadoCivile $estadoCivile)
    {
        request()->validate(EstadoCivile::$rules);

        $estadoCivile->update($request->all());

        return redirect()->route('estado-civiles.index')
            ->with('success', 'EstadoCivile updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estadoCivile = EstadoCivile::find($id)->delete();

        return redirect()->route('estado-civiles.index')
            ->with('success', 'EstadoCivile deleted successfully');
    }
}
