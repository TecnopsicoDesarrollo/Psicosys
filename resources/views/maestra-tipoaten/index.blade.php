@extends('layouts.app')

@section('template_title')
    Maestra Tipoaten
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Maestra Tipoaten') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('maestra-tipoatens.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Nomtipo</th>
										<th>Rip</th>
										<th>Bodega</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($maestraTipoatens as $maestraTipoaten)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $maestraTipoaten->codigo }}</td>
											<td>{{ $maestraTipoaten->nomtipo }}</td>
											<td>{{ $maestraTipoaten->rip }}</td>
											<td>{{ $maestraTipoaten->bodega }}</td>

                                            <td>
                                                <form action="{{ route('maestra-tipoatens.destroy',$maestraTipoaten->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('maestra-tipoatens.show',$maestraTipoaten->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('maestra-tipoatens.edit',$maestraTipoaten->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $maestraTipoatens->links() !!}
            </div>
        </div>
    </div>
@endsection
