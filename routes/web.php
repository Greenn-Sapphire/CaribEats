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

Route::get('/', 'App\Http\Controllers\LoginController@index') -> name('login');
Route::get('/registro', 'App\Http\Controllers\LoginController@create');


Route::post('/validar-registro', 'App\Http\Controllers\LoginController@register')->name('validar-registro');
Route::post('/inicia-sesion', 'App\Http\Controllers\LoginController@login')->name('inicia-sesion');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');


Route::resource('productos', 'App\Http\Controllers\ProductoController')-> Middleware('auth');


Route::get('/menu', 'App\Http\Controllers\MenuController@index')-> Middleware('auth')-> name('menu');
Route::get('/cart', 'App\Http\Controllers\MenuController@cart')-> Middleware('auth')->name('cart.index');
Route::post('/add', 'App\Http\Controllers\MenuController@add')->name('cart.store');
Route::post('/update', 'App\Http\Controllers\MenuController@update')->name('cart.update');
Route::post('/remove', 'App\Http\Controllers\MenuController@remove')->name('cart.remove');
Route::post('/clear', 'App\Http\Controllers\MenuController@clear')->name('cart.clear'); 
