<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Manual') }}
                @if ($modo)
                    {{ Form::select('idManual', $manual, $saludTarifa->idManual, ['class' => 'form-control' . ($errors->has('idManual') ? ' is-invalid' : ''), 'placeholder' => 'Manual']) }}
                @else
                    {{ Form::select('idManual', $manual, $saludTarifa->idManual, ['class' => 'form-control' . ($errors->has('idManual') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'Manual']) }}
                @endif
                {!! $errors->first('idManual', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Codigo') }}
                @if ($modo)
                    {{ Form::text('codigo', $saludTarifa->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
                @else
                    {{ Form::text('codigo', $saludTarifa->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'Codigo']) }}
                @endif
                {!! $errors->first('codigo', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('Descripción') }}
                {{ Form::textarea('nombre', $saludTarifa->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre', 'rows' => 2]) }}
                {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Codigo Imprimible') }}
                {{ Form::text('codrela', $saludTarifa->codrela, ['class' => 'form-control' . ($errors->has('codrela') ? ' is-invalid' : ''), 'placeholder' => 'Imprimible']) }}
                {!! $errors->first('codrela', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('tipotar') }}
                {{ Form::select('tipotar', $tipotarifa, $saludTarifa->tipotar, ['class' => 'form-control' . ($errors->has('tipotar') ? ' is-invalid' : ''), 'placeholder' => 'Tipotar']) }}
                {!! $errors->first('tipotar', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('tipocon') }}
                {{ Form::select('tipocon', $tipocon, $saludTarifa->tipocon, ['class' => 'form-control' . ($errors->has('tipocon') ? ' is-invalid' : ''), 'placeholder' => 'Tipocon']) }}
                {!! $errors->first('tipocon', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('grupquir') }}
                {{ Form::text('grupquir', $saludTarifa->grupquir, ['class' => 'form-control' . ($errors->has('grupquir') ? ' is-invalid' : ''), 'placeholder' => 'Grupquir']) }}
                {!! $errors->first('grupquir', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('idCodcups') }}
                {{ Form::select('idCodcups', $cups, $saludTarifa->idCodcups, ['class' => 'form-control' . ($errors->has('idCodcups') ? ' is-invalid' : ''), 'placeholder' => 'Idcodcups']) }}
                {!! $errors->first('idCodcups', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('UVR Especialista') }}
                {{ Form::number('uvresp', $saludTarifa->uvresp, ['class' => 'form-control' . ($errors->has('uvresp') ? ' is-invalid' : ''), 'placeholder' => 'Uvresp', 'step' => 0.01]) }}
                {!! $errors->first('uvresp', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('UVR General') }}
                {{ Form::number('uvrgen', $saludTarifa->uvrgen, ['class' => 'form-control' . ($errors->has('uvrgen') ? ' is-invalid' : ''), 'placeholder' => 'Uvrgen', 'step' => 0.01]) }}
                {!! $errors->first('uvrgen', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Valor') }}
                {{ Form::number('valuvr', $saludTarifa->valuvr, ['class' => 'form-control' . ($errors->has('valuvr') ? ' is-invalid' : ''), 'placeholder' => 'Valuvr', 'step' => 0.01]) }}
                {!! $errors->first('valuvr', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Costo') }}
                {{ Form::number('costo', $saludTarifa->costo, ['class' => 'form-control' . ($errors->has('costo') ? ' is-invalid' : ''), 'placeholder' => 'Costo', 'step' => 0.01]) }}
                {!! $errors->first('costo', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('Concepto Contable') }}
                {{ Form::select('idConcecont', $concecont, $saludTarifa->idConcecont, ['class' => 'form-control' . ($errors->has('idConcecont') ? ' is-invalid' : ''), 'placeholder' => 'Idconcecont']) }}
                {!! $errors->first('idConcecont', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                {{ Form::label('Sexo') }}
                {{ Form::select('sexo', $sexo1, $saludTarifa->sexo, ['class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
                {!! $errors->first('sexo', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('Edad Minima') }}
                {{ Form::number('edadmin', $saludTarifa->edadmin, ['class' => 'form-control' . ($errors->has('edadmin') ? ' is-invalid' : ''), 'placeholder' => 'Edadmin']) }}
                {!! $errors->first('edadmin', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('Edad Maxima') }}
                {{ Form::number('edadmax', $saludTarifa->edadmax, ['class' => 'form-control' . ($errors->has('edadmax') ? ' is-invalid' : ''), 'placeholder' => 'Edadmax']) }}
                {!! $errors->first('edadmax', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
<!--             <div class="form-group col-md-2">
                {{ Form::label('iva') }}
                {{ Form::text('iva', $saludTarifa->iva, ['class' => 'form-control' . ($errors->has('iva') ? ' is-invalid' : ''), 'placeholder' => 'Iva']) }}
                {!! $errors->first('iva', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('porciva') }}
                {{ Form::text('porciva', $saludTarifa->porciva, ['class' => 'form-control' . ($errors->has('porciva') ? ' is-invalid' : ''), 'placeholder' => 'Porciva']) }}
                {!! $errors->first('porciva', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('codtar2') }}
                {{ Form::text('codtar2', $saludTarifa->codtar2, ['class' => 'form-control' . ($errors->has('codtar2') ? ' is-invalid' : ''), 'placeholder' => 'Codtar2']) }}
                {!! $errors->first('codtar2', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('excluido') }}
                {{ Form::text('excluido', $saludTarifa->excluido, ['class' => 'form-control' . ($errors->has('excluido') ? ' is-invalid' : ''), 'placeholder' => 'Excluido']) }}
                {!! $errors->first('excluido', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('codatc') }}
                {{ Form::text('codatc', $saludTarifa->codatc, ['class' => 'form-control' . ($errors->has('codatc') ? ' is-invalid' : ''), 'placeholder' => 'Codatc']) }}
                {!! $errors->first('codatc', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('usuario') }}
                {{ Form::text('usuario', $saludTarifa->usuario, ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : ''), 'placeholder' => 'Usuario']) }}
                {!! $errors->first('usuario', '<div class="invalid-feedback">:message</p>') !!}
            </div> -->

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Grabar</button>
        <a class="btn btn-secondary" href="{{ route('salud-tarifa.index') }}">Regresar</a>
    </div>
</div>
