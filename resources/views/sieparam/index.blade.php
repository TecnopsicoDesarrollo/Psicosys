@extends('adminlte::page')

@section('title', 'Psico.sys')

@section('content_header')
    <h1>Parametros del Sistema</h1>
@stop

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<div style="display: flex; justify-content: space-between; align-items: center;">

							<span id="card_title">
								{{ __('Sieparam') }}
							</span>

							<div class="float-right">
								<a href="{{ route('sieparams.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										
										<th>Sie Contab</th>
										<th>Licen</th>
										<th>Numemp</th>
										<th>Serialdd</th>
										<th>Logo</th>
										<th>Codpres</th>
										<th>Iva</th>
										<th>Ctacopa</th>
										<th>Ctacopcxc</th>
										<th>Horatemp</th>
										<th>Horinidis</th>
										<th>Horfindis</th>
										<th>Ctacxcglo</th>
										<th>Ctagasglo</th>
										<th>Ctacopgas</th>
										<th>Contproy</th>
										<th>Proveefac</th>
										<th>Redondea</th>
										<th>Fotodef</th>
										<th>Hisocup</th>
										<th>Histera</th>
										<th>Hispsic</th>
										<th>Hiscons</th>
										<th>Hisimag</th>
										<th>Hisaudi</th>
										<th>Hisespi</th>
										<th>Hisopto</th>
										<th>Sicree</th>
										<th>Porcree</th>
										<th>Debecree</th>
										<th>Habecree</th>
										<th>Cboespe</th>
										<th>Ctamod</th>
										<th>Copaest</th>
										<th>Bloqcon</th>
										<th>Costodet</th>
										<th>Hisocup1</th>
										<th>Hislabo</th>
										<th>Siica</th>
										<th>Tasaica</th>
										<th>Debeica</th>
										<th>Habeica</th>
										<th>Sibom</th>
										<th>Porcbom</th>
										<th>Debebom</th>
										<th>Habebom</th>
										<th>Sirtefte</th>
										<th>Porrte</th>
										<th>Deberte</th>
										<th>Costinv</th>
										<th>Rutagem</th>
										<th>Sikit</th>
										<th>Tipoliq</th>
										<th>Regimen</th>
										<th>Hispeq</th>
										<th>Covid19</th>
										<th>Ushispol</th>
										<th>Ushisoxi</th>
										<th>Ushispre</th>
										<th>Usbod</th>
										<th>Usprovee</th>

										<th></th>
									</tr>
								</thead>
								<tbody>
									@foreach ($sieparams as $sieparam)
										<tr>
											<td>{{ ++$i }}</td>
											
											<td>{{ $sieparam->sie_contab }}</td>
											<td>{{ $sieparam->licen }}</td>
											<td>{{ $sieparam->numemp }}</td>
											<td>{{ $sieparam->serialdd }}</td>
											<td>{{ $sieparam->logo }}</td>
											<td>{{ $sieparam->codpres }}</td>
											<td>{{ $sieparam->iva }}</td>
											<td>{{ $sieparam->ctacopa }}</td>
											<td>{{ $sieparam->ctacopcxc }}</td>
											<td>{{ $sieparam->horatemp }}</td>
											<td>{{ $sieparam->horinidis }}</td>
											<td>{{ $sieparam->horfindis }}</td>
											<td>{{ $sieparam->ctacxcglo }}</td>
											<td>{{ $sieparam->ctagasglo }}</td>
											<td>{{ $sieparam->ctacopgas }}</td>
											<td>{{ $sieparam->contproy }}</td>
											<td>{{ $sieparam->proveefac }}</td>
											<td>{{ $sieparam->redondea }}</td>
											<td>{{ $sieparam->fotodef }}</td>
											<td>{{ $sieparam->hisocup }}</td>
											<td>{{ $sieparam->histera }}</td>
											<td>{{ $sieparam->hispsic }}</td>
											<td>{{ $sieparam->hiscons }}</td>
											<td>{{ $sieparam->hisimag }}</td>
											<td>{{ $sieparam->hisaudi }}</td>
											<td>{{ $sieparam->hisespi }}</td>
											<td>{{ $sieparam->hisopto }}</td>
											<td>{{ $sieparam->sicree }}</td>
											<td>{{ $sieparam->porcree }}</td>
											<td>{{ $sieparam->debecree }}</td>
											<td>{{ $sieparam->habecree }}</td>
											<td>{{ $sieparam->cboespe }}</td>
											<td>{{ $sieparam->ctamod }}</td>
											<td>{{ $sieparam->copaest }}</td>
											<td>{{ $sieparam->bloqcon }}</td>
											<td>{{ $sieparam->costodet }}</td>
											<td>{{ $sieparam->hisocup1 }}</td>
											<td>{{ $sieparam->hislabo }}</td>
											<td>{{ $sieparam->siica }}</td>
											<td>{{ $sieparam->tasaica }}</td>
											<td>{{ $sieparam->debeica }}</td>
											<td>{{ $sieparam->habeica }}</td>
											<td>{{ $sieparam->sibom }}</td>
											<td>{{ $sieparam->porcbom }}</td>
											<td>{{ $sieparam->debebom }}</td>
											<td>{{ $sieparam->habebom }}</td>
											<td>{{ $sieparam->sirtefte }}</td>
											<td>{{ $sieparam->porrte }}</td>
											<td>{{ $sieparam->deberte }}</td>
											<td>{{ $sieparam->costinv }}</td>
											<td>{{ $sieparam->rutagem }}</td>
											<td>{{ $sieparam->sikit }}</td>
											<td>{{ $sieparam->tipoliq }}</td>
											<td>{{ $sieparam->regimen }}</td>
											<td>{{ $sieparam->hispeq }}</td>
											<td>{{ $sieparam->covid19 }}</td>
											<td>{{ $sieparam->ushispol }}</td>
											<td>{{ $sieparam->ushisoxi }}</td>
											<td>{{ $sieparam->ushispre }}</td>
											<td>{{ $sieparam->usbod }}</td>
											<td>{{ $sieparam->usprovee }}</td>

											<td>
												<form action="{{ route('sieparams.destroy',$sieparam->id) }}" method="POST">
													<a class="btn btn-sm btn-primary " href="{{ route('sieparams.show',$sieparam->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
													<a class="btn btn-sm btn-success" href="{{ route('sieparams.edit',$sieparam->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
				{!! $sieparams->links() !!}
			</div>
		</div>
	</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
