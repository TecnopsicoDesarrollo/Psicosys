@extends('layouts.app')

@section('template_title')
    Salud Hisanexo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Salud Hisanexo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('salud-hisanexo.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idadmision</th>
										<th>Idhisto</th>
										<th>Fecha</th>
										<th>Detalle</th>
										<th>Rutadoc</th>
										<th>Area</th>
										<th>Usuario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($saludHisanexos as $saludHisanexo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $saludHisanexo->idadmision }}</td>
											<td>{{ $saludHisanexo->idhisto }}</td>
											<td>{{ $saludHisanexo->fecha }}</td>
											<td>{{ $saludHisanexo->detalle }}</td>
											<td>{{ $saludHisanexo->rutadoc }}</td>
											<td>{{ $saludHisanexo->area }}</td>
											<td>{{ $saludHisanexo->usuario }}</td>

                                            <td>
                                                <form action="{{ route('salud-hisanexo.destroy',$saludHisanexo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('salud-hisanexo.show',$saludHisanexo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('salud-hisanexo.edit',$saludHisanexo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $saludHisanexos->links() !!}
            </div>
        </div>
    </div>
@endsection
