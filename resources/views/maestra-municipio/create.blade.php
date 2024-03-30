@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Crear Municipio</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crea Registro en Maestra Municipio</span>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('maestra-municipio.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('maestra-municipio.form')

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
        //cargo datos del departamento
        var selectDpto = document.getElementById('iddpto');
        selectDpto.addEventListener('change', function(){
            //var selectedOption = this.options[selectDpto.selectedIndex];
            //console.log(selectedOption.value + ': ' + selectedOption.text);

            var parametros = {
                'id': selectDpto.options[selectDpto.selectedIndex].value,
                '_token': $('input[name=_token]').val()
            }

            $.ajax({
                    url: '{{route('cargaDepartamento.post')}}',
                    type: 'POST',
                    data: parametros,
                    dataType: 'JSON',
                    beforeSend: function (e) {
                    },
                    complete: function (a) {
                    },
                    success: function(respuesta) {
                        console.log(respuesta);
                        var coddpto = respuesta[0].codigo
                        $("#dpto").val(coddpto);
                    },
                    error: function (jqXHR) {
                        // console.log(jqXHR);
                    }
            });
        });

        //armo el codigo DANE y valido que sea unico
        let ciudad = document.getElementById('cod_muni')
        ciudad.addEventListener("change", () => {
            codigoMuni()
        });

        function codigoMuni(){
            var cod_muni = document.getElementById("cod_muni").value;
            var coddpto = document.getElementById("dpto").value;

            console.log(coddpto+cod_muni);
            $("#codigo").val(coddpto+cod_muni);
        }
    </script>
@stop
