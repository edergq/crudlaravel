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

/*
Route::get('/estudiante', function () {
    return view('estudiante.index');
});

Route::get('/estudiante/create', function () {
    return view('estudiante.crear');
});
*/

/*
Route::get('/estudiante', 'App\Http\Controllers\EstudianteController@index');
Route::get('/estudiante/create', 'App\Http\Controllers\EstudianteController@create');
*/





/*
Route::get('/asignaturas', function () {
    return view('asignaturas.index');
});


Route::get('/asignaturas/create', function () {
    return view('asignaturas.crear');
});
*/

/*
Route::get('/asignaturas', 'App\Http\Controllers\AsignaturaController@index');
Route::get('/asignaturas/create', 'App\Http\Controllers\AsignaturaController@create');
*/


Route::resource('asignaturas', 'App\Http\Controllers\AsignaturaController');

Route::resource('estudiantes', 'App\Http\Controllers\EstudianteController');

