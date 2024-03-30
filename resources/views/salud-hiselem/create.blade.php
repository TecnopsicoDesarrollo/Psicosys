@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Crear Elementos de Historia</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Elementos o Items del Registro de Salud Mental o Historia Clínica de Psicología</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('salud-hiselem.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('salud-hiselem.form')

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
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('planti');
        CKEDITOR.replace('explica');
    </script>

    <script>
        let opcion = document.getElementById('tipo')

        opcion.addEventListener("change", () => {
            var tipoelem = $('#tipo').val();
            console.log(tipoelem);

            if(tipoelem === "E"){
                $('#comando').attr("readonly", true);
                $('#comando').val("");
                $('#cm_nom').attr("readonly", false);
                $('#cm_tipo').attr("readonly", false);
                $('#planti').attr("readonly", false);
                $('#explica').attr("readonly", false);
            }else {
                $('#comando').attr("readonly", false);
                $('#cm_nom').attr("readonly", true);
                $('#cm_nom').val("");
                $('#cm_tipo').attr("readonly", true);
                $('#cm_tipo').val("");
                $('#planti').attr("readonly", true);
                $('#planti').val("");
                $('#explica').attr("readonly", true);
                $('#explica').val("");
            }
        });
    </script>
<!--     <script>
        let nomcam = document.getElementById('cm_nom')

        nomcam.addEventListener("change", function(){
            var selectedOption = nomcam.options[nomcam.selectedIndex];
            console.log(selectedOption.value + ': ' + selectedOption.text);
        });
    </script> -->
@stop
