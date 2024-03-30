@extends('layouts.app')

@section('template_title')
    {{ $saludDsmv->name ?? 'Show Salud Dsmv' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Consulta Registro en Salud Dsmv</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salud-dsmv.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Padre:</strong>
                            {{ $saludDsmv->padre }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $saludDsmv->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $saludDsmv->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Eje:</strong>
                            {{ $saludDsmv->eje }}
                        </div>
                        <div class="form-group">
                            <strong>Cie10:</strong>
                            {{ $saludDsmv->cie10 }}
                        </div>
                        <div class="form-group">
                            <strong>Idcie10:</strong>
                            {{ $saludDsmv->idCie10 }}
                        </div>
                        <div class="form-group">
                            <strong>Criterio:</strong>
                            {{ $saludDsmv->criterio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Este codigo pertenece al index en la parte marcada como OJO -->
                        <!-- <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Padre</th>
										<th>Codigo</th>
										<th>Nombre</th>
										<th>Eje</th>
										<th>Cie10</th>
										<th>Idcie10</th>
										<th>Criterio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($saludDsmvs as $saludDsmv)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $saludDsmv->padre }}</td>
											<td>{{ $saludDsmv->codigo }}</td>
											<td>{{ $saludDsmv->nombre }}</td>
											<td>{{ $saludDsmv->eje }}</td>
											<td>{{ $saludDsmv->cie10 }}</td>
											<td>{{ $saludDsmv->idCie10 }}</td>
											<td>{{ $saludDsmv->criterio }}</td>

                                            <td>
                                                <form action="{{ route('salud-dsmv.destroy',$saludDsmv->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('salud-dsmv.show',$saludDsmv->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('salud-dsmv.edit',$saludDsmv->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> -->
@endsection
