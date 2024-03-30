@extends('layouts.app')

@section('template_title')
    {{ $saludAdmision->name ?? 'Show Salud Admision' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Salud Admision</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salud-admisions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Dcto:</strong>
                            {{ $saludAdmision->dcto }}
                        </div>
                        <div class="form-group">
                            <strong>Serdoc:</strong>
                            {{ $saludAdmision->serdoc }}
                        </div>
                        <div class="form-group">
                            <strong>Numadm:</strong>
                            {{ $saludAdmision->numadm }}
                        </div>
                        <div class="form-group">
                            <strong>Idcontra:</strong>
                            {{ $saludAdmision->idcontra }}
                        </div>
                        <div class="form-group">
                            <strong>Idhisto:</strong>
                            {{ $saludAdmision->idhisto }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $saludAdmision->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Idmedico:</strong>
                            {{ $saludAdmision->idmedico }}
                        </div>
                        <div class="form-group">
                            <strong>Idtipovinc:</strong>
                            {{ $saludAdmision->idtipovinc }}
                        </div>
                        <div class="form-group">
                            <strong>Autoriz:</strong>
                            {{ $saludAdmision->autoriz }}
                        </div>
                        <div class="form-group">
                            <strong>Codfase:</strong>
                            {{ $saludAdmision->codfase }}
                        </div>
                        <div class="form-group">
                            <strong>Idcodaten:</strong>
                            {{ $saludAdmision->idcodaten }}
                        </div>
                        <div class="form-group">
                            <strong>Idfactura:</strong>
                            {{ $saludAdmision->idfactura }}
                        </div>
                        <div class="form-group">
                            <strong>Idcupspres:</strong>
                            {{ $saludAdmision->idcupspres }}
                        </div>
                        <div class="form-group">
                            <strong>Iddiagpres:</strong>
                            {{ $saludAdmision->iddiagpres }}
                        </div>
                        <div class="form-group">
                            <strong>Ideps:</strong>
                            {{ $saludAdmision->ideps }}
                        </div>
                        <div class="form-group">
                            <strong>Idcausaext:</strong>
                            {{ $saludAdmision->idcausaext }}
                        </div>
                        <div class="form-group">
                            <strong>Nopoliza:</strong>
                            {{ $saludAdmision->nopoliza }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $saludAdmision->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Cod Edad:</strong>
                            {{ $saludAdmision->cod_edad }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $saludAdmision->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $saludAdmision->usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Idfinalidad:</strong>
                            {{ $saludAdmision->idfinalidad }}
                        </div>
                        <div class="form-group">
                            <strong>Idegreso:</strong>
                            {{ $saludAdmision->idegreso }}
                        </div>
                        <div class="form-group">
                            <strong>Iddiaging:</strong>
                            {{ $saludAdmision->iddiaging }}
                        </div>
                        <div class="form-group">
                            <strong>Idcama:</strong>
                            {{ $saludAdmision->idcama }}
                        </div>
                        <div class="form-group">
                            <strong>Anula:</strong>
                            {{ $saludAdmision->anula }}
                        </div>
                        <div class="form-group">
                            <strong>Copago:</strong>
                            {{ $saludAdmision->copago }}
                        </div>
                        <div class="form-group">
                            <strong>Consant:</strong>
                            {{ $saludAdmision->consant }}
                        </div>
                        <div class="form-group">
                            <strong>Consact:</strong>
                            {{ $saludAdmision->consact }}
                        </div>
                        <div class="form-group">
                            <strong>Cuotamod:</strong>
                            {{ $saludAdmision->cuotamod }}
                        </div>
                        <div class="form-group">
                            <strong>Proyec:</strong>
                            {{ $saludAdmision->proyec }}
                        </div>
                        <div class="form-group">
                            <strong>Ideps1:</strong>
                            {{ $saludAdmision->ideps1 }}
                        </div>
                        <div class="form-group">
                            <strong>Notas:</strong>
                            {{ $saludAdmision->notas }}
                        </div>
                        <div class="form-group">
                            <strong>Admext:</strong>
                            {{ $saludAdmision->admext }}
                        </div>
                        <div class="form-group">
                            <strong>Idmedsoli:</strong>
                            {{ $saludAdmision->idmedsoli }}
                        </div>
                        <div class="form-group">
                            <strong>Fechsoli:</strong>
                            {{ $saludAdmision->fechsoli }}
                        </div>
                        <div class="form-group">
                            <strong>Idorigen:</strong>
                            {{ $saludAdmision->idorigen }}
                        </div>
                        <div class="form-group">
                            <strong>C19Fiebre:</strong>
                            {{ $saludAdmision->c19fiebre }}
                        </div>
                        <div class="form-group">
                            <strong>C19Tos:</strong>
                            {{ $saludAdmision->c19tos }}
                        </div>
                        <div class="form-group">
                            <strong>C19Difres:</strong>
                            {{ $saludAdmision->c19difres }}
                        </div>
                        <div class="form-group">
                            <strong>C19Viaje:</strong>
                            {{ $saludAdmision->c19viaje }}
                        </div>
                        <div class="form-group">
                            <strong>C19Person:</strong>
                            {{ $saludAdmision->c19person }}
                        </div>
                        <div class="form-group">
                            <strong>C19Confir:</strong>
                            {{ $saludAdmision->c19confir }}
                        </div>
                        <div class="form-group">
                            <strong>C19Trabaj:</strong>
                            {{ $saludAdmision->c19trabaj }}
                        </div>
                        <div class="form-group">
                            <strong>Tipoest:</strong>
                            {{ $saludAdmision->tipoest }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
