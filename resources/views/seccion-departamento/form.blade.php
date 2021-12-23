<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('descripcion', $seccionDepartamento->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Departamento') }}
            {{ Form::select('departamento_empresa_id',$departamentoEmpresa, $seccionDepartamento->departamento_empresa_id, ['class' => 'form-control' . ($errors->has('departamento_empresa_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el departamento Empresa ']) }}
            {!! $errors->first('departamento_empresa_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
