@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Editar Tipos de Historia</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Salud Histipo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('salud-histipo.update', $saludHistipo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('salud-histipo.form')

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