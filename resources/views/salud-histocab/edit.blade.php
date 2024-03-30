@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Editar Historia de Cabecera</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Salud Histocab</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('salud-histocab.update', $saludHistocab->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('salud-histocab.form')

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
                var codedad = " ";

                var diasdif= hoy.getTime()-nacimiento.getTime();
	            var contdias = Math.round(diasdif/(1000*60*60*24));
                if(contdias < 30){
                    edad = contdias
                    codedad = "D";
                }else if(contdias < 365){
                    edad = parseInt(contdias/30);
                    codedad = "M";
                }else {
                    edad = parseInt(contdias/365);
                    codedad = "A";
                }

                $('#edad').val(edad);
                $('#cod_edad').val(codedad);
            });
        });
    </script>
    <script>
        let opcion = document.getElementById('ideps')

        opcion.addEventListener("change", () => {
            var parametros = {
                'id': opcion.options[opcion.selectedIndex].value,
                '_token': $('input[name=_token]').val()
            }

            $.ajax({
                    url: '{{route('cargaContra.post')}}',
                    type: 'POST',
                    data: parametros,
                    dataType: 'JSON',
                    beforeSend: function (e) {
                        /* console.log('bloqueo botones');
                        console.log(e); */
                    },
                    complete: function (a) {
                        /* console.log('desbloqueo botones');
                        console.log(a); */
                    },
                    success: function(respuesta) {
                        //console.log(respuesta);
                        $("#display").html(respuesta.table_data);
                    },
                    error: function (jqXHR) {
                        // console.log(jqXHR);
                    }
            });
        });
    </script>
    <script>
        var btn = document.getElementById('btn_grabar');

        btn.addEventListener('click',function(){
            var nomb1 = document.getElementById('nombre1').value;
            var nomb2 = document.getElementById('nombre2').value;
            var apel1 = document.getElementById('apelli1').value;
            var apel2 = document.getElementById('apelli2').value;

            var nombres = (nomb1.trim())+" "+(nomb2==="" ? "" : (nomb2.trim()));
            var apellidos = (apel1.trim())+" "+(apel2==="" ? "" : (apel2.trim()));
            $('#nomhisto').val(apellidos+" "+nombres);
        })
    </script>
@stop
