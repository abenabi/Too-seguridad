@extends('layouts.app')

@section('template_title')
    Puesto de trabajo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Puesto Trabajo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('puesto-trabajos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Registrar') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Nombre</th>
                                        <!--
										<th>Descripcion</th>-->
										<th>Salario</th>
										<th>Seccion del Departamento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($puestoTrabajos as $puestoTrabajo)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $puestoTrabajo->nombre }}</td>
										<!--	<td>{{ $puestoTrabajo->descripcion }}</td>-->
											<td>${{ $puestoTrabajo->salario }}</td>
											<td>{{ $puestoTrabajo->seccionDepartamento->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('puesto-trabajos.destroy',$puestoTrabajo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('puesto-trabajos.show',$puestoTrabajo->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('puesto-trabajos.edit',$puestoTrabajo->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $puestoTrabajos->links() !!}
            </div>
        </div>
    </div>
@endsection
