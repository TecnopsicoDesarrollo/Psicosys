<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Número Identificación') }}
                @if ($modo)
                    {{ Form::text('no_identi', $admonCliente->no_identi, ['class' => 'form-control' . ($errors->has('no_identi') ? ' is-invalid' : ''), 'placeholder' => 'No Identi']) }}
                @else
                    {{ Form::text('no_identi', $admonCliente->no_identi, ['class' => 'form-control' . ($errors->has('no_identi') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'No Identi']) }}
                @endif
                {!! $errors->first('no_identi', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Digito Verificación') }}
                @if ($modo)
                    {{ Form::text('digiveri', $admonCliente->digiveri, ['class' => 'form-control' . ($errors->has('digiveri') ? ' is-invalid' : ''), 'placeholder' => 'Digiveri']) }}
                @else
                {{ Form::text('digiveri', $admonCliente->digiveri, ['class' => 'form-control' . ($errors->has('digiveri') ? ' is-invalid' : ''), 'readonly' => 'true', 'placeholder' => 'Digiveri']) }}
                @endif
                {!! $errors->first('digiveri', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Tipo Identificación') }}
                {{ Form::select('tipo_iden', $tipoiden ,$admonCliente->tipo_iden, ['class' => 'form-control' . ($errors->has('tipo_iden') ? ' is-invalid' : ''), 'id'=>'tipo_iden', 'placeholder' => 'Tipo Iden']) }}
                {!! $errors->first('tipo_iden', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('Nombre del Cliente') }}
                {{ Form::text('nomclien', $admonCliente->nomclien, ['class' => 'form-control' . ($errors->has('nomclien') ? ' is-invalid' : ''), 'placeholder' => 'Nomclien']) }}
                {!! $errors->first('nomclien', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Nombre 1') }}
                {{ Form::text('nombre1', $admonCliente->nombre1, ['class' => 'form-control' . ($errors->has('nombre1') ? ' is-invalid' : ''), 'id'=>'nombre1', 'disabled', 'placeholder' => 'Nombre 1']) }}
                {!! $errors->first('nombre1', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Nombre 2') }}
                {{ Form::text('nombre2', $admonCliente->nombre2, ['class' => 'form-control' . ($errors->has('nombre2') ? ' is-invalid' : ''), 'id'=>'nombre2', 'disabled', 'placeholder' => 'Nombre 2']) }}
                {!! $errors->first('nombre2', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Apellido 1') }}
                {{ Form::text('apelli1', $admonCliente->apelli1, ['class' => 'form-control' . ($errors->has('apelli1') ? ' is-invalid' : ''), 'id'=>'apelli1', 'disabled', 'placeholder' => 'Apelli1']) }}
                {!! $errors->first('apelli1', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Apellido 2') }}
                {{ Form::text('apelli2', $admonCliente->apelli2, ['class' => 'form-control' . ($errors->has('apelli2') ? ' is-invalid' : ''), 'id'=>'apelli2', 'disabled', 'placeholder' => 'Apelli2']) }}
                {!! $errors->first('apelli2', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-4">
                <div class="form-check form-check-inline">
                    {{ Form::label('¿Auto retenedor?') }}
                    {{ Form::checkbox('autoret', $admonCliente->autoret, ($admonCliente->autoret == 1 ? 'checked' : ''), ['class' => 'form-check-input' . ($errors->has('autoret') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('autoret', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="form-check form-check-inline">
                    {{ Form::label('¿Retiene I.V.A.?') }}
                    {{ Form::checkbox('reteiva', $admonCliente->reteiva, ($admonCliente->reteiva == 1 ? 'checked' : ''), ['class' => 'form-check-input' . ($errors->has('reteiva') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('reteiva', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="form-check form-check-inline">
                    {{ Form::label('¿Retiene Fuente?') }}
                    {{ Form::checkbox('rtefte', $admonCliente->rtefte, ($admonCliente->rtefte == 1 ? 'checked' : ''), ['class' => 'form-check-input' . ($errors->has('rtefte') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('rtefte', '<div class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Tipo Persona') }}
                {{ Form::select('tipoper', $tipopersona , $admonCliente->tipoper, ['class' => 'form-control' . ($errors->has('tipoper') ? ' is-invalid' : ''), 'placeholder' => 'Tipoper']) }}
                {!! $errors->first('tipoper', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('Regimen') }}
                {{ Form::select('regimen', $regimen , $admonCliente->regimen, ['class' => 'form-control' . ($errors->has('regimen') ? ' is-invalid' : ''), 'placeholder' => 'Regimen']) }}
                {!! $errors->first('regimen', '<div class="invalid-feedback">:message</p>') !!}
            </div>
<!--             <div class="form-group col-md-6">
                {{ Form::label('Actividad Económica') }}
                {{ Form::text('idacteco', $admonCliente->idacteco, ['class' => 'form-control' . ($errors->has('idacteco') ? ' is-invalid' : ''), 'placeholder' => 'Idacteco']) }}
                {!! $errors->first('idacteco', '<div class="invalid-feedback">:message</p>') !!}
            </div> -->
            <div class="form-group col-md-1">
                {{ Form::label('Autorenta') }}
                {{ Form::text('porrte', $admonCliente->porrte, ['class' => 'form-control' . ($errors->has('porrte') ? ' is-invalid' : ''), 'placeholder' => 'Porrte']) }}
                {!! $errors->first('porrte', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-1">
            </div>
            <div class="col-md-4">
                <div class="form-check form-check-inline">
                    {{ Form::label('Cliente -') }}
                    {{ Form::checkbox('cliente', $admonCliente->cliente, ($admonCliente->cliente == 1 ? 'checked' : ''), ['class' => 'form-check-input' . ($errors->has('cliente') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('cliente', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="form-check form-check-inline">
                    {{ Form::label('Proveedor -') }}
                    {{ Form::checkbox('provee', $admonCliente->provee, ($admonCliente->provee == 1 ? 'checked' : ''), ['class' => 'form-check-input' . ($errors->has('provee') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('provee', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="form-check form-check-inline">
                    {{ Form::label('Otro -') }}
                    {{ Form::checkbox('otro', $admonCliente->otro, ($admonCliente->otro == 1 ? 'checked' : ''), ['class' => 'form-check-input' . ($errors->has('otro') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('otro', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="form-check form-check-inline">
                    {{ Form::label('Es EPS -') }}
                    {{ Form::checkbox('eseps', $admonCliente->eseps, ($admonCliente->eseps == 1 ? 'checked' : ''), ['class' => 'form-check-input' . ($errors->has('eseps') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('eseps', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="form-check form-check-inline">
                    {{ Form::label('Cliente Habitual -') }}
                    {{ Form::checkbox('escree', $admonCliente->escree, ($admonCliente->escree == 1 ? 'checked' : ''), ['class' => 'form-check-input' . ($errors->has('escree') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('escree', '<div class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                {{ Form::label('Ciudad') }}
                {{ Form::select('idCiudad', $municip, $admonCliente->idCiudad, ['class' => 'form-control' . ($errors->has('idCiudad') ? ' is-invalid' : ''), 'placeholder' => 'Idciudad']) }}
                {!! $errors->first('idCiudad', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-5">
                {{ Form::label('Direccion') }}
                {{ Form::text('direccion', $admonCliente->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
                {!! $errors->first('direccion', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Telefono') }}
                {{ Form::text('telefono', $admonCliente->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
                {!! $errors->first('telefono', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('Celular') }}
                {{ Form::text('celular', $admonCliente->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
                {!! $errors->first('celular', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('zona') }}
                {{ Form::select('zona', $zona , $admonCliente->zona, ['class' => 'form-control' . ($errors->has('zona') ? ' is-invalid' : ''), 'placeholder' => 'Zona']) }}
                {!! $errors->first('zona', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('e_mail') }}
                {{ Form::text('e_mail', $admonCliente->e_mail, ['class' => 'form-control' . ($errors->has('e_mail') ? ' is-invalid' : ''), 'placeholder' => 'E Mail']) }}
                {!! $errors->first('e_mail', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>

<!--         <div class="form-group">
            {{ Form::label('internor') }}
            {{ Form::text('internor', $admonCliente->internor, ['class' => 'form-control' . ($errors->has('internor') ? ' is-invalid' : ''), 'placeholder' => 'Internor']) }}
            {!! $errors->first('internor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('intermora') }}
            {{ Form::text('intermora', $admonCliente->intermora, ['class' => 'form-control' . ($errors->has('intermora') ? ' is-invalid' : ''), 'placeholder' => 'Intermora']) }}
            {!! $errors->first('intermora', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_ideant') }}
            {{ Form::text('no_ideant', $admonCliente->no_ideant, ['class' => 'form-control' . ($errors->has('no_ideant') ? ' is-invalid' : ''), 'placeholder' => 'No Ideant']) }}
            {!! $errors->first('no_ideant', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEps') }}
            {{ Form::text('idEps', $admonCliente->idEps, ['class' => 'form-control' . ($errors->has('idEps') ? ' is-invalid' : ''), 'placeholder' => 'Ideps']) }}
            {!! $errors->first('idEps', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario') }}
            {{ Form::text('usuario', $admonCliente->usuario, ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : ''), 'placeholder' => 'Usuario']) }}
            {!! $errors->first('usuario', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('diascre') }}
            {{ Form::text('diascre', $admonCliente->diascre, ['class' => 'form-control' . ($errors->has('diascre') ? ' is-invalid' : ''), 'placeholder' => 'Diascre']) }}
            {!! $errors->first('diascre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cupocxc') }}
            {{ Form::text('cupocxc', $admonCliente->cupocxc, ['class' => 'form-control' . ($errors->has('cupocxc') ? ' is-invalid' : ''), 'placeholder' => 'Cupocxc']) }}
            {!! $errors->first('cupocxc', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rutarut') }}
            {{ Form::text('rutarut', $admonCliente->rutarut, ['class' => 'form-control' . ($errors->has('rutarut') ? ' is-invalid' : ''), 'placeholder' => 'Rutarut']) }}
            {!! $errors->first('rutarut', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nomcial') }}
            {{ Form::text('nomcial', $admonCliente->nomcial, ['class' => 'form-control' . ($errors->has('nomcial') ? ' is-invalid' : ''), 'placeholder' => 'Nomcial']) }}
            {!! $errors->first('nomcial', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nomatri') }}
            {{ Form::text('nomatri', $admonCliente->nomatri, ['class' => 'form-control' . ($errors->has('nomatri') ? ' is-invalid' : ''), 'placeholder' => 'Nomatri']) }}
            {!! $errors->first('nomatri', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idoblig') }}
            {{ Form::text('idoblig', $admonCliente->idoblig, ['class' => 'form-control' . ($errors->has('idoblig') ? ' is-invalid' : ''), 'placeholder' => 'Idoblig']) }}
            {!! $errors->first('idoblig', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idtipoimp') }}
            {{ Form::text('idtipoimp', $admonCliente->idtipoimp, ['class' => 'form-control' . ($errors->has('idtipoimp') ? ' is-invalid' : ''), 'placeholder' => 'Idtipoimp']) }}
            {!! $errors->first('idtipoimp', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('regitrib') }}
            {{ Form::text('regitrib', $admonCliente->regitrib, ['class' => 'form-control' . ($errors->has('regitrib') ? ' is-invalid' : ''), 'placeholder' => 'Regitrib']) }}
            {!! $errors->first('regitrib', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idpostal') }}
            {{ Form::text('idpostal', $admonCliente->idpostal, ['class' => 'form-control' . ($errors->has('idpostal') ? ' is-invalid' : ''), 'placeholder' => 'Idpostal']) }}
            {!! $errors->first('idpostal', '<div class="invalid-feedback">:message</p>') !!}
        </div>
 -->

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Grabar</button>
        <a class="btn btn-secondary" href="{{ route('admon-cliente.index') }}"> Regresar</a>
    </div>

</div>


