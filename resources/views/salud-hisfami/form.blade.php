<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-row">
            <div class="form-group col-md-4">
                {{ Form::label('Nombre del miembro de la Familia') }}
                {{ Form::text('miembro', $saludHisfa->miembro, ['class' => 'form-control' . ($errors->has('miembro') ? ' is-invalid' : ''), 'id' => 'miembro', 'placeholder' => 'Miembro']) }}
                {!! $errors->first('miembro', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Parentesco') }}
                {{ Form::select('parencon', $parentesco , $saludHisfa->parencon, ['class' => 'form-control' . ($errors->has('parencon') ? ' is-invalid' : ''), 'id' => 'parencon', 'placeholder' => 'Parencon']) }}
                {!! $errors->first('parencon', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('¿Cual?') }}
                {{ Form::text('otropare', $saludHisfa->otropare, ['class' => 'form-control' . ($errors->has('otropare') ? ' is-invalid' : ''), 'id' => 'otropare', 'placeholder' => 'Otropare']) }}
                {!! $errors->first('otropare', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-1">
                {{ Form::label('Edad') }}
                {{ Form::number('edad', $saludHisfa->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'id' => 'edadfam', 'placeholder' => 'Edad']) }}
                {!! $errors->first('edad', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Código Edad') }}
                {{ Form::select('cod_edad', $codedad, $saludHisfa->cod_edad, ['class' => 'form-control' . ($errors->has('cod_edad') ? ' is-invalid' : ''), 'id' => 'cod_edadfam', 'placeholder' => 'Cod Edad']) }}
                {!! $errors->first('cod_edad', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                {{ Form::label('Relación con el usuario') }}
                {{ Form::select('relacion', $relacion, $saludHisfa->relacion, ['class' => 'form-control' . ($errors->has('relacion') ? ' is-invalid' : ''), 'id' => 'relacion', 'placeholder' => 'Relacion']) }}
                {!! $errors->first('relacion', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('Escolaridad') }}
                {{ Form::select('escolar', $escolar, $saludHisfa->escolar, ['class' => 'form-control' . ($errors->has('escolar') ? ' is-invalid' : ''), 'id' => 'escolar', 'placeholder' => 'Escolar']) }}
                {!! $errors->first('escolar', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('Ocupacion') }}
                {{ Form::select('idocupac', $ocupacion, $saludHisfa->idocupac, ['class' => 'form-control' . ($errors->has('idocupac') ? ' is-invalid' : ''), 'id' => 'idocupac', 'placeholder' => 'Idocupac']) }}
                {!! $errors->first('idocupac', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <div class="form-check form-check-inline">
                    {{ Form::label('¿El Miembro vive actualmente?') }}
                    {{ Form::checkbox('vivo', $saludHisfa->vivo, ($saludHisfa->vivo == 1 ? 'checked' : ''),['class' => 'form-check-input' . ($errors->has('vivo') ? ' is-invalid' : ''), 'id' => 'vivo']) }}
                    {!! $errors->first('vivo', '<div class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Fecha Muerte') }}
                @if ($saludHisfa->vivo === 1)
                    {{ Form::date('muerfec', $saludHisfa->muerfec, ['class' => 'form-control' . ($errors->has('muerfec') ? ' is-invalid' : ''), 'id' => 'muerfec', 'placeholder' => 'Muerfec']) }}
                @else
                    {{ Form::date('muerfec', $saludHisfa->muerfec, ['class' => 'form-control' . ($errors->has('muerfec') ? ' is-invalid' : ''), 'id' => 'muerfec', 'placeholder' => 'Muerfec', 'readonly' => 'true']) }}
                @endif
                {!! $errors->first('muerfec', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                <div class="form-check form-check-inline">
                    {{ Form::label('¿Este miembro de la familia convive actualmente con el Paciente?') }}
                    {{ Form::checkbox('habita', $saludHisfa->habita, ($saludHisfa->habita == 1 ? 'checked' : ''),['class' => 'form-check-input' . ($errors->has('habita') ? ' is-invalid' : ''), 'id' => 'habita']) }}
                    {!! $errors->first('habita', '<div class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('Observaciones') }}
                {{ Form::textarea('observ', $saludHisfa->observ, ['class' => 'form-control' . ($errors->has('observ') ? ' is-invalid' : ''), 'id' => 'observ', 'placeholder' => 'Observ', 'rows' => 4]) }}
                {!! $errors->first('observ', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>


        <div class="form-group col-md-12">
            {{ Form::hidden('idhisto', $saludHisfa->idhisto, ['class' => 'form-control' . ($errors->has('idhisto') ? ' is-invalid' : ''), 'id' => 'idhisto1', 'placeholder' => 'Idhisto']) }}
        </div>
        <div class="form-group col-md-3">
            {{ Form::hidden('fecha', $saludHisfa->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'id' => 'fecha1', 'placeholder' => 'Fecha']) }}
        </div>
        <div class="form-group col-md-3">
            {{ Form::hidden('idmedico', $saludHisfa->idmedico, ['class' => 'form-control' . ($errors->has('idmedico') ? ' is-invalid' : ''), 'id' => 'idmedico1', 'placeholder' => 'Idmedico']) }}
        </div>
        <div class="form-group col-md-3">
            {{ Form::hidden('idadmision', $saludHisfa->idadmision, ['class' => 'form-control' . ($errors->has('idadmision') ? ' is-invalid' : ''), 'id' => 'idadmision1', 'placeholder' => 'Idadmision']) }}
        </div>

<!--         <div class="form-group col-md-3">
            {{ Form::label('idesex') }}
            {{ Form::text('idesex', $saludHisfa->idesex, ['class' => 'form-control' . ($errors->has('idesex') ? ' is-invalid' : ''), 'placeholder' => 'Idesex']) }}
            {!! $errors->first('idesex', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('aporte') }}
            {{ Form::text('aporte', $saludHisfa->aporte, ['class' => 'form-control' . ($errors->has('aporte') ? ' is-invalid' : ''), 'placeholder' => 'Aporte']) }}
            {!! $errors->first('aporte', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('celular') }}
            {{ Form::text('celular', $saludHisfa->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('celular', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $saludHisfa->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('familia') }}
            {{ Form::text('familia', $saludHisfa->familia, ['class' => 'form-control' . ($errors->has('familia') ? ' is-invalid' : ''), 'placeholder' => 'Familia']) }}
            {!! $errors->first('familia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('redapoy') }}
            {{ Form::text('redapoy', $saludHisfa->redapoy, ['class' => 'form-control' . ($errors->has('redapoy') ? ' is-invalid' : ''), 'placeholder' => 'Redapoy']) }}
            {!! $errors->first('redapoy', '<div class="invalid-feedback">:message</p>') !!}
        </div> -->
    </div>
    <div class="box-footer mt20">
        @if ($modo)
            <button id="grabafami" type="submit" class="btn btn-primary">Grabar Miembro</button>
            <button id="nograbafami" type="submit" class="btn btn-secondary">Deshacer</button>
        @else
            <button id="graeditfami" type="submit" class="btn btn-primary">Modificar Miembro</button>
            <button id="nograeditfami" type="submit" class="btn btn-secondary">Deshacer</button>
        @endif
    </div>
</div>
