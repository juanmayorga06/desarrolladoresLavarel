<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProyectoController;
use App\http\Controllers\DesarrolladorController;

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

// Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos');

// Route::get('/proyectos/insert', [ProyectoController::class, 'create'])->name('insertProyectos');

// Route::post('/proyectos/store', [ProyectoController::class, 'store'])->name('guardarProyecto');

// Route::get('/proyectos/{id}', [ProyectoController::class, 'show'])->name('verProyecto');

Route::resource('proyectos', ProyectoController::class);
Route::resource('desarrolladores', DesarrolladorController::class);
