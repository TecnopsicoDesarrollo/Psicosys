@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Consultar Medico</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Consultar registro en Maestra Medico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('maestra-medicos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $maestraMedico->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $maestraMedico->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $maestraMedico->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $maestraMedico->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $maestraMedico->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Mail:</strong>
                            {{ $maestraMedico->mail }}
                        </div>
                        <div class="form-group">
                            <strong>Tarjprof:</strong>
                            {{ $maestraMedico->tarjprof }}
                        </div>
                        <div class="form-group">
                            <strong>Idespecial:</strong>
                            {{ $maestraMedico->idEspecial }}
                        </div>
                        <div class="form-group">
                            <strong>Intervate:</strong>
                            {{ $maestraMedico->intervate }}
                        </div>
                        <div class="form-group">
                            <strong>Firma:</strong>
                            {{ $maestraMedico->firma }}
                        </div>
                        <div class="form-group">
                            <strong>No Identi:</strong>
                            {{ $maestraMedico->No_identi }}
                        </div>
                        <div class="form-group">
                            <strong>Fech Nac:</strong>
                            {{ $maestraMedico->fech_nac }}
                        </div>
                        <div class="form-group">
                            <strong>Tipodocu:</strong>
                            {{ $maestraMedico->tipodocu }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $maestraMedico->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Cod Edad:</strong>
                            {{ $maestraMedico->cod_edad }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $maestraMedico->activo }}
                        </div>
                        <div class="form-group">
                            <strong>Iduser:</strong>
                            {{ $maestraMedico->idUser }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $maestraMedico->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Dptonac:</strong>
                            {{ $maestraMedico->dptonac }}
                        </div>
                        <div class="form-group">
                            <strong>Idciudad:</strong>
                            {{ $maestraMedico->idciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Dptores:</strong>
                            {{ $maestraMedico->dptores }}
                        </div>
                        <div class="form-group">
                            <strong>Idciunac:</strong>
                            {{ $maestraMedico->idciunac }}
                        </div>
                        <div class="form-group">
                            <strong>Sangre:</strong>
                            {{ $maestraMedico->sangre }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $maestraMedico->foto }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $maestraMedico->area }}
                        </div>
                        <div class="form-group">
                            <strong>Salbasico:</strong>
                            {{ $maestraMedico->salbasico }}
                        </div>
                        <div class="form-group">
                            <strong>Idsalud:</strong>
                            {{ $maestraMedico->idSalud }}
                        </div>
                        <div class="form-group">
                            <strong>Idpension:</strong>
                            {{ $maestraMedico->idPension }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    //<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
