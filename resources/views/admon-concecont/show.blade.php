@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Consulta de Concepto Contable</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Concepto contable</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admon-concecont.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <strong>Codigo:</strong>
                                    {{ $admonConcecont->codigo }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Descripción:</strong>
                                    {{ $admonConcecont->concepto }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>Cta Debe:</strong>
                                    {{ $admonConcecont->cta_debe }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>Cta Haber:</strong>
                            {{ $admonConcecont->cta_haber }}
                        </div>
                        <div class="form-group">
                            <strong>Cta Iva:</strong>
                            {{ $admonConcecont->cta_iva }}
                        </div>
                        <div class="form-group">
                            <strong>Cta Riva:</strong>
                            {{ $admonConcecont->cta_riva }}
                        </div>
                        <div class="form-group">
                            <strong>Cta Dscto:</strong>
                            {{ $admonConcecont->cta_dscto }}
                        </div>
                        <div class="form-group">
                            <strong>Cta Inven:</strong>
                            {{ $admonConcecont->cta_inven }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Mov:</strong>
                            {{ $admonConcecont->tipo_mov }}
                        </div>
                        <div class="form-group">
                            <strong>Cta Costo:</strong>
                            {{ $admonConcecont->cta_costo }}
                        </div>
                        <div class="form-group">
                            <strong>Proyec:</strong>
                            {{ $admonConcecont->proyec }}
                        </div>
                        <div class="form-group">
                            <strong>Cta Almac:</strong>
                            {{ $admonConcecont->cta_almac }}
                        </div>
                        <div class="form-group">
                            <strong>Ivalmac:</strong>
                            {{ $admonConcecont->ivalmac }}
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
