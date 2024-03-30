@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Consulta de EPS</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Consulta registro en Maestra Eps</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('maestra-epss.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $maestraEpss->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Entidad:</strong>
                            {{ $maestraEpss->entidad }}
                        </div>
                        <div class="form-group">
                            <strong>Tipenti:</strong>
                            {{ $maestraEpss->tipenti }}
                        </div>
                        <div class="form-group">
                            <strong>No Identi:</strong>
                            {{ $maestraEpss->no_identi }}
                        </div>
                        <div class="form-group">
                            <strong>Idtercero:</strong>
                            {{ $maestraEpss->idTercero }}
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
