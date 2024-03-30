<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('codigo') }}
                @if ($modo)
                    {{ Form::text('codigo', $maestraEpss->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
                @else
                    {{ Form::text('codigo', $maestraEpss->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'Codigo']) }}
                @endif
                {!! $errors->first('codigo', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('entidad') }}
                {{ Form::text('entidad', $maestraEpss->entidad, ['class' => 'form-control' . ($errors->has('entidad') ? ' is-invalid' : ''), 'placeholder' => 'Entidad']) }}
                {!! $errors->first('entidad', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('tipenti') }}
                {{ Form::text('tipenti', $maestraEpss->tipenti, ['class' => 'form-control' . ($errors->has('tipenti') ? ' is-invalid' : ''), 'placeholder' => 'Tipenti']) }}
                {!! $errors->first('tipenti', '<div class="invalid-feedback">:message</p>') !!}
            </div>
<!--             <div class="form-group col-md-2">
                {{ Form::label('no_identi') }}
                {{ Form::text('no_identi', $maestraEpss->no_identi, ['class' => 'form-control' . ($errors->has('no_identi') ? ' is-invalid' : ''), 'placeholder' => 'No Identi']) }}
                {!! $errors->first('no_identi', '<div class="invalid-feedback">:message</p>') !!}
            </div> -->
            <div class="form-group col-md-2">
                {{ Form::label('idTercero') }}
                {{ Form::text('idTercero', $maestraEpss->idTercero, ['class' => 'form-control' . ($errors->has('idTercero') ? ' is-invalid' : ''), 'placeholder' => 'Idtercero']) }}
                {!! $errors->first('idTercero', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" id="btn_grabar">Grabar</button>
        <a class="btn btn-secondary" href="{{ route('maestra-epss.index') }}"> Regresar</a>
    </div>
</div>
