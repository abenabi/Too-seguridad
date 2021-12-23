@extends('layouts.app')

@section('template_title')
    {{ $seccionDepartamento->name ?? 'Show Seccion Departamento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Seccion de departamento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('seccion-departamentos.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $seccionDepartamento->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $seccionDepartamento->departamentoEmpresa->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
