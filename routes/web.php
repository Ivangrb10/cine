<?php
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClasificacionesController;
use App\Http\Controllers\DirectoresController;
use App\Http\Controllers\FuncionesController;
use App\Http\Controllers\GenerosController;
use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\SalasController;
use App\Http\Controllers\ActoresController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::resource('categorias', CategoriaController::class);
Route::resource('clasificaciones', ClasificacionesController::class);
Route::resource('directores', DirectoresController::class);
Route::resource('funciones', FuncionesController::class);
Route::resource('generos', GenerosController::class);
Route::resource('peliculas', PeliculasController::class);
Route::resource('reservas', ReservasController::class);
Route::resource('salas', SalasController::class);
Route::resource('actores', ActoresController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('categorias', CategoriaController::class);
Route::get('/categorias/{id}', [CategoriaController::class, 'show'])->name('categorias.show');
Route::get('/directores/{id}', [DirectoresController::class, 'show'])->name('directores.show');
Route::get('/actores/{id}', [ActoresController::class, 'show'])->name('actores.show');
Route::get('/generos/{id}', [GenerosController::class, 'show'])->name('generos.show');
Route::get('/salas/{id}', [SalasController::class, 'show'])->name('salas.show');