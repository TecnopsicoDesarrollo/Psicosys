@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Listado de Clientes</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Maestra Clientes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('admon-cliente.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <table id="clientes" class="table table-striped shadow-lg mt-4">
                                <thead class="bg-info text-white">
                                    <tr>
                                        <th>No</th>
										<th>Identificación</th>
                                        <th>Nombre</th>
                                        <th>Tipo</th>
<!-- 										<th>Proveedor</th>
										<th>Otro</th> -->
                                        <th>Direccion</th>
                                        <th>Celular</th>
                                        <th>E Mail</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admonClientes as $admonCliente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
											<td>{{ $admonCliente->no_identi }}</td>
                                            <td>{{ $admonCliente->nomclien }}</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    {{ Form::label('Cliente -') }}
                                                    {{ Form::checkbox('cliente', $admonCliente->cliente, ($admonCliente->cliente == 1 ? 1 : 0), ['class' => 'form-check-input']) }}
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    {{ Form::label('Proveedor -') }}
                                                    {{ Form::checkbox('provee', $admonCliente->provee, ($admonCliente->provee == 1 ? 'checked' : ''), ['class' => 'form-check-input']) }}
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    {{ Form::label('Otro -') }}
                                                    {{ Form::checkbox('otro', $admonCliente->otro, ($admonCliente->otro == 1 ? 'checked' : ''), ['class' => 'form-check-input']) }}
                                                </div>
                                            </td>
<!-- 											<td>
                                                <div class="form-check form-check-inline">
                                                    {{ Form::checkbox('provee', $admonCliente->provee, ($admonCliente->provee == 1 ? 'checked' : ''), ['class' => 'form-check-input']) }}
                                                </div>
                                            </td>
											<td>
                                                <div class="form-check form-check-inline">
                                                    {{ Form::checkbox('otro', $admonCliente->otro, ($admonCliente->otro == 1 ? 'checked' : ''), ['class' => 'form-check-input']) }}
                                                </div>
                                            </td> -->
                                            <td>{{ $admonCliente->direccion }}</td>
                                            <td>{{ $admonCliente->celular }}</td>
                                            <td>{{ $admonCliente->e_mail }}</td>
                                            <td>
                                                <form action="{{ route('admon-cliente.destroy',$admonCliente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('admon-cliente.show',$admonCliente->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('admon-cliente.edit',$admonCliente->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $admonClientes->links() !!}
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
            $('#clientes').DataTable({
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
