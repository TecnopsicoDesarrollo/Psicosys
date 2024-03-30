@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Consultar C.U.P.S.</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Consulta Registro en Salud Cupss</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salud-Cupss.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Aplicado:</strong>
                            {{ $saludCupss->aplicado }}
                        </div>
                        <div class="form-group">
                            <strong>Seccio:</strong>
                            {{ $saludCupss->seccio }}
                        </div>
                        <div class="form-group">
                            <strong>Capitulo:</strong>
                            {{ $saludCupss->capitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Grupo:</strong>
                            {{ $saludCupss->grupo }}
                        </div>
                        <div class="form-group">
                            <strong>Subgrupo:</strong>
                            {{ $saludCupss->subgrupo }}
                        </div>
                        <div class="form-group">
                            <strong>Categor:</strong>
                            {{ $saludCupss->categor }}
                        </div>
                        <div class="form-group">
                            <strong>Subcate:</strong>
                            {{ $saludCupss->subcate }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $saludCupss->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Codfase:</strong>
                            {{ $saludCupss->codfase }}
                        </div>
                        <div class="form-group">
                            <strong>Codcups:</strong>
                            {{ $saludCupss->codcups }}
                        </div>
                        <div class="form-group">
                            <strong>Incluye:</strong>
                            {{ $saludCupss->incluye }}
                        </div>
                        <div class="form-group">
                            <strong>Excluye:</strong>
                            {{ $saludCupss->excluye }}
                        </div>
                        <div class="form-group">
                            <strong>Simult:</strong>
                            {{ $saludCupss->simult }}
                        </div>
                        <div class="form-group">
                            <strong>Idcapitulo:</strong>
                            {{ $saludCupss->idCapitulo }}
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
