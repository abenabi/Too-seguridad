<?php

namespace App\Http\Controllers;

use App\Models\PuestoTrabajo;
use App\Models\SeccionDepartamento;
use Illuminate\Http\Request;

/**
 * Class PuestoTrabajoController
 * @package App\Http\Controllers
 */
class PuestoTrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puestoTrabajos = PuestoTrabajo::paginate();

        return view('puesto-trabajo.index', compact('puestoTrabajos'))
            ->with('i', (request()->input('page', 1) - 1) * $puestoTrabajos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $puestoTrabajo = new PuestoTrabajo();
        $seccion = SeccionDepartamento::pluck('descripcion','id');
        return view('puesto-trabajo.create', compact('puestoTrabajo','seccion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PuestoTrabajo::$rules);

        $puestoTrabajo = PuestoTrabajo::create($request->all());

        return redirect()->route('puesto-trabajos.index')
            ->with('success', 'PuestoTrabajo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $puestoTrabajo = PuestoTrabajo::find($id);

        return view('puesto-trabajo.show', compact('puestoTrabajo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $puestoTrabajo = PuestoTrabajo::find($id);
        $seccion = SeccionDepartamento::pluck('descripcion', 'id');

        return view('puesto-trabajo.edit', compact('puestoTrabajo','seccion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PuestoTrabajo $puestoTrabajo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PuestoTrabajo $puestoTrabajo)
    {
        request()->validate(PuestoTrabajo::$rules);

        $puestoTrabajo->update($request->all());

        return redirect()->route('puesto-trabajos.index')
            ->with('success', 'PuestoTrabajo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $puestoTrabajo = PuestoTrabajo::find($id)->delete();

        return redirect()->route('puesto-trabajo.index')
            ->with('success', 'PuestoTrabajo deleted successfully');
    }
}
