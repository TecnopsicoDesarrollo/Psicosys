@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Consultar Servicios Contratados</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Consulta Registro en Salud Contraser</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salud-contrasers.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Idcontra:</strong>
                            {{ $saludContraser->idContra }}
                        </div>
                        <div class="form-group">
                            <strong>Ideps:</strong>
                            {{ $saludContraser->idEps }}
                        </div>
                        <div class="form-group">
                            <strong>Idmanual:</strong>
                            {{ $saludContraser->idManual }}
                        </div>
                        <div class="form-group">
                            <strong>Idcodserv:</strong>
                            {{ $saludContraser->idCodserv }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $saludContraser->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Idcodcups:</strong>
                            {{ $saludContraser->idCodcups }}
                        </div>
                        <div class="form-group">
                            <strong>Incremen:</strong>
                            {{ $saludContraser->incremen }}
                        </div>
                        <div class="form-group">
                            <strong>Tipotar:</strong>
                            {{ $saludContraser->tipotar }}
                        </div>
                        <div class="form-group">
                            <strong>Idconcecont:</strong>
                            {{ $saludContraser->idConcecont }}
                        </div>
                        <div class="form-group">
                            <strong>Grupquir:</strong>
                            {{ $saludContraser->grupquir }}
                        </div>
                        <div class="form-group">
                            <strong>Excluido:</strong>
                            {{ $saludContraser->excluido }}
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
