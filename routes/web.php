<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Libro;
use \App\Models\Categoria;
use \App\Models\Reservas;

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

    $libros = Libro::paginate(10);
    return view('welcome')->with('libros', $libros);

})->name('home');

Route::get('/dashboard', function () {

    $libros = Libro::paginate(10);
    return view('dashboard')->with('libros', $libros);

})->middleware(['auth'])->name('dashboard');

Route::get('/administrar', function () {

    $libros = Libro::paginate(10);
    return view('administrar')->with('libros', $libros);

})->middleware(['auth'])->name('administrar');

Route::get('/categorias', function () {

    $categorias = Categoria::paginate(10);
    return view('categorias')->with('categorias', $categorias);

})->middleware(['auth'])->name('categorias');

Route::get('/crearLibros', function () {
    $categorias = Categoria::paginate();
    return view('crearLibros')->with('categorias', $categorias);
})->middleware(['auth'])->name('crearlibros');

Route::get('/librosDeCategoria', [\App\Http\Controllers\CategoriasController::class, 'categoria'])->middleware(['auth'])->name('librosDeCategoria');

Route::get('/creaLibro', [\App\Http\Controllers\CrearLibroController::class, 'crear'])->middleware(['auth'])->name('crearLibro');

Route::get('/modificar', [\App\Http\Controllers\AdministrarController::class, 'modificar'])->middleware(['auth'])->name('modificar');

Route::get('/eliminar', [\App\Http\Controllers\AdministrarController::class, 'eliminar'])->middleware(['auth'])->name('eliminar');

Route::get('/reservar', [\App\Http\Controllers\ReservasController::class, 'reservar'])->middleware(['auth'])->name('reservarLibro');

Route::get('/detalles', [\App\Http\Controllers\DetallesController::class, 'detalles'])->middleware(['auth'])->name('detalles');

Route::get('/detallesAD', [\App\Http\Controllers\DetallesController::class, 'detallesAD'])->middleware(['auth'])->name('detallesAD');

Route::get('/reserva',[\App\Http\Controllers\ReservasController::class, 'enseñar'])->middleware(['auth'])->name('reservas');

require __DIR__.'/auth.php';
