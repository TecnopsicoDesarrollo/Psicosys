@extends('layouts.app')

@section('template_title')
    Salud Hisplanti
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Salud Hisplanti') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('salud-hisplanti.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Codplanti</th>
										<th>Nombre</th>
										<th>Planti</th>
										<th>Tipoexa</th>
										<th>Edadmin</th>
										<th>Edadmax</th>
										<th>Sexo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($saludHisplantis as $saludHisplanti)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $saludHisplanti->codplanti }}</td>
											<td>{{ $saludHisplanti->nombre }}</td>
											<td>{{ $saludHisplanti->planti }}</td>
											<td>{{ $saludHisplanti->tipoexa }}</td>
											<td>{{ $saludHisplanti->edadmin }}</td>
											<td>{{ $saludHisplanti->edadmax }}</td>
											<td>{{ $saludHisplanti->sexo }}</td>

                                            <td>
                                                <form action="{{ route('salud-hisplanti.destroy',$saludHisplanti->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('salud-hisplanti.show',$saludHisplanti->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('salud-hisplanti.edit',$saludHisplanti->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $saludHisplantis->links() !!}
            </div>
        </div>
    </div>
@endsection
