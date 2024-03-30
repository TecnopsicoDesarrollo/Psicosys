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
                        <span class="card-title">Update Salud Hiselem</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('salud-hiselem.update', $saludHiselem->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
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
    <script>

    </script>
@stop
