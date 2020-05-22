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
    return view('auth/login');
});

Route::get('/estudiosmore', function(){
    return view('auth/estudiosmore');
});

Route::get('/empty', function(){
    return view('auth/empty');
});

Route::get('/estudiosmore2', function(){
    return view('auth/more2');
});


Route::get('/save', function(){
    return view('auth/save');
});


Route::get('/iniciar', function(){
    return view('auth/iniciar');
});

//ajax
Route::get('ajaxRequest', 'LoginController@ajaxRequest');
Route::post('ajaxRequest', 'LoginController@ajaxRequestPost');

//Routes BD
Route::get('/estadoCivil', 'EstadoCivilController@index');
Route::get('/estadoCivil/registrar','EstadoCivilController@store');
Route::get('/genero', 'GeneroController@index');
Route::get('nivelInteres', 'NivelInteresController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
