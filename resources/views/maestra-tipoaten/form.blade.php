<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $maestraTipoaten->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nomtipo') }}
            {{ Form::text('nomtipo', $maestraTipoaten->nomtipo, ['class' => 'form-control' . ($errors->has('nomtipo') ? ' is-invalid' : ''), 'placeholder' => 'Nomtipo']) }}
            {!! $errors->first('nomtipo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rip') }}
            {{ Form::text('rip', $maestraTipoaten->rip, ['class' => 'form-control' . ($errors->has('rip') ? ' is-invalid' : ''), 'placeholder' => 'Rip']) }}
            {!! $errors->first('rip', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bodega') }}
            {{ Form::text('bodega', $maestraTipoaten->bodega, ['class' => 'form-control' . ($errors->has('bodega') ? ' is-invalid' : ''), 'placeholder' => 'Bodega']) }}
            {!! $errors->first('bodega', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>