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

Route::get('/', 'ManagerController@index');

Route::get('/painel','PainelController@index');

Route::get('/usuarios','UserController@index');
Route::get('/usuarios/{user}','UserController@show');
Route::get('/usuarios/{user}/edit','UserController@edit');


Route::get('/funcionários','FuncioController@index');
Route::get('/funcionários/{user}','FuncioController@show');
Route::get('/funcionários/{user}/edit','FuncioController@edit');

Route::get('/cargos','CargoController@index');
Route::get('/cargos/{cargo}','CargoController@show');
Route::get('/cargos/{cargo}/edit','CargoController@edit');


Route::get('/departamentos','DepartController@index');
Route::get('/departamentos/{dep}','DepartController@show');
Route::get('/departamentos/{dep}/edit','DepartController@edit');
