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

Route::get ('/calculadora', '\App\Http\Controllers\Calculadoracontroller@calculadora');

Route::get ('/soma', '\App\Http\Controllers\CalculadoraController@soma')->name('carregarSoma');
Route::post ('/calcular-soma', '\App\Http\Controllers\CalculadoraController@calcularSoma')->name('soma');

Route::get ('/divide', '\App\Http\Controllers\CalculadoraController@divide')->name('carregarDivide');
Route::post ('/calcular-divide', '\App\Http\Controllers\CalculadoraController@calcularDivide')->name('divide');

Route::get ('/sub', '\App\Http\Controllers\CalculadoraController@sub')->name('carregarSub');
Route::post ('/calcular-sub', '\App\Http\Controllers\CalculadoraController@calcularSub')->name('sub');

Route::get ('/multi', '\App\Http\Controllers\CalculadoraController@multi')->name('carregarMulti');
Route::post ('/calcular-multi', '\App\Http\Controllers\CalculadoraController@calcularMulti')->name('multi');

