<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('dcto') }}
            {{ Form::text('dcto', $saludAdmision->dcto, ['class' => 'form-control' . ($errors->has('dcto') ? ' is-invalid' : ''), 'placeholder' => 'Dcto']) }}
            {!! $errors->first('dcto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('serdoc') }}
            {{ Form::text('serdoc', $saludAdmision->serdoc, ['class' => 'form-control' . ($errors->has('serdoc') ? ' is-invalid' : ''), 'placeholder' => 'Serdoc']) }}
            {!! $errors->first('serdoc', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numadm') }}
            {{ Form::text('numadm', $saludAdmision->numadm, ['class' => 'form-control' . ($errors->has('numadm') ? ' is-invalid' : ''), 'placeholder' => 'Numadm']) }}
            {!! $errors->first('numadm', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idcontra') }}
            {{ Form::text('idcontra', $saludAdmision->idcontra, ['class' => 'form-control' . ($errors->has('idcontra') ? ' is-invalid' : ''), 'placeholder' => 'Idcontra']) }}
            {!! $errors->first('idcontra', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idhisto') }}
            {{ Form::text('idhisto', $saludAdmision->idhisto, ['class' => 'form-control' . ($errors->has('idhisto') ? ' is-invalid' : ''), 'placeholder' => 'Idhisto']) }}
            {!! $errors->first('idhisto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $saludAdmision->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idmedico') }}
            {{ Form::text('idmedico', $saludAdmision->idmedico, ['class' => 'form-control' . ($errors->has('idmedico') ? ' is-invalid' : ''), 'placeholder' => 'Idmedico']) }}
            {!! $errors->first('idmedico', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idtipovinc') }}
            {{ Form::text('idtipovinc', $saludAdmision->idtipovinc, ['class' => 'form-control' . ($errors->has('idtipovinc') ? ' is-invalid' : ''), 'placeholder' => 'Idtipovinc']) }}
            {!! $errors->first('idtipovinc', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('autoriz') }}
            {{ Form::text('autoriz', $saludAdmision->autoriz, ['class' => 'form-control' . ($errors->has('autoriz') ? ' is-invalid' : ''), 'placeholder' => 'Autoriz']) }}
            {!! $errors->first('autoriz', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codfase') }}
            {{ Form::text('codfase', $saludAdmision->codfase, ['class' => 'form-control' . ($errors->has('codfase') ? ' is-invalid' : ''), 'placeholder' => 'Codfase']) }}
            {!! $errors->first('codfase', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idcodaten') }}
            {{ Form::text('idcodaten', $saludAdmision->idcodaten, ['class' => 'form-control' . ($errors->has('idcodaten') ? ' is-invalid' : ''), 'placeholder' => 'Idcodaten']) }}
            {!! $errors->first('idcodaten', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idfactura') }}
            {{ Form::text('idfactura', $saludAdmision->idfactura, ['class' => 'form-control' . ($errors->has('idfactura') ? ' is-invalid' : ''), 'placeholder' => 'Idfactura']) }}
            {!! $errors->first('idfactura', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idcupspres') }}
            {{ Form::text('idcupspres', $saludAdmision->idcupspres, ['class' => 'form-control' . ($errors->has('idcupspres') ? ' is-invalid' : ''), 'placeholder' => 'Idcupspres']) }}
            {!! $errors->first('idcupspres', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('iddiagpres') }}
            {{ Form::text('iddiagpres', $saludAdmision->iddiagpres, ['class' => 'form-control' . ($errors->has('iddiagpres') ? ' is-invalid' : ''), 'placeholder' => 'Iddiagpres']) }}
            {!! $errors->first('iddiagpres', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ideps') }}
            {{ Form::text('ideps', $saludAdmision->ideps, ['class' => 'form-control' . ($errors->has('ideps') ? ' is-invalid' : ''), 'placeholder' => 'Ideps']) }}
            {!! $errors->first('ideps', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idcausaext') }}
            {{ Form::text('idcausaext', $saludAdmision->idcausaext, ['class' => 'form-control' . ($errors->has('idcausaext') ? ' is-invalid' : ''), 'placeholder' => 'Idcausaext']) }}
            {!! $errors->first('idcausaext', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nopoliza') }}
            {{ Form::text('nopoliza', $saludAdmision->nopoliza, ['class' => 'form-control' . ($errors->has('nopoliza') ? ' is-invalid' : ''), 'placeholder' => 'Nopoliza']) }}
            {!! $errors->first('nopoliza', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edad') }}
            {{ Form::text('edad', $saludAdmision->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
            {!! $errors->first('edad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cod_edad') }}
            {{ Form::text('cod_edad', $saludAdmision->cod_edad, ['class' => 'form-control' . ($errors->has('cod_edad') ? ' is-invalid' : ''), 'placeholder' => 'Cod Edad']) }}
            {!! $errors->first('cod_edad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sexo') }}
            {{ Form::text('sexo', $saludAdmision->sexo, ['class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
            {!! $errors->first('sexo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario') }}
            {{ Form::text('usuario', $saludAdmision->usuario, ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : ''), 'placeholder' => 'Usuario']) }}
            {!! $errors->first('usuario', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idfinalidad') }}
            {{ Form::text('idfinalidad', $saludAdmision->idfinalidad, ['class' => 'form-control' . ($errors->has('idfinalidad') ? ' is-invalid' : ''), 'placeholder' => 'Idfinalidad']) }}
            {!! $errors->first('idfinalidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idegreso') }}
            {{ Form::text('idegreso', $saludAdmision->idegreso, ['class' => 'form-control' . ($errors->has('idegreso') ? ' is-invalid' : ''), 'placeholder' => 'Idegreso']) }}
            {!! $errors->first('idegreso', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('iddiaging') }}
            {{ Form::text('iddiaging', $saludAdmision->iddiaging, ['class' => 'form-control' . ($errors->has('iddiaging') ? ' is-invalid' : ''), 'placeholder' => 'Iddiaging']) }}
            {!! $errors->first('iddiaging', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idcama') }}
            {{ Form::text('idcama', $saludAdmision->idcama, ['class' => 'form-control' . ($errors->has('idcama') ? ' is-invalid' : ''), 'placeholder' => 'Idcama']) }}
            {!! $errors->first('idcama', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anula') }}
            {{ Form::text('anula', $saludAdmision->anula, ['class' => 'form-control' . ($errors->has('anula') ? ' is-invalid' : ''), 'placeholder' => 'Anula']) }}
            {!! $errors->first('anula', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('copago') }}
            {{ Form::text('copago', $saludAdmision->copago, ['class' => 'form-control' . ($errors->has('copago') ? ' is-invalid' : ''), 'placeholder' => 'Copago']) }}
            {!! $errors->first('copago', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('consant') }}
            {{ Form::text('consant', $saludAdmision->consant, ['class' => 'form-control' . ($errors->has('consant') ? ' is-invalid' : ''), 'placeholder' => 'Consant']) }}
            {!! $errors->first('consant', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('consact') }}
            {{ Form::text('consact', $saludAdmision->consact, ['class' => 'form-control' . ($errors->has('consact') ? ' is-invalid' : ''), 'placeholder' => 'Consact']) }}
            {!! $errors->first('consact', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cuotamod') }}
            {{ Form::text('cuotamod', $saludAdmision->cuotamod, ['class' => 'form-control' . ($errors->has('cuotamod') ? ' is-invalid' : ''), 'placeholder' => 'Cuotamod']) }}
            {!! $errors->first('cuotamod', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('proyec') }}
            {{ Form::text('proyec', $saludAdmision->proyec, ['class' => 'form-control' . ($errors->has('proyec') ? ' is-invalid' : ''), 'placeholder' => 'Proyec']) }}
            {!! $errors->first('proyec', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ideps1') }}
            {{ Form::text('ideps1', $saludAdmision->ideps1, ['class' => 'form-control' . ($errors->has('ideps1') ? ' is-invalid' : ''), 'placeholder' => 'Ideps1']) }}
            {!! $errors->first('ideps1', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('notas') }}
            {{ Form::text('notas', $saludAdmision->notas, ['class' => 'form-control' . ($errors->has('notas') ? ' is-invalid' : ''), 'placeholder' => 'Notas']) }}
            {!! $errors->first('notas', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('admext') }}
            {{ Form::text('admext', $saludAdmision->admext, ['class' => 'form-control' . ($errors->has('admext') ? ' is-invalid' : ''), 'placeholder' => 'Admext']) }}
            {!! $errors->first('admext', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idmedsoli') }}
            {{ Form::text('idmedsoli', $saludAdmision->idmedsoli, ['class' => 'form-control' . ($errors->has('idmedsoli') ? ' is-invalid' : ''), 'placeholder' => 'Idmedsoli']) }}
            {!! $errors->first('idmedsoli', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechsoli') }}
            {{ Form::text('fechsoli', $saludAdmision->fechsoli, ['class' => 'form-control' . ($errors->has('fechsoli') ? ' is-invalid' : ''), 'placeholder' => 'Fechsoli']) }}
            {!! $errors->first('fechsoli', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idorigen') }}
            {{ Form::text('idorigen', $saludAdmision->idorigen, ['class' => 'form-control' . ($errors->has('idorigen') ? ' is-invalid' : ''), 'placeholder' => 'Idorigen']) }}
            {!! $errors->first('idorigen', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('c19fiebre') }}
            {{ Form::text('c19fiebre', $saludAdmision->c19fiebre, ['class' => 'form-control' . ($errors->has('c19fiebre') ? ' is-invalid' : ''), 'placeholder' => 'C19Fiebre']) }}
            {!! $errors->first('c19fiebre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('c19tos') }}
            {{ Form::text('c19tos', $saludAdmision->c19tos, ['class' => 'form-control' . ($errors->has('c19tos') ? ' is-invalid' : ''), 'placeholder' => 'C19Tos']) }}
            {!! $errors->first('c19tos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('c19difres') }}
            {{ Form::text('c19difres', $saludAdmision->c19difres, ['class' => 'form-control' . ($errors->has('c19difres') ? ' is-invalid' : ''), 'placeholder' => 'C19Difres']) }}
            {!! $errors->first('c19difres', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('c19viaje') }}
            {{ Form::text('c19viaje', $saludAdmision->c19viaje, ['class' => 'form-control' . ($errors->has('c19viaje') ? ' is-invalid' : ''), 'placeholder' => 'C19Viaje']) }}
            {!! $errors->first('c19viaje', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('c19person') }}
            {{ Form::text('c19person', $saludAdmision->c19person, ['class' => 'form-control' . ($errors->has('c19person') ? ' is-invalid' : ''), 'placeholder' => 'C19Person']) }}
            {!! $errors->first('c19person', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('c19confir') }}
            {{ Form::text('c19confir', $saludAdmision->c19confir, ['class' => 'form-control' . ($errors->has('c19confir') ? ' is-invalid' : ''), 'placeholder' => 'C19Confir']) }}
            {!! $errors->first('c19confir', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('c19trabaj') }}
            {{ Form::text('c19trabaj', $saludAdmision->c19trabaj, ['class' => 'form-control' . ($errors->has('c19trabaj') ? ' is-invalid' : ''), 'placeholder' => 'C19Trabaj']) }}
            {!! $errors->first('c19trabaj', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipoest') }}
            {{ Form::text('tipoest', $saludAdmision->tipoest, ['class' => 'form-control' . ($errors->has('tipoest') ? ' is-invalid' : ''), 'placeholder' => 'Tipoest']) }}
            {!! $errors->first('tipoest', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>