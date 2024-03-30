@extends('layouts.app')

@section('template_title')
    {{ $maestraTipoaten->name ?? 'Show Maestra Tipoaten' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Maestra Tipoaten</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('maestra-tipoatens.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $maestraTipoaten->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nomtipo:</strong>
                            {{ $maestraTipoaten->nomtipo }}
                        </div>
                        <div class="form-group">
                            <strong>Rip:</strong>
                            {{ $maestraTipoaten->rip }}
                        </div>
                        <div class="form-group">
                            <strong>Bodega:</strong>
                            {{ $maestraTipoaten->bodega }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
