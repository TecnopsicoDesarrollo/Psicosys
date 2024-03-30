@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Listado de Servicios Contratados</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Servicios Contratados') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('salud-contrasers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Crear Nuevo') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            {{--  <table class="table table-striped table-hover">
                                <thead class="thead">  --}}
                            <table id="contraser" class="table table-striped shadow-lg mt-4">
                                <thead class="bg-info text-white">
                                    <tr>
                                        <th>No</th>
                                        
                                        <th>Idcontra</th>
                                        <th>Ideps</th>
                                        <th>Idmanual</th>
                                        <th>Idcodserv</th>
                                        <th>Nombre</th>
                                        <th>Idcodcups</th>
                                        <th>Incremen</th>
                                        <th>Tipotar</th>
                                        <th>Idconcecont</th>
                                        <th>Grupquir</th>
                                        <th>Excluido</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($saludContrasers as $saludContraser)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>{{ $saludContraser->idContra }}</td>
                                            <td>{{ $saludContraser->idEps }}</td>
                                            <td>{{ $saludContraser->idManual }}</td>
                                            <td>{{ $saludContraser->idCodserv }}</td>
                                            <td>{{ $saludContraser->nombre }}</td>
                                            <td>{{ $saludContraser->idCodcups }}</td>
                                            <td>{{ $saludContraser->incremen }}</td>
                                            <td>{{ $saludContraser->tipotar }}</td>
                                            <td>{{ $saludContraser->idConcecont }}</td>
                                            <td>{{ $saludContraser->grupquir }}</td>
                                            <td>{{ $saludContraser->excluido }}</td>

                                            <td>
                                                <form action="{{ route('salud-contrasers.destroy',$saludContraser->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('salud-contrasers.show',$saludContraser->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('salud-contrasers.edit',$saludContraser->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $saludContrasers->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#contraser').DataTable({
                "language": {
                    "search":       "Buscar",
                    "lengthMenu":    "Mostrar _MENU_ registros por página",
                    "info":         "Mostrando página _PAGE_ de _PAGES_",
                    "paginate":     {
                                        "previous": "Anterior",
                                        "next":     "Siguiente",
                                        "first":    "Primero",
                                        "last":     "Ultimo"
                    }
                }
            });
        } );
    </script>
@stop