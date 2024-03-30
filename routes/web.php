<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return view('auth.login');
});

Route::resource('admon-cliente','AdmonClienteController');
Route::resource('admon-concecont','AdmonConcecontController');
Route::resource('maestra-departam','MaestraDepartamController');
Route::resource('maestra-documen','MaestraDocumenController');
Route::resource('maestra-epss','MaestraEpssController');
Route::resource('maestra-especial','MaestraEspecialController');
Route::resource('maestra-estrato','MaestraEstratoController');
Route::resource('maestra-medico','MaestraMedicoController');
Route::resource('maestra-municipio','MaestraMunicipioController');
Route::resource('maestra-ocupac','MaestraOcupacController');
Route::resource('maestra-tipovinc','MaestraTipovincController');
Route::resource('salud-admision','SaludAdmisionController');
Route::resource('salud-cie','SaludCieController');
Route::resource('salud-contraser','SaludContraserController');
Route::resource('salud-contrato','SaludContratoController');
Route::resource('salud-cupscapi','SaludCupscapiController');
Route::resource('salud-cupss','SaludCupssController');
Route::resource('salud-dsmv','SaludDsmvController');
Route::resource('salud-hisanexo','SaludHisanexoController');
Route::resource('salud-hiselem','SaludHiselemController');
Route::resource('salud-hisestru','SaludHisestruController');
Route::resource('salud-hisfami','SaludHisfamiController');
Route::resource('salud-hisgeneral','SaludHisgeneralController');
Route::resource('salud-hisplanti','SaludHisplantiController');
Route::resource('salud-hissegu','SaludHisseguController');
Route::resource('salud-histipo','SaludHistipoController');
Route::resource('salud-histocab','SaludHistocabController');
Route::resource('salud-manuale','SaludManualeController');
Route::resource('salud-tarifa','SaludTarifaController');
Route::resource('sieparam','SieparamController');

/*
|--------------------------------------------------------------------------
| Rutas para consultas ajax
|--------------------------------------------------------------------------
|
| Archivo ajaxConsulta tiene las siguientes funciones:
| cargacontra = consulta los contratos por eps
|
*/
//Rutas para manejo de tree-view
Route::get('dsmv-tree-view',['uses'=>'SaludDsmvController@manageDsmv']);
Route::post('add-dsmv',['as'=>'add.dsmv','uses'=>'SaludDsmvController@addDsmv']);


//Rutas de consultas AJAX
Route::get('cargaContra', 'AjaxController@ajaxRequest');
Route::post('cargaContra', 'AjaxController@cargaContraPost')->name('cargaContra.post');
Route::post('datosPaciente', 'AjaxController@datosPacientePost')->name('datosPaciente.post');
Route::get('cargaElemento', 'AjaxController@cargaElementoPost')->name('cargaElemento.post');
Route::get('validaOrden', 'AjaxController@validaOrdenPost')->name('validaOrden.post');
Route::post('cargaDepartamento', 'AjaxController@cargaDepartamentoPost')->name('cargaDepartamento.post');
Route::get('cargaItem', 'AjaxController@cargaItemPost')->name('cargaItem.post');
Route::get('cargaHistoria', 'AjaxController@cargaHistoriaPost')->name('cargaHitoria.post');
Route::get('cargamiembro', 'SaludHisfamiController@cargamiembro')->name('salud-hisfami.cargamiembro');
Route::get('cargafamiliar', 'SaludHisfamiController@cargafamiliar')->name('salud-hisfami.cargafamiliar');
Route::get('update', 'SaludHisfamiController@update')->name('salud-hisfami.update');
Route::post('update', 'AjaxController@getDiagnostico')->name('getDiagnostico.post');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


