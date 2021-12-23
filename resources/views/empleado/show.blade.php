@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? 'Show Empleado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $empleado->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $empleado->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $empleado->genero->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Civil:</strong>
                            {{ $empleado->estadoCivil->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Puesto de trabajo:</strong>
                            {{ $empleado->puestoTrabajo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Seccion Departamento:</strong>
                            {{ $empleado->puestoTrabajo->seccionDepartamento->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento Empresa:</strong>
                            {{ $empleado->puestoTrabajo->seccionDepartamento->departamentoEmpresa->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>DUI:</strong>
                            {{ $empleado->dui }}
                        </div>
                        <div class="form-group">
                            <strong>NIT:</strong>
                            {{ $empleado->nit }}
                        </div>
                        <div class="form-group">
                            <strong>numero de afiliación Isss:</strong>
                            {{ $empleado->isss }}
                        </div>
                        <div class="form-group">
                            <strong>NUP:</strong>
                            {{ $empleado->nup }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $empleado->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $empleado->municipio->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $empleado->municipio->departamento->descripcion }}
                        </div>

                        <div class="form-group">
                            <strong>Telefono Celular:</strong>
                            {{ $empleado->telefono_celular }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono Casa:</strong>
                            {{ $empleado->telefono_casa }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
