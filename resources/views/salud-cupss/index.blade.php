@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Listado de C.U.P.S.</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Códigos Unicos de Procedimiento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('salud-cupss.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <!-- <table class="table table-striped table-hover">
                                <thead class="thead"> -->
                            <table id="cups" class="table table-striped shadow-lg mt-4">
                                <thead class="bg-info text-white">
                                    <tr>
                                        <th>No</th>
                                        <th>Codigo</th>
                                        <th>Descripción</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($saludCupss as $saludCup)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $saludCup->codcups }}</td>
                                            <td>{{ $saludCup->nombre }}</td>
                                            <td>
                                                <form action="{{ route('salud-cupss.destroy',$saludCup->id) }}" method="POST">
                                                    <!-- <a class="btn btn-sm btn-primary " href="{{ route('salud-cupss.show',$saludCup->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a> -->
                                                    <a class="btn btn-sm btn-success" href="{{ route('salud-cupss.edit',$saludCup->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $saludCupss->links() !!}
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
            $('#cups').DataTable({
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

