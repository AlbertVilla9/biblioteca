<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Libro;

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

Route::get('/crearLibros', function () {
    return view('crearLibros');
})->middleware(['auth'])->name('crearlibros');

Route::get('/creaLibro', [\App\Http\Controllers\CrearLibroController::class, 'crear'])->middleware(['auth'])->name('crearLibro');

Route::get('/detalles', [\App\Http\Controllers\DetallesController::class, 'detalles'])->middleware(['auth'])->name('detalles');


require __DIR__.'/auth.php';
