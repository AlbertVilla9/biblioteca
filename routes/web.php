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

Route::get('/index', function() {

    $libros = Libro::paginate(10);
    return view('index')->with('libros', $libros);

})->middleware(['auth'])->name('index');

Route::get('/dashboard', function () {

    return view('dashboard');

})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
