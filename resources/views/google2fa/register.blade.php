@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Autenticación de usuario</div>

                <div class="panel-body" style="text-align: center;">
                    <p>Escanea el código QR mostrado a continuación desde tu aplicación de Google Authenticator. Alternativamente, puedes usar el siguiente código: {{ $secret }}</p>
                    <div>
                        {!! $QR_Image !!}
                    </div>
                    <p>Debes obtener el código desde Google Authenticator al escanear el código, debes hacer esto antes de continuar.</p>
                    <div>
                        <a href="/complete-registration"><button class="btn-primary">Siguiente</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
