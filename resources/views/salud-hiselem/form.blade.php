<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Codigo') }}
                @if ($modo)
                    {{ Form::text('codele', $saludHiselem->codele, ['class' => 'form-control' . ($errors->has('codele') ? ' is-invalid' : ''), 'id' => 'codele', 'placeholder' => 'Codele']) }}
                @else
                    {{ Form::text('codele', $saludHiselem->codele, ['class' => 'form-control' . ($errors->has('codele') ? ' is-invalid' : ''), 'id' => 'codeled', 'readonly' => 'true', 'placeholder' => 'Codele']) }}
                @endif
                {!! $errors->first('codele', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('Nombre Elemento') }}
                {{ Form::text('elemento', $saludHiselem->elemento, ['class' => 'form-control' . ($errors->has('elemento') ? ' is-invalid' : ''), 'placeholder' => 'Elemento']) }}
                {!! $errors->first('elemento', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('Tipo') }}
                {{ Form::select('tipo', $tipoelem, $saludHiselem->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'id' => 'tipo', 'placeholder' => 'Tipo']) }}
                {!! $errors->first('tipo', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Nombre Campo') }}
                {{ Form::select('cm_nom', $campoelem, $saludHiselem->cm_nom, ['class' => 'form-control' . ($errors->has('cm_nom') ? ' is-invalid' : ''), 'id' => 'cm_nom', 'placeholder' => 'Nombre Campo']) }}
                {!! $errors->first('cm_nom', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Tipo Campo') }}
                {{ Form::select('cm_tipo', $tipocampo, $saludHiselem->cm_tipo, ['class' => 'form-control' . ($errors->has('cm_tipo') ? ' is-invalid' : ''), 'id' => 'cm_tipo', 'placeholder' => 'Tipo Campo']) }}
                {!! $errors->first('cm_tipo', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-5">
                {{ Form::label('Comando') }}
                {{ Form::text('comando', $saludHiselem->comando, ['class' => 'form-control' . ($errors->has('comando') ? ' is-invalid' : ''), 'id' => 'comando', 'placeholder' => 'Comando']) }}
                {!! $errors->first('comando', '<div class="invalid-feedback">:message</p>') !!}
            </div>
<!--             <div class="form-group col-md-2">
                {{ Form::label('predeter') }}
                {{ Form::text('predeter', $saludHiselem->predeter, ['class' => 'form-control' . ($errors->has('predeter') ? ' is-invalid' : ''), 'placeholder' => 'Predeter']) }}
                {!! $errors->first('predeter', '<div class="invalid-feedback">:message</p>') !!}
            </div> -->
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('Plantilla') }}
                {{ Form::textarea('planti', $saludHiselem->planti, ['class' => 'my-editor form-control' . ($errors->has('planti') ? ' is-invalid' : ''), 'id' => 'planti', 'placeholder' => 'Plantilla', 'rows' => 4]) }}
                {!! $errors->first('planti', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('Explicacion (Ayuda)') }}
                {{ Form::textarea('explica', $saludHiselem->explica, ['class' => 'my-editor form-control' . ($errors->has('explica') ? ' is-invalid' : ''), 'id' => 'explica', 'placeholder' => 'Explica', 'rows' => 4]) }}
                {!! $errors->first('explica', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>

{{--          <div class="form-group col-md-2">
            {{ Form::label('Ancho Campo') }}
            {{ Form::number('cm_ancho', $saludHiselem->cm_ancho, ['class' => 'form-control' . ($errors->has('cm_ancho') ? ' is-invalid' : ''), 'id' => 'cm_ancho', 'placeholder' => 'Ancho del Campo', 'step' => 0.01]) }}
            {!! $errors->first('cm_ancho', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-2">
            {{ Form::label('Decimales') }}
            {{ Form::number('cm_deci', $saludHiselem->cm_deci, ['class' => 'form-control' . ($errors->has('cm_deci') ? ' is-invalid' : ''), 'id' => 'cm_deci', 'placeholder' => 'Decimales', 'step' => 0.01]) }}
            {!! $errors->first('cm_deci', '<div class="invalid-feedback">:message</p>') !!}
        </div>  --}}
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" onclick="">Submit</button>
        <a class="btn btn-secondary" href="{{ route('salud-hiselem.index') }}"> Regresar</a>
    </div>
</div>
