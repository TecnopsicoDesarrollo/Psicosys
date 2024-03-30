<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Historia') }}
                {{ Form::select('idcodhis', $histipo, $saludHisestru->idcodhis, ['class' => 'form-control' . ($errors->has('idcodhis') ? ' is-invalid' : ''), 'placeholder' => 'Tipo historia']) }}
                {!! $errors->first('idcodhis', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('Elemento') }}
                {{ Form::select('idcodele', $elemento, $saludHisestru->idcodele, ['class' => 'form-control' . ($errors->has('idcodele') ? ' is-invalid' : ''), 'id' => 'idcodele', 'placeholder' => 'Elemento']) }}
                {!! $errors->first('idcodele', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Tipo Elemento') }}
                {{ Form::select('tipo', $tipoelem, $saludHisestru->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'id' => 'tipo', 'placeholder' => 'Tipo', 'disabled' => 'true']) }}
                {!! $errors->first('tipo', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Orden') }}
                {{ Form::number('orden', $saludHisestru->orden, ['class' => 'form-control' . ($errors->has('orden') ? ' is-invalid' : ''), 'id' => 'orden', 'placeholder' => 'Orden', 'step' => 1]) }}
                {!! $errors->first('orden', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <div class="form-group col-md-12">
                    <div class="form-check form-check-inline">
                        {{ Form::label('¿Cargar Plantilla para este Elemento? ->') }}
                        {{ Form::checkbox('siplanti', $saludHisestru->siplanti, ($saludHisestru->siplanti == 1 ? 'checked' : ''), ['class' => 'form-check-input' . ($errors->has('siplanti') ? ' is-invalid' : ''), 'id' => 'siplanti']) }}
                        {!! $errors->first('siplanti', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-check form-check-inline">
                        {{ Form::label('¿Elemento Utiliza Formulaciòn? ->') }}
                        {{ Form::checkbox('formul', $saludHisestru->formul, ($saludHisestru->formul == 1 ? 'checked' : ''), ['class' => 'form-check-input' . ($errors->has('formul') ? ' is-invalid' : ''), 'id' => 'formul']) }}
                        {!! $errors->first('formul', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group col-md-10">
                    {{ Form::label('Comando') }}
                    {{ Form::text('comando', $saludHisestru->comando, ['class' => 'form-control' . ($errors->has('comando') ? ' is-invalid' : ''), 'id' => 'comando', 'placeholder' => 'Comando', 'readonly' => 'true']) }}
                    {!! $errors->first('comando', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('Area Aplicacion') }}
                    {{ Form::select('areaapli', $areaapli, $saludHisestru->areaapli, ['class' => 'form-control' . ($errors->has('areaapli') ? ' is-invalid' : ''), 'id' => 'areaapli', 'placeholder' => 'Area Aplicacion']) }}
                    {!! $errors->first('areaapli', '<div class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('Plantilla del elemento') }}
                {{ Form::textarea('planti', $saludHisestru->planti, ['class' => 'my-editor form-control' . ($errors->has('planti') ? ' is-invalid' : ''), 'id' => 'planti', 'placeholder' => 'Plantilla', 'rows' => 8]) }}
                {!! $errors->first('planti', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Grabar</button>
        <a class="btn btn-secondary" href="{{ route('salud-hisestru.index') }}"> Regresar</a>
    </div>
</div>
