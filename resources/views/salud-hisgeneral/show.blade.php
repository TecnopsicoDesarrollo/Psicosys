@extends('adminlte::page')

@section('title', 'Psico.sys OnLine')

@section('content_header')
    <h1>Consulta Historia Clinica</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Salud Hisgeneral</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salud-hisgeneral.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Idhisto:</strong>
                            {{ $saludHisgeneral->idhisto }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $saludHisgeneral->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Idmedico:</strong>
                            {{ $saludHisgeneral->idmedico }}
                        </div>
                        <div class="form-group">
                            <strong>Idadmision:</strong>
                            {{ $saludHisgeneral->idadmision }}
                        </div>
                        <div class="form-group">
                            <strong>Idcodaten:</strong>
                            {{ $saludHisgeneral->idcodaten }}
                        </div>
                        <div class="form-group">
                            <strong>Moting:</strong>
                            {{ $saludHisgeneral->moting }}
                        </div>
                        <div class="form-group">
                            <strong>Enferact:</strong>
                            {{ $saludHisgeneral->enferact }}
                        </div>
                        <div class="form-group">
                            <strong>Antefam:</strong>
                            {{ $saludHisgeneral->antefam }}
                        </div>
                        <div class="form-group">
                            <strong>Anteper:</strong>
                            {{ $saludHisgeneral->anteper }}
                        </div>
                        <div class="form-group">
                            <strong>Peso:</strong>
                            {{ $saludHisgeneral->peso }}
                        </div>
                        <div class="form-group">
                            <strong>Talla:</strong>
                            {{ $saludHisgeneral->talla }}
                        </div>
                        <div class="form-group">
                            <strong>Frecar:</strong>
                            {{ $saludHisgeneral->frecar }}
                        </div>
                        <div class="form-group">
                            <strong>Freres:</strong>
                            {{ $saludHisgeneral->freres }}
                        </div>
                        <div class="form-group">
                            <strong>Tempe:</strong>
                            {{ $saludHisgeneral->tempe }}
                        </div>
                        <div class="form-group">
                            <strong>Tendias:</strong>
                            {{ $saludHisgeneral->tendias }}
                        </div>
                        <div class="form-group">
                            <strong>Tensist:</strong>
                            {{ $saludHisgeneral->tensist }}
                        </div>
                        <div class="form-group">
                            <strong>Sentidos:</strong>
                            {{ $saludHisgeneral->sentidos }}
                        </div>
                        <div class="form-group">
                            <strong>Huesos:</strong>
                            {{ $saludHisgeneral->huesos }}
                        </div>
                        <div class="form-group">
                            <strong>Respi:</strong>
                            {{ $saludHisgeneral->respi }}
                        </div>
                        <div class="form-group">
                            <strong>Cardio:</strong>
                            {{ $saludHisgeneral->cardio }}
                        </div>
                        <div class="form-group">
                            <strong>Nervio:</strong>
                            {{ $saludHisgeneral->nervio }}
                        </div>
                        <div class="form-group">
                            <strong>Gastro:</strong>
                            {{ $saludHisgeneral->gastro }}
                        </div>
                        <div class="form-group">
                            <strong>Urinar:</strong>
                            {{ $saludHisgeneral->urinar }}
                        </div>
                        <div class="form-group">
                            <strong>Endocri:</strong>
                            {{ $saludHisgeneral->endocri }}
                        </div>
                        <div class="form-group">
                            <strong>Cabeza:</strong>
                            {{ $saludHisgeneral->cabeza }}
                        </div>
                        <div class="form-group">
                            <strong>Iddiaging:</strong>
                            {{ $saludHisgeneral->iddiaging }}
                        </div>
                        <div class="form-group">
                            <strong>Iddiaging1:</strong>
                            {{ $saludHisgeneral->iddiaging1 }}
                        </div>
                        <div class="form-group">
                            <strong>Iddiaging2:</strong>
                            {{ $saludHisgeneral->iddiaging2 }}
                        </div>
                        <div class="form-group">
                            <strong>Iddiaging3:</strong>
                            {{ $saludHisgeneral->iddiaging3 }}
                        </div>
                        <div class="form-group">
                            <strong>Proxcita:</strong>
                            {{ $saludHisgeneral->proxcita }}
                        </div>
                        <div class="form-group">
                            <strong>Iddiagsal:</strong>
                            {{ $saludHisgeneral->iddiagsal }}
                        </div>
                        <div class="form-group">
                            <strong>Iddiagsal1:</strong>
                            {{ $saludHisgeneral->iddiagsal1 }}
                        </div>
                        <div class="form-group">
                            <strong>Iddiagsal2:</strong>
                            {{ $saludHisgeneral->iddiagsal2 }}
                        </div>
                        <div class="form-group">
                            <strong>Iddiagsal3:</strong>
                            {{ $saludHisgeneral->iddiagsal3 }}
                        </div>
                        <div class="form-group">
                            <strong>Iddiagsal4:</strong>
                            {{ $saludHisgeneral->iddiagsal4 }}
                        </div>
                        <div class="form-group">
                            <strong>Iddiagsal5:</strong>
                            {{ $saludHisgeneral->iddiagsal5 }}
                        </div>
                        <div class="form-group">
                            <strong>Iddiagsal6:</strong>
                            {{ $saludHisgeneral->iddiagsal6 }}
                        </div>
                        <div class="form-group">
                            <strong>Imc:</strong>
                            {{ $saludHisgeneral->imc }}
                        </div>
                        <div class="form-group">
                            <strong>Imcexp:</strong>
                            {{ $saludHisgeneral->imcexp }}
                        </div>
                        <div class="form-group">
                            <strong>Pt:</strong>
                            {{ $saludHisgeneral->pt }}
                        </div>
                        <div class="form-group">
                            <strong>Ptexp:</strong>
                            {{ $saludHisgeneral->ptexp }}
                        </div>
                        <div class="form-group">
                            <strong>Te:</strong>
                            {{ $saludHisgeneral->te }}
                        </div>
                        <div class="form-group">
                            <strong>Teexp:</strong>
                            {{ $saludHisgeneral->teexp }}
                        </div>
                        <div class="form-group">
                            <strong>Pce:</strong>
                            {{ $saludHisgeneral->pce }}
                        </div>
                        <div class="form-group">
                            <strong>Pceexp:</strong>
                            {{ $saludHisgeneral->pceexp }}
                        </div>
                        <div class="form-group">
                            <strong>Pe:</strong>
                            {{ $saludHisgeneral->pe }}
                        </div>
                        <div class="form-group">
                            <strong>Peexp:</strong>
                            {{ $saludHisgeneral->peexp }}
                        </div>
                        <div class="form-group">
                            <strong>Cc:</strong>
                            {{ $saludHisgeneral->cc }}
                        </div>
                        <div class="form-group">
                            <strong>Ccexp:</strong>
                            {{ $saludHisgeneral->ccexp }}
                        </div>
                        <div class="form-group">
                            <strong>Alergia:</strong>
                            {{ $saludHisgeneral->alergia }}
                        </div>
                        <div class="form-group">
                            <strong>Sivigila:</strong>
                            {{ $saludHisgeneral->sivigila }}
                        </div>
                        <div class="form-group">
                            <strong>Fechfin:</strong>
                            {{ $saludHisgeneral->fechfin }}
                        </div>
                        <div class="form-group">
                            <strong>Edadmes:</strong>
                            {{ $saludHisgeneral->edadmes }}
                        </div>
                        <div class="form-group">
                            <strong>Tratam:</strong>
                            {{ $saludHisgeneral->tratam }}
                        </div>
                        <div class="form-group">
                            <strong>Revsist:</strong>
                            {{ $saludHisgeneral->revsist }}
                        </div>
                        <div class="form-group">
                            <strong>Exafisg:</strong>
                            {{ $saludHisgeneral->exafisg }}
                        </div>
                        <div class="form-group">
                            <strong>Examen:</strong>
                            {{ $saludHisgeneral->examen }}
                        </div>
                        <div class="form-group">
                            <strong>Impdiaa:</strong>
                            {{ $saludHisgeneral->impdiaa }}
                        </div>
                        <div class="form-group">
                            <strong>Tratamb:</strong>
                            {{ $saludHisgeneral->tratamb }}
                        </div>
                        <div class="form-group">
                            <strong>Evoamb:</strong>
                            {{ $saludHisgeneral->evoamb }}
                        </div>
                        <div class="form-group">
                            <strong>Trathos:</strong>
                            {{ $saludHisgeneral->trathos }}
                        </div>
                        <div class="form-group">
                            <strong>Evohos:</strong>
                            {{ $saludHisgeneral->evohos }}
                        </div>
                        <div class="form-group">
                            <strong>Tramedg:</strong>
                            {{ $saludHisgeneral->tramedg }}
                        </div>
                        <div class="form-group">
                            <strong>Evomedg:</strong>
                            {{ $saludHisgeneral->evomedg }}
                        </div>
                        <div class="form-group">
                            <strong>Apreper:</strong>
                            {{ $saludHisgeneral->apreper }}
                        </div>
                        <div class="form-group">
                            <strong>Evoenfe:</strong>
                            {{ $saludHisgeneral->evoenfe }}
                        </div>
                        <div class="form-group">
                            <strong>Evoterocu:</strong>
                            {{ $saludHisgeneral->evoterocu }}
                        </div>
                        <div class="form-group">
                            <strong>Resum:</strong>
                            {{ $saludHisgeneral->resum }}
                        </div>
                        <div class="form-group">
                            <strong>Concprof:</strong>
                            {{ $saludHisgeneral->concprof }}
                        </div>
                        <div class="form-group">
                            <strong>Antepef:</strong>
                            {{ $saludHisgeneral->antepef }}
                        </div>
                        <div class="form-group">
                            <strong>Valsicam:</strong>
                            {{ $saludHisgeneral->valsicam }}
                        </div>
                        <div class="form-group">
                            <strong>Valsicho:</strong>
                            {{ $saludHisgeneral->valsicho }}
                        </div>
                        <div class="form-group">
                            <strong>Reapoyo:</strong>
                            {{ $saludHisgeneral->reapoyo }}
                        </div>
                        <div class="form-group">
                            <strong>Evsocial:</strong>
                            {{ $saludHisgeneral->evsocial }}
                        </div>
                        <div class="form-group">
                            <strong>Ningre:</strong>
                            {{ $saludHisgeneral->ningre }}
                        </div>
                        <div class="form-group">
                            <strong>Evohosdia:</strong>
                            {{ $saludHisgeneral->evohosdia }}
                        </div>
                        <div class="form-group">
                            <strong>Laborat:</strong>
                            {{ $saludHisgeneral->laborat }}
                        </div>
                        <div class="form-group">
                            <strong>Planman:</strong>
                            {{ $saludHisgeneral->planman }}
                        </div>
                        <div class="form-group">
                            <strong>Planegr:</strong>
                            {{ $saludHisgeneral->planegr }}
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
