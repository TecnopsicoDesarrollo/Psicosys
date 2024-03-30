{{--  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>  --}}

@extends('adminlte::page')

@section('title', 'Psico.sys Online')

@section('content_header')
    <!-- <img src="{{url('/images/titulo_psicosys.png')}}"/> -->
@stop

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <img src="{{url('/images/titulo_psicosys.png')}}"/>
            <!-- <span class="card-title">Menu por procesos</span> -->
        </div>
        <div class="card-body">
            <div class="box box-info padding-1">
                <div class="box-body">

                    <div class="form-row">
                        <div class="col-sm-3">
                            <div class="card border-success sm-3" style="max-width: 18rem;">
                                <div class="card-header bg-success text-white border-success">HISTORIA CLINICA</div>
                                <div class="card-body bg-transparent border-success">
                                    <ul>
                                        <li><a href="">Plantillas de Historia</a></li>
                                        <li><a href="">Seguridad de Historia</a></li>
                                        <li><a href="{{ route('salud-histocab.index') }}">Cabecera de Historia</a></li>
                                        <li><a href="{{ route('salud-hisgeneral.create') }}">Registro de Historia</a></li>
                                    </ul>
                                </div>
                                <div class="card-footer bg-transparent border-success">Opciones relacionadas con el Registro en la Historia Clinica.</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card border-danger sm-2" style="max-width: 18rem;">
                                <div class="card-header bg-danger text-white border-danger">TABLAS SALUD</div>
                                <div class="card-body bg-transparent border-danger">
                                    <ul>
                                        <li><a href="{{ route('maestra-medico.index') }}">Psicologos</a></li>
                                        <li><a href="{{ route('salud-cupss.index') }}">C.U.P.S</a></li>
                                        <li><a href="{{ route('salud-cie.index') }}">CIE 10</a></li>
                                        <li><a href="{{ route('salud-dsmv.index') }}">DSM V</a></li>
                                    </ul>
                                </div>
                                <div class="card-footer bg-transparent border-danger">Opciones para tablas de salud.</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card border-warning sm-3" style="max-width: 18rem;">
                                <div class="card-header bg-warning text-white border-warning">CONSULTAS</div>
                                <div class="card-body bg-transparent border-warning">
                                    <ul>
                                        <li><a href="">Listados de Historia</a></li>
                                        <li><a href="">Diagnosticos por Sexo</a></li>
                                        <li><a href="">Diagnosticos por Edad</a></li>
                                        <li><a href="">Diagnostico por Procedencia</a></li>
                                    </ul>
                                </div>
                                <div class="card-footer bg-transparent border-warning">Listados y reportes Estadisticos de salud.</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{url('/images/logo_psicosys.png')}}"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
