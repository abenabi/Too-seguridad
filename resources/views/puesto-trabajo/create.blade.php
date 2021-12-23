@extends('layouts.app')

@section('template_title')
    Crear Puesto de trabajo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Puesto Trabajo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('puesto-trabajos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('puesto-trabajo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
