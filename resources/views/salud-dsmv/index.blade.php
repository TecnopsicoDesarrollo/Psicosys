@extends('adminlte::page')

@section('title', 'Psico.sys OnLine')

@section('content_header')
    <h1>Manual Diagnostico DSM-V</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Salud Dsmv') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('salud-dsmv.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                        <!-- OJO aca va texto que esta en show.blade.php -->
                        <div class="container">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Manual Diagnostico y Estadistico Version 5</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3>Listados de Trastornos Mentales</h3>
                                            <ul id="tree1">
                                                @foreach($categories as $category)
                                                    <li>
                                                        {{ $category->nombre }}
                                                        @if(count($category->childs))
                                                            @include('salud-dsmv.manageChild',['childs' => $category->childs])
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Datos del Diagnostico</h3>

<!--                                             {!! Form::open(['route'=>'add.dsmv']) !!}

                                            @if ($message = Session::get('success'))
                                                <div class="alert alert-success alert-block">
                                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @endif

                                            <div class="form-group {{ $errors->has('cie10') ? 'has-error' : '' }}">
                                                {!! Form::label('Codigo Cie:') !!}
                                                {!! Form::text('cie10', old('cie10'), ['class'=>'form-control', 'placeholder'=>'Cie10']) !!}
                                                <span class="text-danger">{{ $errors->first('cie10') }}</span>
                                            </div>

                                            <div class="form-group {{ $errors->has('codigo') ? 'has-error' : '' }}">
                                                {!! Form::label('Codigo DSM:') !!}
                                                {!! Form::text('codigo', old('codigo'), ['class'=>'form-control', 'placeholder'=>'Codigo DSM']) !!}
                                                <span class="text-danger">{{ $errors->first('codigo') }}</span>
                                            </div>

                                            <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
                                                {!! Form::label('Trastorno:') !!}
                                                {!! Form::select('padre_id',$allCategories, old('padre_id'), ['class'=>'form-control', 'placeholder'=>'Seleccione Categoria']) !!}
                                                <span class="text-danger">{{ $errors->first('padre_id') }}</span>
                                            </div>

                                            <div class="form-group">
                                                <button class="btn btn-success">Adicionar Nuevo</button>
                                            </div>

                                            {!! Form::close() !!} -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! $saludDsmvs->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    <link href="/css/treeviewDsmv.css" rel="stylesheet">
    <!-- codigo original que funciono -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- codigo de bootstrap nuevo a probar -->
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet"/> --}}


@stop

@section('js')
    <!-- codigo original que funciono -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/js/treeviewDsmv.js"></script>

    <!-- codigo de bootstrap nuevo a probar -->
    {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js"></script>  --}}

    <script>
        let opcion = document.getElementById('tree1').value;
        console.log(opcion);
    </script>
@stop


