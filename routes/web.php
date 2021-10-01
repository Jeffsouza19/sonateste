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
    return view('welcome');
});

Route::prefix('clientes')->group(function(){

    Route::get('/', 'ClientesController@index')->name('clientes.index');

    Route::get('add','ClientesController@add')->name('clientes.add');
    Route::post('add','ClientesController@addaction');

    Route::get('edit/{id}','ClientesController@edit')->name('clientes.edit');
    Route::post('edit/{id}','ClientesController@editaction');

    Route::get('del/{id}','ClientesController@del')->name('clientes.del');
    

});
