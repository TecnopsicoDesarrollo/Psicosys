@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Consultar Historia de Cabecera</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Consulta Registro en Historia de Cabecera</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salud-histocab.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>No Identi:</strong>
                            {{ $saludHistocab->no_identi }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre1:</strong>
                            {{ $saludHistocab->nombre1 }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre2:</strong>
                            {{ $saludHistocab->nombre2 }}
                        </div>
                        <div class="form-group">
                            <strong>Apelli1:</strong>
                            {{ $saludHistocab->apelli1 }}
                        </div>
                        <div class="form-group">
                            <strong>Apelli2:</strong>
                            {{ $saludHistocab->apelli2 }}
                        </div>
                        <div class="form-group">
                            <strong>Nomhisto:</strong>
                            {{ $saludHistocab->nomhisto }}
                        </div>
                        <div class="form-group">
                            <strong>Fechnac:</strong>
                            {{ $saludHistocab->fechnac }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $saludHistocab->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Cod Edad:</strong>
                            {{ $saludHistocab->cod_edad }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $saludHistocab->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Estcivil:</strong>
                            {{ $saludHistocab->estcivil }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Iden:</strong>
                            {{ $saludHistocab->tipo_iden }}
                        </div>
                        <div class="form-group">
                            <strong>Idocupac:</strong>
                            {{ $saludHistocab->idocupac }}
                        </div>
                        <div class="form-group">
                            <strong>Ideps:</strong>
                            {{ $saludHistocab->ideps }}
                        </div>
                        <div class="form-group">
                            <strong>Nomresp:</strong>
                            {{ $saludHistocab->nomresp }}
                        </div>
                        <div class="form-group">
                            <strong>Parenresp:</strong>
                            {{ $saludHistocab->parenresp }}
                        </div>
                        <div class="form-group">
                            <strong>Telresp:</strong>
                            {{ $saludHistocab->telresp }}
                        </div>
                        <div class="form-group">
                            <strong>Fechape:</strong>
                            {{ $saludHistocab->fechape }}
                        </div>
                        <div class="form-group">
                            <strong>Vivo:</strong>
                            {{ $saludHistocab->vivo }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $saludHistocab->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $saludHistocab->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $saludHistocab->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Idciudad:</strong>
                            {{ $saludHistocab->idciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Nomacom:</strong>
                            {{ $saludHistocab->nomacom }}
                        </div>
                        <div class="form-group">
                            <strong>Telacom:</strong>
                            {{ $saludHistocab->telacom }}
                        </div>
                        <div class="form-group">
                            <strong>Zona:</strong>
                            {{ $saludHistocab->zona }}
                        </div>
                        <div class="form-group">
                            <strong>Idestrato:</strong>
                            {{ $saludHistocab->idestrato }}
                        </div>
                        <div class="form-group">
                            <strong>Gae:</strong>
                            {{ $saludHistocab->gae }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $saludHistocab->usuario }}
                        </div>
                        <div class="form-group">
                            <strong>No Idenant:</strong>
                            {{ $saludHistocab->no_idenant }}
                        </div>
                        <div class="form-group">
                            <strong>Tipoafil:</strong>
                            {{ $saludHistocab->tipoafil }}
                        </div>
                        <div class="form-group">
                            <strong>Sangre:</strong>
                            {{ $saludHistocab->sangre }}
                        </div>
                        <div class="form-group">
                            <strong>Idciunac:</strong>
                            {{ $saludHistocab->idciunac }}
                        </div>
                        <div class="form-group">
                            <strong>Escolar:</strong>
                            {{ $saludHistocab->escolar }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $saludHistocab->foto }}
                        </div>
                        <div class="form-group">
                            <strong>E Mail:</strong>
                            {{ $saludHistocab->e_mail }}
                        </div>
                        <div class="form-group">
                            <strong>Idtipovinc:</strong>
                            {{ $saludHistocab->idTipovinc }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
   // <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
