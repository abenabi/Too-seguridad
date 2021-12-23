@extends('layouts.app')

@section('template_title')
    Departamento Empresa
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Departamento Empresa') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('departamento-empresas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Numero Empleados</th>
										<th>Empresa</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($departamentoEmpresas as $departamentoEmpresa)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $departamentoEmpresa->nombre }}</td>
											<td>{{ $departamentoEmpresa->numero_empleados }}</td>
											<td>{{ $departamentoEmpresa->empresa->nombre }}</td>

                                            <td>
                                                <form action="{{ route('departamento-empresas.destroy',$departamentoEmpresa->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('departamento-empresas.show',$departamentoEmpresa->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('departamento-empresas.edit',$departamentoEmpresa->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $departamentoEmpresas->links() !!}
            </div>
        </div>
    </div>
@endsection
