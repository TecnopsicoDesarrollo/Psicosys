<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idcodhis') }}
            {{ Form::text('idcodhis', $saludHissegu->idcodhis, ['class' => 'form-control' . ($errors->has('idcodhis') ? ' is-invalid' : ''), 'placeholder' => 'Idcodhis']) }}
            {!! $errors->first('idcodhis', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idcodele') }}
            {{ Form::text('idcodele', $saludHissegu->idcodele, ['class' => 'form-control' . ($errors->has('idcodele') ? ' is-invalid' : ''), 'placeholder' => 'Idcodele']) }}
            {!! $errors->first('idcodele', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario') }}
            {{ Form::text('usuario', $saludHissegu->usuario, ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : ''), 'placeholder' => 'Usuario']) }}
            {!! $errors->first('usuario', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sec_prompt') }}
            {{ Form::text('sec_prompt', $saludHissegu->sec_prompt, ['class' => 'form-control' . ($errors->has('sec_prompt') ? ' is-invalid' : ''), 'placeholder' => 'Sec Prompt']) }}
            {!! $errors->first('sec_prompt', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idmedico') }}
            {{ Form::text('idmedico', $saludHissegu->idmedico, ['class' => 'form-control' . ($errors->has('idmedico') ? ' is-invalid' : ''), 'placeholder' => 'Idmedico']) }}
            {!! $errors->first('idmedico', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sec_adic') }}
            {{ Form::text('sec_adic', $saludHissegu->sec_adic, ['class' => 'form-control' . ($errors->has('sec_adic') ? ' is-invalid' : ''), 'placeholder' => 'Sec Adic']) }}
            {!! $errors->first('sec_adic', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sec_edit') }}
            {{ Form::text('sec_edit', $saludHissegu->sec_edit, ['class' => 'form-control' . ($errors->has('sec_edit') ? ' is-invalid' : ''), 'placeholder' => 'Sec Edit']) }}
            {!! $errors->first('sec_edit', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>