<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('codhis') }}
                @if ($modo)
                    {{ Form::text('codhis', $saludHistipo->codhis, ['class' => 'form-control' . ($errors->has('codhis') ? ' is-invalid' : ''), 'placeholder' => 'Codhis']) }}
                @else
                    {{ Form::text('codhis', $saludHistipo->codhis, ['class' => 'form-control' . ($errors->has('codhis') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'Codhis']) }}
                @endif
                {!! $errors->first('codhis', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('nombre') }}
                {{ Form::text('nombre', $saludHistipo->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('Especialidad') }}
                {{ Form::select('idEspecial', $especial, $saludHistipo->idEspecial, ['class' => 'form-control' . ($errors->has('idEspecial') ? ' is-invalid' : ''), 'placeholder' => 'Idespecial']) }}
                {!! $errors->first('idEspecial', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" id="btn_grabar">Grabar</button>
        <a class="btn btn-secondary" href="{{ route('salud-histipo.index') }}"> Regresar</a>
    </div>
</div>
