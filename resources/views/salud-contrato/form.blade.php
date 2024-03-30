<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Codigo Contrato') }}
                @if ($modo)
                    {{ Form::text('idcontra', $saludContrato->idcontra, ['class' => 'form-control' . ($errors->has('idcontra') ? ' is-invalid' : ''), 'placeholder' => 'Idcontra']) }}
                @else
                    {{ Form::text('idcontra', $saludContrato->idcontra, ['class' => 'form-control' . ($errors->has('idcontra') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'Idcontra']) }}
                @endif
                {!! $errors->first('idcontra', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Plan') }}
                @if ($modo)
                    {{ Form::text('plan', $saludContrato->plan, ['class' => 'form-control' . ($errors->has('plan') ? ' is-invalid' : ''), 'placeholder' => 'Plan']) }}
                @else
                    {{ Form::text('plan', $saludContrato->plan, ['class' => 'form-control' . ($errors->has('plan') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'Plan']) }}
                @endif
                {!! $errors->first('plan', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('Nombre') }}
                {{ Form::text('nombre', $saludContrato->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('E.P.S.') }}
                {{ Form::select('idEps', $eps, $saludContrato->idEps, ['class' => 'form-control' . ($errors->has('idEps') ? ' is-invalid' : ''), 'placeholder' => 'EPS contratante']) }}
                {!! $errors->first('idEps', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Fecha Inicio') }}
                {{ Form::date('fechini', $saludContrato->fechini, ['class' => 'form-control' . ($errors->has('fechini') ? ' is-invalid' : ''), 'id'=>'fechini', 'placeholder' => 'Fechini']) }}
                {!! $errors->first('fechini', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Duracion') }}
                {{ Form::number('durac', $saludContrato->durac, ['class' => 'form-control' . ($errors->has('durac') ? ' is-invalid' : ''), 'id'=>'durac', 'placeholder' => 'Durac']) }}
                {!! $errors->first('durac', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Fecha Final') }}
                {{ Form::date('fechfin', $saludContrato->fechfin, ['class' => 'form-control' . ($errors->has('fechfin') ? ' is-invalid' : ''), 'id'=>'fechfin', 'placeholder' => 'Fechfin', 'readonly' => 'true']) }}
                {!! $errors->first('fechfin', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('Tipo Contrato') }}
                {{ Form::select('tipo', $tipocontra, $saludContrato->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
                {!! $errors->first('tipo', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                <div class="form-check form-check-inline">
                    {{ Form::label('¿Contrato esta firmado?') }}
                    {{ Form::checkbox('firmado', $saludContrato->firmado, ($saludContrato->firmado == 1 ? 'checked' : ''),  ['class' => 'form-check-input' . ($errors->has('firmado') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('firmado', '<div class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Fecha Firma') }}
                {{ Form::date('fechfirma', $saludContrato->fechfirma, ['class' => 'form-control' . ($errors->has('fechfirma') ? ' is-invalid' : ''), 'placeholder' => 'Fechfirma']) }}
                {!! $errors->first('fechfirma', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Telefono Contacto') }}
                {{ Form::text('telconta', $saludContrato->telconta, ['class' => 'form-control' . ($errors->has('telconta') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Contacto']) }}
                {!! $errors->first('telconta', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Tope Mensual') }}
                {{ Form::number('topemes', $saludContrato->topemes, ['class' => 'form-control' . ($errors->has('topemes') ? ' is-invalid' : ''), 'placeholder' => 'Tope Mensual Contrato']) }}
                {!! $errors->first('topemes', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Valor SMLV') }}
                {{ Form::number('salmin', $saludContrato->salmin, ['class' => 'form-control' . ($errors->has('salmin') ? ' is-invalid' : ''), 'placeholder' => 'Valor Salario minimo']) }}
                {!! $errors->first('salmin', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('Observaciones') }}
                {{ Form::textarea('notas', $saludContrato->notas, ['class' => 'form-control' . ($errors->has('notas') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones', 'rows' => 2]) }}
                {!! $errors->first('notas', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Manual') }}
                {{ Form::select('idManual', $manual, $saludContrato->idManual, ['class' => 'form-control' . ($errors->has('idManual') ? ' is-invalid' : ''), 'placeholder' => 'Manual Tarifario']) }}
                {!! $errors->first('idManual', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Manual 2') }}
                {{ Form::select('idManual1', $manual2, $saludContrato->idManual1, ['class' => 'form-control' . ($errors->has('idManual1') ? ' is-invalid' : ''), 'placeholder' => 'Manual Tarifario 2']) }}
                {!! $errors->first('idManual1', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Modo Contrato') }}
                {{ Form::select('tipotar', $tipotar, $saludContrato->tipotar, ['class' => 'form-control' . ($errors->has('tipotar') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Tarifa']) }}
                {!! $errors->first('tipotar', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Porcentage') }}
                {{ Form::number('porcen', $saludContrato->porcen, ['class' => 'form-control' . ($errors->has('porcen') ? ' is-invalid' : ''), 'placeholder' => 'Porcentage pactado', 'step' => 0.01]) }}
                {!! $errors->first('porcen', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
<!--             <div class="form-group col-md-2">
                {{ Form::label('usuario') }}
                {{ Form::text('usuario', $saludContrato->usuario, ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : ''), 'placeholder' => 'Usuario']) }}
                {!! $errors->first('usuario', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('idEps1') }}
                {{ Form::text('idEps1', $saludContrato->idEps1, ['class' => 'form-control' . ($errors->has('idEps1') ? ' is-invalid' : ''), 'placeholder' => 'Ideps1']) }}
                {!! $errors->first('idEps1', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('modival') }}
                {{ Form::text('modival', $saludContrato->modival, ['class' => 'form-control' . ($errors->has('modival') ? ' is-invalid' : ''), 'placeholder' => 'Modival']) }}
                {!! $errors->first('modival', '<div class="invalid-feedback">:message</p>') !!}
            </div> -->

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" id="btn_grabar">Grabar</button>
        <a class="btn btn-secondary" href="{{ route('salud-contrato.index') }}"> Regresar</a>
    </div>
</div>
