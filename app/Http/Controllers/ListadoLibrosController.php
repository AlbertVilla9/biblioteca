<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Libro;

class ListadoLibrosController extends Controller
{
    public function welcome() 
    {
        return view('/', [
            'libros' => Libro::latest()->paginate()
        ]);
    }
}