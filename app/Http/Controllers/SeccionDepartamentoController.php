<?php

namespace App\Http\Controllers;

use App\Models\SeccionDepartamento;
use App\Models\DepartamentoEmpresa;
use Illuminate\Http\Request;

/**
 * Class SeccionDepartamentoController
 * @package App\Http\Controllers
 */
class SeccionDepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seccionDepartamentos = SeccionDepartamento::paginate();

        return view('seccion-departamento.index', compact('seccionDepartamentos'))
            ->with('i', (request()->input('page', 1) - 1) * $seccionDepartamentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seccionDepartamento = new SeccionDepartamento();
        $departamentoEmpresa = DepartamentoEmpresa::pluck('nombre','id');
        return view('seccion-departamento.create', compact('seccionDepartamento', 'departamentoEmpresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SeccionDepartamento::$rules);

        $seccionDepartamento = SeccionDepartamento::create($request->all());

        return redirect()->route('seccion-departamentos.index')
            ->with('success', 'SeccionDepartamento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seccionDepartamento = SeccionDepartamento::find($id);

        return view('seccion-departamento.show', compact('seccionDepartamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seccionDepartamento = SeccionDepartamento::find($id);
        $departamentoEmpresa = DepartamentoEmpresa::pluck('nombre', 'id');
        return view('seccion-departamento.edit', compact('seccionDepartamento', 'departamentoEmpresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SeccionDepartamento $seccionDepartamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SeccionDepartamento $seccionDepartamento)
    {
        request()->validate(SeccionDepartamento::$rules);

        $seccionDepartamento->update($request->all());

        return redirect()->route('seccion-departamentos.index')
            ->with('success', 'SeccionDepartamento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $seccionDepartamento = SeccionDepartamento::find($id)->delete();

        return redirect()->route('seccion-departamentos.index')
            ->with('success', 'SeccionDepartamento deleted successfully');
    }
}
