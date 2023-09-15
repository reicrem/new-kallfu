<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\BodegasController;
use App\Http\Controllers\ArticulosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [LoginController::class, 'show']);
Route::post('/', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/dash', [DashController::class, 'index']);

Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/bodegas', [BodegasController::class, 'index']);

Route::get('/vbodega/{id}', function () {
    return view('bodegas.bodegas.edit','BodegasController@ver_bodega');
});

Route::get('/vbodega/{id}', [BodegasController::class, 'ver_bodega']);

/*
Route::get('/mod_bodega/{id}', function () {
    return view('bodegas.bodegas.edit','BodegasController@ver_bodega');
});
*/

Route::get('/mod_bodega', [BodegasController::class, 'mod_bodega'])->name('bodega.mod');

Route::post('/mod_bodega', [BodegasController::class, 'mod_bodega'])->name('bodega.mod');

//Route::post('/mod_bodega', 'BodegasController@mod_bodega')->name('bodega.mod');

Route::get('/articulos', [ArticulosController::class, 'index']);
