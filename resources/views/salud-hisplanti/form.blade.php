<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('codplanti') }}
            {{ Form::text('codplanti', $saludHisplanti->codplanti, ['class' => 'form-control' . ($errors->has('codplanti') ? ' is-invalid' : ''), 'placeholder' => 'Codplanti']) }}
            {!! $errors->first('codplanti', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $saludHisplanti->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('planti') }}
            {{ Form::text('planti', $saludHisplanti->planti, ['class' => 'form-control' . ($errors->has('planti') ? ' is-invalid' : ''), 'placeholder' => 'Planti']) }}
            {!! $errors->first('planti', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipoexa') }}
            {{ Form::text('tipoexa', $saludHisplanti->tipoexa, ['class' => 'form-control' . ($errors->has('tipoexa') ? ' is-invalid' : ''), 'placeholder' => 'Tipoexa']) }}
            {!! $errors->first('tipoexa', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edadmin') }}
            {{ Form::text('edadmin', $saludHisplanti->edadmin, ['class' => 'form-control' . ($errors->has('edadmin') ? ' is-invalid' : ''), 'placeholder' => 'Edadmin']) }}
            {!! $errors->first('edadmin', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edadmax') }}
            {{ Form::text('edadmax', $saludHisplanti->edadmax, ['class' => 'form-control' . ($errors->has('edadmax') ? ' is-invalid' : ''), 'placeholder' => 'Edadmax']) }}
            {!! $errors->first('edadmax', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sexo') }}
            {{ Form::text('sexo', $saludHisplanti->sexo, ['class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
            {!! $errors->first('sexo', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>