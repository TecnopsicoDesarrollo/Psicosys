@extends('adminlte::page')

@section('title', 'Psico.sys OnLine')

@section('content_header')
    <h1>Consultar Estrato</h1>
    //{{ $maestraEstrato->name ?? 'Show Maestra Estrato' }}
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Consulta Registro en Maestra Estrato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('maestra-estrato.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $maestraEstrato->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Estrato:</strong>
                            {{ $maestraEstrato->estrato }}
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
