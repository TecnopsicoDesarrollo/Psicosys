<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('codigo') }}
                @if ($modo)
                    {{ Form::text('codigo', $maestraTipovinc->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
                @else
                    {{ Form::text('codigo', $maestraTipovinc->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'Codigo']) }}
                @endif
                {!! $errors->first('codigo', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('tipovinc') }}
                {{ Form::text('tipovinc', $maestraTipovinc->tipovinc, ['class' => 'form-control' . ($errors->has('tipovinc') ? ' is-invalid' : ''), 'placeholder' => 'Tipovinc']) }}
                {!! $errors->first('tipovinc', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" id="btn_grabar">Grabar</button>
        <a class="btn btn-secondary" href="{{ route('maestra-tipovinc.index') }}"> Regresar</a>
    </div>
</div>
