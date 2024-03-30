@extends('adminlte::page')

@section('title', 'Psico.sys OnLine')

@section('content_header')
    <h1>Historia Clinica</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Salud Hisgeneral</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('salud-hisgeneral.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('salud-hisgeneral.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.css" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> OJO CON ESTO-->

    <!-- PROBANDO SI FUNCIONA CON EL FORMULARIO MODAL -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

@stop

@section('js')
    <!-- esto es para que funcione el ckeditor -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script> -->
<!--     <script>
        //Coloca ckeditor en los texarea
        CKEDITOR.replace('moting');
        CKEDITOR.replace('enferact');
        CKEDITOR.replace('tratam');
        CKEDITOR.replace('antefam');
        CKEDITOR.replace('anteper');
        CKEDITOR.replace('revsist');
        CKEDITOR.replace('exafisg');
        CKEDITOR.replace('examen');
        CKEDITOR.replace('impdiaa');
        CKEDITOR.replace('tratamb');
        CKEDITOR.replace('evoamb');
        CKEDITOR.replace('trathos');
        CKEDITOR.replace('evohos');
        CKEDITOR.replace('tramedg');
        CKEDITOR.replace('evomedg');
        CKEDITOR.replace('apreper');
        CKEDITOR.replace('evoenfe');
        CKEDITOR.replace('evoterocu');
        CKEDITOR.replace('resum');
        CKEDITOR.replace('concprof');
        CKEDITOR.replace('antepef');
        CKEDITOR.replace('valsicam');
        CKEDITOR.replace('valsicho');
        CKEDITOR.replace('reapoyo');
        CKEDITOR.replace('evsocial');
        CKEDITOR.replace('ningre');
        CKEDITOR.replace('evohosdia');
        CKEDITOR.replace('laborat');
        CKEDITOR.replace('planman');
        CKEDITOR.replace('planegr');
    </script> -->

    <!-- esto es para mensaje jGrowl -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.js"></script>
    <script>
        //cargo los datos del paciente
        $(document).ready(function(){
            var histo = $('#numhisto').val();

            $("#numhisto").change( function() {
                var parametros = {
                    'id': $('#numhisto').val(),
                    '_token': $('input[name=_token]').val()
                }

                $('#content').html('<div class="bg-info text-white" align="center"><img src="{{url('/images/loader.gif')}}" alt="loading" />Cargando Datos...por favor Espere</div>');

                $.ajax({
                    url: '{{route('datosPaciente.post')}}',
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
                        var tamaño = respuesta.length;

                        if(tamaño === 0){
                            $('#numhisto').val("");
                            $('#numhisto').focus();
                            $.jGrowl("Historia Clinica No existe...Verifique!",{ life : 2000});
                            $('#content').fadeIn(1000).html(respuesta);
                        } else {
                            var sexo = respuesta[0].sexo
                            var direcpac = respuesta[0].direccion
                            var fechapac = respuesta[0].fechnac
                            var eps = respuesta[0].ideps
                            var ciudad = respuesta[0].idCiudad
                            var celu = respuesta[0].celular
                            var civil = respuesta[0].estcivil
                            var mail = respuesta[0].e_mail
                            var escolar = respuesta[0].escolar
                            var ocupac = respuesta[0].idocupac
                            var idhisto = respuesta[0].id
                            var nombre = respuesta[0].nomhisto

                            //console.log(respuesta)
                            $("#fechapac").val(fechapac);
                            $("#sexopac").val(sexo);
                            $("#direcpac").val(direcpac);
                            $("#eps").val(eps);
                            $("#ciudom").val(ciudad);
                            $("#celupac").val(celu);
                            $("#civilpac").val(civil);
                            $("#mailpac").val(mail);
                            $("#escolar").val(escolar);
                            $("#ocupac").val(ocupac);
                            $("#idhisto").val(idhisto);
                            $("#nombre").val(nombre);

                            //carga datos generales para crear familiograma
                            var now = new Date();
                            var day = ("0" + now.getDate()).slice(-2);
                            var month = ("0" + (now.getMonth() + 1)).slice(-2);
                            var today = now.getFullYear()+"-"+(month)+"-"+(day);
                            var medico = $('#idmedico').val();
                            var admision = $('#idadmision').val();

                            $("#idhisto1").val(idhisto);
                            $("#fecha1").val(today);
                            $("#idadmision1").val(admision);
                            $("#idmedico1").val(medico);

                            $('#content').fadeIn(1000).html(respuesta);

                            calculaedad(fechapac);
                        }
                    },
                    error: function (jqXHR) {
                        // console.log(jqXHR);
                    }
                });

                cargafamilia(idhisto);
            });
        });

        //Calculo edad actual del paciente de acuerdo a la fecha de nacimiento
        function calculaedad(valedad){
            $(document).ready(function(){
                //$('#fechapac').change(function() {
                    var nacimiento = new Date($('#fechapac').val());
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
                //});
            });
        }
    </script>
    <script>
        //Valido que el numero de historia este ingresado
        function validanumhisto(){
            $(document).ready(function(){
                var histo = $('#numhisto').val();

                if(histo===""){
                    $.jGrowl("No ha ingresado Numero de Historia Valido...Verifique!",{ life : 2000});
                    $('#numhisto').focus();
                }
            });
        }
    </script>
    <script>
        //ARMAHISTO - carga los datos de historia general de un paciente para armar la historia clinica.
        $(document).ready(function(){
            $("#conhisgen").click( function() {
                var histo = $('#numhisto').val();

                if(histo===""){
                    validanumhisto(histo);
                } else {
                    var parametros = {
                        'id': $('#idhisto').val(),
                        '_token': $('input[name=_token]').val()
                    }

                    $('#consulhis').html('<div class="bg-info text-white" align="center"><img src="{{url('/images/loader.gif')}}" alt="loading" />Cargando Datos...por favor Espere</div>');

                    $.ajax({
                        url: '{{route('cargaHitoria.post')}}',
                        type: 'GET',
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
                        success: function(mens) {
                            console.log(mens);
                            var mens1 = '';

                            $("#datohistoria").val(mens);
                            $('#datohistoria').focus();

                            $('#consulhis').fadeIn(1000).html(mens1);
                        },
                        error: function (jqXHR) {
                            console.log(jqXHR);
                        }
                    });
                };
            });
        });
    </script>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  ojo lo quite el 21ago2022 para que funcione la modal en edicion-->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  -->
    <script>
        //AJAX PARA MOSTRAR LOS DATOS DEL FAMILIOGRAMA
        function cargafamilia(idhistoria){
            $(document).ready(function(){
                var parametros = {
                        'id': $('#numhisto').val(),
                        '_token': $('input[name=_token]').val()
                    }

                $('#tablaUsuarios').DataTable({
                    destroy: true,
                    ajax: {
                        url: '{{route('salud-hisfami.cargamiembro')}}',
                        data: parametros,
                        method: 'GET',
                        dataSrc: ''
                    },
                    columns:[
                        {"data": "id"},
                        {"data": "miembro"},
                        {"data": "parencon"},
                        {"data": "edad"},
                        {"data": "relacion"},
                        {"data": "celular"},
                        {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"}
                    ]
                });
            });
        };

        $(document).ready(function(){
            var opcion, filaid;

            $("#grabafami").on('click', function(e) {
                //AJAX PARA CREAR MIEMBRO DE FAMILIA EN LA TABLA HISFAMI.
                var histo = $('#numhisto').val();

                if(histo===""){
                    validanumhisto(histo);
                } else {
                    e.preventDefault();

                    if(opcion===1){
                        var estaSeleccionado = $('#habita').is(":checked");
                        var parametros = {
                            'idhisto' : $("#idhisto1").val(),
                            'cod_edad' : $("#cod_edadfam").val(),
                            'edad' : $("#edadfam").val(),
                            'escolar' : $("#escolar").val(),
                            'fecha' : $("#fecha1").val(),
                            'idadmision' : $("#idadmision1").val(),
                            'idmedico' : $("#idmedico1").val(),
                            'idocupac' : $("#idocupac").val(),
                            'miembro' : $("#miembro").val(),
                            'muerfec' : $("#muerfec").val(),
                            'observ' : $("#observ").val(),
                            'otropare' : $("#otropare").val(),
                            'parencon' : $("#parencon").val(),
                            'relacion' : $("#relacion").val(),
                            'vivo' : $("#vivo").val(),
                            'habita' : $("#habita").val(),
                            '_token': $('input[name=_token]').val()
                        }

                        //$('#consulhis').html('<div class="bg-info text-white" align="center"><img src="{{url('/images/loader.gif')}}" alt="loading" />Cargando Datos...por favor Espere</div>');

                        $.ajax({
                            url: '{{route('salud-hisfami.store')}}',
                            type: 'POST',
                            data: parametros,
                            dataType: 'JSON',
                            beforeSend: function (e) {
                            },
                            complete: function (a) {
                            },
                            success: function(mens) {
                                //cargafamilia(idhisto);
                            },
                            error: function (jqXHR) {
                                console.log(jqXHR);
                            }
                        });
                    } else {
                        //fila = $(this).closest("tr");
                        //filaid = parseInt(fila.find('td:eq(0)').text());
                        console.log(filaid);

                        var estaSeleccionado = $('#habita').is(":checked");
                        var parametros = {
                            'id': filaid,
                            'idhisto' : $("#idhisto1").val(),
                            'cod_edad' : $("#cod_edadfam").val(),
                            'edad' : $("#edadfam").val(),
                            'escolar' : $("#escolar").val(),
                            'fecha' : $("#fecha1").val(),
                            'idadmision' : $("#idadmision1").val(),
                            'idmedico' : $("#idmedico1").val(),
                            'idocupac' : $("#idocupac").val(),
                            'miembro' : $("#miembro").val(),
                            'muerfec' : $("#muerfec").val(),
                            'observ' : $("#observ").val(),
                            'otropare' : $("#otropare").val(),
                            'parencon' : $("#parencon").val(),
                            'relacion' : $("#relacion").val(),
                            'vivo' : $("#vivo").val(),
                            'habita' : $("#habita").val(),
                            '_token': $('input[name=_token]').val()
                        }

                        $.ajax({
                            url: '{{route('salud-hisfami.update')}}',
                            type: 'GET',
                            data: parametros,
                            dataType: 'JSON',
                            beforeSend: function (e) {
                            },
                            complete: function (a) {
                            },
                            success: function(mens) {
                                //cargafamilia(idhisto);
                                console.log(mens);
                            },
                            error: function (jqXHR) {
                                console.log(jqXHR);
                            }
                        });
                    };
                };

                $('#cerrarmodal').click();

                cargafamilia(idhisto);
            });

            //LIMPIAR LOS CAMPOS ANTES DE AGREGAR MIEMBRO A LA FAMILIA
            $("#btnNuevo").click(function(){
                opcion = 1;
                user_id=null;
                $("#formUsuarios").trigger("reset");
                $(".modal-header").css( "background-color", "#17a2b8");
                $(".modal-header").css( "color", "white" );
                $(".modal-title").text("Registro de grupo familiar");
                //$('#exampleModalLong').modal('show');
            });

            $(document).on("click", ".btnEditar", function(e){
                //AJAX PARA EDITAR MIEMBRO DE FAMILIA EN LA TABLA HISFAMI.
                e.preventDefault();

                opcion = 2;
                fila = $(this).closest("tr");
                filaid = parseInt(fila.find('td:eq(0)').text());
                console.log(filaid);

                var parametros = {
                    'id': filaid,
                    '_token': $('input[name=_token]').val()
                }

                $.ajax({
                    url: '{{route('salud-hisfami.cargafamiliar')}}',
                    type: 'GET',
                    data: parametros,
                    dataType: 'JSON',
                    beforeSend: function (e) {
                    },
                    complete: function (a) {
                    },
                    success: function(mens) {
                        var idhisto = mens[0].idhisto
                        var cod_edad = mens[0].cod_edad
                        var edad = mens[0].edad
                        var escolar = mens[0].escolar
                        var fecha = mens[0].fecha
                        var admision = mens[0].idadmision
                        var idmedico = mens[0].idmedico
                        var idocupac = mens[0].idocupac
                        var miembro = mens[0].miembro
                        var muerfec = mens[0].muerfec
                        var observ = mens[0].observ
                        var otropare = mens[0].otropare
                        var parencon = mens[0].parencon
                        var relacion = mens[0].relacion
                        var vivo = mens[0].vivo
                        var habita = mens[0].habita

                        $("#idhisto1").val(idhisto),
                        $("#cod_edadfam").val(cod_edad),
                        $("#edadfam").val(edad),
                        $("#escolar").val(escolar),
                        $("#fecha1").val(fecha),
                        $("#idadmision1").val(admision),
                        $("#idmedico1").val(idmedico),
                        $("#idocupac").val(idocupac),
                        $("#miembro").val(miembro),
                        $("#muerfec").val(muerfec),
                        $("#observ").val(observ),
                        $("#otropare").val(otropare),
                        $("#parencon").val(parencon),
                        $("#relacion").val(relacion),
                        $("#vivo").val(vivo),
                        $("#habita").val(habita)

                        $(".modal-header").css("background-color", "#007bff");
                        $(".modal-header").css("color", "white" );
                        $(".modal-title").text("Editar Usuario");
                        $("#exampleModalLong").modal('show');
                    },
                    error: function (jqXHR) {
                        console.log(jqXHR);
                    }
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        //Codigo para el select2 combinado con busqueda
        $(document).ready(function(){

            $('.sel_cie').select2({
                placeholder: 'Seleccione Diagnostico',
                ajax:{
                    url: '{{route('getDiagnostico.post')}}',
                    dataType: 'json',
                    delay: 250,
/*                     data: function (params) {
                        return {
                        _token: $('input[name=_token]').val()
                        search: params.term     // search term
                        };
                    },
                    processResults: function (response) {
                        return {
                        results: response
                        };
                    }, */
                    processResults: function (data) {
                        return {
                            results: $.map(data, function (item) {
                                return {
                                    _token: $('input[name=_token]').val()
                                    nombre: item.nombre,
                                    id: item.id
                                }
                            })
                        };
                    },
                    cache: true
                };
            });

        });
   </script>


@stop
