@extends('layouts.app')

@section('template_title')
    {{ $saludCausaext->name ?? 'Show Salud Causaext' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Salud Causaext</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salud-causaexts.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $saludCausaext->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Causaext:</strong>
                            {{ $saludCausaext->causaext }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
