@extends('adminlte::page')

@section('title', 'Psico.sys OnLine')

@section('content_header')
    <h1>Crear Estrato</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crea Registro en Maestra Estrato</span>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif                                        
                    <div class="card-body">
                        <form method="POST" action="{{ route('maestra-estrato.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('maestra-estrato.form')

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