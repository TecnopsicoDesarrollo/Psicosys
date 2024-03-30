<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('Fecha de Registro') }}
                {{ Form::date('fecha', $fechahoy, $saludHisgeneral->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'id' => 'hoy1', 'placeholder' => 'Fecha', 'readonly' => 'true']) }}
                {!! $errors->first('fecha', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('Psicólogo') }}
                {{ Form::select('idmedico', $medico, $saludHisgeneral->idmedico, ['class' => 'form-control' . ($errors->has('idmedico') ? ' is-invalid' : ''), 'id' => 'idmedico', 'placeholder' => 'Idmedico']) }}
                {!! $errors->first('idmedico', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('No Historia') }}
                <input type="text" name="numhisto" id="numhisto" class="form-control">
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('Nombre Completo') }}
                <input type="text" name="nombre" id="nombre" class="form-control" readonly>
            </div>
            <div id="content" class="col-md-12">

            </div>
                {{ Form::hidden('idhisto', $saludHisgeneral->idhisto, ['class' => 'form-control' . ($errors->has('idhisto') ? ' is-invalid' : ''), 'id' => 'idhisto', 'placeholder' => 'Numero Historia']) }}
        </div>

        <div class="container">
            <div class="form-row">
                <div class="form-group col-md-9">
                    <h2>Datos Registro de Salud Mental</h2>
                </div>
                <div class="form-group col-md-3">
                    <button type="submit" class="btn btn-primary">Grabar Historia</button>
                    <a class="btn btn-secondary" href="{{ route('salud-hisgeneral.index') }}">Salir de Historia</a>
                </div>
            </div>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Datos Personales</a></li>
                <li><a data-toggle="tab" href="#menu1">Registro Historia</a></li>
                <li><a data-toggle="tab" href="#menu6">Familiograma</a></li>
                <li><a data-toggle="tab" href="#menu2">Diagnosticos</a></li>
                <li><a data-toggle="tab" href="#menu3">Evaluacion riesgo</a></li>
                <li><a data-toggle="tab" href="#menu4">Examen Fisico</a></li>
                <li><a data-toggle="tab" href="#menu5">Evaluacion por areas</a></li>

            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            {{ Form::label('Sexo') }}
                            {{ Form::select('sexopac', $sexo, 'sexopac', ['class' => 'form-control' . ($errors->has('sexopac') ? ' is-invalid' : ''), 'id' => 'sexopac', 'placeholder' => 'Sexo', 'disabled' => 'true']) }}
                            {!! $errors->first('sexopac', '<div class="invalid-feedback">:message</p>') !!}
                        </div>
                        <div class="form-group col-md-3">
                            {{ Form::label('Fecha Nacimiento') }}
                            <input type="date" name="fechapac" id="fechapac" class="form-control" value="" readonly="true">
                        </div>
                        <div class="form-group col-md-1">
                            {{ Form::label('Edad') }}
                            {{ Form::number('edad', null, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'id'=>'edad', 'readonly' => 'true', 'placeholder' => 'Edad']) }}
                            {!! $errors->first('edad', '<div class="invalid-feedback">:message</p>') !!}
                        </div>
                        <div class="form-group col-md-2">
                            {{ Form::label('Código Edad') }}
                            {{ Form::select('cod_edad', $codedad, 'cod_edad', ['class' => 'form-control' . ($errors->has('cod_edad') ? ' is-invalid' : ''), 'id'=>'cod_edad', 'disabled' => 'true', 'placeholder' => 'Cod Edad']) }}
                            {!! $errors->first('cod_edad', '<div class="invalid-feedback">:message</p>') !!}
                        </div>
                        <div class="form-group col-md-4">
                            {{ Form::label('Entidad') }}
                            {{ Form::select('eps', $eps, 'eps', ['class' => 'form-control' . ($errors->has('eps') ? ' is-invalid' : ''), 'id' => 'eps', 'placeholder' => 'Eps', 'disabled' => 'true']) }}
                            {!! $errors->first('eps', '<div class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            {{ Form::label('Estado Civil') }}
                            {{ Form::select('estcivil', $estadocivil, 'estcivil', ['class' => 'form-control' . ($errors->has('ciudom') ? ' is-invalid' : ''), 'id' => 'civilpac', 'placeholder' => 'Domicilio', 'disabled' => 'true']) }}
                            {!! $errors->first('estcivil', '<div class="invalid-feedback">:message</p>') !!}
                        </div>
                        <div class="form-group col-md-4">
                            {{ Form::label('Ciudad Domicilio') }}
                            {{ Form::select('ciudom', $ciudom, 'ciudom', ['class' => 'form-control' . ($errors->has('ciudom') ? ' is-invalid' : ''), 'id' => 'ciudom', 'placeholder' => 'Domicilio', 'disabled' => 'true']) }}
                            {!! $errors->first('ciudom', '<div class="invalid-feedback">:message</p>') !!}
                        </div>
                        <div class="form-group col-md-4">
                            {{ Form::label('Direccion') }}
                            <input type="text" name="direcpac" id="direcpac" class="form-control" readonly="true">
                        </div>
                        <div class="form-group col-md-2">
                            {{ Form::label('Celular') }}
                            <input type="text" name="celupac" id="celupac" class="form-control" readonly="true">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            {{ Form::label('Correo Electronico') }}
                            <input type="text" name="mailpac" id="mailpac" class="form-control" readonly="true">
                        </div>
                        <div class="form-group col-md-4">
                            {{ Form::label('Ocupación') }}
                            {{ Form::select('ocupac', $ocupacion, 'ocupac', ['class' => 'form-control' . ($errors->has('ciudom') ? ' is-invalid' : ''), 'id' => 'ocupac', 'placeholder' => 'Ocupacion', 'disabled' => 'true']) }}
                            {!! $errors->first('ocupac', '<div class="invalid-feedback">:message</p>') !!}
                        </div>
                        <div class="form-group col-md-4">
                            {{ Form::label('Escolaridad') }}
                            {{ Form::select('escolar', $escolar, 'escolar', ['class' => 'form-control' . ($errors->has('ciudom') ? ' is-invalid' : ''), 'id' => 'escolar', 'placeholder' => 'Ocupacion', 'disabled' => 'true']) }}
                            {!! $errors->first('escolar', '<div class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            {{ Form::label('No Admision') }}
                            {{ Form::text('idadmision', $saludHisgeneral->idadmision, ['class' => 'form-control' . ($errors->has('idadmision') ? ' is-invalid' : ''), 'id' => 'idadmision', 'placeholder' => 'Idadmision', 'disabled' => 'true']) }}
                            {!! $errors->first('idadmision', '<div class="invalid-feedback">:message</p>') !!}
                        </div>
                        <div class="form-group col-md-4">
                            {{ Form::label('Area Atención') }}
                            {{ Form::text('idcodaten', $saludHisgeneral->idcodaten, ['class' => 'form-control' . ($errors->has('idcodaten') ? ' is-invalid' : ''), 'placeholder' => 'Idcodaten', 'disabled' => 'true']) }}
                            {!! $errors->first('idcodaten', '<div class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                </div>

                <div id="menu1" class="tab-pane fade">
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <div class='table-responsive'>
                                <table id="display" class='table table-bordered table-hover'>
                                    <thead class="bg-info text-white">
                                        <tr>
                                            <th>ITEM DE HISTORIA</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataestru as $data)
                                        <tr>
                                            <td>{{ $data->elemento }}</td>
                                            <td>
                                                <form>
                                                    <a id="conitem" class="btn btn-success"><i class="fa fa-fw fa-eye"></i>Consultar</a>
                                                    <a id="explica" class="btn btn-info"><i class="fa fa-fw fa-edit"></i>Explicar</a>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <a id="conhisgen" class="btn btn-secondary">Consultar Historia</a>
                                </div>
                                <div class="form-group col-md-4">
                                    <button id="conhiseve" class="btn btn-secondary">Esta Consulta</button>
                                </div>
                                <div id="consulhis" class="col-md-12">

                                </div>
                            </div>
                            <div class="form-row">
                                <div id="consulhis" class="col-md-12">

                                </div>

                                <div class="form-group col-md-12">
                                    {{ Form::label('Datos de Historia') }}
                                    {{ Form::textarea('datohistoria', $datohistoria, ['class' => 'my-editor form-control' . ($errors->has('datohistoria') ? ' is-invalid' : ''), 'id' => 'datohistoria', 'rows' => 25]) }}
                                    {!! $errors->first('datohistoria', '<div class="invalid-feedback">:message</p>') !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-7">
                            @foreach ($dataestru as $data)
                                @php
                                    $campo = '$saludHisgeneral->'.strtolower($data->cm_nom);
                                    $name = strtolower($data->cm_nom);
                                @endphp

                                <div class="form-group col-md-12">
                                    {{ Form::label($data->elemento) }}
                                    {{ Form::textarea(($name), ($campo), ['class' => 'my-editor form-control' . ($errors->has(($name)) ? ' is-invalid' : ''), 'id' => ($name), 'rows' => 4]) }}
                                    {!! $errors->first(($name), '<div class="invalid-feedback">:message</p>') !!}

                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                                    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                                    <script>
                                        //Coloca ckeditor en los texarea
                                        CKEDITOR.replace('{{$name}}');
                                    </script>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div id="menu4" class="tab-pane fade">
                    <br>
                    <div class="form-group col-md-4">
                        {{ Form::label('peso') }}
                        {{ Form::text('peso', $saludHisgeneral->peso, ['class' => 'form-control' . ($errors->has('peso') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
                        {!! $errors->first('peso', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('talla') }}
                        {{ Form::text('talla', $saludHisgeneral->talla, ['class' => 'form-control' . ($errors->has('talla') ? ' is-invalid' : ''), 'placeholder' => 'Talla']) }}
                        {!! $errors->first('talla', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('frecar') }}
                        {{ Form::text('frecar', $saludHisgeneral->frecar, ['class' => 'form-control' . ($errors->has('frecar') ? ' is-invalid' : ''), 'placeholder' => 'Frecar']) }}
                        {!! $errors->first('frecar', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('freres') }}
                        {{ Form::text('freres', $saludHisgeneral->freres, ['class' => 'form-control' . ($errors->has('freres') ? ' is-invalid' : ''), 'placeholder' => 'Freres']) }}
                        {!! $errors->first('freres', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('tempe') }}
                        {{ Form::text('tempe', $saludHisgeneral->tempe, ['class' => 'form-control' . ($errors->has('tempe') ? ' is-invalid' : ''), 'placeholder' => 'Tempe']) }}
                        {!! $errors->first('tempe', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('tendias') }}
                        {{ Form::text('tendias', $saludHisgeneral->tendias, ['class' => 'form-control' . ($errors->has('tendias') ? ' is-invalid' : ''), 'placeholder' => 'Tendias']) }}
                        {!! $errors->first('tendias', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('tensist') }}
                        {{ Form::text('tensist', $saludHisgeneral->tensist, ['class' => 'form-control' . ($errors->has('tensist') ? ' is-invalid' : ''), 'placeholder' => 'Tensist']) }}
                        {!! $errors->first('tensist', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('imc') }}
                        {{ Form::text('imc', $saludHisgeneral->imc, ['class' => 'form-control' . ($errors->has('imc') ? ' is-invalid' : ''), 'placeholder' => 'Imc']) }}
                        {!! $errors->first('imc', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('imcexp') }}
                        {{ Form::text('imcexp', $saludHisgeneral->imcexp, ['class' => 'form-control' . ($errors->has('imcexp') ? ' is-invalid' : ''), 'placeholder' => 'Imcexp']) }}
                        {!! $errors->first('imcexp', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('pt') }}
                        {{ Form::text('pt', $saludHisgeneral->pt, ['class' => 'form-control' . ($errors->has('pt') ? ' is-invalid' : ''), 'placeholder' => 'Pt']) }}
                        {!! $errors->first('pt', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('ptexp') }}
                        {{ Form::text('ptexp', $saludHisgeneral->ptexp, ['class' => 'form-control' . ($errors->has('ptexp') ? ' is-invalid' : ''), 'placeholder' => 'Ptexp']) }}
                        {!! $errors->first('ptexp', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('te') }}
                        {{ Form::text('te', $saludHisgeneral->te, ['class' => 'form-control' . ($errors->has('te') ? ' is-invalid' : ''), 'placeholder' => 'Te']) }}
                        {!! $errors->first('te', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('teexp') }}
                        {{ Form::text('teexp', $saludHisgeneral->teexp, ['class' => 'form-control' . ($errors->has('teexp') ? ' is-invalid' : ''), 'placeholder' => 'Teexp']) }}
                        {!! $errors->first('teexp', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('pce') }}
                        {{ Form::text('pce', $saludHisgeneral->pce, ['class' => 'form-control' . ($errors->has('pce') ? ' is-invalid' : ''), 'placeholder' => 'Pce']) }}
                        {!! $errors->first('pce', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('pceexp') }}
                        {{ Form::text('pceexp', $saludHisgeneral->pceexp, ['class' => 'form-control' . ($errors->has('pceexp') ? ' is-invalid' : ''), 'placeholder' => 'Pceexp']) }}
                        {!! $errors->first('pceexp', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('pe') }}
                        {{ Form::text('pe', $saludHisgeneral->pe, ['class' => 'form-control' . ($errors->has('pe') ? ' is-invalid' : ''), 'placeholder' => 'Pe']) }}
                        {!! $errors->first('pe', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('peexp') }}
                        {{ Form::text('peexp', $saludHisgeneral->peexp, ['class' => 'form-control' . ($errors->has('peexp') ? ' is-invalid' : ''), 'placeholder' => 'Peexp']) }}
                        {!! $errors->first('peexp', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('cc') }}
                        {{ Form::text('cc', $saludHisgeneral->cc, ['class' => 'form-control' . ($errors->has('cc') ? ' is-invalid' : ''), 'placeholder' => 'Cc']) }}
                        {!! $errors->first('cc', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('ccexp') }}
                        {{ Form::text('ccexp', $saludHisgeneral->ccexp, ['class' => 'form-control' . ($errors->has('ccexp') ? ' is-invalid' : ''), 'placeholder' => 'Ccexp']) }}
                        {!! $errors->first('ccexp', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                </div>

                <div id="menu2" class="tab-pane fade">
                    <br>
                    <h3>Diagnosticos de Ingreso</h3>
                    <div class="form-row">
                        <!-- <div class="form-group col-md-6">
                            {{ Form::label('Diagnostico Ingreso') }}
                            {{ Form::select('iddiaging', $cie, $saludHisgeneral->iddiaging, ['class' => 'form-control' . ($errors->has('iddiaging') ? ' is-invalid' : ''), 'placeholder' => 'Iddiaging', 'readonly' => 'true']) }}
                            {!! $errors->first('iddiaging', '<div class="invalid-feedback">:message</p>') !!}
                        </div> -->
<!--                         <div class="form-group col-md-6">
                            <select id='sel_cie' style='width: 200px;'>
                                <option value='0'>-- Seleccione Diagnostico --</option>
                            </select>
                        </div> -->
                        <div class="col-md-6 mt-5 offset-2">
                            <select class="livesearch form-control p-3" name="sel_cie"></select>
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::label('Dx Ingreso Relacionado 1') }}
                            {{ Form::select('iddiaging1', $cie, $saludHisgeneral->iddiaging1, ['class' => 'form-control' . ($errors->has('iddiaging1') ? ' is-invalid' : ''), 'placeholder' => 'Iddiagsal1', 'readonly' => 'true']) }}
                            {!! $errors->first('iddiaging1', '<div class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                    <br>
                    <h3>Diagnosticos de Salida</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            {{ Form::label('Diagnostico Salida') }}
                            {{ Form::select('iddiagsal', $cie, $saludHisgeneral->iddiagsal, ['class' => 'form-control' . ($errors->has('iddiagsal') ? ' is-invalid' : ''), 'placeholder' => 'Iddiagsal']) }}
                            {!! $errors->first('iddiagsal', '<div class="invalid-feedback">:message</p>') !!}
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::label('Dx Salida Relacionado 1') }}
                            {{ Form::select('iddiagsal1', $cie, $saludHisgeneral->iddiagsal1, ['class' => 'form-control' . ($errors->has('iddiagsal1') ? ' is-invalid' : ''), 'placeholder' => 'Iddiagsal1']) }}
                            {!! $errors->first('iddiagsal1', '<div class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            {{ Form::label('Dx Salida Relacionado 2') }}
                            {{ Form::select('iddiagsal2', $cie, $saludHisgeneral->iddiagsal2, ['class' => 'form-control' . ($errors->has('iddiagsal2') ? ' is-invalid' : ''), 'placeholder' => 'Iddiagsal2']) }}
                            {!! $errors->first('iddiagsal2', '<div class="invalid-feedback">:message</p>') !!}
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::label('Dx Salida Relacionado 3') }}
                            {{ Form::select('iddiagsal3', $cie, $saludHisgeneral->iddiagsal3, ['class' => 'form-control' . ($errors->has('iddiagsal3') ? ' is-invalid' : ''), 'placeholder' => 'Iddiagsal3']) }}
                            {!! $errors->first('iddiagsal3', '<div class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            {{ Form::label('Dx Salida Relacionado 4') }}
                            {{ Form::select('iddiagsal4', $cie, $saludHisgeneral->iddiagsal4, ['class' => 'form-control' . ($errors->has('iddiagsal4') ? ' is-invalid' : ''), 'placeholder' => 'Iddiagsal4']) }}
                            {!! $errors->first('iddiagsal4', '<div class="invalid-feedback">:message</p>') !!}
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::label('Dx Salida Relacionado 5') }}
                            {{ Form::select('iddiagsal5', $cie, $saludHisgeneral->iddiagsal5, ['class' => 'form-control' . ($errors->has('iddiagsal5') ? ' is-invalid' : ''), 'placeholder' => 'Iddiagsal5']) }}
                            {!! $errors->first('iddiagsal5', '<div class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            {{ Form::label('Dx Salida Relacionado 6') }}
                            {{ Form::select('iddiagsal6', $cie, $saludHisgeneral->iddiagsal6, ['class' => 'form-control' . ($errors->has('iddiagsal6') ? ' is-invalid' : ''), 'placeholder' => 'Iddiagsal6']) }}
                            {!! $errors->first('iddiagsal6', '<div class="invalid-feedback">:message</p>') !!}
                        </div>
                        <div class="form-group col-md-4">
                            {{ Form::label('sivigila') }}
                            {{ Form::text('sivigila', $saludHisgeneral->sivigila, ['class' => 'form-control' . ($errors->has('sivigila') ? ' is-invalid' : ''), 'placeholder' => 'Sivigila']) }}
                            {!! $errors->first('sivigila', '<div class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                </div>

                <div id="menu3" class="tab-pane fade">
                    <br>

                </div>

                <div id="menu5" class="tab-pane fade">
                    <br>
                    <div class="form-group col-md-4">
                        {{ Form::label('sentidos') }}
                        {{ Form::text('sentidos', $saludHisgeneral->sentidos, ['class' => 'form-control' . ($errors->has('sentidos') ? ' is-invalid' : ''), 'placeholder' => 'Sentidos']) }}
                        {!! $errors->first('sentidos', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('huesos') }}
                        {{ Form::text('huesos', $saludHisgeneral->huesos, ['class' => 'form-control' . ($errors->has('huesos') ? ' is-invalid' : ''), 'placeholder' => 'Huesos']) }}
                        {!! $errors->first('huesos', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('respi') }}
                        {{ Form::text('respi', $saludHisgeneral->respi, ['class' => 'form-control' . ($errors->has('respi') ? ' is-invalid' : ''), 'placeholder' => 'Respi']) }}
                        {!! $errors->first('respi', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('cardio') }}
                        {{ Form::text('cardio', $saludHisgeneral->cardio, ['class' => 'form-control' . ($errors->has('cardio') ? ' is-invalid' : ''), 'placeholder' => 'Cardio']) }}
                        {!! $errors->first('cardio', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('nervio') }}
                        {{ Form::text('nervio', $saludHisgeneral->nervio, ['class' => 'form-control' . ($errors->has('nervio') ? ' is-invalid' : ''), 'placeholder' => 'Nervio']) }}
                        {!! $errors->first('nervio', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('gastro') }}
                        {{ Form::text('gastro', $saludHisgeneral->gastro, ['class' => 'form-control' . ($errors->has('gastro') ? ' is-invalid' : ''), 'placeholder' => 'Gastro']) }}
                        {!! $errors->first('gastro', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('urinar') }}
                        {{ Form::text('urinar', $saludHisgeneral->urinar, ['class' => 'form-control' . ($errors->has('urinar') ? ' is-invalid' : ''), 'placeholder' => 'Urinar']) }}
                        {!! $errors->first('urinar', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('endocri') }}
                        {{ Form::text('endocri', $saludHisgeneral->endocri, ['class' => 'form-control' . ($errors->has('endocri') ? ' is-invalid' : ''), 'placeholder' => 'Endocri']) }}
                        {!! $errors->first('endocri', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('cabeza') }}
                        {{ Form::text('cabeza', $saludHisgeneral->cabeza, ['class' => 'form-control' . ($errors->has('cabeza') ? ' is-invalid' : ''), 'placeholder' => 'Cabeza']) }}
                        {!! $errors->first('cabeza', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                </div>

                <div id="menu6" class="tab-pane fade">
                    <header>
                        <h3 class='text-center'></h3>
                    </header>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <button id="btnNuevo" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"><i class="material-icons">library_add</i></button>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="container caja">
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="table-responsive">
                                <table id="tablaUsuarios" class="table table-striped table-bordered table-condensed" style="width:100%" >
                                    <thead class="text-center">
                                        <tr>
                                            <th>Id</th>
                                            <th>Miembro</th>
                                            <th>Parentesco</th>
                                            <th>Edad</th>
                                            <th>Relacion</th>
                                            <th>Celular</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form id="formUsuarios">
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="form-row">
                                                <div class="form-group col-sm-12">
                                                    {{ Form::label('Nombre del miembro de la Familia') }}
                                                    {{ Form::text('miembro', $saludHisfa->miembro, ['class' => 'form-control' . ($errors->has('miembro') ? ' is-invalid' : ''), 'id' => 'miembro', 'placeholder' => 'Miembro']) }}
                                                    {!! $errors->first('miembro', '<div class="invalid-feedback">:message</p>') !!}
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-sm-6">
                                                    {{ Form::label('Parentesco') }}
                                                    {{ Form::select('parencon', $parentesco , $saludHisfa->parencon, ['class' => 'form-control' . ($errors->has('parencon') ? ' is-invalid' : ''), 'id' => 'parencon', 'placeholder' => 'Parencon']) }}
                                                    {!! $errors->first('parencon', '<div class="invalid-feedback">:message</p>') !!}
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    {{ Form::label('¿Cual?') }}
                                                    {{ Form::text('otropare', $saludHisfa->otropare, ['class' => 'form-control' . ($errors->has('otropare') ? ' is-invalid' : ''), 'id' => 'otropare', 'placeholder' => 'Otropare']) }}
                                                    {!! $errors->first('otropare', '<div class="invalid-feedback">:message</p>') !!}
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-sm-3">
                                                    {{ Form::label('Edad') }}
                                                    {{ Form::number('edad', $saludHisfa->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'id' => 'edadfam', 'placeholder' => 'Edad']) }}
                                                    {!! $errors->first('edad', '<div class="invalid-feedback">:message</p>') !!}
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    {{ Form::label('Código Edad') }}
                                                    {{ Form::select('cod_edad', $codedad, $saludHisfa->cod_edad, ['class' => 'form-control' . ($errors->has('cod_edad') ? ' is-invalid' : ''), 'id' => 'cod_edadfam', 'placeholder' => 'Cod Edad']) }}
                                                    {!! $errors->first('cod_edad', '<div class="invalid-feedback">:message</p>') !!}
                                                </div>
                                                <div class="form-group col-md-6">
                                                    {{ Form::label('Relación con el usuario') }}
                                                    {{ Form::select('relacion', $relacion, $saludHisfa->relacion, ['class' => 'form-control' . ($errors->has('relacion') ? ' is-invalid' : ''), 'id' => 'relacion', 'placeholder' => 'Relacion']) }}
                                                    {!! $errors->first('relacion', '<div class="invalid-feedback">:message</p>') !!}
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('Escolaridad') }}
                                                    {{ Form::select('escolar', $escolar, $saludHisfa->escolar, ['class' => 'form-control' . ($errors->has('escolar') ? ' is-invalid' : ''), 'id' => 'escolar', 'placeholder' => 'Escolar']) }}
                                                    {!! $errors->first('escolar', '<div class="invalid-feedback">:message</p>') !!}
                                                </div>
                                                <div class="form-group col-md-8">
                                                    {{ Form::label('Ocupacion') }}
                                                    {{ Form::select('idocupac', $ocupacion, $saludHisfa->idocupac, ['class' => 'form-control' . ($errors->has('idocupac') ? ' is-invalid' : ''), 'id' => 'idocupac', 'placeholder' => 'Idocupac']) }}
                                                    {!! $errors->first('idocupac', '<div class="invalid-feedback">:message</p>') !!}
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <div class="form-check form-check-inline">
                                                        {{ Form::label('¿El Miembro vive actualmente?') }}
                                                        {{ Form::checkbox('vivo', $saludHisfa->vivo, ($saludHisfa->vivo == 1 ? 'checked' : ''),['class' => 'form-check-input' . ($errors->has('vivo') ? ' is-invalid' : ''), 'id' => 'vivo']) }}
                                                        {!! $errors->first('vivo', '<div class="invalid-feedback">:message</p>') !!}
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('Fecha Muerte') }}
                                                    @if ($saludHisfa->vivo === 1)
                                                        {{ Form::date('muerfec', $saludHisfa->muerfec, ['class' => 'form-control' . ($errors->has('muerfec') ? ' is-invalid' : ''), 'id' => 'muerfec', 'placeholder' => 'Muerfec']) }}
                                                    @else
                                                        {{ Form::date('muerfec', $saludHisfa->muerfec, ['class' => 'form-control' . ($errors->has('muerfec') ? ' is-invalid' : ''), 'id' => 'muerfec', 'placeholder' => 'Muerfec', 'readonly' => 'true']) }}
                                                    @endif
                                                    {!! $errors->first('muerfec', '<div class="invalid-feedback">:message</p>') !!}
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <div class="form-check form-check-inline">
                                                        {{ Form::label('¿Este miembro de la familia convive actualmente con el Paciente?') }}
                                                        {{ Form::checkbox('habita', $saludHisfa->habita, ($saludHisfa->habita == 1 ? 'checked' : ''),['class' => 'form-check-input' . ($errors->has('habita') ? ' is-invalid' : ''), 'id' => 'habita']) }}
                                                        {!! $errors->first('habita', '<div class="invalid-feedback">:message</p>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
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
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="cerrarmodal" type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
                                        <button id="grabafami" type="button" class="btn btn-primary">Grabar Cambios</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!--             <div class="form-group col-md-4">
                {{ Form::label('proxcita') }}
                {{ Form::text('proxcita', $saludHisgeneral->proxcita, ['class' => 'form-control' . ($errors->has('proxcita') ? ' is-invalid' : ''), 'placeholder' => 'Proxcita']) }}
                {!! $errors->first('proxcita', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('alergia') }}
                {{ Form::text('alergia', $saludHisgeneral->alergia, ['class' => 'form-control' . ($errors->has('alergia') ? ' is-invalid' : ''), 'placeholder' => 'Alergia']) }}
                {!! $errors->first('alergia', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('fechfin') }}
                {{ Form::text('fechfin', $saludHisgeneral->fechfin, ['class' => 'form-control' . ($errors->has('fechfin') ? ' is-invalid' : ''), 'placeholder' => 'Fechfin']) }}
                {!! $errors->first('fechfin', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('edadmes') }}
                {{ Form::text('edadmes', $saludHisgeneral->edadmes, ['class' => 'form-control' . ($errors->has('edadmes') ? ' is-invalid' : ''), 'placeholder' => 'Edadmes']) }}
                {!! $errors->first('edadmes', '<div class="invalid-feedback">:message</p>') !!}
            </div> -->

<!--                         <div class="form-group col-md-9">
                            <div class="form-group col-md-9">
                                {{ Form::label('moting') }}
                                {{ Form::textarea('moting', $saludHisgeneral->moting, ['class' => 'my-editor form-control' . ($errors->has('moting') ? ' is-invalid' : ''), 'id' => 'moting', 'placeholder' => 'Moting']) }}
                                {!! $errors->first('moting', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('enferact') }}
                                {{ Form::textarea('enferact', $saludHisgeneral->enferact, ['class' => 'my-editor form-control' . ($errors->has('enferact') ? ' is-invalid' : ''), 'id' => 'enferact', 'placeholder' => 'Enferact']) }}
                                {!! $errors->first('enferact', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('antefam') }}
                                {{ Form::textarea('antefam', $saludHisgeneral->antefam, ['class' => 'my-editor form-control' . ($errors->has('antefam') ? ' is-invalid' : ''), 'id' => 'antefam', 'placeholder' => 'Antefam']) }}
                                {!! $errors->first('antefam', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('anteper') }}
                                {{ Form::textarea('anteper', $saludHisgeneral->anteper, ['class' => 'my-editor form-control' . ($errors->has('anteper') ? ' is-invalid' : ''), 'id' => 'anteper', 'placeholder' => 'Anteper']) }}
                                {!! $errors->first('anteper', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('tratam') }}
                                {{ Form::textarea('tratam', $saludHisgeneral->tratam, ['class' => 'my-editor form-control' . ($errors->has('tratam') ? ' is-invalid' : ''), 'id' => 'tratam', 'placeholder' => 'Tratam']) }}
                                {!! $errors->first('tratam', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('revsist') }}
                                {{ Form::textarea('revsist', $saludHisgeneral->revsist, ['class' => 'my-editor form-control' . ($errors->has('revsist') ? ' is-invalid' : ''), 'id' => 'revsist', 'placeholder' => 'Revsist']) }}
                                {!! $errors->first('revsist', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('exafisg') }}
                                {{ Form::textarea('exafisg', $saludHisgeneral->exafisg, ['class' => 'my-editor form-control' . ($errors->has('exafisg') ? ' is-invalid' : ''), 'id' => 'exafisg', 'placeholder' => 'Exafisg']) }}
                                {!! $errors->first('exafisg', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('examen') }}
                                {{ Form::textarea('examen', $saludHisgeneral->examen, ['class' => 'my-editor form-control' . ($errors->has('examen') ? ' is-invalid' : ''), 'id' => 'examen', 'placeholder' => 'Examen']) }}
                                {!! $errors->first('examen', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('impdiaa') }}
                                {{ Form::textarea('impdiaa', $saludHisgeneral->impdiaa, ['class' => 'my-editor form-control' . ($errors->has('impdiaa') ? ' is-invalid' : ''), 'id' => 'impdiaa', 'placeholder' => 'Impdiaa']) }}
                                {!! $errors->first('impdiaa', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('tratamb') }}
                                {{ Form::textarea('tratamb', $saludHisgeneral->tratamb, ['class' => 'my-editor form-control' . ($errors->has('tratamb') ? ' is-invalid' : ''), 'id' => 'tratamb', 'placeholder' => 'Tratamb']) }}
                                {!! $errors->first('tratamb', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('evoamb') }}
                                {{ Form::textarea('evoamb', $saludHisgeneral->evoamb, ['class' => 'my-editor form-control' . ($errors->has('evoamb') ? ' is-invalid' : ''), 'id' => 'evoamb', 'placeholder' => 'Evoamb']) }}
                                {!! $errors->first('evoamb', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('trathos') }}
                                {{ Form::textarea('trathos', $saludHisgeneral->trathos, ['class' => 'my-editor form-control' . ($errors->has('trathos') ? ' is-invalid' : ''), 'id' => 'trathos', 'placeholder' => 'Trathos']) }}
                                {!! $errors->first('trathos', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('evohos') }}
                                {{ Form::textarea('evohos', $saludHisgeneral->evohos, ['class' => 'my-editor form-control' . ($errors->has('evohos') ? ' is-invalid' : ''), 'id' => 'evohos', 'placeholder' => 'Evohos']) }}
                                {!! $errors->first('evohos', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('tramedg') }}
                                {{ Form::textarea('tramedg', $saludHisgeneral->tramedg, ['class' => 'my-editor form-control' . ($errors->has('tramedg') ? ' is-invalid' : ''), 'id' => 'tramedg', 'placeholder' => 'Tramedg']) }}
                                {!! $errors->first('tramedg', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('evomedg') }}
                                {{ Form::textarea('evomedg', $saludHisgeneral->evomedg, ['class' => 'my-editor form-control' . ($errors->has('evomedg') ? ' is-invalid' : ''), 'id' => 'evomedg', 'placeholder' => 'Evomedg']) }}
                                {!! $errors->first('evomedg', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('apreper') }}
                                {{ Form::textarea('apreper', $saludHisgeneral->apreper, ['class' => 'my-editor form-control' . ($errors->has('apreper') ? ' is-invalid' : ''), 'id' => 'apreper', 'placeholder' => 'Apreper']) }}
                                {!! $errors->first('apreper', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('evoenfe') }}
                                {{ Form::textarea('evoenfe', $saludHisgeneral->evoenfe, ['class' => 'my-editor form-control' . ($errors->has('evoenfe') ? ' is-invalid' : ''), 'id' => 'evoenfe', 'placeholder' => 'Evoenfe']) }}
                                {!! $errors->first('evoenfe', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('evoterocu') }}
                                {{ Form::textarea('evoterocu', $saludHisgeneral->evoterocu, ['class' => 'my-editor form-control' . ($errors->has('evoterocu') ? ' is-invalid' : ''), 'id' => 'evoterocu', 'placeholder' => 'Evoterocu']) }}
                                {!! $errors->first('evoterocu', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('resum') }}
                                {{ Form::textarea('resum', $saludHisgeneral->resum, ['class' => 'my-editor form-control' . ($errors->has('resum') ? ' is-invalid' : ''), 'id' => 'resum', 'placeholder' => 'Resum']) }}
                                {!! $errors->first('resum', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('concprof') }}
                                {{ Form::textarea('concprof', $saludHisgeneral->concprof, ['class' => 'my-editor form-control' . ($errors->has('concprof') ? ' is-invalid' : ''), 'id' => 'concprof', 'placeholder' => 'Concprof']) }}
                                {!! $errors->first('concprof', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('antepef') }}
                                {{ Form::textarea('antepef', $saludHisgeneral->antepef, ['class' => 'my-editor form-control' . ($errors->has('antepef') ? ' is-invalid' : ''), 'id' => 'antepef', 'placeholder' => 'Antepef']) }}
                                {!! $errors->first('antepef', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('valsicam') }}
                                {{ Form::textarea('valsicam', $saludHisgeneral->valsicam, ['class' => 'my-editor form-control' . ($errors->has('valsicam') ? ' is-invalid' : ''), 'id' => 'valsicam', 'placeholder' => 'Valsicam']) }}
                                {!! $errors->first('valsicam', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('valsicho') }}
                                {{ Form::textarea('valsicho', $saludHisgeneral->valsicho, ['class' => 'my-editor form-control' . ($errors->has('valsicho') ? ' is-invalid' : ''), 'id' => 'valsicho', 'placeholder' => 'Valsicho']) }}
                                {!! $errors->first('valsicho', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('reapoyo') }}
                                {{ Form::textarea('reapoyo', $saludHisgeneral->reapoyo, ['class' => 'my-editor form-control' . ($errors->has('reapoyo') ? ' is-invalid' : ''), 'id' => 'reapoyo', 'placeholder' => 'Reapoyo']) }}
                                {!! $errors->first('reapoyo', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('evsocial') }}
                                {{ Form::textarea('evsocial', $saludHisgeneral->evsocial, ['class' => 'my-editor form-control' . ($errors->has('evsocial') ? ' is-invalid' : ''), 'id' => 'evsocial', 'placeholder' => 'Evsocial']) }}
                                {!! $errors->first('evsocial', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('ningre') }}
                                {{ Form::textarea('ningre', $saludHisgeneral->ningre, ['class' => 'my-editor form-control' . ($errors->has('ningre') ? ' is-invalid' : ''), 'id' => 'ningre', 'placeholder' => 'Ningre']) }}
                                {!! $errors->first('ningre', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('evohosdia') }}
                                {{ Form::textarea('evohosdia', $saludHisgeneral->evohosdia, ['class' => 'my-editor form-control' . ($errors->has('evohosdia') ? ' is-invalid' : ''), 'id' => 'evohosdia', 'placeholder' => 'Evohosdia']) }}
                                {!! $errors->first('evohosdia', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('laborat') }}
                                {{ Form::textarea('laborat', $saludHisgeneral->laborat, ['class' => 'my-editor form-control' . ($errors->has('laborat') ? ' is-invalid' : ''), 'id' => 'laborat', 'placeholder' => 'Laborat']) }}
                                {!! $errors->first('laborat', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('planman') }}
                                {{ Form::textarea('planman', $saludHisgeneral->planman, ['class' => 'my-editor form-control' . ($errors->has('planman') ? ' is-invalid' : ''), 'id' => 'planman', 'placeholder' => 'Planman']) }}
                                {!! $errors->first('planman', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group col-md-9">
                                {{ Form::label('planegr') }}
                                {{ Form::textarea('planegr', $saludHisgeneral->planegr, ['class' => 'my-editor form-control' . ($errors->has('planegr') ? ' is-invalid' : ''), 'id' => 'planegr', 'placeholder' => 'Planegr']) }}
                                {!! $errors->first('planegr', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>-->

    </div>
    <div class="box-footer mt20">
<!--         <button type="submit" class="btn btn-primary">Grabar</button>
        <a class="btn btn-secondary" href="{{ route('salud-hisgeneral.index') }}"> Regresar</a> -->

</div>
