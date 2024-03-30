<?php

use Illuminate\Support\Facades\DB;

//echo "Ojala cargiue los contratos"


/* //Comprobamos que el valor no venga vacío
if(isset($_POST['funcion']) && !empty($_POST['funcion'])) {
    $funcion = $_POST['funcion'];
    dd($funcion);

    //En función del parámetro que nos llegue ejecutamos una función u otra
    switch($funcion) {
        case 'busContra':                           //ajax para buscar contrato de una eps en histocab
            $eps -> $_POST["ideps"];
            buscaContrato($eps);
            break;

        case 'funcion2':
            $b -> accion2();
            break;
    }
}


function update() {
    //query
}

function buscaContrato($epscon){
    $mcontra = DB::table('salud_contratos')->where('id',$epscon)->get();
    dd($mcontra);
    return $mcontra;
}

function fechafinContrato(Request $request){
    $fechainicial = $request->fechini;
    $duracion = $request->durac;

    $fecha = date('Y-m-j', $fechainicial);
    $nuevafecha = strtotime ($fecha.'+$duracion month') ;
    $nuevafecha = date ( 'Y-m-j' , $nuevafecha );

    return $nuevafecha;
}
 */
?>
