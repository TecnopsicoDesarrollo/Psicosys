@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Crear Personal</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Registro General de Profesionales</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('maestra-medico.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('maestra-medico.form')

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
    <script>
        $(document).ready(function(){
            $('#fechnac').focusout(function() {
                var nacimiento = new Date($('#fechnac').val());
                var hoy= new Date();
                var diasdif=0;
                var contdias=0;
                var edad=0;
                var codedad = ' ';

                var diasdif= hoy.getTime()-nacimiento.getTime();
	            var contdias = Math.round(diasdif/(1000*60*60*24));
                if(contdias < 30){
                    edad = contdias
                    codedad = 'D';
                }else if(contdias < 365){
                    edad = parseInt(contdias/30);
                    codedad = 'M';
                }else {
                    edad = parseInt(contdias/365);
                    codedad = 'A';
                }

                $('#edad').val(edad);
                $('#cod_edad').val(codedad);
            });
        });
    </script>
@stop
