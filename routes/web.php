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

Route::view('/welcome', "welcome") -> name('welcome');
Route::post('/validar-registro', 'App\Http\Controllers\LoginController@register')->name('validar-registro');
Route::post('/inicia-sesion', 'App\Http\Controllers\LoginController@login')->name('inicia-sesion');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

Route::get('/menu', 'App\Http\Controllers\MenuController@index') -> name('menu');
Route::view('/canasta', "canasta") -> name('canasta');
