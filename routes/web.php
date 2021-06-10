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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/Welcome',[\App\Http\Controllers\PaginaController::class,'Welc'])->name('welcome');
Route::get('home/Caracteristicas',[\App\Http\Controllers\PaginaController::class,'Caracteris'])->name('Caracteristicas');
Route::get('home/Ventajas',[\App\Http\Controllers\PaginaController::class,'ventaj'])->name('Ventajas');



