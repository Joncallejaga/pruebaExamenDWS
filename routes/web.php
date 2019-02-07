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

Route::get('/', function(){
    return redirect('login');
})->name('/');
    Route::get('/home', 'Controller@inicio')->name('/home');
Route::get('/actualizar', 'Controller@actualizar')->name('/actualizar');
Route::get('/borrar', 'Controller@borrar')->name('/borrar');
Route::post('/aniadirUsuario', 'Controller@aniadirUsuario')->name('aniadirUsuario');
Route::post('/actualizarAlumno', 'Controller@actualizarAlumno')->name('actualizarAlumno');
Route::post('/borrarUsuario', 'Controller@borrarUsuario')->name('borrarUsuario');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');