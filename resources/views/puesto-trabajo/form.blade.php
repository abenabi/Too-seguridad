<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nombre', $puestoTrabajo->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('descripcion', $puestoTrabajo->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Salario') }}
            {{ Form::text('salario', $puestoTrabajo->salario, ['class' => 'form-control' . ($errors->has('salario') ? ' is-invalid' : ''), 'placeholder' => '$ 00.00']) }}
            {!! $errors->first('salario', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Seccion del Departamento') }}
            {{ Form::select('seccion_departamento_id',$seccion, $puestoTrabajo->seccion_departamento_id, ['class' => 'form-control' . ($errors->has('seccion_departamento_id') ? ' is-invalid' : ''), 'placeholder' => 'selecione la seccion del departamento']) }}
            {!! $errors->first('seccion_departamento_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
