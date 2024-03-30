<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('manual') }}
                @if ($modo)
                    {{ Form::text('manual', $saludManuale->manual, ['class' => 'form-control' . ($errors->has('manual') ? ' is-invalid' : ''), 'placeholder' => 'Manual']) }}
                @else
                    {{ Form::text('manual', $saludManuale->manual, ['class' => 'form-control' . ($errors->has('manual') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'Manual']) }}
                @endif
                {!! $errors->first('manual', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('nombre') }}
                {{ Form::text('nombre', $saludManuale->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" id="btn_grabar">Grabar</button>
        <a class="btn btn-secondary" href="{{ route('salud-manuale.index') }}"> Regresar</a>
    </div>
</div>
