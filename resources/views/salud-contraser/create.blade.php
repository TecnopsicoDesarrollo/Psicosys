@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Cargar Servicios al Contrato</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Salud Contraser</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('salud-contrasers.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('salud-contraser.form')

                        </form>
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