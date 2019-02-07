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

Route::get('/', 'Controller@inicio')->name('/');
Route::get('/actualizar', 'Controller@actualizar')->name('/actualizar');
Route::post('/aniadirUsuario', 'Controller@aniadirUsuario')->name('aniadirUsuario');
Route::post('/actualizarUsuario', 'Controller@actualizarUsuario')->name('actualizarUsuario');
