<?php


Route::get('/', function () {
    return view('welcome');
});



Route::get('productos/index', 'ProductoController@index');
Route::get('productos/create', 'ProductoController@create');
Route::post('productos/store', 'ProductoController@store');
Route::get('productos/edit/{code}', 'ProductoController@edit');
Route::put('productos/update/{code}', 'ProductoController@update');
Route::get('productos/destroy/{code}', 'ProductoController@destroy');


Route::get('familias/index', 'FamiliaController@index');
Route::get('familias/create', 'FamiliaController@create');
Route::post('familias/store', 'FamiliaController@store');
Route::get('familias/edit/{id}', 'FamiliaController@edit');
Route::put('familias/update/{id}', 'FamiliaController@update');
Route::get('familias/destroy/{id}', 'FamiliaController@destroy');


Route::get('proveedores/index', 'ProveedorController@index');
Route::get('proveedores/create', 'ProveedorController@create');
Route::post('proveedores/store', 'ProveedorController@store');
Route::get('proveedores/edit/{id}', 'ProveedorController@edit');
Route::put('proveedores/update/{id}', 'ProveedorController@update');
Route::get('proveedores/destroy/{id}', 'ProveedorController@destroy');


Route::get('combos/index', 'CombosController@index');