@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Consultar Parametros</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Consulta de Parametros Generales</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sieparams.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Sie Contab:</strong>
                            {{ $sieparam->sie_contab }}
                        </div>
                        <div class="form-group">
                            <strong>Licen:</strong>
                            {{ $sieparam->licen }}
                        </div>
                        <div class="form-group">
                            <strong>Numemp:</strong>
                            {{ $sieparam->numemp }}
                        </div>
                        <div class="form-group">
                            <strong>Serialdd:</strong>
                            {{ $sieparam->serialdd }}
                        </div>
                        <div class="form-group">
                            <strong>Logo:</strong>
                            {{ $sieparam->logo }}
                        </div>
                        <div class="form-group">
                            <strong>Codpres:</strong>
                            {{ $sieparam->codpres }}
                        </div>
                        <div class="form-group">
                            <strong>Iva:</strong>
                            {{ $sieparam->iva }}
                        </div>
                        <div class="form-group">
                            <strong>Ctacopa:</strong>
                            {{ $sieparam->ctacopa }}
                        </div>
                        <div class="form-group">
                            <strong>Ctacopcxc:</strong>
                            {{ $sieparam->ctacopcxc }}
                        </div>
                        <div class="form-group">
                            <strong>Horatemp:</strong>
                            {{ $sieparam->horatemp }}
                        </div>
                        <div class="form-group">
                            <strong>Horinidis:</strong>
                            {{ $sieparam->horinidis }}
                        </div>
                        <div class="form-group">
                            <strong>Horfindis:</strong>
                            {{ $sieparam->horfindis }}
                        </div>
                        <div class="form-group">
                            <strong>Ctacxcglo:</strong>
                            {{ $sieparam->ctacxcglo }}
                        </div>
                        <div class="form-group">
                            <strong>Ctagasglo:</strong>
                            {{ $sieparam->ctagasglo }}
                        </div>
                        <div class="form-group">
                            <strong>Ctacopgas:</strong>
                            {{ $sieparam->ctacopgas }}
                        </div>
                        <div class="form-group">
                            <strong>Contproy:</strong>
                            {{ $sieparam->contproy }}
                        </div>
                        <div class="form-group">
                            <strong>Proveefac:</strong>
                            {{ $sieparam->proveefac }}
                        </div>
                        <div class="form-group">
                            <strong>Redondea:</strong>
                            {{ $sieparam->redondea }}
                        </div>
                        <div class="form-group">
                            <strong>Fotodef:</strong>
                            {{ $sieparam->fotodef }}
                        </div>
                        <div class="form-group">
                            <strong>Hisocup:</strong>
                            {{ $sieparam->hisocup }}
                        </div>
                        <div class="form-group">
                            <strong>Histera:</strong>
                            {{ $sieparam->histera }}
                        </div>
                        <div class="form-group">
                            <strong>Hispsic:</strong>
                            {{ $sieparam->hispsic }}
                        </div>
                        <div class="form-group">
                            <strong>Hiscons:</strong>
                            {{ $sieparam->hiscons }}
                        </div>
                        <div class="form-group">
                            <strong>Hisimag:</strong>
                            {{ $sieparam->hisimag }}
                        </div>
                        <div class="form-group">
                            <strong>Hisaudi:</strong>
                            {{ $sieparam->hisaudi }}
                        </div>
                        <div class="form-group">
                            <strong>Hisespi:</strong>
                            {{ $sieparam->hisespi }}
                        </div>
                        <div class="form-group">
                            <strong>Hisopto:</strong>
                            {{ $sieparam->hisopto }}
                        </div>
                        <div class="form-group">
                            <strong>Sicree:</strong>
                            {{ $sieparam->sicree }}
                        </div>
                        <div class="form-group">
                            <strong>Porcree:</strong>
                            {{ $sieparam->porcree }}
                        </div>
                        <div class="form-group">
                            <strong>Debecree:</strong>
                            {{ $sieparam->debecree }}
                        </div>
                        <div class="form-group">
                            <strong>Habecree:</strong>
                            {{ $sieparam->habecree }}
                        </div>
                        <div class="form-group">
                            <strong>Cboespe:</strong>
                            {{ $sieparam->cboespe }}
                        </div>
                        <div class="form-group">
                            <strong>Ctamod:</strong>
                            {{ $sieparam->ctamod }}
                        </div>
                        <div class="form-group">
                            <strong>Copaest:</strong>
                            {{ $sieparam->copaest }}
                        </div>
                        <div class="form-group">
                            <strong>Bloqcon:</strong>
                            {{ $sieparam->bloqcon }}
                        </div>
                        <div class="form-group">
                            <strong>Costodet:</strong>
                            {{ $sieparam->costodet }}
                        </div>
                        <div class="form-group">
                            <strong>Hisocup1:</strong>
                            {{ $sieparam->hisocup1 }}
                        </div>
                        <div class="form-group">
                            <strong>Hislabo:</strong>
                            {{ $sieparam->hislabo }}
                        </div>
                        <div class="form-group">
                            <strong>Siica:</strong>
                            {{ $sieparam->siica }}
                        </div>
                        <div class="form-group">
                            <strong>Tasaica:</strong>
                            {{ $sieparam->tasaica }}
                        </div>
                        <div class="form-group">
                            <strong>Debeica:</strong>
                            {{ $sieparam->debeica }}
                        </div>
                        <div class="form-group">
                            <strong>Habeica:</strong>
                            {{ $sieparam->habeica }}
                        </div>
                        <div class="form-group">
                            <strong>Sibom:</strong>
                            {{ $sieparam->sibom }}
                        </div>
                        <div class="form-group">
                            <strong>Porcbom:</strong>
                            {{ $sieparam->porcbom }}
                        </div>
                        <div class="form-group">
                            <strong>Debebom:</strong>
                            {{ $sieparam->debebom }}
                        </div>
                        <div class="form-group">
                            <strong>Habebom:</strong>
                            {{ $sieparam->habebom }}
                        </div>
                        <div class="form-group">
                            <strong>Sirtefte:</strong>
                            {{ $sieparam->sirtefte }}
                        </div>
                        <div class="form-group">
                            <strong>Porrte:</strong>
                            {{ $sieparam->porrte }}
                        </div>
                        <div class="form-group">
                            <strong>Deberte:</strong>
                            {{ $sieparam->deberte }}
                        </div>
                        <div class="form-group">
                            <strong>Costinv:</strong>
                            {{ $sieparam->costinv }}
                        </div>
                        <div class="form-group">
                            <strong>Rutagem:</strong>
                            {{ $sieparam->rutagem }}
                        </div>
                        <div class="form-group">
                            <strong>Sikit:</strong>
                            {{ $sieparam->sikit }}
                        </div>
                        <div class="form-group">
                            <strong>Tipoliq:</strong>
                            {{ $sieparam->tipoliq }}
                        </div>
                        <div class="form-group">
                            <strong>Regimen:</strong>
                            {{ $sieparam->regimen }}
                        </div>
                        <div class="form-group">
                            <strong>Hispeq:</strong>
                            {{ $sieparam->hispeq }}
                        </div>
                        <div class="form-group">
                            <strong>Covid19:</strong>
                            {{ $sieparam->covid19 }}
                        </div>
                        <div class="form-group">
                            <strong>Ushispol:</strong>
                            {{ $sieparam->ushispol }}
                        </div>
                        <div class="form-group">
                            <strong>Ushisoxi:</strong>
                            {{ $sieparam->ushisoxi }}
                        </div>
                        <div class="form-group">
                            <strong>Ushispre:</strong>
                            {{ $sieparam->ushispre }}
                        </div>
                        <div class="form-group">
                            <strong>Usbod:</strong>
                            {{ $sieparam->usbod }}
                        </div>
                        <div class="form-group">
                            <strong>Usprovee:</strong>
                            {{ $sieparam->usprovee }}
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
