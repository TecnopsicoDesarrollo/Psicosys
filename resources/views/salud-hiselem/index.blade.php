@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Elementos de Historia clinica</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Salud Hiselem') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('salud-hiselem.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
										<th>Codigo</th>
										<th>Nombre Elemento</th>
										<th>Tipo</th>
                                        <th>Nombre Campo</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($saludHiselems as $saludHiselem)
                                        <tr>
                                            <td>{{ ++$i }}</td>
											<td>{{ $saludHiselem->codele }}</td>
											<td>{{ $saludHiselem->elemento }}</td>
											<td>{{ $saludHiselem->tipo }}</td>
                                            <td>{{ $saludHiselem->cm_nom }}</td>
                                            <td>
                                                <form action="{{ route('salud-hiselem.destroy',$saludHiselem->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('salud-hiselem.show',$saludHiselem->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('salud-hiselem.edit',$saludHiselem->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $saludHiselems->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
