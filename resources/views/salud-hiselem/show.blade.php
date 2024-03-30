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
                            <span class="card-title">Show Salud Hiselem</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salud-hiselem.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Codele:</strong>
                            {{ $saludHiselem->codele }}
                        </div>
                        <div class="form-group">
                            <strong>Elemento:</strong>
                            {{ $saludHiselem->elemento }}
                        </div>
                        <div class="form-group">
                            <strong>Cm Nom:</strong>
                            {{ $saludHiselem->cm_nom }}
                        </div>
                        <div class="form-group">
                            <strong>Cm Tipo:</strong>
                            {{ $saludHiselem->cm_tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Cm Ancho:</strong>
                            {{ $saludHiselem->cm_ancho }}
                        </div>
                        <div class="form-group">
                            <strong>Cm Deci:</strong>
                            {{ $saludHiselem->cm_deci }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $saludHiselem->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Comando:</strong>
                            {{ $saludHiselem->comando }}
                        </div>
                        <div class="form-group">
                            <strong>Predeter:</strong>
                            {{ $saludHiselem->predeter }}
                        </div>
                        <div class="form-group">
                            <strong>Planti:</strong>
                            {{ $saludHiselem->planti }}
                        </div>
                        <div class="form-group">
                            <strong>Explica:</strong>
                            {{ $saludHiselem->explica }}
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
