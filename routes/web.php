<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuardiaController;
use App\Http\Controllers\ProfesoreController;
use App\Http\Controllers\ZonaController;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/guardias', [GuardiaController::class, 'index'])->name('guardias.index');
// Route::post('/mesGuardia', [GuardiaController::class, 'mesGuardia'])->name('mesGuardia');
Route::match(['get', 'post'], '/guardias', [GuardiaController::class, 'index'])->name('guardias.index');


Route::post('/guardias/generarRotaciones', [GuardiaController::class, 'generarRotaciones'])->name('generar.rotaciones');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/profesores', ProfesoreController::class);

Route::resource( '/zonas', ZonaController::class);

Route::resource('/guardias', GuardiaController::class);
