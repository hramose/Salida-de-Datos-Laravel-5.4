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

/*
| Bloque de rutas del frontend, el usuario al entrar al home 
| encontrará un listado de productos y en el podrá hacer
| clic y ver el detalle, tenemos la ruta / y productos
*/
Route::get('/', 'Frontend\PageController@index')->name('home');
Route::get('/productos/{id}', 'Frontend\PageController@product')->name('product');

// Function de laravel para el sistema de registro
Auth::routes();

//Backend
Route::get('/home', 'Backend\HomeController@index');

Route::get('/listado-productos', 'Backend\ProductController@index')->name('listProducts');
Route::get('/listado-pdf', 'Backend\ProductController@pdf')->name('pdf');
Route::get('/listado-xls', 'Backend\ProductController@xls')->name('xls');