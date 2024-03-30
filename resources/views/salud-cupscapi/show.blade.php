@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Consultar Capitulo de C.U.P.S</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Consulta Registro en Salud Cupscapi</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salud-cupscapis.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $saludCupscapi->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $saludCupscapi->nombre }}
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
