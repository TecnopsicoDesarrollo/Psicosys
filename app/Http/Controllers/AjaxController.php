<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\SaludCie;

class AjaxController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function ajaxRequest()
    {
        return view('ajaxRequest');
    }


    /**
     * Funcion que carga los contratos de una entidad de salud - Usado en salud-contrato.create
     */
    public function cargaContraPost(Request $request)
    {
        if($request->ajax()){
            $epscon = $request->id;
            $mcontra = DB::table('salud_contratos')->where('id',$epscon)->get();

            foreach($mcontra as $pa)
            {
             $output= '
                <tr>
                <td>'.$pa->id.'</td>
                <td>'.$pa->idcontra.'</td>
                <td>'.$pa->plan.'</td>
                <td>'.$pa->nombre.'</td>
                </tr>
             ';
            }

            $data = array(
                 'table_data'=> $output
            );

            echo json_encode($data);
        }
    }

    /**
     * Funcion que carga los datos de cabecera de un paciente. Usado salud-hisgeneral.create
     */
    public function datosPacientePost(Request $request)
    {
        if($request->ajax()){
            $paciente = $request->id;
            $data = DB::table('salud_histocabs')->where('no_identi',$paciente)->get();

            echo json_encode($data);
        }
    }

    /**
     * Funcion que carga los datos de un elemento de historia clinica. Usado salud-hisestru.create
     */
    public function cargaElementoPost(Request $request)
    {
        if($request->ajax()){
            //cargamos el select de hiselem que es base para los otros procesos.
            $vacio = array();
            $item = (int) $request->id;
            $data = DB::table('salud_hiselem')->where('id',$item)->get();
            $NomCampoElemento = $data[0]->cm_nom;

            //selecciono los datos cargados en la estructura de la historia
            $dataestru = DB::table('salud_hisestru')
                    ->join('salud_hiselem', 'salud_hisestru.idcodele', '=', 'salud_hiselem.id')
                    ->select('salud_hisestru.*', 'salud_hiselem.cm_nom', 'salud_hiselem.codele')
                    ->get();

            $xOk = false;
            if(count($dataestru) > 0){
                //valido que el codigo de elemento no este duplicado
                $c = count($dataestru);
                for( $i=0;$i<$c;$i++ )
                {
                    $campoEstru = $dataestru[$i]->idcodele;
                    $nomcampoEstru = $dataestru[$i]->cm_nom;

                    $validacion[]= [
                        'hisestru-idelem' => $campoEstru,
                        'elemento-seleccionado' => $item,
                        'hisestru-nombreCampo' => $nomcampoEstru,
                        'elemento-nombre' => $NomCampoElemento
                    ];

                    if($item === $campoEstru){
                        $xOk = true;
                    }

                    //valido que el campo cm_nom no este duplicado en la estructura
                    if($NomCampoElemento === $nomcampoEstru){
                        $xOk = true;
                    }
                }
            }

            if($xOk === true){
                echo json_encode($vacio);
            } else{
                echo json_encode($data);
            }
        }
    }

    /**
     * Funcion que valida si existe el orden o no. Usado salud-hisestru.create
     */
    public function validaOrdenPost(Request $request)
    {
        if($request->ajax()){
            $item = $request->id;
            $data1 = DB::table('salud_hisestru')->where('orden',$item)->get();

            echo json_encode($data1);
        }
    }

    /**
     * Funcion que carga los datos de un departamento - Usado en maestra_municipio.create
     */
    public function cargaDepartamentoPost(Request $request)
    {
        if($request->ajax()){
            $iddpto = $request->id;
            $mcontra = DB::table('maestra_departams')->where('id',$iddpto)->get();

            echo json_encode($mcontra);
        }
    }

    /**
     * Funcion que carga los items de la historia clinica. Usado salud-hisgeneral.create
     */
    public function cargaItemPost(Request $request)
    {
        if($request->ajax()){
            //selecciono los datos cargados en la estructura de la historia
            $dataestru = DB::table('salud_hisestru')
                    ->join('salud_hiselem', 'salud_hisestru.idcodele', '=', 'salud_hiselem.id')
                    ->select('salud_hisestru.*', 'salud_hiselem.cm_nom', 'salud_hiselem.codele', 'salud_hiselem.elemento')
                    ->get();

            echo json_encode($dataestru);
        }
    }

    /**
     * Funcion que carga la informacion de la historia clinica, de acuerdo a su estructura. Usado salud-hisgeneral.create
     */
    public function cargaHistoriaPost(Request $request)
    {
        if($request->ajax()){
            //cargo la estructura de la historia clinica
            $dataestru = DB::table('salud_hisestru')
                    ->join('salud_hiselem', 'salud_hisestru.idcodele', '=', 'salud_hiselem.id')
                    ->select('salud_hisestru.*', 'salud_hiselem.cm_nom', 'salud_hiselem.codele', 'salud_hiselem.elemento')
                    ->orderby('salud_hisestru.orden')
                    ->get();

            //cargo la informacion del paciente que esta en su historia clinica
            $paciente = $request->id;
            $datahisto = DB::table('salud_hisgeneral')
                    ->join('salud_histocabs', 'salud_hisgeneral.idhisto', '=', 'salud_histocabs.id')
                    ->where('idhisto',$paciente)
                    ->select('salud_hisgeneral.*', 'salud_histocabs.nomhisto')
                    ->get();

            $mensaje = '';
            foreach ($datahisto as $hisdata){
                $fecha = $hisdata->updated_at;
                $fec1 = substr($fecha,0,10);
                $hor1 = substr($fecha,11,5);
                $mensaje = $mensaje.'*** Fecha de atención: '.$fec1.'   Hora de atención: '.$hor1;

                //cargo nombre del pscologo
                $psico = $hisdata->idmedico;
                $dataprof = DB::table('maestra_medicos')
                    ->join('maestra_especial', 'maestra_medicos.idEspecial', '=', 'maestra_especial.id')
                    ->where('maestra_medicos.id',$psico)
                    ->select('maestra_medicos.*','maestra_especial.especiali')
                    ->get();

                foreach ($dataprof as $profe){
                    if ($profe->nombre === ''){
                        $mensaje = $mensaje.'*** Profesional que atiende: No hallado'.chr(13);
                    } else {
                        $mensaje = $mensaje.'*** Profesional que atiende: '.$profe->nombre.'   Especialidad: '.$profe->especiali.chr(13);
                    }
                }

                //cargo numero de admision


                //cargo la estructura de historia
                foreach ($dataestru as $estru){
                    $campo = strtolower($estru->cm_nom);
                    $elemento = $estru->elemento;

                    switch ($campo) {
                        case "moting":
                            $textcampo = $hisdata->moting;
                            break;
                        case "enferact":
                            $textcampo = $hisdata->enferact;
                            break;
                        case "antefam":
                            $textcampo = $hisdata->antefam;
                            break;
                        case "anteper":
                            $textcampo = $hisdata->anteper;
                            break;
                        case "alergia":
                            $textcampo = $hisdata->alergia;
                            break;
                        case "tratam":
                            $textcampo = $hisdata->tratam;
                            break;
                        case "revsist":
                            $textcampo = $hisdata->revsist;
                            break;
                        case "exafisg":
                            $textcampo = $hisdata->exafisg;
                            break;
                        case "examen":
                            $textcampo = $hisdata->examen;
                            break;
                        case "impdiaa":
                            $textcampo = $hisdata->impdiaa;
                            break;
                        case "tratamb":
                            $textcampo = $hisdata->tratamb;
                            break;
                        case "evoamb":
                            $textcampo = $hisdata->evoamb;
                            break;
                        case "trathos":
                            $textcampo = $hisdata->trathos;
                            break;
                        case "evohos":
                            $textcampo = $hisdata->evohos;
                            break;
                        case "tramedg":
                            $textcampo = $hisdata->tramedg;
                            break;
                        case "evomedg":
                            $textcampo = $hisdata->evomedg;
                            break;
                        case "apreper":
                            $textcampo = $hisdata->apreper;
                            break;
                        case "evoenfe":
                            $textcampo = $hisdata->evoenfe;
                            break;
                        case "evoterocu":
                            $textcampo = $hisdata->evoterocu;
                            break;
                        case "resum":
                            $textcampo = $hisdata->resum;
                            break;
                        case "concprof":
                            $textcampo = $hisdata->concprof;
                            break;
                        case "antepef":
                            $textcampo = $hisdata->antepef;
                            break;
                        case "valsicam":
                            $textcampo = $hisdata->valsicam;
                            break;
                        case "valsicho":
                            $textcampo = $hisdata->valsicho;
                            break;
                        case "reapoyo":
                            $textcampo = $hisdata->reapoyo;
                            break;
                        case "evsocial":
                            $textcampo = $hisdata->evsocial;
                            break;
                        case "ningre":
                            $textcampo = $hisdata->ningre;
                            break;
                        case "evohosdia":
                            $textcampo = $hisdata->evohosdia;
                            break;
                        case "laborat":
                            $textcampo = $hisdata->laborat;
                            break;
                        case "planman":
                            $textcampo = $hisdata->planman;
                            break;
                        case "planegr":
                            $textcampo = $hisdata->planegr;
                            break;
                    }

                    $mensaje = $mensaje.'--'.$elemento.'--'.chr(13);
                    $mensaje = $mensaje.chr(9).$textcampo.chr(13);
                    $mensaje = $mensaje.chr(13);
                }

            }

            echo json_encode($mensaje);
        }
    }

    // Fetch records
    public function getDiagnostico(Request $request){

/*         if($request->ajax()){
            $search = $request->search;

            if($search == ''){
                $cies = SaludCie::orderby('nombre','asc')->select('id','nombre')->limit(5)->get();
            }else{
                //$cies = SaludCie::orderby('nombre','asc')->select('id','nombre')->where('nombre', 'like', '%' .$search . '%')->limit(5)->get();
                $cies = SaludCie::orderby('nombre','asc')->select('id','nombre')->where('nombre', 'like', '%' .$search . '%')->get();
            }

            $response = array();
            foreach($cies as $cie){
                $response[] = array(
                        "id"=>$cie->id,
                        "text"=>$cie->nombre
                );
            }
            return response()->json($response);
        } */

        $cies = [];

        if($request->has('q')){
            $search = $request->q;
            $cies =SaludCie::select("id", "nombre")
            		->where('nombre', 'LIKE', "%$search%")
            		->get();
        }
        return response()->json($cies);
    }



}
