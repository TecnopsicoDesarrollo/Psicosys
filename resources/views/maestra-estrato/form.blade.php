<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('codigo') }}
                @if ($modo)
                    {{ Form::text('codigo', $maestraEstrato->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder'=>'Codigo']) }}
                @else
                    {{ Form::text('codigo', $maestraEstrato->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder'=>'Codigo']) }}
                @endif
                {!! $errors->first('codigo', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('estrato') }}
                {{ Form::text('estrato', $maestraEstrato->estrato, ['class' => 'form-control' . ($errors->has('estrato') ? ' is-invalid' : ''), 'placeholder'=>'Estrato']) }}
                {!! $errors->first('estrato', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" id="btn_grabar">Grabar</button>
        <a class="btn btn-secondary" href="{{ route('maestra-estrato.index') }}"> Regresar</a>
        <!-- <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/> -->
    </div>
</div>
