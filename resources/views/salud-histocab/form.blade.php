<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-row">
            <div class="form-group col-md-8">
                <h4>Información General</h4>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('no_identi') }}
                @if ($modo)
                    {{ Form::text('no_identi', $saludHistocab->no_identi, ['class' => 'form-control' . ($errors->has('no_identi') ? ' is-invalid' : ''), 'placeholder' => 'No Identi']) }}
                @else
                    {{ Form::text('no_identi', $saludHistocab->no_identi, ['class' => 'form-control' . ($errors->has('no_identi') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'No Identi']) }}
                @endif
                {!! $errors->first('no_identi', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Nombre 1') }}
                {{ Form::text('nombre1', $saludHistocab->nombre1, ['class' => 'form-control' . ($errors->has('nombre1') ? ' is-invalid' : ''), 'id' => 'nombre1', 'placeholder' => 'Nombre1']) }}
                {!! $errors->first('nombre1', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Nombre 2') }}
                {{ Form::text('nombre2', $saludHistocab->nombre2, ['class' => 'form-control' . ($errors->has('nombre2') ? ' is-invalid' : ''), 'id' => 'nombre2', 'placeholder' => 'Nombre2']) }}
                {!! $errors->first('nombre2', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Apellido 1') }}
                {{ Form::text('apelli1', $saludHistocab->apelli1, ['class' => 'form-control' . ($errors->has('apelli1') ? ' is-invalid' : ''), 'id' => 'apelli1', 'placeholder' => 'Apelli1']) }}
                {!! $errors->first('apelli1', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Apellido 2') }}
                {{ Form::text('apelli2', $saludHistocab->apelli2, ['class' => 'form-control' . ($errors->has('apelli2') ? ' is-invalid' : ''), 'id' => 'apelli2', 'placeholder' => 'Apelli2']) }}
                {!! $errors->first('apelli2', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Tipo identificación') }}
                {{ Form::select('tipo_iden', $tipoiden, $saludHistocab->tipo_iden, ['class' => 'form-control' . ($errors->has('tipo_iden') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Iden']) }}
                {!! $errors->first('tipo_iden', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Fecha Nacimiento') }}
                {{ Form::date('fechnac', $saludHistocab->fechnac, ['class' => 'form-control' . ($errors->has('fechnac') ? ' is-invalid' : ''), 'id'=>'fechnac', 'placeholder' => 'Fechnac']) }}
                {!! $errors->first('fechnac', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-1">
                {{ Form::label('Edad') }}
                {{ Form::number('edad', $saludHistocab->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'id'=>'edad', 'readonly' => 'true', 'placeholder' => 'Edad']) }}
                {!! $errors->first('edad', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Código Edad') }}
                {{ Form::select('cod_edad', $codedad, $saludHistocab->cod_edad, ['class' => 'form-control' . ($errors->has('cod_edad') ? ' is-invalid' : ''), 'id'=>'cod_edad', 'disabled' => 'true', 'placeholder' => 'Cod Edad']) }}
                {!! $errors->first('cod_edad', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('Ciudad Nacimiento') }}
                {{ Form::select('idciunac', $ciunac, $saludHistocab->idciunac, ['class' => 'form-control' . ($errors->has('idciunac') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad Nacimiento']) }}
                {!! $errors->first('idciunac', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('Nivel Escolar') }}
                {{ Form::select('escolar', $escolar, $saludHistocab->escolar, ['class' => 'form-control' . ($errors->has('escolar') ? ' is-invalid' : ''), 'placeholder' => 'Escolar']) }}
                {!! $errors->first('escolar', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('sexo') }}
                {{ Form::select('sexo', $sexo, $saludHistocab->sexo, ['class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
                {!! $errors->first('sexo', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('Ocupación') }}
                {{ Form::select('idocupac', $ocupacion, $saludHistocab->idocupac, ['class' => 'form-control' . ($errors->has('idocupac') ? ' is-invalid' : ''), 'placeholder' => 'Idocupac']) }}
                {!! $errors->first('idocupac', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Tipo Sangre') }}
                {{ Form::select('sangre', $sangre, $saludHistocab->sangre, ['class' => 'form-control' . ($errors->has('sangre') ? ' is-invalid' : ''), 'placeholder' => 'Sangre']) }}
                {!! $errors->first('sangre', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Estado Civil') }}
                {{ Form::select('estcivil', $estadocivil, $saludHistocab->estcivil, ['class' => 'form-control' . ($errors->has('estcivil') ? ' is-invalid' : ''), 'placeholder' => 'Estcivil']) }}
                {!! $errors->first('estcivil', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Tipo Afiliación') }}
                {{ Form::select('tipoafil', $tipoafil, $saludHistocab->tipoafil, ['class' => 'form-control' . ($errors->has('tipoafil') ? ' is-invalid' : ''), 'placeholder' => 'Tipoafil']) }}
                {!! $errors->first('tipoafil', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <h4>Información de Contacto</h4>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                {{ Form::label('Ciudad Domicilio') }}
                {{ Form::select('idciudad', $ciudom, $saludHistocab->idciudad, ['class' => 'form-control' . ($errors->has('idciudad') ? ' is-invalid' : ''), 'placeholder' => 'Idciudad']) }}
                {!! $errors->first('idciudad', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('Direccion') }}
                {{ Form::text('direccion', $saludHistocab->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
                {!! $errors->first('direccion', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Telefono') }}
                {{ Form::text('telefono', $saludHistocab->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
                {!! $errors->first('telefono', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Celular') }}
                {{ Form::text('celular', $saludHistocab->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
                {!! $errors->first('celular', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Zona') }}
                {{ Form::select('zona', $zona, $saludHistocab->zona, ['class' => 'form-control' . ($errors->has('zona') ? ' is-invalid' : ''), 'placeholder' => 'Zona']) }}
                {!! $errors->first('zona', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Estrato') }}
                {{ Form::select('idestrato', $estrato, $saludHistocab->idestrato, ['class' => 'form-control' . ($errors->has('idestrato') ? ' is-invalid' : ''), 'placeholder' => 'Idestrato']) }}
                {!! $errors->first('idestrato', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('E-mail') }}
                {{ Form::email('e_mail', $saludHistocab->e_mail, ['class' => 'form-control' . ($errors->has('e_mail') ? ' is-invalid' : ''), 'placeholder' => 'E Mail']) }}
                {!! $errors->first('e_mail', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Tipo Vinculación') }}
                {{ Form::select('idTipovinc', $tipovinc, $saludHistocab->idTipovinc, ['class' => 'form-control' . ($errors->has('idTipovinc') ? ' is-invalid' : ''), 'placeholder' => 'Idtipovinc']) }}
                {!! $errors->first('idTipovinc', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <h4>Información del Responsable</h4>
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-5">
                {{ Form::label('Nombre') }}
                {{ Form::text('nomresp', $saludHistocab->nomresp, ['class' => 'form-control' . ($errors->has('nomresp') ? ' is-invalid' : ''), 'placeholder' => 'Nomresp']) }}
                {!! $errors->first('nomresp', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('Parentesco') }}
                {{ Form::select('parenresp', $parenresp , $saludHistocab->parenresp, ['class' => 'form-control' . ($errors->has('parenresp') ? ' is-invalid' : ''), 'placeholder' => 'Parenresp']) }}
                {!! $errors->first('parenresp', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Telefono') }}
                {{ Form::text('telresp', $saludHistocab->telresp, ['class' => 'form-control' . ($errors->has('telresp') ? ' is-invalid' : ''), 'placeholder' => 'Telresp']) }}
                {!! $errors->first('telresp', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <h4>Datos de Cobertura</h4>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                {{ Form::label('Entidad') }}
                {{ Form::select('ideps', $eps, $saludHistocab->ideps, ['class' => 'form-control' . ($errors->has('ideps') ? ' is-invalid' : ''), 'id' => 'ideps', 'placeholder' => 'Ideps']) }}
                {!! $errors->first('ideps', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                <!-- {{ Form::label('nomhisto') }} -->
                {{ Form::hidden('nomhisto', $saludHistocab->nomhisto, ['class' => 'form-control' . ($errors->has('nomhisto') ? ' is-invalid' : ''),'id' => 'nomhisto', 'placeholder' => 'Nomhisto']) }}
                {!! $errors->first('nomhisto', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div>
            <div class='table-responsive'>
                <table class='table table-bordered table-hover'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Contrato</th>
                            <th>Plan</th>
                            <th>Nombre</th>
                            <th>Seleccionar</th>
                        </tr>
                    </thead>
                    <tbody id="display">

                    </tbody>
                </table>
            </div>
        </div>

<!--             <div class="form-group col-md-2">
                {{ Form::label('fechape') }}
                {{ Form::text('fechape', $saludHistocab->fechape, ['class' => 'form-control' . ($errors->has('fechape') ? ' is-invalid' : ''), 'placeholder' => 'Fechape']) }}
                {!! $errors->first('fechape', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('vivo') }}
                {{ Form::text('vivo', $saludHistocab->vivo, ['class' => 'form-control' . ($errors->has('vivo') ? ' is-invalid' : ''), 'placeholder' => 'Vivo']) }}
                {!! $errors->first('vivo', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('nomacom') }}
                {{ Form::text('nomacom', $saludHistocab->nomacom, ['class' => 'form-control' . ($errors->has('nomacom') ? ' is-invalid' : ''), 'placeholder' => 'Nomacom']) }}
                {!! $errors->first('nomacom', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('telacom') }}
                {{ Form::text('telacom', $saludHistocab->telacom, ['class' => 'form-control' . ($errors->has('telacom') ? ' is-invalid' : ''), 'placeholder' => 'Telacom']) }}
                {!! $errors->first('telacom', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('gae') }}
                {{ Form::text('gae', $saludHistocab->gae, ['class' => 'form-control' . ($errors->has('gae') ? ' is-invalid' : ''), 'placeholder' => 'Gae']) }}
                {!! $errors->first('gae', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('usuario') }}
                {{ Form::text('usuario', $saludHistocab->usuario, ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : ''), 'placeholder' => 'Usuario']) }}
                {!! $errors->first('usuario', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('no_idenant') }}
                {{ Form::text('no_idenant', $saludHistocab->no_idenant, ['class' => 'form-control' . ($errors->has('no_idenant') ? ' is-invalid' : ''), 'placeholder' => 'No Idenant']) }}
                {!! $errors->first('no_idenant', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('foto') }}
                {{ Form::text('foto', $saludHistocab->foto, ['class' => 'form-control' . ($errors->has('foto') ? ' is-invalid' : ''), 'placeholder' => 'Foto']) }}
                {!! $errors->first('foto', '<div class="invalid-feedback">:message</p>') !!}
            </div>
 -->
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" id="btn_grabar">Grabar</button>
        <a class="btn btn-secondary" href="{{ route('salud-histocab.index') }}"> Regresar</a>
    </div>
</div>
