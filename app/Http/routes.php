<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function(){
    return view('home');
});
Route::auth();
//Route::group(['middleware' => 'MD_admin'], function (){
Route::get('/cliente', [
    'uses' => 'ClientesController@index', 'as' => 'index', 'middleware' => 'auth'
]);
Route::get('/crecimientos', [
    'uses' => 'CrecimientosController@index', 'as' => 'index', 'middleware' => 'auth'
]);
Route::get('/financiero', [
    'uses' => 'FinancierosController@index', 'as' => 'index', 'middleware' => 'auth'
]);
Route::get('/home', 'HomeController@index');
Route::get('/salidas', [
    'uses' => 'ErroresController@index', 'as' => 'index', 'middleware' => 'auth'
]);
Route::post('/home', [
    'uses' => 'ProcesosController@createProcesos', 'as' => 'create.proceso' ,'middleware' => 'auth'
]);
Route::post('/financiero', [
    'uses' => 'FinancierosController@createFinancieros', 'as' => 'create.financiero', 'middleware' => 'auth'
]);
Route::post('/salidas', [
    'uses' => 'ErroresController@createErrores', 'as' => 'create.error' ,'middleware' => 'auth'
]);
Route::post('/cliente', [
    'uses' => 'ClientesController@createClientes', 'as' => 'create.cliente','middleware' => 'auth'
]);
Route::post('/crecimientos', [
    'uses' => 'CrecimientosController@createCrecimientos', 'as' => 'create.crecimiento', 'middleware' => 'auth'
]);
Route::get('/ViewClientes',function(){
    return view('ViewClientes');
});
Route::get('/Reportes',function(){
    return view('reportes.tablero');
});
Route::get('/ViewClientes',[
    'uses'=>'ClientesController@getClientes','middleware' => 'auth'
]);
Route::get('/ViewFinanciero',function(){
    return view('ViewFinanciero');
});
Route::get('/ViewFinanciero',[
    'uses'=>'FinancierosController@getFinancieros','middleware' => 'auth'
]);
Route::get('/ViewCrecimiento',function(){
    return view('ViewCrecimiento');
});
Route::get('/ViewCrecimiento',[
    'uses'=>'CrecimientosController@getCrecimientos', 'middleware' => 'auth'
]);
Route::get('/ViewHome',function(){
    return view('ViewHome');
});
Route::get('/ViewHome',[
   'uses'=>'ProcesosController@getProcesos', 'middleware' => 'auth'
]);
Route::get('/ViewSalida',function(){
   return view('ViewSalida');
});
Route::get('ViewSalida',[
   'uses'=> 'ErroresController@getSalidas', 'middleware' => 'auth'
]);
Route::get('/home',[
    'uses'=>'ProcesosController@getpuestosProcesos'
]);
Route::get('/crecimientos',[
    'uses'=>'CrecimientosController@getpuestosCrecimientos'
]);
Route::get('/financiero',[
   'uses'=>'FinancierosController@getpuestosFinancieros'
]);
Route::get('/cliente',[
   'uses'=>'ClientesController@getpuestosClientes'
]);
Route::get('/ViewCrecimientos',[
    'uses'=>'CrecimientosController@updateStatus','as'=>'update.status','middleware' => 'auth'
    ]);
Route::get('/update',[
   'uses'=>'UpdateController@viewUpdateCrecimientos','as'=>'view.update','middleware' => 'auth'
]);
Route::get('/ViewFinancieros',[
    'uses'=>'FinancierosController@updateStatus','as'=>'update.status.financiero','middleware' => 'auth'
    ]);
Route::get('/updatesf',[
    'uses'=>'UpdateController@viewUpdateFinancieros','as'=>'view.update.financiero','middleware' => 'auth'
]);
Route::get('ViewsHomes,',[
    'uses'=>'ProcesosController@updateStatus','as'=>'update.status.proceso','middleware' => 'auth'
    ]);
Route::get('updatesp',[
   'uses'=>'UpdateController@viewProcesos', 'as'=>'view.update.proceso','middleware' => 'auth'
]);
Route::get('ViewCliente',[
   'uses'=>'ClientesController@updateStatus','as'=> 'update.status.cliente','middleware' => 'auth'
]);
Route::get('updatesc',[
   'uses' => 'UpdateController@viewClientes', 'as'=> 'view.update.cliente','middleware' => 'auth'
]);
Route::post('/updateCrecimiento',[
   'uses'=>'CrecimientosController@CrecimientoUpdate', 'as' =>'update.crecimiento','middleware' => 'auth'
]);
Route::post('/updateClientes',[
    'uses'=>'ClientesController@ClientesUpdate', 'as' =>'update.cliente','middleware' => 'auth'
]);
Route::post('/updateProceso',[
    'uses'=>'ProcesosController@ProcesosUpdate', 'as' =>'update.proceso','middleware' => 'auth'
]);
Route::post('/updateFinanciero',[
    'uses'=>'FinancierosController@FinancierosUpdate', 'as' =>'update.financiero','middleware' => 'auth'
]);
Route::post('updateErrores',[
   'uses'=>'ErroresController@UpdateErrores', 'as' =>'update.error', 'middleware'=>'auth' 
]);
Route::get('/ViewSalidas',[
'uses'=>'ErroresController@updateStatus', 'as'=>'update.status.error', 'middleware'=>'auth'
]);
Route::get('updatese',[
    'uses'=>'UpdateController@viewErrores', 'as'=>'view.update.error','middleware' => 'auth'
 ]);