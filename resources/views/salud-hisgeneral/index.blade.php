@extends('adminlte::page')

@section('title', 'Psico.sys OnLine')

@section('content_header')
    <h1>Listado Historia clinicas</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Salud Hisgeneral') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('salud-hisgeneral.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Idcodaten</th>
										<th>Moting</th>
										<th>Enferact</th>
										<th>Antefam</th>
										<th>Anteper</th>
										<th>Peso</th>
										<th>Talla</th>
										<th>Frecar</th>
										<th>Freres</th>
										<th>Tempe</th>
										<th>Tendias</th>
										<th>Tensist</th>
										<th>Sentidos</th>
										<th>Huesos</th>
										<th>Respi</th>
										<th>Cardio</th>
										<th>Nervio</th>
										<th>Gastro</th>
										<th>Urinar</th>
										<th>Endocri</th>
										<th>Cabeza</th>
										<th>Iddiaging</th>
										<th>Iddiaging1</th>
										<th>Iddiaging2</th>
										<th>Iddiaging3</th>
										<th>Proxcita</th>
										<th>Iddiagsal</th>
										<th>Iddiagsal1</th>
										<th>Iddiagsal2</th>
										<th>Iddiagsal3</th>
										<th>Iddiagsal4</th>
										<th>Iddiagsal5</th>
										<th>Iddiagsal6</th>
										<th>Imc</th>
										<th>Imcexp</th>
										<th>Pt</th>
										<th>Ptexp</th>
										<th>Te</th>
										<th>Teexp</th>
										<th>Pce</th>
										<th>Pceexp</th>
										<th>Pe</th>
										<th>Peexp</th>
										<th>Cc</th>
										<th>Ccexp</th>
										<th>Alergia</th>
										<th>Sivigila</th>
										<th>Fechfin</th>
										<th>Edadmes</th>
										<th>Tratam</th>
										<th>Revsist</th>
										<th>Exafisg</th>
										<th>Examen</th>
										<th>Impdiaa</th>
										<th>Tratamb</th>
										<th>Evoamb</th>
										<th>Trathos</th>
										<th>Evohos</th>
										<th>Tramedg</th>
										<th>Evomedg</th>
										<th>Apreper</th>
										<th>Evoenfe</th>
										<th>Evoterocu</th>
										<th>Resum</th>
										<th>Concprof</th>
										<th>Antepef</th>
										<th>Valsicam</th>
										<th>Valsicho</th>
										<th>Reapoyo</th>
										<th>Evsocial</th>
										<th>Ningre</th>
										<th>Evohosdia</th>
										<th>Laborat</th>
										<th>Planman</th>
										<th>Planegr</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($saludHisgenerals as $saludHisgeneral)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $saludHisgeneral->idhisto }}</td>
											<td>{{ $saludHisgeneral->fecha }}</td>
											<td>{{ $saludHisgeneral->idmedico }}</td>
											<td>{{ $saludHisgeneral->idadmision }}</td>
											<td>{{ $saludHisgeneral->idcodaten }}</td>
											<td>{{ $saludHisgeneral->moting }}</td>
											<td>{{ $saludHisgeneral->enferact }}</td>
											<td>{{ $saludHisgeneral->antefam }}</td>
											<td>{{ $saludHisgeneral->anteper }}</td>
											<td>{{ $saludHisgeneral->peso }}</td>
											<td>{{ $saludHisgeneral->talla }}</td>
											<td>{{ $saludHisgeneral->frecar }}</td>
											<td>{{ $saludHisgeneral->freres }}</td>
											<td>{{ $saludHisgeneral->tempe }}</td>
											<td>{{ $saludHisgeneral->tendias }}</td>
											<td>{{ $saludHisgeneral->tensist }}</td>
											<td>{{ $saludHisgeneral->sentidos }}</td>
											<td>{{ $saludHisgeneral->huesos }}</td>
											<td>{{ $saludHisgeneral->respi }}</td>
											<td>{{ $saludHisgeneral->cardio }}</td>
											<td>{{ $saludHisgeneral->nervio }}</td>
											<td>{{ $saludHisgeneral->gastro }}</td>
											<td>{{ $saludHisgeneral->urinar }}</td>
											<td>{{ $saludHisgeneral->endocri }}</td>
											<td>{{ $saludHisgeneral->cabeza }}</td>
											<td>{{ $saludHisgeneral->iddiaging }}</td>
											<td>{{ $saludHisgeneral->iddiaging1 }}</td>
											<td>{{ $saludHisgeneral->iddiaging2 }}</td>
											<td>{{ $saludHisgeneral->iddiaging3 }}</td>
											<td>{{ $saludHisgeneral->proxcita }}</td>
											<td>{{ $saludHisgeneral->iddiagsal }}</td>
											<td>{{ $saludHisgeneral->iddiagsal1 }}</td>
											<td>{{ $saludHisgeneral->iddiagsal2 }}</td>
											<td>{{ $saludHisgeneral->iddiagsal3 }}</td>
											<td>{{ $saludHisgeneral->iddiagsal4 }}</td>
											<td>{{ $saludHisgeneral->iddiagsal5 }}</td>
											<td>{{ $saludHisgeneral->iddiagsal6 }}</td>
											<td>{{ $saludHisgeneral->imc }}</td>
											<td>{{ $saludHisgeneral->imcexp }}</td>
											<td>{{ $saludHisgeneral->pt }}</td>
											<td>{{ $saludHisgeneral->ptexp }}</td>
											<td>{{ $saludHisgeneral->te }}</td>
											<td>{{ $saludHisgeneral->teexp }}</td>
											<td>{{ $saludHisgeneral->pce }}</td>
											<td>{{ $saludHisgeneral->pceexp }}</td>
											<td>{{ $saludHisgeneral->pe }}</td>
											<td>{{ $saludHisgeneral->peexp }}</td>
											<td>{{ $saludHisgeneral->cc }}</td>
											<td>{{ $saludHisgeneral->ccexp }}</td>
											<td>{{ $saludHisgeneral->alergia }}</td>
											<td>{{ $saludHisgeneral->sivigila }}</td>
											<td>{{ $saludHisgeneral->fechfin }}</td>
											<td>{{ $saludHisgeneral->edadmes }}</td>
											<td>{{ $saludHisgeneral->tratam }}</td>
											<td>{{ $saludHisgeneral->revsist }}</td>
											<td>{{ $saludHisgeneral->exafisg }}</td>
											<td>{{ $saludHisgeneral->examen }}</td>
											<td>{{ $saludHisgeneral->impdiaa }}</td>
											<td>{{ $saludHisgeneral->tratamb }}</td>
											<td>{{ $saludHisgeneral->evoamb }}</td>
											<td>{{ $saludHisgeneral->trathos }}</td>
											<td>{{ $saludHisgeneral->evohos }}</td>
											<td>{{ $saludHisgeneral->tramedg }}</td>
											<td>{{ $saludHisgeneral->evomedg }}</td>
											<td>{{ $saludHisgeneral->apreper }}</td>
											<td>{{ $saludHisgeneral->evoenfe }}</td>
											<td>{{ $saludHisgeneral->evoterocu }}</td>
											<td>{{ $saludHisgeneral->resum }}</td>
											<td>{{ $saludHisgeneral->concprof }}</td>
											<td>{{ $saludHisgeneral->antepef }}</td>
											<td>{{ $saludHisgeneral->valsicam }}</td>
											<td>{{ $saludHisgeneral->valsicho }}</td>
											<td>{{ $saludHisgeneral->reapoyo }}</td>
											<td>{{ $saludHisgeneral->evsocial }}</td>
											<td>{{ $saludHisgeneral->ningre }}</td>
											<td>{{ $saludHisgeneral->evohosdia }}</td>
											<td>{{ $saludHisgeneral->laborat }}</td>
											<td>{{ $saludHisgeneral->planman }}</td>
											<td>{{ $saludHisgeneral->planegr }}</td>

                                            <td>
                                                <form action="{{ route('salud-hisgeneral.destroy',$saludHisgeneral->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('salud-hisgeneral.show',$saludHisgeneral->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('salud-hisgeneral.edit',$saludHisgeneral->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $saludHisgenerals->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
