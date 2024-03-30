@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Crear Cliente</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Creación de Clientes</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admon-cliente.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admon-cliente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')
    <script>
        let opcion = document.getElementById('tipo_iden')
        let nom1   = document.getElementById('nombre1')
        let nom2   = document.getElementById('nombre2')
        let ape1   = document.getElementById('apelli1')
        let ape2   = document.getElementById('apelli2')
        
        opcion.addEventListener("change", () => {
        let elementoElegido = opcion.options[opcion.selectedIndex].value
        if (elementoElegido === "CC") {
            nom1.disabled = false
            nom2.disabled = false
            ape1.disabled = false
            ape2.disabled = false
        } else if (elementoElegido === "TI") {
            nom1.disabled = false
            nom2.disabled = false
            ape1.disabled = false
            ape2.disabled = false
        } else if (elementoElegido === "RC") {
            nom1.disabled = false
            nom2.disabled = false
            ape1.disabled = false
            ape2.disabled = false
        } else {
            nom1.disabled = true
            nom2.disabled = true
            ape1.disabled = true
            ape2.disabled = true
        } 
        })
    </script>


{{--      <script>
        $(document).ready(function() {
            $("#nombre1").prop('disabled', true);

            $("#tipo_iden").change(function() {
                var selector = $("#tipo_iden  option:selected").val();
                switch(selector){
                case "CC":
                    $("#nombre1").prop('disabled', false);
                    break;
                case "TI":
                    $("#nombre1").prop('readonly', false);
                    break;
                case "RC":
                    $("#nombre1").prop('readonly', false);
                    break;
                }
            });
        } );
    </script>  --}}

{{--      <script>
        var m1 = document.getElementById("pcantidad");
        var m2 = document.getElementById("pinteres");
        var boton_de_calcular = document.getElementById("calcular");
        boton_de_calcular.addEventListener("click", total);
        //se habilita el boton submit despues de dar clic al boton calcular, pero no me funciona
        document.getElementById("guardar").disabled = false;
    
        
        function total() {
        var porcentaje = (m1.value * m2.value)/100;
        var resultado= parseInt(m1.value) + parseInt(porcentaje);
        document.getElementById("total").innerHTML= new Intl.NumberFormat("es-CO").format(resultado);
        document.getElementById("total_venta").value = new Intl.NumberFormat("es-CO").format(resultado);
        
        }
    
        function escribir() {
        let cantidad = document.getElementById("pcantidad").value;
        //Se actualiza en cantidad inm
        document.getElementById("ccantidad").innerHTML = new Intl.NumberFormat("es-CO").format(cantidad);
        document.getElementById("cantidad").value = new Intl.NumberFormat("es-CO").format(cantidad);
        }
    </script>  --}}


@stop
