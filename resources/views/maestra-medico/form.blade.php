<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-row">
            <div class="form-group col-md-8">
                <h4>Información General</h4>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('codigo') }}
                @if ($modo)
                    {{ Form::text('codigo', $maestraMedico->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
                @else
                    {{ Form::text('codigo', $maestraMedico->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'Codigo']) }}
                @endif
                {!! $errors->first('codigo', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('Tipo identificación') }}
                {{ Form::select('tipodocu', $tipoiden, $maestraMedico->tipodocu, ['class' => 'form-control' . ($errors->has('tipodocu') ? ' is-invalid' : ''), 'placeholder' => 'Tipodocu']) }}
                {!! $errors->first('tipodocu', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('No. Identificación') }}
                {{ Form::text('No_identi', $maestraMedico->No_identi, ['class' => 'form-control' . ($errors->has('No_identi') ? ' is-invalid' : ''), 'placeholder' => 'No Identi']) }}
                {!! $errors->first('No_identi', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-5">
                {{ Form::label('Nombre') }}
                {{ Form::text('nombre', $maestraMedico->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Fecha Nacimiento') }}
                {{ Form::date('fech_nac', $maestraMedico->fech_nac, ['class' => 'form-control' . ($errors->has('fech_nac') ? ' is-invalid' : ''), 'id' => 'fechnac', 'placeholder' => 'Fech Nac']) }}
                {!! $errors->first('fech_nac', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-1">
                {{ Form::label('Edad') }}
                {{ Form::text('edad', $maestraMedico->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'id' => 'edad', 'readonly' => 'true', 'placeholder' => 'Edad']) }}
                {!! $errors->first('edad', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Codigo Edad') }}
                {{ Form::select('cod_edad', $codedad, $maestraMedico->cod_edad, ['class' => 'form-control' . ($errors->has('cod_edad') ? ' is-invalid' : ''), 'id' => 'cod_edad', 'disabled' => 'true', 'placeholder' => 'Cod Edad']) }}
                {!! $errors->first('cod_edad', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('Ciudad Nacimiento') }}
                {{ Form::select('idciunac', $ciunac, $maestraMedico->idciunac, ['class' => 'form-control' . ($errors->has('idciunac') ? ' is-invalid' : ''), 'placeholder' => 'Idciunac']) }}
                {!! $errors->first('idciunac', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('Departamento') }}
                {{ Form::select('dptonac', $deparnac, $maestraMedico->dptonac, ['class' => 'form-control' . ($errors->has('dptonac') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'Dptonac']) }}
                {!! $errors->first('dptonac', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Sexo') }}
                {{ Form::select('sexo', $sexo, $maestraMedico->sexo, ['class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
                {!! $errors->first('sexo', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Tipo Sangre') }}
                {{ Form::text('sangre', $maestraMedico->sangre, ['class' => 'form-control' . ($errors->has('sangre') ? ' is-invalid' : ''), 'placeholder' => 'Sangre']) }}
                {!! $errors->first('sangre', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Usuario') }}
                {{ Form::text('idUser', $maestraMedico->idUser, ['class' => 'form-control' . ($errors->has('idUser') ? ' is-invalid' : ''), 'placeholder' => 'Iduser']) }}
                {!! $errors->first('idUser', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('Area') }}
                {{ Form::select('area', $area, $maestraMedico->area, ['class' => 'form-control' . ($errors->has('area') ? ' is-invalid' : ''), 'placeholder' => 'Area']) }}
                {!! $errors->first('area', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                <div class="form-check form-check-inline">
                    {{ Form::label('¿Es Activo? :') }}
                    {{ Form::checkbox('activo', $maestraMedico->activo, ($maestraMedico->activo == 1 ? 'checked' : ''),  ['class' => 'form-check-input' . ($errors->has('activo') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('activo', '<div class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <h4>Datos del Domicilio </h4>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                {{ Form::label('Ciudad') }}
                {{ Form::select('idciudad', $ciudom, $maestraMedico->idciudad, ['class' => 'form-control' . ($errors->has('idciudad') ? ' is-invalid' : ''), 'placeholder' => 'Idciudad']) }}
                {!! $errors->first('idciudad', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('Departamento') }}
                {{ Form::select('dptores', $depardom, $maestraMedico->dptores, ['class' => 'form-control' . ($errors->has('dptores') ? ' is-invalid' : ''), 'placeholder' => 'Dptores']) }}
                {!! $errors->first('dptores', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('Direccion') }}
                {{ Form::text('direccion', $maestraMedico->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
                {!! $errors->first('direccion', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Telefono') }}
                {{ Form::text('telefono', $maestraMedico->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
                {!! $errors->first('telefono', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Celular') }}
                {{ Form::text('celular', $maestraMedico->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
                {!! $errors->first('celular', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('Correo Electrónico') }}
                {{ Form::email('mail', $maestraMedico->mail, ['class' => 'form-control' . ($errors->has('mail') ? ' is-invalid' : ''), 'placeholder' => 'Mail']) }}
                {!! $errors->first('mail', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('Especialidad') }}
                {{ Form::select('idEspecial', $especial, $maestraMedico->idEspecial, ['class' => 'form-control' . ($errors->has('idEspecial') ? ' is-invalid' : ''), 'placeholder' => 'Idespecial']) }}
                {!! $errors->first('idEspecial', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Tarjeta Profesional') }}
                {{ Form::text('tarjprof', $maestraMedico->tarjprof, ['class' => 'form-control' . ($errors->has('tarjprof') ? ' is-invalid' : ''), 'placeholder' => 'Tarjprof']) }}
                {!! $errors->first('tarjprof', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <h4>Datos de Atencion </h4>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Tiempo Consulta') }}
                {{ Form::number('intervate', $maestraMedico->intervate, ['class' => 'form-control' . ($errors->has('intervate') ? ' is-invalid' : ''), 'placeholder' => 'Duración Minutos']) }}
                {!! $errors->first('intervate', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-5">
                {{ Form::label('Archivo Firma') }}
                {{ Form::text('firma', $maestraMedico->firma, ['class' => 'form-control' . ($errors->has('firma') ? ' is-invalid' : ''), 'placeholder' => 'Firma']) }}
                {!! $errors->first('firma', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-5">
                {{ Form::label('Archivo Foto') }}
                {{ Form::text('foto', $maestraMedico->foto, ['class' => 'form-control' . ($errors->has('foto') ? ' is-invalid' : ''), 'placeholder' => 'Foto']) }}
                {!! $errors->first('foto', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Salario Basico') }}
                {{ Form::number('salbasico', $maestraMedico->salbasico, ['class' => 'form-control' . ($errors->has('salbasico') ? ' is-invalid' : ''), 'placeholder' => 'Salbasico', 'step' => 0.01]) }}
                {!! $errors->first('salbasico', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('Entidad Salud') }}
                {{ Form::select('idSalud', $salud, $maestraMedico->idSalud, ['class' => 'form-control' . ($errors->has('idSalud') ? ' is-invalid' : ''), 'placeholder' => 'Idsalud']) }}
                {!! $errors->first('idSalud', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('Entidad Pension') }}
                {{ Form::select('idPension', $pension, $maestraMedico->idPension, ['class' => 'form-control' . ($errors->has('idPension') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'Idpension']) }}
                {!! $errors->first('idPension', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" id="btn_grabar">Grabar</button>
        <a class="btn btn-secondary" href="{{ route('maestra-medico.index') }}"> Regresar</a>
    </div>
</div>
