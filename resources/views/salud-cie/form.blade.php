<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('codigo') }}
            @if ($modo)
                {{ Form::text('codigo', $saludCie->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            @else
                {{ Form::text('codigo', $saludCie->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'Codigo']) }}
            @endif
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $saludCie->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sexo') }}
            {{ Form::text('sexo', $saludCie->sexo, ['class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
            {!! $errors->first('sexo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edadmin') }}
            {{ Form::text('edadmin', $saludCie->edadmin, ['class' => 'form-control' . ($errors->has('edadmin') ? ' is-invalid' : ''), 'placeholder' => 'Edadmin']) }}
            {!! $errors->first('edadmin', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edadmax') }}
            {{ Form::text('edadmax', $saludCie->edadmax, ['class' => 'form-control' . ($errors->has('edadmax') ? ' is-invalid' : ''), 'placeholder' => 'Edadmax']) }}
            {!! $errors->first('edadmax', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" id="btn_grabar">Grabar</button>
        <a class="btn btn-secondary" href="{{ route('salud-cie.index') }}"> Regresar</a>
    </div>
</div>
