@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Consultar Tarifa</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Consulta registro de Tarifa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salud-tarifa.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Idmanual:</strong>
                            {{ $saludTarifa->idManual }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $saludTarifa->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $saludTarifa->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Uvresp:</strong>
                            {{ $saludTarifa->uvresp }}
                        </div>
                        <div class="form-group">
                            <strong>Uvrgen:</strong>
                            {{ $saludTarifa->uvrgen }}
                        </div>
                        <div class="form-group">
                            <strong>Valuvr:</strong>
                            {{ $saludTarifa->valuvr }}
                        </div>
                        <div class="form-group">
                            <strong>Costo:</strong>
                            {{ $saludTarifa->costo }}
                        </div>
                        <div class="form-group">
                            <strong>Idcodcups:</strong>
                            {{ $saludTarifa->idCodcups }}
                        </div>
                        <div class="form-group">
                            <strong>Grupquir:</strong>
                            {{ $saludTarifa->grupquir }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $saludTarifa->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Edadmin:</strong>
                            {{ $saludTarifa->edadmin }}
                        </div>
                        <div class="form-group">
                            <strong>Edadmax:</strong>
                            {{ $saludTarifa->edadmax }}
                        </div>
                        <div class="form-group">
                            <strong>Tipotar:</strong>
                            {{ $saludTarifa->tipotar }}
                        </div>
                        <div class="form-group">
                            <strong>Idconcecont:</strong>
                            {{ $saludTarifa->idConcecont }}
                        </div>
                        <div class="form-group">
                            <strong>Iva:</strong>
                            {{ $saludTarifa->iva }}
                        </div>
                        <div class="form-group">
                            <strong>Porciva:</strong>
                            {{ $saludTarifa->porciva }}
                        </div>
                        <div class="form-group">
                            <strong>Codrela:</strong>
                            {{ $saludTarifa->codrela }}
                        </div>
                        <div class="form-group">
                            <strong>Tipocon:</strong>
                            {{ $saludTarifa->tipocon }}
                        </div>
                        <div class="form-group">
                            <strong>Codtar2:</strong>
                            {{ $saludTarifa->codtar2 }}
                        </div>
                        <div class="form-group">
                            <strong>Excluido:</strong>
                            {{ $saludTarifa->excluido }}
                        </div>
                        <div class="form-group">
                            <strong>Codatc:</strong>
                            {{ $saludTarifa->codatc }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $saludTarifa->usuario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    //<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
