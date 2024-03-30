@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Consultar Cliente</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Consulta registro de Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admon-cliente.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <strong>Tipo Identificación:</strong>
                            {{ Form::select('tipo_iden', $tipoiden ,$admonCliente->tipo_iden, ['class' => 'form-control', 'disabled' => 'true']) }}
                        </div>
                        <div class="form-group col-md-4">
                            <strong>No Identificacion:</strong>
                            {{ Form::text('no_identi', $admonCliente->no_identi, ['class' => 'form-control', 'disabled' => 'true']) }}
                        </div>
                        <div class="form-group col-md-4">
                            <strong>Digiveri:</strong>
                            <!-- {{ $admonCliente->digiveri }} -->
                            {{ Form::text('digiveri', $admonCliente->digiveri, ['class' => 'form-control', 'disabled' => 'true']) }}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <strong>Nombre Cliente:</strong>
                            <!-- {{ $admonCliente->nomclien }} -->
                            {{ Form::text('nomclien', $admonCliente->nomclien, ['class' => 'form-control', 'disabled' => 'true']) }}
                        </div>
                        <div class="form-group col-md-2">
                            <strong>Nombre 1:</strong>
                            <!-- {{ $admonCliente->nombre1 }} -->
                            {{ Form::text('nombre1', $admonCliente->nombre1, ['class' => 'form-control', 'disabled' => 'true']) }}
                        </div>
                        <div class="form-group col-md-2">
                            <strong>Nombre 2:</strong>
                            <!-- {{ $admonCliente->nombre2 }} -->
                            {{ Form::text('nombre2', $admonCliente->nombre2, ['class' => 'form-control', 'disabled' => 'true']) }}
                        </div>
                        <div class="form-group col-md-2">
                            <strong>Apellido 1:</strong>
                            <!-- {{ $admonCliente->apelli1 }} -->
                            {{ Form::text('apelli1', $admonCliente->apelli1, ['class' => 'form-control', 'disabled' => 'true']) }}
                        </div>
                        <div class="form-group col-md-2">
                            <strong>Apellido 2:</strong>
                            <!-- {{ $admonCliente->apelli2 }} -->
                            {{ Form::text('apelli2', $admonCliente->apelli2, ['class' => 'form-control', 'disabled' => 'true']) }}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <strong>Direccion:</strong>
                            <!-- {{ $admonCliente->direccion }} -->
                            {{ Form::text('direccion', $admonCliente->direccion, ['class' => 'form-control', 'disabled' => 'true']) }}
                        </div>
                        <div class="form-group col-md-2">
                            <strong>Telefono:</strong>
                            <!-- {{ $admonCliente->telefono }} -->
                            {{ Form::text('telefono', $admonCliente->telefono, ['class' => 'form-control', 'disabled' => 'true']) }}
                        </div>
                        <div class="form-group col-md-2">
                            <strong>Celular:</strong>
                            <!-- {{ $admonCliente->celular }} -->
                            {{ Form::text('celular', $admonCliente->celular, ['class' => 'form-control', 'disabled' => 'true']) }}
                        </div>
                        <div class="form-group col-md-4">
                            <strong>E Mail:</strong>
                            <!-- {{ $admonCliente->e_mail }} -->
                            {{ Form::text('e_mail', $admonCliente->e_mail, ['class' => 'form-control', 'disabled' => 'true']) }}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <strong>Ciudad:</strong>
                            <!-- {{ $admonCliente->maestraMunicipio->ciudad }} -->
                            {{ Form::select('idCiudad', $municip, $admonCliente->idCiudad, ['class' => 'form-control', 'disabled' => 'true']) }}
                        </div>
                        <div class="form-group col-md-3">
                            <strong>Zona:</strong>
                            <!-- {{ $admonCliente->zona }} -->
                            {{ Form::select('zona', $zona , $admonCliente->zona, ['class' => 'form-control', 'disabled' => 'true']) }}
                        </div>
                        <div class="form-group col-md-3">
                            <strong>Tipo Persona:</strong>
                            <!-- {{ $admonCliente->tipoper }} -->
                            {{ Form::select('tipoper', $tipopersona , $admonCliente->tipoper, ['class' => 'form-control', 'disabled' => 'true']) }}
                        </div>
                        <div class="form-group col-md-3">
                            <strong>Regimen:</strong>
                            <!-- {{ $admonCliente->regimen }} -->
                            {{ Form::select('regimen', $regimen , $admonCliente->regimen, ['class' => 'form-control', 'disabled' => 'true']) }}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <div class="form-check form-check-inline">
                                <!-- <strong>Autoretención:</strong>
                                {{ $admonCliente->autoret }} -->
                                {{ Form::label('¿Auto retenedor?') }}
                                {{ Form::checkbox('autoret', $admonCliente->autoret, ($admonCliente->autoret == 1 ? 'checked' : ''), ['class' => 'form-check-input', 'disabled' => 'true']) }}
                            </div>
                            <div class="form-check form-check-inline">
                                <!-- <strong>Retención IVA:</strong>
                                {{ $admonCliente->reteiva }} -->
                                {{ Form::label('¿Retiene I.V.A.?') }}
                                {{ Form::checkbox('reteiva', $admonCliente->reteiva, ($admonCliente->reteiva == 1 ? 'checked' : ''), ['class' => 'form-check-input', 'disabled' => 'true']) }}
                            </div>
                            <div class="form-check form-check-inline">
                                <!-- <strong>Retención en la Fuente:</strong>
                                {{ $admonCliente->rtefte }} -->
                                {{ Form::label('¿Retiene Fuente?') }}
                                {{ Form::checkbox('rtefte', $admonCliente->rtefte, ($admonCliente->rtefte == 1 ? 'checked' : ''), ['class' => 'form-check-input', 'disabled' => 'true']) }}
                            </div>
                            <div class="form-check form-check-inline">
                                <!-- <strong>Cliente:</strong> -->
                                <!-- {{ $admonCliente->cliente }} -->
                                {{ Form::label('Cliente:') }}
                                {{ Form::checkbox('cliente', $admonCliente->cliente, ($admonCliente->cliente == 1 ? 'checked' : ''), ['class' => 'form-check-input', 'disabled' => 'true']) }}
                            </div>
                            <div class="form-check form-check-inline">
                                <!-- <strong>Provee:</strong>
                                {{ $admonCliente->provee }} -->
                                {{ Form::label('Proveedor:') }}
                                {{ Form::checkbox('provee', $admonCliente->provee, ($admonCliente->provee == 1 ? 'checked' : ''), ['class' => 'form-check-input', 'disabled' => 'true']) }}
                            </div>
                            <div class="form-check form-check-inline">
                                <!-- <strong>Otro:</strong>
                                {{ $admonCliente->otro }} -->
                                {{ Form::label('Otro:') }}
                                {{ Form::checkbox('otro', $admonCliente->otro, ($admonCliente->otro == 1 ? 'checked' : ''), ['class' => 'form-check-input', 'disabled' => 'true']) }}
                            </div>
                            <div class="form-group form-check-inline">
                                <!-- <strong>Escree:</strong>
                                {{ $admonCliente->escree }} -->
                                {{ Form::label('Cliente Habitual:') }}
                                {{ Form::checkbox('escree', $admonCliente->escree, ($admonCliente->escree == 1 ? 'checked' : ''), ['class' => 'form-check-input', 'disabled' => 'true']) }}
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <strong>Porcentage Autorenta:</strong>
                            <!-- {{ $admonCliente->porrte }} -->
                            {{ Form::text('porrte', $admonCliente->porrte, ['class' => 'form-control', 'disabled' => 'true']) }}
                        </div>
                    </div>
