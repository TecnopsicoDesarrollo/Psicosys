@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Salud Hisestru</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('salud-hisestru.update', $saludHisestru->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('salud-hisestru.form')

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
        //Ajax para habilitar o no campos segun el elemento
        let opcion = document.getElementById('idcodele')

        opcion.addEventListener("change", () => {
            var parametros = {
                'id': opcion.options[opcion.selectedIndex].value,
                '_token': $('input[name=_token]').val()
            }

            $.ajax({
                url: '{{route('cargaElemento.post')}}',
                type: 'GET',
                data: parametros,
                dataType: 'JSON',
                success: function(respuesta) {
                    var tamaño = respuesta.length;
                    console.log(respuesta)

                    if(tamaño === 0){
                        alert("No puede usar este elementos en esta estructura. Verifique si el elementos esta duplicado o si el campo relacionado esta duplicado.");
                        $('#siplanti').val("");
                        $('#formul').val("");
                        $('#planti').val("");
                        $('#areaapli').val("");
                        $('#idcodele').focus()
                    } else {
                        var tipo = respuesta[0].tipo
                        var comando = respuesta[0].comando
                        var plantilla = respuesta[0].planti

                        $("#tipo").val(tipo);
                        $("#comando").val(comando);
                        $("#planti").val(plantilla);

                        if(tipo === "E"){
                            $('#planti').attr("readonly", false);
                            $('#siplanti').attr("disabled", false);
                            $('#formul').attr("disabled", false);
                            $('#areaapli').attr("disabled", true);
                        }else {
                            $('#siplanti').attr("disabled", true);
                            $('#siplanti').val("");
                            $('#formul').attr("disabled", true);
                            $('#formul').val("");
                            $('#planti').attr("readonly", true);
                            $('#planti').val("");
                            $('#areaapli').attr("disabled", false);
                            $('#areaapli').val("");
                        }
                    }
                },
                error: function (jqXHR) {
                    // console.log(jqXHR);
                }
            });
        });
    </script>

    <script>
        //Ajax para validar si el orden ya existe
        let orden1 = document.getElementById('orden')

        orden1.addEventListener("change", () => {
            var parametros = {
                'id': orden1.value,
                '_token': $('input[name=_token]').val()
            }

            $.ajax({
                url: '{{route('validaOrden.post')}}',
                type: 'GET',
                data: parametros,
                dataType: 'JSON',
                success: function(respuesta) {
                    var valida = respuesta.length;

                    if(valida === 0){
                        //no existe este orden en la tabla se puede grabar
                    }else {
                        alert("El orden ya esta asignado");
                        $('#orden').focus()
                    }
                },
                error: function (jqXHR) {
                    // console.log(jqXHR);
                }
            });
        });
    </script>
@stop
