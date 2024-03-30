@extends('layouts.app')

@section('template_title')
    Salud Hisfami
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Salud Hisfami') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('salud-hisfami.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Idhisto</th>
										<th>Fecha</th>
										<th>Idmedico</th>
										<th>Idadmision</th>
										<th>Miembro</th>
										<th>Parencon</th>
										<th>Edad</th>
										<th>Cod Edad</th>
										<th>Escolar</th>
										<th>Idocupac</th>
										<th>Vivo</th>
										<th>Muerfec</th>
										<th>Relacion</th>
										<th>Idesex</th>
										<th>Otropare</th>
										<th>Habita</th>
										<th>Observ</th>
										<th>Aporte</th>
										<th>Celular</th>
										<th>Direccion</th>
										<th>Familia</th>
										<th>Redapoy</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($saludHisfamis as $saludHisfami)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $saludHisfami->idhisto }}</td>
											<td>{{ $saludHisfami->fecha }}</td>
											<td>{{ $saludHisfami->idmedico }}</td>
											<td>{{ $saludHisfami->idadmision }}</td>
											<td>{{ $saludHisfami->miembro }}</td>
											<td>{{ $saludHisfami->parencon }}</td>
											<td>{{ $saludHisfami->edad }}</td>
											<td>{{ $saludHisfami->cod_edad }}</td>
											<td>{{ $saludHisfami->escolar }}</td>
											<td>{{ $saludHisfami->idocupac }}</td>
											<td>{{ $saludHisfami->vivo }}</td>
											<td>{{ $saludHisfami->muerfec }}</td>
											<td>{{ $saludHisfami->relacion }}</td>
											<td>{{ $saludHisfami->idesex }}</td>
											<td>{{ $saludHisfami->otropare }}</td>
											<td>{{ $saludHisfami->habita }}</td>
											<td>{{ $saludHisfami->observ }}</td>
											<td>{{ $saludHisfami->aporte }}</td>
											<td>{{ $saludHisfami->celular }}</td>
											<td>{{ $saludHisfami->direccion }}</td>
											<td>{{ $saludHisfami->familia }}</td>
											<td>{{ $saludHisfami->redapoy }}</td>

                                            <td>
                                                <form action="{{ route('salud-hisfami.destroy',$saludHisfami->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('salud-hisfami.show',$saludHisfami->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('salud-hisfami.edit',$saludHisfami->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $saludHisfamis->links() !!}
            </div>
        </div>
    </div>
@endsection
