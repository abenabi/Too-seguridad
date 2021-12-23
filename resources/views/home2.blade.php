@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="display-4 text-primary" >Empresa</h1>
            <p class="lead text-secondary">Empresa de seguridad</p>
            <p class="lead text-secondary">Clasificacion de empresa:Grande</p>
            <p class="lead text-secondary">Tipo administracion: Privada</p>
            <p class="lead text-secondary">Tipo de propiedad: Privada</p>
            <p class="lead text-secondary">Direccion: San Salvador, colonia medica</p>
            @if(Auth::user()->rol_id==1)
            <a class="btn btn-lg btn-primary" href="{{ route('departamento-empresas.index') }}">Visitar Departamentos empresas</a>
            @endif
        </div>
        <div class="col-6">
            <img class="img-fluid" src="/img/Home.svg" alt="Empresa logo">
        </div>
    </div>
</div>

@endsection
