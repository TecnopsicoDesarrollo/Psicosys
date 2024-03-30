@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Salud Hisestru</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salud-hisestru.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Idcodhis:</strong>
                            {{ $saludHisestru->idcodhis }}
                        </div>
                        <div class="form-group">
                            <strong>Idcodele:</strong>
                            {{ $saludHisestru->idcodele }}
                        </div>
                        <div class="form-group">
                            <strong>Orden:</strong>
                            {{ $saludHisestru->orden }}
                        </div>
                        <div class="form-group">
                            <strong>Siplanti:</strong>
                            {{ $saludHisestru->siplanti }}
                        </div>
                        <div class="form-group">
                            <strong>Planti:</strong>
                            {{ $saludHisestru->planti }}
                        </div>
                        <div class="form-group">
                            <strong>Formul:</strong>
                            {{ $saludHisestru->formul }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $saludHisestru->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Comando:</strong>
                            {{ $saludHisestru->comando }}
                        </div>
                        <div class="form-group">
                            <strong>Areaapli:</strong>
                            {{ $saludHisestru->areaapli }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
@stop

@section('js')
@stop
