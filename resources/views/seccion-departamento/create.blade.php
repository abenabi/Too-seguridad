@extends('layouts.app')

@section('template_title')
    Crear Seccion Departamento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Seccion de departamento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('seccion-departamentos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('seccion-departamento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
