@extends('layouts.app')

@section('template_title')
    {{ $puestoTrabajo->name ?? 'Show Puesto Trabajo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Puesto de trabajo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('puesto-trabajos.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $puestoTrabajo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $puestoTrabajo->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Salario:</strong>
                            ${{ $puestoTrabajo->salario }}
                        </div>
                        <div class="form-group">
                            <strong>Seccion Departamento :</strong>
                            {{ $puestoTrabajo->seccionDepartamento->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento :</strong>
                            {{ $puestoTrabajo->seccionDepartamento->departamentoEmpresa->nombre }}
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
