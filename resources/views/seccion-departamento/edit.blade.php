@extends('layouts.app')

@section('template_title')
    Editar Seccion de departamento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Seccion de departamento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('seccion-departamentos.update', $seccionDepartamento->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('seccion-departamento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
