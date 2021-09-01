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

Route::get('/', 'MarcadoController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index');

Route::resource('trabajador', 'TrabajadorController');

Route::resource('usuarios', 'UsuarioController');

Route::resource('detalletrabajador', 'detalleController');

Route::resource('vacaciones', 'vacacionesController');

Route::group(['midleware'=>['web']],function(){
    Route::resource('marcado', 'MarcadoController');
});


Route::resource('horario', 'HorarioController');