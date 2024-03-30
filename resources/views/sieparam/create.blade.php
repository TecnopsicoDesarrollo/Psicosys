@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Crear Parametros</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Sieparam</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('sieparams.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('sieparam.form')

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