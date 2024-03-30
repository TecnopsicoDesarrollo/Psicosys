@extends('adminlte::page')

@section('title', 'Psico.sys OnLine')

@section('content_header')
    <h1>Consultar Departamento</h1>
    //{{ $maestraDepartam->name ?? 'Show Maestra Departam' }}
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Consulta registro en Maestra Departamento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('maestra-departam.index') }}">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <strong>Codigo:</strong>
                                {{ $maestraDepartam->codigo }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Dpto:</strong>
                                {{ $maestraDepartam->dpto }}
                            </div>
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
