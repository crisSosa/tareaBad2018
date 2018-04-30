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

//Ruta para index

Route::get('/inicio',function(){
	return view('layoutBase');
});

Route::get('/inicio2',function(){
	return view('importador');
});

//Ruta para Importadores
//agregar importador

Route::get('/registroImp','Importador@agregarImportador');




