@extends('layouts.app')

@section('template_title')
    {{ $saludHissegu->name ?? 'Show Salud Hissegu' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Salud Hissegu</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salud-hissegu.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idcodhis:</strong>
                            {{ $saludHissegu->idcodhis }}
                        </div>
                        <div class="form-group">
                            <strong>Idcodele:</strong>
                            {{ $saludHissegu->idcodele }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $saludHissegu->usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Sec Prompt:</strong>
                            {{ $saludHissegu->sec_prompt }}
                        </div>
                        <div class="form-group">
                            <strong>Idmedico:</strong>
                            {{ $saludHissegu->idmedico }}
                        </div>
                        <div class="form-group">
                            <strong>Sec Adic:</strong>
                            {{ $saludHissegu->sec_adic }}
                        </div>
                        <div class="form-group">
                            <strong>Sec Edit:</strong>
                            {{ $saludHissegu->sec_edit }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
