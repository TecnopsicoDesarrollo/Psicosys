<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('padre') }}
            {{ Form::text('padre', $saludDsmv->padre, ['class' => 'form-control' . ($errors->has('padre') ? ' is-invalid' : ''), 'placeholder' => 'Padre']) }}
            {!! $errors->first('padre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $saludDsmv->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $saludDsmv->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('eje') }}
            {{ Form::text('eje', $saludDsmv->eje, ['class' => 'form-control' . ($errors->has('eje') ? ' is-invalid' : ''), 'placeholder' => 'Eje']) }}
            {!! $errors->first('eje', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cie10') }}
            {{ Form::text('cie10', $saludDsmv->cie10, ['class' => 'form-control' . ($errors->has('cie10') ? ' is-invalid' : ''), 'placeholder' => 'Cie10']) }}
            {!! $errors->first('cie10', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCie10') }}
            {{ Form::text('idCie10', $saludDsmv->idCie10, ['class' => 'form-control' . ($errors->has('idCie10') ? ' is-invalid' : ''), 'placeholder' => 'Idcie10']) }}
            {!! $errors->first('idCie10', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('criterio') }}
            {{ Form::text('criterio', $saludDsmv->criterio, ['class' => 'form-control' . ($errors->has('criterio') ? ' is-invalid' : ''), 'placeholder' => 'Criterio']) }}
            {!! $errors->first('criterio', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" id="btn_grabar">Grabar</button>
        <a class="btn btn-secondary" href="{{ route('salud-dsmv.index') }}"> Regresar</a>
    </div>
</div>
