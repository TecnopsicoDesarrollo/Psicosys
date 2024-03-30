@extends('layouts.app')

@section('template_title')
    Salud Hissegu
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Salud Hissegu') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('salud-hissegu.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Usuario</th>
										<th>Sec Prompt</th>
										<th>Idmedico</th>
										<th>Sec Adic</th>
										<th>Sec Edit</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($saludHissegus as $saludHissegu)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $saludHissegu->idcodhis }}</td>
											<td>{{ $saludHissegu->idcodele }}</td>
											<td>{{ $saludHissegu->usuario }}</td>
											<td>{{ $saludHissegu->sec_prompt }}</td>
											<td>{{ $saludHissegu->idmedico }}</td>
											<td>{{ $saludHissegu->sec_adic }}</td>
											<td>{{ $saludHissegu->sec_edit }}</td>

                                            <td>
                                                <form action="{{ route('salud-hissegu.destroy',$saludHissegu->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('salud-hissegu.show',$saludHissegu->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('salud-hissegu.edit',$saludHissegu->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $saludHissegus->links() !!}
            </div>
        </div>
    </div>
@endsection
