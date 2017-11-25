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
Route::post('store_chofer','ChoferController@store');

