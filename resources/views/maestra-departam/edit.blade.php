@extends('adminlte::page')

@section('title', 'Psico.sys OnLine')

@section('content_header')
    <h1>Edita Departamento</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Modifica registro en Maestra Departamento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('maestra-departam.update', $maestraDepartam->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('maestra-departam.form')

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
@stop