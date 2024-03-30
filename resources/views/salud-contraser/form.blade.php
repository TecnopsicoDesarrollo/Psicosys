<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('idContra') }}
            @if ($modo)
                {{ Form::text('idContra', $saludContraser->idContra, ['class' => 'form-control' . ($errors->has('idContra') ? ' is-invalid' : ''), 'placeholder' => 'Idcontra']) }}
            @else
                {{ Form::text('idContra', $saludContraser->idContra, ['class' => 'form-control' . ($errors->has('idContra') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'Idcontra']) }}
            @endif
            {!! $errors->first('idContra', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEps') }}
            @if ($modo)
                {{ Form::text('idEps', $saludContraser->idEps, ['class' => 'form-control' . ($errors->has('idEps') ? ' is-invalid' : ''), 'placeholder' => 'Ideps']) }}
            @else
                {{ Form::text('idEps', $saludContraser->idEps, ['class' => 'form-control' . ($errors->has('idEps') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'Ideps']) }}
            @endif
            {!! $errors->first('idEps', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idManual') }}
            @if ($modo)
                {{ Form::text('idManual', $saludContraser->idManual, ['class' => 'form-control' . ($errors->has('idManual') ? ' is-invalid' : ''), 'placeholder' => 'Idmanual']) }}
            @else
                {{ Form::text('idManual', $saludContraser->idManual, ['class' => 'form-control' . ($errors->has('idManual') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'Idmanual']) }}
            @endif
            {!! $errors->first('idManual', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCodserv') }}
            @if ($modo)
                {{ Form::text('idCodserv', $saludContraser->idCodserv, ['class' => 'form-control' . ($errors->has('idCodserv') ? ' is-invalid' : ''), 'placeholder' => 'Idcodserv']) }}
            @else
                {{ Form::text('idCodserv', $saludContraser->idCodserv, ['class' => 'form-control' . ($errors->has('idCodserv') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'Idcodserv']) }}
            @endif
            {!! $errors->first('idCodserv', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $saludContraser->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCodcups') }}
            {{ Form::text('idCodcups', $saludContraser->idCodcups, ['class' => 'form-control' . ($errors->has('idCodcups') ? ' is-invalid' : ''), 'placeholder' => 'Idcodcups']) }}
            {!! $errors->first('idCodcups', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('incremen') }}
            {{ Form::text('incremen', $saludContraser->incremen, ['class' => 'form-control' . ($errors->has('incremen') ? ' is-invalid' : ''), 'placeholder' => 'Incremen']) }}
            {!! $errors->first('incremen', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipotar') }}
            {{ Form::text('tipotar', $saludContraser->tipotar, ['class' => 'form-control' . ($errors->has('tipotar') ? ' is-invalid' : ''), 'placeholder' => 'Tipotar']) }}
            {!! $errors->first('tipotar', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idConcecont') }}
            {{ Form::text('idConcecont', $saludContraser->idConcecont, ['class' => 'form-control' . ($errors->has('idConcecont') ? ' is-invalid' : ''), 'placeholder' => 'Idconcecont']) }}
            {!! $errors->first('idConcecont', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grupquir') }}
            {{ Form::text('grupquir', $saludContraser->grupquir, ['class' => 'form-control' . ($errors->has('grupquir') ? ' is-invalid' : ''), 'placeholder' => 'Grupquir']) }}
            {!! $errors->first('grupquir', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('excluido') }}
            {{ Form::text('excluido', $saludContraser->excluido, ['class' => 'form-control' . ($errors->has('excluido') ? ' is-invalid' : ''), 'placeholder' => 'Excluido']) }}
            {!! $errors->first('excluido', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" id="btn_grabar">Grabar</button>
        <a class="btn btn-secondary" href="{{ route('salud-contraser.index') }}"> Regresar</a>
    </div>
</div>
