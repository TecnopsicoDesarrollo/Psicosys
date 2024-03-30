@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Consulta de Contrato</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Consulta Registro en Salud Contrato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salud-contrato.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Idcontra:</strong>
                            {{ $saludContrato->idcontra }}
                        </div>
                        <div class="form-group">
                            <strong>Plan:</strong>
                            {{ $saludContrato->plan }}
                        </div>
                        <div class="form-group">
                            <strong>Ideps:</strong>
                            {{ $saludContrato->idEps }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $saludContrato->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fechini:</strong>
                            {{ $saludContrato->fechini }}
                        </div>
                        <div class="form-group">
                            <strong>Durac:</strong>
                            {{ $saludContrato->durac }}
                        </div>
                        <div class="form-group">
                            <strong>Fechfin:</strong>
                            {{ $saludContrato->fechfin }}
                        </div>
                        <div class="form-group">
                            <strong>Fechfirma:</strong>
                            {{ $saludContrato->fechfirma }}
                        </div>
                        <div class="form-group">
                            <strong>Telconta:</strong>
                            {{ $saludContrato->telconta }}
                        </div>
                        <div class="form-group">
                            <strong>Firmado:</strong>
                            {{ $saludContrato->firmado }}
                        </div>
                        <div class="form-group">
                            <strong>Idmanual:</strong>
                            {{ $saludContrato->idManual }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $saludContrato->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Topemes:</strong>
                            {{ $saludContrato->topemes }}
                        </div>
                        <div class="form-group">
                            <strong>Salmin:</strong>
                            {{ $saludContrato->salmin }}
                        </div>
                        <div class="form-group">
                            <strong>Tipotar:</strong>
                            {{ $saludContrato->tipotar }}
                        </div>
                        <div class="form-group">
                            <strong>Porcen:</strong>
                            {{ $saludContrato->porcen }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $saludContrato->usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Idmanual1:</strong>
                            {{ $saludContrato->idManual1 }}
                        </div>
                        <div class="form-group">
                            <strong>Notas:</strong>
                            {{ $saludContrato->notas }}
                        </div>
                        <div class="form-group">
                            <strong>Ideps1:</strong>
                            {{ $saludContrato->idEps1 }}
                        </div>
                        <div class="form-group">
                            <strong>Modival:</strong>
                            {{ $saludContrato->modival }}
                        </div>

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
@stop
