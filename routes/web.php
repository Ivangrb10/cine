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

route::resource('categorias', CategoriaController::class);
route::resource('clasificaciones', ClasificacionesController::class);
route::resource('directores', DirectoresController::class);
route::resource('funciones', FuncionesController::class);
route::resource('generos', GenerosController::class);
route::resource('peliculas', PeliculasController::class);
route::resource('reservas', ReservasController::class);
route::resource('salas',SalasController::class);
route::resource('actores', ActoresController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
