@extends('adminlte::page')

@section('title', 'Psico.sys OnLine')

@section('content_header')
    <h1>Consultar Miembro Familia</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Salud Hisfami</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salud-hisfami.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Idhisto:</strong>
                            {{ $saludHisfami->idhisto }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $saludHisfami->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Idmedico:</strong>
                            {{ $saludHisfami->idmedico }}
                        </div>
                        <div class="form-group">
                            <strong>Idadmision:</strong>
                            {{ $saludHisfami->idadmision }}
                        </div>
                        <div class="form-group">
                            <strong>Miembro:</strong>
                            {{ $saludHisfami->miembro }}
                        </div>
                        <div class="form-group">
                            <strong>Parencon:</strong>
                            {{ $saludHisfami->parencon }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $saludHisfami->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Cod Edad:</strong>
                            {{ $saludHisfami->cod_edad }}
                        </div>
                        <div class="form-group">
                            <strong>Escolar:</strong>
                            {{ $saludHisfami->escolar }}
                        </div>
                        <div class="form-group">
                            <strong>Idocupac:</strong>
                            {{ $saludHisfami->idocupac }}
                        </div>
                        <div class="form-group">
                            <strong>Vivo:</strong>
                            {{ $saludHisfami->vivo }}
                        </div>
                        <div class="form-group">
                            <strong>Muerfec:</strong>
                            {{ $saludHisfami->muerfec }}
                        </div>
                        <div class="form-group">
                            <strong>Relacion:</strong>
                            {{ $saludHisfami->relacion }}
                        </div>
                        <div class="form-group">
                            <strong>Idesex:</strong>
                            {{ $saludHisfami->idesex }}
                        </div>
                        <div class="form-group">
                            <strong>Otropare:</strong>
                            {{ $saludHisfami->otropare }}
                        </div>
                        <div class="form-group">
                            <strong>Habita:</strong>
                            {{ $saludHisfami->habita }}
                        </div>
                        <div class="form-group">
                            <strong>Observ:</strong>
                            {{ $saludHisfami->observ }}
                        </div>
                        <div class="form-group">
                            <strong>Aporte:</strong>
                            {{ $saludHisfami->aporte }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $saludHisfami->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $saludHisfami->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Familia:</strong>
                            {{ $saludHisfami->familia }}
                        </div>
                        <div class="form-group">
                            <strong>Redapoy:</strong>
                            {{ $saludHisfami->redapoy }}
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
