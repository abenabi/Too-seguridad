<?php

namespace App\Http\Controllers;

use App\Models\DepartamentoEmpresa;
use App\Models\Empresa;
use Illuminate\Http\Request;

/**
 * Class DepartamentoEmpresaController
 * @package App\Http\Controllers
 */
class DepartamentoEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentoEmpresas = DepartamentoEmpresa::paginate();

        return view('departamento-empresa.index', compact('departamentoEmpresas'))
            ->with('i', (request()->input('page', 1) - 1) * $departamentoEmpresas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentoEmpresa = new DepartamentoEmpresa();
        $empresa = Empresa::pluck('nombre', 'id');
        return view('departamento-empresa.create', compact('departamentoEmpresa','empresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DepartamentoEmpresa::$rules);

        $departamentoEmpresa = DepartamentoEmpresa::create($request->all());

        return redirect()->route('departamento-empresas.index')
            ->with('success', 'DepartamentoEmpresa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departamentoEmpresa = DepartamentoEmpresa::find($id);

        return view('departamento-empresa.show', compact('departamentoEmpresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departamentoEmpresa = DepartamentoEmpresa::find($id);
        $empresa = Empresa::pluck('nombre', 'id');

        return view('departamento-empresa.edit', compact('departamentoEmpresa','empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DepartamentoEmpresa $departamentoEmpresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DepartamentoEmpresa $departamentoEmpresa)
    {
        request()->validate(DepartamentoEmpresa::$rules);

        $departamentoEmpresa->update($request->all());

        return redirect()->route('departamento-empresas.index')
            ->with('success', 'DepartamentoEmpresa updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $departamentoEmpresa = DepartamentoEmpresa::find($id)->delete();

        return redirect()->route('departamento-empresas.index')
            ->with('success', 'DepartamentoEmpresa deleted successfully');
    }
}
