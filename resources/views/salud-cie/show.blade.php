@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Consulta C.I.E.</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Consulta registro en Salud Cie</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salud-cie.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $saludCie->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $saludCie->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $saludCie->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Edadmin:</strong>
                            {{ $saludCie->edadmin }}
                        </div>
                        <div class="form-group">
                            <strong>Edadmax:</strong>
                            {{ $saludCie->edadmax }}
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
    //<script> console.log('Hi!'); </script>
@stop
