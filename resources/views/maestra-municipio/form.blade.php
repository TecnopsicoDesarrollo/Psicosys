<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('Departamento') }}
                {{ Form::select('iddpto', $depart, $maestraMunicipio->iddpto, ['class' => 'form-control' . ($errors->has('iddpto') ? ' is-invalid' : ''), 'id' => 'iddpto', 'placeholder' => 'Departamento']) }}
                {!! $errors->first('iddpto', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('Codigo Departamento') }}
                {{ Form::text('dpto', $maestraMunicipio->dpto, ['class' => 'form-control' . ($errors->has('dpto') ? ' is-invalid' : ''), 'id' => 'dpto', 'readonly' => 'true', 'placeholder' => 'Solo Lectura']) }}
                {!! $errors->first('dpto', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Codigo Municipio') }}
                {{ Form::text('cod_muni', $maestraMunicipio->cod_muni, ['class' => 'form-control' . ($errors->has('cod_muni') ? ' is-invalid' : ''), 'id' => 'cod_muni', 'placeholder' => 'Cod Muni']) }}
                {!! $errors->first('cod_muni', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('Nombre Ciudad') }}
                {{ Form::text('ciudad', $maestraMunicipio->ciudad, ['class' => 'form-control' . ($errors->has('ciudad') ? ' is-invalid' : ''), 'id' => 'ciudad', 'placeholder' => 'Ciudad']) }}
                {!! $errors->first('ciudad', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('Codigo DANE') }}
                {{ Form::text('codigo', $maestraMunicipio->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'id' => 'codigo', 'readonly' => 'true','placeholder' => 'Solo Lectura']) }}
                {!! $errors->first('codigo', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>



    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" id="btn_grabar" onclick="codigoMuni()">Grabar</button>
        <a class="btn btn-secondary" href="{{ route('maestra-municipio.index') }}"> Regresar</a>
    </div>
</div>
