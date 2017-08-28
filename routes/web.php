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
    return view('auth.login');
});

Auth::routes();
Route::group(['prefix'=>'clients','middleware'=> 'auth.checkrole'],function(){
    Route::get('', ['as' => 'clients.index','uses'=>'ClientsController@index']);
    Route::get('create', ['as' => 'clients.create','uses'=>'ClientsController@create']);
    Route::get('edit/{id}', ['as' => 'clients.edit','uses'=>'ClientsController@edit']);
    Route::get('active/{id}', ['as' => 'clients.active','uses'=>'ClientsController@active']);
    Route::get('desactive/{id}', ['as' => 'clients.desactive','uses'=>'ClientsController@desactive']);
    Route::post('update/{id}', ['as' => 'clients.update','uses'=>'ClientsController@update']);
    Route::post('store', ['as' => 'clients.store','uses'=>'ClientsController@store']);
    Route::get('api/list',['as'=>'clients.list', 'uses'=>'ClientsController@getClients']);
});
Route::get('/home', 'HomeController@index')->name('home');
