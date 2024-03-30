<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idadmision') }}
            {{ Form::text('idadmision', $saludHisanexo->idadmision, ['class' => 'form-control' . ($errors->has('idadmision') ? ' is-invalid' : ''), 'placeholder' => 'Idadmision']) }}
            {!! $errors->first('idadmision', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idhisto') }}
            {{ Form::text('idhisto', $saludHisanexo->idhisto, ['class' => 'form-control' . ($errors->has('idhisto') ? ' is-invalid' : ''), 'placeholder' => 'Idhisto']) }}
            {!! $errors->first('idhisto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $saludHisanexo->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detalle') }}
            {{ Form::text('detalle', $saludHisanexo->detalle, ['class' => 'form-control' . ($errors->has('detalle') ? ' is-invalid' : ''), 'placeholder' => 'Detalle']) }}
            {!! $errors->first('detalle', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rutadoc') }}
            {{ Form::text('rutadoc', $saludHisanexo->rutadoc, ['class' => 'form-control' . ($errors->has('rutadoc') ? ' is-invalid' : ''), 'placeholder' => 'Rutadoc']) }}
            {!! $errors->first('rutadoc', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('area') }}
            {{ Form::text('area', $saludHisanexo->area, ['class' => 'form-control' . ($errors->has('area') ? ' is-invalid' : ''), 'placeholder' => 'Area']) }}
            {!! $errors->first('area', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario') }}
            {{ Form::text('usuario', $saludHisanexo->usuario, ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : ''), 'placeholder' => 'Usuario']) }}
            {!! $errors->first('usuario', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>