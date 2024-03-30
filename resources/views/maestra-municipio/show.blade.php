@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Consulta de Municipio</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Consulta en Maestra Municipio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('maestra-municipio.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Codigo DANE:</strong>
                            {{ $maestraMunicipio->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $maestraMunicipio->maestraDepartam->dpto }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $maestraMunicipio->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Departamento:</strong>
                            {{ $maestraMunicipio->dpto }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Municipio:</strong>
                            {{ $maestraMunicipio->cod_muni }}
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
