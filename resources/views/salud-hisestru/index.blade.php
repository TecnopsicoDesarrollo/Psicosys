@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estructura de la Historia Clinica</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Salud Hisestru') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('salud-hisestru.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Idcodhis</th>
										<th>Idcodele</th>
										<th>Orden</th>
										<th>Carga Plantilla</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($saludHisestrus as $saludHisestru)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $saludHisestru->saludHistipo->nombre }}</td>
											<td>{{ $saludHisestru->saludHiselem->elemento }}</td>
											<td>{{ $saludHisestru->orden }}</td>
											<td>
                                                <div class="form-check form-check-inline">
                                                    {{ Form::label('') }}
                                                    {{ Form::checkbox('siplanti', $saludHisestru->siplanti, ($saludHisestru->siplanti == 1 ? 'checked' : ''), ['class' => 'form-check-input']) }}
                                                </div>
                                            </td>
                                            <td>
                                                <form action="{{ route('salud-hisestru.destroy',$saludHisestru->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('salud-hisestru.show',$saludHisestru->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('salud-hisestru.edit',$saludHisestru->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $saludHisestrus->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
