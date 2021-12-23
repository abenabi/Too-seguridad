<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre departamento') }}
            {{ Form::text('nombre', $departamentoEmpresa->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero de empleados') }}
            {{ Form::text('numero_empleados', $departamentoEmpresa->numero_empleados, ['class' => 'form-control' . ($errors->has('numero_empleados') ? ' is-invalid' : ''), 'placeholder' => 'Numero Empleados']) }}
            {!! $errors->first('numero_empleados', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('empresa_id',$empresa, $departamentoEmpresa->empresa_id, ['class' => 'form-control' . ($errors->has('empresa_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione la empresa']) }}
            {!! $errors->first('empresa_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
