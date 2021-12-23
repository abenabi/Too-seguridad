@extends('layouts.app')

@section('template_title')
    {{ $departamentoEmpresa->name ?? 'Show Departamento Empresa' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Departamento Empresa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('departamento-empresas.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $departamentoEmpresa->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Empleados:</strong>
                            {{ $departamentoEmpresa->numero_empleados }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $departamentoEmpresa->empresa->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
