<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('nombres', $empleado->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellidos') }}
            {{ Form::text('apellidos', $empleado->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Genero') }}
            {{ Form::select('genero_id',$genero, $empleado->genero_id, ['class' => 'form-control' . ($errors->has('genero_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el genero ']) }}
            {!! $errors->first('genero_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado civil') }}
            {{ Form::select('estado_civil_id',$estadoCivil, $empleado->estado_civil_id, ['class' => 'form-control' . ($errors->has('estado_civil_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el estado civil ']) }}
            {!! $errors->first('estado_civil_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Puesto de trabajo') }}
            {{ Form::select('puesto_trabajo_id',$puestos, $empleado->puesto_trabajo_id, ['class' => 'form-control' . ($errors->has('puesto_trabajo_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el puesto de trabajo ']) }}
            {!! $errors->first('puesto_trabajo_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DUI') }}
            {{ Form::text('dui', $empleado->dui, ['class' => 'form-control' . ($errors->has('dui') ? ' is-invalid' : ''), 'placeholder' => 'Dui']) }}
            {!! $errors->first('dui', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NIT') }}
            {{ Form::text('nit', $empleado->nit, ['class' => 'form-control' . ($errors->has('nit') ? ' is-invalid' : ''), 'placeholder' => 'Nit']) }}
            {!! $errors->first('nit', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero de afiliacion ISSS') }}
            {{ Form::text('isss', $empleado->isss, ['class' => 'form-control' . ($errors->has('isss') ? ' is-invalid' : ''), 'placeholder' => 'Isss']) }}
            {!! $errors->first('isss', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NUP') }}
            {{ Form::text('nup', $empleado->nup, ['class' => 'form-control' . ($errors->has('nup') ? ' is-invalid' : ''), 'placeholder' => 'Nup']) }}
            {!! $errors->first('nup', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('direccion', $empleado->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Municipio') }}
            {{ Form::select('municipio_id',$municipio, $empleado->municipio_id, ['class' => 'form-control' . ($errors->has('municipio_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el municipio de recidencia']) }}
            {!! $errors->first('municipio_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono celular') }}
            {{ Form::text('telefono_celular', $empleado->telefono_celular, ['class' => 'form-control' . ($errors->has('telefono_celular') ? ' is-invalid' : ''), 'placeholder' => '####-####']) }}
            {!! $errors->first('telefono_celular', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono casa') }}
            {{ Form::text('telefono_casa', $empleado->telefono_casa, ['class' => 'form-control' . ($errors->has('telefono_casa') ? ' is-invalid' : ''), 'placeholder' => '####-####']) }}
            {!! $errors->first('telefono_casa', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
