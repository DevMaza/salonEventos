<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\SerivicioController;
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

Auth::routes();
Route::resource('eventos', App\Http\Controllers\EventoController::class)->middleware('auth');
Route::resource('paquetes', App\Http\Controllers\PaqueteController::class)->middleware('auth');
Route::resource('serivicios', App\Http\Controllers\SerivicioController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::view('about/about', 'about')->name('about');

