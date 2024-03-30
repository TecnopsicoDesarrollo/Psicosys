        <div class="panel panel-success">
            <div class="panel-heading">Resultado de busqueda</div>
                <div class="panel-body">
                    <div class='table-responsive'>
                        <table class='table table-bordered table-hover'>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Contrato</th>
                                    <th>Plan</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datacontraser as $contrato)
                                <tr>
                                    <td>{{$contrato['idcontra']}}</td>
                                    <td>{{$contrato['plan']}}</td>
                                    <td>{{$contrato['nombre']}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
<!--                 <div class="panel-footer">
                    <a href="{{url('noticia/buscar')}}" class="btn btn-warning">Reiniciar busqueda</a>
                </div> -->
            </div>
        </div>