<?php

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
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {
	//Route::get('app','AppController@index');
	
	Route::post('/logeo',array('as'=>'login', 'uses'=>'LoginController@login'));
	
	Route::get('/logout','LoginController@logout');
	
	Route::get('/', function () {
		if (Auth::guest()){
			return view('welcome'); 
		}else{
			return Redirect('app');
		 }
	});

});


Route::get('app', function(){
	return view('Home');
});


Route::get('carreras','CarreraController@index');

Route::get('choferes','ChoferController@index');
Route::get('get_choferes','ChoferController@choferes');
Route::post('store_chofer','ChoferController@store');
Route::get('delete_chofer/{id}','ChoferController@delete_chofer');
Route::get('activar_chofer/{id}','ChoferController@activar_chofer');
Route::get('view_tabla','ChoferController@view_tabla');

route::get('get_chofer','ChoferController@GET_CHOFERES');

Route::get('vehiculos','vehiculocontroller@index');
route::get('get_vehiculos','vehiculocontroller@vehiculos');
Route::post('store_vehiculo','vehiculocontroller@store');
Route::get('delete_vehiculo/{id}','vehiculocontroller@delete_vehiculo');
Route::get('activar_vehiculo/{id}','vehiculocontroller@activar_vehiculo');
Route::get('view_tablav','vehiculocontroller@view_tabla');


route::get('clientes','clienteController@index');
route::post('store_clientes','clienteController@store');

