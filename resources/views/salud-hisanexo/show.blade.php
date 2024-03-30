@extends('layouts.app')

@section('template_title')
    {{ $saludHisanexo->name ?? 'Show Salud Hisanexo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Salud Hisanexo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salud-hisanexo.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idadmision:</strong>
                            {{ $saludHisanexo->idadmision }}
                        </div>
                        <div class="form-group">
                            <strong>Idhisto:</strong>
                            {{ $saludHisanexo->idhisto }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $saludHisanexo->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle:</strong>
                            {{ $saludHisanexo->detalle }}
                        </div>
                        <div class="form-group">
                            <strong>Rutadoc:</strong>
                            {{ $saludHisanexo->rutadoc }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $saludHisanexo->area }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $saludHisanexo->usuario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
