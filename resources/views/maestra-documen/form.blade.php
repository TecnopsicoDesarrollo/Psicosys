<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Documento') }}
            @if ($modo)
                {{ Form::text('docu', $maestraDocumen->docu, ['class' => 'form-control' . ($errors->has('docu') ? ' is-invalid' : ''), 'placeholder' => 'Sigla Documento']) }}
            @else
            {{ Form::text('docu', $maestraDocumen->docu, ['class' => 'form-control' . ($errors->has('docu') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'Sigla Documento']) }}
            @endif
            {!! $errors->first('docu', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Serial') }}
            @if ($modo)
                {{ Form::text('serdoc', $maestraDocumen->serdoc, ['class' => 'form-control' . ($errors->has('serdoc') ? ' is-invalid' : ''), 'placeholder' => 'Serie del Documento']) }}
            @else
                {{ Form::text('serdoc', $maestraDocumen->serdoc, ['class' => 'form-control' . ($errors->has('serdoc') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'Serie del Documento']) }}
            @endif
            {!! $errors->first('serdoc', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nombre', $maestraDocumen->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Documento']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero Inicial') }}
            {{ Form::text('no_ini', $maestraDocumen->no_ini, ['class' => 'form-control' . ($errors->has('no_ini') ? ' is-invalid' : ''), 'placeholder' => 'Numero Inicial']) }}
            {!! $errors->first('no_ini', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero Final') }}
            {{ Form::text('no_fin', $maestraDocumen->no_fin, ['class' => 'form-control' . ($errors->has('no_fin') ? ' is-invalid' : ''), 'placeholder' => 'Numero Final']) }}
            {!! $errors->first('no_fin', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero Actual') }}
            {{ Form::text('no_actual', $maestraDocumen->no_actual, ['class' => 'form-control' . ($errors->has('no_actual') ? ' is-invalid' : ''), 'placeholder' => 'Numero Actual']) }}
            {!! $errors->first('no_actual', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('¿Consecutivo Manual?') }}
            {{ Form::text('manual', $maestraDocumen->manual, ['class' => 'form-control' . ($errors->has('manual') ? ' is-invalid' : ''), 'placeholder' => 'Manual']) }}
            {!! $errors->first('manual', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('¿Documento Predeterminado?') }}
            {{ Form::text('predeter', $maestraDocumen->predeter, ['class' => 'form-control' . ($errors->has('predeter') ? ' is-invalid' : ''), 'placeholder' => 'Predeter']) }}
            {!! $errors->first('predeter', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('¿Es factura Electrónica?') }}
            {{ Form::text('facele', $maestraDocumen->facele, ['class' => 'form-control' . ($errors->has('facele') ? ' is-invalid' : ''), 'placeholder' => 'Facele']) }}
            {!! $errors->first('facele', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" id="btn_grabar">Grabar</button>
        <a class="btn btn-secondary" href="{{ route('maestra-documen.index') }}"> Regresar</a>
    </div>
</div>
