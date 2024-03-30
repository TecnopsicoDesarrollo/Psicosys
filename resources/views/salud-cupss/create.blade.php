@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Crear C.U.P.S.</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crea Nuevo Registro de Cups</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('salud-cupss.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('salud-cupss.form')

                        </form>
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
    //<script> console.log('Hi!'); </script>
@stop
