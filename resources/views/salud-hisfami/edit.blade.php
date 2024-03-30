@extends('adminlte::page')

@section('title', 'Psico.sys OnLine')

@section('content_header')
    <h1>Editar miembro familia</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')
 
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Salud Hisfami</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('salud-hisfami.update', $saludHisfami->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('salud-hisfami.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
@stop

@section('js')
@stop
