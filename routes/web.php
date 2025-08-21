<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\HistorialController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('pacientes', PacientesController::class);
Route::resource('citas', CitasController::class);
Route::resource('historial', HistorialController::class);

Route::get('/pacientes/show', [PacientesController::class, 'showAll'])->name('pacientes.showAll');
Route::get('/citas/show', [CitasController::class, 'show'])->name('citas.showAll');
Route::get('/historial/show', [HistorialController::class, 'show'])->name('historial.showAll');

Route::get('/pacientes/{id}/edit', [PacientesController::class, 'edit'])->name('pacientes.edit');
Route::get('/citas/{id}/edit', [CitasController::class, 'edit'])->name('citas.edit');
Route::get('/historial/{id}/edit', [HistorialController::class, 'edit'])->name('historial.edit');
