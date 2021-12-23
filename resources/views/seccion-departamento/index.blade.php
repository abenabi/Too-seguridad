@extends('layouts.app')

@section('template_title')
    Seccion de departamento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Seccion Departamento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('seccion-departamentos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Descripcion</th>
										<th>Departamento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($seccionDepartamentos as $seccionDepartamento)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $seccionDepartamento->descripcion }}</td>
											<td>{{ $seccionDepartamento->departamentoEmpresa->nombre }}</td>

                                            <td>
                                                <form action="{{ route('seccion-departamentos.destroy',$seccionDepartamento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('seccion-departamentos.show',$seccionDepartamento->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('seccion-departamentos.edit',$seccionDepartamento->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $seccionDepartamentos->links() !!}
            </div>
        </div>
    </div>
@endsection
