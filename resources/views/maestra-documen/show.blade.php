@extends('adminlte::page')

@section('title', 'Psico.sys OnLine')

@section('content_header')
    <h1>Consultar Documento</h1>
    //{{ $maestraDocumen->name ?? 'Show Maestra Documen' }}
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Consulta Registro en Maestra de Documentos</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('maestra-documen.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Documento:</strong>
                            {{ $maestraDocumen->docu }}
                        </div>
                        <div class="form-group">
                            <strong>Serial:</strong>
                            {{ $maestraDocumen->serdoc }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $maestraDocumen->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Inicial:</strong>
                            {{ $maestraDocumen->no_ini }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Final:</strong>
                            {{ $maestraDocumen->no_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Actual:</strong>
                            {{ $maestraDocumen->no_actual }}
                        </div>
                        <div class="form-group">
                            <strong>¿Consecutivo Manual?:</strong>
                            {{ $maestraDocumen->manual }}
                        </div>
                        <div class="form-group">
                            <strong>¿Documento Predeterminado?:</strong>
                            {{ $maestraDocumen->predeter }}
                        </div>
                        <div class="form-group">
                            <strong>¿Es factura Electrónica?:</strong>
                            {{ $maestraDocumen->facele }}
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
    <script> console.log('Hi!'); </script>
@stop
