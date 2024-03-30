@extends('layouts.app')

@section('template_title')
    Salud Admision
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Salud Admision') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('salud-admisions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Dcto</th>
										<th>Serdoc</th>
										<th>Numadm</th>
										<th>Idcontra</th>
										<th>Idhisto</th>
										<th>Fecha</th>
										<th>Idmedico</th>
										<th>Idtipovinc</th>
										<th>Autoriz</th>
										<th>Codfase</th>
										<th>Idcodaten</th>
										<th>Idfactura</th>
										<th>Idcupspres</th>
										<th>Iddiagpres</th>
										<th>Ideps</th>
										<th>Idcausaext</th>
										<th>Nopoliza</th>
										<th>Edad</th>
										<th>Cod Edad</th>
										<th>Sexo</th>
										<th>Usuario</th>
										<th>Idfinalidad</th>
										<th>Idegreso</th>
										<th>Iddiaging</th>
										<th>Idcama</th>
										<th>Anula</th>
										<th>Copago</th>
										<th>Consant</th>
										<th>Consact</th>
										<th>Cuotamod</th>
										<th>Proyec</th>
										<th>Ideps1</th>
										<th>Notas</th>
										<th>Admext</th>
										<th>Idmedsoli</th>
										<th>Fechsoli</th>
										<th>Idorigen</th>
										<th>C19Fiebre</th>
										<th>C19Tos</th>
										<th>C19Difres</th>
										<th>C19Viaje</th>
										<th>C19Person</th>
										<th>C19Confir</th>
										<th>C19Trabaj</th>
										<th>Tipoest</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($saludAdmisions as $saludAdmision)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $saludAdmision->dcto }}</td>
											<td>{{ $saludAdmision->serdoc }}</td>
											<td>{{ $saludAdmision->numadm }}</td>
											<td>{{ $saludAdmision->idcontra }}</td>
											<td>{{ $saludAdmision->idhisto }}</td>
											<td>{{ $saludAdmision->fecha }}</td>
											<td>{{ $saludAdmision->idmedico }}</td>
											<td>{{ $saludAdmision->idtipovinc }}</td>
											<td>{{ $saludAdmision->autoriz }}</td>
											<td>{{ $saludAdmision->codfase }}</td>
											<td>{{ $saludAdmision->idcodaten }}</td>
											<td>{{ $saludAdmision->idfactura }}</td>
											<td>{{ $saludAdmision->idcupspres }}</td>
											<td>{{ $saludAdmision->iddiagpres }}</td>
											<td>{{ $saludAdmision->ideps }}</td>
											<td>{{ $saludAdmision->idcausaext }}</td>
											<td>{{ $saludAdmision->nopoliza }}</td>
											<td>{{ $saludAdmision->edad }}</td>
											<td>{{ $saludAdmision->cod_edad }}</td>
											<td>{{ $saludAdmision->sexo }}</td>
											<td>{{ $saludAdmision->usuario }}</td>
											<td>{{ $saludAdmision->idfinalidad }}</td>
											<td>{{ $saludAdmision->idegreso }}</td>
											<td>{{ $saludAdmision->iddiaging }}</td>
											<td>{{ $saludAdmision->idcama }}</td>
											<td>{{ $saludAdmision->anula }}</td>
											<td>{{ $saludAdmision->copago }}</td>
											<td>{{ $saludAdmision->consant }}</td>
											<td>{{ $saludAdmision->consact }}</td>
											<td>{{ $saludAdmision->cuotamod }}</td>
											<td>{{ $saludAdmision->proyec }}</td>
											<td>{{ $saludAdmision->ideps1 }}</td>
											<td>{{ $saludAdmision->notas }}</td>
											<td>{{ $saludAdmision->admext }}</td>
											<td>{{ $saludAdmision->idmedsoli }}</td>
											<td>{{ $saludAdmision->fechsoli }}</td>
											<td>{{ $saludAdmision->idorigen }}</td>
											<td>{{ $saludAdmision->c19fiebre }}</td>
											<td>{{ $saludAdmision->c19tos }}</td>
											<td>{{ $saludAdmision->c19difres }}</td>
											<td>{{ $saludAdmision->c19viaje }}</td>
											<td>{{ $saludAdmision->c19person }}</td>
											<td>{{ $saludAdmision->c19confir }}</td>
											<td>{{ $saludAdmision->c19trabaj }}</td>
											<td>{{ $saludAdmision->tipoest }}</td>

                                            <td>
                                                <form action="{{ route('salud-admisions.destroy',$saludAdmision->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('salud-admisions.show',$saludAdmision->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('salud-admisions.edit',$saludAdmision->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $saludAdmisions->links() !!}
            </div>
        </div>
    </div>
@endsection
