@extends('layouts.app')

@section('template_title')
    {{ $saludHisplanti->name ?? 'Show Salud Hisplanti' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Salud Hisplanti</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salud-hisplanti.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codplanti:</strong>
                            {{ $saludHisplanti->codplanti }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $saludHisplanti->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Planti:</strong>
                            {{ $saludHisplanti->planti }}
                        </div>
                        <div class="form-group">
                            <strong>Tipoexa:</strong>
                            {{ $saludHisplanti->tipoexa }}
                        </div>
                        <div class="form-group">
                            <strong>Edadmin:</strong>
                            {{ $saludHisplanti->edadmin }}
                        </div>
                        <div class="form-group">
                            <strong>Edadmax:</strong>
                            {{ $saludHisplanti->edadmax }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $saludHisplanti->sexo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
