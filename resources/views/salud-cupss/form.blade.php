<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Naturaleza') }}
                {{ Form::select('seccio', $seccion , $saludCupss->seccio, ['class' => 'form-control' . ($errors->has('seccio') ? ' is-invalid' : ''), 'placeholder' => 'Naturaleza']) }}
                {!! $errors->first('seccio', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('Capitulo CUPS') }}
                {{ Form::select('idCapitulo', $cupscapi, $saludCupss->idCapitulo, ['class' => 'form-control' . ($errors->has('idCapitulo') ? ' is-invalid' : ''), 'placeholder' => 'Capitulo CUPS']) }}
                {!! $errors->first('idCapitulo', '<div class="invalid-feedback">:message</p>') !!}
            </div>
<!--             <div class="form-group col-md-2">
                {{ Form::label('aplicado') }}
                {{ Form::text('aplicado', $saludCupss->aplicado, ['class' => 'form-control' . ($errors->has('aplicado') ? ' is-invalid' : ''), 'placeholder' => 'Aplicado']) }}
                {!! $errors->first('aplicado', '<div class="invalid-feedback">:message</p>') !!}
            </div> -->
            <div class="form-group col-md-4">
                {{ Form::label('Fase de Atención') }}
                {{ Form::select('codfase', $faseaten , $saludCupss->codfase, ['class' => 'form-control' . ($errors->has('codfase') ? ' is-invalid' : ''), 'placeholder' => 'Fase atención']) }}
                {!! $errors->first('codfase', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                {{ Form::label('Codigo CUPS') }}
                @if ($modo)
                    {{ Form::text('codcups', $saludCupss->codcups, ['class' => 'form-control' . ($errors->has('codcups') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
                @else
                    {{ Form::text('codcups', $saludCupss->codcups, ['class' => 'form-control' . ($errors->has('codcups') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'Codigo']) }}
                @endif
                {!! $errors->first('codcups', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-9">
                {{ Form::label('Descripción') }}
                {{ Form::textarea('nombre', $saludCupss->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre', 'rows' => 2]) }}
                {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
<!--         <div class="form-row">
            <div class="form-group">
                {{ Form::label('grupo') }}
                {{ Form::text('grupo', $saludCupss->grupo, ['class' => 'form-control' . ($errors->has('grupo') ? ' is-invalid' : ''), 'placeholder' => 'Grupo']) }}
                {!! $errors->first('grupo', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('subgrupo') }}
                {{ Form::text('subgrupo', $saludCupss->subgrupo, ['class' => 'form-control' . ($errors->has('subgrupo') ? ' is-invalid' : ''), 'placeholder' => 'Subgrupo']) }}
                {!! $errors->first('subgrupo', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('categor') }}
                {{ Form::text('categor', $saludCupss->categor, ['class' => 'form-control' . ($errors->has('categor') ? ' is-invalid' : ''), 'placeholder' => 'Categor']) }}
                {!! $errors->first('categor', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('subcate') }}
                {{ Form::text('subcate', $saludCupss->subcate, ['class' => 'form-control' . ($errors->has('subcate') ? ' is-invalid' : ''), 'placeholder' => 'Subcate']) }}
                {!! $errors->first('subcate', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div> -->
        <div class="form-row">
            <div class="form-group col-md-4">
                {{ Form::label('incluye') }}
                {{ Form::textarea('incluye', $saludCupss->incluye, ['class' => 'form-control' . ($errors->has('incluye') ? ' is-invalid' : ''), 'placeholder' => 'Incluye', 'rows' => 3]) }}
                {!! $errors->first('incluye', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('excluye') }}
                {{ Form::textarea('excluye', $saludCupss->excluye, ['class' => 'form-control' . ($errors->has('excluye') ? ' is-invalid' : ''), 'placeholder' => 'Excluye', 'rows' => 3]) }}
                {!! $errors->first('excluye', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('Simultaneo') }}
                {{ Form::textarea('simult', $saludCupss->simult, ['class' => 'form-control' . ($errors->has('simult') ? ' is-invalid' : ''), 'placeholder' => 'Simult', 'rows' => 3]) }}
                {!! $errors->first('simult', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" id="btn_grabar">Grabar</button>
        <a class="btn btn-secondary" href="{{ route('salud-cupss.index') }}"> Regresar</a>
    </div>
</div>
