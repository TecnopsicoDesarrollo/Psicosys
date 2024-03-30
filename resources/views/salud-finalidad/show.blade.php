@extends('layouts.app')

@section('template_title')
    {{ $saludFinalidad->name ?? 'Show Salud Finalidad' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Salud Finalidad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salud-finalidads.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $saludFinalidad->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Finalidad:</strong>
                            {{ $saludFinalidad->finalidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
