@extends('layouts.app')

@section('template_title')
    Empleado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Empleado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('empleados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Nombres</th>
										<th>Apellidos</th>
                                        <!--
										<th>Genero Id</th>
										<th>Estado Civil Id</th>-->
										<th>Puesto Trabajo</th>
										<th>Dui</th>
                                        <!--
										<th>Nit</th>
										<th>Isss</th>
										<th>Nup</th>
										<th>Direccion</th>
										<th>Departamento Id</th>
										<th>Telefono Celular</th>
										<th>Telefono Casa</th>-->

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empleados as $empleado)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $empleado->nombres }}</td>
											<td>{{ $empleado->apellidos }}</td>
                                            <!--
											<td>{{ $empleado->genero_id }}</td>
											<td>{{ $empleado->estado_civil_id }}</td>-->
											<td>{{ $empleado->puestoTrabajo->nombre }}</td>
											<td>{{ $empleado->dui }}</td>
                                            <!--
											<td>{{ $empleado->nit }}</td>
											<td>{{ $empleado->isss }}</td>
											<td>{{ $empleado->nup }}</td>
											<td>{{ $empleado->direccion }}</td>
											<td>{{ $empleado->municipio_id }}</td>
											<td>{{ $empleado->telefono_celular }}</td>
											<td>{{ $empleado->telefono_casa }}</td>-->

                                            <td>
                                                <form action="{{ route('empleados.destroy',$empleado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('empleados.show',$empleado->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('empleados.edit',$empleado->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $empleados->links() !!}
            </div>
        </div>
    </div>
@endsection