<!--                         <div class="form-group">
                            <strong>Eseps:</strong>
                            {{ $admonCliente->eseps }}
                        </div>
                        <div class="form-group">
                            <strong>Ideps:</strong>
                            {{ $admonCliente->idEps }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $admonCliente->usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Diascre:</strong>
                            {{ $admonCliente->diascre }}
                        </div>
                        <div class="form-group">
                            <strong>No Ideant:</strong>
                            {{ $admonCliente->no_ideant }}
                        </div>
                        <div class="form-group">
                            <strong>Cupocxc:</strong>
                            {{ $admonCliente->cupocxc }}
                        </div>
                        <div class="form-group">
                            <strong>Idacteco:</strong>
                            {{ $admonCliente->idacteco }}
                        </div>
                        <div class="form-group">
                            <strong>Rutarut:</strong>
                            {{ $admonCliente->rutarut }}
                        </div>
                        <div class="form-group">
                            <strong>Nomcial:</strong>
                            {{ $admonCliente->nomcial }}
                        </div>
                        <div class="form-group">
                            <strong>Nomatri:</strong>
                            {{ $admonCliente->nomatri }}
                        </div>
                        <div class="form-group">
                            <strong>Idoblig:</strong>
                            {{ $admonCliente->idoblig }}
                        </div>
                        <div class="form-group">
                            <strong>Idtipoimp:</strong>
                            {{ $admonCliente->idtipoimp }}
                        </div>
                        <div class="form-group">
                            <strong>Internor:</strong>
                            {{ $admonCliente->internor }}
                        </div>
                        <div class="form-group">
                            <strong>Intermora:</strong>
                            {{ $admonCliente->intermora }}
                        </div>
                        <div class="form-group">
                            <strong>Regitrib:</strong>
                            {{ $admonCliente->regitrib }}
                        </div>
                        <div class="form-group">
                            <strong>Idpostal:</strong>
                            {{ $admonCliente->idpostal }}
                        </div>
 -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
