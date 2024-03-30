@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Consultar Tipos de Historia</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Consulta Registro en Salud Tipos de Historia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salud-histipo.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Codhis:</strong>
                            {{ $saludHistipo->codhis }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $saludHistipo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Idespecial:</strong>
                            {{ $saludHistipo->idEspecial }}
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
